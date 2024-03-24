<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>

    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    @include('partials.header')
    <main>
      <div class="container">
        <section class="msg mt-3">
          @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              {{ session('success') }}
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
          @elseif (session('error'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
              {{ session('error') }}
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
          @endif
        </section>
        
        <section class="hero">
          <div class="left-hero">
            <h2>Study Room</h2>
            <p>Ruang belajar untuk kamu yang suka berdiskusi.</p>
            <button onclick="scrollToElement('#room')" class="btn btn-primary">Daftar Sekarang</button>
        </div>
        <div class="right-hero">
            <img src="{{ asset('assets/image/imghero2.jpg') }}" alt="hero">
        </div>
        </section>
        <section class="room" id="room">
          <h2> <span class="title">Room</span> Choice</h2>
          <span class="btnCarouselRoom">
              <button class="btn btn-primary" type="button" data-bs-target="#roomCarousel" data-bs-slide="prev">
                  <i class="fa-solid fa-arrow-left-long"></i>
                </button>
                <button class="btn btn-primary" type="button" data-bs-target="#roomCarousel" data-bs-slide="next">
                  <i class="fa-solid fa-arrow-right-long"></i>
                </button>
          </span>
          <div id="roomCarousel" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner">
                @forelse($data->chunk(3) as $chunk) 
                  <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                    <div class="row align-items-center">
                        @foreach($chunk as $item)
                            <div class="col-lg-4">
                              <div class="card">
                                <img src="{{ asset('assets/image/' . $item->image) }}" class="card-img-top" alt="image">
                                <div class="card-body">
                                    <h5 class="card-title mb-3">{{ $item->name }}</h5>
            
                                        <a class="description" data-bs-toggle="collapse" href="#collapseCard{{ $item->id }}" role="button" aria-expanded="false" aria-controls="collapseExample">
                                        Baca Deskripsi, klik disini!
                                      </a>
                                      <div class="collapse" id="collapseCard{{ $item->id }}">
                                        {{ $item->description }}    
                                      </div>
                                    <p class="icon mt-3">
                                        <i class="fa-regular fa-calendar"></i> {{ $item->available_date }}
                                    </p>
                                    
                                    <p class="icon">
                                        <i class="fa-regular fa-user"></i> {{ $item->kouta }} orang
                                    </p>
                                    <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#roomModal{{ $item->id }}">Pilih Room</a>
                                    @include('partials.modal')
                                </div>
                              </div>
                            </div>
                        @endforeach
                    </div>
                  </div>
                  @empty
                      <div class="carousel-item active">
                          <div class="row align-items-center">
                              <div class="col">No data found.</div>
                          </div>
                      </div>
                  @endforelse
              </div>
          </div>
        </section>
      </div>
       
       
    </main>
    @include('partials.footer')
    

    <script src="{{ asset('assets/js/script.js') }}"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>