@if ($cat1 === 'Jobs' || $cat1 == 'Services')
@else
<div class="row form-group" style="margin-top: 20px">
    <div class="col-md-4" style="text-align: right;">
        <label for="price" >Price*</label>
    </div>
    <div class="col-md-3">
        <input type="number" class="form-control" id="price">
    </div>
</div>
@endif

@if ($cat1 === 'Properties')
    
	@if ($cat3 == 'Land & Plots' || $cat3 == 'Shops & Offices' || $cat3 == 'PG & Roommates' || $cat3 == 'Guest Houses')
	@else
	<div class="row form-group" style="margin-top: 20px">
	    <div class="col-md-4" style="text-align: right;">
	        <label for="bedrooms" >Bedrooms*</label>
	    </div>
	    <div class="col-md-3">
	        <select class="form-control" id="bedrooms">
	        	<option>Choose</option>
	        	<option>1</option>
	        	<option>2</option>
	        	<option>3</option>
	        	<option>4</option>
	        	<option>4+</option>
	        </select>
	    </div>
	</div>
	<div class="row form-group" style="margin-top: 20px">
	    <div class="col-md-4" style="text-align: right;">
	        <label for="bathrooms" >Bathrooms*</label>
	    </div>
	    <div class="col-md-3">
	        <select class="form-control" id="bathrooms">
	        	<option>Choose</option>
	        	<option>1</option>
	        	<option>2</option>
	        	<option>3</option>
	        	<option>4</option>
	        	<option>4+</option>
	        </select>
	    </div>
	</div>
	@endif

	@if ($cat3 == 'PG & Roommates')
	<div class="row form-group" style="margin-top: 20px">
	    <div class="col-md-4" style="text-align: right;">
	        <label for="Subtype" >Subtype*</label>
	    </div>
	    <div class="col-md-3">
	        <select class="form-control" id="Subtype">
	        	<option>Choose</option>
	        	<option>PG</option>
	        	<option>Roommate</option>
	        </select>
	    </div>
	</div>
	@endif

	@if ($cat3 == 'Land & Plots' || $cat3 == 'Farm Houses')
	@else
	<div class="row form-group" style="margin-top: 20px">
	    <div class="col-md-4" style="text-align: right;">
	        <label for="furnishing" >Furnishing*</label>
	    </div>
	    <div class="col-md-3">
	        <select class="form-control" id="furnishing">
	        	<option>Choose</option>
	        	<option>Furnishing</option>
	        	<option>Unfurnishing</option>
	        	<option>Semi-Furnishing</option>
	        </select>
	    </div>
	</div>
	@endif
	@if ($cat3 == 'Land & Plots' || $cat2 == 'For Rent')
	@else
	<div class="row form-group" style="margin-top: 20px">
	    <div class="col-md-4" style="text-align: right;">
	        <label for="ConstructionStatus" >Construction Status*</label>
	    </div>
	    <div class="col-md-3">
	        <select class="form-control" id="ConstructionStatus">
	        	<option>Choose</option>
	        	<option>Under Construction</option>
	        	<option>Ready to Move</option>
	        	<option>New Launch</option>
	        </select>
	    </div>
	</div>
	@endif
	
	<div class="row form-group" style="margin-top: 20px">
	    <div class="col-md-4" style="text-align: right;">
	        <label for="ListedBy" >Listed By*</label>
	    </div>
	    <div class="col-md-3">
	        <select class="form-control" id="ListedBy">
	        	<option>Choose</option>
	        	<option>Owner</option>
	        	<option>Dealer</option>
	        	<option>Builder</option>
	        </select>
	    </div>
	</div>

	@if ($cat3 == 'Land & Plots' || $cat3 == 'PG & Roommates' || $cat3 == 'Guest Houses')
	@else
	<div class="row form-group" style="margin-top: 20px">
	    <div class="col-md-4" style="text-align: right;">
	        <label for="SuperBuiltuparea" >Super Builtup area*</label>
	    </div>
	    <div class="col-md-3" style="position: relative;">
	        <input type="number" class="form-control" id="SuperBuiltuparea" >
	        <span style="position: absolute;right:0px; top:5px">ft<sup>2</sup></span>
	    </div>
	</div>
	<div class="row form-group" style="margin-top: 20px">
	    <div class="col-md-4" style="text-align: right;">
	        <label for="CarpetArea" >Carpet Area*</label>
	    </div>
	    <div class="col-md-3" style="position: relative;">
	        <input type="number" class="form-control" id="CarpetArea" >
	        <span style="position: absolute;right:0px; top:5px">ft<sup>2</sup></span>
	    </div>
	</div>
	@endif

	@if (($cat3 == 'Apartments' || $cat3 == 'Houses & Villas' || $cat3 == 'Builder Floors') && $cat2 == 'For Rent')
	<div class="row form-group" style="margin-top: 20px">
	    <div class="col-md-4" style="text-align: right;">
	        <label for="BachelorsAllowed" >Bachelors Allowed</label>
	    </div>
	    <div class="col-md-3">
	        <select class="form-control" id="Bachelors Allowed">
	        	<option>Choose</option>
	        	<option>Yes</option>
	        	<option>No</option>
	        </select>
	    </div>
	</div>
	@endif

	@if ($cat3 == 'Land & Plots' || $cat3 == 'PG & Roommates' || $cat3 == 'Guest Houses' || $cat3 == 'Farm Houses')
	@else
	<div class="row form-group" style="margin-top: 20px">
	    <div class="col-md-4" style="text-align: right;">
	        <label for="Maintenance" >Maintenance (Monthly)</label>
	    </div>
	    <div class="col-md-3" style="position: relative;">
	        <input type="number" class="form-control" id="Maintenance" >
	        <span style="position: absolute;right:0px; top:5px">/-</span>
	    </div>
	</div>
	@endif

	@if ($cat3 == 'Land & Plots' || $cat3 == 'PG & Roommates' || $cat3 == 'Guest Houses' || $cat3 == 'Shops & Offices')
	@else
	<div class="row form-group" style="margin-top: 20px">
	    <div class="col-md-4" style="text-align: right;">
	        <label for="TotalFloors" >Total Floors</label>
	    </div>
	    <div class="col-md-3" >
	        <input type="number" class="form-control" id="TotalFloors" >
	    </div>
	</div>
	@endif

	@if ($cat3 == 'Apartments' || $cat3 == 'Builder Floors')
	<div class="row form-group" style="margin-top: 20px">
	    <div class="col-md-4" style="text-align: right;">
	        <label for="FloorNo" >Floor No</label>
	    </div>
	    <div class="col-md-3" >
	        <input type="number" class="form-control" id="FloorNo" >
	    </div>
	</div>
	@endif

	@if ($cat3 == 'Land & Plots' || $cat3 == 'PG & Roommates' || $cat3 == 'Farm Houses')
	@else
	<div class="row form-group" style="margin-top: 20px">
	    <div class="col-md-4" style="text-align: right;">
	        <label for="CarParking" >Car Parking</label>
	    </div>
	    <div class="col-md-3" >
	        <select class="form-control" id="CarParking">
	        	<option>Choose</option>
	        	<option>1</option>
	        	<option>2</option>
	        	<option>3</option>
	        	<option>3+</option>
	        </select>
	    </div>
	</div>
	@endif

	@if ($cat3 == 'Land & Plots')
	<div class="row form-group" style="margin-top: 20px">
	    <div class="col-md-4" style="text-align: right;">
	        <label for="PlotArea" >Plot Area*</label>
	    </div>
	    <div class="col-md-3" style="position: relative;">
	        <input type="number" class="form-control" id="PlotArea" >
	        <span style="position: absolute;right:-5px; top:5px">yd<sup>2</sup></span>
	    </div>
	</div>
	<div class="row form-group" style="margin-top: 20px">
	    <div class="col-md-4" style="text-align: right;">
	        <label for="Length" >Length*</label>
	    </div>
	    <div class="col-md-3" style="position: relative;">
	        <input type="number" class="form-control" id="Length" >
	        <span style="position: absolute;right:0px; top:5px">yd</span>
	    </div>
	</div>
	<div class="row form-group" style="margin-top: 20px">
	    <div class="col-md-4" style="text-align: right;">
	        <label for="Breadth" >Breadth*</label>
	    </div>
	    <div class="col-md-3" style="position: relative;">
	        <input type="number" class="form-control" id="Breadth" >
	        <span style="position: absolute;right:0px; top:5px">yd</span>
	    </div>
	</div>
	@endif

	@if ($cat3 == 'Farm Houses' || $cat3 == 'PG & Roommates' || $cat3 == 'Guest Houses' || $cat3 == 'Shops & Offices')
	@else
	<div class="row form-group" style="margin-top: 20px">
	    <div class="col-md-4" style="text-align: right;">
	        <label for="Facing" >Facing</label>
	    </div>
	    <div class="col-md-3" >
	        <select class="form-control" id="Facing">
	        	<option>Choose</option>
	        	<option>East</option>
	        	<option>West</option>
	        	<option>North</option>
	        	<option>South</option>
	        	<option>North-East</option>
	        	<option>North-West</option>
	        	<option>South-East</option>
	        	<option>South-West</option>
	        </select>
	    </div>
	</div>
	@endif

	@if ($cat3 == 'Shops & Offices')
	<div class="row form-group" style="margin-top: 20px">
	    <div class="col-md-4" style="text-align: right;">
	        <label for="Washrooms" >Washrooms</label>
	    </div>
	    <div class="col-md-3">
	        <input type="text" class="form-control" id="Washrooms">
	    </div>
	</div>
	@endif

	@if ($cat3 == 'Houses & Villas' || $cat3 == 'Farm Houses' || $cat3 == 'PG & Roommates' || $cat3 == 'Guest Houses' || ($cat3 == 'Shops & Offices' && $cat2 == 'For Sale'))
	@else
	<div class="row form-group" style="margin-top: 20px">
	    <div class="col-md-4" style="text-align: right;">
	        <label for="ProjectName" >Project Name</label>
	    </div>
	    <div class="col-md-3">
	        <input type="text" class="form-control" id="ProjectName">
	    </div>
	</div>
	@endif

	@if ($cat3 == 'PG & Roommates')
	<div class="row form-group" style="margin-top: 20px">
	    <div class="col-md-4" style="text-align: right;">
	        <label for="MealsIncluded" >Meals Included</label>
	    </div>
	    <div class="col-md-3">
	        <select class="form-control" id="MealsIncluded">
	        	<option>Choose</option>
	        	<option>Yes</option>
	        	<option>No</option>
	        </select>
	    </div>
	</div>
	@endif

