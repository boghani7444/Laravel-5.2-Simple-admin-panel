@extends('admin.layouts.app')


@section('container')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Users List
            </h1>
            <ol class="breadcrumb">
                <li><a href="{{ url('/admin') }}"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Users List</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <!-- /.box -->
                    <div class="box">
                        <!-- /.box-header -->
                        <div class="box-body">
                            <table id="users-table" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>Id.</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Created At</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody></tbody>
                                <tfoot>
                                <tr>
                                    <th>Id.</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Created At</th>
                                    <th>Action</th>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </section>
        <!-- /.content -->
    </div>
    <script type="text/javascript">
        var oTable;
        $(function() {
            oTable = $('#users-table').DataTable({
                "processing": true,
                "serverSide": true,
                "ajax": '{!! url('/admin/getusers') !!}',
                "columns": [
                    {data: 'id', name: 'id'},
                    {data: 'name', name: 'name'},
                    {data: 'email', name: 'email'},
                    {data: 'created_at', name: 'created_at'},
                    {data: 'action', name: 'action', orderable: false, searchable: false}
                ]
            });

            $('#users-table').on('click', '.delete_btn', function() {
                var id = $(this).attr('id');
                var r = confirm("Are you sure delete this content?");
                if (r == true) {
                    $.ajax({
                        type: "DELETE",
                        url: "{!! url('admin/user') !!}/"+id,
                        data: { "_token": "{{ csrf_token() }}" },
                        success: function(resp) {
                            oTable.ajax.reload();
                            alert('Record deleted successfully');
                        }
                    });
                } else {

                }
            });
        });
    </script>
@endsection
