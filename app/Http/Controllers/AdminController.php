<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function getRiders(){
        $riders=User::all();
        return view('pages.riders', [
            'riders' => $riders,
        ]);
    }
    public function getDrivers(){
        $riders=User::all();
        return view('pages.drivers', [
            'drivers' => $riders,
        ]);
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
}
