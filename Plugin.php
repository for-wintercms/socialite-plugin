<?php

namespace DS\Socialite;

use Backend;
use System\Classes\PluginBase;

/**
 * Socialite Plugin Information File
 */
class Plugin extends PluginBase
{
    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'Socialite',
            'description' => 'OAuth by Laravel socialite',
            'author'      => 'DS',
            'icon'        => 'icon-leaf'
        ];
    }

    /**
     * Register method, called when the plugin is first registered.
     *
     * @return void
     */
    public function register()
    {}

    /**
     * Boot method, called right before the request route.
     *
     * @return array
     */
    public function boot()
    {}

    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {
        return []; // Remove this line to activate

        return [
            'DS\Socialite\Components\MyComponent' => 'myComponent',
        ];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {
        return []; // Remove this line to activate

        return [
            'ds.socialite.some_permission' => [
                'tab' => 'Socialite',
                'label' => 'Some permission'
            ],
        ];
    }

    /**
     * Registers back-end navigation items for this plugin.
     *
     * @return array
     */
    public function registerNavigation()
    {
        return []; // Remove this line to activate

        return [
            'socialite' => [
                'label'       => 'Socialite',
                'url'         => Backend::url('ds/socialite/mycontroller'),
                'icon'        => 'icon-leaf',
                'permissions' => ['ds.socialite.*'],
                'order'       => 500,
            ],
        ];
    }
}
