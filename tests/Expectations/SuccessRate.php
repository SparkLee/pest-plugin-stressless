<?php

declare(strict_types=1);

use function Pest\Stressless\stress;

it('may pass', function (): void {
    $result = stress('nunomaduro.com')
        ->with(2)->concurrentRequests()
        ->for(1)->second();

    expect($result->failureRate())->toBe(0.0);
});

it('may fail', function (): void {
    $result = stress('dummy-nunomaduro.com')
        ->with(2)->concurrentRequests()
        ->for(1)->second();

    expect($result->failureRate())->toBe(100.0);
});