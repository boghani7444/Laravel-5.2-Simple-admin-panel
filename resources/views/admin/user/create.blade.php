@extends('admin.layouts.app')

@section('container')
    <div class="content-wrapper">
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
                <div class="col-md-12">
                    <div class="box box-primary">
                        @if(!empty($record))
                            {!!   Form::model($record, ['route' => ['admin.user.update', $record],'method' => 'PUT']) !!}
                        @else
                            {!! Form::open(['url' => 'admin/user','method' => 'POST']) !!}
                        @endif
                            <div class="box-body">
                                @include('admin.user.form')
                            </div>
                            <!-- /.box-body -->
                            <div class="box-footer">
                                <button type="submit" name="submit" value="submit" class="btn btn-primary">Submit</button>
                            </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
