@extends('layout/main')

@section('title', 'Daftar Mahasiswa Baru')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-6">
            <h1 class="mt-10">Daftar Mahasiswa Baru</h1>

    

            <ul class="list-group">
            @foreach ($students as $student)
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    {{ $student -> nama }}
                    <a href="/students/{{$student -> id}}" class="badge badge-info">details</a>
                </li>
            @endforeach
            </ul>

        </div>
    </div>
</div>
@endsection