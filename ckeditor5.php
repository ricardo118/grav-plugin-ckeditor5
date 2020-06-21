<?php
namespace Grav\Plugin;

use Grav\Common\Plugin;
use RocketTheme\Toolbox\Event\Event;

/**
 * Class CKEditor5Plugin
 * @package Grav\Plugin
 */
class CKEditor5Plugin extends Plugin
{

    protected $configs;

    public static function getSubscribedEvents()
    {
        return [
            'onPluginsInitialized' => ['onPluginsInitialized', 0],
            'onAssetsInitialized' => ['onAssetsInitialized', 0]
        ];
    }

    /**
     * Initialize the plugin
     */
    public function onPluginsInitialized()
    {
        // Don't proceed if we are in the admin plugin
        if ($this->isAdmin()) {

            $this->getConfigs();

            // Enable the main event we are interested in
            $this->enable([
                'onAdminTwigTemplatePaths' => ['onAdminTwigTemplatePaths', 0]
            ]);
        }
    }

    public function getConfigs()
    {
        $this->configs = $this->config->get('plugins.ckeditor5');
    }

    public function onAssetsInitialized()
    {
        $assets=$this->grav['assets'];

        if ($this->isAdmin())
        {
            $assets->addCss('plugins://ckeditor5/admin/custom.css', 10);
            $assets->addJs('plugins://ckeditor5/vendor/build/ckeditor.js', 10);

            if (isset($this->configs['language'])) {
                $assets->addJs('plugins://ckeditor5/vendor/build/translations/' . $this->configs['language'] . '.js', 10);
            }
        }
    }

    // Custom admin template overriding
    public function onAdminTwigTemplatePaths($event)
    {
        $event['paths'] = array_merge($event['paths'], [__DIR__ . '/admin/templates']);

        if ($this->configs['override'])
        {
            $event['paths'] = array_merge($event['paths'], [__DIR__ . '/admin/override']);
        }

        return $event;
    }

}
