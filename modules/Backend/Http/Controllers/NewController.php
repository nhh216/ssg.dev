<?php
/**
 * Created by PhpStorm.
 * User: nhh21
 * Date: 5/17/2018
 * Time: 12:19 AM
 */

namespace Modules\Backend\Http\Controllers;


use App\Http\Controllers\Controller;
use App\Post;
use App\Tag;
use Illuminate\Http\Request;
use App\Product;

class NewController extends  Controller
{
    public  function showEditorPage()
    {
        return view('backend::pages.editor_page');
    }

    public  function  newPost(Request $request)
    {

        $post = new Post();
        $title = $request->title;
        $post->title = $title;
        $post->category_id = $request->category_id;
        $post->short_des = $request->short_desc;
        $post->thumb = $request->thumb;
        $post->content  = $request->editor;

        $arrTag = [];
        $arrTag = preg_split('~,~',$request->tags);
        $arrTags = [];

        foreach ($arrTag as $item)
        {
            $slug = str_slug($item,'-');
            $tag = Tag::firstOrCreate(['value' => $item, 'slug' => $slug]);
            $arrTags[] = $tag->id;
        }

        $post->save();
        $str = $post->id .'-'.str_slug($title,'-');
        $post->slug = $str;
        $post->save();
        $post->tags()->attach($arrTags);
        return redirect()->back()->with(['noti'=>'ok']);

    }

    public  function editPost()
    {
        $post = Post::orderBy('created_at','desc')->with('category')->get();
        $data = [
            'posts'=>$post,
        ];
        return view('backend::pages.edit_post_page',$data);
    }

    public function showPost($id)
    {
        $post = Post::with('category')->with('tags')->where('id',$id)->get();
        return $post;
    }

    public function updatePost(Request $request)
    {
        dd($request);
    }
}