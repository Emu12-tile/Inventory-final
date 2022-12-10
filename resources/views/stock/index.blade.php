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

                <a href="{{ route('stock.create') }}" class="mr-25" data-toggle="tooltip" data-original-title="add">
                    <i class="icon-plus icon-4x"> </i> add </a>
            </div>
            <h5 class="hk-sec-title">Stocks In </h5>

            <div class="row">
                <div class="col-sm">
                    <div class="table-wrap">
                        <div class="table-responsive">
                            <table class="table table-sm mb-0">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Product Name</th>
                                        <th>Quantity</th>
                                        <th>Specification</th>
                                        <th>Registered By</th>
                                         <th>Description</th>
                                           <th>Request</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($stocks as $i => $stock)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            <td>{{ $stock->product->product_name }}</td>
                                               <td>{{ $stock->count }}</td>
                                             <td>{{ $stock->specification }}</td>

                                            <td>{{ $stock->user->name }}</td>
                                             <td>{{ $stock->description }}</td>
                                             <td> <a class="btn btn-dark" href="{{ route('req.create') }}"> Add to Cart</a></td>
                                            <td>
                                                <form action="{{ route('stock.destroy', $stock->id) }}"
                                                    method="POST">
                                                    {{-- <a href="{{ route('stock.show', $stock->id) }}"
                                                        class="mr-25" data-toggle="tooltip" data-original-title="show"> <i
                                                            class="icon-eye"></i> </a> --}}
                                                    <a href="{{ route('stock.edit', $stock->id) }}"
                                                        class="mr-25" data-toggle="tooltip" data-original-title="Edit"> <i
                                                            class="icon-pencil"></i> </a>

                                                    @csrf
                                                    @method('DELETE')

                                                    <button type="submit" class="btn btn-danger">
                                                        <a data-toggle="tooltip" data-original-title="delete"> <i
                                                                class=" icon-trash txt-danger"></i> </a>
                                                    </button>
                                                </form>

                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                            {!! $stocks->links() !!}

                        </div>
                    </div>
                </div>
            </div>
        </section>





    </div>
@endsection
