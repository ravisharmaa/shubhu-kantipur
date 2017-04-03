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


class SiteConfigController extends AdminBaseController
{
    protected $base_route = 'admin.site_config';
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


}