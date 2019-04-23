@extends('layouts.app');

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">Edit Listing <a href="/dashboard" class="float-right btn btn-primary btn-xs">Go back</a></div>

            <div class="card-body">
                {{ Form::open(['action' => ['ListingsController@update', $listing->id], 'method' => 'POST']) }}
                    {{ Form::bsText('name', $listing->name, ['placeholder'=>'Company name']) }}
                    {{ Form::bsText('website', $listing->website, ['placeholder'=>'Company website']) }}
                    {{ Form::bsText('email', $listing->email, ['placeholder'=>'Contact email']) }}
                    {{ Form::bsText('phone', $listing->phone, ['placeholder'=>'Contact phone']) }}
                    {{ Form::bsText('address', $listing->address, ['placeholder'=>'Bussiness address']) }}
                    {{ Form::bsTextArea('bio', $listing->bio, ['placeholder'=>'About this bussiness location']) }}
                    {{ Form::hidden('_method', 'PUT') }}
                    {{ Form::bsSubmit('Submit', ['class' => 'btn btn-primary']) }}
                {{ Form::close() }}
            </div>
        </div>
    </div>
</div>
@endsection