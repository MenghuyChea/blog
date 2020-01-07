<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Chief;
class CreatesChiefController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $chief= Chief::all();
        return view('chief.index',['chief'=>$chief]);
    }
    public function read($id)
    {
        $chief = Chief::find($id);
        return view('chief.read_chief', ['chief' => $chief]);
    }
    public function create_chief()
    {
        return view('chief.create_chief');
    }

    public function add(Request $request)
    {
        $this->validate($request, [
            'name_chief' => 'required',
            'position' => 'required',
            'salary' => 'required',
            'hire_date' => 'required',
            'image'=>'nullable'
        ]);
        $chief = new Chief;
        $chief->name_chief = $request->input('name_chief');
        $chief->position = $request->input('position');
        $chief->salary = $request->input('salary');
        $chief->hire_date = $request->input('hire_date');
        if($request->hasFile('image'))
        {
            $file = $request->file('image');
            $extension=$file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads/chief/',$filename);
            $chief->image=$filename;
        }else{
            return $request;
            $food->image='';
        }
        $chief->save();
        return redirect('/chief')->with('info1', 'chief saved Successfully!');
    }
    public function update($id)
    {
        $chief = Chief::find($id);
        return view('chief.update_chief', ['chief' => $chief]);
    }

    public function edit(Request $request, $id)
    {
        $this->validate($request, [
            'name_chief' => 'required',
            'position' => 'required',
            'salary' => 'required'
        ]);
        $data = array(
            'name_chief' => $request->input('name_chief'),
            'position' => $request->input('position'),
            'salary' =>$request->input('salary'),
        );
        Chief::where('id', $id)->update($data);
        return redirect('/chief')->with('info1', 'Chief updated Successfully!');
    }
    public function delete($id)
    {
        Chief::where('id', $id)->delete();
        return redirect('/chief')->with('info1', 'Chief deleted Successfully!');
    }
}
