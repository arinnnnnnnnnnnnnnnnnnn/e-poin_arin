<?php

namespace App\Http\Controllers;


use App\models\pelanggaran;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use Illuminate\Http\Redirectresponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class PelanggaranController extends Controller
{
    public function index(): view
    {
        //get data db
        $pelanggarans = pelanggaran ::latest()->paginate(10);

        return view('admin.pelanggaran.index',compact('pelanggarans'));

    }
}