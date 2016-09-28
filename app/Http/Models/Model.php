<?php

namespace Foobooks\Http\Models;


class Model {
    public function __construct(Type $foo = null) {
        $this->foo = $foo;
    }
}
