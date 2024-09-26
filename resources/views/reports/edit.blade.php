@extends('layouts.app')
@section('content')
<h3>Edit Report Form</h3>
<form action="/report/{{$report->id}}" method="POST">
    @csrf
    @method('PUT')
    Title : <input type="text" name="title" value="{{$report->title}}"><br>
    @if($errors->has('title'))<span>{{$errors->first('title')}}'</span>
    @endif 
    </br>
    Description : <textarea name="description">{{$report->description}}</textarea><br>
    @if($errors->has('description'))<span>{{$errors->first('description')}}'</span>
    @endif 
    </br>
    Priority: <select name="priority">
        <option value="{{$report->priority}}">{{$report->priority}}</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        </select><br>
    <input type="submit" value="Update">
    <input type="reset" value="Cancel"><br>
</form>
@endsection