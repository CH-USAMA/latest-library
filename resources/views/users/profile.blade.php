@extends('layouts.app')
@section('content')
<div class="kt-app-main-content d-flex flex-column app-container container-fluid">
	<!--begin::Toolbar-->
	<div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
		<!--begin::Toolbar container-->
		<div id="kt_app_toolbar_container" class="d-flex flex-stack w-100">
			<!--begin::Page title-->
			<div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
				<!--begin::Title-->
				<h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Students</h1>
				<!--end::Title-->
				<!--begin::Breadcrumb-->
				<ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
					<!--begin::Item-->
					<li class="breadcrumb-item text-muted">
						<a href={{route("dashboard")}} class="text-muted text-hover-primary">Home</a>
					</li>
					<!--end::Item-->
					<!--begin::Item-->
					<li class="breadcrumb-item">
						<span class="bullet bg-gray-400 w-5px h-2px"></span>
					</li>
					<!--end::Item-->
					<!--begin::Item-->
					<li class="breadcrumb-item text-muted">Teachers</li>
					<!--end::Item-->
					<!--begin::Item-->
					<li class="breadcrumb-item">
						<span class="bullet bg-gray-400 w-5px h-2px"></span>
					</li>
					<!--end::Item-->
					<!--begin::Item-->
					<li class="breadcrumb-item text-muted">List</li>
					<!--end::Item-->
				</ul>
				<!--end::Breadcrumb-->
			</div>
			<!--end::Page title-->
            <div class="d-flex align-items-center gap-2 gap-lg-3">
                <!--begin:: Add New-->
                <a href={{route("tform")}} class="btn btn-sm fw-bold btn-success" data-bs-toggle="modal" data-bs-target={{route("form")}}><i class="fa-solid fa-plus me-1 fs-4"></i>Add New</a>
                <!--end::Primary button-->

                <!--begin:: Export-->
                <a href="#" class="btn btn-sm fw-bold btn-info"><i class="fa-duotone fa-download me-1 fs-4"></i>Export</a>
                <!--end:: Export-->
            </div>
	   
		</div>
		<!--end::Toolbar container-->

	</div>


    <!--begin::Content-->
    <div id="kt_app_content" class="app-content flex-column-fluid">
        <!--begin::Content container-->
        <div id="kt_app_content_container" class="">
            <!--begin::Row-->
            <div class="row g-5 g-xl-10">
                <div class="col-xl-12">
                    <div class="card mb-5 mb-xl-10">
                        <div class="card-body p-5 pb-0">
                            <!--begin::Details-->
                            <div class="d-flex flex-wrap flex-sm-nowrap">
                                <!--begin: Pic-->
                                <div class="me-7 mb-4">
                                    <div class="symbol symbol-100px symbol-lg-160px symbol-fixed position-relative bg-light">
                                        <img src="assets/media/logo-1.svg" alt="image"/>
                                        <div class="position-absolute translate-middle bottom-0 start-100 mb-6 bg-success rounded-circle border border-4 border-body h-20px w-20px"></div>
                                    </div>
                                </div>
                                <!--end::Pic-->
                                <!--begin::Info-->
                                <div class="flex-grow-1">
                                    <!--begin::Title-->
                                    <div class="d-flex justify-content-between align-items-center flex-wrap mb-2">
                                        <!--begin::User-->
                                        <div class="d-flex flex-column">
                                            <!--begin::Name-->
                                            <div class="d-flex align-items-center">
                                                <a href="#"
                                                   class="text-gray-900 text-hover-primary fs-2 fw-bold me-2">Usama's Personal Detail</a>
                                                <div class="fs-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Active">
                                                    <span class="fa-layers fa-fw">
                                                        <i class="fa-duotone fa-badge text-success"></i>
                                                        <i class="fa-inverse fa-solid fa-check text-success ms-1 me-1" data-fa-transform="shrink-6"></i>
                                                    </span>
                                                </div>
                                            </div>
                                            <!--end::Name-->
                                            <!--begin::Info-->
                                            <div class="d-flex flex-wrap fw-semibold fs-6 mb-4 pe-2">
                                                <div class="d-flex align-items-center text-gray-400 mb-2 me-5" data-bs-toggle="tooltip" data-bs-placement="top" title="Username">
                                                    <i class="fa-duotone fa-circle-user fs-6 me-2"></i>
                                                    usama@gmail.com
                                                </div>
                                             
                                                <a href="#" class="d-flex align-items-center mb-2 text-danger" data-bs-toggle="tooltip" data-bs-placement="top" title="Bundle Expire">
                                                    <i class="fa-duotone fa-calendar fs-6 me-2"></i>
                                                    25-06-2023
                                                </a>
                                            </div>
                                            <!--end::Info-->
                                        </div>
                                        <!--end::User-->
                                       
                                    </div>
                                    <!--end::Title-->
                                    <!--begin::Stats-->
                                    <div class="d-flex flex-wrap flex-stack">
                                        <!--begin::Wrapper-->
                                        <div class="d-flex flex-column flex-grow-1 pe-8">
                                            <!--begin::Stats-->
                                            <div class="d-flex flex-wrap">
                                                <!--begin::Stat-->
                                                <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                                    <!--begin::Number-->
                                                    <div class="d-flex align-items-center">
                                                        <i class="fa-duotone fa-users fs-4 text-primary me-2"></i>
                                                        <div class="fs-2 fw-bold" data-kt-countup="true"
                                                             data-kt-countup-value="1000"
                                                             data-kt-countup-prefix="">0
                                                        </div>
                                                    </div>
                                                    <!--end::Number-->
                                                    <!--begin::Label-->
                                                    <div class="fw-semibold fs-6 text-gray-400">Books
                                                    </div>
                                                    <!--end::Label-->
                                                </div>
                                                <!--end::Stat-->
                                                <!--begin::Stat-->
                                                <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                                    <!--begin::Number-->
                                                    <div class="d-flex align-items-center">
                                                        <i class="fa-duotone fa-phone-arrow-down-left fs-4 text-success me-2"></i>
                                                        <div class="fs-2 fw-bold" data-kt-countup="true"
                                                             data-kt-countup-value="150"
                                                             data-kt-countup-suffix=" Min">0
                                                        </div>
                                                    </div>
                                                    <!--end::Number-->
                                                    <!--begin::Label-->
                                                    <div class="fw-semibold fs-6 text-gray-400">
                                                        Onnet Rem
                                                    </div>
                                                    <!--end::Label-->
                                                </div>
                                                <!--end::Stat-->
                                                <!--begin::Stat-->
                                                <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                                    <!--begin::Number-->
                                                    <div class="d-flex align-items-center">
                                                        <i class="fa-duotone fa-phone-arrow-up-right fs-4 text-danger me-2"></i>
                                                        <div class="fs-2 fw-bold" data-kt-countup="true"
                                                             data-kt-countup-value="200"
                                                             data-kt-countup-suffix=" Min">0
                                                        </div>
                                                    </div>
                                                    <!--end::Number-->
                                                    <!--begin::Label-->
                                                    <div class="fw-semibold fs-6 text-gray-400">
                                                        Offnet Rem
                                                    </div>
                                                    <!--end::Label-->
                                                </div>
                                                <!--end::Stat-->
                                            </div>
                                            <!--end::Stats-->
                                        </div>
                                        <!--end::Wrapper-->
                                    </div>
                                    <!--end::Stats-->
                                </div>
                                <!--end::Info-->
                            </div>
                            <!--end::Details-->
                            <div class="card mb-10" id="kt_profile_details_view">
                                <!--begin::Card header-->
                                <div class="card-header p-5 cursor-pointer">
                                    <!--begin::Card title-->
                                    <div class="card-title m-0">
                                        <h3 class="fw-bold m-0">Profile</h3>
                                    </div>
                                    <!--end::Card title-->
                                    <!--begin::Action-->
                                    <a class="company-edit-profile btn btn-sm btn-primary align-self-center">Edit
                                        Profile</a>
                                    <!--end::Action-->
                                </div>
                                <!--begin::Card header-->
                                <!--begin::Card body-->
                                <div class="card-body p-5">
                                    <!--begin::Input group-->
                                    <div class="row mb-7">
                                        <!--begin::Label-->
                                        <label class="col-lg-4 fw-semibold text-muted">Name</label>
                                        <!--end::Label-->
                                        <!--begin::Col-->
                                        <div class="col-lg-8 d-flex align-items-center">
                                            <span class="fw-bold fs-6 text-gray-800 me-2">Usama</span>
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="row mb-7">
                                        <!--begin::Label-->
                                        <label class="col-lg-4 fw-semibold text-muted">Age</label>
                                        <!--end::Label-->
                                        <!--begin::Col-->
                                        <div class="col-lg-8 d-flex align-items-center">
                                            <span class="fw-bold fs-6 text-gray-800 me-2">17-09-1998</span>
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="row mb-7">
                                        <!--begin::Label-->
                                        <label class="col-lg-4 fw-semibold text-muted required">Interests</label>
                                        <!--end::Label-->
                                        <!--begin::Col-->
                                        <div class="col-lg-8 d-flex align-items-center">
                                            <span class="fw-bold fs-6 text-gray-800 me-2">Reading,reading,reading</span>
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="row mb-7">
                                        <!--begin::Label-->
                                        <label class="col-lg-4 fw-semibold text-muted">Username
                                            <span class="ms-1" data-bs-toggle="tooltip"
                                                  title="it should be unique">
                                                        <i class="fa-duotone fa-circle-exclamation fs-7"></i>
                                                    </span>
                                        </label>
                                        <!--end::Label-->
                                        <!--begin::Col-->
                                        <div class="col-lg-8 d-flex align-items-center">
                                            <span class="fw-bold fs-6 text-gray-800 me-2">Usama</span>
                                            <span class="badge badge-light-success">Verified</span>
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="row mb-7">
                                        <!--begin::Label-->
                                        <label class="col-lg-4 fw-semibold text-muted">Password
                                            </label>
                                        <!--end::Label-->
                                        <!--begin::Col-->
                                        <div class="col-lg-8 d-flex align-items-center">
                                            <span class="fw-bold fs-6 text-gray-800 me-2">********</span>
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Input group-->
                                  
                                </div>
                                <!--end::Card body-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end::Row-->

        </div>
        <!--end::Content container-->
    </div>
    <!--end::Content-->

@endsection