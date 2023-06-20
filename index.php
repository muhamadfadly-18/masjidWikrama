<?php 
    require 'function.php';
    $students = query("SELECT * FROM masjid");

    if(isset($_POST["search"]) ) {
        $students = search($_POST["keyword"]);
    }


    if (isset($_POST["click"])) {
       
      if (tambahData($_POST) > 0 ) {
          echo "
          <script>
              alert('data berhasil di simpan');
              document.location.href='index.php'; 
          </script>
          ";
      } else {
          echo "
          <script>
              alert('data gagal di simpan');
              document.location.href='index.php'; 
          </script>
          ";
      }
  }

  $donatur = new Prosses();
  $tnom = new Prosses();
  $tdon = new Prosses();
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src= "https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://icons.getbootstrap.com/">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" 
		integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" 
		crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

    <!-- navbar -->
<div class="d-flex" style="margin-top: 20px;">
<nav class="navbar navbar-fixed-top" style="background-color: #ee7614;">
  <div class="container-fluid " style="position: absolute; margin-left: 85px;">
    <ul class="nav navbar-nav">
    <li><img class="image" border="0" src="img/wikrama-logo.png"  width="55px" style=" margin-left: 40px; margin: 1px; padding: 0px color:white;"></li>
    </ul></b>
  </div>
</nav>

  <div class="p-2 flex-grow-1" style="margin-left: 150px; font-size: 20px;">
           <b> SMK WIKRAMA <br>BOGOR</b>
  </div>
    <div class="p-2"><a href="#content1">Beranda</a></div><hr>
    <div class="p-2"><a href="#content2">Cara Wakaf</a></div><hr>
    <div class="p-2"><a href="#content3">Data Wakaf</a></div><hr>
    <div class="p-2"><a href="#content4">Gallery</a></div><hr>
    <div class="p-2"><a href="#content5">Web Wikrama</a></div><hr>
  </div>

<!-- beranda -->
<div class="content1" id="content1">
    <div class="text1">
        <div class="text">
            <p>Masjid Besar SMK Wikrama Bogor</p>
                <h1>Mari 
                <span>Tingkatkan <br>Keimanan</span>
                Masyarakat <br>
                SMK Wikrama Bogor</h1>
        </div>
    </div>

    <img src="img/wikrama-logo.png" style="position:absolute; margin-left:87%; height: 60px; width: 60px; margin-top: 11%;  background-color: #FFFFFF; border: 8.14286px solid #FFFFFF;
                                            filter: drop-shadow(0.771459px 6.17167px 46.2875px rgba(0, 0, 0, 0.1));  border-radius: 195px;  width: -15%;">

    <div class="ccardd">
      <div class="ccard">
        <img src="img/daun.jpg" alt="" style="width: 45px; height: 45px; ">
        <p>Lingkungan Terjaga.</p>
      </div>

      <div class="ccard" style="margin-top: 28px;">
        <img src="img/vektor.jpg" alt="" style="width: 45px; height: 45px; border-radius: 0;">
        <p>Kapasitas Besar.</p>
      </div>

      <div class="ccard" style="margin-top: 28px;">
        <img src="img/qur'an.jpg" alt="" style="width: 45px; height: 45px; border-radius: 0;">
        <p>Al-Qur'an Gratis.</p>
      </div>
    </div> 

    <img src="img/masjid6.jpg" style="margin-top: 25px;"/>
    
    <!-- Button trigger modal -->
<button type="button" name="submit" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop" style="background: #1F3984; margin-left: 8%; margin-top: -2%; border-radius: 20px;">
  Beri Bantuan Shodaqoh
