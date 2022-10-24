<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" type="text/css" href="css/gaya.css" />
    <script src="https://kit.fontawesome.com/1faa5cc1ce.js" crossorigin="anonymous"></script>
    <title>Home | UTS</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi"
      crossorigin="anonymous"
    />
  </head>
  <body style="background:#38d38f">
    <nav class="navbar fixed-top navbar-expand-lg bg-light">
      <div class="container">
        <a class="navbar-brand" href="#">SEKOLAHKITA</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item me-2">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item me-2">
              <a class="nav-link" href="#">Blog</a>
            </li>
            <li class="nav-item me-5">
              <a class="nav-link" href="#">About</a>
            </li>
          </ul>
          <div>
            <a href="logout.php"> <button class="btn-satu">Logout</button> </a>
          </div>
        </div>
      </div>
    </nav>
    <!-- akhir navbar -->
    <section id="hero">
      <div class="container h-100">
        <div class="row h-100">
          <div class="col-md-6 hero-tagline my-auto">
            <h1>Lorem ipsum dolor sit amet.</h1>
            <p>
              <span class="fw-bold">Lorem</span> Lorem ipsum dolor sit amet
              consectetur adipisicing elit. Nihil excepturi ipsam, quibusdam
              soluta deleniti placeat possimus fugit quas veritatis sequi
              ducimus alias culpa enim laboriosam minima.
            </p>
            <a href="#"><button class="btn-dua">Get Started</button></a>
          </div>
          <div class="col-md-6 my-auto">
            <img src="img/book.svg" class="w-100" alt="img">
          </div>
        </div>
      </div>
    </section>
    <!-- akhir Hero -->

    <section id="about"> 
      <div class="container h-100">
        <div class="h-100 p-5 text-center about-tagline">
          <h1 class="">Data Siswa</h1>
          <div class="card p-5 mt-5" style="border-radius: 2rem">
            <table class="table table-light table-hover">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Nama Lengkap</th>
                  <th>Username</th>
                  <th>Password</th>
                </tr>
              </thead>
              <tbody>
                <?php
                    include "koneksi.php";
                    $no = 1;
                    $query = mysqli_query($conn, "SELECT * FROM users");
                    while ($data = mysqli_fetch_array($query)) {
                  ?>
                <tr>
                  <td><?php echo $no++ ?></td>
                  <td><?php echo $data['fullname'] ?></td>
                  <td><?php echo $data['username'] ?></td>
                  <td><?php echo $data['password'] ?></td>
                </tr>
                <?php } ?>
              </tbody>
            </table>
            <a href="signup.php"><button class="btn-dua" style="align-item: center">Tambah Data</button></a>
          </div>
        </div>
      </div>
    </section>
    <!-- akhir Hero -->
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path
        fill="#fff"
        fill-opacity="1"
        d="M0,160L40,154.7C80,149,160,139,240,160C320,181,400,235,480,234.7C560,235,640,181,720,181.3C800,181,880,235,960,261.3C1040,288,1120,288,1200,266.7C1280,245,1360,203,1400,181.3L1440,160L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"
      ></path>
    </svg>

    <footer class="text-center p-3" style="background-color:#fff">
      <p>Created with love <i class="fa-solid fa-heart"></i> 
      <a href="https://www.instagram.com/bariq.faw/" class="fw-bold" style="color:#38d38f; text-decoration:none" >Bariq Faw</a></p>
    </footer>
    <!-- akhir footer -->
  </body>
</html>
