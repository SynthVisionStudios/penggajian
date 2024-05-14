<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login | Aplikasi Penggajian</title>
  <style>
    /* Styles for card header */
   .card-header {
  background: linear-gradient(to right, #696969, #696969); /* Gradient background */
  color: #000; /* Text color */
  font-family: 'Arial Black', sans-serif; /* Jenis tulisan keren */
}

/* Styles for card title */
.card-title {
  font-size: 1.25rem; /* Font size */
  margin-bottom: 1rem; /* Bottom margin */
  font-family: 'Roboto Condensed', sans-serif; /* Jenis tulisan keren */
}

/* Styles for card subtitle */
.card-subtitle {
  font-size: 0.875rem; /* Font size */
  margin-bottom: 0.5rem; /* Bottom margin */
  font-family: 'Roboto Condensed', sans-serif; /* Jenis tulisan keren */
}

/* Styles for card content */
.card-content {
  font-size: 1.25rem; /* Font size */
  font-weight: bold; /* Font weight */
  font-family: 'Oswald', sans-serif; /* Jenis tulisan keren */
}
  </style>
</head>
<body>
 <!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"><?php echo $title?></h1>

    <div id="date"></div>
    <script>
        var months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
        var date = new Date();
        var day = date.getDate();
        var month = date.getMonth();
        var year = date.getFullYear()

        document.getElementById("date").innerHTML =" " + day + " " + months[month] + " " + year;
    </script>
</div>
</div>

<!-- Content Row -->
<div class="row">

<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-secondary shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-gray-800 text-uppercase mb-1"><a href='http://localhost/penggajian/admin/data_pegawai'>Data Pegawai</a></div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $pegawai?></div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-user-tie fa-2x text-gray-300"></i> <!-- Mengubah ikon menjadi ikon orang yang berjas -->
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-secondary shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-gray-800 text-uppercase mb-1"><a href='http://localhost/penggajian/admin/data_penggajian'>Data Gaji</a></div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $pegawai?></div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-hand-holding-usd fa-2x text-gray-300"></i> <!-- Mengubah ikon menjadi ikon tangan yang memegang uang -->
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-secondary shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-gray-800 text-uppercase mb-1"><a href='http://localhost/penggajian/admin/data_jabatan'>Data Jabatan</a></div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $pegawai?></div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-id-card fa-2x text-gray-300"></i> <!-- Mengubah ikon menjadi ikon kartu identitas -->
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Pending Requests Card Example -->
<div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-secondary shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-gray-800 text-uppercase mb-1"><a href='http://localhost/penggajian/admin/data_absensi'>Data Kehadiran</a></div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $pegawai?></div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-calendar-alt fa-2x text-gray-300"></i> <!-- Mengubah ikon menjadi ikon kalender -->
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">

    <!-- Area Chart -->
    <div class="col-xl-8 col-lg-7">
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-light">Data Pegawai</h6>
                <div class="dropdown no-arrow">
                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                    </a>
                </div>
            </div>
            <!-- Card Body -->
            <div class="card-body">
                <div class="chart-bar">
                    <canvas id="myBarChart"></canvas>
                </div>
            </div>
        </div>
    </div>

    <!-- Pie Chart -->
    <div class="col-xl-4 col-lg-7">
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-light">Status Pegawai</h6>
                <div class="dropdown no-arrow">
                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                    </a>
                </div>
            </div>
            <div class="card-body" style="height: 400px; width: 400px;">
                <div class="chart-pie">
                    <canvas id="myPieChart" height="300"></canvas>
                </div>
                <div class="mt-4 text-center small">
                    <span class="mr-2">
                        <i class="fas fa-user-tie text-danger"></i> Karyawan Tetap <!-- Mengubah ikon menjadi ikon orang yang berjas -->
                    </span>
                    <span class="mr-2">
                        <i class="fas fa-user-alt-slash text-info"></i> Karyawan Tidak Tetap <!-- Mengubah ikon menjadi ikon orang -->
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

    

  </div>
  <!-- /.container-fluid -->

</body>
</html>
