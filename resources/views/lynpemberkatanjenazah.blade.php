<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

     <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Link Googleapis -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    
    <!-- BOX ICON -->
    <link href='https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css' rel='stylesheet'>
        
    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
    <!-- ICON CSS fontawesome -->
    <link rel="stylesheet" href="css/fontawesome/css/all.css">  
    
    <!-- Layanan CSS -->
    <link rel="stylesheet" href="css/lynpemberkatanjenazah.css">
    
    
    <title>GMA | Layanan Pemberkatan Jenazah!</title>
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
                    <a class="nav-link" href="halamanutama">Beranda <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Keluar</a>
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
                    <a href="#">Kegiatan DPP</a>
                </div>
                <a href="#" class="nav_link"> <i class='fas fa-cross nav_icon'></i> <span class="nav_name">Jadwal Romo</span> </a>
                <a href="#" class="nav_link"> <i class='fas fa-church nav_icon'></i> <span class="nav_name">Info Ruangan</span> </a>
                <a href="#" class="nav_link"> <i class='bx bx-map nav_icon'></i> <span class="nav_name">Peta</span> </a>
                <a href="#" class="nav_link"> <i class='bx bx-globe nav_icon'></i> <span class="nav_name">Website GMA</span> </a>
                <a href="#" class="nav_link"> <i class='bx bxl-android nav_icon'></i> <span class="nav_name">Playstore</span> </a>
                <a href="#" class="nav_link"> <i class='bx bx-info-square nav_icon'></i> <span class="nav_name">Bantuan</span> </a>
            </div>
          
            
        </div>
       
        <div class="testbox main">
        <form action="/lynpemberkatanjenazah.php" class="formulir">
            <div class="banner" style="background-image: url(img/layananpemberkatanjenazah.jpg);">
            <h1>Formulir Layanan Pemberkatan Jenazah</h1>
            </div>
            <div class="item">
            <p>Tanggal Meninggal Saudara Tercinta (Alm)</p>
            <input type="date" name="bdate" class="inputformulir" required/>
            <i class="fas fa-calendar-alt"></i>
            </div>
            <div class="item">
            <p>Nama Lengkap Saudara Tercinta (Alm)</p>
            <div class="name-item">
                <input type="text" name="name" placeholder="First" class="inputformulir" />
                <input type="text" name="name" placeholder="Last" class="inputformulir" />
            </div>
            </div>
            <div class="question">
            <p>Jenis Kelamin Saudara Tercinta (Alm)</p>
            <div class="question-answer">
                <div>
                <input type="radio" value="none" id="radio_1" name="gender" class="inputformulir" />
                <label for="radio_1" class="radio"><span>Laki-laki</span></label>
                </div>
                <div>
                <input type="radio" value="none" id="radio_2" name="gender" class="inputformulir" />
                <label for="radio_2" class="radio"><span>Perempuan</span></label>
                </div>
            </div>
            </div>
            <div class="item">
            <p>Nama Lengkap Umat Pemohon Layanan Pemberkatan Jenazah</p>
            <div class="name-item">
                <input type="text" name="name" placeholder="First" class="inputformulir" />
                <input type="text" name="name" placeholder="Last" class="inputformulir" />
            </div>
            </div>
            <div class="item">
            <p>Email Umat Pemohon</p>
            <input type="email" name="email" placeholder="sinung@gmail.com" class="inputformulir" />
            </div>
            <div class="item">
            <p>No. Handphone Umat Pemohon</p>
            <input type="text" name="phone" placeholder="### ### ####" class="inputformulir" />
            </div>
            <div class="item">
                <p>Kartu Tanda Penduduk Umat Pemohon</p>
                <input type="text" name="ktp" class="inputformulir" />
            </div>
            <div class="item">
                <p>No. Baptis Umat Pemohon</p>
                <input type="text" name="nobaptis" class="inputformulir" />
            </div>
            <div class="item">
            <p>Alamat Umat Pemohon</p>
            <input type="text" name="name" placeholder="Street address" class="inputformulir" required/>
            <input type="text" name="name" placeholder="Street address line 2" class="inputformulir"  required/>
            <div class="city-item">
                <input type="text" name="name" placeholder="City" class="inputformulir"  required/>
                <input type="text" name="name" placeholder="Region" class="inputformulir"  required/>
                <input type="text" name="name" placeholder="Postal / Zip code"  class="inputformulir" required/>
                <select required>
                <option value="">Country</option>
                <option value="1">Russia</option>
                <option value="2">Germany</option>
                <option value="3">France</option>
                <option value="4">Armenia</option>
                <option value="5">USA</option>
                </select>
            </div>
            </div>
            <div class="item">
            <p>Tempat</p>
            <input type="text" name="tempat" placeholder="?" class="inputformulir" />
            </div>
            <div class="item">
            <p>Status Screening (Aman/Protokol Covid)</p>
            <input type="text" name="statusscreening" class="inputformulir"  />
            </div>
            <div class="btn-block">
            <button type="submit" href="/" class="buttonformulir">Kirim Layanan</button>
            </div>
        </form>
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