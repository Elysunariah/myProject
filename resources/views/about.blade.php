@extends('template')
@section('contentWebsite')

  <div class="bg-blue mt-2">
  <div class="container py-5">
    <div class="row h-100 align-items-center py-5">
      <div class="col-lg-6">
        <h1 class="display-4">About my page</h1>
        <p class="lead text-muted mb-0">I made this assignment based on tutorials and guidance from trainers and friends</p>
        <p class="lead text-muted">Snippet by <a href="https://bootstrapious.com/snippets" class="text-muted"> 
                    <u>Bootstrapious</u></a>
        </p>
      </div>
      <div class="col-lg-6 d-none d-lg-block"><img src="https://res.cloudinary.com/mhmd/image/upload/v1556834136/illus_kftyh4.png" alt="" class="img-fluid"></div>
    </div>
  </div>
</div>

<div class="bg-white py-5">
  <div class="container py-5">
    <div class="row align-items-center mb-5">
      <div class="col-lg-6 order-2 order-lg-1"><i class="fa fa-bar-chart fa-2x mb-3 text-primary"></i>
        <h2 class="font-weight-light">Lorem ipsum dolor sit amet</h2>
        <p class="font-italic text-muted mb-4">in this task there are still many 
        shortcomings in its manufacture and appearance</p><a href="#" class="btn btn-light px-5 rounded-pill shadow-sm">Learn More</a>
      </div>
      <div class="col-lg-5 px-5 mx-auto order-1 order-lg-2"><img src="https://res.cloudinary.com/mhmd/image/upload/v1556834139/img-1_e25nvh.jpg" alt="" class="img-fluid mb-4 mb-lg-0"></div>
    </div>
    <div class="row align-items-center">
      <div class="col-lg-5 px-5 mx-auto"><img src="https://res.cloudinary.com/mhmd/image/upload/v1556834136/img-2_vdgqgn.jpg" alt="" class="img-fluid mb-4 mb-lg-0"></div>
      <div class="col-lg-6"><i class="fa fa-leaf fa-2x mb-3 text-primary"></i>
        <h2 class="font-weight-light">Lorem ipsum dolor sit amet</h2>
        <p class="font-italic text-muted mb-4">Lorem ipsum dolor sit amet, consectetur 
        adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p><a href="#" class="btn btn-light px-5 rounded-pill shadow-sm">Learn More</a>
      </div>
    </div>
  </div>
</div>


@endsection