<?php

use PHPUnit\Framework\TestCase;
use HttpStatusCode\HttpStatus;

class HttpStatusTest extends TestCase
{
    public function testConstantsExist()
    {
        $this->assertSame(200, HttpStatus::OK);
        $this->assertSame(404, HttpStatus::NOT_FOUND);
        $this->assertSame(500, HttpStatus::INTERNAL_SERVER_ERROR);
    }

    public function testReasonPhrase()
    {
        $this->assertSame('OK', HttpStatus::reasonPhrase(HttpStatus::OK));
        $this->assertSame('Not Found', HttpStatus::reasonPhrase(404));
        $this->assertSame('Internal Server Error', HttpStatus::reasonPhrase(500));
    }

    public function testConstantName()
    {
        $this->assertSame('OK', HttpStatus::constantName(200));
        $this->assertSame('NOT_FOUND', HttpStatus::constantName(404));
        $this->assertSame('INTERNAL_SERVER_ERROR', HttpStatus::constantName(500));
    }

    public function testAllContainsKnownCodes()
    {
        $all = HttpStatus::all();
        $this->assertArrayHasKey('OK', $all);
        $this->assertArrayHasKey('NOT_FOUND', $all);
        $this->assertSame(200, $all['OK']);
    }
}