</button>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Donatur Masjid Wikrama</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

      <!-- form -->
        <form action="#" method="post">
            <div class="mb-3">
              <label for="nama_donatur" class="form-label">Masukan Nama Donatur</label>
              <input type="string" class="form-control" id="nama_donatur" name="nama_donatur">
          </div>

          <div class="mb-3">
            <label for="id_donatur" class="form-label">Masukan ID Donatur</label>
            <input type="number" class="form-control" id="id_donatur" name="id_donatur">
          </div>

          <div class="option">
            <div class="mb-3 form-check">
              <select name="paket" id="paket">
                <option selected disabled>pilih paket</option>
                <option value="paket 1">paket 1</option>
                <option value="paket 2">paket 2</option>
              </select>
            </div>
          </div>

          <div class="option">
            <div class="mb-3 form-check">
              <select name="jenis_barang" id="kategori">
                <option selected disabled>pilih kategori</option>
                <option value="emas">emas</option>
                <option value="uang">uang</option>
              </select>
            </div>
          </div>

          <div class="mb-3">
            <label for="jumlah_barang" class="form-label">Jumlah Nominal</label>
            <input type="number" class="form-control" id="jumlah_barang" name="jumlah_barang">
          </div>
          <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" name="click" class="btn btn-primary">Submit</button>
      </div>
        </form>
      </div>
      
    </div>
  </div>
</div>
<script>

</script>
</div>

<div class="cadd">
    
                <div class="roww">
                    <div class="col-sm-4 py-5 mx-auto">
                        <h5 style="color: gray;">Total Target Dana</h5>
                        <h1 class="display-5 fw-bold"><?php
                                                        $target = $donatur->target();
                                                        echo "Rp." .  number_format($target); ?></h1>  
                    </div>

                    <div class="col-sm-4 py-5 mx-auto">
                        <h5 style="color: gray;">Total Dana Terkumpul</h5>
                        <h1 class="display-5 fw-bold"> <?php
                                                        $tnom = $donatur->totalNominal();
                                                          echo "Rp." . number_format($tnom['jumlah']); ?> </h1>                                   
                    </div>

                    <div class="col-sm-4 py-5 mx-auto">
                        <h5 style="color: gray;">Total Donatur</h5>
                        <h1 class="display-5 fw-bold"><?php
                                                        $tdon = $donatur->totalDonatur();
                                                        echo number_format($tdon); ?> Orang</h1>
                    </div>
                </div>

                <div class="row">
                    <div class="col-8">
                        <div class="progress" role="progressbar" aria-label="Terpenuhi" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="height: 35px">
                            <div class="progress-bar" style="width: <?php echo $donatur->persentase(); ?>%; background-color: #1F3984;"></div>
                        </div>
                    </div>
                    <div class="col-4">
                        <b><span style="font-size: x-large; color:darkblue;">
                                <?php echo number_format($donatur->persentase()); ?>% </span> <span style="font-size: larger; color:darkblue;">Terpenuhi</span></b>
                    </div>
                </div>
    </div>
</div>

            <div class="progress2">
              <div class="p-2 rounded-bottom border shadow" style="background-color: #1F3984;">
                  <marquee behavior="" direction="left">
                      <b>
                          <?php
                          foreach( $students as $student ) {
                                  echo '<span style="font-size: x-large; color:white;">' . ($student['nama_donatur']) . " - </span>";
                                  echo '<span style="font-size: x-large; color:#FFF500;">' . ($student['jenis_barang']) . " : ";
                                  echo "RP." . ($student['jumlah_barang']). "</span>" . '<span style="display: inline-block; font-size: 30px; color: #bbb9b9; margin-left: 5px; margin-right: 5px;">  • </span>';
                              }
                          ?>  
                      </b>
                  </marquee>
              </div>

            </div>

<!-- banner -->
<div id="carouselExampleIndicators" class="carousel slide" style="margin-top:50px; margin-left:65px; margin-right:50px; ">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/wl 1.jpg" class="d-block w-100" style="height:450px;border-radius:20px;">
    </div>
    <div class="carousel-item">
      <img src="img/wl 2.jpg" class="d-block w-100" style="height:450px;border-radius:20px;">
    </div>
    <div class="carousel-item">
      <img src="img/wl 3.jpg" class="d-block w-100" style="height:450px; border-radius:20px;">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<!-- manfaat wakaf -->
