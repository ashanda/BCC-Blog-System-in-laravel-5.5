<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ColomboController extends Controller
{
     public function index()
    {
        return view('colombo_chapter');
                
                
    }

    public function events()
    {
        return view('pages.events')
                ->with('events', Event::all())
                ->with('news', Category::find(2));
    }

        public function contactus()
    {
        return view('pages.contactus');
    }

    //public function gallery()
   // {
       // return view('pages.gallery')
         //       ->with('galleries', Gallery::all());
   // }

        public function singlePost($slug)
    {
        $post = Post::where('slug', $slug)->first();

        $next_id = Post::where('id', '>', $post->id)->min('id');
        $prev_id = Post::where('id', '<', $post->id)->max('id');

        return view('single')->with('post', $post)
                             ->with('title', $post->title)
                             ->with('settings', Setting::first())
                             ->with('categories', Category::take(5)->get())
                             ->with('next', Post::find($next_id))
                             ->with('prev', Post::find($prev_id))
                             ->with('tags', Tag::all())
                             ->with('news', Category::find(2));

    }


     public function singleEvent($slug)
    {
        $event = Event::where('slug', $slug)->first();

        $next_id = Event::where('id', '>', $event->id)->min('id');
        $prev_id = Event::where('id', '<', $event->id)->max('id');

        return view('event')->with('event', $event)
                             ->with('title', $event->title)
                             ->with('settings', Setting::first())
                             ->with('categories', Category::take(5)->get())
                             ->with('next', Post::find($next_id))
                             ->with('prev', Post::find($prev_id))
                             ->with('news', Category::find(2))
                             ->with('notice', Category::find(3));

        


    }

    public function category($id)
    {
        $category = Category::find($id);

        return view('category')->with('category', $category)
                               ->with('title', $category->name)
                               ->with('settings', Setting::first())
                               ->with('categories', Category::take(5)->get());
    }



    public function tag($id)
    {
        $tag = Tag::find($id);

        return view('tag')->with('tag', $tag)
                          ->with('title', $tag->tag)
                          ->with('settings', Setting::first())
                          ->with('categories', Category::take(5)->get());
    }
}
