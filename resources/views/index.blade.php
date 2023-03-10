@extends('layouts.main')
@section('content')
@section('title', 'Home')
<div class="row row-cols-1 row-cols-lg-2 g-3">
    <div class="col">
        <div class="shadow-lg rounded-3 border p-3">
            <h4>Search</h4>
            <h6>From</h6>
            <div class="mb-3">
                <input type="text" class="form-control" placeholder="From" aria-label="From"
                    aria-describedby="basic-addon1">
            </div>
            <h6>To</h6>
            <div class="mb-3">
                <input type="text" class="form-control" placeholder="To" aria-label="To"
                    aria-describedby="basic-addon1">
            </div>
            <h6>Departure Date</h6>
            <div class="mb-3">
                <input type="text" class="form-control" placeholder="Departure" aria-label="Departure"
                    aria-describedby="basic-addon1">
            </div>
            <button type="button" id="search-button" class="btn btn-primary d-block ms-auto">Search flights</button>
        </div>
    </div>
    <div class="col">
        <div class="p-3">
            <h4>Ticket List</h4>
            <h5 class="border border-dark p-2 rounded-2">From Viet Nam to Japan</h5>
        </div>
    </div>
</div>
@if (session('notify') == '0')
    <script>
        Swal.fire({
            title: 'Sign In Successfull',
            icon: 'success',
            timer: 2000,
            showConfirmButton: false,
            allowOutsideClick: false,
        })
    </script>
@endif
@if (session('notify') == '1')
                <script>
                    Swal.fire({
                        title: 'Sign In Failed!',
                        icon: 'error',
                        allowOutsideClick: false,
                    })
                </script>
            @endif
            @if (session('notify') == '2')
                <script>
                    Swal.fire({
                        title: 'Sign Out Successfull',
                        icon: 'success',
                        timer: 2000,
                        showConfirmButton: false,
                        allowOutsideClick: false,
                    })
                </script>
            @endif

@endsection
