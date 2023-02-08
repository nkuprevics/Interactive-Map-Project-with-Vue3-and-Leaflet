<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Coordinate;
use Illuminate\Http\Request;

class CoordinatesController extends Controller
{
    public function displayMarkers()
    {
        $coordinates = Coordinate::all();

        return response()->json([
            'coordinates' => $coordinates
        ]);
    }

    public function store(Request $request)
    {
        $color = 3;

        if ($request->color_id != null) {
            $color = $request->color_id;
        }

        $coordinate = Coordinate::create([
            'name' => $request->name,
            'lat' => $request->lat,
            'lon' => $request->lon,
            'description' => $request->description,
            'color_id' => $color
        ]);


        return response()->json([
            'message' => 'Coordinate created successfully.',
            'coordinate' => $coordinate
        ]);

    }

    public function destroy($id)
    {
        $coordinate = Coordinate::find($id);
        $coordinate->delete();

        return response()->json(['message' => 'Coordinate deleted successfully.']);
    }


}
