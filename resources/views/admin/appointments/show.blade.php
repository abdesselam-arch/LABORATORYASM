@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('Show') }} {{ trans('appointments') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.appointments.index') }}">
                    {{ trans('back to list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('id') }}
                        </th>
                        <td>
                            {{ $appointment->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('patient') }}
                        </th>
                        <td>
                            {{ $appointment->client->name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('admin') }}
                        </th>
                        <td>
                            {{ $appointment->admin->name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('start time') }}
                        </th>
                        <td>
                            {{ $appointment->start_time }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('finish time') }}
                        </th>
                        <td>
                            {{ $appointment->finish_time }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('tests') }}
                        </th>
                        <td>
                            @foreach($appointment->tests as $key => $tests)
                                <span class="label label-info">{{ $tests->name }}</span>
                            @endforeach
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('comments') }}
                        </th>
                        <td>
                            {{ $appointment->comments }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.appointments.index') }}">
                    {{ trans('back to list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection
