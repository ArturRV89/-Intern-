<?php

namespace My\Traits;

//При помощи trait добавьте классам новый метод, почините тесты заменив троеточие на код

trait UpperNameTrait
{
    public function upperName()
    {
        return strtoupper($this->name);
    }
}

class User
{
    use UpperNameTrait;

    public string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }
}

class Customer
{
    use UpperNameTrait;

    public string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }
}

assert(
    (new User('vova'))->upperName() == 'VOVA'
);

assert(
    (new Customer('vova'))->upperName() == 'VOVA'
);