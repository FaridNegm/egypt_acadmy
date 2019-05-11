@extends('Admin.layouts.app')

@section('title')
    {{ trans('schools.index') }}
@endsection

@section('header')

@endsection

@section('content')
    <!-- Page header -->
    <div class="page-header page-header-default">
        <div class="page-header-content">
            <div class="page-title">
                <h4><i class="icon-arrow-right6 position-left"></i> <span class="text-semibold">{{ trans('app.home') }}</span> - {{ trans('schools.index') }}</h4>
            </div>
        </div>

        <div class="breadcrumb-line">
            <ul class="breadcrumb">
                <li><a href="{{ url('/admin-panel/{lang}') }}"><i class="icon-home2 position-left"></i> {{ trans('app.home') }} </a></li>
                <li class="active">{{ trans('schools.index') }}</li>
            </ul>
        </div>
    </div>
    <!-- /page header -->

    <div class="panel panel-flat">
        <div class="panel-heading">
            <h5 class="panel-title col-sm-6 pull-left">{{ trans('schools.index') }}</h5>

            <a href="{{ url('/admin/schools/create') }}" class="btn bg-teal-400 btn-labeled btn-rounded pull-right" title="Add New School">
                <i class=" icon-plus-circle2"></i> {{ trans('schools.add') }}
            </a>
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

        <div class="card-body"  style="margin:0px 20px;">
            <form method="POST" action="{{ url('/admin/schools') }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                {{ csrf_field() }}

                @include ('Admin.schools.form', ['formMode' => 'create'])

            </form>
        </div>
    </div>
@endsection

@section('footer')



@endsection
