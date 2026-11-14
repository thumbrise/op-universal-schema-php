<?php

declare(strict_types=1);

namespace Tests;

use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;
use Thumbrise\OP\Universal\Schema\Kind;
use Thumbrise\OP\Universal\Schema\Term;

final class TermTest extends TestCase
{
    #[DataProvider('presenceAndNullability')]
    public function testPresenceAndNullabilityRemainIndependent(?bool $required, ?bool $nullable): void
    {
        $term = new Term('count', '', required: $required, kind: Kind::Integer, nullable: $nullable);
        $wire = json_decode(json_encode($term, JSON_THROW_ON_ERROR), true, flags: JSON_THROW_ON_ERROR);

        self::assertSame($required, $wire['required']);
        self::assertSame($nullable, $wire['nullable']);
        self::assertSame('integer', $wire['kind']);
    }

    public static function presenceAndNullability(): iterable
    {
        foreach ([true, false, null] as $required) {
            foreach ([true, false, null] as $nullable) {
                yield [ $required, $nullable ];
            }
        }
    }

    public function testExistingPositionalConstructionRemainsSupported(): void
    {
        $term = new Term('id', '', true, Kind::String, null, null, []);

        self::assertNull($term->nullable);
        self::assertTrue($term->required);
        self::assertSame(Kind::String, $term->kind);
    }
}
