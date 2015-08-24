<?php

namespace spec\bddsetup;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class CalculatorSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('bddsetup\Calculator');
    }

    function it_should_sum()
    {
        $this->sum(4, 7);
        $this->result()->shouldBe(11);
    }
}
