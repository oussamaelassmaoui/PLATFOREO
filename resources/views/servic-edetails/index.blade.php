@extends('layouts.dashboardnav')

@section('content')
    <div class="d-sm-flex text-center justify-content-between align-items-center mb-4">
        <h3 class="mb-sm-0 mb-1 fs-18">Service</h3>
        <ul class="ps-0 mb-0 list-unstyled d-flex justify-content-center">
            <li>
                <a href="{{route('admin.dashboard')}}" class="text-decoration-none">
                    <i class="ri-home-2-line" style="position: relative; top: -1px;"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li>
                <span class="fw-semibold fs-14 heading-font text-dark dot ms-2">Service</span>
            </li>
        </ul>
    </div>

    <div class="card bg-white border-0 rounded-10 mb-4">
        <div class="card-body p-4 pb-0">
            <div class="border-bottom pb-20 mb-20">
                <h4 class="fw-semibold fs-18 mb-sm-0">News & Service</h4>
            </div>
            <div class="row justify-content-center">
                @forelse ($servic_edetails as $servic_edetail)
                <div class="col-xxl-3 col-md-6">
                    <div class="card bg-white border-0 rounded-10 mb-4">
                        <div class="card-body p-4">
                            <div class="mb-4">
                                <span
                                    class="badge bg-primary bg-opacity-50 rounded-1 text-dark py-2 px-3 fs-13 fw-semibold">
                                    <form action="{{ route('servic-edetails.destroy', $servic_edetail) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                      
                                        <a href="#" onclick="event.preventDefault(); if(confirm('Are you sure you want to delete?')) { this.closest('form').submit(); }" >
                                            Remove
                                        </a>
                                        
                                      
                                    </form>
                                </span>
                                <span
                                    class="badge bg-success bg-opacity-50 rounded-1 text-dark py-2 px-3 fs-13 fw-semibold ms-10">
                                    <a href="{{ route('servic-edetails.edit', $servic_edetail->id) }}">
                                        Rename
                                    </a>
                                </span>
                            </div>
                            <img src="{{ asset('storage/' . $servic_edetail->photo) }}" class="mb-4 rounded-10" alt="card">
                            <h3 class="mb-3 fs-16 fw-semibold">{{$servic_edetail->title}}</h3>
                            <p class="mb-20">{{$servic_edetail->slug}}</p>
                            <a href="{{ route('servic-edetails.show', $servic_edetail) }}"
                                class="btn btn-primary py-2 px-4 bg-primary bg-opacity-10 fw-semibold text-primary border-0 hover-bg">
                                View Details
                            </a>
                        </div>
                    </div>
                </div>
                @empty
                    <h3>No Data Found!</h3>
                @endforelse


            </div>
        </div>
    </div>
@endsection
