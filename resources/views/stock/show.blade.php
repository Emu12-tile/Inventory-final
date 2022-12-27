@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xl-12">

                <section class="hk-sec-wrapper mt-100">
                    <div class="pull-right">
                        <a class="btn btn-dark" href="{{ route('stock.index') }}"> Back</a>
                    </div>
                    <h5 class="hk-sec-title">Experiment Equipment </h5>


                    <div class="row">
                        <div class="col-sm">
                            <form action="{{ route('stock.update', $stock->id) }}"
                                method="POST">
                                @csrf



                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Stock</label>


                                    <div class="col-sm-10">
                                        <input type="text" value="{{ $stock->product->product_name }}"
                                            name="product_name"class="form-control" id="inputname" placeholder=" product_name" disabled>
                                    </div>

                                </div>


                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Quantity</label>
                                    <div class="col-sm-10">
                                        <input type="number" value="{{ $stock->count }}"
                                            name="count"class="form-control" id="inputname" placeholder="quantity" disabled>
                                    </div>
                                </div>

 <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Specification</label>
                                    <div class="col-sm-10">
                                        <input type="text" value="{{ $stock->specification }}"
                                            name="specification"class="form-control" id="inputname" placeholder="quantity" disabled>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Registered By</label>
                                    <div class="col-sm-10">
                                        <input type="text" value="{{ $stock->user->name }}"
                                            name="name"class="form-control" id="inputname" placeholder="name" disabled>
                                    </div>
                                </div>
 <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Description</label>
                                    <div class="col-sm-10">
                                        <input type="text" value="{{ $stock->description }}"
                                            name="description"class="form-control" id="inputname" placeholder="description" disabled>
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
