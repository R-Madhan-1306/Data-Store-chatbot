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
        
            Storage::create([
                'user_id' => auth()->user()->id,
                'title' => $title,
                'content' => $content
            ]);
        
            return 'Data Inserted Successfully! <a href="/">Click here to go back</a>';

        }        

    // public function retrieveData($title)
    // {
    //         return $title;
    //         $data = Storage::table('storage')->find($title);
        
    //         if ($data) {
    //             // Data found, you can access attributes like $data->attribute
    //             return $data;
    //         } else {
    //             return "Data not found.";
    //         }
        
    // }

    public function search(Request $request)
    {
        
        if($request->ajax()) {
            

            $output = '';
            if($request->search==null){
                die;
            }
            
            $id=auth()->user()->id;
            $products = Storage::where('title', 'LIKE', '%'.$request->search.'%')
                            
                            ->get();
            
            
            if($products) {

                foreach($products as $product) {

                    $output .=
                    '<div class="card-body">
                        <h5 class="card-title"><b>'.$product->title.'</b></h5>
                  ';

                }
            }

                return response()->json($output);
            
            

        }

        // return view('chatbot');

    }
    public function searchshow(Request $request)
    {
        
        if($request->ajax()) {
            

            $output = '';
            if($request->search==null){
                die;
            }
            
            
            $products = Storage::where('title', 'LIKE', '%'.$request->search.'%')
                            ->select('content')
                            ->get();
            
            
            if($products) {

                foreach($products as $product) {

                    $output .=$product->content;

                    
                }
            }
                
                return response()->json($output);

            

        }

        // return view('chatbot');

    }










    public function retrieveData(Request $request)
    {

        
        // Assuming you have a database table named 'students' with columns 'name' and 'mark'
        $title = $_POST['title'];;
        $content = Storage::where('title', $title)->value('content');

        return response()->json(['content' => $content]);
    }
    


}