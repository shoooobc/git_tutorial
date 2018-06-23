<?php
class SomeClass{
    private $values =array();

    public function __get($name)
    {
        if (isset($this->value[$name])) {
            throw new OutOfBoundsException($name . "not found");
        }
        return $this->values[$name];
    }

    public function __set($name,$value){
        echo "set:$name setted to $value",PHP_EOL;
        $this->values[$name]=$value;

    }

    public function __isset($name)
    {
        echo "isset:$name ", PHP_EOL;
        return isset($this->values[$name]);
    }

    public function __unset($name)
    {
        echo "unset:$name",PHP_EOL;
        unset($this->values[$name]);
    }

    public function __call($name, $args)
    {
        echo "call:$name",PHP_EOL;

        $method_name='_'.$name;

        if(!is_callable(array($this,$method_name))){
            throw new BadFunctionCallException($name."method not found");

        }
        return call_user_func_array(array($this,$method_name),$args);
    }

    public static function __callStatic($name, $args)
    {
        echo "callStatic: $name",PHP_EOL;
        $method_name='_'.$name;
        if(!is_callable(array('self',$method_name))){
            throw new BadFunctionCallException($name. "method not found");
        }
        return call_user_func_array(array('self',$method_name),$args);
    }

    private function _bar($value){
        echo "bar called with arh '$value'",PHP_EOL;
    }

    private  static function _staticBar($value){
        echo "stticBar called with arg '$value'",PHP_EOL;
    }
}

$obj =new SomeCLass();
$obj->foo =10;

var_dump($obj->foo);
echo PHP_EOL;
var_dump(isset($obj->foo));
echo PHP_EOL;
var_dump(empty($obj->foo));
