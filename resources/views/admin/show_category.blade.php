@extends('layoute')
@section('content')

@if (isset($status)&&$status=="success")
    <div class="alert alert-success"><h5>updated successfully</h5></div>
@endif


<table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">id</th>
        <th scope="col">category</th>
        <th scope="col">delete</th>
        <th scope="col">edite</th>

      </tr>
    </thead>
    <tbody>
        @foreach ($category as $item)
            <tr>
                    <th scope="row">{{$item->id}}</th>
                    <td>{{$item->name_of_Category}}</td>
                    <td>
                        <form action="{{URL('deleteCtegory')}}" method="POST">
                            @csrf
                            <input type="hidden" name="id" value="{{$item->id}}">
                        <button class="btn btn-danger">delete</button>
                          </form>
                    </td>
                    <td>
                        <form action="{{URL('editeCategory')}}" method="POST">
                            @csrf
                            <input type="hidden" name="ide" value="{{$item->id}}">

                        <button type="submit" class="btn btn-warning">edite</button></td>
                         </form>
                </tr>
        @endforeach



    </tbody>

  </table>


  <span>{{ $category->links() }}</span>



@stop
<style>
    .w-5{
        display: none
    }
</style>
