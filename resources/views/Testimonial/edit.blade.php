@extends('layouts.dashboardnav')

@section('content')
    <form class="row g-3 needs-validation" action="{{ route('Testimonial.update', $Testimonial->id) }}" method="POST"
        enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="col-md-6">
            <label for="validationCustom10" class="form-label label">name</label>
            <div class="position-relative">
                <input type="text" class="form-control h-58 @error('name') is-invalid @enderror" name="name"
                    id="validationCustom10" value="{{ old('name', $Testimonial->name) }}" required>

            </div>
            @error('name')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="col-md-6">
            <label for="validationCustom10" class="form-label label">Work</label>
            <div class="position-relative">
                <input type="text" class="form-control h-58 @error('work') is-invalid @enderror" name="work"
                    id="validationCustom10" value="{{ old('work', $Testimonial->work) }}" required>

            </div>
            @error('work')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="col-md-6">
            <label for="validationCustom10" class="form-label label">text</label>
            <div class="position-relative">
                <input type="text" class="form-control h-58 @error('text') is-invalid @enderror" name="text"
                    id="validationCustom10" value="{{ old('text', $Testimonial->text) }}" required>

            </div>
            @error('text')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="col-md-6">
            <div class="form-group mb-4">
                <label class="label">You Photo</label>
                <input type="file" name="photo" class="form-control text-dark file  @error('photo') is-invalid @enderror">
                @error('photo')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        
        
        <div class="col-12">
            <button class="btn btn-primary fw-semibold text-white py-2 px-3" type="submit">Submit Form</button>
        </div>
    </form>
    <br>
    <br>
   
@endsection
