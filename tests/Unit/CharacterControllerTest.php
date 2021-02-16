<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use App\Http\Controllers\CharacterController;
use App\Models\Character;

class CharacterControllerTest extends TestCase
{

    use RefreshDatabase;

    public function test_creates_character_from_name()
    {
        $request = Request::create('/store', 'POST',['name' => 'ryu']);
        $controller = new CharacterController();

        $response = $controller->store($request);

        $character = Character::where('name', 'ryu')->first();
        $this->assertNotNull($character);
    }


    public function test_fails_validation_if_name_is_missing()
    {
        $this->expectException(ValidationException::class);
        $request = Request::create('/store', 'POST',[]);
        $controller = new CharacterController();

        $response = $controller->store($request);
    }
}
