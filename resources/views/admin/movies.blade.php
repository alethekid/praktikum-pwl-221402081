@extends('admin.layout')

@section('content')

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Some movies recommendation for youu! <br>
                    </h1> 
                    </div>

                    <div class="card-deck">
  <div class="card">
    <img src="{{asset ('img/friendzone.jpg')}}" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title" style="text-align: center;">FRIEND ZONE</h5>
    </div>
  </div>
  <div class="card">
    <img src="{{asset ('img/unlocked.jpg')}}" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title" style="text-align: center;">UNLOCKED</h5>
    </div>
  </div>
  <div class="card">
    <img src="{{asset ('img/igmflty.jpg')}}" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title" style="text-align: center;">I GIVE MY FIRST LOVE TO YOU</h5>
    </div>
  </div>
</div>

                </div>
                <!-- /.container-fluid -->
@endsection