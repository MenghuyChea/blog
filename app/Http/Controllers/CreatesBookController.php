<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use Illuminate\Support\Carbon;
class CreatesBookController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        $book = Book::whereDate('created_at', Carbon::today())->get();
        return view('book.index',['book'=>$book]);
    }
    public function read($id)
    {
        $book = Book::find($id);
        return view('book.read_book', ['book' => $book]);
    }
    public function create_book()
    {
        return view('book.create_book');
    }

    public function add(Request $request)
    {
        $this->validate($request, [
            'name_book' => 'required',
            'email_book' => 'required',
            'numberphone_book' => 'required',
            'people_book' => 'required',
            'date_book' => 'required',
            'time_book' => 'required'
        ]);
        $book = new Book;
        $book->name_book = $request->input('name_book');
        $book->email_book = $request->input('email_book');
        $book->numberphone_book = $request->input('numberphone_book');
        $book->people_book = $request->input('people_book');
        $book->date_book = $request->input('date_book');
        $book->time_book = $request->input('time_book');
        $book->save();
        return redirect('/book')->with('info1', 'Book saved Successfully!');
    }
    public function update($id)
    {
        $book = Book::find($id);
        return view('book.update_book', ['book' => $book]);
    }

    public function edit(Request $request, $id)
    {
        $this->validate($request, [
            'name_book' => 'required',
            'email_book' => 'required',
            'numberphone_book' => 'required',
            'people_book' => 'required',
            'date_book' => 'required',
            'time_book' => 'required'
        ]);
        $data = array(
            'name_book' => $request->input('name_book'),
            'email_book' => $request->input('email_book'),
            'numberphone_book' =>$request->input('numberphone_book'),
            'people_book' => $request->input('people_book'),
            'date_book' => $request->input('date_book'),
            'time_book' => $request->input('time_book')
        );
        Book::where('id', $id)->update($data);
        return redirect('/book')->with('info1', 'Book updated Successfully!');
    }
    public function delete($id)
    {
        Book::where('id', $id)->delete();
        return redirect('/book')->with('info1', 'Book deleted Successfully!');
    }
}
