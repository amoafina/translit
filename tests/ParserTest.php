<?php

declare(strict_types=1);

namespace Kogarkov\Translit;

use PHPUnit\Framework\TestCase;

class ParserTest extends TestCase
{
    public function testParseCorrectly(): void
    {
        $parser = new Parser();
        $this->assertEquals(
            'Privet, ya borsch',
            $parser->go('Привет, я борщ')
        );
    }
}