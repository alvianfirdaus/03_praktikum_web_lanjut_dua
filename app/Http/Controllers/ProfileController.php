<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        return view('profile1')
            ->with('full_name', 'All')
            ->with('short_name', 'All')
            ->with('nim', '2141720022')
            ->with('absen', '05')
            ->with('class', 'TI-2F')
            ->with('prodi', 'D4 Teknik Informatika')
            ->with('jurusan', 'Jurusan Teknologi Informasi')
            ->with('kampus', 'Politeknik Negeri Malang')
            ->with('email', 'alvian@gmail.com')
            ->with('nohp', '09')
            ->with('ig', '@alvian');
    }
}