@elseif ($cat1 === 'Used Cars')
	
	@if ($cat2 == 'Cars')
	<div class="row form-group" style="margin-top: 20px">
	    <div class="col-md-4" style="text-align: right;">
	        <label for="Model" >Model*</label>
	    </div>
	    <div class="col-md-3">
	        <select class="form-control" id="Model">
	        	<option>Choose</option>
	        	@foreach($models as $model)
	        	<option>{{$model}}</option>
	        	@endforeach
	        </select>
	    </div>
	</div>
	@endif
	
	@if ($cat2 == 'Cars' || $cat2 == 'Commercial Vehicles')
	<div class="row form-group" style="margin-top: 20px">
	    <div class="col-md-4" style="text-align: right;">
	        <label for="Year" >Year*</label>
	    </div>
	    <div class="col-md-3">
	        <input type="number" class="form-control" id="Year">
	    </div>
	</div>
	@endif

	@if ($cat2 == 'Cars')
	<div class="row form-group" style="margin-top: 20px">
	    <div class="col-md-4" style="text-align: right;">
	        <label for="Fuel" >Fuel*</label>
	    </div>
	    <div class="col-md-3">
	        <select class="form-control" id="Fuel">
	        	<option>Choose</option>
	        	<option>Petrol</option>
	        	<option>Diesel</option>
	        	<option>LPG</option>
	        	<option>CNG & Hybrids</option>
	        </select>
	    </div>
	</div>
	@endif

	@if ($cat2 == 'Cars' || $cat2 == 'Commercial Vehicles')
	<div class="row form-group" style="margin-top: 20px">
	    <div class="col-md-4" style="text-align: right;">
	        <label for="driven" >KM Driven*</label>
	    </div>
	    <div class="col-md-3">
	        <input type="number" class="form-control" id="driven">
	    </div>
	</div>
	@endif

