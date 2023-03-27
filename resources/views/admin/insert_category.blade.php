@extends('layoute')
@section('content')

<h1 class="mt-4">Category</h1>
@if (session()->has('status'))
    @if (session('status'))
        <div class="alert alert-success">Added Successfully</div>
    @endif

@endif
<br>
<form action="{{URL('insertCategory')}}" method="POST">
    @csrf
    <div class="form-group">
      <label for="exampleInputEmail1">Category Name</label>
        <div class="col-6">
      <input type="text" name="category" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Category Name">
    </div>
    </div>
    <br>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

@stop
