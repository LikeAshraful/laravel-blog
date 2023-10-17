@extends('admin.layouts.app')

@section('title', 'Edit User')

@section('content')

    <div id="page-wrapper">
        <div class="row">
            <div class="col-md-12 text-center">
                <h1>Edit User</h1>
            </div>
        </div>

        <div class="row">

            <div class="col-md-8 col-md-offset-2">

                {{ html()->form('POST')->route('admin.users.edit', $user->id)->open() }}

                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                    {{ html()->label('name', 'Name:') }}
                    {{ html()->text('name', null, ['class' => 'form-control']) }}

                    @if ($errors->has('name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    {{ html()->label('email', 'Email:') }}
                    {{ html()->email('email', null, ['class' => 'form-control']) }}

                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group{{ $errors->has('role_id') ? ' has-error' : '' }}">
                    {{ html()->label('role_id', 'Role:') }}
                    {{ html()->select('role_id', $roles, null, ['class' => 'form-control']) }}

                    @if ($errors->has('role_id'))
                        <span class="help-block">
                            <strong>{{ $errors->first('role_id') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group{{ $errors->has('is_active') ? ' has-error' : '' }}">
                    {{ html()->label('is_active', 'Status:') }}
                    {{ html()->select('is_active', [1 => 'Active', 0 => 'Not Active'], null, ['class' => 'form-control']) }}

                    @if ($errors->has('is_active'))
                        <span class="help-block">
                            <strong>{{ $errors->first('is_active') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    {{ html()->label('password', 'Password:') }}
                    {{ html()->password('password', ['class' => 'form-control']) }}

                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group">
                    {{ html()->submit('Edit User', ['class' => 'btn btn-primary']) }}
                </div>


                {{ html()->form()->close() }}

            </div>
        </div>
    </div>

@endsection
