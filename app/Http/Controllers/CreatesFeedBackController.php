<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\FeedBack;
class CreatesFeedBackController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $feeds= FeedBack::Paginate(10);
        return view('feedback.index',['feeds'=>$feeds]);
    }
    public function read($id)
    {
        $feed = FeedBack::find($id);
        return view('feedback.read_feed', ['feed' => $feed]);
    }
    public function create_feed()
    {
        return view('feedback.create_feed');
    }

    public function add(Request $request)
    {
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
        return redirect('/feedback')->with('info1', 'Feedback saved Successfully!');
    }
    public function update($id)
    {
        $feed = FeedBack::find($id);
        return view('feedback.update_feed', ['feed' => $feed]);
    }

    public function edit(Request $request, $id)
    {
        $this->validate($request, [
            'feedback_name' => 'required',
            'feedback_email' => 'required',
            'description' => 'required'
        ]);
        $data = array(
            'feedback_name' => $request->input('feedback_name'),
            'feedback_email' => $request->input('feedback_email'),
            'description' =>$request->input('description'),
        );
        FeedBack::where('id', $id)->update($data);
        return redirect('/feedback')->with('info1', 'Feedback updated Successfully!');
    }
    public function delete($id)
    {
        FeedBack::where('id', $id)->delete();
        return redirect('/feedback')->with('info1', 'Feedback deleted Successfully!');
    }
}
