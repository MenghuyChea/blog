<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Book;
use App\Chief;
use Illuminate\Http\Request;
use App\Food;
use App\Drink;
use App\FeedBack;
class FrontEndController extends Controller
{
    public function index()
    {
        $food= Food::all();
        $drink= Drink::all();
//        $food = DB::table('foods')->where('food_type', 'like', '%breakfast')->limit(6)->get();
        return view('FrontEnd.index',['food'=>$food],['drink'=>$drink]);
    }
    public function menu()
    {
        $food= Food::all();
        $drink= Drink::all();
        return view('FrontEnd.menu',['food'=>$food],['drink'=>$drink]);
    }
    public function contact(){
        return view('FrontEnd.contact');
    }
    public function add(Request $request){
            $this->validate($request, [
                'feedback_name' => 'required',
                'feedback_email' => 'required',
                'description' => 'required'
            ]);
            $feed = new FeedBack;
            $feed->feedback_name = $request->input('feedback_name');
            $feed->feedback_email = $request->input('feedback_email');
            $feed->description = $request->input('description');
            $feed->save();
            return redirect('/contact')->with('info1', 'Send Successfully!');
    }
    public function reservation(){
        return view('FrontEnd.reservation');
    }
    public function book(Request $request)
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
        return redirect('/reservation')->with('info1', 'Book Successfully!');
    }
    public function chief(){
        $chief= Chief::all();
        return view('FrontEnd.chief',['chief'=>$chief]);
    }
    public function shop(){
        $food= Food::all();
        $drink= Drink::all();
        return view('FrontEnd.order_food',['food'=>$food],['drink'=>$drink]);
    }
}
