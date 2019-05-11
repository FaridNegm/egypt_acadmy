@extends('admin.layouts.app')

@section('title')
    {{ trans('app.Edit')}}: @foreach ($find as $work) {{ $work->title }} @endforeach
@endsection

@section('header')

@endsection

@section('content')

    <!-- Page header -->
    <div class="page-header page-header-default">
        <div class="page-header-content">
            <div class="page-title">
                <h4><i class="icon-arrow-right6 position-left"></i> <span class="text-semibold">{{ trans('app.home') }}</span> - {{ trans('app.Works') }}</h4>
            </div>
        </div>

        <div class="breadcrumb-line">
            <ul class="breadcrumb">
                <li><a href="{{ url('/') }}"><i class="icon-home2 position-left"></i> {{ trans('app.home') }} </a></li>
                <li class="">{{ trans('app.Works') }}</li>
                <li class="active">{{ trans('app.Edit') }}: @foreach ($find as $work) {{ $work->title }} @endforeach</li>
            </ul>
        </div>
    </div>


    <!-- /page header -->
    <div class="panel panel-flat">
        <div class="panel-heading">
            <h5 class="panel-title col-sm-6 pull-left">@foreach ($find as $work) {{ $work->title }} @endforeach</h5>
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

        @foreach ($find as $work)
            <form action="{{url($work->id.'/edit_work/ar')}}" method="post" class="form-horizontal" enctype='multipart/form-data' style="margin:10px;">
                {!! csrf_field() !!}

                <div class="form-group">
                    <label class="control-label col-sm-3" for="title">{{ trans('app.Title') }}</label>
                    <div class="col-md-9">
                        <input id="title" type="text" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" name="title" value="{{ $work->title }}" required placeholder="{{ trans('app.Title') }}">

                        @if ($errors->has('title'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('title') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-3" for="section">{{ trans('app.Section') }}</label>
                    <div class="col-md-9">

                        <select id="section" class="form-control {{ $errors->has('section') ? ' is-invalid' : '' }}" name="section" >
                            <option selected>{{ $work->section }}</option>
                            <option vaLue="{{ trans('app.Nursing') }}">{{ trans('app.Nursing') }}</option>
                            <option vaLue="{{ trans('app.Space') }}">{{ trans('app.Space') }}</option>
                            <option vaLue="حاسب_الي">{{ trans('app.Computer') }}</option>
                            <option vaLue="تنميه_بشريه">{{ trans('app.Human Development') }}</option>
                            <option vaLue="{{ trans('app.Press') }}">{{ trans('app.Press') }}</option>
                        </select>

                        @if ($errors->has('section'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('section') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-3" for="description">{{ trans('app.Description') }}</label>
                    <div class="col-md-9">
                        <textarea id="description" class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" name="description" rows="6">{{ $work->description }}</textarea>

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
                        <input type="file" class="file-input" data-show-caption="false" data-show-upload="false" data-browse-class="btn btn-primary" data-remove-class="btn btn-default" value="{{ $work->image }}" name="image">

                        <input type="hidden" name="df_image" value="{{$work->image}}" />

                        <img src="{{ url('Admin/images/works/'.$work->image) }}" name="df_image" style="width:70px;height:80px;"/>

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
                            <input type="checkbox" data-off-color="danger" data-on-text="Yes" data-off-text="No" class="switch" checked="checked" name="status" value="{{ $work->status }}">
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
