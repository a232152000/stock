<?php

namespace Tests\Feature\UserStock;

use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Auth;
use Illuminate\Testing\Fluent\AssertableJson;
use Tests\TestCase;

class IndexControllerTest extends TestCase
{
//    use RefreshDatabase;

    use DatabaseTransactions;

    protected function setUp(): void
    {
        parent::setUp();

        $this->seed();

        $credentials = [
            'email' => 'a232152000@gmail.com',
            'password' => 'password'
        ];

        Auth::attempt($credentials);
    }

    protected function tearDown(): void
    {
        parent::tearDown();
    }

    /**
     * @dataProvider successInputTestCase
     */
    public function test_list_success($body, $status, $assertion): void
    {
//        $user = User::first();

        $response = $this->actingAs(\auth()->user())
            ->json('GET', 'api/user-stock', $body);

        $response->assertStatus($status);
//            $response->assertJson($assertion);
    }

    public function successInputTestCase()
    {
        return [
            '沒帶參數' => [
                'body' => [
                ],
                'status' => 200,
                'assertion' => [
                    [
                        'id' => 1,
                        'code' => '0050',
                        'n' => '元大台華50',
                        'z' => 118.05,
                        'o' => 118,
                        'h' => 118.15,
                        'l' => 117.7,
                        'y' => 119.15,
                        'final_at' => '2022-08-10 10:54:10',
                    ],
                    [
                        'id' => 2,
                        'code' => '00881',
                        'n' => '國泰台灣5G+',
                        'z' => 14.75,
                        'o' => 14.74,
                        'h' => 14.76,
                        'l' => 14.69,
                        'y' => 14.86,
                        'final_at' => '2022-08-10 10:54:10',
                    ],
                ],
            ],
            '有帶參數，search無資料' => [
                'body' => [
                    'search' => 'abcde',
                    'page' => 1,
                    'perPage' => 1,
                    'sort' => 'id',
                    'direction' => 'desc',
                ],
                'status' => 200,
                'assertion' => [

                ],
            ],
            '有帶參數，search有資料' => [
                'body' => [
                    'search' => '0050',
                    'page' => 1,
                    'perPage' => 1,
                    'sort' => 'id',
                    'direction' => 'desc',
                ],
                'status' => 200,
                'assertion' => [
                    [
                        'id' => 1,
                        'code' => '0050',
                        'n' => '元大台華50',
                        'z' => 118.05,
                        'o' => 118,
                        'h' => 118.15,
                        'l' => 117.7,
                        'y' => 119.15,
                        'final_at' => '2022-08-10 10:54:10',
                    ]
                ],
            ]
        ];
    }

}
