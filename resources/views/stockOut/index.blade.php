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

                {{-- <a href="{{ route('stock.create') }}" class="mr-25" data-toggle="tooltip" data-original-title="add">
                    <i class="icon-plus icon-4x"> </i> add </a> --}}
            </div>
            <h5 class="hk-sec-title">Stocks Out </h5>

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

                                        <th>Approved By</th>

                                           <th>Request</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($stockOut as $i => $stock)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            <td>{{ $stock->req->stock->product->product_name }}</td>
                                               <td>{{ $stock->count }}</td>


                                            {{-- <td>{{ $stock->user->name }}</td> --}}


                                            <td>
                                                <form action="{{ route('stock.destroy', $stock->id) }}"
                                                    method="POST">
                                                    <a href="{{ route('stock.show', $stock->id) }}"
                                                        class="mr-25" data-toggle="tooltip" data-original-title="show"> <i
                                                            class="icon-eye"></i> </a>
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
                            {!! $stockOut->links() !!}

                        </div>
                    </div>
                </div>
            </div>
        </section>





    </div>
@endsection
