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
							{{-- @if (empty($question)) --}}
							<form action="{{route('assignmentstore')}}" method="POST">
							{{-- @else
							<form action="{{route('updatequestion')}}" method="POST">
							@endif --}}
							@csrf
                            <!--begin::Row-->
                            <div class="row g-5 g-xl-10">
                                <div class="col-xl-12">
                                    <div class="card ">
										<div class="card-header align-items-center px-3 min-h-50px">
											<h3 class=" mb-0">Create Assignment</h3>
										</div>
										<div class="card-body p-3 pt-0">
											<input hidden type="text" name="id" value="{{$assignment->id ?? ''}}" class="form-control form-control-solid">
											<div class="row">
												<!--begin::Col-->
												<div class="col-md-6 fv-row mb-5">
													<label class="form-label">Name of Assignment</label>
													<input name="name" id="inputName" type="text" class="form-control form-control-solid">
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col-md-6 fv-row mb-5">
													<label class="form-label">Assign To</label>
													@if (empty($question))
													<select  name="student_id"class="form-select form-select-solid">
														<option value="1" selected="selected">Student Name</option>
														@foreach($userslist as $user)
														@if($user->role =='student')
														<option value="{{$student_id = $user->id}}">{{ $user->name }}</option>
														@endif
														@endforeach
													</select>
													@else
													<select name="student_id"class="form-select form-select-solid">
														<option value="{{$student_id = $question->id}}" selected="selected">Student ID</option>
													</select>
													@endif
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col-md-6 fv-row mb-5">
													<label class="form-label">Books List:</label>
													@if (empty($question))
													<select name="book_id"class="form-select form-select-solid">
														<option value="1" selected="selected">Book Name</option>
														@foreach($bookslist as $book)
														<option value="{{$book_id = $book['id']}}">{{ $book['title']}}</option>
														@endforeach
													</select>
													@else
													<select name="book_id"class="form-select form-select-solid">
														<option value="{{$question_id = $question['id']}}" selected="selected">{{ $question['question_text'] }}</option>
													</select>
													@endif
												</div>
												<!--end::Col-->
												{{-- <script>
												$(document).ready(function () {
													$('select[name="book_id"]').on('change', function () {
														var bookId = $(this).val();
														console.log("Book selected:", bookId); // Debugging log

														if (bookId) {
															$.ajax({
																url: '/createassignmentquestions/' + bookId,
																type: 'GET',
																dataType: 'json',
																success: function (data) {
																	console.log("Questions:", data.questions); // Debugging log
																	var questionsList = $('#questionsList');
																	questionsList.empty(); // Clear previous questions
																	if (data.questions && data.questions.length > 0) {
																		data.questions.forEach(function (question) {
																			questionsList.append('<li>' + question.question_text + '</li>');
																		});
																	} else {
																		questionsList.append('<li>No questions available for this book.</li>');
																	}
																},

																error: function () {
																	$('#questionsList').html('<li>Error fetching questions. Please try again.</li>');
																}
															});
														} else {
															$('#questionsList').html('<li>Please select a book.</li>');
														}
													});
												});
																								<ul id="questionsList"></ul> 
												</script> --}}
												<script>
													$(document).ready(function () {
														$('select[name="book_id"]').on('change', function () {
															var bookId = $(this).val();
															console.log("Book selected:", bookId); // Debugging log

															if (bookId) {
																$.ajax({
																	url: '/createassignmentquestions/' + bookId,
																	type: 'GET',
																	dataType: 'json',
																	success: function (data) {
																		console.log("Questions:", data.questions); // Debugging log

																		var questionListSelect = $('select[name="questionlist[]"]'); // Target the multi-select dropdown
																		questionListSelect.empty(); // Clear previous options

																		// Append a default "Select a question" option
																		questionListSelect.append('<option value="">Select a question</option>');

																		if (data.questions && data.questions.length > 0) {
																			// Loop through the questions and create an <option> for each one
																			data.questions.forEach(function (question) {
																				questionListSelect.append('<option value="' + question.id + '">' + question.question_text + '</option>');
																			});
																		} else {
																			questionListSelect.append('<option value="">No questions available for this book.</option>');
																		}
																	},

																	error: function () {
																		$('select[name="questionlist[]"]').html('<option value="">Error fetching questions. Please try again.</option>');
																	}
																});
															} else {
																$('select[name="questionlist[]"]').html('<option value="">Please select a book.</option>');
															}
														});
													});
												</script>

												<label class="form-label">Select Questions</label>
												<select name="questionlist[]" class="form-select form-select-solid" data-control="select2" multiple size="4">
													<option value="">Please select a book first</option>
												</select>
												
												{{-- <div class="col-md-6 fv-row mb-5">
													<label class="form-label">Select Questions</label>
													<select name="questionlist[]"class="form-select form-select-solid" data-control="select2" multiple size="4">
														<option value="1" disabled >Select Genre</option>
														@foreach($questionsSelect as $question)
														<option value="{{$question->id}}">{{ $question->question_text}}</option>
														@endforeach
													</select>
												</div> --}}

												{{-- <select id="questionsSelect">
													<option value="">Please select a book first</option>
												</select> --}}

												<!--begin::Col-->
												<input hidden name="teacher_id" id="inputTeacherId"class="form-select form-select-solid"value="{{Auth::id()}}">
												<!--end::Col-->
												<!--begin::Col-->
												<input hidden name="status" id="inputStatus"class="form-select form-select-solid"value="Not Completed">
												<!--end::Col-->
											</div>
											<!--begin::Submit-->
											<button type="submit" class="btn btn-primary float-end mt-5">Submit</button>
											<!--end::Submit-->
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