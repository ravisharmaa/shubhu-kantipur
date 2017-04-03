<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 03/04/2017
 * Time: 01:08 PM
 */

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Admin\AdminBaseController;
use App\Model\SiteConfigs;
use Illuminate\Http\Request;


class SiteConfigController extends AdminBaseController
{
    protected $base_route = 'admin.site_configs';
    protected $view_path  = 'backend.site_config';

    public function edit()
    {
        $site_config = SiteConfigs::first();
        if(empty($site_config)){
            return view(parent::loadDefaultVars($this->view_path.'.create'));
        } else {
            return view(parent::loadDefaultVars($this->view_path.'.edit'), compact('site_config'));
        }
    }

    public function save(Request $request, $id=null)
    {
        is_null($id)? $this->saveValues($request) : $this->updateValues($request, $id);
    }

    private function saveValues($request)
    {
       SiteConfigs::create([
            'about_desc'     => $request->get('about_desc'),
            'fb_link'        => $request->get('fb_link'),
            'g_plus'         => $request->get('g_plus'),
            'twitter'        => $request->get('twitter'),


       ]);
    }

    private function updateValues($request, $id)
    {

    }

}