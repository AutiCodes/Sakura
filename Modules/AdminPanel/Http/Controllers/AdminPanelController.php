<?php

namespace Modules\AdminPanel\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class AdminPanelController extends Controller
{
    // Shows dashboard
    public function index()
    {
        return view('adminpanel::pages.dashboard');
    } 

    /*
    * Messages
    */
    public function messagesAll()
    {
      return view('adminpanel::pages.messages_all');
    }

    public function messagesAdd()
    {
      return view('adminpanel::pages.messages_new');
    }

    public function messagesCategorys()
    {
      return view('adminpanel::pages.messages_categorys');
    }

    public function messagesTags()
    {
      return view('adminpanel::pages.messages_tags');
    }

    /*
    * Media
    */
    public function mediaAll()
    {
      return view('adminpanel::pages.media_all');
    }

    public function mediaAdd()
    {
      return view('adminpanel::pages.media_add');
    }

    /*
    * Pages
    */
    public function pagesAll()
    {
      return view('adminpanel::pages.pages_all');
    }

    public function pagesAdd()
    {
      return view('adminpanel::pages.pages_add');
    }

    /*
    * Comments
    */
    public function comments()
    {
      return view('adminpanel::pages.comments');
    }
}
