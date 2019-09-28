<!DOCTYPE html>
<html>
    <head>
        <title>tugas ahir</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <style>
        .social-link {
            width: 30px;
            height: 30px;
            border: 1px solid #ddd;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #666;
            border-radius: 50%;
            transition: all 0.3s;
            font-size: 0.9rem;
            }

            .social-link:hover,
            .social-link:focus {
            background: #ddd;
            text-decoration: none;
            color: #555;
            }
        </style>
    </head>
    <body>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
    <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light "> <!-- shadow fixed-top -->
   
    <p class="p-4"></p>
        <a class="navbar-brand">
        <h3><p class="font-weight-bold">ENovel</p></h3>
        </a>        
        <!-- Search form -->
            <i class="fa fa-search ml-4" aria-hidden="true"></i>
            <div class="col-md-8">
            <input class="form-control " type="text" placeholder="Search"
                aria-label="Search">   
            </div>
            
        <button class="navbar-toggler" type="button" data-toggle="collapse" 
        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
         aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <ul class="navbar-nav ml-auto mr-5">
            
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" 
            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Setting
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="/create">Jelajahi</a>
                <a class="dropdown-item" href="/library">Perpustakaan</a>
            </div>
            </li>
            <li class="nav-item ">
            <a class="nav-link" href="/about">About</a>
            <!-- <span class="sr-only">(current)</span> -->           
            </li>
            <li class="nav-item">
            <a class="nav-link" href="/beranda">Home</a>
            </li>
        </ul>    
           <!-- <li class="nav-item">
            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Link Mati</a>
            </li>
        </ul>

        <a href="#" class="btn btn-outline-success mr-3">Login</a>
        <a href="#" class="btn btn-outline-danger">Daftar</a> -->

    </div> 
    </nav>

    <header class="masthead">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
        <div class="col-12 text-center">
            <h1 class="font-weight-light">Welcome to my final assignment</h1>
            <p class="lead">this is my simple website appearance</p>
        </div>
        </div>
    </div>
    </header>
    <style>
        .masthead {
        height: 50vh;
        min-height: 500px;
        background-image: url('https://source.unsplash.com/BtbjCFUvBXs/1920x1080');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        }
</style>

        <div class="container">
            <div class="panel panel-default" style="border-radius: 10px;">
            @section('contentWebsite')
            @show
        </div>
        </div>
        <footer class="text-center" style="padding-top: 10px;">
        &copy 2019 - ELY SUNARIAH
    </footer> 

    </div>
    </body>
</html>
