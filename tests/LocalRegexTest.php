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
        $isValid = LocalRegex::isEmail('iamngoni@modestnerd.co');
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

    public function testIsValidEconetNumberWithCountryCode() {
        $isValid = LocalRegex::isEconet('263771234567');
        $this->assertEquals(
            true,
            $isValid
        );
    }

    public function testIsValidNetoneNumberWithCountryCode() {
        $isValid = LocalRegex::isNetone('263711234567');
        $this->assertEquals(
            true,
            $isValid
        );
    }

    public function testIsValidTelecelNumberWithCountryCode() {
        $isValid = LocalRegex::isTelecel('263731234567');
        $this->assertEquals(
            true,
            $isValid
        );
    }

    public function testIsValidEconetNumberWithCountryCodePlus() {
        $isValid = LocalRegex::isEconet('+263771234567');
        $this->assertEquals(
            true,
            $isValid
        );
    }

    public function testIsValidNetoneNumberWithCountryCodePlus() {
        $isValid = LocalRegex::isNetone('+263711234567');
        $this->assertEquals(
            true,
            $isValid
        );
    }

    public function testIsValidTelecelNumberWithCountryCodePlus() {
        $isValid = LocalRegex::isTelecel('+263731234567');
        $this->assertEquals(
            true,
            $isValid
        );
    }

    public function testIsValidZimMobileNumber() {
        $isValid = LocalRegex::isZimMobile('0771234567');
        $this->assertEquals(
            true,
            $isValid
        );
    }

    public function testIsValidZimMobileNumberWithCountryCode() {
        $isValid = LocalRegex::isZimMobile('263771234567');
        $this->assertEquals(
            true,
            $isValid
        );
    }

    public function testIsValidZimMobileNumberWithCountryCodePlus() {
        $isValid = LocalRegex::isZimMobile('+263771234567');
        $this->assertEquals(
            true,
            $isValid
        );
    }

    public function testIsAfricomNumberWithCountryCodePlus() {
        $isValid = LocalRegex::isAfricom('+2638644105500');
        $this->assertEquals(
            true,
            $isValid
        );
    }

    public function testIsAfricomNumberWithCountryCode() {
        $isValid = LocalRegex::isAfricom('2638644105500');
        $this->assertEquals(
            true,
            $isValid
        );
    }

    public function testIsAfricomNumber() {
        $isValid = LocalRegex::isAfricom('08644105500');
        $this->assertEquals(
            true,
            $isValid
        );
    }

    public function testIsDandemutandeNumberWithCountryCodePlus() {
        $isValid = LocalRegex::isDandemutande('+2638612003000');
        $this->assertEquals(
            true,
            $isValid
        );
    }

    public function testIsDandemutandeNumberWithCountryCode() {
        $isValid = LocalRegex::isDandemutande('2638612003000');
        $this->assertEquals(
            true,
            $isValid
        );
    }

    public function testIsDandemutandeNumber() {
        $isValid = LocalRegex::isDandemutande('08612003000');
        $this->assertEquals(
            true,
            $isValid
        );
    }

    public function testIsLiquidNumberWithCountryCodePlus() {
        $isValid = LocalRegex::isLiquid('+2638677020251');
        $this->assertEquals(
            true,
            $isValid
        );
    }

    public function testIsLiquidNumberWithCountryCode() {
        $isValid = LocalRegex::isLiquid('2638677020251');
        $this->assertEquals(
            true,
            $isValid
        );
    }

    public function testIsLiquidNumber() {
        $isValid = LocalRegex::isLiquid('08677020251');
        $this->assertEquals(
            true,
            $isValid
        );
    }

    public function testIsPowertelNumberWithCountryCodePlus() {
        $isValid = LocalRegex::isPowertel('+2638611208281');
        $this->assertEquals(
            true,
            $isValid
        );
    }

    public function testIsPowertelNumberWithCountryCode() {
        $isValid = LocalRegex::isPowertel('2638611208281');
        $this->assertEquals(
            true,
            $isValid
        );
    }

    public function testIsPowertelNumber() {
        $isValid = LocalRegex::isPowertel('08611208281');
        $this->assertEquals(
            true,
            $isValid
        );
    }

    public function testIsTelcoWithCountryCodePlus() {
        $isValid = LocalRegex::isTelco('+2638683000000');
        $this->assertEquals(
            true,
            $isValid
        );
    }

    public function testIsTelcoWithCountryCode() {
        $isValid = LocalRegex::isTelco('2638683000000');
        $this->assertEquals(
            true,
            $isValid
        );
    }

    public function testIsTelco() {
        $isValid = LocalRegex::isTelco('08683000000');
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

    public function testIsZarnetWithCountryCodePlus() {
        $isValid = LocalRegex::isZarnet('+2638622009070');
        $this->assertEquals(
            true,
            $isValid
        );
    }

    public function testIsZarnetWithCountryCode() {
        $isValid = LocalRegex::isZarnet('2638622009070');
        $this->assertEquals(
            true,
            $isValid
        );
    }

    public function testIsZarnet() {
        $isValid = LocalRegex::isZarnet('08622009070');
        $this->assertEquals(
            true,
            $isValid
        );
    }

    public function testIsTeloneWithCountryCodePlus() {
        $isValid = LocalRegex::isTelone('+2638688003099');
        $this->assertEquals(
            true,
            $isValid
        );
    }

    public function testIsTeloneWithCountryCode() {
        $isValid = LocalRegex::isTelone('2638688003099');
        $this->assertEquals(
            true,
            $isValid
        );
    }

    public function testIsTelone() {
        $isValid = LocalRegex::isTelone('08688003099');
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