<?php

namespace Modestnerd\Localregex;

// Copyright (c) 2022, ModestNerd Developers
// https://modestnerd.co
//
// Use of this source code is governed by an MIT-style
// license that can be found in the LICENSE file or at
// https://opensource.org/licenses/MIT.

require_once 'Utils.php';

use Modestnerd\Localregex\LocalRegexException;

class LocalRegex
{
    // private static $emailAddress = '/^[a-zA-Z0-9.a-zA-Z0-9!#$%&'*+-/=?^_`{|}~]+@[a-zA-Z0-9]+\.[a-zA-Z]+(.[a-zA-Z]+)*/';

    private static $econet = '/(?:\+?263|0)(77|78)\d{7}$/';
    private static $netone = '/(?:\+?263|0)(71)\d{7}$/';
    private static $telecel = '/(?:\+?263|0)(73)\d{7}$/';
    private static $mobile = '/^([+]\d{2})?\d{10}$/';

    private static $africom = '/(?:\+?263|0)(8644)\d{6}$/';
    private static $dandemutande = '/(?:\+?263|0)(8612)\d{6}$/';
    private static $liquid = '/(?:\+?263|0)(8677)\d{6}$/';
    private static $powertel = '/(?:\+?263|0)(8611)\d{6}$/';
    private static $telco = '/(?:\+?263|0)(8683)\d{6}$/';
    private static $telone = '/(?:\+?263|0)(8688)\d{6}$/';
    private static $zarnet = '/(?:\+?263|0)(8622)\d{6}$/';

    private static $nationalId = '/^(\d{2})(-|\s*)(\d{6,7})(\s)*([A-Z]{1})(\s)*(\d{2})$/';
    private static $numberPlate = '/^[A-Z]{3}(-|\s*)\d{4}$/';
    private static $passportNumber = '/^[A-Z]{2}\d{6}$/';
    private static $driversLicense = '/\d{5}[a-zA-Z]{2}/';

    private static $url = '/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i';
    private static $password = '/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?\d)(?=.*?[!@#\$&*~^%()+=|]).{8,}$/';


    public static function isEmail($email) : bool {
        // TODO: Fix here
        return is_valid($email, self::$url);
    }

    /**
     * Checks if the given string is a valid Econet number
     * @param $number
     * @return bool
     */
    public static function isEconet($number) : bool {
        return is_valid($number, self::$econet);
    }

    /**
     * Checks if the given string is a valid Netone number
     * @param $number
     * @return bool
     */
    public static function isNetone($number) : bool {
        return is_valid($number, self::$netone);
    }

    /**
     * Checks if the given string is a valid Telecel number
     * @param $number
     * @return bool
     */
    public static function isTelecel($number) : bool {
        return is_valid($number, self::$telecel);
    }

    /**
     * Checks if the given string is a valid Zimbabwean mobile number
     * @param $number
     * @return bool
     */
    public static function isZimMobile($number) : bool {
        return self::isEconet($number) || self::isNetone($number) || self::isTelecel($number);
    }

    /**
     * Checks if the given string is a valid mobile number
     * @param $number
     * @return bool
     */
    public static function isMobile($number) : bool {
        return is_valid($number, self::$mobile);
    }

    /**
     * Checks if the given string is a valid Africom number
     * @param $number
     * @return bool
     */
    public static function isAfricom($number) : bool {
        return is_valid($number, self::$africom);
    }

    /**
     * Checks if the given string is a valid Dandemutande number
     * @param $number
     * @return bool
     */
    public static function isDandemutande($number) : bool {
        return is_valid($number, self::$dandemutande);
    }

    /**
     * Checks if the given string is a valid Liquid number
     * @param $number
     * @return bool
     */
    public static function isLiquid($number) : bool {
        return is_valid($number, self::$liquid);
    }

    /**
     * Checks if the given string is a valid Powertel number
     * @param $number
     * @return bool
     */
    public static function isPowertel($number) : bool {
        return is_valid($number, self::$powertel);
    }

    /**
     * Checks if the given string is a valid Telco number
     * @param $number
     * @return bool
     */
    public static function isTelco($number) : bool {
        return is_valid($number, self::$telco);
    }

    /**
     * Checks if the given string is a valid Telone number
     * @param $number
     * @return bool
     */
    public static function isTelone($number) : bool {
        return is_valid($number, self::$telone);
    }

    /**
     * Checks if the given string is a valid Zarnet number
     * @param $number
     * @return bool
     */
    public static function isZarnet($number) : bool {
        return is_valid($number, self::$zarnet);
    }

    /**
     * Checks if the given string is a valid Zimbabwean VoIP number
     * @param $number
     * @return bool
     */
    public static function isZimVoip($number) : bool {
        return self::isAfricom($number) || self::isDandemutande($number) || self::isLiquid($number) || self::isPowertel($number) || self::isTelco($number) || self::isTelone($number) || self::isZarnet($number);
    }

    /**
     * Checks if the given string is a valid Zimbabwean National ID
     * @param $id
     * @return bool
     */
    public static function isNationalId($id) : bool {
        return is_valid($id, self::$nationalId);
    }

    /**
     * Checks if the given string is a valid Zimbabwean number plate
     * @param $plate
     * @return bool
     */
    public static function isNumberPlate($plate) : bool {
        return is_valid($plate, self::$numberPlate);
    }

    /**
     * Checks if the given string is a valid Zimbabwean passport number
     * @param $passport
     * @return bool
     */
    public static function isPassportNumber($passport) : bool {
        return is_valid($passport, self::$passportNumber);
    }

    /**
     * Checks if the given string is a valid Zimbabwean drivers license number
     * @param $license
     * @return bool
     */
    public static function isDriversLicense($license) : bool {
        return is_valid($license, self::$driversLicense);
    }

    /**
     * Checks if the given string is a valid url
     * @param $url
     * @return bool
     */
    public static function isUrl($url) : bool {
        return is_valid($url, self::$url);
    }

    /**
     * Checks if the given string is a valid password
     * @param $password
     * @return bool
     */
    public static function isPassword($password) : bool {
        return is_valid($password, self::$password);
    }

    /**
     * Checks if number is valid and returns in the requested format
     * 
     * @param $number
     * @param $format
     * @return string
     * @throws LocalRegexException
     */
    public static function formatNumber(string $number, int $format) : string {
        $isValid = self::isZimMobile($number);
        if ($isValid) {
            if ($format == FormatType::CountryCode){
                return format_country_code($number);
            } else if ($format == FormatType::CountryCodePlus) {
                return format_country_code_plus($number);
            } else if ($format == FormatType::Regular) {
                return format_regular($number);
            } else {
                throw new LocalRegexException('Invalid format type');
            }
        } else {
            throw new LocalRegexException('Invalid mobile number');
        }
    }
}
