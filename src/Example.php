<?php

namespace Foo;

class Example
{
    public function do(Foo $foo, Bar $bar, $value = true)
    {
        if (!($value === true)) {
            # return with calling something()
            return;
        }
        $foo->something($bar);
    }
}