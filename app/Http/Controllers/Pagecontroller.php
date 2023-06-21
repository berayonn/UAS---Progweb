<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tabelmodel;

class Pagecontroller extends Controller
{
    // Start INi Nomor 2
    public function mahasiswa()
    {
        return view('mahasiswa');
    }
    public function simpan(Request $request)
    {
        $gender = $request->input('gender');
        return view('terima', ['gender'=>$gender]);
    }
    // end Nomor 2

    // Start Nomor 3
    public function dosen()
    {
        return view('dosen');
    }
    public function terimadosen(Request $request)
    {
        $gelar = implode(',' , $request->gelar);
        return view('terimadosen', ['gelar'=>$gelar]);
    }
    // End Nomor 3

    public function tabel()
    {
        $tabel = tabelmodel::orderBy('id','desc')->get();
        return view('tabel', ['tabel'=>$tabel]);
    }

    public function waktu()
    {
        $wib = date_default_timezone_set("Asia/Bangkok");
        $jmd = date('H:i:s');
        if($jmd >= '19:00' && $jmd <= '02:59')
        {
            $jmd = ("Selamat Malam");
            return view('waktu', ['key' => 'waktu' ,'jmd'=> $jmd]);
        }
        elseif($jmd >= '03:00' && $jmd <= '09:59')
        {
            $jmd = ("Selamat Pagi");
            return view('waktu', ['key' => 'waktu' ,'jmd'=> $jmd]);
        }
        elseif($jmd >= '10:00' && $jmd <= '14:59')
        {
            $jmd = ("Selamat Siang");
            return view('waktu', ['key' => 'waktu' ,'jmd'=> $jmd]);
        }
        elseif($jmd >= '15:00' && $jmd <= '17:59')
        {
            $jmd = ("Selamat Sore");
            return view('waktu', ['key' => 'waktu' ,'jmd'=> $jmd]);
        }
        elseif($jmd >= '18:00' && $jmd <= '18:59')
        {
            $jmd = ("Selamat Petang");
            return view('waktu', ['key' => 'waktu' ,'jmd'=> $jmd]);    
        }
    }

}
