<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

$this->group(['prefix'=>'admin/',           'as'=>'admin.',                  'namespace'=>'Admin\\',     'middleware'=>'auth'],   function(){
    $this->get('dashboard',                 ['as'=>'dashboard.index',         'uses'=>'DashboardController@__invoke']);
    /*Banner Routes*/
    $this->get('banner/index',              ['as'=>'banner.index',              'uses'=>'BannerController@index']);
    $this->get('banner/create',             ['as'=>'banner.create',             'uses'=>'BannerController@create']);
    $this->post('banner/save',              ['as'=>'banner.store',              'uses'=>'BannerController@store']);
    $this->get('banner/edit',               ['as'=>'banner.edit',               'uses'=>'BannerController@edit']);
    $this->put('banner/update',             ['as'=>'banner.update',             'uses'=>'BannerController@update']);
    $this->delete('banner/delete',          ['as'=>'banner.delete',             'uses'=>'BannerController@delete']);

    /*Site Configs*/
    $this->get('site-configs/edit',         ['as'=>'site_configs.edit',           'uses'=>'SiteConfigController@edit']);
    $this->post('site-configs/save',        ['as'=>'site_configs.save',           'uses'=>'SiteConfigController@save']);
    $this->put('site-configs/update/{id}',  ['as'=>'site_configs.update',         'uses'=>'SiteConfigController@save']);

    /*Gallery Mgmt Routes*/
    $this->get('gallery/index',              ['as'=>'gallery.index',              'uses'=>'GalleryController@index']);
    $this->get('gallery/create',             ['as'=>'gallery.create',             'uses'=>'GalleryController@create']);
    $this->post('gallery/save',              ['as'=>'gallery.save',              'uses'=>'GalleryController@store']);
    $this->post('gallery/change_status',     ['as'=>'gallery.change_status',      'uses'=>'GalleryController@changeStatus']);
    $this->get('gallery/edit/{id}',          ['as'=>'gallery.edit',               'uses'=>'GalleryController@edit']);
    $this->put('gallery/update/{id}',        ['as'=>'gallery.update',             'uses'=>'GalleryController@update']);
    $this->delete('gallery/delete/{id}',     ['as'=>'gallery.delete',             'uses'=>'GalleryController@delete']);



});
