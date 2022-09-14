<?php

class Test
{
    public $test;

    public function __construct($test)
    {
        $this->test = $test;
    }

    public function get()
    {
        return $this->test;
    }
}

$test = new Test('Artur Rvachev');
print $test->test;
