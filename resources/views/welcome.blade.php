@extends('layouts.app')

@section('nav')
@include('layouts.nav')
@endsection

@section('filter')
@include('layouts.filter')
@endsection

@section('adcount')
@include('layouts.adcount')
@endsection

@section('bc')
@include('layouts.bc')
@endsection

@section('tab')
@include('layouts.tab')
@endsection

@section('content')
            
            <div class="row">
                <div class="col-md-12" style="padding: 0px;">
                    <h3 style="margin-bottom:0px">Featured Ads</h3>
                    <p><a style="text-decoration-line: none; cursor: pointer;">View all</a></p>
                </div>
            </div>
            <div class="row" style="border:1px solid red; padding: 10px">
                <div class="col-md-2" style="border:1px solid red; padding: 0px">
                    <img src="https://via.placeholder.com/100x100" class="media-object" style="width: 100%; height: 100%;">
                </div>
                <div class="col-md-10" style="border:1px solid red;">
                    <h4 class="media-heading" style="color:purple">Title of the posting</h4>
                    <p style="margin-bottom: 0px; color:grey">category >> SubCategory</p>
                    <p style="font-weight: bold">Area Name / City</p>
                    <div class="row" style="margin-top: 32px">
                        <div class="col-md-2" style="border:1px solid red;">
                            <p style="font-size: 12px">Time</p>
                        </div>
                        <div class="col-md-10" style="border:1px solid red;">
                            <img src="https://via.placeholder.com/100x50" class="media-object" style="float:right">
                        </div>
                    </div>
                </div>
            </div>
        
@endsection
