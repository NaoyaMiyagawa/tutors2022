<?php
$title = '投稿編集';
?>
@extends('admin.layouts.base')

@section('content')
  <div class="card-header">投稿編集</div>
  <div class="card-body">
    {!! Form::model($post, ['route' => ['admin.posts.update', $post], 'method' => 'put']) !!}

    @include('admin.posts._form')

    {!! Form::close() !!}
  </div>
@endsection
