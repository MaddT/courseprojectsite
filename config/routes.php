<?php

return array(

    'project/([0-9]+)' => 'project/view/$1',

    'category/([0-9]+)/page-([0-9]+)' => 'category/category/$1/$2',
    'category/([0-9]+)' => 'category/category/$1',
    'category' => 'category/index',

    'user/register' => 'user/register',
    'user/login' => 'user/login',
    'user/logout' => 'user/logout',

    'user/account' => 'account/index',
    'account/edit' => 'account/edit',

    'admin/project/create' => 'adminProject/create',
    'admin/project/update/([0-9]+)' => 'adminProject/update/$1',
    'admin/project/delete/([0-9]+)' => 'adminProject/delete/$1',
    'admin/project' => 'adminProject/index',

    'admin' => 'admin/index',


    '' => 'site/index',
    /*'products' => 'product/list',
    'news/archive' => 'news/archive',*/
);