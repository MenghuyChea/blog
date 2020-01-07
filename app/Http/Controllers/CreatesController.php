<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Food;
use Illuminate\Support\Carbon;
class CreatesController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $food= Food::all();
//        $food = Food::Orderby('id', 'asc')->limit(10)->get();
        return view('food.index',['food'=>$food]);
    }
    public function create_food()
    {
        return view('food.create_food');
    }
    public function add(Request $request){
        $this->validate($request,[
                'food_name'=>'required',
                'food_price'=>'required',
                'food_type'=>'required',
                'description'=>'required',
                'image'=>'nullable'
            ]);
        $food =new Food;
        $food->food_name = $request->input('food_name');
        $food->food_price = $request->input('food_price');
        $food->food_type = $request->input('food_type');
        $food->description = $request->input('description');
        if($request->hasFile('image'))
        {
            $file = $request->file('image');
            $extension=$file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads/food/',$filename);
            $food->image=$filename;
        }else{
            return $request;
            $food->image='';
        }
        $food->save();
        return redirect('/food')->with('info','Food saved Successfully!');
    }
    public function update($id)
    {
        $food= Food::find($id);
        return view('food.update',['food'=>$food]);
    }
    public function edit(Request $request,$id)
    {
        $this->validate($request,[
            'food_name'=>'required',
            'food_price'=>'required',
            'food_type'=>'required',
            'description'=>'required'
        ]);
        $data = array(
            'food_name'=> $request->input('food_name'),
            'food_price'=> $request->input('food_price'),
            'food_type'=> $request->input('food_type'),
            'description'=> $request->input('description'),
        );
        Food::where('id',$id)->update($data);
        return redirect('/food')->with('info','Food updated Successfully!');
    }
    public function read($id)
    {
        $food= Food::find($id);
        return view('food.read',['food'=>$food]);
    }
    public function delete($id)
    {
        Food::where('id',$id)->delete();
        return redirect('/food')->with('info','Food deleted Successfully!');
    }
}
