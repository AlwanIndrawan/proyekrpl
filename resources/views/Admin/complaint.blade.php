<!DOCTYPE html>
<html>
<head>
    @include('admin.css')
</head>
<body>
    @include('admin.header')
    <!-- Sidebar Navigation-->
    @include('admin.sidebar')
    <div class="page-content">

<main id="main" class="main">
    <section class="section d-flex justify-content-center">
        <div class="row">
        <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
            <h5 class="card-title text-center">Daftar Pengaduan</h5>
            <!-- Table with hoverable rows -->
        <table class="table table-hover">
            <thead>
            <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Email</th>
                    <th scope="col">Subjek</th>
                    <th scope="col">Pesan</th>
            </tr>
                </thead>
                <tbody>
            <tr>
                    <th scope="row">1</th>
                    <td>Brandon Jacob</td>
                    <td>Designer</td>
                    <td>28</td>
                    <td>2016-05-25 00:00</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Bridie Kessler</td>
                    <td>Developer</td>
                    <td>35</td>
                    <td>2014-12-05  00:00</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Bridie Kessler</td>
                    <td>Developer</td>
                    <td>35</td>
                    <td>2014-12-05  00:00</td>
                </tr>
                <tr>
                    <th scope="row">4</th>
                    <td>Bridie Kessler</td>
                    <td>Developer</td>
                    <td>35</td>
                    <td>2014-12-05  00:00</td>
                </tr>
                <tr>
                    <th scope="row">5</th>
                    <td>Bridie Kessler</td>
                    <td>Developer</td>
                    <td>35</td>
                    <td>2014-12-05  00:00</td>
                </tr>
                <tr>
                    <th scope="row">6</th>
                    <td>Bridie Kessler</td>
                    <td>Developer</td>
                    <td>35</td>
                    <td>2014-12-05  00:00</td>
                </tr>
                </tbody>
            </table>
            <!-- End Table with hoverable rows -->
        </div>
    </div>
    </section>
</main>
        @include('admin.footer')
</body>
</html>