<div class="font">
    <div class="judul">
        <h1><span>Manfaat </span><b>Wakaf, Infaq <br>
        Shodaqoh</b></h1>
    </div>
    <div class="deskripsi">
        <p>Berikut adalah beberapa Keutamaan Wakaf, Infaq
            Shodaqoh Yang Akan Anda Dapatkan
        </p>
    </div>
  </div>
  
  <div class="tangan" style="margin-top: 30%;">
      <img src="img/poto.jpg" style="margin-top: -130px; margin-bottom: 120px;" >
  </div>
  <div class="content">
            <div class="container">
                <div class="cad">
                    <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
        <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
        </svg>
                        <h3>Menjadikan Hati <br> Lebih Tenang</h3><br>
                        <p>kami berikan harga yang <br> terbaik dibandingkan <br>kompetitor kami</p>
                </div>
                <div class="cad">
                <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-patch-check" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M10.354 6.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7 8.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
  <path d="m10.273 2.513-.921-.944.715-.698.622.637.89-.011a2.89 2.89 0 0 1 2.924 2.924l-.01.89.636.622a2.89 2.89 0 0 1 0 4.134l-.637.622.011.89a2.89 2.89 0 0 1-2.924 2.924l-.89-.01-.622.636a2.89 2.89 0 0 1-4.134 0l-.622-.637-.89.011a2.89 2.89 0 0 1-2.924-2.924l.01-.89-.636-.622a2.89 2.89 0 0 1 0-4.134l.637-.622-.011-.89a2.89 2.89 0 0 1 2.924-2.924l.89.01.622-.636a2.89 2.89 0 0 1 4.134 0l-.715.698a1.89 1.89 0 0 0-2.704 0l-.92.944-1.32-.016a1.89 1.89 0 0 0-1.911 1.912l.016 1.318-.944.921a1.89 1.89 0 0 0 0 2.704l.944.92-.016 1.32a1.89 1.89 0 0 0 1.912 1.911l1.318-.016.921.944a1.89 1.89 0 0 0 2.704 0l.92-.944 1.32.016a1.89 1.89 0 0 0 1.911-1.912l-.016-1.318.944-.921a1.89 1.89 0 0 0 0-2.704l-.944-.92.016-1.32a1.89 1.89 0 0 0-1.912-1.911l-1.318.016z"/>
</svg>
                        <h3>Terbukanya <br> Pintu Rezeki</h3><br>
                        <p>Allah SWT akan membuka <br> pintu rezeki dari arah yang<br>tidak di kira sebelumnya</p>
                    </div>
            </div>
            <div class="container">
                <div class="cad">
                <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-shield" viewBox="0 0 16 16">
    <path fill-rule="evenodd" d="M10.354 6.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7 8.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
    <path d="M5.338 1.59a61.44 61.44 0 0 0-2.837.856.481.481 0 0 0-.328.39c-.554 4.157.726 7.19 2.253 9.188a10.725 10.725 0 0 0 2.287 2.233c.346.244.652.42.893.533.12.057.218.095.293.118a.55.55 0 0 0 .101.025.615.615 0 0 0 .1-.025c.076-.023.174-.061.294-.118.24-.113.547-.29.893-.533a10.726 10.726 0 0 0 2.287-2.233c1.527-1.997 2.807-5.031 2.253-9.188a.48.48 0 0 0-.328-.39c-.651-.213-1.75-.56-2.837-.855C9.552 1.29 8.531 1.067 8 1.067c-.53 0-1.552.223-2.662.524zM5.072.56C6.157.265 7.31 0 8 0s1.843.265 2.928.56c1.11.3 2.229.655 2.887.87a1.54 1.54 0 0 1 1.044 1.262c.596 4.477-.787 7.795-2.465 9.99a11.775 11.775 0 0 1-2.517 2.453 7.159 7.159 0 0 1-1.048.625c-.28.132-.581.24-.829.24s-.548-.108-.829-.24a7.158 7.158 0 0 1-1.048-.625 11.777 11.777 0 0 1-2.517-2.453C1.928 10.487.545 7.169 1.141 2.692A1.54 1.54 0 0 1 2.185 1.43 62.456 62.456 0 0 1 5.072.56z"/>
    </svg>

                        <h3>Menjauhkan Dari  <br> Bahaya </h3><br>
                        <p>Rasulullah SAW pernah <br> bersabda: “Bersegeralah <br> untuk bersedekah, karena <br> musibah dan bencana tidak <br> bisa mendahului sedekah."</p>
                </div>
                <div class="cad">
                <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-stars" viewBox="0 0 16 16">
    <path d="M7.657 6.247c.11-.33.576-.33.686 0l.645 1.937a2.89 2.89 0 0 0 1.829 1.828l1.936.645c.33.11.33.576 0 .686l-1.937.645a2.89 2.89 0 0 0-1.828 1.829l-.645 1.936a.361.361 0 0 1-.686 0l-.645-1.937a2.89 2.89 0 0 0-1.828-1.828l-1.937-.645a.361.361 0 0 1 0-.686l1.937-.645a2.89 2.89 0 0 0 1.828-1.828l.645-1.937zM3.794 1.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387A1.734 1.734 0 0 0 4.593 5.69l-.387 1.162a.217.217 0 0 1-.412 0L3.407 5.69A1.734 1.734 0 0 0 2.31 4.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387A1.734 1.734 0 0 0 3.407 2.31l.387-1.162zM10.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732L9.1 2.137a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L10.863.1z"/>
    </svg>
                        <h3>Pahala Yang Tak<br> Terputus</h3><br>
                        <p>Ini akan menolong kita di <br> akhirat nantinya, juga  <br> dapat menyelamatkannya <br> dari api neraka.</p>
                </div>
            </div>
        </div>

