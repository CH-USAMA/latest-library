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
                        <a href="index.html" class="text-muted text-hover-primary">Home</a>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-400 w-5px h-2px"></span>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-muted">Students</li>
                    <!--end::Item-->
                </ul>
                <!--end::Breadcrumb-->
            </div>
            <!--end::Page title-->

       
        </div>
        <!--end::Toolbar container-->

    </div>
    <!--end::Toolbar-->
    <!--begin::Content-->
    <div id="kt_app_content" class="app-content flex-column-fluid">
        <!--begin::Content container-->
        <div id="kt_app_content_container" class="">
        <!--begin::Row-->
    <div class="row g-5 g-xl-10">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body p-5">
                    <div class="form-group d-flex align-items-center gap-2 mb-5">
                        <label class="fs-6 fw-semibold">Search:</label>
                        <input class="form-control form-control-solid w-250px">
                    </div>
                    <div class="table-responsive">
                        <!--begin::Table-->
                        <table id="kt_datatable_both_scrolls" class="table table-row-bordered gy-5 gs-7 mb-0">
                            <!--begin::Table head-->
                            <thead class="table-light">
                            <tr class="fw-bold text-muted">
                                <th class="ps-3">Student Name</th>
                                <th class="">Teacher</th>
                                <th class="">Reading Level</th>
                                <th class="">Age</th>
                                <th class="">Details</th>
                                <th class="">Status</th>
                                <th class="pe-3 text-end">View</th>
                            </tr>
                            </thead>
                            <!--end::Table head-->
                            <!--begin::Table body-->
                            <tbody>
                            <tr>
                                <td class="align-middle ps-3">
                                    <div class="d-flex align-items-center">
                                        <div class="symbol symbol-50px me-3 bg-light">
                                            <img src="assets/media/svg/avatars/001-boy.svg"
                                                 class="" alt=""/>
                                        </div>
                                        <div class="d-flex justify-content-start flex-column">
                                            <a href="company-view.html"
                                               class="text-gray-800 fw-bold text-hover-primary fs-6">Student 1</a>
                                            <span class="text-gray-400 fw-semibold 1d-block fs-7">xxxxxx ID</span>
                                        </div>
                                    </div>
                                </td>
                                <td class="align-middle">
                                    <div class="text-dark fw-bold d-block">Teacher 1</div>
                                </td>
                                <td class="align-middle">
                                    <div class="text-dark fw-bold d-block">KS1</div>
                                </td>
                                <td class="align-middle">
                                    <div class="text-dark fw-bold">17 Years</div>
                                    <span class="text-muted fw-semibold cursor-pointer"
                                          data-bs-toggle="tooltip" title="Create Date">20-05-1998</span>
                                </td>
                                <td class="align-middle">
                                    <div class="package-bundle">
                                        <div hidden>
                                            <div data-name="popover-bundle-content" class="position-relative">
                                                
                                                <!--begin::Item-->
                                                <div class="d-flex align-items-center mb-3">
                                                    <!--begin::Symbol-->
                                                    <span class="me-3">
                                                        <i class="fa-duotone fa-messages fs-4 text-warning"></i>
                                                    </span>
                                                    <!--end::Symbol-->
                                                    <!--begin::Description-->
                                                    <div class="d-flex align-items-center flex-wrap w-100">
                                                        <!--begin::Title-->
                                                        <div class="pe-3 flex-grow-1">
                                                            <a href="#"
                                                               class="fs-6 text-gray-800 text-hover-primary fw-bold">Animals</a>
                                                        </div>
                                                        <!--end::Title-->
                                                      
                                                    </div>
                                                    <!--end::Description-->
                                                </div>
                                                <!--end::Item-->

                                                <!--begin::Item-->
                                                <div class="d-flex align-items-center mb-3">
                                                    <!--begin::Symbol-->
                                                    <span class="me-3">
                                                        <i class="fa-duotone fa-users fs-4 text-primary"></i>
                                                    </span>
                                                    <!--end::Symbol-->
                                                    <!--begin::Description-->
                                                    <div class="d-flex align-items-center flex-wrap w-100">
                                                        <!--begin::Title-->
                                                        <div class="pe-3 flex-grow-1">
                                                            <a href="#"
                                                               class="fs-6 text-gray-800 text-hover-primary fw-bold">Adventure</a>
                                                        </div>
                                                        <!--end::Title-->
                                                       
                                                    </div>
                                                    <!--end::Description-->
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Symbol-->
                                                    <span class="me-3">
                                                        <i class="fa-duotone fa-user-plus fs-4 text-success"></i>
                                                    </span>
                                                    <!--end::Symbol-->
                                                    <!--begin::Description-->
                                                    <div class="d-flex align-items-center flex-wrap w-100">
                                                        <!--begin::Title-->
                                                        <div class="pe-3 flex-grow-1">
                                                            <a href="#"
                                                               class="fs-6 text-gray-800 text-hover-primary fw-bold">Science</a>
                                                        </div>
                                                        <!--end::Title-->
                                                      
                                                    </div>
                                                    <!--end::Description-->
                                                </div>
                                                <!--end::Item-->
                                            </div>
                                        </div>

                                        <div id="bundle_example" tabindex="0" class="badge badge-light-success fw-bold cursor-pointer"
                                             data-bs-trigger="hover" role="button" data-bs-toggle="popover">
                                            Interests
                                        </div>
                                    </div>

                                    <div class="package-Addon">
                                        <div hidden>
                                            <div data-name="popover-addon-content" class="position-relative">
                                                <!--begin::Item-->
                                                <div class="d-flex align-items-center mb-3">
                                                    <!--begin::Symbol-->
                                                    <span class="me-3">
                                                    <i class="fa-duotone fa-phone fs-4 text-danger"></i>
                                                </span>
                                                    <!--end::Symbol-->
                                                    <!--begin::Description-->
                                                    <div class="d-flex align-items-center flex-wrap w-100">
                                                        <!--begin::Title-->
                                                        <div class="pe-3 flex-grow-1">
                                                            <a href="#"
                                                               class="fs-6 text-gray-800 text-hover-primary fw-bold">Author</a>
                                                        </div>
                                                        <!--end::Title-->
                                                        <!--begin::Label-->
                                                        <div class="d-flex align-items-center">
                                                            <div class="fw-semibold fs-6 text-gray-800 pe-1">
                                                                Jack Mendis
                                                            </div>
                                                        </div>
                                                        <!--end::Label-->
                                                    </div>
                                                    <!--end::Description-->
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Symbol-->
                                                    <span class="me-3">
                                                    <i class="fa-duotone fa-messages fs-4 text-warning"></i>
                                                </span>
                                                    <!--end::Symbol-->
                                                    <!--begin::Description-->
                                                    <div class="d-flex align-items-center flex-wrap w-100">
                                                        <!--begin::Title-->
                                                        <div class="pe-3 flex-grow-1">
                                                            <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">Book</a>
                                                        </div>
                                                        <!--end::Title-->
                                                        <!--begin::Label-->
                                                        <div class="d-flex align-items-center">
                                                            <div class="fw-semibold fs-6 text-gray-800 pe-1">
                                                                Study Alphabets
                                                            </div>
                                                        </div>
                                                        <!--end::Label-->
                                                    </div>
                                                    <!--end::Description-->
                                                </div>
                                                <!--end::Item-->
                                            </div>
                                        </div>

                                        <div class="d-flex align-items-center gap-2 flex-wrap w-100px mt-2">
                                            <a id="addon_example" class="badge badge-light-primary cursor-pointer"
                                               data-bs-trigger="hover" role="button" data-bs-toggle="popover">
                                                Book Info
                                            </a>
                                        </div>
                                    </div>
                                </td>
                                <td class="align-middle">
                                    <label class="form-check form-switch form-switch-sm form-check-solid p-0"
                                           data-bs-toggle="modal"
                                           data-bs-target="#reason_active">
                                        <input class="active-check-input form-check-input ms-0" type="checkbox"
                                               value="" checked data-bs-toggle="tooltip" data-bs-placement="top" title="Active" />
                                    </label>
                                </td>
                                <td class="align-middle text-end pe-3">
                                    <a href="company-view.html"
                                       class="btn btn-light-success btn-icon h-35px w-35px">
                                        <i class="fa-duotone fa-eye fs-4  h-35px w-35px align-items-center justify-content-center"
                                           data-bs-toggle="tooltip" data-bs-placement="top"
                                           title="Profile View"></i>
                                    </a>
                                    <button type="button" id="kt_docs_sweetalert_state_question"
                                            class=" btn btn-light-danger btn-icon h-35px w-35px"
                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                            title="Delete">
                                        <i class="fa-duotone fa-trash fs-4 h-35px w-35px align-items-center justify-content-center"></i>
                                    </button>
                                </td>
                            </tr>
                            </tbody>
                            <!--end::Table body-->
                        </table>
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
</div>

    

@endsection