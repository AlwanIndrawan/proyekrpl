<!DOCTYPE html>
<html>
    <head> 

    <base href="/public">
    @include('admin.css')

    <style type="text/css">

    </style>

</head>
<body>
    @include('admin.header')
    <!-- Sidebar Navigation-->
        @include('admin.sidebar')
    <!-- Sidebar Navigation end-->
    <main id="main" class="main">

  @if(session()->has('message'))
    <div class="alert alert-success">
    {{session()->get('message')}}
    </div>
  @endif

<section class="section d-flex justify-content-center">

    <div class="col-lg-6 ">

      <div class="card">
        <div class="card-body">
          <h5 class="card-title text-center" style="font-size: 25px;">Edit Berita</h5>
          <!-- Vertical Form -->
          <form action="{{url('update_post',$post->id)}}" method="POST" enctype="multipart/form-data" class="row g-3">
            @csrf
            <div class="col-12">
              <label for="title" class="form-label">Judul</label>
              <input type="text" class="form-control" id="title" value="{{$post->title}}" name="title">
            </div>
            <div class="col-12">
              <label for="description" class="form-label">Deskripsi</label>
              <textarea class="form-control" id="description"  name="description">{{$post->description}}</textarea>
            </div>
            <div class="col-12">
              <label for="day" class="form-label">Hari</label>
              <input type="text" class="form-control" id="day" placeholder="Format: Senin" value="{{$post->day}}" name="day">
            </div>
            <div class="col-12">
              <label for="date" class="form-label">Tanggal</label>
              <input type="text" class="form-control" id="date" placeholder="Format : 1 Januari 2024" value="{{$post->date}}" name="date">
            </div>
            <div class="col-12 d-flex">
              <label class="my-auto" for="old_image">Gambar Lama</label>
              <img class="mx-5" height="150px" width="200px" src="/postimage/{{$post->image}}">
            </div>
            <div class="col-12">
              <label class="form-label" for="image">Ganti Gambar</label>
              <div class="input-group">
                <input type="file" class="form-control" id="image" name="image">
              </div>
            </div>
              <button type="submit" class="btn btn-primary">Submit</button>
          </form><!-- Vertical Form -->

        </div>
      </div>

    </div>

</section>

</main><!-- End #main -->
        @include('admin.footer')

  </body>
</html>
