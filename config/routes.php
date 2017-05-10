<?php

return array(

    'project/([0-9]+)' => 'project/view/$1',

    'category/([0-9]+)/page-([0-9]+)' => 'category/category/$1/$2',
    'category/([0-9]+)' => 'category/category/$1',
    'category' => 'category/index',

    'user/register' => 'user/register',

    '' => 'site/index',
    /*'products' => 'product/list',
    'news/archive' => 'news/archive',*/
);