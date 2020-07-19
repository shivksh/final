@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    {{ __('You are logged in!') }}               
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container mt-5" style="margin:0 auto; width:20%">
<a href="{{route('read')}}"><input type="button"  class="btn btn-primary" value=" Click Here To Continue....."  ></a>
</div>
@endsection
