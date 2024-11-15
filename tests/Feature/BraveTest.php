<?php

namespace Slvler\Brave\Tests\Feature;

use Slvler\Brave\Facades\Brave;
use Slvler\Brave\Tests\Unit\TestCase;

class BraveTest extends TestCase
{
    public function test_getData()
    {
        $this->assertIsArray(Brave::web(['q' => "bitcoin"])->result());
    }
}