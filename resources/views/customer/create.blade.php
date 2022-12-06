@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Data Penyewa</h1>
    <form action="/customer/store" method="POST">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nama Penyewa</label>
            <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nomor Telepon Penyewa</label>
            <input type="text" name="tel_number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Alamat Penyewa</label>
            <input type="text" name="address" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Agunan</label>
            <input type="text" name="collateral" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <input type="submit" name="submit" class="btn btn-info" value="Save">
    </form>
</div>
@endsection