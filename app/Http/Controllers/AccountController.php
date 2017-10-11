<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

use App\Http\Requests;

class AccountController extends Controller
{
    public function addpartner() {
        $user = Auth::user();
        return view('account.addpartner', compact('user'));
    }

    public function updatePartner(Request $request)
    {
        $this->validate($request, [
            'partner' => 'required|min:2',
        ]);

        $user = Auth::user();

        $user->partner = $request->partner;

        $user->save();
        return redirect()->route('inscription');        
    }

    public function details() {
        $user = Auth::user();
        return view('account.details', compact('user'));
    }

    public function formdetails() {
        $user = Auth::user();
        return view('account.formdetails', compact('user'));
    }
}
