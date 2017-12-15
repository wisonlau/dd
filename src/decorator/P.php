<?php
/**
 * User: wisonlau
 * Date: 2017/12/4
 * Time: 下午6:47
 */

namespace dd\decorator;

/**
 * Class P
 * @package dd\decorator
 */
class P extends DecoratorComponent
{

    /**
     * @return $this
     */
    public function wrap()
    {
        $this->value = $this->noWrap($this->value);
        return $this;
    }

    /**
     *
     */
    public function display()
    {
        echo $this->value;
    }
}