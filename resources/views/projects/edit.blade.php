@extends('layouts.dashboardnav')
@section('content')
    <div class="d-sm-flex text-center justify-content-between align-items-center mb-4">
        <h3 class="mb-sm-0 mb-1 fs-18">edit Project</h3>
        <ul class="ps-0 mb-0 list-unstyled d-flex justify-content-center">
            <li>
                <a href="/" class="text-decoration-none">
                    <i class="ri-home-2-line" style="position: relative; top: -1px;"></i>
                    <span>Home</span>
                </a>
            </li>
            <li>
                <span class="fw-semibold fs-14 heading-font text-dark dot ms-2">edit Project</span>
            </li>
        </ul>
    </div>
    <div class="row">
        <div class="col">
            <div class="card bg-white border-0 rounded-10 mb-4">
                <div class="card-body p-4">
                    <h3 class="fs-18  border-bottom pb-20 mb-20">edit Project</h3>
                    <form action="{{ route('projects.update',$project->id ) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group mb-4">
                                    <label class="label">First Name</label>
                                    <div class="form-group position-relative">
                                        <input type="text" name="name" class="form-control text-dark ps-5 h-58"
                                            placeholder="EnvyTheme" value="{{ old('name', $project->name) }}">
                                        <i
                                            class="ri-edit-2-line position-absolute top-50 start-0 translate-middle-y fs-20 text-gray-light ps-20"></i>
                                    </div>

                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group mb-4">
                                    <label class="label">Project Start Date</label>
                                    <div class="form-group position-relative">
                                        <input type="date" name="Start_Date" value="{{ old('Start_Date', $project->Start_Date) }}" class="form-control text-gray-light h-58">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group mb-4">
                                    <label class="label">Project End Date</label>
                                    <div class="form-group position-relative">
                                        <input type="date" name="date_final" value="{{ old('date_final', $project->date_final) }}" class="form-control text-gray-light h-58">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group mb-4">
                                    <label class="label">Project Description</label>
                                    <div class="form-group position-relative">
                                        <textarea id="summernote" name="description" class="form-control ps-5 text-dark" placeholder="Some demo text ... "
                                            cols="30" rows="5">{{ old('description', $project->description) }}</textarea>
                                        <i
                                            class="ri-information-line position-absolute top-0 start-0 fs-20 text-gray-light ps-20 pt-2"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group mb-4">
                                    <label class="label">Client</label>
                                    <div class="form-group position-relative">
                                        <input type="text" name="Client" value="{{ old('Client', $project->Client) }}" class="form-control text-dark h-58 ps-5"
                                            placeholder="Enter rate">
                                        <i
                                            class="ri-briefcase-line position-absolute top-50 start-0 translate-middle-y fs-20 text-gray-light ps-20"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group mb-4">
                                    <label class="label">View website</label>
                                    <div class="form-group position-relative">
                                        <input type="text" name="View_website" value="{{ old('View_website', $project->View_website) }}" class="form-control text-dark h-58 ps-5"
                                            placeholder="Enter rate">
                                        <i
                                            class="ri-briefcase-line position-absolute top-50 start-0 translate-middle-y fs-20 text-gray-light ps-20"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <label class="label">Categories</label>
                                <div class="form-group position-relative mb-3">
                                    <select name="Categorie_id" id="Categorie_id"
                                        class="form-select form-control text-gray-light h-58 ps-5"
                                        aria-label="Default select example">
                                        @foreach ($Categories as $Categorie)
                                            <option value="{{ $Categorie->id }}">{{ $Categorie->name }}</option>
                                        @endforeach
                                    </select>
                                    <i
                                        class="ri-calendar-2-line position-absolute top-50 start-0 translate-middle-y fs-20 text-gray-light ps-20"></i>
                                </div>
                            </div>
                            <style>
                                .dx {
                                    flex-wrap: wrap-reverse;
                                }
                            </style>
                            <div class="col-lg-12">
                                <div class="form-group mb-4">
                                    <label class="label">Tags</label>
                                    <div class="form-group position-relative">
                                        <div class="row">
                                           
                                            @foreach ($tags as $item)
                                             <div class="form-check col-2 justify-content-between align-items-center ">
                                                &nbsp;&nbsp;&nbsp;  <input name="tags[]" class="form-check-input"  type="checkbox"
                                                        value="{{ $item->id }}" id="{{ $item->id }}">
                                                        <label class="form-check-label" for="{{ $item->id }}">
                                                        {{ $item->name }}
                                                    </label>
                                                </div>
                                                &nbsp;&nbsp;&nbsp;
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <label class="label">Team Lead</label>
                                <div class="form-group position-relative mb-3">
                                    <div class="row">
                                        @foreach ($Members as $item)
                                            <div class="form-check col-4 justify-content-between align-items-center ">
                                                &nbsp;&nbsp;&nbsp;   <input name="members[]" class="form-check-input" type="checkbox"
                                                    value="{{ $item->id }}" id="{{ $item->id }}">
                                                <label class="form-check-label" for="{{ $item->id }}">
                                                    {{ $item->name }}
                                                </label>
                                            </div>
                                            &nbsp;&nbsp;&nbsp;
                                        @endforeach
                                    </div>

                                    {{-- <select class="form-select form-control text-gray-light h-58 ps-5"
                                        aria-label="Default select example" multiple>
                                        @foreach ($Members as $Member)
                                            <option value="{{ $Member->id }}">{{ $Member->name }}</option>
                                        @endforeach
                                    </select> --}}


                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group mb-4">
                                    <label class="label">Attached Files</label>
                                    <div class="form-control h-100 text-center position-relative p-4 p-lg-5">
                                        <div class="product-upload">
                                            <label for="file-upload-x" class="file-upload mb-0">
                                                <i class="ri-upload-cloud-2-line fs-2 text-gray-light"></i>
                                                <span class="d-block fw-semibold text-body">Drop files here or click to
                                                    upload.</span>
                                            </label>
                                            <input name="photo" id="file-upload-x" type="file">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group mb-4">
                                    <label class="label">Attached Files</label>
                                    <div class="form-control h-100 text-center position-relative p-4 p-lg-5">
                                        <div class="product-upload">
                                            <label for="file-upload" class="file-upload mb-0">
                                                <i class="ri-upload-cloud-2-line fs-2 text-gray-light"></i>
                                                <span class="d-block fw-semibold text-body">Drop files here or click to
                                                    upload.</span>
                                            </label>
                                            <input id="file-upload" type="file" name="images[]" multiple>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary py-3 px-5 fw-semibold text-white">edit
                                        Project</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
    <script>
        $('#summernote').summernote({
            placeholder: 'Some demo text ...',
            tabsize: 2,
            height: 100
        });
    </script>
@endsection
