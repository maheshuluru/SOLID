<?php
/**
 * Rule:
 * Derived classess must be substitutable for their base classes
 */


class A
{
    public function fire()
    {
        // do something
    }
}

class B extends A
{
    public function fire()
    {
        // do something
    }
}

public function doSomething(B $obj)
{
    $obj->fire();
}

 // Here B should be subustitue with A
public function doSomething(A $obj)
{
    $obj->fire();
}
