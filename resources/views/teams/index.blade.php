@extends('layouts.dashboardnav')

@section('content')
    <div class="d-sm-flex text-center justify-content-between align-items-center mb-4">
        <h3 class="mb-sm-0 mb-1 fs-18">teams</h3>
        <ul class="ps-0 mb-0 list-unstyled d-flex justify-content-center">
            <li>
                <a href="{{route('admin.dashboard')}}" class="text-decoration-none">
                    <i class="ri-home-2-line" style="position: relative; top: -1px;"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li>
                <span class="fw-semibold fs-14 heading-font text-dark dot ms-2">teams</span>
            </li>
        </ul>
    </div>



    <div class="card bg-white border-0 rounded-10 mb-4">
        <div class="card-body p-4">
            <div class="d-sm-flex justify-content-between text-center align-items-center border-bottom pb-20 mb-20">
                <h4 class="fw-semibold fs-18 mb-sm-0">teams</h4>
                <a href="{{ route('teams.create') }}">
                    <button class="border-0 btn btn-primary py-2 px-4 text-white fs-14 fw-semibold rounded-3"
                        data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                        <span class="py-sm-1 d-block">
                            <i class="ri-add-line text-white"></i>
                            <span>Create teams</span>
                        </span>
                    </button>
                </a>
            </div>
            <div class="default-table-area recent-files-list">
                <div class="table-responsive">
                    <table class="table align-middle">
                        <thead>
                            <tr class="text-center">
                                <th scope="col">Photo</th>
                                <th scope="col">Name</th>
                                <th scope="col">email</th>
                                <th scope="col">Mobile</th>
                                <th scope="col">About_Me</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($teams as $item)
                                <tr class="text-center">
                                    <td class="text-start">
                                        <div class="d-flex align-items-center">

                                            <img src="{{ asset('storage/' . $item->photo) }}" class="wh-44 rounded-circle"
                                                alt="{{ $item->photo }}">
                                        </div>
                </div>
                </td>

                <td class="text-start">
                    <div class="d-flex align-items-center">

                        <div class="flex-grow-1 ms-10">
                            <h4 class="fw-semibold fs-14 mb-0">{{ $item->name }}</h4>
                        </div>
                    </div>
                </td>

                <td class="text-start">
                    <div class="d-flex align-items-center">
                        <div class="flex-grow-1 ms-10">
                            <h4 class="fw-semibold fs-14 mb-0">{{ $item->email }}</h4>
                        </div>
                    </div>
                </td>

                <td>
                    <span>{{ $item->Mobile }}</span>
                </td>
                <td class="text-start">
                    <div class="d-flex align-items-center">
                        <div class="flex-grow-1 ms-10">
                            <h4 class="fw-semibold fs-14 mb-0">{{ $item->About_Me }}</h4>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="dropdown action-opt">
                        <button class="btn bg p-0" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i data-feather="more-horizontal"></i>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end bg-white border box-shadow">

                            <li>
                                <a class="dropdown-item" href="{{ route('teams.edit', $item->id) }}">
                                    <i data-feather="edit-3"></i>
                                    Rename
                                </a>
                            </li>

                            <li>

                                <form action="{{ route('teams.destroy', $item) }}" method="POST" class="dropdown-item">
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
                </td>
                </tr>
            @empty
                <h4>No Data Found!</h4>
                @endforelse


                </tbody>
                </table>
            </div>

        </div>
    </div>
@endsection
