<?php

namespace App\Http\Controllers;

use illuminate\Http\Request;

class ManagementUserController extends Controller
{
    //return "Halo ini adalah method index, dalam controller ManagementUser.";
    public function index(){
        return "Halo ini nantinya akan digunakan untuk mengambil semua data user";
    }
    public function create()
    {
        return "method ini nantinya akan digunakan untuk menampilkan form untuk menambah data user";
    }
    public function store($request)
    {
        return "Method ini nantinya akan digunakan untuk menciptakan data user yang baru";
    }
    public function show($id)
    {
        return "Method ini nantinya akan digunakan untuk mengambil satu data user dengan id=" . $id;
    }
    public function edit($id)
    {
        return "Method ini nantinya akan digunakan untuk menampilkan form untuk mengubah data edit dengan id=" . $id;
    }
    public function update($request, $id)
    {
        return "Method ini nantinya akan digunakan untuk mengubah data user dengan id=" . $id;
    }
    public function destroy($id)
    {
        return "Method ini nantinya digunakan untuk menghapus data user dengan id=" . $id;
    }
}
