<?php

namespace App\Http\Controllers\API;

use App\Http\Resources\HotelResource;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Hotel;

class HotelController extends Controller
{
    public function show($id)
    {
        $hotel = Hotel::find($id);
        return new HotelResource($hotel);
    }
}
