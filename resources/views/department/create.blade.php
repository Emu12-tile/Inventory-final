@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xl-12">

                <section class="hk-sec-wrapper mt-100">
                    <div class="pull-right">
                        <a class="btn btn-dark" href="{{ route('department.index') }}"> Back</a>
                    </div>
                    <h5 class="hk-sec-title">Add Department</h5>
                    <p class="mb-25">Create department forms by adding name of the department </p>

                    <div class="row">
                        <div class="col-sm">
                            <form action="{{ route('department.store') }}" method="POST">
                                @csrf
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">dept_name</label>
                                    <div class="col-sm-10">
                                        <input type="text"
                                            name="dept_name"class="form-control @error('dept_name') is-invalid @enderror"
                                            id="inputEmail3" value="{{ old('dept_name') }}" placeholder="department Name">
                                        @error('dept_name')
                                            <span class=" error invalid-feedback">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
<div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">dept_head</label>
                                    <div class="col-sm-10">
                                        <input type="text"
                                            name="dept_head"class="form-control @error('dept_head') is-invalid @enderror"
                                            id="inputEmail3" value="{{ old('dept_head') }}" placeholder="dept_head">
                                        @error('dept_head')
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
