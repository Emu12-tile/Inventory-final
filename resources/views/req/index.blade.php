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
                                             <td> <select data-target="{{ $req->id }}"
                                             class=" btn color-wrap text-warning btn-success dropdown-toggle btn-icon-dropdown requestStatus "
                                             @error('dept_status') is-invalid @enderror" name="dept_status"
                                             id="dept_status">

                                             <option selected disabled  >Pending</option>

                                                 @foreach ($status as $name)
                                                     @if ($req->dept_status == $name->status )


                                                         <option  value="{{ $name->status }}"selected>{{ $name->status }}
                                                         </option>

                                                     @else


                                                           <option value="{{ $name->status }}">{{ $name->status }}</option>

                                                     @endif
                                                 @endforeach


                                         </select>
                                             </td>
                                         <td> <select data-target="{{ $req->id }}"
                                             class=" btn color-wrap  dropdown-btn-toggle btn-icon-dropdown reqStatus "
                                             @error('store_status') is-invalid @enderror" name="store_status"
                                             id="store_status">

                                             <option selected disabled  >Pending</option>

                                                 @foreach ($status as $name)
                                                     @if ($req->store_status == $name->status )


                                                         <option  value="{{ $name->status }}"selected>{{ $name->status }}
                                                         </option>


                                                     @else


                                                           <option value="{{ $name->status }}">{{ $name->status }}</option>

                                                     @endif
                                                 @endforeach


                                         </select>
                                        </td>
                        <td> <a class="btn btn-dark" href="{{ route('addStockOut',$req->id) }}"> Go</a></td>






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
@section('javascript')
     <script src="https://code.jquery.com/jquery-3.6.1.min.js"
         integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
     <script>
         $(".requestStatus").on("change", function() {
             if ($(this).val() != "") {
                 // console.log("test")
                 $.ajax({
                     url: "{{ route('change_status') }}",

                     method: 'POST',
                     headers: {
                         "X-CSRF-TOKEN": "{{ csrf_token() }}"
                     },
                     data: {
                         "status": $(this).val(),
                         "item": $(this).attr("data-target")
                     },
                     success: function(response) {
                         if (response.status) {
                             alert("Status changed succussfully");
                         }
                     },
                     error: function(response) {}
                 });
             }
         });
          $(".reqStatus").on("change", function() {
             if ($(this).val() != "") {
                 // console.log("test")
                 $.ajax({
                     url: "{{ route('chan_status') }}",

                     method: 'POST',
                     headers: {
                         "X-CSRF-TOKEN": "{{ csrf_token() }}"
                     },
                     data: {
                         "status": $(this).val(),
                         "item": $(this).attr("data-target")
                     },
                     success: function(response) {
                         if (response.status) {
                             alert("Status changed succussfully");
                         }
                     },
                     error: function(response) {}
                 });
             }
         });


         </script>
         @endsection


