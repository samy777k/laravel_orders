@extends('layoute')
@section('content')

<h1 class="mt-4">Edite Category</h1>
<br>

<form action="{{URL('updateCategory')}}" method="POST">
    @csrf
    <input type="hidden" name="idu" value="{{$categoryItem->id}}">
    <div class="form-group">
      <label for="exampleInputEmail1">Category Name</label>
        <div class="col-6">
      <input type="text" name="category" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$categoryItem->name_of_Category}}">
    </div>
    </div>
    <br>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

@endsection
