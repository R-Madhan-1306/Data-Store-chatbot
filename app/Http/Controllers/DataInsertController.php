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
        // Check if the user is authenticated
        if(auth()->check()) {
            $userId = auth()->user()->id;
    
            if($request->ajax()) {
                $output = '';
                if($request->search == null){
                    die;
                }
    
                // Retrieve data related to the authenticated user's user_id
                $products = Storage::where('user_id', $userId)
                                    ->where('title', 'LIKE', '%'.$request->search.'%')
                                    ->get();
    
                if($products) {
                    foreach($products as $product) {
                        $output .= '<div class="card-body">
                                        <h5 class="card-title"><b>'.$product->title.'</b></h5>
                                    </div>';
                    }
                }
    
                return response()->json($output);
            }
        } else {
            // Return unauthorized response if the user is not authenticated
            return response()->json(['error' => 'Unauthorized'], 401);
        }
    }
    

        // return view('chatbot');

    
    public function searchshow(Request $request)
    {
        if(auth()->check()) {
            $userId = auth()->user()->id;
        
        
        if($request->ajax()) {
            

            $output = '';
            if($request->search==null){
                die;
            }
            
            
            $products = Storage::where('user_id', $userId)
                            ->where('title', 'LIKE', '%'.$request->search.'%')
                            ->select('content')
                            ->limit(1)
                            ->get();
            
            
            if($products) {

                foreach($products as $product) {

                    $output .=$product->content;

                    
                }
            }
                
                return response()->json($output);

            

        }
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