@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="text-center">Laporan Pengaduan</h1>

    <div class="text-right">
        <a href="{{ route('pengaduan.index') }}" class="btn btn-primary mb-3">Buat pengaduan</a>
    </div>
    
    @if(count($pengaduan) > 0)
        <table class="table table-striped table-light">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Gedung</th>
                    <th>Kelas</th>
                    <th>Fasilitas</th>
                    <th>Keadaan</th>
                    <th>Detail Pengaduan</th>
                    <th>Status</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach( $pengaduan as $aduan )
                    <tr>
                        <td>{{ $aduan->id }}</td>
                        <td>{{ $aduan->gedung }}</td>
                        <td>{{ $aduan->kelas }}</td>
                        <td>{{ $aduan->fasilitas }}</td>
                        <td>{{ $aduan->keadaan }}</td>
                        <td>{{ $aduan->keterangan }}</td>
                        <td>
                            @if($aduan->status == 0)
                                Proses 
                            @else
                                Selesai
                            @endif
                        </td>
                        @if(Auth::user()->is_admin == 1)
                        <td>
                            @if($aduan->status == 0)
                                <div class="text-center">
                                    <a href="/laporan/status/{{ $aduan->id }}" class="btn btn-warning">
                                    Selesai</a>
                                    <a href="/laporan/delete/{{$aduan->id}}" class="btn btn-danger">Delete</a>
                                </div>
                            @else
                                <div class="text-center">
                                    <a href="/laporan/delete/{{$aduan->id}}" class="btn btn-danger">Delete</a>
                                </div>
                            @endif
                            
                        </td>
                        @endif
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>Tidak ada laporan untuk ditampilkan</p>
    @endif
    
    <div class="float-right">
        {{ $pengaduan->links() }}
    </div>
    
</div>


@endsection
