<?php

namespace App\Http\Controllers;

use App\User;
use Mail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

use App\Http\Requests;

class InscriptionController extends Controller
{
    public function index($step = 0) {
        $user = Auth::user();

        if($user->hasAddress()) {
            $step = 4;
        } elseif($step != 2) {
            $step = 3;
        }

        switch ($step) {
            case 2:
                return $this->step2($user, $step);
                break;
            case 3:
                return $this->step3($user, $step);
                break;
            case 4:
                return $this->step4($user, $step);
                break;
            default:
                echo "";
        }
    }

    private function step2($user, $step) {
        return view('inscription.mailsended', compact('user','step'));
    }

    private function step3($user, $step) {
        return view('inscription.addaddress', compact('user','step'));
    }

    private function step4($user, $step) {
        return view('inscription.waiting', compact('user'));
    }

    public function updateAddress(Request $request)
    {

        $this->validate($request, [
            'phonenumber' => 'required|min:2',
            'address' => 'required|min:2',
            'postcode' => 'required|min:2',
            'city' => 'required|min:2',
        ]);

        // Get the user
        $user = Auth::user();

        $user->phonenumber = $request->phonenumber;
        $user->address = $request->address;
        $user->postcode = $request->postcode;
        $user->city = $request->city;

        if($request->get('addresscomp')) {
            $user->addresscomp = $request->addresscomp;
        }
        $user->save(); 

        Mail::send('emails.confirmationFormulaireFinalise', ['user' => $user ] , function ($message) use ($user) {
            $message->to($user->email, $user->name)->subject('Confirmation d\'inscription');
            $message->from('nepasrepondre@lafourmiliere.org', 'La Fourmiliere');
        });
        
        return redirect()->route('inscriptionStep', ['step' => 4]);   
        
    }

    public function confirm($id, $token) {
        $user = User::where('id', $id)->where('confirmation_token', $token)->first();

        if($user) {
            $user->update(['confirmation_token' => null]);
            $user->activatemember();
        } else {
            Session::flash('flash_message', 'Lien invalide');
            Session::flash('flash_type', 'alert-info');
            
        }
        return redirect('/login');
    }

    public function pending($id)
    {
        // Get the user
        $user = User::findOrFail($id);
        if(Auth::user()->ismember()) return redirect()->route('dashboard');
        return view('inscription.pending', compact('user'));
    }
}
