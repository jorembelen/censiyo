@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">

                <h2>Submit your shop</h2>
            </div>
            <div class="card-body">
    
    <form action="{{route('shops.store')}}" method="post">
        @csrf
        <div class="form-group">
            <label for="">Name of Shop</label>
            <input type="text" name="name" id="" class="form-control" placeholder="">
          </div>
        <div class="form-group">
            <label for="">Description</label>
            <textarea class="form-control" name="description" id="" rows="3"></textarea>
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
    </form>
            </div>
        </div>
    </div>
</div>
    
@endsection