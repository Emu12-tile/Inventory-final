@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xl-12">

                <section class="hk-sec-wrapper mt-100">
                    <div class="pull-right">
                        <a class="btn btn-dark" href="{{ route('category.index') }}"> Back</a>
                    </div>
                    <h5 class="hk-sec-title">Edit Category</h5>

                    <div class="row">
                        <div class="col-sm">
                            <form action="{{ route('category.update', $category->id) }}" method="POST">

                                @csrf
                                @method('PUT')
                                <div class="form-group row">
                                    <label for="inputname" class="col-sm-2 col-form-label">Category Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" value="{{ $category->category_name }}"
                                            name="category_name"class="form-control @error('category_name') is-invalid @enderror"
                                            id="inputEmail3" placeholder="Category Name">
                                        @error('category_name')
                                            <span class=" error invalid-feedback">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>


                                <div class="form-group row mb-0 pull-right">
                                    <div class="col-sm-10">
                                        <button type="submit" class="btn btn-primary">UPDATE</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </section>

            </div>
        </div>
    </div>
@endsection
