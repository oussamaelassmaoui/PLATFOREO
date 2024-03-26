@extends('layouts.dashboardnav')
@section('content')
    <div class="d-sm-flex text-center justify-content-between align-items-center mb-4">
        <h3 class="mb-sm-0 mb-1 fs-18">Connections</h3>
        <ul class="ps-0 mb-0 list-unstyled d-flex justify-content-center">
            <li>
                <a href="{{route('admin.dashboard')}}" class="text-decoration-none">
                    <i class="ri-home-2-line" style="position: relative; top: -1px;"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li>
                <span class="fw-semibold fs-14 heading-font text-dark dot ms-2">Connections</span>
            </li>
        </ul>
    </div>
    <div class="row justify-content-center">
        <div class="col-xxl-9">
            <div class="card bg-white border-0 rounded-10 mb-4">
                <div class="card-body p-4">
                    <h4 class="fw-semibold fs-18 border-bottom pb-20 mb-20">Connections</h4>
                    <ul class="ps-0 mb-4 list-unstyled d-sm-flex gap-3">
                        <li>
                            <a href="{{route('profile.edit')}}"
                                class="btn btn-primary bg-primary text-primary py-2 bg-opacity-10 px-3 border-0 fw-semibold w-sm-100 d-inline-block">Account</a>
                        </li>
                        <li>
                            <a href="{{route('update_password')}}"
                                class="btn btn-primary bg-primary text-primary py-2 px-3 bg-opacity-10 border-0 fw-semibold w-sm-100 d-inline-block mt-2 mt-sm-0">Security</a>
                        </li>
                        <li>
                            <a href="{{route('connections')}}"
                                class="btn btn-primary bg-primary text-white py-2 px-3 border-0 fw-semibold w-sm-100 d-inline-block mt-2 mt-sm-0">Connections</a>
                        </li>
                        <li>
                            <a href="{{route('delete_user')}}"
                                class="btn btn-primary bg-primary text-primary py-2 px-3 bg-opacity-10 border-0 fw-semibold w-sm-100 d-inline-block mt-2 mt-sm-0">delete</a>
                        </li>
                    </ul>
                    <div class="border-bottom pb-3 mb-3">
                        <h4 class="fs-18 fw-semibold mb-1">Connection</h4>
                        <p class="fs-15">Update your photo and personal details here.</p>
                    </div>
                    <h4 class="fs-18 fw-semibold mb-1 mt-4">Connected Accounts</h4>
                    <div class="default-table-area notification-list">
                        <div class="table-responsive">
                            <table class="table align-middle">
                                <tbody>
                                    <tr>
                                        <td class="ps-0">
                                            <div class="d-flex align-items-center">
                                                <img src="Backend/images/google2.svg" alt="google2">
                                                <div class="ms-3">
                                                    <span
                                                        class="w-600 fs-16 text-truncate fw-semibold text-dark">Google<span>
                                                            <p class="fs-14 fw-normal text-gray-light">Calendar and Contacts
                                                            </p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-end pe-0 fs-14">
                                            <a href="{{ auth()->user()->email }}"
                                                class="text-decoration-none text-primary fw-semibold fs-14">{{ auth()->user()->email }}</a>
                                        </td>
                                    </tr>
                                    
                                    <tr>
                                        <td class="ps-0">
                                            <div class="d-flex align-items-center">
                                                <img src="Backend/images/git.svg" alt="git">
                                                <div class="ms-3">
                                                    <span
                                                        class="w-600 fs-16 text-truncate fw-semibold text-dark">Github<span>
                                                            <p class="fs-14 fw-normal text-gray-light">Manage your Git
                                                                repositories</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-end pe-0 fs-14">
                                            <a href="{{ auth()->user()->Github}}"
                                                class="text-decoration-none text-primary fw-semibold fs-14"> {{ auth()->user()->Github}}</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="ps-0">
                                            <div class="d-flex align-items-center">
                                                <img src="Backend/images/linkedin.svg" alt="Linkedin" width="7%">
                                                <div class="ms-3">
                                                    <span
                                                        class="w-600 fs-16 text-truncate fw-semibold text-dark">Linkedin<span>
                                                            <p class="fs-14 fw-normal text-gray-light">
                                                                repositories</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-end pe-0 fs-14">
                                            <a href="{{ auth()->user()->Linkedin}}"
                                                class="text-decoration-none text-primary fw-semibold fs-14"> {{ auth()->user()->Linkedin}}</a>
                                        </td>
                                    </tr>
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <h4 class="fs-18 fw-semibold mb-1 mt-3">Social Accounts</h4>
                    <div class="default-table-area notification-list">
                        <div class="table-responsive">
                            <table class="table align-middle">
                                <tbody>
                                    <tr>
                                        <td class="ps-0">
                                            <div class="d-flex align-items-center">
                                                <img src="Backend/images/facebook2.svg" alt="facebook2">
                                                <div class="ms-3">
                                                    <span
                                                        class="w-600 fs-16 text-truncate fw-semibold text-dark">Facebook<span>
                                                            <p class="fs-14 fw-normal text-gray-light">Calendar and Contacts
                                                            </p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-end pe-0 fs-14">
                                            <a href="{{ auth()->user()->Facebook}}"
                                                class="text-decoration-none text-primary fw-semibold fs-14"> {{ auth()->user()->Facebook}}</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="ps-0">
                                            <div class="d-flex align-items-center">
                                                <img src="Backend/images/twitter.svg" alt="twitter">
                                                <div class="ms-3">
                                                    <span
                                                        class="w-600 fs-16 text-truncate fw-semibold text-dark">Twitter<span>
                                                            <p class="fs-14 fw-normal text-gray-light">Communications</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-end pe-0 fs-14">
                                            <a href="{{ auth()->user()->Twitter}}"
                                                class="text-decoration-none text-primary fw-semibold fs-14"> {{ auth()->user()->Twitter}}</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="ps-0">
                                            <div class="d-flex align-items-center">
                                                <img src="Backend/images/instagram.svg" alt="instagram">
                                                <div class="ms-3">
                                                    <span
                                                        class="w-600 fs-16 text-truncate fw-semibold text-dark">Instagram<span>
                                                            <p class="fs-14 fw-normal text-gray-light">Manage your Git
                                                                repositories</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-end pe-0 fs-14">
                                            <a href="{{ auth()->user()->instagram}}"
                                                class="text-decoration-none text-primary fw-semibold fs-14"> {{ auth()->user()->instagram}}</a>
                                        </td>
                                    </tr>
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
