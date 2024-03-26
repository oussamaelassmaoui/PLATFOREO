@extends('layouts.dashboardnav')
@section('content')
   

    <div class="d-sm-flex text-center justify-content-between align-items-center mb-4">
        <h3 class="mb-sm-0 mb-1 fs-18">Member Information</h3>
        <ul class="ps-0 mb-0 list-unstyled d-flex justify-content-center">
            <li>
                <a href="/" class="text-decoration-none">
                    <i class="ri-home-2-line" style="position: relative; top: -1px;"></i>
                    <span>Home</span>
                </a>
            </li>
            <li>
                <span class="fw-semibold fs-14 heading-font text-dark dot ms-2">Member Information</span>
            </li>
        </ul>
    </div>
    <div class="row justify-content-center">
        <div class="col-xxl-9">
            <div class="card bg-white border-0 rounded-10 mb-4">
                <div class="card-body p-4">
                    <h4 class="fw-semibold fs-18 border-bottom pb-20 mb-20">Member Information</h4>
                    
                   
                    <section>


                       
                    
                        <form method="post" action="{{ route('Members.store') }}" class="mt-6 space-y-6" enctype="multipart/form-data">
                            @csrf
                            
                    
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group mb-4">
                                        
                                        <label for="name" class="label">Name</label>
                                        <div class="form-group position-relative">
                                            <x-text-input id="name" name="name" type="text"
                                                class="form-control text-dark ps-5 h-58" :value="old('name')" required autofocus
                                                autocomplete="name" />
                                            <i
                                                class="ri-user-line position-absolute top-50 start-0 translate-middle-y fs-20 text-gray-light ps-20"></i>
                                        </div>
                                        <x-input-error class="mt-2" :messages="$errors->get('name')" />
                                    </div>
                                    <div>
                    
                    
                                    </div>
                                </div>
                               
                              
                         
                                 <div class="col-lg-6">
                                    <div class="form-group mb-4">
                                        <x-input-label for="name" :value="__('work')" class="label" />
                                        <div class="form-group position-relative">
                                            <x-text-input id="work" name="work" type="text"
                                            class="form-control text-dark ps-5 h-58" :value="old('work')" required autofocus
                                            autocomplete="work" />
                                            
                                            <i
                                                class="ri-user-line position-absolute top-50 start-0 translate-middle-y fs-20 text-gray-light ps-20"></i>
                                                <x-input-error class="mt-2" :messages="$errors->get('work')" />
                                            </div>
                                    </div>
                                 </div>
                               
                              
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="label">File Upload</label>
                                        <div class="form-control h-100 text-center position-relative p-4 p-lg-5">
                                            <div class="product-upload">
                                                <label for="file-upload" class="file-upload mb-0">
                                                    <i class="ri-upload-cloud-2-line fs-2 text-gray-light"></i>
                                                    <span class="d-block fw-semibold text-body">Drop files here or click to
                                                        upload.</span>
                                                </label>
                                                <input id="file-upload" type="file" name="photo">
                                                <x-input-error class="mt-2" :messages="$errors->get('photo')" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="border-bottom pb-3 mb-3 mt-5">
                                <h4 class="fs-18 fw-semibold mb-1">Social Information</h4>
                                <p class="fs-15">Fill all Information as below</p>
                            </div>
                            <div class="row">
                                
                                <div class="col-lg-6">
                                    <div class="form-group mb-4">
                                        <label class="label">Linkedin</label>
                                        <div class="form-group position-relative">
                                            <input type="url" name="Linkedin" class="form-control text-dark ps-5 h-58" value="{{old('Linkedin')}}"  required autofocus placeholder="URL">
                                            <i
                                                class="ri-linkedin-line position-absolute top-50 start-0 translate-middle-y fs-20 text-gray-light ps-20"></i>
                                                <x-input-error class="mt-2" :messages="$errors->get('Linkedin')" />
                                            </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group mb-4">
                                        <label class="label">Github</label>
                                        <div class="form-group position-relative">
                                            <input type="url" name="Github" class="form-control text-dark ps-5 h-58" value="{{old('Github')}}" required autofocus placeholder="URL">
                                            <i
                                                class="ri-github-line position-absolute top-50 start-0 translate-middle-y fs-20 text-gray-light ps-20"></i>
                                                <x-input-error class="mt-2" :messages="$errors->get('Github')" />
                                            </div>
                                    </div>
                                </div>
                               
                                
                                <div class="col-lg-12">
                                    <div class="form-group d-flex gap-3">
                                        <x-primary-button  class="btn btn-primary py-3 px-5 fw-semibold text-white">{{ __('Save') }}</x-primary-button>
                                       
                                    </div>
                                </div>
                    
                    
                               
                            </div>
                        </form>
                    </section>
                    
                </div>
            </div>
        </div>
    </div>
@endsection