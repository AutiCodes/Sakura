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
    * CMS - Messages
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

    /*
    * Display
    */
    public function editText()
    {
      return view('adminpanel::pages.display_edit_text');
    }

    public function editImages()
    {
      return view('adminpanel::pages.display_edit_images');
    }

    /*
    * Users
    */
    public function usersAll()
    {
      return view('adminpanel::pages.users_all');
    }

    public function usersProfile()
    {
      return view('adminpanel::pages.users_profile');
    }

    public function usersAdd()
    { 
      return view('adminpanel::pages.users_add');
    }

    /*
    * Statistics
    */
    public function websiteStatistics()
    {
      return view('adminpanel::pages.statistics_website');
    }

    public function discordStatistics()
    {
      return view('adminpanel::pages.statistics_discord');
    }

    /*
    * Modules
    */
    public function discordAutoPost()
    {
      return view('adminpanel::pages.discord_auto_poster');
    }

    public function notifications()
    {
      return view('adminpanel::pages.notification');
    }

    /*
    * Backup
    */
    public function backupCreate()
    {
      return view('adminpanel::pages.backup_create');
    }

    public function backup_automatic()
    {
      return view('adminpanel::pages.backup_automatic');
    }

    /*
    * Site settings
    */
    public function settingsGeneral()
    {
      return view('adminpanel::pages.site_general');
    }

    public function settingsArticles()
    {
      return view('adminpanel::pages.site_articles');
    }

    public function settingsComments()
    {
      return view('adminpanel::pages.site_comments');
    }

    public function settingsUrls()
    {
      return view('adminpanel::pages.site_urls');
    }

    public function settingsEmailServer()
    {
      return view('adminpanel::pages.site_email_server');
    }

    /*
    * Technical
    */
    public function SiteAndServerinfo()
    {
      return view('adminpanel::pages.site_and_server_info');
    }

    public function settingsCache()
    {
      return view('adminpanel::pages.cache');
    }

    public function settingsSecurity()
    {
      return view('adminpanel::pages.security');
    }

    /* 
    * Logs
    */
    public function logSystem()
    {
      return view('adminpanel::pages.log_system');
    }

    public function logError()
    {
      return view('adminpanel::pages.log_error');
    }

    public function logAccess()
    {
      return view('adminpanel::pages.log_access');
    }    
}
