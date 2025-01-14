@extends('layouts.app')
@section('content')

<form action="{{route('store_student')}}" method="POST">
    
    <div id="kt_app_content" class="app-content flex-column-fluid">
        @csrf
                        <!--begin::Content container-->
                        <div id="kt_app_content_container" class="">
                            <!--begin::Row-->
                            <div class="row g-5 g-xl-10">
                                <div class="col-xl-12">
                                    <div class="card ">
										<div class="card-header align-items-center px-3 min-h-50px">
											<h3 class=" mb-0">Create Registration</h3>
										</div>
										<div class="card-body p-3 pt-0">
											<div class="row">
												<!--begin::Col-->
                                                
												<div class="col-md-9 fv-row mb-5">
													<label class="form-label">User Name</label>
													<input type="text" name="name" id="inputName" class="form-control form-control-solid">
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col-md-9 fv-row mb-5">
													<label class="form-label">Password</label>
													<input type="password" name="password" id="inputPassword"class="form-control form-control-solid">
												</div>
                                                <!--end::Col-->
												<!--begin::Col-->
                                                <div class="col-md-9 fv-row mb-5">
													<label class="form-label">Email</label>
													<input type="text" name="email" id="inputEmail" class="form-control form-control-solid">
												</div>
												<!--end::Col-->
												<!--begin::Col-->
                                                <div class="col-md-9 fv-row mb-5">
													<label class="form-label">Date Of Birth</label>
													<input type="date" name="dateOfBirth" id="inputDateOfBirth" class="form-control form-control-solid">
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col-sm-9 fv-row mb-5">
													<label class="form-label">Role</label>
													<select name="role" class="form-select form-select-solid">
														<option value="student" selected="selected">Student</option>
														<option value="role">Teacher</option>
													</select>
												</div>
												<!--end::Col-->
											</div>
											<div class="mb-0 mt-1">
												<!--begin::Submit-->
												<button type="submit" class="btn btn-primary float-end mt-5">Submit</button>
                                                <a href="{{route('users')}}" class="btn btn-warning">Cancel</a>
												<!--end::Submit-->
											</div>
										</div>
									</div>
                                </div>
                            </div>
                            <!--end::Row-->

                        </div>
                        <!--end::Content container-->
                    </div>
</div>
@endsection