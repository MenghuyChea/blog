<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Drink;
class CreatesDrinkController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $drink= Drink::all();
        return view('drink.index',['drink'=>$drink]);
    }

    public function create_drink()
    {
        return view('drink.create_drink');
    }

    public function add(Request $request)
    {
        $this->validate($request, [
            'drink_name' => 'required',
            'drink_price' => 'required',
            'description'=>'required',
            'image'=>'nullable'
        ]);
        $drink = new Drink;
        $drink->drink_name = $request->input('drink_name');
        $drink->drink_price = $request->input('drink_price');
        $drink->description = $request->input('description');
        if($request->hasFile('image'))
        {
            $file = $request->file('image');
            $extension=$file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads/drink/',$filename);
            $drink->image=$filename;
        }else{
            return $request;
            $drink->image='';
        }
        $drink->save();
        return redirect('/drink')->with('info1', 'Drink saved Successfully!');
    }

    public function update($id)
    {
        $drink = Drink::find($id);
        return view('drink.update_drink', ['drink' => $drink]);
    }

    public function edit(Request $request, $id)
    {
        $this->validate($request, [
            'drink_name' => 'required',
            'drink_price' => 'required',
            'description'=>'required'
        ]);
        $data = array(
            'drink_name' => $request->input('drink_name'),
            'drink_price' => $request->input('drink_price'),
            'description'=> $request->input('description'),
        );
        Drink::where('id', $id)->update($data);
        return redirect('/drink')->with('info1', 'Drink updated Successfully!');
    }

    public function read($id)
    {
        $drink = Drink::find($id);
        return view('drink.read_drink', ['drink' => $drink]);
    }

    public function delete($id)
    {
        Drink::where('id', $id)->delete();
        return redirect('/drink')->with('info1', 'Drink deleted Successfully!');
    }
}


