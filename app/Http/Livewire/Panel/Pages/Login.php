<?php

namespace App\Http\Livewire\Panel\Pages;

use App\Http\Helpers\Show;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Login extends Component
{

    public  $email;
    public  $password;

    protected $rules = [
        'email' => 'required|email',
        'password' => 'required',
    ];

    protected $validationAttributes = [
        'email' => 'ایمیل',
        'password' => 'رمز عبور',
    ];

    public function mount(){

    }


    public function login(){


        $this->validate();


        $user = User::where('email',$this->email)->first();

        if($user == null){
            Show::popupAlert(Show::ALERT_ERROR,$this,'نام کاربری یا رمز عبور اشتباه است',);
        }else{
            if(Hash::check($this->password,$user->password)){
                auth()->loginUsingId($user->id);
                redirect()->route('dashboard');
            }else{
                Show::popupAlert(Show::ALERT_ERROR,$this,'نام کاربری یا رمز عبور اشتباه است',);
            }
        }

    }





    public function render()
    {
        return view('livewire.panel.pages.login') ->layout('layouts.panel.layout-login');
    }
}
