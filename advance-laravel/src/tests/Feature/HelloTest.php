<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;
use Illuminate\Support\Facades\Hash; // 教科書とは別のやり方にする為、追加でインポート

class HelloTest extends TestCase
{
    use RefreshDatabase;

    public function testHello()
    {
        // 教科書の書き方: DBに保存される際にPWがハッシュ化されて、不一致のエラー発生
        // User::factory()->create([
        //     'name' => 'aaa',
        //     'email' => 'bbb@ccc.com',
        //     'password' => 'test12345'
        // ]);
        // $this->assertDatabaseHas('users', [
        //     'name' => 'aaa',
        //     'email' => 'bbb@ccc.com',
        //     'password' => 'test12345'
        // ]);

        // 教科書とは別の確認の仕方
        $user = User::factory()->create([
            'name' => 'aaa',
            'email' => 'bbb@ccc.com',
            'password' => 'test12345'
        ]);
        $this->assertDatabaseHas('users', [
            'name' => 'aaa',
            'email' => 'bbb@ccc.com'
        ]);
        $this->assertTrue(Hash::check('test12345', $user->password));

        // $this->assertTrue(true);

        // $arr = [];
        // $this->assertEmpty($arr);

        // $txt = "Hello World";
        // $this->assertEquals('Hello World', $txt);

        // $n = random_int(0, 100);
        // $this->assertLessThan(100, $n);

        // $response = $this->get('/');
        // $response->assertStatus(200);

        // $response = $this->get('/no_route');
        // $response->assertStatus(404);
    }
    /**
     * A basic feature test example.
     */
    // public function test_example(): void
    // {
    //     $response = $this->get('/');

    //     $response->assertStatus(200);
    // }
}
