<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pasien;
use App\Models\RumahSakit;


class PasienController extends Controller
{
    public function index()
    {
        $pasien = Pasien::join('data_rumah_sakit', 'data_rumah_sakit.id', '=', 'data_pasien.id_rs')
            ->get(['data_pasien.*', 'data_rumah_sakit.nama_rs']);
        // $pasien = Pasien::all();
        return view('pasien/view_data', compact('pasien'));
    }

    public function addIndex()
    {
        $rs = RumahSakit::all();
        return view('pasien/add_data', compact('rs'));
    }

    public function add(Request $request)
    {
        $pasien = new Pasien();
        $pasien->nama_pasien = $request->nama_pasien;
        $pasien->telp = $request->telp;
        $pasien->id_rs = $request->id_rs;
        $pasien->alamat = $request->alamat;
        $pasien->save();

        return redirect(route('pasien.index'))->with('message', 'Data added Successfully');
    }

    public function updateIndex($id)
    {
        $pasien = Pasien::find($id);
        $id_rs = Pasien::select('id_rs', 'id_rs')->where('id', $id)->get();
        $rs = RumahSakit::find($id_rs);
        return view('pasien/update_data', compact('pasien', 'rs', 'id_rs'));
    }

    public function update($id, Request $request)
    {
        $pasien = Pasien::find($id);

        $pasien->nama_pasien = $request->nama_pasien;
        $pasien->telp = $request->telp;
        $pasien->id_rs = $request->id_rs;
        $pasien->alamat = $request->alamat;

        $pasien->save();
        return redirect(route('pasien.index'))->with('message', 'Data Updated Successfully');
    }



    public function delete(Request $request)
    {
        $request = Pasien::where('id', $request->id)->delete();

        return response()->json(['success' => true]);
    }
}
