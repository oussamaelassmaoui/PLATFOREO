@extends('layouts.dashboardnav')

@section('content')
    <form class="row g-3 needs-validation" action="{{ route('Settings.update', $Setting->id) }}" method="POST"
        enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="col-lg-12">
            <div class="form-group">
                <label class="label">photo profil</label>
                <div class="form-control h-100 text-center position-relative p-4 p-lg-5">
                    <div class="product-upload">
                        <label for="photo_profil" class="file-upload mb-0">
                            <i class="ri-upload-cloud-2-line fs-2 text-gray-light"></i>
                            <span class="d-block fw-semibold text-body">Drop files here or click to
                                upload.</span>
                        </label>
                        <input id="photo_profil" class="@error('photo_profil') is-invalid @enderror" type="file" name="photo_profil">

                    </div>
                    @error('photo_profil')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="form-group">
                <label class="label">Testimonial photo 1</label>
                <div class="form-control h-100 text-center position-relative p-4 p-lg-5">
                    <div class="product-upload">
                        <label for="Testimonial_photo1" class="file-upload mb-0">
                            <i class="ri-upload-cloud-2-line fs-2 text-gray-light"></i>
                            <span class="d-block fw-semibold text-body">Drop files here or click to
                                upload.</span>
                        </label>
                        <input id="Testimonial_photo1" class="@error('Testimonial_photo1') is-invalid @enderror" type="file" name="Testimonial_photo1">

                    </div>
                    @error('Testimonial_photo1')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
        </div>  
        <div class="col-lg-12">
            <div class="form-group">
                <label class="label">Testimonial photo 2</label>
                <div class="form-control h-100 text-center position-relative p-4 p-lg-5">
                    <div class="product-upload">
                        <label for="Testimonial_photo2" class="file-upload mb-0">
                            <i class="ri-upload-cloud-2-line fs-2 text-gray-light"></i>
                            <span class="d-block fw-semibold text-body">Drop files here or click to
                                upload.</span>
                        </label>
                        <input id="Testimonial_photo2" class="@error('Testimonial_photo2') is-invalid @enderror" type="file" name="Testimonial_photo2">

                    </div>
                    @error('Testimonial_photo2')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
        </div>  
        <div class="col-lg-12">
            <div class="form-group">
                <label class="label">Testimonial photo 3</label>
                <div class="form-control h-100 text-center position-relative p-4 p-lg-5">
                    <div class="product-upload">
                        <label for="Testimonial_photo3" class="file-upload mb-0">
                            <i class="ri-upload-cloud-2-line fs-2 text-gray-light"></i>
                            <span class="d-block fw-semibold text-body">Drop files here or click to
                                upload.</span>
                        </label>
                        <input id="Testimonial_photo3" class="@error('Testimonial_photo3') is-invalid @enderror" type="file" name="Testimonial_photo3">

                    </div>
                    @error('Testimonial_photo3')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
        </div>  
        <div class="col-lg-12">
            <div class="form-group">
                <label class="label">Testimonial photo 4</label>
                <div class="form-control h-100 text-center position-relative p-4 p-lg-5">
                    <div class="product-upload">
                        <label for="Testimonial_photo4" class="file-upload mb-0">
                            <i class="ri-upload-cloud-2-line fs-2 text-gray-light"></i>
                            <span class="d-block fw-semibold text-body">Drop files here or click to
                                upload.</span>
                        </label>
                        <input id="Testimonial_photo4" class="@error('Testimonial_photo4') is-invalid @enderror" type="file" name="Testimonial_photo4">

                    </div>
                    @error('Testimonial_photo4')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
        </div>  
        <div class="col-lg-12">
            <div class="form-group">
                <label class="label">Contact photo</label>
                <div class="form-control h-100 text-center position-relative p-4 p-lg-5">
                    <div class="product-upload">
                        <label for="Contact_photo" class="file-upload mb-0">
                            <i class="ri-upload-cloud-2-line fs-2 text-gray-light"></i>
                            <span class="d-block fw-semibold text-body">Drop files here or click to
                                upload.</span>
                        </label>
                        <input id="Contact_photo" class="@error('Contact_photo') is-invalid @enderror" type="file" name="Contact_photo">

                    </div>
                    @error('Contact_photo')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
        </div>  
        <div class="col-lg-12">
            <div class="form-group">
                <label class="label">Logo</label>
                <div class="form-control h-100 text-center position-relative p-4 p-lg-5">
                    <div class="product-upload">
                        <label for="logo" class="file-upload mb-0">
                            <i class="ri-upload-cloud-2-line fs-2 text-gray-light"></i>
                            <span class="d-block fw-semibold text-body">Drop files here or click to
                                upload.</span>
                        </label>
                        <input id="logo" class="@error('logo') is-invalid @enderror" type="file" name="logo">

                    </div>
                    @error('logo')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
        </div>  
        <div class="col-lg-12">
            <div class="form-group">
                <label class="label">banner About 1</label>
                <div class="form-control h-100 text-center position-relative p-4 p-lg-5">
                    <div class="product-upload">
                        <label for="banner_About1" class="file-upload mb-0">
                            <i class="ri-upload-cloud-2-line fs-2 text-gray-light"></i>
                            <span class="d-block fw-semibold text-body">Drop files here or click to
                                upload.</span>
                        </label>
                        <input id="banner_About1" class="@error('banner_About1') is-invalid @enderror" type="file" name="banner_About1">

                    </div>
                    @error('banner_About1')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
        </div>  
        <div class="col-lg-12">
            <div class="form-group">
                <label class="label">banner About 2</label>
                <div class="form-control h-100 text-center position-relative p-4 p-lg-5">
                    <div class="product-upload">
                        <label for="banner_About2" class="file-upload mb-0">
                            <i class="ri-upload-cloud-2-line fs-2 text-gray-light"></i>
                            <span class="d-block fw-semibold text-body">Drop files here or click to
                                upload.</span>
                        </label>
                        <input id="banner_About2" class="@error('banner_About2') is-invalid @enderror" type="file" name="banner_About2">

                    </div>
                    @error('banner_About2')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
        </div>  
        <div class="col-lg-12">
            <div class="form-group">
                <label class="label">banner Services</label>
                <div class="form-control h-100 text-center position-relative p-4 p-lg-5">
                    <div class="product-upload">
                        <label for="banner_Services" class="file-upload mb-0">
                            <i class="ri-upload-cloud-2-line fs-2 text-gray-light"></i>
                            <span class="d-block fw-semibold text-body">Drop files here or click to
                                upload.</span>
                        </label>
                        <input id="banner_Services" class="@error('banner_Services') is-invalid @enderror" type="file" name="banner_Services">

                    </div>
                    @error('banner_Services')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
        </div>  
        <div class="col-lg-12">
            <div class="form-group">
                <label class="label">banner Services Details</label>
                <div class="form-control h-100 text-center position-relative p-4 p-lg-5">
                    <div class="product-upload">
                        <label for="banner_Services_Details" class="file-upload mb-0">
                            <i class="ri-upload-cloud-2-line fs-2 text-gray-light"></i>
                            <span class="d-block fw-semibold text-body">Drop files here or click to
                                upload.</span>
                        </label>
                        <input id="banner_Services_Details" class="@error('banner_Services_Details') is-invalid @enderror" type="file" name="banner_Services_Details">

                    </div>
                    @error('banner_Services_Details')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
        </div>  
        <div class="col-lg-12">
            <div class="form-group">
                <label class="label">banner Portfolio</label>
                <div class="form-control h-100 text-center position-relative p-4 p-lg-5">
                    <div class="product-upload">
                        <label for="banner_Portfolio" class="file-upload mb-0">
                            <i class="ri-upload-cloud-2-line fs-2 text-gray-light"></i>
                            <span class="d-block fw-semibold text-body">Drop files here or click to
                                upload.</span>
                        </label>
                        <input id="banner_Portfolio" class="@error('banner_Portfolio') is-invalid @enderror" type="file" name="banner_Portfolio">

                    </div>
                    @error('banner_Portfolio')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
        </div>  
        <div class="col-lg-12">
            <div class="form-group">
                <label class="label">banner blog</label>
                <div class="form-control h-100 text-center position-relative p-4 p-lg-5">
                    <div class="product-upload">
                        <label for="banner_blog" class="file-upload mb-0">
                            <i class="ri-upload-cloud-2-line fs-2 text-gray-light"></i>
                            <span class="d-block fw-semibold text-body">Drop files here or click to
                                upload.</span>
                        </label>
                        <input id="banner_blog" class="@error('banner_blog') is-invalid @enderror" type="file" name="banner_blog">

                    </div>
                    @error('banner_blog')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
        </div> 
        <div class="col-12">
            <button class="btn btn-primary fw-semibold text-white py-2 px-3" type="submit">Submit Form</button>
        </div>
    </form>
@endsection
