<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Challenge;

class RewardController extends Controller
{
    public function uploadPhoto(Request $request)
    {
        $request->validate([
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $user = Auth::user();
        $file = $request->file('photo');
        $path = $file->store('photos', 'public');

        $user = Auth::user();
        $user->point += 1;
        $user->save();

        Challenge::create([
            'id_user' => $user->id,
            'foto_makanan' => $path,
        ]);

        return redirect()->back()->with('success', 'Foto berhasil diunggah dan poin bertambah!');
    }

}
