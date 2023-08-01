@extends('master')

@section('title', 'SubCategory-index-Page')

@section('content')
<div class="row">
    <div class=" d-flex justify-content-end my-4">
      <a href="{{route('subcategory.create')}}"
      class="btn btn-success">Create Sub Category</a>
    </div>
    <div class="col-8 m-auto">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">Serial No:</th>
                <th scope="col">Category Name</th>
                <th scope="col">SubCategory Name</th>
                <th scope="col">Created Date</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach ( $subcategories as $subcategory )
                <tr>
                    <th scope="row">{{$subcategory->id}}</th>
                    <td>{{$subcategory->category->name}}</td>
                    <td>{{$subcategory->name}}</td>
                    <td>{{$subcategory->created_at->diffForHumans()}}</td>
                  <td>
                    <a href="{{route('subcategory.edit',['subcategory'=> $subcategory->id])}}" class="btn btn-info">Edit</a>
                    <form action="{{ route('subcategory.destroy', ['subcategory' => $subcategory->id]) }}" method="post">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-danger">Del</button>
                    </form>
                </td>
                </tr>
                @endforeach

            </tbody>
          </table>
    </div>
</div>

@endsection
