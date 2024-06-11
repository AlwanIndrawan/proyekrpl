<!DOCTYPE html>
<html>
<head> 
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    @include('admin.css')

    <style type="text/css">
      .blog-img{
        width: 120px;
        height: 100px;
      }
    </style>
</head>
<body>
    @include('admin.header')
    <!-- Sidebar Navigation-->
        @include('admin.sidebar')
    <!-- Sidebar Navigation end-->

    <div class="page-content">

<main id="main" class="main">

@if(session()->has('message'))
    <div class="alert alert-danger">
    {{session()->get('message')}}
    </div>
@endif

<section class="section">
  <div class="row">
    <div class="col-lg-12">

      <div class="card">
        <div class="card-body">
          <h5 class="card-title text-center" style="font-size: 25px;">Tabel Berita</h5>

          <div class="table-responsive">
          <table class="table table-bordered">
            <thead class="text-center">
              <tr>
                <th>No.</th>
                <th>Judul</th>
                <th>Deskripsi</th>
                <th>Gambar</th>
                <th>Edit</th>
                <th>Hapus</th>
              </tr>
            </thead>
            <tbody>
            @foreach($blogs as $blog)
              <tr>
                <td>{{ $loop->iteration }}.</td>
                <td>{{$blog->judul}}</td>
                <td>{{$blog->deskripsi}}</td>
                <td><img class="blog-img" src="blog/{{$blog->gambar}}" alt="berita rsud djafar harun"></td>
                <td><a href="admin-blog/{{$blog->id}}" class="btn btn-success">Edit</a></td>
                <td>
                  <form action="admin-blog/{{$blog->id}}" method="POST">
                    @method('delete')
                    @csrf
                    <button class="btn btn-danger">Hapus</button>
                  </form>
                </td>
                
                
              </tr>
              @endforeach
            </tbody>
          </table>
          </div>
          <!-- End Table with stripped rows -->

        </div>
      </div>

    </div>
  </div>
</section>

</main><!-- End #main -->
        @include('admin.footer')
</body>

<script type="text/javascript">
  function confirmation(ev)
  {
    ev.preventDefault();

    var urlToRedirect=ev.currentTarget.getAttribute('href');

    console.log(urlToRedirect);

    swal({
      title:"Apa anda yakin untuk menghapusnya?" , 

      text : "Tidak dapat mengembalikan Berita yang telah dihapus!",

      icon : "warning",

      buttons : true,

      dangerMode : true,

    })
    .then((willCancel)=>
    {
      if(willCancel)
      {
        window.location.href=urlToRedirect;
      }
    });
  }
  </script>

</html>