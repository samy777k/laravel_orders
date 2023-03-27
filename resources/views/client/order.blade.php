
<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Meal</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets3/favicon.ico">
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css3/styles.css" rel="stylesheet">
</head>
<body>
{{-- @foreach ($errors->all() as $msg)


@endforeach --}}
    <!-- Responsive navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#!">Italiano</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link" href="#">Home</a></li>

                </ul>
            </div>
        </div>
    </nav>
    <!-- Page header with logo and tagline-->
    <header class="py-5 bg-light border-bottom mb-4">
        <div class="container">
            <div class="text-center my-5">
                <h1 class="fw-bolder">Your Meal</h1>
                <p class="lead mb-0">The smartest and best meal from Italiano</p>
            </div>
        </div>
    </header>
    <!-- Page content-->
    <div class="container">
        <div class="row">
            <!-- Blog entries-->
            <div class="col-lg-8">
                <!-- Featured blog post-->
                <div class="card mb-4">
                    @foreach ($meal as $item)

                    @endforeach
                    <a href="#!"><img class="card-img-top" height='350px' width='850' src="{{asset('upload/' . $item->image )}}" alt="..."></a>
                    <div class="card-body">
                        <div class="small text-muted">{{$item->category->name_of_Category}}</div>
                        <h2 class="card-title">{{$item->name}}</h2>
                        <p class="card-text">The Price For One Meal is {{$item->price}}</p>
                    </div>
                </div>
                <!-- Nested row for non-featured blog posts-->

            </div>
            <!-- Side widgets-->
            <div class="col-lg-4">
                <!-- Search widget-->
                <div class="card mb-4">
                    <div class="card-header">Information</div>
                    <div class="card-body">

                        <form action="{{URL("clientOrder")}}" method="POST">
                            @csrf
                            <input type="hidden" name="id" value="{{$id}}">
                        <label>Name</label>
                            <input name="name" class="form-control" type="text" placeholder="your name" aria-label="your name" >
                            {{-- <button class="btn btn-primary" id="button-search" type="button">Go!</button> --}}
                            @foreach ($errors->get('name') as $msg)
                            <p style="color: red;">{{$msg}}</p>
                                @endforeach

                            <label>Phone</label>
                            <input name="phone" class="form-control" type="text" placeholder="your phone" aria-label="your phone" >

                            @foreach ($errors->get('phone') as $msg)
                            <p style="color: red;">{{$msg}}</p>
                                @endforeach

                            <label>Location</label>
                            <input name="location" class="form-control" type="text" placeholder="your location" aria-label="your location" >

                            @foreach ($errors->get('location') as $msg)
                            <p style="color: red;">{{$msg}}</p>
                                @endforeach

                            <label>Quantity</label>
                            <input name="quentity" class="form-control" type="number" min="1" >

                            @foreach ($errors->get('quentity') as $msg)
                            <p style="color: red;">{{$msg}}</p>
                                @endforeach

                            <br>
                            <div>
                            <button class="btn btn-primary">Request</button>
                        </div>
</form>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Footer-->
    <footer class="py-5 bg-dark">
        <div class="container"><p class="m-0 text-center text-white">Copyright © Your Website 2022</p></div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js3/scripts.js"></script>


</body></html>
