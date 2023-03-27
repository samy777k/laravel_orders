<!DOCTYPE html>

<html lang="en">
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Italiano</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets2/favicon.ico">
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet">
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css2/styles.css" rel="stylesheet">
        <style>
            .flex{

                display: flex;

            }
        </style>
    </head>
    <body>





        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container px-4 px-lg-5">
                <h2>Italiano</h2>

                <form action="{{URL('sortIndex')}}">
                    <div class="flex">
                    <select class="form-select" aria-label="Default select example" name="categorySort">
                        <option value="0"></option>
                        @foreach ($sort as $sortC)
                            <option value="{{$sortC->id}}">{{$sortC->name_of_Category}}</option>
                        @endforeach
                    </select>
                    <button type="submit" class="btn btn-success">Sort</button>
                </form>
            </div>
            </div>
        </nav>
        <!-- Header-->
        <header class="bg-dark py-5" >
            <div class="container px-4 px-lg-5 my-5">
                <div class="text-center text-white">
                    <h1 class="display-4 fw-bolder">eat from Italiano</h1>
                </div>
            </div>
        </header>
        <!-- Section-->
        <section class="py-5">
            <div class="container px-4 px-lg-5 mt-5">
                @if (isset($success))
            <div class="alert alert-success"><h5>{{$success}}</h5></div>

        @endif
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">

                    @foreach ($meal as $item)
                    <div class="col mb-5">
                        <div class="card h-100">
                            {{-- @dump("upload/". $item->image); --}}
                            <!-- Product image-->
                            <img class="card-img-top" height='200px' max-height='200px' src="{{asset('upload/' . $item->image )}}" alt="...">
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">{{$item->name}}</h5>
                                     {{$item->category->name_of_Category}}

                                    <!-- Product price-->
                                    <h6 style="color: green;">{{$item->price}} ILS</h6>
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center">
                                    <form action="{{URL("createOrder")}}" method="get" >
                                        @csrf
                                    <button class="btn btn-outline-dark mt-auto">Request</button>
                                    <input type="hidden" name="id" value="{{$item->id}}">
                                    </form>
                                </div>
                            </div>

                        </div>

                    </div>
                    @endforeach


                </div>
            </div>
        </section>
        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">resturant © Italiano Website 2022</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js2/scripts.js"></script>


</body></html>
