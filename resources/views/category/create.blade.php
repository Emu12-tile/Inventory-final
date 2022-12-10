@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xl-12">

                <section class="hk-sec-wrapper mt-100">
                    <div class="pull-right">
                        <a class="btn btn-dark" href="{{ route('category.index') }}"> Back</a>
                    </div>
                    <h5 class="hk-sec-title">Add Category</h5>


                    <div class="row">
                        <div class="col-sm">
                            <form action="{{ route('category.store') }}" method="POST">
                                @csrf
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Category name</label>
                                    <div class="col-sm-10">
                                        <input type="text"
                                            name="category_name"class="form-control @error('category_name') is-invalid @enderror"
                                            id="inputEmail3" placeholder="Category Name" value="{{ old('category_name') }}">
                                        @error('category_name')
                                            <span class=" error invalid-feedback">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror

                                    </div>

                                </div>


                                <div class="form-group row mb-0 pull-right">
                                    <div class="col-sm-10">
                                        <button type="submit" class="btn btn-primary">CREATE</button>
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
