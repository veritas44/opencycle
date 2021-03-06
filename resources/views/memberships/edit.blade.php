@extends('layouts.form')

@section('title', 'Settings for ' . $group->name)

@section('form')
    <form action="{{ route('memberships.update', $group) }}" method="POST">
        @method('PATCH')
        @csrf

        <div class="form-group">
            <label for="email">{{ __('Email preference') }}</label>
            <select class="form-control" name="email">
                <option value="1">None apart from Admin</option>
                <option value="2">One for each Post</option>
                <option value="3">Daily digest</option>
            </select>
            @if ($errors->has('email'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
        </div>

        <div class="form-group row">
            <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">Update</button>
                <button type="submit" class="btn btn-danger">Leave group</button>
            </div>
        </div>
    </form>
@endsection
