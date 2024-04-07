@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" id="downsmall">
                <div class="card-header w3-xlarge w3-padding-24 w3-teal">{{ __('Register') }}</div>

                <div class="card-body">
                    <div class="row justify-content-center">
                        <div class="col-md-8 w3-leftbar w3-border-teal">
                            @include('includers.registerform')
                        </div>
                    </div>
                    <div class="card-footer w3-teal w3-padding-24 mt-2 w3-card">

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
