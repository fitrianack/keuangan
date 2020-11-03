<?php

namespace App\Http\Controllers;

use App\Keuangan;
use Illuminate\Http\Request;

class KeuanganController extends Controller
{
    public function create()
    {
        return view('keuangan.content.create');
    }

    public function store(Request $request)
    {
        $create_keuangan = new Keuangan;
        $create_keuangan->uang_masuk = $request->uang_masuk;
        $create_keuangan->uang_keluar = $request->uang_keluar;
        $create_keuangan->saldo = $request->uang_masuk - $request->uang_keluar;
        $create_keuangan->keterangan = $request->keterangan;
        $create_keuangan->save();
        // $validateData = $request->validate([
        //     'uang_masuk' => 'required',
        //     'uang_keluar' => 'required',
        //     'keterangan' => 'required',
        // ]);

        // $show = Keuangan::create($validateData);
        return redirect('/lihatdata')->with('status', 'Data Keuangan Berhasil Ditambah!');
    }

    public function show()
    {
        $uang = \App\Keuangan::all();
        $saldo = Keuangan::sum('saldo');
        return view('keuangan.content.show', compact('uang', 'saldo'));
    }

    public function lihatsaldo()
    {
        $yatra = DB::table('keuangans')->sum('keuangans.saldo');
        return view('keuangan.content.show', compact('yatra'));
    }

    public function edit($id)
    {
        $uangg = Keuangan::find($id);
        return view('keuangan.content.edit', compact('uangg'));
    }

    public function update(Request $request, $id)
    {
        // $request->validate([
        //     'uang_masuk' => 'required',
        //     'uang_keluar' => 'required',
        //     'keterangan' => 'required',
        // ]);

        $uangg = Keuangan::find($request->id);
        $uangg->uang_masuk = $request->uang_masuk;
        $uangg->uang_keluar = $request->uang_keluar;
        $uangg->saldo = $request->uang_masuk - $request->uang_keluar;
        $uangg->keterangan = $request->keterangan;
        $uangg->save();

        // $uang::where('id', $uang->id)
        //     ->update([
        //         'uang_masuk' => $request->uang_masuk,
        //         'uang_keluar' => $request->uang_keluar,
        //         'keterangan' => $request->keterangan,
        //     ]);

        return redirect("/lihatdata");
    }

    public function destroy($id)
    {
        $destroy = Keuangan::find($id);
        $destroy->delete();
        return redirect('/lihatdata')->with('status', 'Data Keuangan Berhasil Dihapus!');
    }
}
