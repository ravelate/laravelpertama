<?php

namespace App\Http\Controllers;
use App\Models\Author;
use App\Models\authors_news;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function author() {
            $Authors = Author::with('news')->get();
            // dd($Authors);
            return view('admin/author', compact(['Authors']));
    }
    public function store(Request $request)
    {
        Author::create($request->all());
        return redirect('author')->with('sukses', 'Data berhasil diinput');
    }
    public function update(Request $request)
    {
        $Authors = Author::find($request->id);
        $Authors->update($request->all());
        return redirect('author')->with('sukses', 'Data berhasil diupdate');
    }
    public function destroy(Request $request)
    {
        $Authors = Author::with('news')->findOrFail($request->id);
        // dd($Authors);
        foreach($Authors->news as $tes){
            // return $tes->pivot['author_id'];
            $Authors->news()->detach( $tes->pivot['author_id'],  $tes->pivot['news_id']);
        }
        $Authors->delete();
        return redirect('author')->with('sukses', 'Data berhasil dihapus');
    }
    
    
}
