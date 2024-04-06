<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
@extends('template')
@section('content')
    <main id="main" class="main">
        <h3>List of Employees</h3>
        <section class="section profile">
        <div class="row">
            @foreach($employee as $item)
            <div class="col-sm-3">
                <div class="card rounded-4 ">
                    <img src="{{ asset('/uploaded_img/'.$item->employee_photo) }}" alt="Profile"  class="card-img-top" style="height: 280px;" >
                    <div class="card-body profile-card pt-2 d-flex flex-column align-items-start">
                        <h4 class="mt-2 mb-2 text-capitalize"> {{ $item->firstname }} {{ $item->lastname }}</h4>
                        <p class="text-capitalize"> {{ $item->employment_status }} -  {{ $item->job_title }}</p>
                        <p> {{ $item->email }}</p>
                        <p class="text-capitalize"> {{ $item->street }},  {{ $item->barangay }}, {{ $item->municipality }}</p>
                        <p class="text-capitalize"> {{ $item->civil_status }}</p>
                        <div class="text-start mt-2 mb-2">
                        <a class="btn btn-outline-primary" href="{{ url('edit_form/'.$item->id) }}">Edit Profile</a>
                        <a class="btn btn-outline-danger" href="{{ url('delete_records/'.$item->id) }}">Delete Profile</a>
                        <!-- <button type="submit" class="btn btn-outline-primary">Edit Profile</button>
                        <button type="submit" class="btn btn-outline-danger">Delete Profile</button> -->
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
</html>
