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

    public function updatedetails(Request $request)
    {
        $this->validate($request, [
            'address' => 'required|min:2',
            'postcode' => 'required|min:2',
            'city' => 'required|min:2',
            'gender' => 'required|string|max:255',
            'firstname' => 'required|string|max:255',
            'name' => 'required|string|max:255',
        ]);

        // Get the user
        $user = Auth::user();

        $user->gender = $request->gender;
        $user->firstname = $request->firstname;
        $user->name = $request->name;
        $user->address = $request->address;
        $user->postcode = $request->postcode;
        $user->city = $request->city;

        if($request->get('addresscomp')) {
            $user->addresscomp = $request->addresscomp;
        }
        $user->save();
        
        return redirect('account/details');
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
