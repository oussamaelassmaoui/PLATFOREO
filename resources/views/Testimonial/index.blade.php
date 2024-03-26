@extends('layouts.dashboardnav')

@section('content')
    <div class="d-sm-flex text-center justify-content-between align-items-center mb-4">
        <h3 class="mb-sm-0 mb-1 fs-18">Testimonial</h3>
        <ul class="ps-0 mb-0 list-unstyled d-flex justify-content-center">
            <li>
                <a href="{{route('admin.dashboard')}}" class="text-decoration-none">
                    <i class="ri-home-2-line" style="position: relative; top: -1px;"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li>
                <span class="fw-semibold fs-14 heading-font text-dark dot ms-2">Testimonial</span>
            </li>
        </ul>
    </div>
    
        
        
            <div class="card bg-white border-0 rounded-10 mb-4">
                <div class="card-body p-4">
                    <div class="d-sm-flex justify-content-between text-center align-items-center border-bottom pb-20 mb-20">
                        <h4 class="fw-semibold fs-18 mb-sm-0">Testimonial</h4>
                        <button class="border-0 btn btn-primary py-2 px-4 text-white fs-14 fw-semibold rounded-3"
                            data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                            <span class="py-sm-1 d-block">
                                <i class="ri-add-line text-white"></i>
                                <span>Create Testimonial</span>
                            </span>
                        </button>
                    </div>
                    <div class="default-table-area recent-files-list">
                        <div class="table-responsive">
                            <table class="table align-middle">
                                <thead>
                                    <tr class="text-center">
                                        <th scope="col">Photo</th>
                                        <th scope="col" class="text-primary text-start">Name</th>
                                        <th scope="col">work</th>
                                        <th scope="col">message</th>
                                       
                                        <th scope="col">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ( $Testimonials as $item )
                                    <tr class="text-center">
                                        <td class="text-start">
                                            <div class="d-flex align-items-center">
                                               
                                                <img src="{{ asset('storage/' . $item->photo) }}" class="wh-44 rounded-circle"
                                                alt="{{$item->photo}}">
                                            </div>
                                            </div>
                                        </td>
                                        
                                        <td class="text-start">
                                            <div class="d-flex align-items-center">
                                               
                                                <div class="flex-grow-1 ms-10">
                                                    <h4 class="fw-semibold fs-14 mb-0">{{$item->name}}</h4>
                                                </div>
                                            </div>
                                        </td>

                                        <td class="text-start">
                                            <div class="d-flex align-items-center">
                                               
                                                <div class="flex-grow-1 ms-10">
                                                    <h4 class="fw-semibold fs-14 mb-0">{{$item->work}}</h4>
                                                </div>
                                            </div>
                                        </td>

                                        <td class="text-start">
                                            <div class="d-flex align-items-center">
                                               
                                                <div class="flex-grow-1 ms-10">
                                                    <h4 class="fw-semibold fs-14 mb-0">{{$item->text}}</h4>
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
                                                        <a class="dropdown-item" href="{{ route('Testimonial.edit', $item->id) }}">
                                                            <i data-feather="edit-3"></i>
                                                            Rename
                                                        </a>
                                                    </li>
                                                   
                                                    <li>
                                                       
                                                        <form action="{{ route('Testimonial.destroy', $item) }}" method="POST" class="dropdown-item" >
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
            <h5 class="offcanvas-title fs-18 mb-0" id="offcanvasRightLabel">Create Testimonial</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body p-4">
            <form  action="{{ route('Testimonial.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
               
               
                    <div class="form-group mb-4">
                        <label class="label">Testimonial Name</label>
                        <input type="text" name="name" class="form-control text-dark @error('name') is-invalid @enderror" placeholder="item Name" value="{{ old('name') }}" required>
                    @error('name')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                    </div>

                    <div class="form-group mb-4">
                        <label class="label">Work</label>
                        <input type="text" name="work" class="form-control text-dark @error('work') is-invalid @enderror" placeholder="item work" value="{{ old('work') }}" required>
                    @error('work')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                    </div>

                    <div class="form-group mb-4">
                        <label class="label">Message</label>
                        <input type="text" name="text" class="form-control text-dark @error('text') is-invalid @enderror" placeholder="item text" value="{{ old('text') }}" required>
                    @error('text')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                    </div>
                   
                    <div class="form-group mb-4">
                        <label class="label">You Photo</label>
                        <input type="file" name="photo" class="form-control text-dark file @error('name') is-invalid @enderror">
                        @error('photo')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    
                       
                   
                    <div class="form-group d-flex gap-3">
                        <button class="btn btn-primary text-white fw-semibold py-2 px-2 px-sm-3" type="submit">
                            <span class="py-sm-1 d-block">
                                <i class="ri-add-line text-white"></i>
                                <span>Create Testimonial</span>
                            </span>
                        </button>
                    </div>
              
            </form>
        </div>
    </div>
    {{-- <script>
        document.getElementById('sweetalert_13').addEventListener('click', function(e) {
    Swal.fire({
        title: "Are you sure?",
        text: "You won to be able to revert this!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonText: "Yes, delete it!",
        cancelButtonText: "No, cancel!",
        reverseButtons: true
    }).then(function(result) {
        if (result.value) {
            Swal.fire(
                "Deleted!",
                "Your file has been deleted.",
                "success"
            );
        } else if (result.dismiss === "cancel") {
            Swal.fire(
                "Cancelled",
                "Your imaginary file is safe :)",
                "error"
            );
        }
    });
});
    </script> --}}
@endsection
