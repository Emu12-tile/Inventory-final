@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xl-12">

                <section class="hk-sec-wrapper mt-100">
                    <div class="pull-right">
                        <a class="btn btn-dark" href="{{ route('product.index') }}"> Back</a>
                    </div>
                    <h5 class="hk-sec-title">Add Product</h5>


                    <div class="row">
                        <div class="col-sm">
                            <form action="{{ route('product.store') }}" method="POST">
                                @csrf
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Product Name</label>
                                    <div class="col-sm-10">
                                        <input type="text"
                                            name="product_name"class="form-control @error('product_name') is-invalid @enderror"
                                            id="inputEmail3" value="{{ old('product_name') }}" placeholder="Product Name">
                                        @error('product_name')
                                            <span class=" error invalid-feedback">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>



                                {{-- <div class="invalid-feedback" >
                                    @error('name')
                                        {{ $message }}
                                    @enderror
                                </div> --}}

                                <div class="form-group row">
                                    <label for="inputCategory" class="col-sm-2 col-form-label">Category Name</label>
                                    <div class="col-sm-10">
                                        <select class="form-control custom-select  mt-15 " name="category_id">
                                            @foreach ($category as $col)
                                                <option value="{{ $col->id }}"
                                                    {{ old('category_id') == $col->id ? 'selected' : '' }}>
                                                    {{ $col->category_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Description</label>
                                    <div class="col-sm-10">
                                        <input type="text"
                                            name="description"class="form-control @error('description') is-invalid @enderror"
                                            id="inputEmail3" value="{{ old('description') }}" placeholder="Description ">
                                        @error('description')
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
