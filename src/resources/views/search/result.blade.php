@extends('web::layouts.grids.12')

@section('title', trans('web::seat.search'))
@section('page_header', trans('web::seat.search'))
@section('page_description', trans('web::seat.search'))

@section('full')

  @include('web::search.components.character')

  @include('web::search.components.corporation')

  @include('web::search.components.mail')

@stop
