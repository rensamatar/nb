@extends('admin.layouts.app')

@section('content')

<h2>Create</h2>

{!! Form::open(array('url' => 'activities')) !!}

@include('admin.activity.form', array('buttonText' => 'Add activity'))

{!! Form::close() !!}

@stop