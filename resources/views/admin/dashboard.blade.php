@extends('layoute')
@section('content')

    <h1 class="mt-4">Dashboard</h1>

    <div class="row">
        <div class="col-xl-3 col-md-6">
            <div class="card text-white bg-info mb-4">
                <div class="card-body">Number Of Catehory</div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <h3>
                        {{$countC}}

                    </h3>
                    <a style="color: white;" href="{{URL("showCategory")}}"><i class="fas fa-angle-right"></i></a>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card text-white bg-dark mb-4">
                <div class="card-body">Naumber Of Meals</div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <h3>{{$countM}}</h3>
                    <a style="color: white;" href="{{URL("showMeal")}}"><i class="fas fa-angle-right"></i></a>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-success text-white mb-4">
                <div class="card-body">Number Of Orders</div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <h3> {{$countO}} </h3>
                    <a style="color: white;" href="{{URL("showOrder")}}"><i class="fas fa-angle-right"></i></a>
                </div>
            </div>
        </div>
    </div>




@stop

