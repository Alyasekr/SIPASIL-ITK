<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Complaint;
use App\User;

class PengaduanController extends Controller
{
    public function __construct()
    {
    	$this->middleware('auth');
    }

    public function index() {
    	return view('pages.pengaduan');
    }

    public function store(Request $request) {
    	$validatedData = $request->validate([
    		'gedung' => 'required',
    		'kelas' => 'required',
    		'fasilitas' => 'required',
    		'keadaan' => 'required'
    	]);

    	$aduan = new Complaint;
    		
		$aduan->gedung = $request->gedung;
		$aduan->kelas = $request->kelas;
		$aduan->fasilitas = $request->fasilitas;
		$aduan->keadaan = $request->keadaan;
		$aduan->keterangan = $request->keterangan;

		$aduan->save();

		return redirect()->route('pengaduan.show');
    }

    public function show() {
    	$pengaduan = Complaint::paginate(4);
    	return view('pages.laporan')->with('pengaduan', $pengaduan);
    }

    public function status($id) {
    	$status = Complaint::find($id);
    	$status->status = 1;
    	$status->save();
    	return back();
    }

    public function delete($id) {
    	$del = Complaint::find($id);
    	$del->delete();
    	return back();
    }
}
