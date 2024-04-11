<!DOCTYPE html>
<html >
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title> {{config('app.name')}} - @yield('title') </title>
        <link rel="icon" type="image/png" sizes="16x16" href="/favicon.ico">
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.0.2/dist/tailwind.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="{{ asset('assets/lib/bootstrap/app.css')}}">
        <link rel="stylesheet" href="{{asset('assets/lib/bootstrap/css/bootstrap.css')}}">
        <link href="assets/lib/bootstrap/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="{{{asset('assets/lib/bootstrap/css/bootstrap.min.css')}}}">
        <link rel="stylesheet" href="./assets/style/style.css">
        <!-- Styles -->
    </head>
    <body>
        @include('navbar/navbar')
        @yield('content')
        <div class="scroll-to-top">
            <a href="#top" class="btn btn-primary"><i class="fa fa-arrow-up"></i></a>
        </div>
    <footer class="bg-indigo-700 text-center text-white">
    <div class="container-fluid p-4">
    <section class="mb-4">
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fa fa-facebook"></i></a>
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fa fa-twitter"></i></a>
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fa fa-google"></i></a>
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fa fa-instagram"></i></a>
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fa fa-linkedin"></i></a>
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fa fa-github"></i></a>
    </section>
    <section class="mb-4">
        <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt distinctio earum
        repellat quaerat voluptatibus placeat namoptio pariatur est quia magnam
        eum harum corrupti dicta, aliquam sequi voluptate quas.
        </p>
      </section>
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      © 2020 Copyright:
      <a class="text-white" href="https://mdbootstrap.com/">Machcode.com</a>
    </div>

  </footer>
  @include('script')
</body>
</html>
