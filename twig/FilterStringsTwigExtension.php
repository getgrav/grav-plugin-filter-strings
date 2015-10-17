<?php
namespace Grav\Plugin;
use \Grav\Common\Grav;
use Stringy\Stringy as Stringy;

class FilterStringsTwigExtension extends \Twig_Extension
{
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
        if($action==null){return;};
        $customManipulators = ["cosgrove"];//plans for custom manipulator functions
        switch(true) {
            case in_array($action, $customManipulators):
                //Plans for custom manipulator functions
                break;
            default:
                return Stringy::create($data)->{$action}();
        }
    }
}
