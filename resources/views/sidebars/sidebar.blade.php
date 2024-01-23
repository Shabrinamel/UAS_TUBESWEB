<!-- Sidebars.html -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="/css/sidebar.css">
    <title>Profile Page</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <nav id="sidebar" class="col-md-3 col-lg-2 d-md-block sidebar">
                <img src="/css/assets/Logo.png" alt="Logo"/>
                <div class="sidebar-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" href="Profile.html" onclick="loadContent('Profile.html', 'content')">
                                Profile
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Pembimbing.html" onclick="loadContent('Pembimbing.html', 'content')">
                                Pembimbing/Penguji
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="TA.html" onclick="loadContent('TugasAkhir.html', 'content')">
                                Tugas Akhir
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Aktivitas.html" onclick="loadContent('Aktivitas.html', 'content')">
                                Aktivitas
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Pengembangan.html" onclick="loadContent('Pengembangan.html', 'content')">
                                Pengembangan
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Pendidikan.html" onclick="loadContent('Pendidikan.html', 'content')">
                                Pendidikan
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Jabatan.html" onclick="loadContent('Jabatan.html', 'content')">
                                Jabatan
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Seminar.html" onclick="loadContent('Seminar.html', 'content')">
                                Seminar
                            </a>
                        </li>
                    </ul>

                    <button class="btn mt-4 logout" onclick="logout()">
                        <i class="fa fa-sign-out" aria-hidden="true"></i> logout
                    </button>
                </div>
            </nav>

            <!-- Content -->
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
                <!-- Navbar di bagian konten -->
                <nav class="navbar navbar-expand-lg">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto">
                            <li class="navbar-item">
                                <a class="navbar-link" href="#">
                                    <img src="/css/assets/icon-profile.png" alt="icon-profile"/>
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>

                <!-- Konten akan dimuat di sini -->
                <div id="content">
                    <!-- Isi konten dengan hasil AJAX -->
                </div>
            </main>
        </div>
    </div>

</body>
</html>
