<!DOCTYPE html>
<html>
  <head> 
      @include('admin.css')

</head>
<body>

    @include('admin.header')
    <div class="d-flex align-items-stretch">
    <!-- Sidebar Navigation-->
    @include('admin.sidebar')
    <div class="page-content">
  
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
            <h5 class="card-title text-center" style="font-size: 25px;">Tambah Berita</h5>

            <!-- Vertical Form -->
            <form class="row g-3" action="{{route('admin-blog.store')}}" method="POST" enctype="multipart/form-data">
              @csrf
                <div class="col-12">
                  <label for="title" class="form-label">Judul</label>
                  <input type="text" class="form-control" id="judul" name="judul" value="{{old('judul')}}">
                </div>
                <div class="col-12">
                  <label for="description" class="form-label">Deskripsi</label>
                  <textarea class="form-control" id="deskripsi" name="deskripsi" value="{{old('deskripsi')}}"></textarea>
                </div>
                <div class="col-12">
                  <label class="form-label" for="image">Gambar</label>
                  <div class="input-group">
                    <input type="file" class="form-control" id="gambar" name="gambar">
                  </div>
                </div>
                  <button type="submit" class="btn btn-primary">Submit</button>
              </form><!-- Vertical Form -->
            </div>
          </div>
        </div>
    </section>

</main>
        @include('admin.footer')
</body>
</html>