<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('/welcome');
});

Route::get('produk', function () {
    $kode = [12,23,45,56];
    $jumlah = count($kode);
    $nama = ['sepeda','bola','meja','kursi'];
    $jenis = ['olahraga','olahraga','perabot','perabot'];
    $harga = [200,20,500,400];
    return view ('/produk',compact('kode','jumlah','nama','jenis','harga'));
});

Route::get('tambah', function () {
    return view ('/tambah');
});

Route::get('home', function () {
    return view ('/home');
});

