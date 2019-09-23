<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\lead;
class ExampleTest extends TestCase
{
    public function testTitleCount()
    {
        $lead=new lead;
        $titles=$lead->get_all_titles();
        $this->assertTrue(count($titles)==6,'it should have 6 items');
    }
    // public function testBasicTest()
    // {
    //     $this->assertTrue(True);
    // }
}
