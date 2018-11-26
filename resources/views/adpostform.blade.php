@extends('layouts.app')

@section('nav')
@include('layouts.nav')
@endsection

@section('content')
<form method="post" action="">
<div class="row" style="">
    <div class="col-md-12" style="border:1px solid lightblue">
        <h3>Submit a Free Classified Ad</h3>
    </div>
</div>
<div class="row" style="">
    <div class="col-md-12" style="border:1px solid lightblue; border-top: 0px; ">
        
        <div class="row form-group" style="margin-top: 20px">
            <div class="col-md-4" style="text-align: right">
                <label for="title" >Ad Title*</label>
            </div>
            <div class="col-md-6">
                <input type="text" class="form-control" id="title">
                <p>70 characters left</p>
            </div>
        </div>
        <div class="row form-group">
            <div class="col-md-4" style="text-align: right">
                <label for="cat1" >Category*</label>
            </div>
            <div class="col-md-6">
                <select type="text" name="cat1" id="cat1" class="form-control">
                    <option></option>
                    @foreach($cat['categories'] as $c)
                        <option value="{{$c}}">{{$c}} </option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="row form-group"  id="cat2d">
            <div class="col-md-4"></div>
            <div class="col-md-6">
                <select type="text" name="cat2" id="cat2" class="form-control">
                </select>
            </div>
        </div>
        <div class="row form-group" id="cat3d">
            <div class="col-md-4"></div>
            <div class="col-md-6">
                <select type="text" name="cat3" id="cat3" class="form-control">
                </select>
            </div>
        </div>
        <script>
            var cat = {!! json_encode($cat) !!}
            $("#cat2").hide();$("#cat3").hide();
            function path(title, cat1, cat2, cat3){
                const t = title.replace('&', '|and|');
                const c1 = cat1.replace( '&', '|and|');
                const c2 = cat2.replace( '&', '|and|');
                const c3 = cat3.replace( '&', '|and|');
                window.location.replace('{{ url('/adpostingform?cat1=') }}'+c1+'&cat2='+c2+'&cat3='+c3+'&title='+t);
            }
            $('#cat1').change(function(){
                $("#cat3").hide();
                let opt2 = "<option></option>";
                if(cat[$("#cat1").val()]){
                    for (var i = 0; i < cat[$("#cat1").val()].length; i++){
                        opt2 = opt2 + "<option>"+cat[$("#cat1").val()][i]+"</option>";
                    }
                    $('#cat2').show();
                    $("#cat2").html(opt2);
                }else{
                    $('#cat2').hide();$('#cat3').hide();
                    path($("#title").val(), $("#cat1").val(), "", "");
                }
            });
            $('#cat2').change(function(){
                let opt3 = "<option></option>";
                if(cat[$("#cat2").val()]){
                    for (var i = 0; i < cat[$("#cat2").val()].length; i++){
                        opt3 = opt3 + "<option>"+cat[$("#cat2").val()][i]+"</option>";
                    }
                    $('#cat3').show();
                    $("#cat3").html(opt3);
                }else{
                    $('#cat3').hide();
                    if($("#cat2").val()!=""){
                        path($("#title").val(), $("#cat1").val(), $("#cat2").val(), "");
                    }
                }
            });
            $('#cat3').change(function(){
                if($("#cat3").val()!=""){
                    path($("#title").val(), $("#cat1").val(), $("#cat2").val(), $("#cat3").val());
                }
            });


            $("#title").val('{!!$title!!}');
            $("#cat1").val('{!!$cat1!!}');
            @empty($cat2) @else
            let opt2 = "<option></option>";
            if(cat[$("#cat1").val()]){
                for (var i = 0; i < cat[$("#cat1").val()].length; i++){
                    opt2 = opt2 + "<option>"+cat[$("#cat1").val()][i]+"</option>";
                }
                $('#cat2').show();
                $("#cat2").html(opt2);
            }
            $("#cat2").val('{!!$cat2!!}');
            @endempty

            @empty($cat3) @else
            let opt3 = "<option></option>";
            if(cat[$("#cat2").val()]){
                for (var i = 0; i < cat[$("#cat2").val()].length; i++){
                    opt3 = opt3 + "<option>"+cat[$("#cat2").val()][i]+"</option>";
                }
                $('#cat3').show();
                $("#cat3").html(opt3);
            }
            $("#cat3").val('{!!$cat3!!}');
            @endempty

        </script>
    </div>
