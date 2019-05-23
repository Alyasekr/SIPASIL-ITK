@extends('layouts.app')

@section('content')
<div class="jumbotron jumbotron-fluid">
  <div class="container text-center">
  <h1 class="display-4 font-weight-bold">Selamat Datang</h1>
  <p class="lead">SIPASIL ITK</p>
  <p class="lead">Sistem Pengaduan Fasilitas Institut Teknologi Kalimantan</p>
</div>
</div>

<section id="about" class="about">
<div class="container">
  <div class="row text-center">
    <div class="col">
    <p>SIPASIL ITK atau Sistem Pengaduan Fasilitas ITK adalah sebuah web dimana dapat dengan mudah membuat
      laporan pengaduan tentang kurang atau rusaknya fasilitas yang ada di kampus Institut Teknologi Kalimantan.
    Dengan adanya SIPASIL ITK ini anda dapat melakukan laporan pengaduan fasilitas dengan mudah dan cepat.
    Sampaikan laporan anda maka fasilitas terpenuhi dimanapun.</p>
    </div>
  </div>
</div>
</section>


<section id="galery" class="galery">
<div class="container">
  <div class="row text-center">
    <div class="col">
<figure class="figure">
  <h5 class="mt-0 mb-1">Buat laporan</h5>
<img src="img/form.png" height="50px" width="50px" class="figure-img img-fluid rounded" alt="A generic square placeholder image with rounded corners in a figure.">
<figcaption class="figure-caption text-center"><p>Laporkan keluhan atau aspirasi anda dengan jelas dan lengkap
  pada form laporan.</p></figcaption>

  <div class="container">
    <div class="row text-center">
      <div class="col">
</figure>
<figure class="figure">
<h5 class="mt-0 mb-1">Proses Verifikasi</h5>
<img src="img/share.png"height="50px" width="50px" class="figure-img img-fluid rounded" alt="A generic square placeholder image with rounded corners in a figure.">
<figcaption class="figure-caption text-center"><p>Dalam 2 hari, laporan Anda akan diverifikasi dan diteruskan
kepada pihak yang bertanggung jawab terhadap fasilitas ITK.</p></figcaption>
</figure>
<div class="container">
<div class="row text-center">
  <div class="col">
  <figure class="figure">
    <h5 class="mt-0 mb-1">Tindak Lanjut</h5>
  <img src="img/check-mark.png"height="50px" width="50px" class="figure-img img-fluid rounded" alt="A generic square placeholder image with rounded corners in a figure.">
  <figcaption class="figure-caption text-center"><p>Laporan anda akan ditindak lanjuti hingga selesai.</p></figcaption>
  </figure>
</div>
@endsection
