<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Http\Request;


class CountryController extends Controller
{
    //Function to get all countries:
    public function index()
    {
        $countries = Country::all();
        return response()->json($countries);
    }

    //Function to get one country by it's ID:
    public function show($id)
    {
        $country = Country::findOrFail($id);
        return response()->json($country);
    }

    //Function to post a new country to the database:
    public function create(Request $request)
    {
        // Validate request data
        $request->validate([
            'name' => 'required|string',
            'capital' => 'required|string',
            'national_sport' => 'required|string',
            'national_food' => 'required|string',
            'population' => 'required|numeric',
            'nuclear_power' => 'required|boolean',
            'continent' => 'required|string',
            'government_type' => 'required|string',
        ]);

        // Create a new country
        $country = Country::create($request->all());

        //var_dump($country);
        //dd($country);

        return response()->json($country, 201);
    }

    //Function to update a country by it's country ID:
    public function update(Request $request, $id)
    {
        // Validate request data
        $request->validate([
            'name' => 'string',
            'capital' => 'string',
            'national_sport' => 'string',
            'national_food' => 'string',
            'population' => 'numeric',
            'nuclear_power' => 'boolean',
            'continent' => 'string',
            'government_type' => 'string',
        ]);

        // Find the country by ID:
        $country = Country::findOrFail($id);

        // Update the country
        $country->update($request->all());

        return response()->json($country, 200);
    }


    //Function to delete a country:
    public function delete($id)
    {
        // Find the country by ID
        $country = Country::findOrFail($id);

        // Delete the country
        $country->delete();

        return response()->json(null, 204);
    }
}
