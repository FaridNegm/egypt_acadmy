@extends('admin.layouts.app')

@section('title')
    {{ trans('app.Courses') }}
@endsection

@section('header')

@endsection

@section('content')

    <!-- Page header -->
    <div class="page-header page-header-default">
        <div class="page-header-content">
            <div class="page-title">
                <h4><i class="icon-arrow-right6 position-left"></i> <span class="text-semibold">{{ trans('app.home') }}</span> - {{ trans('app.Courses') }}</h4>
            </div>
        </div>

        <div class="breadcrumb-line">
            <ul class="breadcrumb">
                <li><a href="{{ url('/reserve/ar') }}"><i class="icon-home2 position-left"></i> {{ trans('app.home') }} </a></li>
                <li class="active">{{ trans('app.Courses') }}</li>
            </ul>
        </div>
    </div>
    <!-- /page header -->

    <div class="panel panel-flat">
        <div class="panel-heading">
            <h5 class="panel-title col-sm-6 pull-left">{{ trans('app.Courses') }}</h5>
            <button type="button" class="btn bg-teal-400 btn-labeled btn-rounded pull-right" data-toggle="modal" data-target="#add"><b><i class=" icon-plus-circle2"></i></b>{{ trans('app.New Course') }}</button>
        </div>

        <br>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <table class="table table-bordered table-hover datatable-highlight">
            <thead>
                <tr>
                    <th>{{ trans('app.Id') }}</th>
                    <th>{{ trans('app.Name') }}</th>
                    <th>{{ trans('app.Time') }}</th>
                    <th>{{ trans('app.Price') }}</th>
                    <th>{{ trans('app.Degree') }}</th>
                    <th>{{ trans('app.Documentation') }}</th>
                    <th>{{ trans('app.Status') }}</th>
                    <th>{{ trans('app.Actions') }}</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($all as $reserve)
                    <tr>
                        <td>{{ $reserve->id}}</td>
                        <td>{{ $reserve->name}}</td>
                        <td>{{ $reserve->time}}</td>
                        <td>{{ $reserve->price}}</th>
                        <td>{{ $reserve->degree}}</th>
                        <td>{{ $reserve->documentation}}</th>
                        <td>
                            @if ($reserve->status == 1)
                                <span class="label label-success label-rounded">{{ trans('app.Active') }}</span>
                            @else
                                <span class="label label-danger label-rounded">{{ trans('app.Not Active') }}</span>
                            @endif
                        </td>
                        <td>
                            <a href="{{ url($reserve->id.'/edit_course/ar') }}" target="_blank">
                                <span class="label label-primary label-rounded label-icon" data-toggle="modal" data-target="#edit"><i class=" icon-pencil"></i></span>
                            </a>

                            <a href="{{ url($reserve->id.'/delete_course/ar') }}"  id="delete">
                                <span class="label label-danger label-rounded label-icon"><i class="icon-trash"></i></span>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    @include('Admin/reserv/add')

@endsection

@section('footer')

    @include('Admin/layouts/message')

    <script src="{{ url('Admin') }}/js/plugins/tables/datatables/datatables.min.js"></script>
    <script src="{{ url('Admin') }}/js/demo_pages/datatables_advanced.js"></script>

    <!-- Theme JS files -->
	<script src="{{ url('Admin') }}/js/plugins/uploaders/fileinput/plugins/purify.min.js"></script>
	<script src="{{ url('Admin') }}/js/plugins/uploaders/fileinput/plugins/sortable.min.js"></script>
    <script src="{{ url('Admin') }}/js/plugins/uploaders/fileinput/fileinput.min.js"></script>

    <script>
        $(document).ready(function(){

        });
    </script>
@endsection
