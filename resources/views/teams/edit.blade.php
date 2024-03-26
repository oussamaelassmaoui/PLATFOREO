@extends('layouts.dashboardnav')
@section('content')
   

    <div class="d-sm-flex text-center justify-content-between align-items-center mb-4">
        <h3 class="mb-sm-0 mb-1 fs-18">team Information</h3>
        <ul class="ps-0 mb-0 list-unstyled d-flex justify-content-center">
            <li>
                <a href="/" class="text-decoration-none">
                    <i class="ri-home-2-line" style="position: relative; top: -1px;"></i>
                    <span>Home</span>
                </a>
            </li>
            <li>
                <span class="fw-semibold fs-14 heading-font text-dark dot ms-2">team Information</span>
            </li>
        </ul>
    </div>
    <div class="row justify-content-center">
        <div class="col-xxl-9">
            <div class="card bg-white border-0 rounded-10 mb-4">
                <div class="card-body p-4">
                    <h4 class="fw-semibold fs-18 border-bottom pb-20 mb-20">team</h4>
                    
                    
                    <section>


                        
                    
                        <form method="post" action="{{ route('teams.update', $team->id) }}" class="mt-6 space-y-6" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                    
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group mb-4">
                                        <x-input-label for="name" :value="__('Name')" class="label" />
                                        <div class="form-group position-relative">
                                            <x-text-input id="name" name="name" type="text"
                                                class="form-control text-dark ps-5 h-58" :value="old('name', $team->name)" required autofocus
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
                                        <x-input-label for="email" :value="__('Email Address')" class="label" />
                                        <div class="form-group position-relative">
                                            <x-text-input id="email" name="email" type="email"
                                                class="form-control text-dark ps-5 h-58" :value="old('email', $team->email)" required
                                                autocomplete="username" />
                                            <i
                                                class="ri-mail-line position-absolute top-50 start-0 translate-middle-y fs-20 text-gray-light ps-20"></i>
                                            <x-input-error class="mt-2" :messages="$errors->get('email')" />
                                        </div>
                                    </div>
                                   
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group mb-4">
                                        <x-input-label for="name" :value="__('Phone')" class="label" />
                                        <div class="form-group position-relative">
                                            <x-text-input id="Mobile" name="Mobile" type='text' class="form-control text-dark ps-5 h-58"  :value="old('Mobile', $team->Mobile)" required autofocus autocomplete="Mobile" />
                                            <i class="ri-phone-line position-absolute top-50 start-0 translate-middle-y fs-20 text-gray-light ps-20"></i>
                                            <x-input-error class="mt-2" :messages="$errors->get('Mobile')" />
                                            </div>
                                    </div>
                                    
                                        
                                        
                                        
                                    
                                </div>
                                
                                 <div class="col-lg-6">
                                    <div class="form-group mb-4">
                                        <x-input-label for="name" :value="__('work')" class="label" />
                                        <div class="form-group position-relative">
                                            <x-text-input id="work" name="work" type="text"
                                            class="form-control text-dark ps-5 h-58" :value="old('work', $team->work)" required autofocus
                                            autocomplete="work" />
                                            
                                            <i
                                                class="ri-user-line position-absolute top-50 start-0 translate-middle-y fs-20 text-gray-light ps-20"></i>
                                                <x-input-error class="mt-2" :messages="$errors->get('work')" />
                                            </div>
                                    </div>
                                   
                                </div>
                                
                                <div class="col-lg-6">
                                    <div class="form-group mb-4">
                                        <x-input-label for="Years_of_Experience" :value="__('Years of Experience')" class="label" />
                                        <div class="form-group position-relative">
                                            <x-text-input id="Years_of_Experience" name="Years_of_Experience" type="text"
                                                class="form-control text-dark ps-5 h-58" :value="old('Years_of_Experience', $team->Years_of_Experience)" required autofocus
                                                autocomplete="Years_of_Experience" />
                                            <i
                                                class="ri-user-line position-absolute top-50 start-0 translate-middle-y fs-20 text-gray-light ps-20"></i>
                                        </div>
                                        <x-input-error class="mt-2" :messages="$errors->get('Years_of_Experience')" />
                                    </div>
                                    <div>
                    
                    
                                    </div>
                                </div>
                              
                                <div class="col-lg-12">
                                    <div class="form-group mb-4">
                                        
                                        <x-input-label for="name" :value="__('About Me :')" class="label" />
                                        <div class="form-group position-relative">
                                            <textarea class="form-control ps-5 text-dark" name="About_Me" placeholder="About Me ... " cols="30" rows="5" required autofocus >{{old('About_Me', $team->About_Me)}} </textarea>
                                            <i
                                                class="ri-information-line position-absolute top-0 start-0 fs-20 text-gray-light ps-20 pt-2"></i>
                                                <x-input-error class="mt-2" :messages="$errors->get('About_Me')" />
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
                                        <label class="label">Facebook</label>
                                        <div class="form-group position-relative">
                                            <input type="url" name="Facebook" class="form-control text-dark ps-5 h-58" placeholder="URL"  value="{{old('Facebook', $team->Facebook)}}" required autofocus>
                                            <i
                                                class="ri-facebook-line position-absolute top-50 start-0 translate-middle-y fs-20 text-gray-light ps-20"></i>
                                                <x-input-error class="mt-2" :messages="$errors->get('Facebook')" />
                                            </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group mb-4">
                                        <label class="label">Twitter</label>
                                        <div class="form-group position-relative">
                                            <input type="url" name="Twitter" class="form-control text-dark ps-5 h-58"  value="{{old('Twitter', $team->Twitter)}}" required autofocus placeholder="URL">
                                            <i
                                                class="ri-twitter-x-line position-absolute top-50 start-0 translate-middle-y fs-20 text-gray-light ps-20"></i>
                                                <x-input-error class="mt-2" :messages="$errors->get('Twitter')" />
                                            </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group mb-4">
                                        <label class="label">Linkedin</label>
                                        <div class="form-group position-relative">
                                            <input type="url" name="Linkedin" class="form-control text-dark ps-5 h-58" value="{{old('Linkedin', $team->Linkedin)}}"  required autofocus placeholder="URL">
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
                                            <input type="url" name="Github" class="form-control text-dark ps-5 h-58" value="{{old('Github', $team->Github)}}" required autofocus placeholder="URL">
                                            <i
                                                class="ri-github-line position-absolute top-50 start-0 translate-middle-y fs-20 text-gray-light ps-20"></i>
                                                <x-input-error class="mt-2" :messages="$errors->get('Github')" />
                                            </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group mb-4">
                                        <label class="label">instagram</label>
                                        <div class="form-group position-relative">
                                            <input type="url" name="instagram" class="form-control text-dark ps-5 h-58" value="{{old('instagram', $team->instagram)}}"  required autofocus placeholder="URL">
                                            <i
                                                class="ri-instagram-line position-absolute top-50 start-0 translate-middle-y fs-20 text-gray-light ps-20"></i>
                                                <x-input-error class="mt-2" :messages="$errors->get('instagram')" />
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