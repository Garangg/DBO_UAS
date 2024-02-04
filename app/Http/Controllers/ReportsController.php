<?php

namespace App\Http\Controllers;

use App\Models\Reports;
use Illuminate\Http\Request;


class ReportsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $reports = Reports::all();

        if($request->expectsJson()) {
            return response()->json($reports);
        }

        return view('reports.index', compact('reports'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('reports.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $reports = new Reports([
            'kode_pemeriksaan' => $request->get('kode_pemeriksaan'),
            'tanggal_pemeriksaan' => $request->get('tanggal_pemeriksaan'),
            'nama_pasien' => $request->get('nama_pasien'),
            'diagnosa' => $request->get('diagnosa'),
            'pengobatan' => $request->get('pengobatan'),
            'nama_dokter' => $request->get('nama_dokter'),
        ]);

        if($request->expectsJson()) {
            $reports = Reports::create($request->all());
            return response()->json($reports, 201);
        }

        $reports->save();
        return redirect('/reports')->with('success', 'Report saved!');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Reports $reports)
    {
        return view('reports.edit', compact('reports'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Reports $reports)
    {
        $request->validate([
            'kode_pemeriksaan'=>'required',
            'tanggal_pemeriksaan'=>'required',
            'nama_pasien'=>'required',
            'diagnosa'=>'required',
            'pengobatan'=>'required',
            'nama_dokter'=>'required',
        ]);
        $reports->kode_pemeriksaan = $request->get('kode_pemeriksaan');
        $reports->tanggal_pemeriksaan = $request->get('tanggal_pemeriksaan');
        $reports->nama_pasien = $request->get('nama_pasien');
        $reports->diagnosa = $request->get('diagnosa');
        $reports->pengobatan = $request->get('pengobatan');
        $reports->nama_dokter = $request->get('nama_dokter');

        if($request->expectsJson()) {
            $reports->update($request->all());
            return response()->json($reports, 200);
        }

        $reports->save();
        return redirect('/reports')->with('success', 'Report updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, Reports $reports)
    {
        $reports->delete();
        if($request->expectsJson()) {
            return response()->json([
                'message' => 'Report deleted',
                'reports' => $reports
            ]);
        }
        return redirect('/reports')->with('success', 'Report deleted!');
    }
}
