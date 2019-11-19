@extends('layout/main')

@section('title', 'Daftar Mahasiswa')

@section('container')
<div class="container">
    <div class="row">
        <div class="col">

        <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">NRP</th>
      <th scope="col">Nama</th>
      <th scope="col">Email</th>
      <th scope="col">Jurusan</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>153040116</td>
      <td>Ginanjar Ade Mulyana</td>
      <td>dorion.official@gmail.com</td>
      <td>Teknik Informatika</td>
      <td>
        <a href="" class="badge badge-success">edit</a>
        <a href="" class="badge badge-danger">delete</a></td>
    </tr>
    
                </tbody>
                @foreach ($mahasiswa as $mhs)
                <tr>
                  <th scope="row"{{$loop->iteration}}></th>
                  <td>{{$mhs->nrp}}</td>
                  <td>{{$mhs->nama}}</td>
                  <td>{{$mhs->email}}</td>
                  <td>{{$mhs->jurusan}}</td>
                </tr>
            </table>
        </div>
    </div>
</div>
@endsection

