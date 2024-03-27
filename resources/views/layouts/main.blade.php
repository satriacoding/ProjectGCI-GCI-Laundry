<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link rel="shortcut icon" href="/images/favicon.png" type="image/x-icon" />
    
     <!-- Font -->
    <link rel="dns-prefetch" href="//fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <!-- Themify Icons -->
    <link rel="stylesheet" href="/css/themify-icons.css">
    <!-- Owl carousel -->
    <link rel="stylesheet" href="/css/owl.carousel.min.css">
    <!-- Main css -->
    <link href="/css/style.css" rel="stylesheet">
</head>
<body data-spy="scroll" data-target="#navbar" data-offset="30">
  <!-- Nav start -->
  @include('layouts.navbar')
  <!-- Nav end -->
  
  {{-- konten --}}
  @yield('content')
  <!-- // end Konten -->

  {{-- Footer --}}
 @include('layouts.footer')
 {{-- end Footer --}}
  <!-- jQuery and Bootstrap -->
  <script src="js/jquery-3.2.1.min.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>
  <!-- Plugins JS -->
  <script src="js/owl.carousel.min.js"></script>
  <!-- Custom JS -->
  <script src="js/script.js"></script>
  <script src="js/counter.js"></script>

</body>

</html>