<?php

namespace Assert;

abstract class Assertions {
    public static function string($variable){
        if (false === is_string($variable)){
            throw new AssertException('Variable "' . $variable . '" is not a string.');
        }
        return __CLASS__;
    }
    public static function stringNotEmpty($variable){
        if (false === is_string($variable)){
            throw new AssertException('Variable "' . $variable . '" is not a string.');
        }
        if (strlen($variable) === 0){
            throw new AssertException('String is empty.');
        }
        return __CLASS__;
    }
    public static function integer($variable){
        if (false === is_integer($variable)){
            throw new AssertException('Variable "' . $variable . '" is not an integer.');
        }
        return __CLASS__;
    }
    public static function null($variable){
        if (false === is_null($variable)){
            throw new AssertException('Variable "' . $variable . '" is not null.');
        }
        return __CLASS__;
    }
    public static function notNull($variable){
        if (is_null($variable)){
            throw new AssertException('Variable is null.');
        }
        return __CLASS__;
    }
}