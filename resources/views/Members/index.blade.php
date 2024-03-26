@extends('layouts.dashboardnav')

@section('content')
    <div class="d-sm-flex text-center justify-content-between align-items-center mb-4">
        <h3 class="mb-sm-0 mb-1 fs-18">Member</h3>
        <ul class="ps-0 mb-0 list-unstyled d-flex justify-content-center">
            <li>
                <a href="{{route('admin.dashboard')}}" class="text-decoration-none">
                    <i class="ri-home-2-line" style="position: relative; top: -1px;"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li>
                <span class="fw-semibold fs-14 heading-font text-dark dot ms-2">Member</span>
            </li>
        </ul>
    </div>
    <div class="row justify-content-center">
        @forelse ($Members as $item)
            <div class="col-lg-6">
                <div class="card bg-white border-0 rounded-10 mb-4">
                    <div class="card-body p-4">
                       
                        <div class="d-sm-flex justify-content-between align-items-center">
                            <div class="d-flex align-items-center mb-3 mb-sm-0">
                                <div class="flex-shrink-0">
                                    <img src="{{ asset('storage/' . $item->photo) }}" class="wh-60 rounded-circle" alt="{{$item->photo}}">
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <h4 class="fs-16 fw-semibold mb-1">{{$item->name}}</h4>
                                    <span class="fs-14">{{$item->work}}</span>
                                </div>
                            </div>
                            <ul class="ps-0 mb-0 list-unstyled d-flex gap-2">
                                
                                <li>
                                    <a href="{{$item->Github}}" target="_blank"
                                        class="text-decoration-none wh-38 bg-primary bg-opacity-10 d-block
                                            text-center position-relative rounded-circle text-primary hover-bg">
                                        <i
                                            class="ri-github-fill position-absolute top-50 start-50 translate-middle fs-18"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{$item->Linkedin}}" target="_blank"
                                        class="text-decoration-none wh-38 bg-primary bg-opacity-10 d-block
                                                 text-center position-relative rounded-circle text-primary hover-bg">
                                        <i
                                            class="ri-linkedin-fill position-absolute top-50 start-50 translate-middle fs-18"></i>
                                    </a>
                                </li>
                                <li>
                                        <div class="dropdown action-opt">
                                            <button class="btn bg p-0" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i data-feather="more-horizontal"></i>
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-end bg-white border box-shadow">
                    
                                                <li>
                                                    <a class="dropdown-item" href="{{ route('Members.edit', $item->id) }}">
                                                        <i data-feather="edit-3"></i>
                                                        Rename
                                                    </a>
                                                </li>
                    
                                                <li>
                    
                                                    <form action="{{ route('Members.destroy', $item) }}" method="POST" class="dropdown-item">
                                                        @csrf
                                                        @method('DELETE')
                    
                                                        <a href="#"
                                                            onclick="event.preventDefault(); if(confirm('Are you sure you want to delete?')) { this.closest('form').submit(); }">
                                                            <i data-feather="trash-2"></i> Remove
                                                        </a>
                    
                                                        {{-- <button type="button" class="btn btn-primary text-white fs-16 fw-semibol py-2 px-3 mt-2 me-2" id="sweetalert_13">Remove</button> --}}
                                                    </form>
                                                </li>
                                            </ul>
                                        </div>
                                    
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        @empty
         <h4>No Member found!</h4> 
        @endforelse
    </div>
@endsection
