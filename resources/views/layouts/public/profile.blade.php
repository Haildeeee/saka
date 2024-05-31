@extends('layouts.public.app')
@section('content')
<div class="row justify-content-center"> <!-- Ganti class menjadi justify-content-center -->
  <div class="col-md-8"> <!-- Ganti ukuran kolom menjadi 8 -->
    <div class="card text-center">
      <div class="card-img-top">
        <img src="{{asset('img/image 6.png')}}" alt="Foto Profil" class="rounded-circle img-fluid"> <!-- Tambahkan class rounded-circle dan img-fluid -->
      </div>
      <div class="card-body">
        <div class="row">
          <div class="col-6">
            <ul class="list-unstyled mb-0">
              <li><strong>Soft Skill:</strong></li>
              <li>- Time Management</li>
              <li>- Creative Thinking</li>
            </ul>
          </div>
          <div class="col-6">
            <ul class="list-unstyled mb-0">
              <li><strong>Hard Skill:</strong></li>
              <li>- Pentaho</li>
              <li>- Laravel</li>
              <li>- Ms.Office</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
