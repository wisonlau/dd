<?php
/**
 * User: wisonlau
 * Date: 2017/12/4
 * Time: 下午6:35
 */

namespace dd;

require 'vendor/autoload.php';

//string
//\dd\Dump::dump('hello,wisonlau');

//array
//\dd\Dump::dump(['hello', 'world' => ['aa' , 'bb' => ['cc' , 'dd']]]);

//function
//\dd\Dump::dump(function ($name = 'wisonlau' , Closure $closure) {
//    echo $name;
//});

//object
//\dd\Dump::dump(new stdClass());

class Student
{
    public $name = 'seven';
    protected $age;
    private $sex = 'male';

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @param $age
     */
    public function setAge($age)
    {
        $this->age = $age;
    }
}


function dd($value)
{
    \dd\Dump::dump($value);
}

//dd("hello,wisonlau");

//dd(function ($a = 'wisonlau'){
//    echo $a;
//});

$student = new Student();
$student->name = 'wisonlau';
$student->setAge(10);
dd($student);
