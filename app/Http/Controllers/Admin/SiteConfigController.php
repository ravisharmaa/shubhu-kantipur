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
use Illuminate\Support\Facades\Validator;


class SiteConfigController extends AdminBaseController
{
    protected $base_route =     'admin.site_configs';
    protected $view_path  =     'backend.site_config';
    protected $scope      =     'Manage Your Site Configurations';
    protected $title      =     'Site Configs Management';

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
        is_null($id) ? $this->saveValues($request) : $this->updateValues($request, $id);
        return redirect()->route($this->base_route.'.edit');
    }

    public function saveValues($request)
    {
        SiteConfigs::create([
            'footer_desc'     => $request->get('footer_desc'),
            'fb_link'        => $request->get('fb_link'),
            'g_plus'         => $request->get('g_plus'),
            'twitter'        => $request->get('twitter'),
            'phone'          => $request->get('phone'),
            'email'          => $request->get('email'),
            'website'        => $request->get('website'),
        ]);
        return true;
    }

    public function updateValues($request, $id)
    {
        $data = SiteConfigs::findOrFail($id);
        $data->footer_desc      = $request->get('footer_desc');
        $data->fb_link          = $request->get('fb_link');
        $data->g_plus           = $request->get('g_plus');
        $data->twitter          = $request->get('twitter');
        $data->phone            = $request->get('phone');
        $data->email            = $request->get('email');
        $data->website          = $request->get('website');
        $data->save();
        return true;
    }



}