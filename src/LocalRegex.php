<?php

namespace Modestnerd\Localregex;

// Copyright (c) 2022, ModestNerd Developers
// https://modestnerd.co
//
// Use of this source code is governed by an MIT-style
// license that can be found in the LICENSE file or at
// https://opensource.org/licenses/MIT.

require_once 'Utils.php';

class LocalRegex
{
    // private static $emailAddress = '/^[a-zA-Z0-9.a-zA-Z0-9!#$%&'*+-/=?^_`{|}~]+@[a-zA-Z0-9]+\.[a-zA-Z]+(.[a-zA-Z]+)*/';

    private static $econet = '/(?:\+?263|0)(77|78)\d{7}$/';
    private static $netone = '/(?:\+?263|0)(71)\d{7}$/';
    private static $telecel = '/(?:\+?263|0)(73)\d{7}$/';

    private static $url = '/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i';


    public static function isEmail($email) {
        // TODO: Fix here
        return is_valid($email, self::$url);
    }

    /**
     * Checks if the given string is a valid Econet number
     * @param $number
     * @return bool
     */
    public static function isEconet($number) {
        return is_valid($number, self::$econet);
    }

    /**
     * Checks if the given string is a valid Netone number
     * @param $number
     * @return bool
     */
    public static function isNetone($number) {
        return is_valid($number, self::$netone);
    }

    /**
     * Checks if the given string is a valid Telecel number
     * @param $number
     * @return bool
     */
    public static function isTelecel($number) {
        return is_valid($number, self::$telecel);
    }

    public static function isUrl($url) : bool {
        return is_valid($url, self::$url);
    }
}
