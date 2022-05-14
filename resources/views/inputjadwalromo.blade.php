<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <!-- BOX ICON -->
        <link href='https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css' rel='stylesheet'>
        
        <!-- Fontawesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
        <!-- ICON CSS fontawesome -->
        <link rel="stylesheet" href="css/fontawesome/css/all.css">

        <!-- Halaman Utama CSS -->
        <link rel="stylesheet" href="css/halamanutama.css">
        <title>GMA | Halaman Utama</title>
    </head>
    <body>

      
        <!-- Optional JavaScript; choose one of the two! -->

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

        <!-- Option 2: Separate Popper and Bootstrap JS -->
        <!--
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
        -->
        <header class="header fixed-top">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                <a class="navbar-brand" href="#">
                    <img src="img/GMA_3-removebg-white.png" alt="" width="50" height="50">
                    <span>Santa Maria Assumpta Klaten</span>
                </a>
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="login">Login <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Daftar</a>
                </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
            </nav>
        </header>

        <div class="sidenav">
            <div>
                <a href="halamanutama" class="nav_link"> <i class='bx bx-grid-alt nav_icon'></i> <span class="nav_name">Beranda Paroki</span> </a>
                <button class="dropdown-btn">
                    <i class='bx bx-user nav_icon'></i>
                    <span class="nav_name">Layanan</span>
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-container">
                    <a href="#">Misa Harian</a>
                    <a href="#">Misa Diluar Jadwal</a>
                    <a href="#">Minyak Suci</a>
                    <a href="#">Pemberkatan Jenazah</a>
                    <a href="#">Perkawinan</a>
                    <a href="#">Baptis</a>
                    <a href="kegiatandpp">Kegiatan DPP</a>
                </div>
                <a href="jadwalromo" class="nav_link"> <i class='fas fa-cross nav_icon'></i> <span class="nav_name">Jadwal Romo</span> </a>
                <a href="#" class="nav_link"> <i class='fas fa-church nav_icon'></i> <span class="nav_name">Info Ruangan</span> </a>
                <a href="#" class="nav_link"> <i class='bx bx-map nav_icon'></i> <span class="nav_name">Peta</span> </a>
                <a href="#" class="nav_link"> <i class='bx bx-globe nav_icon'></i> <span class="nav_name">Website GMA</span> </a>
                <a href="#" class="nav_link"> <i class='bx bxl-android nav_icon'></i> <span class="nav_name">Playstore</span> </a>
                <a href="#" class="nav_link"> <i class='bx bx-info-square nav_icon'></i> <span class="nav_name">Bantuan</span> </a>
            </div>
          
            
        </div>

        <div class="main">
            <h2 class="text-center">INPUT JADWAL ROMO</h2>
            <br/>
            <br/>
            <table class="table table-bordered">
                            <thead>
                              <tr>
                                <form id="inputjadwalromo" action="/input_jadwal_romo" method="post">
                                    {{ csrf_field() }}
                                    <div class="form-group row">
                                        <label>Nama Romo</label>
                                        <div class="form-group">
                                            <select name="romo_id" id="romo_id">
                                            <option value="">- Pilih Romo -</option>
                                            <?php 
                                                use App\Http\Controllers\InfoRomoController;
                                                $InfoRomoController = new InfoRomoController;
                                                $inforomos = $InfoRomoController->jadwalromo();
                                            ?>
                                            @foreach ($inforomos as $item)
                                                <option value="{{$item->romo_id}}">{{$item->romo_nama}}</option>
                                            @endforeach
                                            </select>
                                        </div>
                                        <label>Jadwal Mulai</label>
                                        <input type="datetime-local" id="jadwal_mulai" name="jadwal_mulai">
                                        <label>Jadwal Selesai</label>
                                        <input type="datetime-local" id="jadwal_selesai" name="jadwal_selesai">
                                        <label>Keterangan</label>
                                        <input type="text" id="keterangan" name="keterangan">
                                        <button type="submit">
                                    </div>
                                </form>
                            
                              </tr>
                            </thead>
                            <tbody>
                              
                            </tbody>
                          </table>  
        </div>

    <script>
        /* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
        var dropdown = document.getElementsByClassName("dropdown-btn");
        var i;

        for (i = 0; i < dropdown.length; i++) {
        dropdown[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var dropdownContent = this.nextElementSibling;
        if (dropdownContent.style.display === "block") {
        dropdownContent.style.display = "none";
        } else {
        dropdownContent.style.display = "block";
        }
        });
        }
    </script>
    </body>
</html>