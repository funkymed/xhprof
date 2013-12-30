<?php

include "bar.php";
include "foo.php";

Class Dummy
{
    public function __construct()
    {
        $this->getData();
    }

    public function getData()
    {
        for($r=0;$r<10;$r++)
        {
            new Bar();
            new Foo();
        }
    }
}