<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>EShopper - Bootstrap Shop Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Topbar Start -->

    <!-- Topbar End -->
    <div class="container-fluid mb-5">
        <div class="row border-top px-xl-5">

    <!-- Navbar Start -->
@include('user.navbar')
    <!-- Navbar End -->


    <!-- Page Header Start -->
    <div class="container-fluid bg-secondary mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
            <h1 class="font-weight-semi-bold text-uppercase mb-3">Shopping Cart</h1>
            <div class="d-inline-flex">
                <p class="m-0"><a href="">Home</a></p>
                <p class="m-0 px-2">-</p>
                <p class="m-0">Shopping Cart</p>
            </div>
        </div>
    </div>
    <!-- Page Header End -->
    <div class="container" align="center" style="padding-top: 100px;">
        @if(session()->has('message'))

        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert">x</button>
            {{session()->get('message')}}
        </div>

        @endif

    <!-- Cart Start -->
    <div class="container-fluid pt-5">
        <div class="row px-xl-5">

            <div class="col-lg-8 table-responsive mb-5">

                <table class="table table-bordered text-center mb-0">
                    <thead class="bg-secondary text-dark">
                        <tr>
                            <th>Products</th>


                            <th>Price</th>
                            <th>Remove</th>
                        </tr>
                    </thead>
                    <tbody class="align-middle">


@foreach($userCartItems as $datas)
                        <tr>
                            <td class="align-middle"><img src="categoryimage/{{$datas['product']['image']}}" alt="" style="width: 50px;"> {{$datas['product']['name']}}</td>


                            <td class="align-middle">${{$datas['product']['price']}}</td>
                            <td style="font-size: 10px;"><a class="btn btn-danger" href="{{url('delete_cart',$datas['id'])}}">Delete</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="col-lg-4">

                <div class="card border-secondary mb-5">
                    <div class="card-header bg-secondary border-0">
                        <h4 class="font-weight-semi-bold m-0">Cart Summary</h4>
                    </div>
                    <div class="card-body">
@foreach($userCartItems as $items)
                        <div class="d-flex justify-content-between mb-3 pt-1">
                            <h6 class="font-weight-medium">{{$items['product']['name']}}</h6>
                            <h6 class="font-weight-medium">${{$items['product']['price']}}</h6>
                        </div>
                        @endforeach

                    </div>

                    <a href="{{url('checkout_view')}}" class="btn btn-block btn-primary my-3 py-3">Checkout</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Cart End -->

        </div>
    </div>
    <!-- Footer Start -->
@include('user.footer')
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
   @include('user.script')
</body>

</html>
