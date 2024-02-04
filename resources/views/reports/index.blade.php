@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4 ">
        <h1 class="text-4xl font-bold my-7 text-center">Medical Reports</h1>
        <a href="{{ route('reports.create') }}"
            class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded mb-4 inline-block">Add Data</a>
        <table class="table-auto w-full mx-auto my-auto border border-collapse border-gray-500">
            <thead>
                <tr>
                    <th class="px-4 py-2 border">Kode Pemeriksaan</th>
                    <th class="px-4 py-2 border">Tanggal Pemeriksaan</th>
                    <th class="px-4 py-2 border">Nama Pasien</th>
                    <th class="px-4 py-2 border">Diagnosa</th>
                    <th class="px-4 py-2 border">Pengobatan</th>
                    <th class="px-4 py-2 border">Nama Dokter</th>
                    <th class="px-4 py-2 border">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($reports as $report)
                    <tr class="bg-gray-100 text-center">
                        <td class="border px-4 py-2">{{ $report->kode_pemeriksaan }}</td>
                        <td class="border px-4 py-2">{{ $report->tanggal_pemeriksaan }}</td>
                        <td class="border px-4 py-2">{{ $report->nama_pasien }}</td>
                        <td class="border px-4 py-2">{{ $report->diagnosa }}</td>
                        <td class="border px-4 py-2">{{ $report->pengobatan }}</td>
                        <td class="border px-4 py-2">{{ $report->nama_dokter }}</td>
                        <td class="border px-4 py-2">
                            <a href="{{ route('reports.edit', $report->id) }}"
                                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded inline-block">Edit</a>
                            <form action="{{ route('reports.destroy', $report->id) }}" method="POST" class="inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                    class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
