<?php
$title = '投稿登録';
?>
@extends('admin.layouts.base')

@section('content')
  <div class="card-header">{{ $title }}</div>

  <div class="card-body">
    {{ Form::open(['route' => 'admin.posts.store']) }}
    @include('admin.posts._form')
    {{ Form::close() }}
  </div>
@endsection