@elseif ($cat1 === 'Jobs')
	<div class="row form-group" style="margin-top: 20px">
	    <div class="col-md-4" style="text-align: right;">
	        <label for="TypeofJob" >Type of Job*</label>
	    </div>
	    <div class="col-md-3">
	        <label><input type="radio" id="TypeofJob" name="optradio" checked>Offering job</label>
	        <label><input type="radio" name="optradio" >Seeking job</label>
	    </div>
	</div>

	<div class="row form-group" style="margin-top: 20px">
	    <div class="col-md-4" style="text-align: right;">
	        <label for="Salaryperiod" >Salary period*</label>
	    </div>
	    <div class="col-md-3">
	        <select class="form-control" id="Salaryperiod">
	        	<option>Choose</option>
	        	<option>Hourly</option>
	        	<option>Weekly</option>
	        	<option>Monthly</option>
	        	<option>Yearly</option>
	        </select>
	    </div>
	</div>

	<div class="row form-group" style="margin-top: 20px">
	    <div class="col-md-4" style="text-align: right;">
	        <label for="Salaryrange" >Salary range</label>
	    </div>
	    <div class="col-md-3">
	        <input type='number' class="form-control" id="Salaryrange" placeholder="From"> - <input type='number' class="form-control" id="Salaryrange" placeholder="To">
	    </div>
	</div>

	<div class="row form-group" style="margin-top: 20px">
	    <div class="col-md-4" style="text-align: right;">
	        <label for="Positiontype" >Position type*</label>
	    </div>
	    <div class="col-md-3">
	        <select class="form-control" id="Positiontype">
	        	<option>Choose</option>
	        	<option>Full-time</option>
	        	<option>Part-time</option>
	        	<option>Contract</option>
	        	<option>Temporary</option>
	        </select>
	    </div>
	</div>

@elseif ($cat1 === 'Bikes')
	
	<div class="row form-group" style="margin-top: 20px">
	    <div class="col-md-4" style="text-align: right;">
	        <label for="Model" >Model*</label>
	    </div>
	    <div class="col-md-3">
	        <select class="form-control" id="Model">
	        	<option>Choose</option>
	        	@foreach($models as $model)
	        	<option>{{$model}}</option>
	        	@endforeach
	        </select>
	    </div>
	</div>
	
	<div class="row form-group" style="margin-top: 20px">
	    <div class="col-md-4" style="text-align: right;">
	        <label for="Year" >Year*</label>
	    </div>
	    <div class="col-md-3">
	        <input type="number" class="form-control" id="Year">
	    </div>
	</div>

	<div class="row form-group" style="margin-top: 20px">
	    <div class="col-md-4" style="text-align: right;">
	        <label for="driven" >KM Driven*</label>
	    </div>
	    <div class="col-md-3">
	        <input type="number" class="form-control" id="driven">
	    </div>
	</div>

@else
    
@endif
