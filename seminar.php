<?php
include'koneksi.php';
$tgl=date('Y-m-d');
session_start();
if(isset($_SESSION['sesi'])){
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="stylesheet" href="style_index.css" />
    <title>Library Information System</title>
  </head>
  <body>
	  <div class="container-fluid"style="padding: 0px;">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container">
        <a class="navbar-brand" href="#">
          <img src="https://upload.wikimedia.org/wikipedia/commons/4/4f/Perpustakaan_Nasional_Republik_Indonesia_insignia.svg" alt="" width="60" height="60" class="d-inline-block align-text-top" />
          <h3>MeBrainry.</h3>
          <h5>Library Information System</h5>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php?p=contact-us">Contact Us</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Data </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <li><a class="dropdown-item" href="index.php?p=anggota">Data Anggota</a></li>
                <li><a class="dropdown-item" href="index.php?p=buku">Data Buku</a></li>
                <li><a class="dropdown-item" href="index.php?p=transaksi">Transaksi Peminjaman</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Category </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <li><a class="dropdown-item" href="#">Ilmu Agama</a></li>
                <li><a class="dropdown-item" href="#">Ilmu Komputer</a></li>
                <li><a class="dropdown-item" href="#">Karya Sastra</a></li>
              </ul>
            </li>
          </ul>
        </div>
		</div>
    
    </nav>
    <!-- End Navbar -->

    <!-- Line -->
    <div class="line"></div>
    <!-- End Line -->

    <!-- SideBar -->
    <div class="container-fluid">
      <div class="row flex-nowrap" >
        <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0" style="background-color: #92b4f4; z-index: 2; box-shadow:  5px 0px 5px #023047; ">
          <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
            <a href="/" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
              <span class="fs-5 d-sm-inline" id="nama-user">Hai <?php echo$_SESSION['sesi']; ?></span>
            </a>
            <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
              <li class="nav-item">
                <a href="event.php" class="nav-link align-middle px-0"> <img src="image/event.svg" alt="" /> <span class="ms-1 d-none d-sm-inline">Event</span> </a>
              </li>
              <li>
                <a href="#submenu1" data-bs-toggle="collapse" class="nav-link px-0 align-middle"> <img src="image/Books.svg" alt="" /> <span class="ms-1 d-none d-sm-inline">Popular Book</span> </a>
                <ul class="collapse show nav flex-column ms-1" id="submenu1" data-bs-parent="#menu">
                  <li class="w-100">
                    <a href="sidebar/buku-populer1.php" class="nav-link px-0"> <span class="d-none d-sm-inline">Andrea Hirata</span> </a>
                  </li>
                  <li>
                    <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Tere Liye</span> </a>
                  </li>
                </ul>
              </li>

              <li>
                <a href="#submenu2" data-bs-toggle="collapse" class="nav-link px-0 align-middle"> <img src="image/Facility.svg" alt=""></i> <span class="ms-1 d-none d-sm-inline">Facility</span></a>
                <ul class="collapse nav flex-column ms-1" id="submenu2" data-bs-parent="#menu">
                  <li class="w-100">
                    <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Room</span> A</a>
                  </li>
                  <li>
                    <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Room</span> B</a>
                  </li>
                </ul>
              </li>
              <li>
                <a href="#submenu3" data-bs-toggle="collapse" class="nav-link px-0 align-middle"> <img src="image/cam.svg" alt=""> <span class="ms-1 d-none d-sm-inline">Documentation</span> </a>
                <ul class="collapse nav flex-column ms-1" id="submenu3" data-bs-parent="#menu">
                  <li class="w-100">
                    <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">2021</span></a>
                  </li>
                  <li>
                    <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">2020</span></a>
                  </li>
                  <li>
                    <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">2019</span></a>
                  </li>
                  <li>
                    <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">2018</span></a>
                  </li>
                </ul>
              </li>
              
            </ul>
            <hr />
            <div class="dropdown pb-4 drop">
              <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="Image/face.svg" alt="hugenerd" width="30" height="30" class="rounded-circle" />
                <span class="d-none d-sm-inline mx-1">Account</span>
              </a>
              <ul class="dropdown-menu dropdown-menu-light text-small shadow">
                <li><a class="dropdown-item" href="#">Loan Book</a></li>
                <li><a class="dropdown-item" href="#">Settings</a></li>
                <li><a class="dropdown-item" href="#">Profile</a></li>
                <li>
                  <hr class="dropdown-divider" />
                </li>
                <li><a class="dropdown-item" href="logout.php">Sign out</a></li>
              </ul>
            </div>
          </div>
        </div>
		<article style="position: absolute; margin-left: 400px; margin-top: 0px; width: 1000px; height: 600px;">
                <div class="isi">
                    <div class="judul">
                       <center> Seminar Nasional</center>
                    </div><br>
                    <img src="images/seminar.jpg" >
                    <p>Seminar adalah pertemuan berkala yang diadakan oleh seseorang yang sedang melaksanakan tugasnya. Seminar berasal dari kata Latin semin yang berarti benih atau dari kata seminarium, yang artinya tanah tempat menanam benih. Jadi, seminar memiliki arti tempat benih-benih kebijaksanaan. Kebijaksanaan yang dimaksud tentu didasari oleh pengajaran akademis, baik pada sebuah universitas atau organisasi komersial yang profesional pada suatu bidang tertentu.</p>
                    <p>Seminar dilakukan dalam rangka memberikan laporan atau mendiskusikan pengerjaan tugasnya itu. Dalam seminar terjadi tukar pikiran di antara penyaji dengan peserta diskusi. Tujuan seminar adalah menemukan jalan pemecahan masalah. Materi yang dikemukan penyaji dibahas dari berbagai aspek dan sudut pandang. Seminar fokus pada topik tertentu yang sangat khusus, di mana peserta yang hadir bisa berpartisipasi aktif. Bentuk seminar juga dilaksanakan dengan sistem dialog yang dipimpin oleh moderator. Selain itu, bisa juga disajikan dengan presentasi hasil penelitian formal yang dilanjutkan dengan sesi debat dan berbagi pengalaman.</p>
                    <p>Tujuan dari seminar adalah membahas permasalahan untuk menemukan solusi, sehingga seminar harus diakhiri dengan simpulan atau keputusan-keputusan hasil pendapat bersama yang diikuti dengan resolusi atau rekomendasi. Pembahasan seminar berpangkal pada makalah atau kertas kerja yang disusun sebelum acara dimulai oleh beberapa pembicara sesuai pokok-pokok bahasan yang diminta panitia penyelenggara.</p>
                </div>
        </article>
		
			
	</div>
	
	</div>
	<!-- Line -->
    <div class="line2"></div>
    <!-- End Line -->
	<div id="footer">
		<h3>&copy 2021 Sistem Informasi Perpustakaan</h3>
		<h4>Made By: Kelompok 2 </h4>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>
<?php
}
else {
	echo "<script>
		alert('Anda Harus Login Dahulu!');
	</script>";
	header('location:login.php');
}
?>