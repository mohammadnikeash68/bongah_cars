<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="/assets/css/bootstrap.rtl.min.css" />
  <link rel="stylesheet" href="/assets/fonts/fontawesome-free-6.2.1-web/css/all.css" />
  <link rel="stylesheet" href="/assets/css/style.css" />

  <title>پنل مدیریت</title>
</head>

<body>
  <nav class="navbar navbar-expand-md text-light m-4 my-1">
    <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#sidebarnav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="sidebarnav">
      <div class="row">
        @include('layouts.sidebar')
        @include('layouts.header')

        
      </div>
    </div>
  </nav>
  @include('layouts.modal')
  <!-- content -->
  <div class="content">
    @yield('content')
  </div>
  <!-- end content -->
 @include('layouts.footer')
 <script src="assets/js/bootstrap.bundle.min.js"></script>
 <script src="assets/js/jquery.min.js"></script>
 

</body>

</html>