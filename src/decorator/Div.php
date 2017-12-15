<?php
/**
 * User: wisonlau
 * Date: 2017/12/4
 * Time: 下午6:47
 */

namespace dd\decorator;

/**
 * Class Div
 * @package dd\decorator
 */
class Div extends DecoratorComponent
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