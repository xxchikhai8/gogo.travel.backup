@extends('enterprise.index');
@section('content')
@section('title', 'Enterprise Home')
@if (session('notify')=='enterprise')
    <script>
        Swal.fire({
            title: 'Sign In Successfull! Welcome Back.',
            icon: 'success',
            timer: 2000,
            showConfirmButton: false,
            allowOutsideClick: false,
        })
    </script>
@endif
@endsection
