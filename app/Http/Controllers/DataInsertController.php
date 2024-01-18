<?php

namespace App\Http\Controllers;
use DB;
use App\Models\Storage;
use Illuminate\Http\Request;

class DataInsertController extends Controller
{
    public function insert_form(){
        return view('insert_form');
    }
    public function insert(Request $request){
        $title = $request->input('title');
        $content = $request->input('content');

        Storage::updateOrCreate(
            ['user_id' => auth()->user()->id],
            [
                'title' => $title,
                'content' => $content
            ]
        );
        // return 'Data Insert Successfully! <a href="/">Click here to go back</a>';
        return redirect()->back()->with('message', 'Your message here');
    }
}
