@extends('layoute')
@section('content')
<h1 class="mt-4">Edite Meal</h1>
<form action="{{URL('updateMeal')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="idu" value="{{$meal->id}}">
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="inputEmail4">Meal Name</label>
        <input type="text" name="meal" class="form-control" id="inputEmail4" value="{{$meal->name}}" >
        @foreach ($errors->get('meal') as $msg)
        <p style="color: red;">{{$msg}}</p>
        @endforeach
    </div>


      <div class="form-group col-md-6">
        <label for="inputPassword4">Price</label>
        <input type="text" name="price" class="form-control" id="inputPassword4" value="{{$meal->price}}">
        @foreach ($errors->get('price') as $msg)
        <p style="color: red;">{{$msg}}</p>
        @endforeach
      </div>

      <div class="form-group col-md-6">
        <label>image</label>
        <input type="file" name="image" class="form-control">
        @foreach ($errors->get('image') as $msg)
        <p style="color: red;">{{$msg}}</p>
        @endforeach
      </div>

      <div class="form-group col-md-6">
        <label >Category</label>
        <select name="category" class="form-control">
            @foreach ($category as $item)
                <option value="{{$item->id}}">{{$item->name_of_Category}}</option>
            @endforeach

        </select>
      </div>

    </div>
    <br>
    <button type="submit" class="btn btn-primary">Update</button>
  </form>
@stop
