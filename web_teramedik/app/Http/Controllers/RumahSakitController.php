<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RumahSakit;

class RumahSakitController extends Controller
{
    public function index()
    {
        $rs = RumahSakit::all();
        return view('RumahSakit/view_data', compact('rs'));
    }

    public function addIndex()
    {
        $rs = RumahSakit::all();
        return view('RumahSakit/add_data', compact('rs'));
    }

    public function add(Request $request)
    {
        $rs = new RumahSakit();
        $rs->nama_rs = $request->nama_rs;
        $rs->telp = $request->telp;
        $rs->email = $request->email;
        $rs->alamat = $request->alamat;
        $rs->save();

        return redirect(route('rumahsakit.index'))->with('message', 'Data added Successfully');;
    }

    public function updateIndex($id)
    {
        $rs = RumahSakit::find($id);
        return view('RumahSakit/update_data', compact('rs'));
    }

    public function update($id, Request $request)
    {
        $rs = RumahSakit::find($id);

        $rs->nama_rs = $request->nama_rs;
        $rs->telp = $request->telp;
        $rs->email = $request->email;
        $rs->alamat = $request->alamat;

        $rs->save();
        return redirect(route('rumahsakit.index'))->with('message', 'Data Updated Successfully');
    }

    public function delete(Request $request)
    {
        $request = RumahSakit::where('id', $request->id)->delete();

        return response()->json(['success' => true]);
    }
}
