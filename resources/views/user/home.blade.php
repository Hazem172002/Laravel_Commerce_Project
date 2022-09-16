

<!DOCTYPE html>
<html lang="en">

<head>
   @include('user.css')
</head>

<body>
    <!-- Topbar Start -->

    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid mb-5">
        <div class="row border-top px-xl-5">



           @include('user.sidebar')



@include('user.navbar')
<div class="container" align="center" style="padding-top: 100px;">
    @if(session()->has('message'))

    <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert">x</button>
        {{session()->get('message')}}
    </div>

    @endif

        </div>
    </div>
    <!-- Navbar End -->


    <!-- Featured Start -->
@include('user.featured')
    <!-- Featured End -->


    <!-- Categories Start -->

    <!-- Categories End -->


    <!-- Offer Start -->

    <!-- Offer End -->


    <!-- Products Start -->
   @include('user.product')
    <!-- Products End -->


    <!-- Subscribe Start -->

    <!-- Subscribe End -->


    <!-- Products Start -->

    <!-- Products End -->


    <!-- Vendor Start -->
 @include('user.footer')


    <!-- JavaScript Libraries -->
  @include('user.script')
</body>

</html>
