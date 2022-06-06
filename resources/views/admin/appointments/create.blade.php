@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('Create') }} {{ trans('appointment') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.appointments.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="client_id">{{ trans('patient') }}</label>
                <select class="form-control select2 {{ $errors->has('client') ? 'is-invalid' : '' }}" name="client_id" id="client_id">
                    @foreach($clients as $id => $entry)
                        <option value="{{ $id }}" {{ old('client_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('client'))
                    <div class="invalid-feedback">
                        {{ $errors->first('client') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('') }}</span>
            </div>
            <div class="form-group">
                <label for="admin_id">{{ trans('admin') }}</label>
                <select class="form-control select2 {{ $errors->has('admin') ? 'is-invalid' : '' }}" name="admin_id" id="admin_id">
                    @foreach($admins as $id => $entry)
                        <option value="{{ $id }}" {{ old('admin_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('admin'))
                    <div class="invalid-feedback">
                        {{ $errors->first('admin') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="start_time">{{ trans('start time') }}</label>
                <input class="form-control datetime {{ $errors->has('start_time') ? 'is-invalid' : '' }}" type="text" name="start_time" id="start_time" value="{{ old('start_time') }}" required>
                @if($errors->has('start_time'))
                    <div class="invalid-feedback">
                        {{ $errors->first('start_time') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('') }}</span>
            </div>
            <div class="form-group">
                <label for="finish_time">{{ trans('finish time') }}</label>
                <input class="form-control datetime {{ $errors->has('finish_time') ? 'is-invalid' : '' }}" type="text" name="finish_time" id="finish_time" value="{{ old('finish_time') }}">
                @if($errors->has('finish_time'))
                    <div class="invalid-feedback">
                        {{ $errors->first('finish_time') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="tests">{{ trans('tests') }}</label>
                <div style="padding-bottom: 4px">
                    <span class="btn btn-info btn-xs select-all" style="border-radius: 0">{{ trans('select all') }}</span>
                    <span class="btn btn-info btn-xs deselect-all" style="border-radius: 0">{{ trans('deselect all') }}</span>
                </div>
                <select class="form-control select2 {{ $errors->has('tests') ? 'is-invalid' : '' }}" name="tests[]" id="tests" multiple required>
                    @foreach($tests as $id => $test)
                        <option value="{{ $id }}" {{ in_array($id, old('tests', [])) ? 'selected' : '' }}>{{ $test }}</option>
                    @endforeach
                </select>
                @if($errors->has('tests'))
                    <div class="invalid-feedback">
                        {{ $errors->first('tests') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('') }}</span>
            </div>
            <div class="form-group">
                <label for="comments">{{ trans('comments') }}</label>
                <textarea class="form-control {{ $errors->has('comments') ? 'is-invalid' : '' }}" name="comments" id="comments">{{ old('comments') }}</textarea>
                @if($errors->has('comments'))
                    <div class="invalid-feedback">
                        {{ $errors->first('comments') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('') }}</span>
            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('save') }}
                </button>
            </div>
        </form>
    </div>
</div>



@endsection
