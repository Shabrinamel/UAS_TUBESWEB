<!-- layouts/app.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="/css/sidebars.css">
    
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <nav id="sidebar" class="col-md-3 col-lg-2 d-md-block sidebar">
                <img src="/assets/Logo.png" alt="Logo"/>
                <div class="sidebar-sticky">
                <!-- <img src="{{ asset('/asset/Logo.png') }}" alt="Logo"/> -->
                <div class="sidebar-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('profil/'.Auth::user()->email.'/edit') }}">
                                Profil
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('pendidikan') }}">
                                Pendidikan
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('jabatan') }}">
                                Jabatan
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('bahanajar') }}">
                                Pengembangan Bahan Ajar
                            </a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="{{ url('pengembangandiri') }}">
                                Pengembangan Diri
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('seminar') }}">
                                Seminar
                            </a>
                        </li>
                    </ul>

                    <li class="btn mt-4 logout">
                        <a href="/logout" class="fa fa-sign-out" aria-hidden="true">Logout</a>
                    </li>

                    <!-- <div class="col-sm-10"><button type="logout" class="btn btn-primary" name="logout">logout</button></div> -->
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
                                    <img src="/assets/icon-profile.png" alt="icon-profile"/>
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>

                <!-- Konten akan dimuat di sini -->
                <div class="container">
                    @yield('content')
                </div>
            </main>
        </div>
    </div>
</body>
</html>
