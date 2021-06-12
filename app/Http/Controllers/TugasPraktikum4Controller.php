<?php

namespace App\Http\Controllers;

use Session;
use App\Models\Dokter;
use Illuminate\Http\Request;
use App\Exports\DokterExport;
use App\Imports\DokterImport;
use Maatwebsite\Excel\Facades\Excel;

class TugasPraktikum4Controller extends Controller
{
    public function tugas_praktikum_4()
    {
        $dokter = Dokter::select('id','nama', 'jabatan')->get();

        return view('tugaspraktikum_0188', compact('dokter'));
    }

    public function export_excel()
	{
		return Excel::download(new DokterExport, 'Data_1461600188.xlsx');
	}

    public function import_excel(Request $request) 
	{
		$this->validate($request, [
			'file' => 'required|mimes:csv,xls,xlsx'
		]);
 
		$file = $request->file('file');
		$nama_file = rand().$file->getClientOriginalName();
		$file->move('file_dokter',$nama_file);
		Excel::import(new DokterImport, public_path('/file_dokter/'.$nama_file));
		Session::flash('sukses','Data Dokter Berhasil Diimport!');

		return redirect('/');
	}
}