<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class test extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {

        $response1 = $this->get('/convention');
        $response3 = $this->get('/project');
        $response2 = $this->get('/division');
        $response4 = $this->get('/service');
        $response5= $this->get('/commune');
        $response6 = $this->get('/partenaire');


        $response1->assertStatus(200);
        $response2->assertStatus(200);
        $response3->assertStatus(200);
        $response4->assertStatus(200);
        $response5->assertStatus(200);
        $response6->assertStatus(200);
    }
}
