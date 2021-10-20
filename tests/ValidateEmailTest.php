<?php

namespace MailChecker\LaravelValidationRule\Tests;

use MailChecker\LaravelValidationRule\MailChecker;

class ValidateEmailTest extends TestCase
{
    const VALID_EMAIL   = 'hello@mailchecker.io';
    const INVALID_EMAIL = 'goodbye@mailchecker.io';

    public function test_instantiate_an_object()
    {
        $rule = new MailChecker('api-token');

        $this->assertTrue(is_object($rule));
    }

    public function test_validate_invalid_email()
    {
        $checkedEmail = $this->mailChecker->passes('email', self::INVALID_EMAIL);

    }

//    public function test_validate_valid_email()
//    {
//        $checkedEmail = $this->mailChecker->passes('email', self::VALID_EMAIL);
//
//    }
}
