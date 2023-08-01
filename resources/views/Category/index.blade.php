@extends('master')

@section('title', 'Category-Index-Page')

@section('content')
<div class="row">
    <div class="d-flex justify-content-end my-4">
        <a href="{{ route('category.create') }}" class="btn btn-success">Create Category</a>
    </div>
    <div class="col-8 m-auto">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Category Name</th>
                <th scope="col">Created</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category)
                <tr>
                    <th scope="row">{{ $category->id }}</th>
                    <td>{{ $category->name }}</td>
                    <td>{{ $category->created_at->diffForHumans() }}</td>

                    <td>
                        <a href="{{ route('category.edit',['category' => $category->id]) }}" class="btn btn-info">Edit</a>

                        <form action="{{ route('category.destroy', ['category' => $category->id]) }}" method="post">
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
