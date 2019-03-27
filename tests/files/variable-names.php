<?php

declare(strict_types=1);

$camelCaseValid = 'yes';

$snake_case_is_invalid = true;

$obj = new class ()
{
    /**
     * @var mixed
     */
    private $privateWithoutUnderscoreIsValid;

    /**
     * @var mixed
     */
    protected $protectedWithoutUnderscoreIsValid;

    /**
     * @var mixed
     */
    private $_privateWithUnderscoreIsInvalid;

    /**
     * @var mixed
     */
    protected $_protectedWithUnderscoreIsInvalid;

    /**
     * @var mixed
     */
    protected $snake_case_is_invalid;

    private function privateWithoutUnderscoreIsValid(): void
    {
    }

    protected function protectedWithoutUnderscoreIsValid(): void
    {
    }

    public function test(string $snake_case_param_is_invalid): void
    {
    }
};
