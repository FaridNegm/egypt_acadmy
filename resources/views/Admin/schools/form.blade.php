<div class="form-group {{ $errors->has('title') ? 'has-error' : ''}}">
    <label for="title" class="control-label">{{ trans('schools.title') }}</label>
    <input class="form-control" name="title" type="text" id="title" value="{{ isset($school->title) ? $school->title : ''}}" >
    {!! $errors->first('title', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('content') ? 'has-error' : ''}}">
    <label for="content" class="control-label">{{ trans('schools.content') }}</label>
    <textarea class="form-control" rows="5" name="content" type="textarea" id="content" >{{ isset($school->content) ? $school->content : ''}}</textarea>
    {!! $errors->first('content', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
