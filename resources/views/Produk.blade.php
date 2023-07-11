@extends('TempatTampilan')

@section('coba')


    <div class="col-12  d-flex align-items-center justify-content-center fs-1">Produk</div>

    <div class="d-flex flex-row align-items-center justify-content-center py-5 mt-5" style="height: 520px;">
        <div class="col-5  d-flex align-items-center justify-content-center">
            <img src="{{Vite::asset('resources/images/Bulpen_Merah_2.png') }}" alt="" style="width: 60%;">
        </div>
        <div class="col-5  d-flex align-items-center justify-content-center">
            <div class="flex-row">
                <form method="POST" action="{{route('pesan')}}">
                    @csrf
                    <div class=" d-flex align-items-center justify-content-center fs-4">Bulpen Merah</div>
                    <img src="{{Vite::asset('resources/images/Bulpen_Merah.png') }}" alt="" class="w-50" style="margin-left: 25%;">
                    <div class=" d-flex align-items-center justify-content-center">Perpaduan antara perfeksionis dengan performa menulis</div>
                    <input type="hidden" name="KodeSlogan" value="Perpaduan antara perfeksionis dengan performa menulis">
                    <input type="hidden" name="KodeGambar" value="{{Vite::asset('resources/images/Bulpen_Merah.png') }}">
                    <button type="submit" class="d-flex align-items-center justify-content-center btn btn-primary">Pesan Sekarang</a>
                </form>
            </div>
        </div>
    </div>

    <div class="d-flex flex-row align-items-center justify-content-center py-5 mt-5" style="height: 650px;">
        <div class="col-5  d-flex align-items-center justify-content-center">
            <div class="flex-row">
                <form method="POST" action="{{route('pesan')}}">
                    @csrf
                    <div class=" d-flex align-items-center justify-content-center fs-4">Bulpen Pink</div>
                    <img src="{{Vite::asset('resources/images/Bulpen_Pink.png') }}" alt="" class="w-50" style="margin-left: 25%;">
                    <div class=" d-flex align-items-center justify-content-center">Bentuk yang dinamis dan kehalusan tekstur bulpen</div>
                    <input type="hidden" name="KodeSlogan" value="Bentuk yang dinamis dan kehalusan tekstur bulpen">
                    <input type="hidden" name="KodeGambar" value="{{Vite::asset('resources/images/Bulpen_Pink.png') }}">
                    <button type="submit" class="d-flex align-items-center justify-content-center btn btn-primary">Pesan Sekarang</a>
                </form>
            </div>
        </div>
        <div class="col-5  d-flex align-items-center justify-content-center">
            <img src="{{Vite::asset('resources/images/Bulpen_Pink_2.png') }}" alt="" style="width: 60%;">
        </div>
    </div>

    <div class="d-flex flex-row align-items-center justify-content-center py-5 mt-5" style="height: 650px;">
        <div class="col-5  d-flex align-items-center justify-content-center">
            <img src="{{Vite::asset('resources/images/Bulpen_Silver_2.png') }}" alt="" style="width: 60%;">
        </div>
        <div class="col-5  d-flex align-items-center justify-content-center">
            <div class="flex-row">
                <form method="POST" action="{{route('pesan')}}">
                    @csrf
            
                    <div class=" d-flex align-items-center justify-content-center fs-4">Bulpen Silver</div>
                    <img src="{{Vite::asset('resources/images/Bulpen_Silver.png') }}" alt="" class="w-50" style="margin-left: 25%;">
                    <div class=" d-flex align-items-center justify-content-center">Bulpen yang ringkas, ringan, dan cepat</div>
                    <input type="hidden" name="KodeSlogan" value="Bulpen yang ringkas, ringan, dan cepat">
                    <input type="hidden" name="KodeGambar" value="{{Vite::asset('resources/images/Bulpen_Silver.png') }}">
                    <button type="submit" class="d-flex align-items-center justify-content-center btn btn-primary">Pesan Sekarang</a>
                </form>
            </div>
        </div>
    </div>

    <div class="d-flex flex-row align-items-center justify-content-center py-5 mt-5" style="height: 650px;">
        <div class="col-5  d-flex align-items-center justify-content-center">
            <div class="flex-row">
                <form method="POST" action="{{route('pesan')}}">
                    @csrf
            
                    <div class=" d-flex align-items-center justify-content-center fs-4">Refill Bulpen 1.0 mm</div>
                    <img src="{{Vite::asset('resources/images/Refill_1.jpg') }}" alt="" class="w-75" style="margin-left: 10%;">
                    <div class=" d-flex align-items-center justify-content-center">Refill bulpen untuk ketebalan 1.0 mm</div>
                    <input type="hidden" name="KodeSlogan" value="Refill bulpen untuk ketebalan 1.0 mm">
                    <input type="hidden" name="KodeGambar" value="{{Vite::asset('resources/images/Refill_1.jpg') }}">
                    <button type="submit" class="d-flex align-items-center justify-content-center btn btn-primary">Pesan Sekarang</a>
                </form>

            </div>
        </div>
        <div class="col-5  d-flex align-items-center justify-content-center">
            <img src="{{Vite::asset('resources/images/Refill_1_2.jpg') }}" alt="" style="width: 60%;">
        </div>
    </div>

    <div class="d-flex flex-row align-items-center justify-content-center py-5 mt-5" style="height: 650px;">
        <div class="col-5  d-flex align-items-center justify-content-center">
            <img src="{{Vite::asset('resources/images/Refill_2_2.jpg') }}" alt="" style="width: 60%;">
        </div>
        <div class="col-5  d-flex align-items-center justify-content-center">
            <div class="flex-row">
                <form method="POST" action="{{route('pesan')}}">
                    @csrf
            
                    <div class=" d-flex align-items-center justify-content-center fs-4">Refill Bulpen 0.5 mm</div>
                    <img src="{{Vite::asset('resources/images/Refill_2.jpg') }}" alt="" class="w-75" style="margin-left: 10%;">
                    <div class=" d-flex align-items-center justify-content-center">Refill bulpen untuk ketebalan 0.5 mm</div>
                    <input type="hidden" name="KodeSlogan" value="Refill bulpen untuk ketebalan 0.5 mm">
                    <input type="hidden" name="KodeGambar" value="{{Vite::asset('resources/images/Refill_2.jpg') }}">
                    <button type="submit" class="d-flex align-items-center justify-content-center btn btn-primary">Pesan Sekarang</a>
                </form>

            </div>
        </div>
    </div>

@endsection