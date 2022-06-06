@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('Show') }} {{ trans('test') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.tests.index') }}">
                    {{ trans('back to list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('Id') }}
                        </th>
                        <td>
                            {{ $test->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('Name') }}
                        </th>
                        <td>
                            {{ $test->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('Price') }}
                        </th>
                        <td>
                            {{ $test->price }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('Type') }}
                        </th>
                        <td>
                            {{ $test->type }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.tests.index') }}">
                    {{ trans('back to list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection
