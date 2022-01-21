<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Http\Resources\HotelResource;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\Hotel;
use App\Models\Review;

class HotelResourceTest extends TestCase
{
    use RefreshDatabase; //refresh db data after every test

    /**
     * A basic unit test example.
     *
     * @return void
     */

    public function test_can_show_hotel() {

        $hotel = Hotel::factory()->create(['active'=>true]);
        $response = $this->get(route('hotel.show', $hotel->id));
        self::assertEquals(200, $response->getStatusCode());
        self::assertJson($content = $response->content());
        $response->assertJsonStructure([
            'data' => [
                'hotel_name',
                'hotel_star_rating'
            ]
        ]);//assert that it returns with no reviews
    }

    public function test_can_show_inactive_hotel() {

        $hotel = Hotel::factory()->create(['active'=>false]);
        $response = $this->get(route('hotel.show', $hotel->id));
        self::assertEquals(200, $response->getStatusCode());
        self::assertJson($content = $response->content());
        self::assertEmpty(json_decode($response->content(),true)['data']); //assert that it returns empty since active is false
    }

    public function test_can_show_hotel_with_review() {

        $hotel_id = Hotel::factory()->create(['active'=>true])->id;
        $review = Review::factory(['hotel_id'=>$hotel_id])->create();
        $response = $this->get(route('hotel.show', $hotel_id));
        self::assertEquals(200, $response->getStatusCode());
        self::assertJson($content = $response->content());
        $response->assertJsonStructure([
            'data' => [
                'hotel_name',
                'hotel_star_rating',
                'reviews'
            ]
        ]);//assert that it returns with reviews
    }
}
