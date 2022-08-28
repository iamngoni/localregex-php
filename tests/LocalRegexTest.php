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
    public function testIsValidUrl() : void {
        $isValid = LocalRegex::isUrl('https://modestnerd.co');
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
}