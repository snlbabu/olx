@extends('layouts.app')

@section('nav')
@include('layouts.nav')
@endsection

@section('content')
<form >
<div class="row" style="padding-right: 40px; padding-left: 40px">
    <div class="col-md-12" style="border:1px solid lightblue">
        <h3>Submit a Free Classified Ad</h3>
    </div>
</div>
<div class="row" style="padding-right: 40px; padding-left: 40px">
    <div class="col-md-12" style="border:1px solid lightblue; border-top: 0px; padding-right: 180px; padding-left: 180px">
        
        <div class="row form-group" style="margin-top: 20px">
            <div class="col-md-4" style="text-align: right">
                <label for="title" >Ad Title*</label>
            </div>
            <div class="col-md-8">
                <input type="text" class="form-control" id="title">
                <p>70 characters left</p>
            </div>
        </div>
        <div class="row form-group">
            <div class="col-md-4" style="text-align: right">
                <label for="category" >Category*</label>
            </div>
            <div class="col-md-8">
                <select type="text" class="form-control" id="category">
                    <option>All categories </option>
                    <option>Properties </option>
                    <option>Used Cars </option>
                    <option>Furniture </option>
                    <option>Jobs </option>
                    <option>Electronics & Appliances </option>
                    <option>Mobiles </option>
                    <option>Bikes </option>
                    <option>Books, Sports & Hobbies</option>
                    <option>Fashion </option>
                    <option>Pets </option>
                    <option>Services </option>
                </select>
            </div>
        </div>
    </div>
</div>
<div class="row" style="padding-right: 40px; padding-left: 40px">
    <div class="col-md-12" style="border:1px solid lightblue; border-top: 0px; padding-right: 180px; padding-left: 180px">
        <div class="row form-group" style="margin-top: 20px">
            <div class="col-md-4" style="text-align: right;">
                <label for="description" >Ad Description*</label>
            </div>
            <div class="col-md-8">
                <textarea type="text" rows=7 style="width:100%" class="form-control" id="description"></textarea>
                <p>4096 characters left</p>
            </div>
        </div>
        <div class="row form-group">
            <div class="col-md-4" style="text-align: right">
                <label for="category" >Upload Photos*</label>
                <p>Ads with photos sell faster</p>
            </div>
            <div class="col-md-8">
                <select type="text" class="form-control" id="category">
                    <option>All categories </option>
                    <option>Properties </option>
                    <option>Used Cars </option>
                    <option>Furniture </option>
                    <option>Jobs </option>
                    <option>Electronics & Appliances </option>
                    <option>Mobiles </option>
                    <option>Bikes </option>
                    <option>Books, Sports & Hobbies</option>
                    <option>Fashion </option>
                    <option>Pets </option>
                    <option>Services </option>
                </select>
                <p>If you have problems with flash please usesimpler form</p>
            </div>
        </div>
    </div>
</div>
<div class="row" style="padding-right: 40px; padding-left: 40px">
    <div class="col-md-12" style="border:1px solid lightblue; border-top: 0px; padding-right: 180px; padding-left: 180px">
        <div class="row form-group" style="margin-top: 20px">
            <div class="col-md-4" style="text-align: right;">
                <label for="name" >Name*</label>
            </div>
            <div class="col-md-8">
                <input type="text" class="form-control" id="name">
            </div>
        </div>
        <div class="row form-group" style="margin-top: 20px">
            <div class="col-md-4" style="text-align: right;">
                <label for="phone" >Phone number*</label>
            </div>
            <div class="col-md-8">
                <input type="number" class="form-control" id="phone">
            </div>
        </div>
        <div class="row form-group" style="margin-top: 20px">
            <div class="col-md-4" style="text-align: right;">
                <label for="city" >Enter a city*</label>
            </div>
            <div class="col-md-8">
                <input type="text" class="form-control" id="city">
                <p>By clicking 'Submit' you agree to our Terms of Use & Posting Rules</p>
            </div>
        </div>
    </div>
</div>
<div class="row" style="padding-right: 40px; padding-left: 40px; margin-bottom: 100px">
    <div class="col-md-12" style="border:1px solid lightblue; border-top: 0px; padding:40px">
        <button class="btn btn-primary" style="float: right;">Submit</button>
    </div>
</div>

        </form>
@endsection
