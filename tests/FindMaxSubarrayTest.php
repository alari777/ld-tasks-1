<?php


use App\LeadDeskTasks\FindMaxSubarray;
use PHPUnit\Framework\TestCase;

class FindMaxSubarrayTest extends TestCase
{

    private FindMaxSubarray $maxsubarray;

    protected function setUp() : void
    {
        $this->maxsubarray = new FindMaxSubarray();
    }

    public function testIntContiguous(): void
    {
        $this->assertEquals(6, $this->maxsubarray->contiguous([-1, 1, 5, -6, 3]));
    }

    public function testFloatContiguous(): void
    {
        $this->assertEquals(6, $this->maxsubarray->contiguous([-1.0, 1.0, 5.0, -6.0, 3.0]));
    }

    public function testStrContiguous(): void
    {
        $this->assertEquals(6, $this->maxsubarray->contiguous([-1, 1, 5, '-6', '3']));
    }

    public function testZeroContiguous(): void
    {
        $this->assertEquals(0, $this->maxsubarray->contiguous([-1, -2, -7]));
    }
}
