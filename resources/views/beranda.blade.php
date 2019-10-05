@extends('template')
@section('contentheader')
<div class="bg-light">

<header class="masthead">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
        <div class="col-12 text-center">
            <h1 class="font-weight-light text-danger">Welcome to my final assignment</h1>
            <p class="lead text-danger">this is my simple website appearance</p>
        </div>
        </div>
    </div>
    </header>
@endsection
@section('contentWebsite')

    <style>
        .masthead {
        height: 50vh;
        min-height: 500px;
        background-image: url('tidsean.jpg');
        /* https://source.unsplash.com/BtbjCFUvBXs/1920x1080 */
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        }
</style>
<div class="p-1 mt-3 bg-white">
<div class="p-5">   
    <div class="mt-1">
    <h3>Rekomendasi</h3>
    <p>a new set of stories just for you</p>
        <div class="row mt-5">
        <div class=p-3></div>
        <style>
            .card:hover {
            box-shadow: 0px 2px 20px rgba(0,0,0,0.2);
            }
        </style>
            <div class="" style="width: 10rem; height: 20rem;">
                <img class="card-img-top" src="goates.jpg" alt="Card image cap">
                <h5 class="card-title">
                <p><a href="/detaill" class="text-dark">Te-Nehisi goates the water dancer</a>
                <small class="text-muted">Fiksi</small></p>
                </h5>
            </div>
        
            <div class="ml-5" style="width: 10rem; height: 20rem;">
                <img class="card-img-top" src="hot-lecturer.jpg" alt="Card image cap">
                <h5 class="card-title">
                <p><a href="/detaill" class="text-dark">Hot Lecturer and Me</a>
                <small class="text-muted">Romance</small></p> 
                </h5>
            </div>
        
            <div class="ml-5" style="width: 10rem; height: 20rem;">
                <img class="card-img-top" src="kingnovel.jpg" alt="Card image cap">
                <h5 class="card-title">
                <p><a href="/detaill" class="text-dark">Stephen King INSTITUTE</a>
                <small class="text-muted">Mistis</small></p> 
                </h5>
            </div>

            <div class="ml-5" style="width: 10rem; height: 20rem;">
                <img class="card-img-top" src="me-and.jpg" alt="Card image cap">
                <h5 class="card-title">
                <p><a href="/detaill" class="text-dark">Me and My Broken Heart</a>
                <small class="text-muted">Romance</small></p> 
                </h5>
            </div>

            <div class="ml-5" style="width: 10rem; height: 20rem;">
                <img class="card-img-top" src="bear.jpg" alt="Card image cap">
                <h5 class="card-title">
                <p><a href="/detaill" class="text-dark">The Bear and the Nightingale</a>
                <small class="text-muted">Humor</small></p> 
               </h5>
            </div>
        </div>
        </div>  

        <div class="row mt-5">
        <div class=p-3></div>
        <style>
            .card:hover {
            box-shadow: 0px 2px 20px rgba(0,0,0,0.2);
            }
        </style>
            <div class="" style="width: 10rem; height: 20rem;">
                <img class="card-img-top" src="dilan.jpg" alt="Card image cap">
                <h5 class="card-title">
                <p><a href="/detaill" class="text-dark">Dilan</a>
                <small class="text-muted">Romance</small></p>
                </h5>
            </div>
        
            <div class=" ml-5" style="width: 10rem; height: 20rem;">
                <img class="card-img-top" src="tentangnovel.jpg" alt="Card image cap">
                <h5 class="card-title">
                <p><a href="/detaill" class="text-dark">Tentang Kamu</a>
                <small class="text-muted">Romance</small></p> 
                </h5>
            </div>
        
            <div class="ml-5" style="width: 10rem; height: 20rem;">
                <img class="card-img-top" src="si-panda-amerika.jpg" alt="Card image cap">
                <h5 class="card-title">
                <p><a href="/detaill" class="text-dark">Si Panda Amerika(Amerika Panda)</a>
                <small class="text-muted">Humor</small></p> 
                </h5>
            </div>

            <div class="ml-5" style="width: 10rem; height: 20rem;">
                <img class="card-img-top" src="cahayanovel.jpg" alt="Card image cap">
                <h5 class="card-title">
                <p><a href="/detaill" class="text-dark">Cahaya Surga Dimatanya</a>
                <small class="text-muted">Islamic</small></p> 
                </h5>
            </div>

            <div class="ml-5" style="width: 10rem; height: 20rem;">
                <img class="card-img-top" src="pangeran-cilik.jpg" alt="Card image cap">
                <h5 class="card-title">
                <p><a href="/detaill" class="text-dark">Le Petit Prince </a>
                <small class="text-muted">Fiksi</small></p> 
               </h5>
            </div>
        </div>
        </div>    

        <div class="p-5">   
    <h3>Popular</h3>
        <div class="row mt-4">
        <div class=p-3></div>
        <style>
            .card:hover {
            box-shadow: 0px 2px 20px rgba(0,0,0,0.2);
            }
        </style>
            <div class="" style="width: 10rem; height: 20rem;">
                <img class="card-img-top" src="cara.jpg" alt="Card image cap">
                <h5 class="card-title">
                <p><a href="/detaill" class="text-dark">Cara Berbahagia Tanpa Kepala</a>
                <small class="text-muted">Fiksi</small></p>
                </h5>
            </div>
        
            <div class="ml-5" style="width: 10rem; height: 20rem;">
                <img class="card-img-top" src="complicated.jpg" alt="Card image cap">
                <h5 class="card-title">
                <p><a href="/detaill" class="text-dark">Complicated</a>
                <small class="text-muted">Fiksi</small></p> 
                </h5>
            </div>
        
            <div class="ml-5" style="width: 10rem; height: 20rem;">
                <img class="card-img-top" src="is.jpg" alt="Card image cap">
                <h5 class="card-title">
                <p><a href="/detaill" class="text-dark">This is why I need you</a>
                <small class="text-muted">Romance</small></p> 
                </h5>
            </div>

            <div class="ml-5" style="width: 10rem; height: 20rem;">
                <img class="card-img-top" src="rich.jpg" alt="Card image cap">
                <h5 class="card-title">
                <p><a href="/detaill" class="text-dark">Rich People Problems</a>
                <small class="text-muted">Cerpen</small></p> 
                </h5>
            </div>

            <div class="ml-5" style="width: 10rem; height: 20rem;">
                <img class="card-img-top" src="thegirl.jpg" alt="Card image cap">
                <h5 class="card-title">
                <p><a href="/detaill" class="text-dark">The girl who drank the moon</a>
                <small class="text-muted">Cerpen</small></p> 
               </h5>
            </div>
        </div>
        </div>     
        
    </div>
</div>  
</div>   
</div>
@endsection
 

       
  