@extends('layouts.app')

@section('content')
<div class="container">

    <h1>Edit Pricing Rate</h1>

    {!! Form::model($pricingrate, [
        'method' => 'PATCH',
        'url' => ['/pricing-rates', $pricingrate->id],
        'class' => 'form-horizontal'
    ]) !!}

                <div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
                {!! Form::label('name', 'Name', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('name', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('pricing_models_id') ? 'has-error' : ''}}">
                {!! Form::label('pricing_models_id', 'Pricing Model', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                   {!! Form::select('pricing_models_id', $pricingModels,null, ['class' => 'form-control']) !!}
                    {!! $errors->first('pricing_models_id', '<p class="help-block">:message</p>') !!}
                </div>
            </div>


    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-3">
            {!! Form::submit('Update', ['class' => 'btn btn-primary form-control']) !!}
        </div>
    </div>
    {!! Form::close() !!}

    @if ($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

</div>
@endsection