<?php

namespace App\Http\Controllers;
use App\Models\News;
use App\Models\Author;
use App\Models\Authors_news;

use Illuminate\Http\Request;

class NewController extends Controller
{
    public function news() {
        $data_news = news::with('author')->get();
        $data_author = \App\Models\Author::pluck('name', 'id');
        // dd($data_news);
        return view('admin/news',['data_news' => $data_news],['data_author' => $data_author]);
    }
    public function mainweb() {
        $data_news = news::with('author')->get();
        $data_author = \App\Models\Author::pluck('name', 'id');
        // dd($data_news);
        return view('main/index',['data_news' => $data_news],['data_author' => $data_author]);
    }
    public function store(Request $request)
    {
        // dd($request);
       $data = news::insertGetId([
            'title' => $request->get('title'),
            'content' => $request->get('content'),
            'picture' => $request->get('picture'),
            'is_published' => $request->get('is_published'),
        ]);
        $Authors = Author::find($request->author_id);
        Author::where('id',$request->get('author_id')) 
        ->update([
            'publis' => ($Authors->publis+1) ,
          ]);  
       if($request->get('author_id')) {
           news::findOrfail($data)->author()->attach($request->get('author_id'));
       }
        return redirect('news')->with('sukses', 'Data berhasil diinput');
    }
    public function update(Request $request)
    {
        $news = news::with('author')->findOrFail($request->id);
        // dd($request);
        
        foreach($news->author as $tes){
            // return $tes->pivot['author_id'];
            $news->author()->detach( $tes->pivot['author_id'],  $tes->pivot['news_id']);
        }
            news::findOrfail($news->id)->author()->attach($request->get('author_id'));
        $news->update($request->all());
        return redirect('news')->with('sukses', 'Data berhasil diupdate');
    }
    public function destroy(Request $request)
    {
        $news = news::findOrFail($request->id);
        // dd($news);
        $Authors = Author::find($request->author_id);
        Author::where('id',$request->get('author_id')) 
        ->update([
            'publis' => ($Authors->publis-1) ,
          ]);  
        foreach($news->author as $tes){
            // return $tes->pivot['author_id'];
            $news->author()->detach( $tes->pivot['author_id'],  $tes->pivot['news_id']);
        }
        $news->delete();
        return redirect('news')->with('sukses', 'Data berhasil dihapus');
    }
}
