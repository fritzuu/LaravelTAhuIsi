@extends('layout/aplikasi')

@section('konten')
    <div>
        <a href='/siswa' class="btn btn-secondary mb-2"><< Kembali</a>
        <h1>{{ $data->nama }}</h1>
        <img style="max-width:200px;max-height:100px" src="{{ url('foto').'/'.$data->foto }}">
        <p>
            <b>Nomor Induk: </b>{{ $data->nomor_induk }} 
        </p>
        <p>
            <b>Alamat: </b>{{$data->alamat  }} 
        </p>
    </div>
@endsection