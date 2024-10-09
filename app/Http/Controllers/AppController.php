<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Party;

class AppController extends Controller
{
    public function index()
    {
        // Insert option one
        $party = new Party;
        $party->full_name = "Nevil Makadia";
        $party->phone_number = "8140160083";
        // $party->save();

        // Insert option two
        $param = array(
            'full_name' => "Girish",
            'phone_number' => "1234567890",
            'address' => "Bhojani Street",
            'city' => "Bhayavadar",
        );
        # <---------------------------------------------------------------------------------------------------------->
        // Party::create($param);

        // Select all records
        // $parties = Party::all();
        // dd($parties);

        // Select one record by ID
        // $id = 4;
        // $party = Party::find($id);
        // dd($party);

        // Select one record by another column/field
        // $party = Party::where("phone_number", "8140160083")->get();
        // dd($party);

        // Update
        // $id = 1;
        // $party = Party::find($id);
        // $party->full_name = "Pankaj Kumar";
        // $party->save();

        // Delete
        // $id = 4;
        // $party = Party::find($id);
        // $party->delete();

        # <---------------------------------------------------------------------------------------------------------->
        
        // Database operations using query builder



        return "Database Operation";
        return view('welcome');
    }

    public function about()
    {
        return view('about');
    }
}
