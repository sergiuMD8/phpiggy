<?php

declare(strict_types=1);

namespace Framework\Exceptions;

use RuntimeException;

class ValidationException extends RuntimeException
{
    public function __construct(public array $errors, int $code = 422)
    {
        $message = $this->formatErrors($errors);
        parent::__construct($message, $code);
    }

    private function formatErrors(array $errors): string
    {
        return implode(', ', array_map(
            fn ($key, $value) => "$key: $value",
            array_keys($errors),
            $errors
        ));
    }
}
