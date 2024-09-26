@extends('layouts.app')
@section('content')
<h1> Report</h1>
@if(count($reports)>0)
<table class="table table-striped">
    <thead>
        <th>Report Title</th>
        <th>Report Description</th>
        <th>Report Priority</th>
        <th>Action</th>
    </thead>
    <tbody>
        @foreach($reports as $report)
        <tr>
            <td>{{$report->title}}</td>
            <td>{{$report->description}}</td>
            <td>{{$report->priority}}</td>
            <td><a href='/report/{{$report->id}}' class="btn btn-info">Details</a></td>
            <td><a href='/report/{{$report->id}}/edit' class="btn btn-warning">Edit</a></td>
                <td><form action="/report/{{$report->id}}" method="POST">
                    @method('delete')
                    @csrf
                    <input type="submit" value="Delete" onclick="return confirm('Áre you sure?')"class="btn btn-danger">
                </form></td>
            
        </tr>
        @endforeach
    </tbody>
</table>
@else
No Data
@endif
@endsection