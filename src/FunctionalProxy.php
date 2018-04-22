<?php

namespace fwrapper\Functional;


class FunctionalProxy{


    /**
     * Proxies functions to class methods
     *
     * @param $name
     * @param $arguments
     * @return mixed
     * @throws FunctionNotFoundException;
     */
    public function __call($name, $arguments) {

        $f =  '\\Functional\\' . $name;

        if (\function_exists($f)){

            if(\is_array($arguments)){ return \call_user_func_array($f, $arguments); }

            return $f($arguments);
        }

        throw new FunctionNotFoundException(sprintf('Function %s not found',$name));

    }

}