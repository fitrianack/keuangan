<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Keuangan;
use Illuminate\Support\Facades\DB;

class KeuanganController extends Controller
{
    public function home (){
        return view ('keuangan.content.home');
    }
    //tambah post
    public function tambah(Request $request)
    {
        $create_keuangan = new Keuangan;
        $create_keuangan->uang_masuk = $request->uang_masuk;
        $create_keuangan->uang_keluar = $request->uang_keluar;
        $create_keuangan->saldo = $request->uang_masuk-$request->uang_keluar;
        $create_keuangan->keterangan = $request->keterangan;
        $create_keuangan->save();
        return redirect('/lihatdata')->with('status', 'Data Keuangan Berhasil Ditambah!');;
    }
    // tambah get
    public function lihattambah()
    {
        return view('keuangan.content.create_keuangan');
    }
    public function lihatdata()
    {
        $uang = Keuangan::get();
    $saldo = Keuangan::sum('saldo');
        return view('keuangan.content.show', compact('uang','saldo'));
    }

    public function lihatsaldo()
    {
        $yatra = DB::table('keuangans')->sum('keuangans.saldo');
        return view('keuangan.content.show', compact('yatra'));
    }

    public function edit($id)
    {
        $uang = Keuangan::find($id);
        return view('keuangan.content.edit', compact('uang'));
    }

    public function update(Request $request, $id)
    {
        $uangg = Keuangan::find($request->id);
        $uangg->uang_masuk = $request->uang_masuk;
        $uangg->uang_keluar = $request->uang_keluar;
        $uangg->saldo = $request->uang_masuk-$request->uang_keluar;
        $uangg->keterangan = $request->keterangan;
        $uangg->save();
        return redirect("/lihatdata");
    }

    public function destroy($id)
    {
        $destroy = Keuangan::find($id);
        $destroy->delete();
        return redirect('/lihatdata')->with('status', 'Data Keuangan Berhasil Dihapus!');
    }
 }