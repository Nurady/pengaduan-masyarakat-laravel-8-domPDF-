<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Masyarakat;
use Illuminate\Http\Request;

class MasyarakatController extends Controller
{
    public function index()
    {
        $masyarakat = Masyarakat::all();
        
        return view('admin.masyarakat.index', compact('masyarakat'));
    }

    public function show($nik)
    {
        $masyarakat = Masyarakat::where('nik', $nik)->first();
        return view('admin.masyarakat.show', compact('masyarakat'));
    }
}
