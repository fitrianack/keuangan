<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KeuanganController extends Controller
{
    public function home (){
        return view ('keuangan.content.home');
    }
    public function profil(){
        return view ('keuangan.content.profil');
    }
    public function edit (){
        return view ('keuangan.content.edit');
    }
    public function agenda(){
        return view('keuangan.content.agenda');
    }
    public function rapor(){
        return view('keuangan.content.rapor');
    }
    public function login(){
        return view('keuangan.content.login');
    }
    public function register(){
        return view('keuangan.content.register');
    }
}
