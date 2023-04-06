@extends('admin.layout')

@section('content')

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Songs to hear by meeee ;x <br> </h1> 
                    </div>

                    <div class="card-deck">
  <div class="card">
    <img src="{{asset ('img/hardtolove.jpg')}}" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title" style="text-align: center;">Hard To Love</h5>
      <p class="card-text" style="text-align: center;">BLACKPINK</p>
    </div>
  </div>
  <div class="card">
    <img src="{{asset ('img/CIFCIK.jpg')}}" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title" style="text-align: center;">Call It Fate, Call It Karma</h5>
      <p class="card-text" style="text-align: center;">The Strokes</p>
    </div>

  </div>
  <div class="card">
    <img src="{{asset ('img/friendsca.jpg')}}" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title" style="text-align: center;">Friends</h5>
      <p class="card-text" style="text-align: center;">Chase Atlantic</p>
    </div>
    </div>

    <div class="card-deck">
    <div class="card">
    <img src="{{asset ('img/sunshine.jpg')}}" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title" style="text-align: center;">Sunshine</h5>
      <p class="card-text" style="text-align: center;">The Panturas</p>
    </div>
    </div>

    <div class="card">
    <img src="{{asset ('img/iyktil.jpg')}}" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title" style="text-align: center;">If You Know That I'm Lonely</h5>
      <p class="card-text" style="text-align: center;">FUR</p>
    </div>
    </div>

    <div class="card">
    <img src="{{asset ('img/2521.jpg')}}" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title" style="text-align: center;">Twenty Five, Twenty One</h5>
      <p class="card-text" style="text-align: center;">Jaurim</p>
    </div>
    </div>
  </div>
</div>

                </div>
                <!-- /.container-fluid -->
@endsection