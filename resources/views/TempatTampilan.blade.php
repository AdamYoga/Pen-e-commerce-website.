<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Coba</title>



    @vite('resources/sass/app.scss')

    


</head>


<body style="font-family: 'Poppins', sans-serif;">



    <nav class="navbar navbar-expand-lg bg-transparent" style="background: none;">
      <div class="container-fluid">
        <a class="navbar-brand" style="font-family: 'Teko', sans-serif;" href="#">cepLAs!</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="/companyprofile">Beranda</a>
            </li>

            <li class="nav-item dropstart">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Produk
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="/produk">Bulpen</a></li>
                <li><a class="dropdown-item" href="/produk">Refill dan Tinta</a></li>
              </ul>
            </li>

            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="{{route('actionlogout')}}">Log Out</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    @yield('coba')

    
    <footer class="bg-light text-center text-lg-start">
        
        <div id="FormSubscribe" class="container p-4 pb-0">
          <form method="POST" action="{{ route('untuk_subscribes.index') }}">
            @csrf
            <div class="row">
              <div class="col-auto mb-4 mb-md-0">
                <p class="pt-2">
                  <strong>Dapatkan berita terbaru dengan kirim Email</strong>
                </p>
              </div>

              <div class="col-md-5 col-12 mb-4 mb-md-0">
                <div class="form-outline mb-4">
                  <input type="email" name="email" id="form5Example25" placeholder="Masukkan alamat Email disini" class="form-control" />
                </div>
              </div>

              <!-- Di Non Aktifkan -->
              <div class="col-auto mb-4 mb-md-0">
                <button id="MunculkanNotifikasi" type="submit" class="btn btn-primary mb-4">
                  Kirim
                </button>
              </div>
            </div>
          </form>
        </div>

        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
          © 2023 Copyright: Adam Yoga
        </div>
    </footer>
    @vite('resources/js/app.js')

    

</body>
</html>