@extends('layouts.dashboardnav')

@section('content')
    <div class="d-sm-flex text-center justify-content-between align-items-center mb-4">
        <h3 class="mb-sm-0 mb-1 fs-18">Educations</h3>
        <ul class="ps-0 mb-0 list-unstyled d-flex justify-content-center">
            <li>
                <a href="{{route('admin.dashboard')}}" class="text-decoration-none">
                    <i class="ri-home-2-line" style="position: relative; top: -1px;"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li>
                <span class="fw-semibold fs-14 heading-font text-dark dot ms-2">Educations</span>
            </li>
        </ul>
    </div>
    
        
        
            <div class="card bg-white border-0 rounded-10 mb-4">
                <div class="card-body p-4">
                    <div class="d-sm-flex justify-content-between text-center align-items-center border-bottom pb-20 mb-20">
                        <h4 class="fw-semibold fs-18 mb-sm-0">Educations</h4>
                        <button class="border-0 btn btn-primary py-2 px-4 text-white fs-14 fw-semibold rounded-3"
                            data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                            <span class="py-sm-1 d-block">
                                <i class="ri-add-line text-white"></i>
                                <span>Create Educations</span>
                            </span>
                        </button>
                    </div>
                    <div class="default-table-area recent-files-list">
                        <div class="table-responsive">
                            <table class="table align-middle">
                                <thead>
                                    <tr class="text-center">
                                        <th scope="col">name ecole</th>
                                        <th scope="col">specialty</th>
                                        <th scope="col">Start Date</th>
                                        <th scope="col">date final</th>
                                        <th scope="col">description</th>
                                        <th scope="col">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ( $Educations as $item )
                                    <tr class="text-center">
                                        
                                        
                                        <td class="text-start">
                                            <div class="d-flex align-items-center">
                                               
                                                <div class="flex-grow-1 ms-10">
                                                    <h4 class="fw-semibold fs-14 mb-0">{{$item->name_ecole}}</h4>
                                                </div>
                                            </div>
                                        </td>

                                        <td class="text-start">
                                            <div class="d-flex align-items-center">
                                               
                                                <div class="flex-grow-1 ms-10">
                                                    <h4 class="fw-semibold fs-14 mb-0">{{$item->specialty}}</h4>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-start">
                                            <div class="d-flex align-items-center">
                                               
                                                <div class="flex-grow-1 ms-10">
                                                    <h4 class="fw-semibold fs-14 mb-0">{{$item->Start_Date}}</h4>
                                                </div>
                                            </div>
                                        </td>

                                        <td class="text-start">
                                            <div class="d-flex align-items-center">
                                               
                                                <div class="flex-grow-1 ms-10">
                                                    <h4 class="fw-semibold fs-14 mb-0">{{$item->date_final}}</h4>
                                                </div>
                                            </div>
                                        </td>

                                       

                                     
                                        
                                        <td class="text-start">
                                            <div class="d-flex align-items-center">
                                               
                                                <div class="flex-grow-1 ms-10">
                                                    <h4 class="fw-semibold fs-14 mb-0">{!! $item->description !!}</h4>
                                                </div>
                                            </div>
                                        </td>
                                        
                                        
                                        
                                        <td>
                                            <div class="dropdown action-opt">
                                                <button class="btn bg p-0" type="button" data-bs-toggle="dropdown"
                                                    aria-expanded="false">
                                                    <i data-feather="more-horizontal"></i>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-end bg-white border box-shadow">
                                                    
                                                    <li>
                                                        <a class="dropdown-item" href="{{ route('Educations.edit', $item->id) }}">
                                                            <i data-feather="edit-3"></i>
                                                            Rename
                                                        </a>
                                                    </li>
                                                   
                                                    <li>
                                                       
                                                        <form action="{{ route('Educations.destroy', $item) }}" method="POST" class="dropdown-item" >
                                                            @csrf
                                                            @method('DELETE')
                                                          
                                                            <a href="#" onclick="event.preventDefault(); if(confirm('Are you sure you want to delete?')) { this.closest('form').submit(); }" >
                                                               <i data-feather="trash-2"></i>  Remove
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
      
   


    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
        <div class="offcanvas-header border-bottom p-4">
            <h5 class="offcanvas-title fs-18 mb-0" id="offcanvasRightLabel">Create Education</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body p-4">
            <form  action="{{ route('Educations.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
               
               
                    <div class="form-group mb-4">
                        <label class="label">Name Ecole</label>
                        <input type="text" name="name_ecole" class="form-control text-dark @error('name_ecole') is-invalid @enderror" placeholder=" name ecole" value="{{ old('name_ecole') }}" >
                    @error('name_ecole')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                    </div>

                    <div class="form-group mb-4">
                        <label class="label">Specialty</label>
                        <input type="text" name="specialty" class="form-control text-dark @error('specialty') is-invalid @enderror" placeholder=" specialty" value="{{ old('specialty') }}" required>
                    @error('specialty')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                    </div>

                    <div class="form-group mb-4">
                        <label class="label">Start Date</label>
                        <input type="date" name="Start_Date" class="form-control text-dark @error('Start_Date') is-invalid @enderror" placeholder=" Start Date" value="{{ old('Start_Date') }}" required>
                    @error('Start_Date')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                    </div>
                   
                    <div class="form-group mb-4">
                        <label class="label">Date Final</label>
                        <input type="date" name="date_final" class="form-control text-dark @error('date_final') is-invalid @enderror" placeholder=" Start Date" value="{{ old('date_final') }}" required>
                    @error('date_final')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                    </div>

                    <div class="form-group mb-4">
                        <label for="" class="form-label label">Description</label>
                        <div class="position-relative">
                            <textarea cols="30" name="description" rows="5" class="form-control py-3 @error('description') is-invalid @enderror"
                                id="summernote" placeholder="description" >{{ old('description') }}</textarea>
            
                        </div>
                        @error('description')
                            <div class="text-danger">{{ $message }} </div>
                        @enderror
                    </div>
                    
                       
                   
                    <div class="form-group d-flex gap-3">
                        <button class="btn btn-primary text-white fw-semibold py-2 px-2 px-sm-3" type="submit">
                            <span class="py-sm-1 d-block">
                                <i class="ri-add-line text-white"></i>
                                <span>Create Education</span>
                            </span>
                        </button>
                    </div>
              
            </form>
        </div>
    </div>
    <script>
        $('#summernote').summernote({
            placeholder: 'description...',
            tabsize: 2,
            height: 100
        });
        
    </script>
@endsection
