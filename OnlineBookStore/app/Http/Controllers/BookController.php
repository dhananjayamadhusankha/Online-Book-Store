<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Book::latest()->paginate(5);

        return view('index', compact('data'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'book_title'      =>  'required|unique:books|max:255',
            'book_author'     =>  'required',
            'book_cost'       =>  'required'
        ]);

        $book = new Book;

        $book->book_title = $request->book_title;

        $book->book_author = $request->book_author;

        $book->book_cost = $request->book_cost;

        $book->save();

        return redirect()->route('index')->with('success', 'Book Added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $book = Book::findOne($id);
        $book = DB::table('books')->where('id' ,$id)->first();
        // dd($book);
        return view('show', compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $book = DB::table('books')->where('id' ,$id)->first();

        return view('edit', compact('book'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        

        $request->validate([
            'book_title'      =>  'required|max:255',
            'book_author'     =>  'required',
            'book_cost'       =>  'required'
        ]);

        $bookCheck = DB::table('books')->where('id' ,$id)->first();

        if ($bookCheck->book_title == $request-> book_title) {
                $book = Book::find($request->hidden_id);

                $book->book_title = $request->book_title;
                
                $book->book_author = $request->book_author;
        
                $book->book_cost = $request->book_cost;
        
                $book->save();
        
                return redirect()->route('index')->with('success', 'Book Data has been updated successfully');
        }
        else{
            $isBookName = DB::table('books')->where('book_title', $request->book_title)->first();
        
            // dd($isBookName);
    
            if($isBookName){
                // dd('book name already exists');

                return back()->with('fail', 'Book Name already exists')->withInput();
            }
            else{
                $book = Book::find($request->hidden_id);
    
                $book->book_title = $request->book_title;
                
                $book->book_author = $request->book_author;
        
                $book->book_cost = $request->book_cost;
        
                $book->save();
        
                return redirect()->route('index')->with('success', 'Book Data has been updated successfully');
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        DB::table('books')->where('id', $id)->delete();

        return back()->with('success', 'Book Data deleted successfully');
    }
}
