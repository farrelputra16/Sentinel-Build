<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="C:\SeantinelBuild\SentinelBuild2\resources\css\login_admin.css">
    <title>Login Pekerja</title>
    <style>
        .container {
            padding: 2% 30%;
        }
                    .card {
                    margin: 0 auto;
                    padding: 20px;
                    display:flex;
                    flex-direction: column;
                    justify-content: center;
                    align-items: center;
                    }

                    .card-header {
                        font-weight: bold;
                        font-size: 20px;
                        text-align: center;
                        margin-bottom: 20px;
                    }
                    
                    .image{
                        width: 60%;
                    }
                    
                    .form-group {
                        margin-bottom: 15px;
                        display: flex;
                        flex-direction: column;
                    }

                    label {
                        font-weight: bold;
                    }

                    input[type="text"] {
                        width: 100%;
                        padding: 5px;
                        border: 1px solid #ddd;
                        border-radius: 3px;
                    }

                    button[type="submit"] {
                        width: 80%;
                        padding: 10px;
                        background-color: #007bff;
                        color: #fff;
                        border: none;
                        border-radius: 3px;
                        cursor: pointer;
                        
                    }

                    button[type="submit"]:hover {
                        background-color: #0056b3;

                    }
                    
                    .link{
                        margin-top: 15px;
                        text-align: center;
                    }

                    .link{
                        margin-top: 15px;
                        text-align: center;
                    }
                </style>
</head>
<body>
<div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                    <div class="card">
                        <img src = "{{ asset('/storage/Asset/LogoSentinelBuild.png') }}" alt="Description of the image"  class="image"/>
                        <p class="card-header">
                            Login Admin
                        </p>
                        <div class="card-body">
                        <form method="post" action="{{ route('login/admin') }}">
                                @csrf
                                <div class="form-group">
                                    <label for="name">Nama</label>
                                    <input type="text" class="form-control" id="name" name="name" required>
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" id="password" name="password" required>
                                </div>
                                <center>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </center>
                                <div class="link">
                                    <a href="{{ route('login_pekerja') }}">Masuk sebagai Pekerja</a>
                                </div>
                                <div class="link">
                                    <a href="{{ route('login_pekerja') }}">Masuk sebagai Pekerja</a>
                                </div>
                            </form>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</body>
</html>