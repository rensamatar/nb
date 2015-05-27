@extends('admin.layouts.app')

@section('content')

<h2>Edit</h2>

{!! Form::model($activity, ['method' => 'PATCH', 'action' => ['Admin\ActivityController@update', $activity->id ]]) !!}

@include('admin.activity.form', array('buttonText' => 'Edit activity'))

{!! Form::close() !!}

@stop