<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DosenController extends Controller
{
    //
public function fix(){
    return "<h1>Halo ini adalah method index, dalam controller DosenController. - www.malasngoding.com</h1>";
}

public function biodata(){
    $nama = "Faiz Abdulhaq";
    $pelajaran = ["Algoritma & Pemrograman","Kalkulus","Pemrograman Web"];
    return view('biodata', ['nama' => $nama ,  'matkul' => $pelajaran]);
}
}
