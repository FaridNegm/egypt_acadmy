<!-- Horizontal form modal -->
<div id="add" class="modal fade" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h5 class="modal-title">{{ trans('app.New Course') }}</h5>
            </div>

            <form action="{{url('add_course/lang')}}" method="post" class="form-horizontal" enctype='multipart/form-data'>
                {!! csrf_field() !!}

                <div class="modal-body">

                    <div class="form-group">
                        <label class="control-label col-sm-3" for="name">{{ trans('app.Name') }}</label>
                        <div class="col-md-9">
                            <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required placeholder="{{ trans('app.Name') }}">

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
                            <input id="time" type="text" class="form-control{{ $errors->has('time') ? ' is-invalid' : '' }}" name="time" value="{{ old('time') }}" placeholder="{{ trans('app.Time') }}">

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
                            <input id="price" type="text" class="form-control{{ $errors->has('price') ? ' is-invalid' : '' }}" name="price" value="{{ old('price') }}" placeholder="{{ trans('app.Price') }}">

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
                            <input id="degree" type="text" class="form-control{{ $errors->has('degree') ? ' is-invalid' : '' }}" name="degree" value="{{ old('degree') }}" placeholder="{{ trans('app.Degree') }}">

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
                            <input id="documentation" type="text" class="form-control{{ $errors->has('documentation') ? ' is-invalid' : '' }}" name="documentation" value="{{ old('documentation') }}" placeholder="{{ trans('app.Documentation') }}">

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

                <div class="modal-footer">
                    <button type="button" class="btn btn-link" data-dismiss="modal">{{ trans('app.Close') }}</button>
                    <button type="submit" class="btn btn-primary">{{ trans('app.Save') }}</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- /horizontal form modal -->
