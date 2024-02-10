<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Http\Request;
//use Illuminate\Support\Facades\DB;

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

    // Function to search countries based on criteria
    public function search(Request $request)
    {

        //var_dump($request->all()); // Add this line to inspect the request parameters
        // Initialize query builder

        // Retrieve individual parameters
        //$name = $request->input('name');
        //var_dump('Name:', $name);


        $query = Country::query();

        // Apply filters based on request parameters
        if ($request->has('name')) {
            $query->where('name', $request->input('name'));
        }
        if ($request->has('capital')) {
            $query->where('capital', $request->input('capital'));
        }
        if ($request->has('national_sport')) {
            $query->where('national_sport', $request->input('national_sport'));
        }
        if ($request->has('national_food')) {
            $query->where('national_food', $request->input('national_food'));
        }
        if ($request->has('population')) {
            $query->where('population', $request->input('population'));
        }
        if ($request->has('nuclear_power')) {
            $query->where('nuclear_power', $request->input('nuclear_power'));
        }
        if ($request->has('continent')) {
            $query->where('continent', $request->input('continent'));
        }
        if ($request->has('government_type')) {
            $query->where('government_type', $request->input('government_type'));
        }

        // Execute the query
        $countries = $query->get();

        return response()->json($countries);
    }

}
