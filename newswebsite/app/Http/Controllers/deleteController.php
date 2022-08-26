<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Models\News;


class deleteController extends Controller
{
    public function index(Request $request){
        if ($request->has('trashed')) {
            $news = News::onlyTrashed()
                ->get();
        } else {
            $news = News::get();
        }

        return view('delete', compact('news'));
    }

    /**
     * soft delete post
     *
     * @return void
     */
    public function destroy($id)
    {
        News::find($id)->delete();

        return redirect()->back();
    }

}


