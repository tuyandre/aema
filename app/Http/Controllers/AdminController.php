<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AdminController extends Controller
{
    public function getRiders(){
        $firebaseUrl = 'https://aema-a9a4b-default-rtdb.firebaseio.com/';
        $nodePath = 'RidersInformation'; // Replace with the path to your data in Firebase

        $response = Http::get("{$firebaseUrl}{$nodePath}.json");

        if ($response->successful()) {
            $data = $response->json();
            return view('pages.riders', [
                'riders' => $data,
            ]);

        } else {
            return response()->json(['error' => 'Failed to retrieve data from Firebase'], 500);
        }


    }
    public function getDrivers(){
        $firebaseUrl = 'https://aema-a9a4b-default-rtdb.firebaseio.com/';
        $nodePath = 'DriversInformation'; // Replace with the path to your data in Firebase

        $response = Http::get("{$firebaseUrl}{$nodePath}.json");

        if ($response->successful()) {
            $data = $response->json();
            return view('pages.drivers', [
                'drivers' => $data,
            ]);

        } else {
            return response()->json(['error' => 'Failed to retrieve data from Firebase'], 500);
        }

    }
    public function getAmbulances(){
        $riders=User::all();
        return view('pages.ambulances', [
            'ambulances' => $riders,
        ]);
    }
    public function getTracks(){
        $riders=User::all();
        return view('pages.tracks', [
            'ambulances' => $riders,
        ]);
    }
    public function getRiderHistory(){
        $firebaseUrl = 'https://aema-a9a4b-default-rtdb.firebaseio.com/';
        $nodePath = 'DriverHistory'; // Replace with the path to your data in Firebase

        $response = Http::get("{$firebaseUrl}{$nodePath}.json");

        if ($response->successful()) {
            $data = $response->json();
            return view('pages.rider_history', [
                'histories' => $data,
            ]);

        } else {
            return response()->json(['error' => 'Failed to retrieve data from Firebase'], 500);
        }
    }
    public function getDriverHistory(){
        $firebaseUrl = 'https://aema-a9a4b-default-rtdb.firebaseio.com/';
        $nodePath = 'RiderHistory'; // Replace with the path to your data in Firebase

        $response = Http::get("{$firebaseUrl}{$nodePath}.json");

        if ($response->successful()) {
            $data = $response->json();
            return view('pages.driver_history', [
                'histories' => $data,
            ]);

        } else {
            return response()->json(['error' => 'Failed to retrieve data from Firebase'], 500);
        }
    }
    public function getPickupHistory(){
        $firebaseUrl = 'https://aema-a9a4b-default-rtdb.firebaseio.com/';
        $nodePath = 'DriverHistory'; // Replace with the path to your data in Firebase

        $response = Http::get("{$firebaseUrl}{$nodePath}.json");

        if ($response->successful()) {
            $data = $response->json();
            return view('pages.driver_history', [
                'histories' => $data,
            ]);

        } else {
            return response()->json(['error' => 'Failed to retrieve data from Firebase'], 500);
        }
    }
}
