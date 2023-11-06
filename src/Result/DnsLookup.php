<?php

declare(strict_types=1);

namespace Pest\Stressless\Result;

use Pest\Stressless\ValueObjects\Result;

/**
 * @internal
 *
 * @property-read Duration $duration
 */
final readonly class DnsLookup
{
    /**
     * Creates a new requests instance.
     */
    public function __construct(private Result $result)
    {
        //
    }

    /**
     * Returns the details of the requests DNS Lookup duration.
     */
    public function duration(): Duration
    {
        return new Duration($this->result->toArray()['metrics']['http_req_connecting']['values']);
    }
}