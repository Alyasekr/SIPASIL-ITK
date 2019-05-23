@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Halaman Pengaduan</h1>
    <form action="{{ route('pengaduan.store') }}" method="POST">
        @csrf
        <div class="col-sm-6 offset-sm-3">
            <div class="row">
                <div class="col-sm-6">
                    <label for="gedung">Gedung</label>
                    <select name="gedung" id="gedung" class="form-control mb-2">
                        <option value="A">A</option>
                        <option value="B">B</option>
                    </select>
                </div>
                <div class="col-sm-6">
                    <label for="kelas">Kelas</label>
                    <select name="kelas" id="kelas" class="form-control mb-2">
                        <option value="101">101</option>
                        <option value="102">102</option>
                        <option value="103">103</option>
                        <option value="104">104</option>
                        <option value="105">105</option>
                        <option value="106">106</option>
                        <option value="107">107</option>
                        <option value="108">108</option>
                        <option value="201">201</option>
                        <option value="202">202</option>
                        <option value="203">203</option>
                        <option value="204">204</option>
                        <option value="205">205</option>
                        <option value="206">206</option>
                        <option value="207">207</option>
                        <option value="208">208</option>
                        <option value="301">301</option>
                        <option value="302">302</option>
                        <option value="303">303</option>
                        <option value="304">304</option>
                        <option value="305">305</option>
                        <option value="306">306</option>
                        <option value="307">307</option>
                        <option value="308">308</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <label for="fasilitas" class="col-form-label">Fasilitas</label>
                    <select name="fasilitas" id="fasilitas" class="form-control mb-2">
                        <option value="AC">AC</option>
                        <option value="LCD">LCD</option>
                        <option value="Kursi">Kursi</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-2">
                    <legend class="col-form-label pt-0">Keadaan:</legend>
                </div>
                <div class="col-sm-2">
                    <div class="form-check form-check-inline mb-2">
                          <input class="form-check-input" type="radio" name="keadaan" id="rusak" value="Rusak" checked>
                          <label class="form-check-label" for="rusak">
                            Rusak
                          </label>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-check form-check-inline mb-2">
                          <input class="form-check-input" type="radio" name="keadaan" id="tidakada" value="Tidak Ada">
                          <label class="form-check-label" for="tidakada">
                            Tidak Ada
                          </label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <label for="keterangan">Detail Pengaduan</label>
                    <textarea name="keterangan" id="keterangan" cols="30" rows="5" class="form-control mb-2"></textarea>
                </div>
            </div>

            <button type="submit" class="btn btn-primary btn-block">Laporkan</button>
        </div>
    </form>

    
</div>
@endsection
