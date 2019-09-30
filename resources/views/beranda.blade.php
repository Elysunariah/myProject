@extends('template')
@section('contentWebsite')

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

<div class="p-5">   
    <div class="mt-1">
    <h3>Rekomendasi</h3>
    <p>a new set of stories just for you</p>
    </div>
        <div class="row mt-5">
        <div class=p-3></div>
        <style>
            .card:hover {
            box-shadow: 0px 2px 20px rgba(0,0,0,0.2);
            }
        </style>
            <div class="panel card" style="width: 13rem; height: 25rem;">
                <img class="card-img-top" src="goates.jpg" alt="Card image cap">
                <div class="card-body">
                <h5 class="card-title">
                <p><a href="/detail" class="text-dark">Te-Nehisi goates the water dancer</a></p>
                </h5>
                </div>
            </div>
        
            <div class="card ml-5" style="width: 13rem; height: 25rem;">
                <img class="card-img-top" src="tentangnovel.jpg" alt="Card image cap">
                <div class="card-body">
                <h5 class="card-title">
                <p><a href="/detail" class="text-dark">Tentang Kamu</a></p> 
                </h5>
                </div>
            </div>
        
            <div class="card ml-5" style="width: 13rem; height: 25rem;">
                <img class="card-img-top" src="kingnovel.jpg" alt="Card image cap">
                <div class="card-body">
                <h5 class="card-title">
                <p><a href="/detail" class="text-dark">Stephen King INSTITUTE</a></p> 
                </h5>
                </div>
            </div>

            <div class="card ml-5" style="width: 13rem; height: 25rem;">
                <img class="card-img-top" src="cahayanovel.jpg" alt="Card image cap">
                <div class="card-body">
                <h5 class="card-title">
                <p><a href="/detail" class="text-dark">Cahaya Surga Dimatanya</a></p> 
                </h5>
                </div>
            </div>

            <div class="card ml-4 mt-5" style="width: 13rem; height: 25rem;">
                <img class="card-img-top" src="bear.jpg" alt="Card image cap">
                <div class="card-body">
                <h5 class="card-title">
                <p><a href="/detail" class="text-dark">The Bear and the Nightingale</a></p> 
               </h5>
                </div>
            </div>
            
            <div class="card ml-5 mt-5" style="width: 13rem; height: 25rem;">
                <img class="card-img-top" src="dilan.jpg" alt="Card image cap">
                <div class="card-body">
                <h5 class="card-title">
                <p><a href="/detail" class="text-dark">Dilan</a></p> 
                </h5>
                </div>
            </div>

            <div class="card ml-5 mt-5" style="width: 13rem; height: 25rem;">
                <img class="card-img-top" src="pemimpinovel.jpg" alt="Card image cap">
                <div class="card-body">
                <h5 class="card-title">
                <p><a href="/detail" class="text-dark">Sang Pemimpi</a></p> 
                </h5>
                </div>
            </div>

            <div class="card ml-5 mt-5" style="width: 13rem; height: 25rem;">
                <img class="card-img-top" src="senja.jpg" alt="Card image cap">
                <div class="card-body">
                <h5 class="card-title">
                <p><a href="/detail" class="text-dark">Dibalik Senja</a></p> 
                </h5>
                </div>
            </div>
        
    </div>
</div>     

@endsection
 

       
  