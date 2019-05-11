@extends('admin.layouts.app')

@section('title')
    {{ trans('app.users') }}
@endsection

@section('header')

@endsection

@section('content')

    <!-- Page header -->
    <div class="page-header page-header-default">
        <div class="page-header-content">
            <div class="page-title">
                <h4><i class="icon-arrow-right6 position-left"></i> <span class="text-semibold">{{ trans('app.home') }}</span> - {{ trans('app.users') }}</h4>
            </div>
        </div>

        <div class="breadcrumb-line">
            <ul class="breadcrumb">
                <li><a href="{{ url('/') }}"><i class="icon-home2 position-left"></i> {{ trans('app.home') }} </a></li>
                <li class="">{{ trans('app.users') }}</li>
                <li class="active">{{ trans('app.Edit') }}: @foreach ($find as $user) {{ $user->name }} @endforeach</li>
            </ul>
        </div>
    </div>


    <!-- /page header -->
    <div class="panel panel-flat">
        <div class="panel-heading">
            <h5 class="panel-title col-sm-6 pull-left">@foreach ($find as $user) {{ $user->name }} @endforeach</h5>
        </div>

        <br>
        @foreach ($find as $user)
            <form action="{{url($user->id.'/edit/ar')}}" method="post" class="form-horizontal" enctype='multipart/form-data' style="margin:10px;">
                {!! csrf_field() !!}
                <div class="form-group">
                    <label class="control-label col-sm-3" for="name">{{ trans('app.Name') }}</label>
                    <div class="col-md-9">
                        <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ $user->name }}" >

                        @if ($errors->has('name'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-3" for="email">{{ trans('app.Email') }}</label>
                    <div class="col-md-9">
                        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ $user->email }}" >

                        @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                {{-- <div class="form-group">
                    <label class="control-label col-sm-3" for="password">{{ trans('app.Password') }}</label>
                    <div class="col-md-9">
                        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" value="{{ old('password') }}"  holder="{{ trans('app.Password') }}">

                        @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                </div> --}}

                <div class="form-group">
                    <label class="control-label col-sm-3" for="phone">{{ trans('app.Phone') }}</label>
                    <div class="col-md-9">
                        <input id="number" type="number" class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" name="phone" value="{{ $user->phone }}">

                        @if ($errors->has('phone'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('phone') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-3" for="image">{{ trans('app.Image') }}</label>
                    <div class="col-md-9">
                        <input type="file" class="file-input" data-show-caption="false" data-show-upload="false" data-browse-class="btn btn-primary" data-remove-class="btn btn-default" value="{{$user->image}}" name="image">

                        <input type="hidden" name="df_image" value="{{$user->image}}" />

                        <img src="{{ url('storage/app/public/uploads/'.$user->image) }}" name="df_image" style="width:70px;height:80px;"/>

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
                            <input type="checkbox" data-off-color="danger" data-on-text="Yes" data-off-text="No" class="switch"
                            checked={{ $user->status == 0 ? '' : 'checked' }} name="status" value="{{ $user->status }}">
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
