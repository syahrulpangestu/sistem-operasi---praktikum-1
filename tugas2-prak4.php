<?php
class ParentClass{
    public function parentClass1()
    {
        return "parentClass 1 method 1";
    }
    public function parentClass2()
    {
        return "parentClass 1 method 2";
    }    
}

abstract Class AbstractClass{
    abstract public function abstractMethod1(); 
    abstract public function abstractMethod2();    
}

class ChildCLass extends AbstractClass{
    // use MethodAbstractMethod;
    // use abstractMethod1, abstractMethod2, MethodAbstractMethod;
    use abstractMethod1, abstractMethod2, MethodAbstractMethod{
        abstractMethod1::abstractMethod1 insteadOf MethodAbstractMethod;
        abstractMethod2::abstractMethod2 insteadOf MethodAbstractMethod; 
    }

    // public function abstractMethod1()
    // {
    //     echo "ChildCLass abstractMethod1";
    // }
    // public function abstractMethod2()
    // {
    //     echo "ChildCLass abstractMethod2";        
    // }
}

trait abstractMethod1{
    public function abstractMethod1(){
        return "abstractMethod1";
    }
}

trait abstractMethod2{
    public function abstractMethod2(){
        return "abstractMethod2";
    }
}

trait MethodAbstractMethod{
    public function abstractMethod1()
    {
        return "MethodAbstractMethod 1";
    }
    public function abstractMethod2()
    {
        return "MethodAbstractMethod 2";
    }
}

$childClass = new ChildCLass;
$result = $childClass->abstractMethod1();
echo $result;
?>