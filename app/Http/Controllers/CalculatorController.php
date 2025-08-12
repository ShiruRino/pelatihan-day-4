<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    public function viewTambah(){
        $total = 0;
        return view("coba.tambah", compact('total'));
    }
    public function tambahAction(Request $request){
        $angka1 = $request->angka1;
        $angka2 = $request->angka2;
        $total = $angka1 + $angka2;
        return view("coba.tambah",compact("total"));
    }
    public function viewKurang(){
        $total = 0;
        return view("coba.kurang", compact('total'));
    }
    public function kurangAction(Request $request){
        $angka1 = $request->angka1;
        $angka2 = $request->angka2;
        $total = $angka1 - $angka2;
        return view("coba.kurang",compact("total"));
    }
    public function viewKali(){
        $total = 0;
        return view("coba.kali", compact('total'));
    }
    public function kaliAction(Request $request){
        $angka1 = $request->angka1;
        $angka2 = $request->angka2;
        $total = $angka1 * $angka2;
        return view("coba.kali",compact("total"));
    }
    public function viewBagi(){
        $total = 0;
        return view("coba.bagi", compact('total'));
    }
    public function bagiAction(Request $request){
        $angka1 = $request->angka1;
        $angka2 = $request->angka2;
        $total = $angka2 == 0 ? 'Infinity' : $angka1 / $angka2;
        return view("coba.bagi",compact("total"));
    }
}
