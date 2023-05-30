<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ConfigurationTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    // {
    //     $shortname = config("coba.biodata.shortName");
    //     $fullName = config("coba.biodata.fullName");
    //     self::assertEquals($shortname, "rizqi");
    //     self::assertEquals($fullName, "muhrizqi");
    // }
    {
        $x = config("coba.mapel.x");
        $xi = config("coba.mapel.xi");
        self::assertEquals($x, "ipa, b.inggris, b.indo");
        self::assertEquals($xi, "pkk, webdev, pancasila");
    }
}
