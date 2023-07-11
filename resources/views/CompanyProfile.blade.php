@extends('TempatTampilan')

@section('coba')
    


    <div style="height: auto;">
        
        <div class="d-flex flex-row-reverse" style="height: 500px;">
            <div class="col-6  d-flex align-items-center justify-content-center">
                  <img class="w-75" src="{{ 
              Vite::asset('resources/images/BG_Pen_1.jpg') }}" alt="image">
            </div>
            <div class="col-6  d-flex align-items-center justify-content-center">
                <div class="flex-row">
                    <div class=" d-flex align-items-center" style="font-weight: 300; font-size: x-large; text-decoration-line: underline; text-decoration-color: yellow;">
                        PT. CEPLAS
                    </div>
                    
                    <div class=" d-flex align-items-center" style="font-weight: 700; font-size: xx-large;">COMPANY PROFILE</div>
                    <div class=" d-flex align-items-center" style="font-weight: 300; font-size: small;">Perusahaan yang menjual bulpen beserta isinya</div>
                    <div class=" d-flex align-items-center justify-content-center my-4">
                        <button type="button" class="btn btn-primary">Lihat kuy!</button>
                    </div>
                </div>
            </div>
        </div>


        <div class="d-flex flex-row align-items-center justify-content-center py-5" style="height: auto; color: white;">
            <img class="d-flex position-absolute z-n1" style="width: 95%; filter: brightness(50%);" src="{{Vite::asset('resources/images/parker_homepage_fs-hero_world-of-parker_desktop.jpg') }}" alt="image">
            
            <div class="col-5 d-flex align-items-center justify-content-center ms-3">
                <div class="flex-row">
                    <div class=" d-flex align-items-center justify-content-center fs-4" style="text-decoration-line: underline; text-decoration-color: yellow;">Tentang Kami</div>
                    <div class=" d-flex align-items-center justify-content-center">PT. CEPLAS adalah perusahaan yang bergerak di alat tulis khususnya bulpen dan refill serta menghadirkan pengalaman menulis yang tak terlupakan</div>
                </div>
            </div>
            <div class="col-5 d-flex align-items-center justify-content-center">
              <img class="d-flex w-50" style="" src="{{ 
                  Vite::asset('resources/images/parker_homepage_50-50_writting-type_desktop.png') }}" alt="image">
            </div>
        </div>

        <div class="mt-4">
          <div class=" d-flex align-items-center justify-content-center fs-4 py-2" style="font-size: larger; font-weight: 500;">Produk</div>
          <div class=" d-flex align-items-center justify-content-center">Beberapa produk populer kami</div>

          <div class="d-flex flex-row align-items-center justify-content-center py-5">
              <div class="card ms-2 me-2 d-flex align-items-center justify-content-center" style="width: 15%;">
                <img class="d-flex w-50" style="" src="{{ 
                Vite::asset('resources/images/Bulpen_Merah.png') }}" alt="image">
                  <div class="card-body">
                    <h5 class="card-title">Bulpen Merah</h5>
                    <a href="{{ url('produk') }}" class="btn btn-primary" style="font-size: smaller;">Dapatkan</a>
                  </div>
              </div>

              <div class="card ms-2 me-2 d-flex align-items-center justify-content-center" style="width: 25%;">
                <img class="d-flex w-50" style="" src="{{ 
                Vite::asset('resources/images/Bulpen_Silver.png') }}" alt="image">
                  <div class="card-body">
                    <h5 class="card-title">Bulpen Silver</h5>
                    <a href="{{ url('produk') }}" class="btn btn-primary" style="font-size: smaller;">Dapatkan</a>
                  </div>
              </div>

              <div class="card ms-2 me-2 d-flex align-items-center justify-content-center" style="width: 15%;">
                <img class="d-flex w-50" style="" src="{{ 
                Vite::asset('resources/images/Bulpen_Pink.png') }}" alt="image">
                  <div class="card-body">
                    <h5 class="card-title">Bulpen Pink</h5>
                    <a href="{{ url('produk') }}" class="btn btn-primary" style="font-size: smaller;">Dapatkan</a>
                  </div>
              </div>
              
          </div>
      </div>
      
    </div>

    
@endsection
