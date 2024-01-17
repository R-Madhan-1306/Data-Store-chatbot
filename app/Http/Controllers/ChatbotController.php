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

    public function searchList(Request $request)
    {
        
        if(!$request->title){
            $data['itemsdata']="nulll";
            return view('search-list', $data);
        }
        $data['items1'] = FitnessYoga::active()->where('title', 'like', '%' . $request->title . '%')->get();
        $data['items2'] = Explore::active()->where('title', 'like', '%' . $request->title . '%')->get();
        $data['items3'] = Nutrition::active()->where('title', 'like', '%' . $request->title . '%')->get();
        $data['items4'] = MindFulness::active()->where('title', 'like', '%' . $request->title . '%')->get();
        $data['items5'] = FitnessType::active()->where('title', 'like', '%' . $request->title . '%')->get();
        $data['items6'] = DietPlan::active()->where('title', 'like', '%' . $request->title . '%')->get();
        $data['items7'] = Program::active()->where('title', 'like', '%' . $request->title . '%')->get();
   
        $FitnessYoga=count($data['items1']);
        $Explore=count($data['items2']);
        $Nutrition=count($data['items3']);
        $MindFulness=count($data['items4']);
        $FitnessType=count($data['items5']);
        $DietPlan=count($data['items6']);
        $Program=count($data['items7']);
        
        if($FitnessYoga==0 && $Explore==0 && $Nutrition==0 && $MindFulness==0 && $FitnessType==0 && $DietPlan==0 && $Program==0){
            $data['isempty']='null';
            return view('search-list', $data);
        }
        // foreach:
        

        return view('search-list', $data);
    }

    public function SearchDetails($uuid)
    {
        $data['pageTitle'] = 'Forum Details';

        $data['forumPost'] = MindFulness::where('uuid', $uuid)->firstOrFail();
        $data['forumPost']->total_seen = ++$data['forumPost']->total_seen;
        $data['forumPost']->save();

    

        return view('frontend.forum.forum-details')->with($data);

    }
}
