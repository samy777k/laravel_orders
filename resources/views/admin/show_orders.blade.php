@extends('layoute')
@section('content')
<table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Image</th>
        <th scope="col">Item</th>
        <th scope="col">Quentity</th>
        <th scope="col">client Name</th>
        <th scope="col">Phone</th>
        <th scope="col">Location</th>
        <th scope="col">Delete</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($order as $item)
            <tr>
                    <th scope="row">{{$item->id}}</th>
                    <td><img class="card-img-top" height='80px' max-height='80px' src="{{asset('upload/' . $item->item->image )}}" alt="..."></td>
                    <td>{{$item->item->name}}</td>
                    <td>{{$item->quentity}}</td>
                    <td>{{$item->name_of_client}}</td>
                    <td>{{$item->phone}}</td>
                    <td>{{$item->location}}</td>
                    <td>
                        <form action="{{URL('deleteOrder')}}" method="POST">
                            @csrf
                            <input type="hidden" name="id" value="{{$item->id}}">
                        <button class="btn btn-danger">delete</button>
                          </form>
                    </td>
                    <td>
                        {{-- <form action="{{URL('editeMeal')}}" method="POST">
                            @csrf
                            <input type="hidden" name="ide" value="{{$item->id}}">

                        <button type="submit" class="btn btn-warning">edite</button></td>
                         </form> --}}
                </tr>
        @endforeach


    </tbody>
  </table>

  <span>{{ $order->links() }}</span>


@stop
<style>
    .w-5{
        display: none
    }
</style>
