<?php
/**
 * User: wisonlau
 * Date: 2017/12/4
 * Time: 下午6:23
 */

namespace dd\render;

/**
 * Class DumpString
 * @package dd\render
 */
class DumpString extends AbstractDump
{
    /**
     *
     */
    public function render()
    {
        $this->display($this->value , 'span' , ['nine-span']);
    }
}