<!-- cara wakaf -->
<div class="content2" id="content2">
  <div class="font">
      <div class="judul">
          <h1><span>Cara </span><b>Wakaf, Infaq <br>
          Shodaqoh</b></h1>
      </div>
      <div class="deskripsi">
          <p>Berikut adalah beberapa Keutamaan Wakaf, Infaq
              Shodaqoh Yang Akan Anda Dapatkan
          </p>
      </div>
  </div>
</div>

<div class="row">
  <div class="col-sm-6 mb-3 mb-sm-0">
      <div class="cardd">
        <div class="card-body">
          <h1>01</h1>
          <h5 class="card-title">Isi Form data diri</h5>
          <p class="card-text">Isikan form pengisian yang disediakan di form data diri, isikan dengan data diri anda dengan teliti.</p>
        </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="cardd" style="margin-left: 15px;">
      <div class="card-body">
        <h1>02</h1>
        <h5 class="card-title">Isikan nominal shodaqoh</h5>
        <p class="card-text">Isikan nominal yang akan anda shodaqohkan, pastikan isi nominal dengan seiklasnya tanpa ada paksaan apapun.</p>
      </div>
    </div>
  </div>
</div>

    <div class="row">
  <div class="col-sm-6 mb-3 mb-sm-0">
    <div class="cardd">
      <div class="card-body">
        <h1>03</h1>
        <h5 class="card-title">upload bukti pembayaran</h5>
        <p class="card-text">Pilih motode pembayaran dan upload bukti pembayaranya.</p>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="cardd" style="margin-left: 15px;">
      <div class="card-body">
        <h1>04</h1>
        <h5 class="card-title">Verifikasi Pembayaran</h5>
        <p class="card-text">Pembayaran anda akan di verifikasi oleh admin dan jika terverifikasi nama anda akan tampil.</p>
      </div>
    </div>
  </div>
</div>
</div>

<!-- data wakaf -->
<div class="content3" id="content3">
  <div class="font">
      <div class="judul">
          <h1><span>Data Donatur </span><b>Wakaf, Infaq <br>
          Shodaqoh</b></h1>
      </div>
      <div class="deskripsi">
          <p>Berikut adalah data donatur wakaf, infaq 
              shodaqoh untuk masjid besar SMK Wikrama Bogor
          </p>
      </div>
  </div>
</div>

<!-- table data -->
<div style="overflow: auto; width: 1500px; height: 500px;">
<table border="1" style="width:90%; heigth: 100px; ">

<thead>
            <tr style="background-color: gray; ">
                <th>No. </th>
                <th>Nama Donatur</th>
                <th>ID Donatur</th>
                <th>Paket</th>
                <th>Kategori</th>
                <th>Nominal Barang</th>
                <th></th>
            </tr>
        </thead>
  
        <tbody>
        <?php $i = 1 ?>
            <?php foreach( $students as $student ) { ?>
            <tr>
                <td><?= $i ?></td>
                <td><?php echo $student["nama_donatur"] ?></td>
                <td><?php echo $student["id_donatur"] ?></td>
                <td><?php echo $student["paket"] ?></td>
                <td><?php echo $student["jenis_barang"] ?></td>
                <td><?php echo $student["jumlah_barang"] ?></td>
                <td>
                <i class="fa-solid fa-ellipsis-vertical"></i>
                    <!-- <?= $student ["id"] ?>">Hapus</a>
                    
                    <?= $student ["id"] ?>">Edit</a>  -->
                </td>
            </tr>
            <?php $i++ ?>
            <?php } ?>
        </tbody>
    </table>
