<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function uploadProfilePhoto(Request $request) {
        
        $request->file('photo')->store('profile');

        return redirect('profile');
    
    }
}
