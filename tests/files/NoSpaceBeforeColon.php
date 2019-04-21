<?php

declare(strict_types=1);

namespace TZachi;

class NoSpaceBeforeColon
{
    public function validReturnType(): void
    {
    }

    public function invalidReturnTypeDeclaration() : int
    {
        return 1;
    }
}
