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


        <table class="table table-bordered table-hover datatable-highlight">
            <thead>
                <tr>
                    <th>#</th><th>{{ trans('schools.title') }}</th><th>{{ trans('schools.content') }}</th><th>Actions</th>
                </tr>
            </thead>
            <tbody>
            @foreach($schools as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->title }}</td><td>{{ $item->content }}</td>
                    <td>
                        <a href="{{ url('/admin/schools/' . $item->id) }}" title="View School"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                        <a href="{{ url('/admin/schools/' . $item->id . '/edit') }}" title="Edit School"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('/admin/schools' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete School" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="pagination-wrapper"> {!! $schools->appends(['search' => Request::get('search')])->render() !!} </div>

    </div>

@endsection

@section('footer')

    <script src="{{ url('Admin') }}/js/plugins/tables/datatables/datatables.min.js"></script>
    <script src="{{ url('Admin') }}/js/demo_pages/datatables_advanced.js"></script>

@endsection
