<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Mall;

class MapController extends Controller
{
    public function json()
    {
    	$json = [];
    	foreach (Mall::get() as $mall) {
    		$json[$mall->place_id] = [
    			'name' => $mall->name,
    			'status' => $mall->status,
    			'subway' => $mall->subway,
    			'polygon_coords' => array_map(function ($coords) {
					$coords = explode(':', $coords);
					return [
						'lat' => $coords[0],
						'lng' => $coords[1],
					];
				}, explode(';', $mall->polygon_coords))
    		];
    	}
    	return $json;
    }
}
