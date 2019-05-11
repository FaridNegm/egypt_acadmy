@extends('admin.layouts.app')

@section('title')
    {{ trans('app.Team') }}
@endsection

@section('header')

@endsection

@section('content')

    <!-- Page header -->
    <div class="page-header page-header-default">
        <div class="page-header-content">
            <div class="page-title">
                <h4><i class="icon-arrow-right6 position-left"></i> <span class="text-semibold">{{ trans('app.home') }}</span> - {{ trans('app.Team') }}</h4>
            </div>
        </div>

        <div class="breadcrumb-line">
            <ul class="breadcrumb">
                <li><a href="{{ url('/team/ar') }}"><i class="icon-home2 position-left"></i> {{ trans('app.home') }} </a></li>
                <li class="active">{{ trans('app.Team') }}</li>
            </ul>
        </div>
    </div>
    <!-- /page header -->

    <div class="panel panel-flat">
        <div class="panel-heading">
            <h5 class="panel-title col-sm-6 pull-left">{{ trans('app.Team') }}</h5>
            <button type="button" class="btn bg-teal-400 btn-labeled btn-rounded pull-right" data-toggle="modal" data-target="#add"><b><i class=" icon-plus-circle2"></i></b>{{ trans('app.New Member') }}</button>
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
                    <th>{{ trans('app.Position') }}</th>
                    <th>{{ trans('app.Description') }}</th>
                    <th>{{ trans('app.Image') }}</th>
                    <th>{{ trans('app.Status') }}</th>
                    <th>{{ trans('app.Actions') }}</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($all as $team)
                    <tr>
                        <td>{{ $team->id}}</td>
                        <td>{{ $team->name}}</td>
                        <td>{{ $team->position}}</td>
                        <td>{{ $team->description}}</th>
                        <td>
                            <img src="{{ url('Admin/images/team/'.$team->image) }}" style="width:50px;height:50px;border-radius:50%;"/>
                        </td>
                        <td>
                            @if ($team->status == 1)
                                <span class="label label-success label-rounded">{{ trans('app.Active') }}</span>
                            @else
                                <span class="label label-danger label-rounded">{{ trans('app.Not Active') }}</span>
                            @endif
                        </td>
                        <td>
                            <a href="{{ url($team->id.'/edit_team/ar') }}" target="_blank">
                                <span class="label label-primary label-rounded label-icon" data-toggle="modal" data-target="#edit"><i class=" icon-pencil"></i></span>
                            </a>

                            <a href="{{ url($team->id.'/delete_team/ar') }}"  id="delete">
                                <span class="label label-danger label-rounded label-icon"><i class="icon-trash"></i></span>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    @include('Admin/team/add')

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
