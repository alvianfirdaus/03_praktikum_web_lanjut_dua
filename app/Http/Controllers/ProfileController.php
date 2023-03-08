<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        return view('profile1')
            ->with('full_name', 'Alvian Nur Firdaus')
            ->with('short_name', 'Alvian')
            ->with('nim', '2141720022')
            ->with('absen', '05')
            ->with('class', 'TI-2F')
            ->with('prodi', 'D4 Teknik Informatika')
            ->with('jurusan', 'Jurusan Teknologi Informasi')
            ->with('alamat', 'Rogojampi Banyuwangi')
            ->with('email', 'alvian@gmail.com')
            ->with('skil', 'Multimedia Videografi')
            ->with('ig', '@alvian7968');
    }
    public function profile2()
    {
        return view('profile2')
            ->with('full_name', 'Alvian Nur Firdaus')
            ->with('short_name', 'Alvian')
            ->with('nim', '2141720022')
            ->with('absen', '05')
            ->with('class', 'TI-2F')
            ->with('prodi', 'D4 Teknik Informatika')
            ->with('jurusan', 'Jurusan Teknologi Informasi')
            ->with('alamat', 'Rogojampi Banyuwangi')
            ->with('email', 'alvian@gmail.com')
            ->with('skil', 'Multimedia Videografi')
            ->with('ig', '@alvian7968');
    }
}
