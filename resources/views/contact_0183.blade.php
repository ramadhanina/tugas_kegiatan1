<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>Contact Us</title>
  </head>
  <nav class="navbar navbar-expand-lg navbar-dark shadow-sm" style="background-color: rgb(19, 100, 0)">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">TUGAS KEGIATAN 1</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{url('/home')}}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="{{url('/artikel')}}">Artikel</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="{{url('/contact')}}">Contact</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
  <body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card w-50" style="width: 18rem;">
                    <img src="{{asset('storage/img/user.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h3 style="text-align:left; padding-left:20px"> Nina Aulia Ramadhani</h3>
                        <h3 style="text-align:left; padding-left:20px"> Nomor HP : 081334560871</h3>
                        <h3 style="text-align:left; padding-left:20px"> Email : ninshanni@gmail.com</h3>
                        <h3 style="text-align:left; padding-left:20px"> Instagram Account : <a class="d-inline" href="https://www.instagram.com/ramadhaninaaa/">Instagram</a></h3>
                        <h3 style="text-align:left; padding-left:20px"> LinkedIn Account : <a href="https://www.linkedin.com/in/nina-aulia-651a46105/">linkedin</a></h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </body>
</html>