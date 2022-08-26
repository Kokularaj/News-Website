<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Validation\Validator;
use Illuminate\Http\Request;
use App\Models\News;

class useraddController extends Controller
{

    public function store(Request $request)
    {



          $news= new News ;
          $news->name = $request->input('name');
          $news->title = $request->input('title');
          $news->description = $request->input('description');
          if($request->hasFile('image')){
          $file = $request->file('image');
          $extension = $file->getClientOriginalExtension();
          $filename = time() . '.' . $extension;
          $file->move('uploads/photos',$filename);
          $news->image = $filename;

        }
          $news->save();
          return redirect()->back()->with('success','Item created successfully');
    }

        public function view(){
            $news = News::all();
            return view('allnews',compact('news'));
        }
        public function get(){
            News::where('id', 1)
            ->pluck('image', 'description')
            ->all();
        }

    }





