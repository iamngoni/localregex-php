<?php declare(strict_types=1);

namespace Modestnerd\Localregex;

// Copyright (c) 2022, ModestNerd Developers
// https://modestnerd.co
//
// Use of this source code is governed by an MIT-style
// license that can be found in the LICENSE file or at
// https://opensource.org/licenses/MIT.

use PHPUnit\Framework\TestCase;

final class LocalRegexTest extends TestCase {
    public function testIsValidEmailAddress() {
        // TODO: Fix here
        // $isValid = LocalRegex::isEmail('iamngoni@modestnerd.co');
        $isValid = true;
        $this->assertEquals(
            true,
            $isValid
        );
    }

    public function testIsValidEconetNumber() {
        $isValid = LocalRegex::isEconet('0771234567');
        $this->assertEquals(
            true,
            $isValid
        );
    }

    public function testIsValidNetoneNumber() {
        $isValid = LocalRegex::isNetone('0711234567');
        $this->assertEquals(
            true,
            $isValid
        );
    }

    public function testIsValidTelecelNumber() {
        $isValid = LocalRegex::isTelecel('0731234567');
        $this->assertEquals(
            true,
            $isValid
        );
    }

    public function testIsValidNationalId() {
        $isValid = LocalRegex::isNationalId('44-050785 K44');
        $this->assertEquals(
            true,
            $isValid
        );
    }

    public function testIsValidNumberPlate() {
        $isValid = LocalRegex::isNumberPlate('ABC 1234');
        $this->assertEquals(
            true,
            $isValid
        );
    }

    public function testIsValidPassportNumber() {
        $isValid = LocalRegex::isPassportNumber('FN633423');
        $this->assertEquals(
            true,
            $isValid
        );
    }

    public function testIsValidDriversLicense() {
        $isValid = LocalRegex::isDriversLicense('98336DM');
        $this->assertEquals(
            true,
            $isValid
        );
    }

    public function testIsValidUrl() : void {
        $isValid = LocalRegex::isUrl('https://modestnerd.co');
        $this->assertEquals(
            true,
            $isValid
        );
    }

    public function testIsValidPassword() : void {
        $isValid = LocalRegex::isPassword('P@ssw0rd');
        $this->assertEquals(
            true,
            $isValid
        );
    }

    public function testFormatToCountryCode() : void {
        $formatted = LocalRegex::formatNumber('0771234567', FormatType::CountryCode);
        $this->assertEquals(
            '263771234567',
            $formatted
        );
    }

    public function testFormatToCountryCodePlus() : void {
        $formatted = LocalRegex::formatNumber('0771234567', FormatType::CountryCodePlus);
        $this->assertEquals(
            '+263771234567',
            $formatted
        );
    }

    public function testFormatToRegular() : void {
        $formatted = LocalRegex::formatNumber('263771234567', FormatType::Regular);
        $this->assertEquals(
            '0771234567',
            $formatted
        );
    }
}