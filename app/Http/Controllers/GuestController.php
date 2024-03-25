<?php

namespace App\Http\Controllers;

use App\Models\Guest;
use App\Models\Room;
use Filament\Facades\Filament;
use Illuminate\Http\Request;

use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\DB;
use Exception;


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

        $validated = $request->validate([
            'name' => 'required|min:3|max:255',
            'email' => 'required|email|unique:guests',
            'telephone' => 'required|min:6',
            'detail' => 'required|max:255',
            'room_id' => 'required'
        ]);
        
        try {
            DB::transaction(function () use ($request) {
                $roomId = Room::findOrFail($request->room_id);
                if ($roomId->kouta <=0) {
                    throw new Exception('Kouta sudah penuh!');
                }
                Guest::create($request->all());
                $roomId->decrement('kouta');
                $roomId->save();
                
            });

            Alert::success('Berhasil', 'Guest berhasil mendaftar!');
            return redirect()->back();

        } catch (Exception $e) {
            Alert::error('Gagal', 'Guest gagal mendaftar! : '. $e->getMessage());
            return back();
        }
      
    }
}
