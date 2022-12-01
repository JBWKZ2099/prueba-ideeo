<div class="tab-wizard">

    <div class="form-group row mb-3 {{ $errors->first('name') ? 'has-error' : '' }}">
        {!! Form::label('name', trans('validation.attributes.name').' *', ['class' => 'col-sm-2 control-label']) !!}
        <div class="col-sm-10">
            {!! Form::text('name', old('name'), ['id' => 'name', 'class' => 'form-control', 'placeholder' => trans('validation.attributes.name')]) !!}
            <span class="help-block">{{ $errors->first('name', ':message') }}</span>
        </div>
    </div>

    <div class="form-group row mb-3 {{ $errors->first('email') ? 'has-error' : '' }}">
        {!! Form::label('email', trans('validation.attributes.email').' *', ['class' => 'col-sm-2 control-label']) !!}
        <div class="col-sm-10">
            {!! Form::email('email', old('email'), ['id' => 'email', 'class' => 'form-control', 'placeholder' => trans('validation.attributes.email')]) !!}
            <span class="help-block">{{ $errors->first('email', ':message') }}</span>
        </div>
    </div>

    <div class="form-group row mb-3 {{ $errors->first('message') ? 'has-error' : '' }}">
        {!! Form::label('message', trans('validation.attributes.message').' *', ['class' => 'col-sm-2 control-label']) !!}
        <div class="col-sm-10">
            {!! Form::textarea('message', old('message'), ['id' => 'message', 'class' => 'form-control', 'placeholder' => trans('validation.attributes.message')]) !!}
            <span class="help-block">{{ $errors->first('message', ':message') }}</span>
        </div>
    </div>
</div>
