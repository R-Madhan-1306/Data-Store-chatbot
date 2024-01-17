<?php

namespace App\Http\Controllers;

use App\Models\Storage;
use Illuminate\Http\Request;
use League\CommonMark\Extension\CommonMark\Node\Inline\Strong;

class ChatbotController extends Controller
{
    //
    public function profile(){
        if(auth()->user()){

        return view('chatbot');
        }
        else{
            return redirect('/login');
        }
    }

    public function storedata(Request $req){

        $store_data=$req->all();
        Storage::updateOrCreate(
            ['user_id' => auth()->user()->id],
            [
                'title' => $store_data['title'],
                'content' => $store_data['title']
            ]
        );
        return redirect('/chatbot');
    }
    public function store(){
        dd('store');
    }

}
