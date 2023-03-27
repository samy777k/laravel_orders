@extends('layoute')
@section('content')

@if (isset($statusUpdateMeal) && $statusUpdateMeal==1)
    <div class="alert alert-success"><h5>updated successfully</h5></div>
@endif


<table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">id</th>
        <th scope="col">image</th>
        <th scope="col">name</th>
        <th scope="col">category</th>
        <th scope="col">price</th>
        <th scope="col">delete</th>
        <th scope="col">edite</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($allMeal as $item)
            <tr>
                    <th scope="row">{{$item->id}}</th>
                    <td><img class="card-img-top" height='60px' max-height='60px' src="{{asset('upload/' . $item->image )}}" alt="..."></td>
                    <td>{{$item->name}}</td>
                    <td>{{$item->category->name_of_Category}}</td>
                    <td>{{$item->price}}</td>
                    <td>
                        <form action="{{URL('deleteMeal')}}" method="POST">
                            @csrf
                            <input type="hidden" name="id" value="{{$item->id}}">
                        <button class="btn btn-danger">delete</button>
                          </form>
                    </td>
                    <td>
                        <form action="{{URL('editeMeal')}}" method="POST">
                            @csrf
                            <input type="hidden" name="ide" value="{{$item->id}}">

                        <button type="submit" class="btn btn-warning">edite</button></td>
                         </form>
                </tr>
        @endforeach


    </tbody>
  </table>

  <span>{{ $allMeal->links() }}</span>


@stop
<style>
    .w-5{
        display: none
    }
</style>
