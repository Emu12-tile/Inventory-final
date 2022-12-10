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
            {{-- <div class="pull-right hk-sec-title">

                <a href="{{ route('req.create') }}" class="mr-25" data-toggle="tooltip" data-original-title="add">
                    <i class="icon-plus icon-4x"> </i> add </a>
            </div> --}}
            <h5 class="hk-sec-title">Request  </h5>

            <div class="row">
                <div class="col-sm">
                    <div class="table-wrap">
                        <div class="table-responsive">
                            <table class="table table-sm mb-0">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Request Name</th>
                                        <th>Stock Name</th>
                                        <th>Quantity</th>
                                        <th> Head of Dept</th>
                                         <th>dept status</th>
                                           <th>Admin status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($reqs as $i => $req)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            <td>{{ $req->user->name }}</td>
                                            <td>{{ $req->stock->product->product_name }}</td>
                                               <td>{{ $req->quantity }}</td>
                                               <td>{{ $req->user->name }}</td>
                                             <td>
                                <div class="row">
                                        <div class="col-sm">
                                           <div class="button-list"><div class="btn-group">
                                            <div class="dropdown">
                                                <button aria-expanded="false" data-toggle="dropdown" class="btn btn-secondary dropdown-toggle btn-icon-dropdown" type="button"><span class="feather-icon"><i data-feather="user"></i></span> <span class="caret"></span></button>
                                                <div role="menu" class="dropdown-menu">
                                                    <a class="dropdown-item" href="#">Action</a>
                                                    <a class="dropdown-item" href="#">Another action</a>
                                                    <a class="dropdown-item" href="#">Something else here</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="#">Separated link</a>
                                                </div>
                                            </div>
                                      </div>
                                    </div>
                                        </div>{{ $req->dept_status }}</td>


                                            <td>{{ $req->admin_status }}</td>


                                            <td>
                                                {{-- <form action="{{ route('req.destroy', $req->id) }}"
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
                                                </form> --}}

                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                            {!! $reqs->links() !!}

                        </div>
                    </div>
                </div>
            </div>
        </section>





    </div>
@endsection
