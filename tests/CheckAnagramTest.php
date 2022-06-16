<?php


use App\LeadDeskTasks\CheckAnagram;
use PHPUnit\Framework\TestCase;

class CheckAnagramTest extends TestCase
{
    private CheckAnagram $anagram;

    protected function setUp(): void
    {
        $this->anagram = new CheckAnagram();
    }

    public function testTrueIsAnagram(): void
    {
        $this->assertEquals(true, $this->anagram->isAnagram('CAR', 'CAR'));
        $this->assertEquals(true, $this->anagram->isAnagram('CAR', 'CRA'));
        $this->assertEquals(true, $this->anagram->isAnagram('CAR', 'ACR'));
        $this->assertEquals(true, $this->anagram->isAnagram('CAR', 'ARC'));
        $this->assertEquals(true, $this->anagram->isAnagram('CAR', 'RAC'));
        $this->assertEquals(true, $this->anagram->isAnagram('CAR', 'RCA'));
    }

    public function testFalseIsAnagram(): void
    {
        $this->assertEquals(false, $this->anagram->isAnagram('CAR', 'RAO'));
        $this->assertEquals(false, $this->anagram->isAnagram('CAR', 'RAORAO'));
        $this->assertEquals(false, $this->anagram->isAnagram('CAR', 'RA'));
    }

    // Unfortunately I can not figure out one more really productive test because this function return just true/false.
}
