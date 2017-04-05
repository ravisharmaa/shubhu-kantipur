<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 03/04/2017
 * Time: 12:22 PM
 */

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\AppBaseController;
use Illuminate\Support\Facades\View;


class AdminBaseController extends AppBaseController
{
    protected $base_route;
    protected $view_path;
    protected $css_path;
    protected $js_path;
    protected $sidebar;
    protected $footer;
    protected $nav_bar;
    protected $header;
    protected $scope;
    protected $title;


    public function __construct()
    {
        $this->css_path      =   config('shubhu.backend_assets.css_path');
        $this->js_path       =   config('shubhu.backend_assets.js_path');
        $this->sidebar       =   config('shubhu.backend_includes.sidebar');
        $this->footer        =   config('shubhu.backend_includes.footer');
        $this->nav_bar       =   config('shubhu.backend_includes.nav-bar');
        $this->header        =    config('shubhu.backend_includes.header');
    }

    public function loadDefaultVars($view_path)
    {
        View::composer($view_path, function($view) use ($view_path){
            $view->with('base_route',   $this->base_route);
            $view->with('header',       $this->header);
            $view->with('view_path',    $this->view_path);
            $view->with('css_path',     $this->css_path);
            $view->with('js_path',      $this->js_path);
            $view->with('sidebar',      $this->sidebar);
            $view->with('footer',       $this->footer);
            $view->with('nav_bar',      $this->nav_bar);
            $view->with('scope',        $this->scope);
            $view->with('title',        $this->title);
        });
        return $view_path;
    }
}