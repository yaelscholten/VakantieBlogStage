<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Models\Comment;
use illuminate\Support\Facades\Auth;
use illuminate\Support\Facades\Validator;
use DB;
class CommentController extends Controller
{
    
    public function store(Request $request){

        if(Auth::check()){

            $post = Post::where('slug', $request->post_slug)->first();

            if($post){
                Comment::create([
                    'post_id' => $post->id,
                    'user_id' => Auth::user()->id,
                    'comment' => $request->comment
                ]);
                return redirect()->back();
            }

        }
    }

    public function destroy($id){
        DB::delete('delete from comments where id = ?',[$id]);
        return redirect()->back();
    }


    public function edit($id){
        return view('edit-comment')->with('comments', Comment::where('id', $id)->first());
    }

    public function update(Request $request){
        $id = $request->input('id');
        Comment::where('id', $id)->update([
            'comment' => $request->input('comment'),
        ]);

        return redirect('/blog')->with('message', 'Je comment is bewerkt!');
    }
    
}
