<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Mall;

class MapController extends Controller
{
    public function markers()
    {
        $json = [];
    	foreach (Mall::get() as $mall) {
    		$json[$mall->place_id] = [
                'name' => $mall->name,
                'location' => [
                    'lat' => (float)explode(':', $mall->location)[0],
                    'lng' => (float)explode(':', $mall->location)[1],
                ],
    			'polygon_coords' => array_map(function ($coords) {
					return [
						'lat' => (float)explode(':', $coords)[0],
						'lng' => (float)explode(':', $coords)[1],
					];
				}, explode(';', $mall->polygon_coords))
    		];
    	}
    	return $json;
    }

    public function filters(Request $request)
    {
        $filters = (object)$request->only('status', 'subway');

        if (!$filters->status && !$filters->subway) return [];

        return array_map(function($mall) {
            return $mall['place_id'];
        }, Mall::select('place_id', 'status', 'subway')->where(function($q) use ($filters) {
            if ($filters->status) $q->whereIn('status', explode(';', $filters->status));
            if ($filters->subway) $q->where('subway', $filters->subway);
        })->get()->toArray());
    }

    public function marker_info($place_id)
    {
        $mall = Mall::where('place_id' , '=', $place_id)->first();
        return [
            'name' => $mall->name,
            'subway' => $mall->subway,
            'status' => $mall->status,
        ];
    }
}
