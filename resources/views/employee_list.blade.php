<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css"integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
@extends('template')

@section('content')
    <main id="main" class="main">
        <script>
        @if(Session::has('success_message'))           
          toastr.success("{{ Session::get('success_message') }}")           
        @endif   
      </script>
        <h3>List of Employees</h3>
        <section class="section profile">
        <div class="row">
            @foreach($record as $item)
            <div class="col-sm-3 profile-card">
                <div class="card rounded-4">
                    <img src="{{ asset('/uploaded_img/'.$item->employee_photo) }}" alt="Profile"  class="card-img-top" style="height: 280px;" >
                    <div class="card-body pt-2 d-flex flex-column align-items-start">
                        <h4 class="mt-2 mb-2 text-capitalize"> {{ $item->firstname }} {{ $item->lastname }}</h4>
                        <p class="text-capitalize"> {{ $item->employment_status }} -  {{ $item->job_title }}</p>
                        <p> {{ $item->email }}</p>
                        <p class="text-capitalize"> {{ $item->street }},  {{ $item->barangay }}, {{ $item->municipality }}</p>
                        <p class="text-capitalize"> {{ $item->civil_status }}</p>
                        <div class="text-start mt-2 mb-2">
                        <a class="btn btn-outline-primary" href="{{ url('edit_form/'.$item->id) }}">Edit Profile</a>
                        <a class="btn btn-outline-danger" href="{{ url('delete_records/'.$item->id) }}"  onclick="return confirm('Are you sure?')">Delete Profile</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        </section>
    </main>
@endsection
</body>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="assets/js/main.js"></script>
</html>
