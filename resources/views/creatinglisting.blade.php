@extends('layouts.app');

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">Create Listing</div>

            <div class="card-body">
                {{ Form::open(['action' => 'ListingsController@store', 'method' => 'POST']) }}
                    {{ Form::bsText('name', '', ['placeholder'=>'Company name']) }}
                    {{ Form::bsText('website', '', ['placeholder'=>'Company website']) }}
                    {{ Form::bsText('email', '', ['placeholder'=>'Contact email']) }}
                    {{ Form::bsText('phone', '', ['placeholder'=>'Contact phone']) }}
                    {{ Form::bsText('address', '', ['placeholder'=>'Bussiness address']) }}
                    {{ Form::bsTextArea('bio', '', ['placeholder'=>'About this bussiness location']) }}
                    {{ Form::bsSubmit('Submit', ['class' => 'btn btn-primary']) }}
                {{ Form::close() }}
            </div>
        </div>
    </div>
</div>
@endsection