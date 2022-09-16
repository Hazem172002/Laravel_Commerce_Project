<!DOCTYPE html>
<html lang="en">

<head>
    @include('user.css')
</head>

<body>
    <!-- Topbar Start -->

    <!-- Topbar End -->


    <!-- Navbar Start -->
@include('user.navbar')
    <!-- Navbar End -->


    <!-- Page Header Start -->
    <div class="container-fluid bg-secondary mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
            <h1 class="font-weight-semi-bold text-uppercase mb-3">Checkout</h1>
            <div class="d-inline-flex">
                <p class="m-0"><a href="">Home</a></p>
                <p class="m-0 px-2">-</p>
                <p class="m-0">Checkout</p>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Checkout Start -->
    <div class="container-fluid pt-5">
        <div class="row px-xl-5">
            <div class="col-lg-8">
                <div class="mb-4">
                    @if(session()->has('message'))

                    <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert">x</button>
                        {{session()->get('message')}}
                    </div>

                    @endif
                    <h4 class="font-weight-semi-bold mb-4">Billing Address</h4>
                    <form method="post" action="{{url('order_done')}}">
                        @csrf
                    <div class="row">


                        <div class="col-md-6 form-group">
                            <label>First Name</label>
                            <input class="form-control" name="first_name" type="text" placeholder="John" required>
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Last Name</label>
                            <input class="form-control" name="last_name" type="text" placeholder="Doe" required>
                        </div>
                        <div class="col-md-6 form-group">
                            <label>E-mail</label>
                            <input class="form-control" name="email" type="text" placeholder="example@email.com" required>
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Mobile No</label>
                            <input class="form-control" name="phone" type="text" placeholder="+123 456 789" required>
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Address Line</label>
                            <input class="form-control" name="address" type="text" placeholder="123 Street" required>
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Country</label>
                            <input class="form-control"  name="country" type="text" placeholder="123 Street" required>
                        </div>

                        <div class="col-md-6 form-group">
                            <label>City</label>
                            <input class="form-control" name="city" type="text" placeholder="New York" required>
                        </div>
                        <div class="col-md-6 form-group">
                            <label>State</label>
                            <input class="form-control" name="state" type="text" placeholder="New York" required>
                        </div>
                        <div class="col-md-6 form-group">
                            <label>ZIP Code</label>
                            <input class="form-control" name="zip" type="text" placeholder="123">
                        </div>



                        <div style="padding: 15px">

                            <input type="submit" class="btn btn-block btn-primary my-3 py-3">

                        </div>

                    </div>
                </form>
                </div>

            </div>
            <div class="col-lg-4">
                <div class="card border-secondary mb-5">
                    <div class="card-header bg-secondary border-0">
                        <h4 class="font-weight-semi-bold m-0">Order Total</h4>
                    </div>
                    <div class="card-body">
                        <h5 class="font-weight-medium mb-3">Products</h5>
                        @foreach($userCartItems as $items)
                        <div class="d-flex justify-content-between">
                            <p>{{$items['product']['name']}}</p>
                            <p>${{$items['product']['price']}}</p>
                        </div>
                        @endforeach






                    </div>

                </div>

            </div>
        </div>
    </div>
    <!-- Checkout End -->


    <!-- Footer Start -->
@include('user.footer')
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    @include('user.script')
</body>

</html>
