<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\book;

use Carbon\Carbon;


class bookController extends Controller

{

        public function __construct(){

            $this->middleware('auth')->except(['index','show']);
        }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = Book::latest()
        ->filter(request(['month','year']))
        ->get();

    

        $archives = book::selectRaw('year(date_published) year,monthname(date_published) month,count(*) published')
        ->groupBy('year','month')
        ->orderByRaw('min(date_published) desc')
        ->get()
        ->toArray();

        return view('index', compact('books','archives'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $this->validate(request(),[

            'title' => 'required',
            'author' => 'required',
            'date_published' => 'required|date|after:yesterday'



        ]);


      book::create([

        'title' => request('title'),
        'author' => request('author'),
        //'user_id' => auth()->id(),
        'publisher' => request('publisher'),
        'date_published' => request('date_published'),
        'about' => request('about'),
        'language' => request('language'),
        'category' => request('category'),
        'country_published' => request('country_published')
      ]);

      return redirect()->back()->with('message', 'book added successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(book $book)
    {
      return view('show',compact('book'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
