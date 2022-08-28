<?php

namespace Modestnerd\Localregex;

// Copyright (c) 2022, ModestNerd Developers
// https://modestnerd.co
//
// Use of this source code is governed by an MIT-style
// license that can be found in the LICENSE file or at
// https://opensource.org/licenses/MIT.

class Localregex
{
    private static $_emailAddress = FILTER_VALIDATE_EMAIL;


    public static function IsEmail($email) {
        return filter_var($email, self::$_emailAddress);
    }
}
