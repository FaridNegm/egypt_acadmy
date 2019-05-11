<!-- Horizontal form modal -->
<div id="add" class="modal fade" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h5 class="modal-title">{{ trans('app.New Work') }}</h5>
            </div>

            <form action="{{url('add_work/lang')}}" method="post" class="form-horizontal" enctype='multipart/form-data'>
                {!! csrf_field() !!}

                <div class="modal-body">

                    <div class="form-group">
                        <label class="control-label col-sm-3" for="title">{{ trans('app.Title') }}</label>
                        <div class="col-md-9">
                            <input id="title" type="text" class="form-control {{ $errors->has('title') ? ' is-invalid' : '' }}" name="title" value="{{ old('name') }}" required placeholder="{{ trans('app.Title') }}">

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
                            <textarea id="description" class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" name="description" rows="6" placeholder="{{ trans('app.Description') }}"></textarea>

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