</div>

<!-- gallery -->
<div class="content4" id="content4">
  <div class="font">
    <div class="judul">
        <h1><span>Gallery </span><b>Masjid besar SMK Wikrama Bogor<br>
        </b></h1>
    </div>
    <div class="deskripsi">
        <p>Berikut adalah gallery masjid besar sMK Wikrama Bogor.
            </p>
        </div>
        <div class="gall">
            <img src="img/masjid1.jpg" alt="Cinque Terre">
          
            <img src="img/masjid2.jpg" alt="Forest">
        
            <img src="img/masjid3.jpg" alt="Northern Lights">

            <div class="gal">
            <img src="img/masjid4.jpg" alt="Cinque Terre">
          
            <img src="img/masjid5.jpg" alt="Forest">

            <div class="buka">
            <div class="bk">
                <i class="fa-solid fa-arrow-right"></i>
                <a href="https://id.pinterest.com/pin/93168286033613740/" target = "blink" >Buka Gallery</a>
            </div>
        </div>
           
            </div>
            </div>
  </div>
</div>


<!-- web wikrama / footer -->

<div class="content5" id="content5">
<footer class="footer">
  <div class="footer-img" style="display: flex;">
    <img src="img/wikrama-logo.png" alt="" style="width: 45px; height: 45px; margin-top: 40px;">
    <div class="footer-judul" style="margin-top: 40px; margin-left: 15px;">
      <p>SMK WWIKRAMA <br> BOGOR</p>
    </div>
  </div>
        <div class="roww">
             <!-- coloum 1 -->
            <div class="footer-col">
                <div class="alamat">
                  <ul style="list-style: none;">
                    <h4>Alamat</h4>
                      <li><a href="">Jl. Raya Wangun</a></li>
                      <li><a href="">Kelurahan Sindangsari</a></li>
                      <li><a href="">Bogor Timur 16720</a></li>
                    </ul>
                    <hr>
                  </div>

                <ul style="list-style: none;">
                  <h4>Telepon</h4>
                    <li><a href="">0251-8242411 /</a></li>
                    <li><a href="">082221718035 (Whatsapp) </a></li>
                    <hr>
                    
                <div class="footer-img-img">
                    <div>
                      <img src="img/.png" alt="">
                  </div>

                  <div>
                    <img src="img/.png" alt="">
                  </div>

                  <div>
                    <img src="img/.png" alt="">
                  </div>

                  <div>
                    <img src="img/.png" alt="">
                  </div>

              </div>
                
              </ul>
            </div>
              
            <!-- coloum 2 -->
            <div class="footer-col" style="margin-top: -40px;">
                <h4>Tentang Wikrama</h4>
                <ul>
                    <li>Sejarah</li>
                    <li>Peraturan Sekolah</li>
                    <li>Rencana Strategi & Prestasi</li>
                    <li>Yayasan</li>
                    <li>Struktur Organisasi</li>
                    <li>Cabang</li>
                    <li>Penghargaan</li>
                    <li>Kerjasama</li>
                </ul>
            </div>

            <!-- coloum 3  -->
            <div class="footer-col" style="margin-top: -40px; margin-left: -40px;">
                <h4>Kirim Pesan</h4>
                <form action="mailto: yogadwipramana@smkwikama.sch.id" method="post" enctyype="text/plain">
                        <div class="mb-3">
                            <input type="text" class="form-control" id="nama" placeholder="Nama">
                        </div><br>

                        <div class="mb-3"  style="margin-top: -15px;">
                            <input type="email" class="form-control" id="email" placeholder="Email">
                        </div><br>

                        <div class="mb-3"  style="margin-top: -15px;"> 
                            <input type="text" class="form-control" id="pesan" placeholder="Pesan Anda" style="width: 288px; height: 110px;">
                        </div><br>

                        <button type="submit" class="btn btn-primary"  style="margin-top: -12px; border-radius: 20px;">Submit</button>
                </form>
            </div>

        </div>
    </div>
</footer>
</div>
</body>
</html>