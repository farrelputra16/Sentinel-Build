<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'SentIBuild')</title>
    <!-- Bootstrap CSS CDN -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        .sidebar {
            min-width: 250px;
            max-width: 250px;
            height: 100vh;
        }
        .sidebar .nav-item.active {
            background-color: #007bff;
            color: white;
        }
        .sidebar .nav-item.active a {
            color: white;
        }
        .logo {
            width: 50px;
            margin-right: 10px;
        }
        .icon{
            width: 30px;
            height: 30px;
            margin-left: 10px;
        }
    </style>
</head>
<body>
    <div id="app" class="d-flex">
        <!-- Sidebar -->
        <nav class="sidebar bg-light border-right">
            <div class="sidebar-header p-3">
                <div class="d-flex align-items-center">
                    <img src="{{ asset('/storage/Asset/LogoSentinelBuild.jpg') }}" alt="logo" class="logo ms-3">
                    <h3>SentIBuild</h3>
                </div>
            </div>
            <ul class="nav flex-column">
                <li class="nav-item" id="dashboard">
                    <div class="d-flex flex-row align-items-center mb-2">
                    <img src="{{ asset('/storage/Asset/home.png') }}" alt="" srcset="" class="icon">
                    <a href="http://127.0.0.1:8000/index" class="nav-link" onclick="changeContent('Dashboard')">Dashboard</a>
                    </div>
                </li>
                <li class="nav-item" id="workhour">
                    <div class="d-flex flex-row align-items-center mb-2">
                    <img src="{{ asset('/storage/Asset/clock.png') }}" alt="" srcset="" class="icon">
                    <a href="http://127.0.0.1:8000/workhour" class="nav-link" onclick="changeContent('Workhour')">Workhour</a>
                </li>
                <li class="nav-item" id="accounts">
                    <div class="d-flex flex-row align-items-center mb-2">
                    <img src="{{ asset('/storage/Asset/person.png') }}" alt="" srcset="" class="icon">
                    <a href="http://127.0.0.1:8000/accounts" class="nav-link" onclick="changeContent('Accounts')">Accounts</a>
                </li>
                <li class="nav-item" id="authorization">
                    <div class="d-flex flex-row align-items-center mb-2">
                    <img src="{{ asset('/storage/Asset/shield.png') }}" alt="" srcset="" class="icon">
                    <a href="http://127.0.0.1:8000/auth" class="nav-link" onclick="changeContent('Authorization')">Authorization</a>
                </li>
            </ul>
        </nav>

        <!-- Page Content -->
        <div id="content" class="w-100">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
                <h2 id="main-title">@yield('NavTitle', 'Dashboard')</h2>

                <div class="collapse navbar-collapse">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Settings</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Notif</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img src="path/to/profile/pic.jpg" alt="Profile" class="rounded-circle" width="30">
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Profile</a>
                                <a class="dropdown-item" href="#">Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>

            <!-- Main Content -->
            <main class="py-4">
                <div class="container">
                @yield('content')
                </div>
            </main>
        </div>
    </div>

    <!-- jQuery and Bootstrap JS CDN -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        function changeContent(content) {
            document.getElementById('main-title').innerText = content;

            let items = document.querySelectorAll('.nav-item');
            items.forEach(item => {
                item.classList.remove('active');
            });

            document.getElementById(content.toLowerCase()).classList.add('active');
        }

        document.getElementById('menu-toggle').addEventListener('click', function () {
            document.getElementById('sidebar').classList.toggle('toggled');
        });
    </script>
</body>
</html>
