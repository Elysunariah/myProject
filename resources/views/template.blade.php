<!DOCTYPE html>
<html>
    <head>
        <title>APLIKASI</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
    </head>
    <body>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
    <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">ENovel</a>
        
        <!-- Search form -->
  <i class="fas fa-search" aria-hidden="true"></i>
  <input class="form-control form-control-sm ml-3 w-75" type="text" placeholder="Search"
    aria-label="Search">

        <button class="navbar-toggler" type="button" data-toggle="collapse" 
        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
         aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="/about">About</a>
            </li>
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" 
            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Setting
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Buat Cerita Baru</a>
                <a class="dropdown-item" href="#">Perpustakaan</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Tutorial Bootstrap</a>
            </div>
            <!-- </li>
            <li class="nav-item">
            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Link Mati</a>
            </li>
        </ul>

        <a href="#" class="btn btn-outline-success mr-3">Login</a>
        <a href="#" class="btn btn-outline-danger">Daftar</a>

        </div> -->
    </nav>

        <div class="container">
            <div class="panel panel-default" style="border-radius: 10px;">
            @section('contentWebsite')
            @show
        </div>
        </div>
        <footer class="text-center" style="padding-top: 10px;">
        &copy 2019 - ELY SUNARIAH
    </footer>

    <section class="main">
    <div class="container">
    <div class="row">
    <div class="col-lg-8 mx-auto">
    <p class="m-10"></p>
    <img src="cahayanovel.jpg" alt="Cinque terre" class="img-thumbnail">  
    <p class="lead">Cahaya Surga Dimatanya</p>
    </div>
    </div>
    </div>
    </section>
    </div>
    </body>
</html>