
<!DOCTYPE html>
<html lang="en">

<head>
  @include('admin.css');
</head>

<body class=" ">
  <div class="wrapper ">
  @include('admin.sidebar')
    <div class="main-panel">
      <!-- Navbar -->


      @include('admin.navbar')
      <!-- End Navbar -->
    @include('admin.body')

      </div>
    </div>

    <!--   Core JS Files   -->
    @include('admin.script')
</body>

</html>
