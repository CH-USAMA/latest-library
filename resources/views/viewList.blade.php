@extends('layouts.app')
@section('content')
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
                                        <th class="ps-3">User Name</th>
                                        <th class="">Email</th>
                                        <th class="">Role</th>
                                        <th class="">Date Of Birth</th>
                                        <th class="pe-3 text-end">Actions</th>
                                    </tr>
                                    </thead>
                                    <!--end::Table head-->
                                    <!--begin::Table body-->
                                    @foreach ($viewList as $user)
                                    <tbody>
                                    <tr>
                                        <td class="align-middle ps-3">
                                            <div class="d-flex align-items-center">
                                                <div class="symbol symbol-50px me-3 bg-light">
                                                    <img src="assets/media/svg/avatars/001-boy.svg"
                                                        class="" alt=""/>
                                                </div>
                                                <div class="d-flex justify-content-start flex-column">
                                                    <!--<a href="company-view.html"
                                                    class="text-gray-800 fw-bold text-hover-primary fs-6">Student 1</a>-->
                                                    <div class="text-dark fw-bold d-block">{{$user['id']}}</div>
                                                    <div class="text-dark fw-bold d-block">{{$user['name']}}</div>
                                                    <span class="text-gray-400 fw-semibold 1d-block fs-7">xxxxxx ID</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="align-middle">
                                            <div class="text-dark fw-bold d-block">{{$user['email']}}</div>
                                        </td>
                                        <td class="align-middle">
                                            <div class="text-dark fw-bold d-block">{{$user['role']}}</div>
                                        </td>
                                        <td class="align-middle">
                                            <div class="text-dark fw-bold">{{$user['date_of_birth']}}</div>
                                            <span class="text-muted fw-semibold cursor-pointer"
                                                data-bs-toggle="tooltip" title="Create Date">20-05-1998</span>
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
                                            <a href="{{route('deleteUser',['id'=>$user['id']])}}" button type="button" id="kt_docs_sweetalert_state_question"
                                                    class=" btn btn-light-danger btn-icon h-35px w-35px"
                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="Delete">
                                                <i class="fa-duotone fa-trash fs-4 h-35px w-35px align-items-center justify-content-center"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    </tbody>
                                    @endforeach
                                    <!--end::Table body-->
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    <!--end::Row-->
@endsection
