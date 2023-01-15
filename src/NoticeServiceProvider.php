<?php

namespace Slowlyo\Notice;

use Slowlyo\SlowAdmin\Extend\ServiceProvider;

class NoticeServiceProvider extends ServiceProvider
{
    protected $menu = [
        [
            'parent'   => '',
            'title'    => '通知公告管理',
            'url'      => '/notice',
            'url_type' => '1',
            'icon'     => 'fa fa-list',
        ],
    ];

    public function register()
    {
        //
    }

    public function init()
    {
        parent::init();

        //

    }
}