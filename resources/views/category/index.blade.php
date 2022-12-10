@extends('layouts.admin')

@section('content')
{{-- TODO change this to componnent --}}
@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif
<div class="container">

    <section class="hk-sec-wrapper mt-100">
        <div class="pull-right hk-sec-title">

            <a href="{{ route('category.create') }}" class="mr-25" data-toggle="tooltip" data-original-title="add">  <i class="icon-plus icon-4x"> </i> add </a>
        </div>
        <h5 class="hk-sec-title">Categories</h5>

        <div class="row">
            <div class="col-sm">
                <div class="table-wrap">
                    <div class="table-responsive">
                        <table class="table table-sm mb-0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Category name</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categories as $i =>$category)
                                <tr>
                                    <td>{{ ++$i }}</td>
                                    <td>{{ $category->category_name }}</td>

                                    <td>
                                        <form action="{{ route('category.destroy',$category->id) }}" method="POST">
                                        {{-- <a href="{{ route('admin.category.show',$college->id) }}" class="mr-25" data-toggle="tooltip" data-original-title="show"> <i class="icon-eye"></i> </a> --}}
                                        <a href="{{ route('category.edit',$category->id) }}"  class="mr-25" data-toggle="tooltip" data-original-title="Edit"> <i class="icon-pencil"></i> </a>

                                        @csrf
                                        @method('DELETE')

                                        <button type="submit" class="btn btn-danger">
                                                  <a  data-toggle="tooltip" data-original-title="delete"> <i class=" icon-trash txt-danger"></i> </a>
                                        </button>
                                        </form>

                                    </td>
                                </tr>
                                @endforeach

                            </tbody>
                        </table>
                        {!! $categories->links() !!}

                    </div>
                </div>
            </div>
        </div>
    </section>





</div>

@endsection
