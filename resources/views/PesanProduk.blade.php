@extends('TempatTampilan')

@section('coba')

<div class="col-12  d-flex align-items-center justify-content-center fs-1" style="">
    <div class="d-flex flex-row align-items-center justify-content-center py-5 mt-5" style="height: 520px;">
        <div class="col-5  d-flex align-items-center justify-content-center">
            <img src="{{ $kodegambar }}" alt="" style="max-width: 60%;">
        </div>
        <div class="col-5  d-flex align-items-center justify-content-center">
            <div class="flex-row">
                <div class=" d-flex align-items-center justify-content-center" style="color: black;"> {{ $kodeslogan }} </div>
            </div>
        </div>
    </div>    
</div>

<div class="d-flex flex-row align-items-center justify-content-center">
    <h1 class="display-4 mb-5">Form Pre-Order</h1>
</div>

<div class="d-flex align-items-center justify-content-center">
    <div class="col-10">
                <!-- route('kirimform.index') harus menggunakan route resource terlebih dahulu -->
        <form method="POST" action="{{ route('kirimform.index') }}">  
            @csrf
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Alamat Email</label>
                <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
            </div>

            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Kuantitas</label>
                <input type="number" name="kuantitas" class="form-control" name="kuantitas" rows="3"></input>
            </div>

            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Nomor Telepon</label>
                <input type="number" name="no_telepon" class="form-control" name="notelepon" rows="3"></input>
            </div>
            <button type="submit" class="btn btn-md btn-primary">SIMPAN</button>

        </form>
    </div>
</div>

@endsection