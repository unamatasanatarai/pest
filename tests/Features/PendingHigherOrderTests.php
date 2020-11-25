<?php

use Pest\PendingObjects\TestCall;
use PHPUnit\Framework\TestCase;

uses(Gettable::class);

/**
 * @return TestCase|TestCall|Gettable
 */
function get(string $route)
{
    return test()->get($route);
}

trait Gettable
{
    /**
     * @return TestCase|TestCall|Gettable
     */
    public function get(string $route)
    {
        expect($route)->not->toBeEmpty();

        return $this;
    }
}

get('foo')->get('bar')->expect(true)->toBeTrue();
get('foo')->expect(true)->toBeTrue();
