<?php namespace Teugn\Parish;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
    }

    public function registerSettings()
    {
    }



    /*
    public function registerNavigation()
    {
        return [
            'builder' => [
                'label'       => 'rainlab.builder::lang.plugin.name',
                'url'         => Backend::url('rainlab/builder'),
                'icon'        => 'icon-wrench',
                'iconSvg'     => 'plugins/rainlab/builder/assets/images/builder-icon.svg',
                'permissions' => ['rainlab.builder.manage_plugins'],
                'order'       => 400,

                'sideMenu' => [
                    'database' => [
                        'label'       => 'rainlab.builder::lang.database.menu_label',
                        'icon'        => 'icon-sitemap',
                        'url'         => 'teugn/parish/liturgicalday'
                    ]
                ]
            ]
        ];
    }
    */
}
