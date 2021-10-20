<?php

namespace MailChecker\LaravelValidationRule\Tests;

use Dotenv\Dotenv;
use MailChecker\LaravelValidationRule\MailChecker;
use PHPUnit\Framework\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    protected MailChecker $mailChecker;

    public function setUp(): void
    {
        parent::setUp();

        $this->loadEnvironmentVariables();
        $this->loadMailChecker();
    }

    public function loadMailChecker()
    {
        $apiToken = getenv('API_TOKEN');

        $this->mailChecker = new MailChecker($apiToken);
    }

    protected function loadEnvironmentVariables()
    {
        if (!file_exists(__DIR__ . '/../.env')) {
            return;
        }

        $dotEnv = Dotenv::createImmutable(__DIR__ . '/..');

        $dotEnv->load();
    }
}
