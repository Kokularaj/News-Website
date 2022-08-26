<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
class editController extends Controller
{
    public function edit($id)
    {
        $news = News::find($id);
        return view('edit_news', compact('news'));
    }

    public function update(Request $request, $id)
    {
        $news = News::find($id);
        $news->name = $request->input('name');
        $news->title = $request->input('title');
        $news->description = $request->input('description');
        if($request->hasFile('image')){
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extention;
            $file->move('uploads/photos',$filename);
            $news->image = $filename;}
        $news->update();
        return redirect()->back()->with('Student Updated Successfully');
    }
}
