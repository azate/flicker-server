@extends('layouts.main')

@section('title', __('Главная'))

@section('content')
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default">
                <div class="panel-body">
                    @if ($errors->has('success'))
                        <div class="alert alert-success">{{ $errors->first('success') }}</div>
                    @endif
                    @if ($errors->has('error'))
                        <div class="alert alert-danger">{{ $errors->first('error') }}</div>
                    @endif
                    <form action="{{ route('pages.index.store') }}" id="form" method="post">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label>{{ __('Сообщение') }}</label>
                            <textarea name="message" class="form-control" rows="4" maxlength="255">{{ old('message') }}</textarea>
                            @if ($errors->has('message'))
                                <p class="help-block">
                                    <small class="text-danger">{{ $errors->first('message') }}</small>
                                </p>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>{{ __('Задержка') }}</label>
                            <input class="form-control" name="delay" type="text" value="{{ old('delay') }}">
                            @if ($errors->has('delay'))
                                <p class="help-block">
                                    <small class="text-danger">{{ $errors->first('delay') }}</small>
                                </p>
                            @endif
                        </div>
                    </form>
                </div>
                <div class="panel-footer">
                    <div class="clearfix">
                        <div class="pull-right">
                            <button class="btn btn-primary" form="form" name="submit" type="submit">{{ __('Отправить') }}</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection