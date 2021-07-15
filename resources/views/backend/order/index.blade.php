@extends('layouts.backendtemplate')
@section('content')
  <div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Order List</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary d-inline-block">DataTables Example</h6>
        {{-- <a href="{{route('subcategory.create')}}" class="btn btn-outline-info float-right">New</a> --}}
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead class="thead-dark">
              <tr>
                <th>ID</th>
                <th>Voucherno</th>
                <th>Date</th>
                <th>Customer</th>
                <th>Total Amount</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tfoot>
              <tr>
                <th>ID</th>
                <th>Voucherno</th>
                <th>Date</th>
                <th>Customer</th>
                <th>Total Amount</th>
                <th>Actions</th>
              </tr>
            </tfoot>
            <tbody>
              @php 
                $i=1;
              @endphp
              @foreach($orders as $order)
              <tr>
                <td>{{$i++}}</td>
                <td>
                  {{$order->voucherno}}
                </td>
                <td>
                  {{Carbon\Carbon::parse($order->orderdate)->format('d-m-Y')}}
                </td>
                <td>
                  {{$order->user->name}}
                </td>
                <td>{{number_format($order->total)}}</td>
                <td>
                  <a href="#" class="btn btn-warning btn-sm">Detail</a>
                  <a href="#" class="btn btn-danger btn-sm">Confirm</a>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <!-- /.container-fluid -->

  <div class="modal fade" id="deleteModal">
    <div class="modal-dialog">
      <div class="modal-content">
        <form method="post" action="" id="deleteModalForm">
          @csrf
          @method('DELETE')
          <div class="modal-header">
            <h4 class="modal-title">Are you sure to delete?</h4>
          </div>
          <div class="modal-footer">
            <input type="submit" name="btnsubmit" class="btn btn-danger" value="Delete">
            <button class="btn btn-secondary" data-dismiss="modal">Cancle</button>
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection

@section('script')
  <script type="text/javascript">
    $(document).ready(function(){
      $('.deletebtn').click(function(){
        var id = $(this).data('id');
        // console.log(id);
        $('#deleteModalForm').attr('action',id);
        $('#deleteModal').modal('show');
      })
    })
  </script>
@endsection