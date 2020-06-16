<?php

    function checkIsPalindrom($palindrom)
    {

        if ('string' !== gettype($palindrom)) {
            throw new InvalidArgumentException('Argument is not string');
        }

        $palindrom = trim($palindrom);


        if (strrev($palindrom) == $palindrom) {
            return true;
        }

        return false;
    }

    var_dump(checkIsPalindrom('kajak'));
    var_dump(checkIsPalindrom(123)); //throw Exception