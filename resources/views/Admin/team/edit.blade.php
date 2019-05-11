@extends('admin.layouts.app')

@section('title')
    {{ trans('app.Edit')}}: @foreach ($find as $team) {{ $team->name }} @endforeach
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
                <li><a href="{{ url('/') }}"><i class="icon-home2 position-left"></i> {{ trans('app.home') }} </a></li>
                <li class="">{{ trans('app.Team') }}</li>
                <li class="active">{{ trans('app.Edit') }}: @foreach ($find as $team) {{ $team->name }} @endforeach</li>
            </ul>
        </div>
    </div>


    <!-- /page header -->
    <div class="panel panel-flat">
        <div class="panel-heading">
            <h5 class="panel-title col-sm-6 pull-left">@foreach ($find as $team) {{ $team->name }} @endforeach</h5>
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

        @foreach ($find as $team)
            <form action="{{url($team->id.'/edit_team/ar')}}" method="post" class="form-horizontal" enctype='multipart/form-data' style="margin:10px;">
                {!! csrf_field() !!}

                <div class="form-group">
                    <label class="control-label col-sm-3" for="name">{{ trans('app.Name') }}</label>
                    <div class="col-md-9">
                        <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ $team->name }}" placeholder="{{ trans('app.Name') }}">

                        @if ($errors->has('name'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-3" for="position">{{ trans('app.Psition') }}</label>
                    <div class="col-md-9">
                        <input id="position" type="text" class="form-control{{ $errors->has('position') ? ' is-invalid' : '' }}" name="position" value="{{ $team->position }}" placeholder="{{ trans('app.Position') }}">

                        @if ($errors->has('position'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('position') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-3" for="description">{{ trans('app.Description') }}</label>
                    <div class="col-md-9">
                        <textarea id="description" class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" name="description" rows="6">{{ $team->description }}</textarea>

                        @if ($errors->has('description'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('description') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-3" for="image">{{ trans('app.Image') }}</label>
                    <div class="col-md-9">
                        <input type="file" class="file-input" data-show-caption="false" data-show-upload="false" data-browse-class="btn btn-primary" data-remove-class="btn btn-default" value="{{ $team->image }}" name="image">

                        <input type="hidden" name="df_image" value="{{$team->image}}" />

                        <img src="{{ url('Admin/images/team/'.$team->image) }}" name="df_image" style="width:70px;height:80px;"/>

                        @if ($errors->has('image'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('image') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-3" for="status">{{ trans('app.Status') }}</label>
                    <div class="checkbox checkbox-switch">
                        <label>
                            <input type="checkbox" data-off-color="danger" data-on-text="Yes" data-off-text="No" class="switch" checked="checked" name="status" value="{{ $team->status }}">
                        </label>
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
