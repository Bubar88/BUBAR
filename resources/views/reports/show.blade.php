@extends('layouts.app')
@section('content')
<hl>Report Details</hl>
    Report Title : {{$report->title}} <br>
    Report Description :
    {{$report->description}} <br>
    Report Title : {{$report->priority }}
    <small><br>Created at :
    {{$report->created_at}}</small>
    <small><br>Update at :
    {{$report->updated_at}}</small>
    <br>
    @endsection