@extends('template')
@section('contentWebsite')
<br>

  <!-- <div class="list-group-item mt-5">
    <p class="mb-0">
    <i class="fa fa-tasks fa-2x mr-4 grey p-3 white-text rounded-circle" aria-hidden="true"></i>Cerpen</p>
  </div>
  <div class="list-group-item">
    <p class="mb-0"> <i class="fa fa-tasks fa-2x mr-4 mr-4 grey p-3 white-text rounded-circle" aria-hidden="true"></i>Puisi</p>
  </div>
  <div class="list-group-item">
    <p class="mb-0"><i class="fa fa-tasks fa-2x mr-4 mr-4 grey p-3 white-text rounded-circle" aria-hidden="true"></i>Fiksi</p>
  </div>
  <div class="list-group-item">
    <p class="mb-0"><i class="fa fa-tasks fa-2x mr-4 mr-4 grey p-3 white-text rounded-circle" aria-hidden="true"></i>Sejarah</p>
  </div>
  <div class="list-group-item">
    <p class="mb-0"><i class="fa fa-tasks fa-2x mr-4 mr-4 grey p-3 white-text rounded-circle" aria-hidden="true"></i>Horor</p>
  </div>
  <div class="list-group-item">
    <p class="mb-0"><i class="fa fa-tasks fa-2x mr-4 mr-4 grey p-3 white-text rounded-circle" aria-hidden="true"></i>Humor</p>
  </div>
  <div class="list-group-item">
    <p class="mb-0"><i class="fa fa-tasks fa-2x mr-4 mr-4 grey p-3 white-text rounded-circle" aria-hidden="true"></i>Laga</p>
  </div>
 </div> -->

<div class="mt-5 p-5 bg-white">

<ul class="ml-auto mr-5">
<div class="row ml-2 p-5">
  <p class="mb-0">
  <i class="fa fa-tasks fa-3x mr-3 ml-2 grey white-text rounded-circle" aria-hidden="true"></i>
  <h1>Sejarah</h1></p>
  <p class="mb-0 ml-4">
  <i class="fa fa-tasks fa-3x mr-3 ml-5 grey white-text rounded-circle" aria-hidden="true"></i>
  <h1>Cerpen</h1></p>
  <p class="mb-0 ml-4">
  <i class="fa fa-tasks fa-3x mr-3 ml-5 grey white-text rounded-circle" aria-hidden="true"></i>
  <h1>Horor</h1></p>
</div>
<div class="row ml-2 p-5">
  <p class="mb-0">
  <i class="fa fa-tasks fa-3x mr-3 ml-2 grey white-text rounded-circle" aria-hidden="true"></i>
  <h1>Romance</h1></p>
  <p class="mb-0 ml-4">
  <i class="fa fa-tasks fa-3x mr-3 ml-5 grey white-text rounded-circle" aria-hidden="true"></i>
  <h1>Fiksi</h1></p>
  <p class="mb-0 ml-4">
  <i class="fa fa-tasks fa-3x mr-3 ml-5 grey white-text rounded-circle" aria-hidden="true"></i>
  <h1>Remaja</h1></p>
</div>
<div class="row ml-2 p-5">
  <p class="mb-0">
  <i class="fa fa-tasks fa-3x mr-3 ml-2 grey white-text rounded-circle" aria-hidden="true"></i>
  <h1>Humor</h1></p>
  <p class="mb-0 ml-4">
  <i class="fa fa-tasks fa-3x mr-3 ml-5 grey white-text rounded-circle" aria-hidden="true"></i>
  <h1>Misteri</h1></p>
  <p class="mb-0 ml-4">
  <i class="fa fa-tasks fa-3x mr-3 ml-5 grey white-text rounded-circle" aria-hidden="true"></i>
  <h1>Fantasi</h1></p>
</div>
</ul>
</div>

<div class="row mt-5">
    <div class=p-5></div>
        <style>
            .card:hover {
            box-shadow: 0px 2px 20px rgba(0,0,0,0.2);
            }
        </style>
            <div class="" style="width: 10rem; height: 20rem;">
                <img class="card-img-top" src="dilan.jpg" alt="Card image cap">
                <h5 class="card-title">
                <p><a href="/detail" class="text-dark">Dilan</a>
                <small class="text-muted">Romance</small></p>
                </h5>
            </div>
        
            <div class=" ml-5" style="width: 10rem; height: 20rem;">
                <img class="card-img-top" src="tentangnovel.jpg" alt="Card image cap">
                <h5 class="card-title">
                <p><a href="/detail" class="text-dark">Tentang Kamu</a>
                <small class="text-muted">Romance</small></p> 
                </h5>
            </div>
        
            <div class="ml-5" style="width: 10rem; height: 20rem;">
                <img class="card-img-top" src="si-panda-amerika.jpg" alt="Card image cap">
                <h5 class="card-title">
                <p><a href="/detail" class="text-dark">Si Panda Amerika(Amerika Panda)</a>
                <small class="text-muted">Humor</small></p> 
                </h5>
            </div>

            <div class="ml-5" style="width: 10rem; height: 20rem;">
                <img class="card-img-top" src="cahayanovel.jpg" alt="Card image cap">
                <h5 class="card-title">
                <p><a href="/detail" class="text-dark">Cahaya Surga Dimatanya</a>
                <small class="text-muted">Islamic</small></p> 
                </h5>
            </div>

            <div class="ml-5" style="width: 10rem; height: 20rem;">
                <img class="card-img-top" src="pangeran-cilik.jpg" alt="Card image cap">
                <h5 class="card-title">
                <p><a href="/detail" class="text-dark">Le Petit Prince </a>
                <small class="text-muted">Fiksi</small></p> 
               </h5>
            </div>
    </div>
</div>  

<div class="row mt-4">
        <div class=p-5></div>
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




@endsection