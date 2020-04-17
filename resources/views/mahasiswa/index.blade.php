@extends('layout/main')

@section('title', 'Mahasiswa')

@section('container')
<div>
    <table class="table">
        <thead class="thead-dark">
            <tr>
            <th scope="col">#</th>
            <th scope="col">Nama</th>
            <th scope="col">NRP</th>
            <th scope="col">Email</th>
            <th scope="col">Jurusan</th>
            <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Ade Syahreza Putra</td>
                <td>20170140121</td>
                <td>ade.syahreza1@gmail.com</td>
                <td>Teknologi Informasi</td>
                <td>
                    <a href="" class="badge badge-success">edit</a>
                    <a href="" class="badge badge-danger">edit</a>
                </td>
            </tr>
        </tbody>
    </table>
</div>
@endsection