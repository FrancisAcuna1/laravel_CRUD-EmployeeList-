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
        @elseif(Session::has('error_message'))     
          toastr.error("{{ Session::get('error_message') }}")   
        @endif   
      </script>
        <div class="card">
            <div class="card-body">
              <h5 class="card-title">Add Employees</h5>
              <form class="row g-3" action="add" method="post" enctype="multipart/form-data">
                @csrf
                <div class="col-md-4">
                  <label for="inputName5" class="form-label">Your FirstName <span class="text-danger">*</span></label>
                  <input type="text" name="firstname" class="form-control" id="inputName5" required>
                </div>
                <div class="col-md-4">
                  <label for="inputName5" class="form-label">Your MiddleName</label>
                  <input type="text" name="middlename" class="form-control" id="inputName5">
                </div>
                <div class="col-md-4">
                  <label for="inputName5" class="form-label">Your LastName <span class="text-danger">*</span></label>
                  <input type="text" name="lastname" class="form-control" id="inputName5" required>
                </div>
                <div class="col-md-6">
                  <label for="inputEmail5" class="form-label">Date of Birth<span class="text-danger">*</span></label>
                  <input type="date" name="bday" class="form-control" id="inputEmail5" required>
                </div>
                <div class="col-md-6">
                  <label for="inputState" class="form-label">Civil Status<span class="text-danger">*</span></label>
                  <select id="inputState" name="civilstatus" class="form-select" required>
                    <option selected>Choose...</option>
                    <option>Single</option>
                    <option>Married</option>
                    <option>Widowed</option>
                    <option>Divorced</option>
                  </select>
                </div>
                <div class="col-md-12">
                  <label for="inputEmail5" class="form-label">Email<span class="text-danger">*</span></label>
                  <input type="email" name="email" class="form-control" id="inputEmail5" required>
                </div>
                <div class="col-md-3">
                  <label for="inputstreet" class="form-label">Street<span class="text-danger">*</span></label>
                  <input type="text" name="street" class="form-control" id="inputCity" required>
                </div>
                <div class="col-md-3">
                  <label for="inputbarangay" class="form-label">Barangay<span class="text-danger">*</span></label>
                  <input type="text" name="barangay" class="form-control" id="inputCity" required>
                </div>
                <div class="col-md-4">
                  <label for="inputState" class="form-label">Municipality<span class="text-danger">*</span></label>
                  <select id="inputState" name="municipality" class="form-select" required>
                    <option selected>Choose...</option>
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
                <div class="col-md-2">
                  <label for="inputZip" class="form-label">Zip Code<span class="text-danger">*</span></label>
                  <input type="text" name="zipcode"class="form-control" id="inputZip" required>
                </div>
                <div class="col-md-3">
                  <label for="inputjogtitle" class="form-label">Job Title<span class="text-danger">*</span></label>
                  <input type="text" name="jobtitle"class="form-control" required>
                </div>
                <div class="col-md-3">
                  <label for="inputsalary" class="form-label">Salary<span class="text-danger">*</span></label>
                  <input type="text" name="salary"class="form-control" required>
                </div>
                <div class="col-md-4">
                  <label for="inputemploymentstatus" class="form-label">Employment Status<span class="text-danger">*</span></label>
                  <select id="inputemploymentstatus" name="employmentstatus" class="form-select" required>
                    <option selected>Choose...</option>
                    <option>Full Time</option>
                    <option>Partime</option>
                    <option>Contract</option>
                  </select>
                </div>
                <div class="col-md-2">
                  <label for="inputsalary" class="form-label">Client Photo<span class="text-danger">*</span></label>
                  <input type="file" name="photo"class="form-control" accept=".gif,.jpg,.jpeg,.png,.svg," required>
                </div>
                <div class="text-start mt-4 mb-2">
                  <button type="submit" class="btn btn-primary ">Submit</button>
                  <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
              </form><!-- End Multi Columns Form -->

            </div>
        </div>
  <main>
@endsection

</body>
  <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</html>