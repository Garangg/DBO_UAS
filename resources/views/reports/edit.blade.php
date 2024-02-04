@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4">
    <h1 class="text-4xl font-bold my-7 text-center">Edit Report</h1>

    <a href="{{ route('reports.index') }}" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded mb-4 inline-block">Back to Index</a>

    <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
        <form action="{{ route('reports.update', $reports->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label for="kode_pemeriksaan" class="block text-gray-700 text-sm font-bold mb-2">Kode Pemeriksaan:</label>
                <input type="text" id="kode_pemeriksaan" name="kode_pemeriksaan" value="{{ $reports->kode_pemeriksaan }}"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>

            <div class="mb-4">
                <label for="tanggal_pemeriksaan" class="block text-gray-700 text-sm font-bold mb-2">Tanggal Pemeriksaan:</label>
                <input type="date" id="tanggal_pemeriksaan" name="tanggal_pemeriksaan" value="{{ $reports->tanggal_pemeriksaan }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>

            <div class="mb-4">
                <label for="nama_pasien" class="block text-gray-700 text-sm font-bold mb-2">Nama Pasien:</label>
                <input type="text" id="nama_pasien" name="nama_pasien" value="{{ $reports->nama_pasien }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>
            
            <div class="mb-4">
                <label for="diagnosa" class="block text-gray-700 text-sm font-bold mb-2">Diagnosa:</label>
                <input type="text" id="diagnosa" name="diagnosa" value="{{ $reports->diagnosa }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>
            
            <div class="mb-4">
                <label for="pengobatan" class="block text-gray-700 text-sm font-bold mb-2">Pengobatan:</label>
                <input type="text" id="pengobatan" name="pengobatan" value="{{ $reports->pengobatan }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>
            
            <div class="mb-4">
                <label for="nama_dokter" class="block text-gray-700 text-sm font-bold mb-2">Nama Dokter:</label>
                <input type="text" id="nama_dokter" name="nama_dokter" value="{{ $reports->nama_dokter }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>

            <div class="mb-4">
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Update Report</button>
            </div>
        </form>
    </div>
</div>
@endsection