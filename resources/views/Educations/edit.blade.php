@extends('layouts.dashboardnav')

@section('content')
    <form class="row g-3 needs-validation" action="{{ route('Educations.update', $Education->id) }}" method="POST"
        enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="col-md-6">
            <label for="validationCustom10" class="form-label label">Name Ecole</label>
            <div class="position-relative">
                <input type="text" class="form-control h-58 @error('name_ecole') is-invalid @enderror" name="name_ecole"
                    id="validationCustom10" value="{{ old('name_ecole', $Education->name_ecole) }}" >

            </div>
            @error('name_ecole')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="col-md-6">
            <label for="validationCustom10" class="form-label label">Specialty</label>
            <div class="position-relative">
                <input type="text" class="form-control h-58 @error('specialty') is-invalid @enderror" name="specialty"
                    id="validationCustom10" value="{{ old('specialty', $Education->specialty) }}" required>

            </div>
            @error('specialty')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="col-md-6">
            <label for="validationCustom10" class="form-label label">Start Date</label>
            <div class="position-relative">
                <input type="date" class="form-control h-58 @error('Start_Date') is-invalid @enderror" name="Start_Date"
                    id="validationCustom10" value="{{ old('Start_Date', $Education->Start_Date) }}" required>

            </div>
            @error('Start_Date')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="col-md-6">
            <label for="validationCustom10" class="form-label label">Date Final</label>
            <div class="position-relative">
                <input type="date" class="form-control h-58 @error('date_final') is-invalid @enderror" name="date_final"
                    id="validationCustom10" value="{{ old('date_final', $Education->date_final) }}" required>

            </div>
            @error('date_final')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="col-md-12">
            <label for="validationCustom18" class="form-label label">Description</label>
            <div class="position-relative">
                <textarea cols="30" rows="5" name="description"
                    class="form-control py-3 @error('description') is-invalid @enderror" id="description" placeholder="description"
                   >{{ old('description', $Education->description) }}</textarea>

                @error('description')
                    <div class="text-danger">{{ $message }} </div>
                @enderror
            </div>
        </div>
        
        <div class="col-12">
            <button class="btn btn-primary fw-semibold text-white py-2 px-3" type="submit">Submit Form</button>
        </div>
    </form>
    <br>
    <br>
    <script>
        $('#description').summernote({
            placeholder: 'description...',
            tabsize: 2,
            height: 100
        });
       
    </script>
@endsection
