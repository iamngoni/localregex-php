<?php

namespace Modestnerd\Localregex;

// Copyright (c) 2022, ModestNerd Developers
// https://modestnerd.co
//
// Use of this source code is governed by an MIT-style
// license that can be found in the LICENSE file or at
// https://opensource.org/licenses/MIT.

if (!function_exists('is_valid')) {
    function is_valid($value, $regex) {
        return preg_match($regex, $value);
    }
}

if (!function_exists('format_country_code')) {
    function format_country_code($number) {
       $endDigits = substr($number, -9);
       return '263' . $endDigits;
    }
}

if (!function_exists('format_country_code_plus')) {
    function format_country_code_plus($number) {
        $endDigits = substr($number, -9);
        return '+263' . $endDigits;
    }
}

if (!function_exists('format_regular')) {
    function format_regular($number) {
        $endDigits = substr($number, -9);
        return '0' . $endDigits;
    }
}