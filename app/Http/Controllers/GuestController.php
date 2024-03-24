<?php

namespace App\Http\Controllers;

use App\Models\Guest;
use App\Models\Room;
use Filament\Facades\Filament;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function index() {
        $data = Room::all();

        return view('index', [
            'title' => 'home',
            'data' => $data
        ]);
    }

    public function store(Request $request) {

        $request->validate([
            'name' => 'required|min:3|max:255',
            'email' => 'required|email|unique:guests',
            'telephone' => 'required|min:8',
            'detail' => 'required|max:255',
            'room_id' => 'required'
        ]);
        Guest::create($request->all());
        
        return redirect()->route('home')->with('success', 'Data berhasil disimpan!');
    }
}
