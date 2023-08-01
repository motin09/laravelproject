@extends('master')

@section('title', 'Category-Create-Page')

@section('content')
<div class="row">
    <div class=" d-flex justify-content-start my-4">
        <a href="{{route('category.index')}}"
        class="btn btn-info">Categories</a>
      </div>
    <div class="col-8 m-auto">

        <form action="{{route('category.store')}}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="category-name" class="form-label">Category Name</label>
                <input type="text" class="form-control
                @error("category_name")
                is-invaild
                @enderror"
                id="category-name"
                name="category_name"  placeholder="Please provide Category name"
                value="{{old('category_name')}}">

            @error("category_name")
                <span class="invaild-feedback"role="alert" >
                <strong>{{$message}}</strong>
                </span>

            @enderror
            </div>
            <div class="form-check mb-3">
                <input class="form-check-input" type="checkbox" value=""
                name="is_Active"id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                  Active/Inactive
                </label>
              </div>
            <button type="submit" class="btn btn-danger">Submit</button>
        </form>
    </div>
</div>

@endsection
