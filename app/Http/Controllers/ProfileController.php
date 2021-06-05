<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function uploadProfilePhoto(Request $request) {
        
        $validated = $request->validate([
            'photo' => 'required',
        ]);
        $request->file('photo')->store('profile');

        return redirect('profile');
    
    }
}
