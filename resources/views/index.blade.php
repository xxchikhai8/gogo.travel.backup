@extends('layouts.main')
@section('content')
@section('title', 'Home')
<div class="row" id="index-position">
    <div class="col-4" id="searchform">
        <h4> Search</h4>
        <h6> From</h6>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">@</span>
            <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
        </div>
        <h6> To</h6>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">@</span>
            <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
        </div>
        <h6> Departure Date</h6>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">@</span>
            <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
        </div>
        <h6> Seat Class</h6>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">@</span>
            <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
            <button type="button" id="search-button" class="btn btn-primary">Search Flights</button>
        </div>
    </div>
    <div class="col-8">
        <h4> Ticket List</h4>
        <div class="ticket">
            <h5>From Viet Nam to Japan</h5>
        </div>
    </div>
</div>
@endsection
