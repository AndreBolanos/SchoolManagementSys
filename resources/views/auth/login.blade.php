<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link href="css/signin.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/css/bootstrap4-toggle.min.css"
    rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://kit.fontawesome.com/48be5f5ef0.js" crossorigin="anonymous"></script>
  <title>School Management System</title>
  <style>
    .bs-example {
      margin: 20px;
      position: relative;
    }
  </style>
  <script>
    function myFunction(typeUser) {
    var x = document.getElementById("myCheck").checked;
    if (x == true) {
      var user = typeUser.getAttribute("data-on");
      $("#toastP").html("Ingreso para tipo de Usuario: <b>"+user+"</b>");
      $('.toast').toast('show');
    }
    if (x == false) {
      var user = typeUser.getAttribute("data-off");
      $("#toastP").html("Ingreso para tipo de Usuario: <b>"+user+"</b>");
      $('.toast').toast('show');
    }
    

  }

  $( document ).ready(function() {

    //window.scrollTo(0,32);
    document.getElementById("Upreference").value = 'Estilo A';

    $(".dropdown-menu a").click(function(){
    var sel = $(this).text();
    //do whatever you want here
    if (sel == 'Estilo A') {
      document.body.style.backgroundColor="#0072C6";
      document.getElementById("Upreference").value = sel;
    }
    if (sel == 'Estilo B') {
      document.body.style.backgroundColor="#772953";
      document.getElementById("Upreference").value = sel;
      
    }
    if (sel == 'Estilo C') {
      document.body.style.backgroundColor="#E95420";
      document.getElementById("Upreference").value = sel;
    }

    if (sel == 'Estilo D') {
      document.body.style.backgroundColor="#34495E";
      document.getElementById("Upreference").value = sel;
    }

    if (sel == 'Estilo E') {
      document.body.style.backgroundColor="#008080";
      document.getElementById("Upreference").value = sel;
    }

    if (sel == 'Estilo F') {
      document.body.style.backgroundColor="#7B241C";
      document.getElementById("Upreference").value = sel;
    }

    
})
    
});

  

  
  </script>
</head>

<body>
  <div class="dropdown" hidden>
    <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" id="dropdownMenuButton"
      data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <i class="fas fa-cog fa-1x" style="font-size: 18px;"></i>
    </button>
    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
      <a class="dropdown-item" href="#">Estilo A</a>
      <a class="dropdown-item" href="#">Estilo B</a>
      <a class="dropdown-item" href="#">Estilo C</a>
      <a class="dropdown-item" href="#">Estilo D</a>
      <a class="dropdown-item" href="#">Estilo E</a>
      <a class="dropdown-item" href="#">Estilo F</a>
    </div>
  </div>
  <div class="main-container">
    <!-- Client/Employee Toast -->
    <div aria-live="polite" aria-atomic="true"
      style="position:fixed;z-index:9999; top:15px;right:15px; min-height: 200px;">
      <div class="toast" data-delay="4000">
        <div class="toast-header">
          <strong class="mr-auto">School Management System</strong>
          <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="toast-body">
          <p id="toastP"></p>
        </div>
      </div>
    </div>
    <div class="jumbotron form-signin">
      <h1 class="row justify-content-center" style="font-weight:400;text-shadow: 2px 2px rgb(73, 8, 8)">Bienvenido a School Management System V.1</h1>
      <p class="lead">El Sistema le permitira realizar consultas del centro educativo <span style="font-weight:700;text-shadow: 2px 2px rgb(73, 8, 8)">Brooklyn School de Guatemala</span> y solicitar
        gestiones o tramites escolares.</p>
      <hr class="my-4" id="hrForm">
      <div class="row" id="formRow">
        <div class="col-12 col-sm-4 col-md-6 text-center my-auto" id="logoS">
          <img id="logoSchool" src="img/ColegioBrooklyn.jpg" class="img-fluid" alt="Responsive image">
        </div>
        <div class="col-12 col-sm-8 col-md-6">
          <form id="userForm" method="POST" action="{{ route('login') }}">
            @csrf
            <div class="form-group row">
              <div class="col-2 text-right"></div>
              <div class="col-10">
                <div class="form-check float-right">
                  <label class="form-check-label" for="gridCheck1" id="tipoUsuario">
                    Tipo de Usuario
                  </label>
                  <input class="form-check-input" type="checkbox" data-toggle="toggle" data-size="xs"
                    data-onstyle="warning" data-offstyle="secondary" checked data-on="Cliente" data-off="Empleado"
                    id="myCheck" onchange="myFunction(this)">
                </div>
              </div>
            </div>
            <div class="form-group row">
              <label for="email" class="col-3 col-form-label text-right form-control-sm">Usuario</label>
              <div class="col-9">
                <input id="email" type="email" class="form-control form-control-sm @error('email') is-invalid @enderror"
                  name="email" value="{{ old('email') }}" required autocomplete="email" autofocus
                  placeholder="Ingrese correo electronico">
                @error('email')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
            </div>
            <div class="form-group row">
              <label for="password" class="col-3 col-form-label text-right form-control-sm">Contraseña</label>
              <div class="col-9">
                <input id="password" type="password"
                  class="form-control form-control-sm @error('password') is-invalid @enderror" name="password" required
                  autocomplete="current-password" placeholder="Ingrese contraseña">

                @error('password')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror

              </div>
            </div>

            <div class="form-group row">
              <div class="col-3 text-right"></div>
              <div class="col-9">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" data-toggle="toggle" data-size="xs"
                    data-onstyle="warning" data-offstyle="secondary" name="remember" id="remember"
                    {{ old('remember') ? 'checked' : '' }}>
                  <label class="form-check-label" for="gridCheck1" id="labelRemember">
                    Remember me
                  </label>
                  <input type="hidden" id="Upreference" name="Upreference">
                </div>
              </div>
            </div>
            <div class="form-group row">
              <div class="col-3"></div>
              <div class="col-9 text-right">
                <button type="submit" class="btn btn-dark btn-block">Ingresar</button>
                @if (Route::has('password.request'))
                <a class="btn btn-link" href="{{ route('password.request') }}">
                  {{ __('Olvido su contraseña?') }}
                </a>
                @endif
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>

    <footer>
      <!-- Copyright -->
      <div class="footer-copyright text-center py-2" style="color: azure;font-size: 12px;">© 2020 Copyright, developed
        by
        Ing. André Bolaños</div>
      <!-- Copyright -->
    </footer>
  </div>


  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/js/bootstrap4-toggle.min.js"></script>
</body>

</html>