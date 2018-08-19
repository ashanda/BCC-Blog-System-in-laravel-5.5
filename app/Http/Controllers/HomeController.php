<?php

namespace App\Http\Controllers;

use App\Post;
use App\User;
use App\Event;
use App\Contact;
use App\Category;
use App\Gallery;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
                return view('admin.dashboard')
                    ->with('posts_count', Post::all()->count())
                    ->with('trashed_count', Post::onlyTrashed()->get()->count())
                    ->with('users_count', User::all()->count())
                    ->with('events_count', Event::all()->count())
                    ->with('galleries_count', Gallery::all()->count())
                    ->with('contacts_count', Contact::all()->count());
    }


}
