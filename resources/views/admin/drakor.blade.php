@extends('admin.layout')

@section('content')

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">IT'S DRAKOR HOURRR!
                    </h1> 
                    </div>

                    <div class="card-deck">
  <div class="card">
    <img src="{{asset ('img/theglory.jpg')}}" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title" style="text-align: center;">THE GLORY</h5>
    </div>
  </div>
  <div class="card">
    <img src="{{asset ('img/hometown.jpg')}}" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title" style="text-align: center;">HOMETOWN CHA-CHA-CHA</h5>
    </div>

  </div>
  <div class="card">
    <img src="{{asset ('img/pfj.jpg')}}" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title" style="text-align: center;">PARTNERS FOR JUSTICE</h5>
    </div>
    </div>

    <div class="card-deck">
    <div class="card">
    <img src="{{asset ('img/missing.jpg')}}" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title" style="text-align: center;">MISSING</h5>
    </div>
    </div>

    <div class="card">
    <img src="{{asset ('img/aos.jpg')}}" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title" style="text-align: center;">ALCHEMY OF SOULS</h5>
    </div>
    </div>

    <div class="card">
    <img src="{{asset ('img/innocentman.jpg')}}" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title" style="text-align: center;">THE INNOCENT MAN</h5>
    </div>
    </div>
  </div>
</div>

                </div>
                <!-- /.container-fluid -->
@endsection