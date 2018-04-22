<?php

namespace zkosta\Functional;

use zkosta\Functional\FunctionNotFoundException;

class FunctionalProxy{


    public function __call($name, $arguments) {


        $f =  '\Functional' . $name;

        if (function_exists($f)) return $f($arguments);

        throw new FunctionNotFoundException(sprintf('Function %s not found',$name));

    }

}