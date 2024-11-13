<?php

declare(strict_types=1);

namespace Slvler\Brave\Exceptions;

use InvalidArgumentException;
/**
 * @internal
 */
class MissingApiKey extends InvalidArgumentException
{
    public static function create(): self
    {
        return new self(
            'The Brave API Key is missing. Please publish the [brave.php] configuration file and set the [api_key].'
        );
    }
}
