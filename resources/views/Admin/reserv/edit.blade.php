@extends('admin.layouts.app')

@section('title')
    {{ trans('app.Edit')}}: @foreach ($find as $course) {{ $course->name }} @endforeach
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
                <li><a href="{{ url('/') }}"><i class="icon-home2 position-left"></i> {{ trans('app.home') }} </a></li>
                <li class="">{{ trans('app.Courses') }}</li>
                <li class="active">{{ trans('app.Edit') }}: @foreach ($find as $course) {{ $course->name }} @endforeach</li>
            </ul>
        </div>
    </div>


    <!-- /page header -->
    <div class="panel panel-flat">
        <div class="panel-heading">
            <h5 class="panel-title col-sm-6 pull-left">@foreach ($find as $course) {{ $course->name }} @endforeach</h5>
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

        @foreach ($find as $course)
            <form action="{{url($course->id.'/edit_course/ar')}}" method="post" class="form-horizontal" enctype='multipart/form-data' style="margin:10px;">
                {!! csrf_field() !!}

                    <div class="form-group">
                        <label class="control-label col-sm-3" for="name">{{ trans('app.Name') }}</label>
                        <div class="col-md-9">
                            <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ $course->name }}" placeholder="{{ trans('app.Name') }}">

                            @if ($errors->has('name'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-3" for="time">{{ trans('app.Time') }}</label>
                        <div class="col-md-9">
                            <input id="time" type="text" class="form-control{{ $errors->has('time') ? ' is-invalid' : '' }}" name="time" value="{{ $course->time }}" placeholder="{{ trans('app.Time') }}">

                            @if ($errors->has('time'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('time') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-3" for="price">{{ trans('app.Price') }}</label>
                        <div class="col-md-9">
                            <input id="price" type="text" class="form-control{{ $errors->has('price') ? ' is-invalid' : '' }}" name="price" value="{{ $course->price }}" placeholder="{{ trans('app.Price') }}">

                            @if ($errors->has('price'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('price') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-3" for="degree">{{ trans('app.Degree') }}</label>
                        <div class="col-md-9">
                            <input id="degree" type="text" class="form-control{{ $errors->has('degree') ? ' is-invalid' : '' }}" name="degree" value="{{ $course->degree }}" placeholder="{{ trans('app.Degree') }}">

                            @if ($errors->has('degree'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('degree') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-3" for="documentation">{{ trans('app.Documentation') }}</label>
                        <div class="col-md-9">
                            <input id="documentation" type="text" class="form-control{{ $errors->has('documentation') ? ' is-invalid' : '' }}" name="documentation" value="{{ $course->documentation }}" placeholder="{{ trans('app.Documentation') }}">

                            @if ($errors->has('documentation'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('documentation') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-3" for="status">{{ trans('app.Status') }}</label>
                        <div class="checkbox checkbox-switch">
                            <label>
                                <input type="checkbox" data-off-color="danger" data-on-text="Yes" data-off-text="No" class="switch" checked="checked" name="status">
                            </label>
                        </div>
                    </div>

                </div>

                <br>
                <div class="form-group text-center">
                    <button type="submit" class="btn btn-primary btn-lg">{{ trans('app.Save') }} </button>
                </div>
            </form>
        @endforeach

    </div>
    <!-- /horizontal form modal -->


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
