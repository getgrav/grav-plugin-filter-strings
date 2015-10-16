<?php
namespace Grav\Plugin;
use \Grav\Common\Grav;
use Stringy\Stringy as S;
use function Stringy\create as s;

class FilterStringsTwigExtension extends \Twig_Extension
{
    protected $config;
    public function __construct()
    {
        $this->config = Grav::instance()['config'];
    }
    /**
     * Returns extension name.
     *
     * @return string
     */
    public function getName()
    {
        return 'FilterStringsTwigExtension';
    }
    public function getFilters()
    {
        return [
            new \Twig_SimpleFilter('*_string', [$this, 'stringFilter']),
        ];
    }
    public function stringFilter($action, $data)
    {
        return S::create($data)->{$action}();
    }
}
