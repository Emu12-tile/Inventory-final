@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xl-12">

                <section class="hk-sec-wrapper mt-100">
                    <div class="pull-right">
                        <a class="btn btn-dark" href="{{ route('req.index') }}"> Back</a>
                    </div>
                    <h5 class="hk-sec-title">Add Stock Out </h5>


                    <div class="row">
                        <div class="col-sm">
                            <form action="{{ route('addStockOutPost', $id) }}" method="POST">
                                @csrf

                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Quantity approved</label>
                                    <div class="col-sm-10">
                                        <input type="text"
                                            name="count"class="form-control @error('count') is-invalid @enderror"
                                            id="inputEmail3" value="{{ old('count') }}" placeholder="count ">
                                        @error('count')
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
