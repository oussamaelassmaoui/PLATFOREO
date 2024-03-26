@extends('layouts.dashboardnav')

@section('content')
    <form class="row g-3 needs-validation" action="{{ route('servic-edetails.update', $servic_edetail->id) }}" method="POST"
        enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="col-md-6">
            <label for="validationCustom10" class="form-label label">Title</label>
            <div class="position-relative">
                <input type="text" class="form-control h-58 @error('title') is-invalid @enderror" name="title"
                    id="validationCustom10" value="{{ old('title', $servic_edetail->title) }}" required>

            </div>
            @error('title')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="col-md-6">
            <label for="validationCustom11" class="form-label label">text</label>
            <div class="position-relative">
                <input type="text" name="text" class="form-control h-58 @error('text') is-invalid @enderror"
                    id="validationCustom11" value="{{ old('text', $servic_edetail->text) }}" required>

            </div>
            @error('text')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="col-md-12">
            <label for="validationCustom18" class="form-label label">Description :</label>
            <div class="position-relative">
                <textarea cols="30" rows="5" name="description" class="form-control py-3 @error('description') is-invalid @enderror"
                    id="description" placeholder="Notes" required>{{ old('description', $servic_edetail->description) }}</textarea>

            </div>
            @error('description')
                <div class="text-danger">{{ $message }} </div>
            @enderror
        </div>


        

        <div class="col-lg-12">
            <div class="form-group">
                <label class="label">File Upload photo</label>
                <div class="form-control h-100 text-center position-relative p-4 p-lg-5">
                    <div class="product-upload">
                        <label for="file-upload" class="file-upload mb-0">
                            <i class="ri-upload-cloud-2-line fs-2 text-gray-light"></i>
                            <span class="d-block fw-semibold text-body">Drop files here or click to
                                upload.</span>
                        </label>
                        <input id="file-upload" class="@error('photo') is-invalid @enderror" type="file" name="photo">

                    </div>
                    @error('photo')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
        </div>

        <div class="col-lg-12">
            <p class="form-label label" >-- affichage --</p>
         </div> 

        <div class="col-lg-12">
            <label for="icon" class="form-label label">icon</label>
            <div class="position-relative">
                <input type="text" name="icon" class="form-control h-58 @error('icon') is-invalid @enderror"
                    id="icon" value="{{ old('icon', $servic_edetail->icon) }}" required>

            </div>
            @error('icon')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="col-lg-12">
            <label for="title_Golobale" class="form-label label">Title Golobale</label>
            <div class="position-relative">
                <input type="text" name="title_Golobale" class="form-control h-58 @error('title_Golobale') is-invalid @enderror"
                    id="title_Golobale" value="{{ old('title_Golobale', $servic_edetail->title_Golobale) }}" required>

            </div>
            @error('title_Golobale')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="col-lg-12">
            <label for="slug" class="form-label label">Slug</label>
            <div class="position-relative">
                <input type="text" name="slug" class="form-control h-58 @error('slug') is-invalid @enderror"
                    id="slug" value="{{ old('slug', $servic_edetail->slug) }}" required>

            </div>
            @error('slug')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="col-12">
            <button class="btn btn-primary fw-semibold text-white py-2 px-3" type="submit">Submit Form</button>
        </div>
    </form>
    <br>
    <br>
    <script>
      
        $('#description').summernote({
            placeholder: 'Notes',
            tabsize: 2,
            height: 100
        });
        
    </script>
@endsection
