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
    <header class="navbar-container">
        <div class="logo">
            <img src="{{ asset('assets/image/bookicon.png') }}" alt="Study Room">
            <h4>Study Room</h4>
        </div>
        <nav class="navbar navbar-expand-lg">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id=navbarNavDropdown>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="btn btn-primary" href="#">Login</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <div class="container hero">
            <div class="left-hero">
                <h2>Study Room</h2>
                <p>Ruang belajar untuk kamu yang suka berdiskusi.</p>
                <a href="" class="btn btn-primary">Daftar Sekarang</a>
            </div>
            <div class="right-hero">
                <img src="{{ asset('assets/image/imghero2.jpg') }}" alt="hero">
            </div>
        </div>
        <div class="container room">
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
                    <div class="carousel-item active">
                        <div class="row align-items-center">
                            <div class="col-lg-4">
                                <div class="card">
                                    <img src="{{ asset('assets/image/imghero2.jpg') }}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title mb-3">Card title</h5>
                
                                            <a class="description" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                                            Baca Deskripsi, klik disini!
                                          </a>
                                          <div class="collapse" id="collapseExample">
                                            
                                              Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.
                                           
                                          </div>
                                        <p class="icon mt-3">
                                            <i class="fa-regular fa-calendar"></i> Kamis, 15-01-2024
                                        </p>
                                        
                                        <p class="icon">
                                            <i class="fa-regular fa-user"></i> 80 orang
                                        </p>
                                        <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Pilih Room</a>
                                    </div>
                                </div>
                                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h1 class="modal-title fs-5" id="exampleModalLabel">Input Data</h1>
                                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <p>
                                                Kamu akan mendaftar sebagai tamu dalam room <span class="roomTitle">"Title"</span> <br> Silahkan isi data berikut:
                                            </p>
                                            <form action="" method="post">
                                                <div class="form-floating mb-3">
                                                    <input type="text" class="form-control" id="name" placeholder="Nama Lengkap" required>
                                                    <label for="name">Nama</label>
                                                  </div>
                                                  <div class="form-floating mb-3">
                                                    <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" required>
                                                    <label for="floatingInput">Email address</label>
                                                  </div>
                                                  <div class="form-floating mb-3">
                                                    <input type="text" class="form-control" id="telephone" placeholder="Nomor Handphone" required>
                                                    <label for="telephone">No HP</label>
                                                  </div>
                                                  <div class="form-floating mb-3">
                                                    <input type="text" class="form-control" id="detail" placeholder="Keperluan" required>
                                                    <label for="detail">Keperluan</label>
                                                  </div>
                                                  <div class="form-floating mb-3">
                                                    <input type="text" class="form-control" id="title" placeholder="Keperluan" value="Title" readonly>
                                                    <label for="title">Room</label>
                                                  </div>
                                                  <div class="m-3 text-center">
                                                    <button type="submit" class="btn btn-primary" onclick="return confirm('Apakah data anda sudah benar?')">Simpan Data</button>
                                                  </div>
                                            </form>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="card">
                                    <img src="{{ asset('assets/image/imghero2.jpg') }}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title mb-3">Card title</h5>
                
                                            <a class="description" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                                            Baca Deskripsi, klik disini!
                                          </a>
                                          <div class="collapse" id="collapseExample">
                                            
                                              Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.
                                           
                                          </div>
                                        <p class="icon mt-3">
                                            <i class="fa-regular fa-calendar"></i> Kamis, 15-01-2024
                                        </p>
                                        
                                        <p class="icon">
                                            <i class="fa-regular fa-user"></i> 80 orang
                                        </p>
                                        <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Pilih Room</a>
                                    </div>
                                </div>
                                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                          <img src="" alt="">
                                        </div>
                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                          <button type="button" class="btn btn-primary">Save changes</button>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="card">
                                    <img src="{{ asset('assets/image/imghero2.jpg') }}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title mb-3">Card title</h5>
                
                                            <a class="description" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                                            Baca Deskripsi, klik disini!
                                          </a>
                                          <div class="collapse" id="collapseExample">
                                            
                                              Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.
                                           
                                          </div>
                                        <p class="icon mt-3">
                                            <i class="fa-regular fa-calendar"></i> Kamis, 15-01-2024
                                        </p>
                                        
                                        <p class="icon">
                                            <i class="fa-regular fa-user"></i> 80 orang
                                        </p>
                                        <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Pilih Room</a>
                                    </div>
                                </div>
                                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                          <img src="" alt="">
                                        </div>
                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                          <button type="button" class="btn btn-primary">Save changes</button>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row align-items-center">
                            <div class="col-lg-4">
                                <div class="card">
                                    <img src="{{ asset('assets/image/imghero2.jpg') }}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title mb-3">Card title</h5>
                
                                            <a class="description" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                                            Baca Deskripsi, klik disini!
                                          </a>
                                          <div class="collapse" id="collapseExample">
                                            
                                              Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.
                                           
                                          </div>
                                        <p class="icon mt-3">
                                            <i class="fa-regular fa-calendar"></i> Kamis, 15-01-2024
                                        </p>
                                        
                                        <p class="icon">
                                            <i class="fa-regular fa-user"></i> 80 orang
                                        </p>
                                        <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Pilih Room</a>
                                    </div>
                                </div>
                                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                          <img src="" alt="">
                                        </div>
                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                          <button type="button" class="btn btn-primary">Save changes</button>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="card">
                                    <img src="{{ asset('assets/image/imghero2.jpg') }}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title mb-3">Card title</h5>
                
                                            <a class="description" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                                            Baca Deskripsi, klik disini!
                                          </a>
                                          <div class="collapse" id="collapseExample">
                                            
                                              Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.
                                           
                                          </div>
                                        <p class="icon mt-3">
                                            <i class="fa-regular fa-calendar"></i> Kamis, 15-01-2024
                                        </p>
                                        
                                        <p class="icon">
                                            <i class="fa-regular fa-user"></i> 80 orang
                                        </p>
                                        <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Pilih Room</a>
                                    </div>
                                </div>
                                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                          <img src="" alt="">
                                        </div>
                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                          <button type="button" class="btn btn-primary">Save changes</button>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="card">
                                    <img src="{{ asset('assets/image/imghero2.jpg') }}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title mb-3">Card title</h5>
                
                                            <a class="description" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                                            Baca Deskripsi, klik disini!
                                          </a>
                                          <div class="collapse" id="collapseExample">
                                            
                                              Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.
                                           
                                          </div>
                                        <p class="icon mt-3">
                                            <i class="fa-regular fa-calendar"></i> Kamis, 15-01-2024
                                        </p>
                                        
                                        <p class="icon">
                                            <i class="fa-regular fa-user"></i> 80 orang
                                        </p>
                                        <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Pilih Room</a>
                                    </div>
                                </div>
                                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                          <img src="" alt="">
                                        </div>
                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                          <button type="button" class="btn btn-primary">Save changes</button>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                            </div>
                        </div>
                    </div>

                </div>
               
            </div>
        </div>
    </main>
    <footer>
        <p>Copyright &copy; 2024 - Arin Cantika Musi</p>
    </footer>

    <script src="{{ asset('assets/js/script.js') }}"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>