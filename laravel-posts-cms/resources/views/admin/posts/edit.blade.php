<?php
$title = '投稿編集';
?>
@extends('admin.layouts.base')

@section('content')
  <div class="card-header">投稿編集</div>
  <table class="table">
    <tr>
      <th>編集者</th>
      <td>{{ $post->user->name }}</td>
      </tr>
    <tr>
      <th>登録日時</th>
      <td>{{ $post->created_at }}</td>
      </tr>
    <tr>
      <th>編集日時</th>
      <td>{{ $post->updated_at }}</td>
      </tr>
  </table>
  <div class="card-body">
    {!! Form::model($post, ['route' => ['admin.posts.update', $post], 'method' => 'put']) !!}

    @include('admin.posts._form')

    {!! Form::close() !!}
  </div>
@endsection
