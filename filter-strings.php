<?php
namespace Grav\Plugin;
use Grav\Common\Data;
use Grav\Common\Plugin;
use Grav\Common\Grav;
use Grav\Common\Page\Page;
use RocketTheme\Toolbox\Event\Event;
class FilterStringsPlugin extends Plugin
{
    /**
     * @var FilterStringsPlugin
     */
    /**
     * @return array
     */
    public static function getSubscribedEvents()
    {
        return [
            'onPluginsInitialized' => ['onPluginsInitialized', 0],
        ];
    }
    /**
     * Initialize configuration
     */
    public function onPluginsInitialized()
    {
        if ($this->isAdmin() && !$this->config->get('plugins.filter-strings.enabled', false)) {
            $this->active = false;
            return;
        }
        require_once(__DIR__.'/vendor/autoload.php');
        $this->enable([
            'onTwigExtensions' => ['onTwigExtensions', 0]
        ]);
    }
    /**
     * Add Twig Extensions
     */
    public function onTwigExtensions()
    {
        require_once(__DIR__.'/twig/FilterStringsTwigExtension.php');
        $this->grav['twig']->twig->addExtension(new FilterStringsTwigExtension());
    }
}
