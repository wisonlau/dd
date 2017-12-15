<?php
/**
 * User: wisonlau
 * Date: 2017/12/4
 * Time: 下午6:26
 */

namespace dd\render;

/**
 * Class DumpArray
 * @package dd\render
 */
class DumpArray extends AbstractDump
{
    /**
     * @var array
     */
    public $_stack;

    /**
     * DumpArray constructor.
     * @param $value
     */
    public function __construct($value)
    {
        parent::__construct($value);
    }

    /**
     *
     */
    public function render()
    {
        $this->display($this->parseArr($this->value));
    }
}