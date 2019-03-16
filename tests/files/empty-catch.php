<?php

declare(strict_types=1);

try {
    preg_match('/^a|b|c|d$/', 'a');
} catch (RuntimeException $exception) {
}
