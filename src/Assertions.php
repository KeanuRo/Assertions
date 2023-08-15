<?php

namespace Assert;

class Assertions
{
    public static function string(string $variable)
    {
        return  __CLASS__;
    }

    public static function stringNotEmpty(string $variable)
    {
        if (strlen($variable) === 0) {
            throw new AssertException('String is empty.');
        }
        return __CLASS__;
    }

    public static function integer(int $variable)
    {
        return __CLASS__;
    }

    public static function null(mixed $variable)
    {
        if (isset($variable)) {
            throw new AssertException('Variable "' . $variable . '" is not null.');
        }
        return __CLASS__;
    }

    public static function notNull(mixed $variable)
    {
        if (is_null($variable)) {
            throw new AssertException('Variable is null.');
        }
        return __CLASS__;
    }
}