</div>
<div class="row" style="">
    <div class="col-md-12" style="border:1px solid lightblue; border-top: 0px; ">
        @include('layouts.form_options')
        <div class="row form-group" style="margin-top: 20px">
            <div class="col-md-4" style="text-align: right;">
                <label for="description" >Ad Description*</label>
            </div>
            <div class="col-md-6">
                <textarea type="text" rows=7 style="width:100%" class="form-control" id="description" placeholder="Include the brand/ model/ age and any other things in your specifications"></textarea>
                <p>4096 characters left</p>
            </div>
        </div>
        <div class="row form-group">
            <div class="col-md-4" style="text-align: right">
                <label for="category" >Upload Photos*</label>
                <p>Ads with photos sell faster</p>
            </div>
            <div class="col-md-6">
                        <label for="file1" style="padding:5px; background: #E8F4DE; border:1px solid #DFECD3; font-weight: bold; color:blue; font-size: 30px; text-align: center"><img src="https://via.placeholder.com/100x100"></label>
                        <input type="file" id="file1" style="display: none">
                        <label for="file2" style="padding:5px; background: #E8F4DE; border:1px solid #DFECD3; font-weight: bold; color:blue; font-size: 30px; text-align: center"><img src="https://via.placeholder.com/100x100"></label>
                        <input type="file" id="file2" style="display: none">
                        <label for="file3" style="padding:5px; background: #E8F4DE; border:1px solid #DFECD3; font-weight: bold; color:blue; font-size: 30px; text-align: center"><img src="https://via.placeholder.com/100x100"></label>
                        <input type="file" id="file3" style="display: none">
                        <label for="file4" style="padding:5px; background: #E8F4DE; border:1px solid #DFECD3; font-weight: bold; color:blue; font-size: 30px; text-align: center"><img src="https://via.placeholder.com/100x100"></label>
                        <input type="file" id="file4" style="display: none">
                <p>If you have problems with flash please usesimpler form</p>
            </div>
        </div>
    </div>
</div>
<div class="row" style="">
    <div class="col-md-12" style="border:1px solid lightblue; border-top: 0px; ">
        <div class="row form-group" style="margin-top: 20px">
            <div class="col-md-4" style="text-align: right;">
                <label for="name" >Name*</label>
            </div>
            <div class="col-md-6">
                <input type="text" class="form-control" id="name">
            </div>
        </div>
        <div class="row form-group" style="margin-top: 20px">
            <div class="col-md-4" style="text-align: right;">
                <label for="phone" >Phone number*</label>
            </div>
            <div class="col-md-6">
                <input type="number" class="form-control" id="phone">
            </div>
        </div>
        <div class="row form-group" style="margin-top: 20px">
            <div class="col-md-4" style="text-align: right;">
                <label for="city" >Enter a city*</label>
            </div>
            <div class="col-md-6">
                <input type="text" class="form-control" id="city">
                <p>By clicking 'Submit' you agree to our Terms of Use & Posting Rules</p>
            </div>
        </div>
    </div>
</div>
<div class="row" style="; margin-bottom: 100px">
    <div class="col-md-12" style="border:1px solid lightblue; border-top: 0px; padding:40px">
        <button class="btn btn-primary" style="float: right;">Submit</button>
    </div>
</div>

        </form>


<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content" style="border-radius: 3px; border:3px solid #ADD8E6">
        <div class="row">
            <div class="col-md-12">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <p>Heading</p>
            </div>
            <div class="col-md-4">
                <p>Heading</p>
            </div>
            <div class="col-md-4">
                <p>Heading</p>
            </div>
        </div>
    </div>

  </div>
</div>

@endsection
