
<div>
    @extends('template')

    @section('content')
    <main id="main" class="main">
    <section class="section profile">
    <div class="row">
        <div class="col-sm-10">
            <div class="card">
                <div class="card-body pt-3">
                    <div class="tab-pane  profile-edit pt-3" id="profile-edit">
                <!-- Profile Edit Form -->
                        <form  method="post" action="{{ url('update_records') }}"  enctype="multipart/form-data">
                        @csrf
                        <input type="text" name="employee_id" value="{{ $employee->id }}"/> 
                        <div class="row mb-3">
                            <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Profile Image</label>
                            <div class="col-md-8 col-lg-9">
                            <img src="" alt="Profile">
                            <!-- <div class="pt-2">
                                <a href="#" class="btn btn-primary btn-sm" title="Upload new profile image"><i class="bi bi-upload"></i></a>
                                <a href="#" class="btn btn-danger btn-sm" title="Remove my profile image"><i class="bi bi-trash"></i></a>
                            </div> -->
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="firstname" class="col-md-4 col-lg-3 col-form-label">First Name<span class="text-danger">*</span></label>
                            <div class="col-md-8 col-lg-9">
                            <input name="firstname" type="text" class="form-control"  value="">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="middlename" class="col-md-4 col-lg-3 col-form-label">Middle Name<span class="text-danger">*</span></label>
                            <div class="col-md-8 col-lg-9">
                            <input name="middlename" type="text" class="form-control"  value="">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="lastname" class="col-md-4 col-lg-3 col-form-label">Last Name<span class="text-danger">*</span></label>
                            <div class="col-md-8 col-lg-9">
                            <input name="lastname" type="text" class="form-control"  value="">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="dateofbirth" class="col-md-4 col-lg-3 col-form-label">Date of Birth<span class="text-danger">*</span></label>
                            <div class="col-md-8 col-lg-9">
                            <input name="bday" type="date" class="form-control" id="bday" value="">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="inputState" class="col-md-4 col-lg-3 col-form-label">Civil Status<span class="text-danger">*</span></label>
                            <div class="col-md-8 col-lg-9">
                            <select id="inputState" name="civilstatus" class="form-select" required>
                                <option>Single</option>
                                <option>Married</option>
                                <option>Widowed</option>
                                <option>Divorced</option>
                            </select>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="emial" class="col-md-4 col-lg-3 col-form-label">Email<span class="text-danger">*</span></label>
                            <div class="col-md-8 col-lg-9">
                            <input name="email" type="text" class="form-control" id="Email" value="">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="street" class="col-md-4 col-lg-3 col-form-label">Street<span class="text-danger">*</span></label>
                            <div class="col-md-8 col-lg-9">
                            <input name="street" type="text" class="form-control" id="street" value="">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="Barangay" class="col-md-4 col-lg-3 col-form-label">Barangay<span class="text-danger">*</span></label>
                            <div class="col-md-8 col-lg-9">
                            <input name="barangay" type="text" class="form-control" id="barangay" value="" required>
                            </div>         
                        </div>

                        <div class="row mb-3">
                            <label for="inputState" class="col-md-4 col-lg-3 col-form-label">Municipality<span class="text-danger">*</span></label>
                            <div class="col-md-8 col-lg-9">
                            <select id="inputState" name="municipality" class="form-select" required>
                                <option>Bulusan</option>
                                <option>Bulan</option>
                                <option>Barcelona</option>
                                <option>Casiguran</option>
                                <option>Castilla</option>
                                <option>Donsol</option>
                                <option>Gubat</option>
                                <option>Irosin</option>
                                <option>Juban</option>
                                <option>Magallanes</option>
                                <option>Matnog</option>
                                <option>Pilar</option>
                                <option>Prieto Diaz</option>
                                <option>Santa Magdalena</option>
                                <option>Sorsogon City</option>
                            </select>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="zipcode" class="col-md-4 col-lg-3 col-form-label">Zip Code<span class="text-danger">*</span></label>
                            <div class="col-md-8 col-lg-9">                               
                            <input type="text" name="zipcode" class="form-control" id="inputZip" value="" required>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="jogbtitle" class="col-md-4 col-lg-3 col-form-label">Job <span class="text-danger">*</span></label>
                            <div class="col-md-8 col-lg-9">
                            <input type="text" name="jobtitle" class="form-control" value="" required>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="salary" class="col-md-4 col-lg-3 col-form-label">Salary<span class="text-danger">*</span></label>
                            <div class="col-md-8 col-lg-9">
                            <input type="text" name="salary"class="form-control" value="" required>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="inputemploymentstatus" class="col-md-4 col-lg-3 col-form-label">Employment Status<span class="text-danger">*</span></label>
                            <div class="col-md-8 col-lg-9">
                            <select id="inputemploymentstatus" name="employementstatus" class="form-select" required>
                                <option>Full Time</option>
                                <option>Partime</option>
                                <option>Contract</option>
                            </select>
                            </div>  
                        </div>


                        <div class="text-center mt-2">
                            <button type="submit" class="btn btn-primary">Save Changes</button>
                        </div>
                        </form><!-- End Profile Edit Form -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>
    </main>
    @endsection
</div>
</html>