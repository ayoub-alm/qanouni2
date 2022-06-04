<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;


class BlogController extends Controller
{

    public function index()
    {


        $blog = DB::table('blogs')->where('confirmation',true)->get();
            return   View('news')->with('blog', $blog);
    }

    public function create(Request $request)
    {
         $request->validate();
        $blog = $request->all();
        Blog::create(
            [
        'title' => $request->input('title') ,
        'article' => $request->input('article'),
        'image' => $request->input('image'),
        'user_id' => Auth::user()->id,
        'confirmation' => false,
            ]
        );
        $blogs = DB::table('blogs')->where('confirmation',true)->get();
           return  redirect()->route('home' , ['blog' => $blogs]);


      dd($request->file('image')->getClientOriginalName()
      );


    }


    public function store(Request $request)
    {

       $data = $request->all();
       dd($data);

    }


    public function show($id)
    {
        $blog = DB::table('blogs')->where('id',$id)->get();


        $commentaires = DB::table('commentaries')->where('blog_id',$id)->get();



          return View('bg',['blog' => $blog , 'commentaire' => $commentaires]);

    }


    public function edit($id)

    {
       DB::table('blogs')->where('id',$id)->delete();
        return redirect()->route('admin.show');
    }


    public function update(Request $request, blog $blog)
    {
        //
    }


    public function destroy($id)

    {
        DB::table('blogs')->where('id',$id)->delete();
        return redirect()->route('home');
    }

public function cr(){
    return view('creat');
}

public function likes($id){
    $blog = blog::where("id",$id)->increment('likes');
    return true;
    //  $blogs = DB::table('blogs')->where('confirmation',true)->limit(9)->get();
    //  return view('home',['blog' => $blogs]);
 
}


public function getlikecount($id){
  $count_number  =   Blog::where("id",$id)->get(['likes',"id"]);
  return Response(json_encode($count_number));
}

}