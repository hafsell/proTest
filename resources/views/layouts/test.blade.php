<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href ="{{asset('css/app.css')}}" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
    rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" 
    integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
    rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" 
    integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    {{-- <a href="https://www.flaticon.com/fr/icones-gratuites/profil" title="profil icônes">Profil icônes créées par bqlqn - Flaticon</a> --}}
</head>

<body class="d-flex flex-column min-vh-100" style="position:reltive">

  
  <nav>
    <div class="nav nav-tabs" id="nav-tab" role="tablist">
      <button class="nav-link active"  id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true"> <img src="/images/utilisateur.png" width="30">  @yield('name') </button>
      <button class="nav-link @yield('profileActive')" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">
         <a href="{{Route('students.profile')}}">  Profile </a></button>
      <button class="nav-link @yield('noteActive')" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">
         <a href="{{Route('students.notes')}}">  notes </a></button>
      <button class="nav-link" id="nav-disabled-tab" data-bs-toggle="tab" data-bs-target="#nav-disabled" type="button" role="tab" aria-controls="nav-disabled" aria-selected="false" disabled>nothing</button>
    </div>
  </nav>
  <div class="tab-content" id="nav-tabContent">
    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0"></div>
    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0"></div>
    <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab" tabindex="0"></div>
    <div class="tab-pane fade" id="nav-disabled" role="tabpanel" aria-labelledby="nav-disabled-tab" tabindex="0"></div>
  </div>
  <div class="container">
    <div class="row justify-content-center">
    @yield('content')
    
    </div>
  </div>

<footer  style="position:sticky;bottom:0;left:0;width:100%;text-align:center;">
  <!-- Grid container -->
  <div class="container p-4 pb-0">
    <form action="">
      <!--Grid row-->
      <div class="row">
        <!--Grid column-->
        {{-- <div class="col-auto mb-4 mb-md-0">
          <p class="pt-2">
            <strong>Sign up for our newsletter</strong>
          </p>
        </div> --}}
        <!--Grid column-->

        <!--Grid column-->
        {{-- <div class="col-md-5 col-12 mb-4 mb-md-0">
          <!-- Email input -->
          <div class="form-outline mb-4">
            <input type="email" id="form5Example25" class="form-control" />
            <label class="form-label" for="form5Example25">Email address</label>
          </div>
        </div> --}}
        <!--Grid column-->

        <!--Grid column-->
        {{-- <div class="col-auto mb-4 mb-md-0">
          <!-- Submit button -->
          <button type="submit" class="btn btn-primary mb-4">
            Subscribe
          </button>
        </div> --}}
        <!--Grid column-->
      {{-- </div> --}}
      <!--Grid row-->
    {{-- </form>
  </div> --}}
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2020 Copyright:
    <a class="text-dark" href="https://mdbootstrap.com/">MDBootstrap.com</a>
  </div>
  <!-- Copyright -->
</footer>

</body>
</html>