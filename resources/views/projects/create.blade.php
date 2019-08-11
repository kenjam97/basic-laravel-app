@extends('layout')

@section('title')
    Create A Project
@endsection

@section('content')
    <h1>Create A Project</h1>
    <form method="POST" action="/projects">
      {{ csrf_field() }}
      <div>
        <input type="text" name="title" placeholder="Project Title">
      </div>
      <div>
        <textarea name="description" placeholder="Project Description..."></textarea>
      </div>
      <div>
        <button>Create Project</button>
      </div>
    </form>
@endsection