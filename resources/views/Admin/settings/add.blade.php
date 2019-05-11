<!-- Horizontal form modal -->
<div id="add" class="modal fade" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h5 class="modal-title">{{ trans('app.New User') }}</h5>
            </div>

            <form action="{{url('add_user/lang')}}" method="post" class="form-horizontal" enctype='multipart/form-data'>
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
                        <label class="control-label col-sm-3" for="email">{{ trans('app.Email') }}</label>
                        <div class="col-md-9">
                            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required placeholder="{{ trans('app.Email') }}">

                            @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-3" for="password">{{ trans('app.Password') }}</label>
                        <div class="col-md-9">
                            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" value="{{ old('password') }}" required placeholder="{{ trans('app.Password') }}">

                            @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-3" for="phone">{{ trans('app.Phone') }}</label>
                        <div class="col-md-9">
                            <input id="phone" type="number" class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" name="phone" value="{{ old('phone') }}" placeholder="{{ trans('app.Phone') }}">

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
                            <input type="file" class="file-input" data-show-caption="false" data-show-upload="false" data-browse-class="btn btn-primary" data-remove-class="btn btn-default" value="{{ old('image') }}" name="image">

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
