<?php

namespace MailChecker\LaravelValidationRule;

use Exception;
use Illuminate\Contracts\Validation\Rule;
use MailChecker\PhpSdk\MailChecker as MailCheckerSdk;

class MailChecker implements Rule
{
    protected MailCheckerSdk $mailChecker;

    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct(string $apiKey)
    {
        $this->mailChecker = new MailCheckerSdk($apiKey);
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return __('The email address does not exist.');
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param string $attribute
     * @param mixed  $value
     *
     * @return bool
     */
    public function passes($attribute, $value)
    {
        try {
            $email = $this->mailChecker->validateEmail($value);

            return $email->isDeliverable();
        } catch (Exception $exception) {
            return true;
        }
    }
}
