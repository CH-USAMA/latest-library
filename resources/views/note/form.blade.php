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
				<h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Notes Form</h1>
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
					<li class="breadcrumb-item text-muted">
						<a href={{route("notes")}} class="text-muted text-hover-primary">Notes</a>
					</li>
				</ul>
				<!--end::Breadcrumb-->
			</div>
		</div>
		<!--end::Toolbar container-->
	</div>


                    <!--begin::Content-->
                    <div id="kt_app_content" class="app-content flex-column-fluid">
                        <!--begin::Content container-->
                        <div id="kt_app_content_container" class="">
							@if (empty($note))
							<form action="{{route('notestore')}}" method="POST">
							@else
							<form action="{{route('updatenote')}}" method="POST">
							@endif
								@csrf
                            <!--begin::Row-->
                            <div class="row g-5 g-xl-10">
                                <div class="col-xl-12">
                                    <div class="card ">
										<div class="card-header align-items-center px-3 min-h-50px">
											<h3 class=" mb-0">Create Note</h3>
										</div>
										<div class="card-body p-3 pt-0">
											<input hidden type="text" name="id" value="{{$note->id ?? ''}}" class="form-control form-control-solid">
											<div class="row">
												<!--begin::Col-->
												<div class="col-md-6 fv-row mb-5">
													<label class="form-label">Title</label>
													<input name="title" id="inputTitle" value="{{$note->title ?? ''}}" type="text" class="form-control form-control-solid">
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col-md-6 fv-row mb-5">
													<label class="form-label">Date</label>
													<input readonly="readonly" type="date" name="date" value="{{ date('Y-m-d') }}"  id="date" class="form-control form-control-solid">
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col-md-6 fv-row mb-5">
													<label class="form-label">Assign To</label>
													@if (empty($note))
													<select name="student_id"class="form-select form-select-solid">
														<option value="1" selected="selected">Student Name</option>
														@foreach($userslist as $user)
														@if($user->role =='student')
														<option value="{{$student_id = $user->id}}">{{ $user->name }}</option>
														@endif
														@endforeach
													</select>
													@else
													<select name="student_id"class="form-select form-select-solid">
														<option value="{{$student_id = $note->id}}" selected="selected">Student ID</option>
													</select>
													@endif
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<input hidden name="teacher_id" id="teacher_id"class="form-select form-select-solid"value="{{Auth::id()}}">
												<!--end::Col-->
											</div>
											<div class="mb-0 mt-1">
												<label class="form-label">Content</label>
												<textarea name="content" id="inputContent" class="form-control form-control-solid placeholder-gray-600 fw-bold fs-4 ps-9 pt-7" rows="6" name="message">{{$note->content ?? ''}}</textarea>
												<!--begin::Submit-->
												<button type="submit" class="btn btn-primary float-end mt-5">Submit</button>
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
                    <!--end::Content-->
					

@endsection