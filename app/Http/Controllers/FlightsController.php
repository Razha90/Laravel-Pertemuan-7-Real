<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Flight;
use App\Http\Requests\FlightPostRequest;
use Illuminate\Auth\Events\Validated;

class FlightsController extends Controller
{
    //
    public function index() {
        $flight = Flight::paginate(12);
        return view('index', ['flights'=> $flight]);
    }
    public function show($id) {
        $flight = Flight::find($id);
        return $flight;
    }
    public function create() {
        return view('flight-form');
    }
    public function store(Request $request) {
        $flight = new Flight;
        $flight->create($request->all());

        return redirect()->route('flight.index')->with('status', "Data Saved Succesfully");        
        // $passenger = $request->passengers;
        // $departure = $request->departures;

        // dd([$passenger, $departure]);
    }
    public function edit($id) {
        $flight = Flight::find($id);
        return view(
            'flight-edit-form',
            ['flight'=>$flight]
        );
    }
    public function update(Request $request, $id) {
        $flight = Flight::find($id);
        $flight -> passengers= $request->passengers;
        $flight -> departures= $request->departures;
        $flight->save();
        return redirect()->route('flight.index');
    }
    public function destroy($id) {
        $flight = Flight::find($id);
        $flight->delete();
        return redirect()->route('flight.index');
    }

    public function drop($id) {
        $flight = Flight::find($id);
        return view(
            'flight-delete-form',
            ['flight'=>$flight]
        );
    }
}