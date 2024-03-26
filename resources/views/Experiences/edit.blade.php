@extends('layouts.dashboardnav')

@section('content')
    <form class="row g-3 needs-validation" action="{{ route('Experiences.update', $Experience->id) }}" method="POST"
        enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="col-md-6">
            <label for="validationCustom10" class="form-label label">name_company</label>
            <div class="position-relative">
                <input type="text" class="form-control h-58 @error('name_company') is-invalid @enderror" name="name_company"
                    id="validationCustom10" value="{{ old('name_company', $Experience->name_company) }}" required>

            </div>
            @error('name_company')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="col-md-6">
            <label for="validationCustom10" class="form-label label">subject</label>
            <div class="position-relative">
                <input type="text" class="form-control h-58 @error('subject') is-invalid @enderror" name="subject"
                    id="validationCustom10" value="{{ old('subject', $Experience->subject) }}" required>

            </div>
            @error('subject')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="col-md-6">
            <label for="validationCustom10" class="form-label label">Start Date</label>
            <div class="position-relative">
                <input type="date" class="form-control h-58 @error('Start_Date') is-invalid @enderror" name="Start_Date"
                    id="validationCustom10" value="{{ old('Start_Date', $Experience->Start_Date) }}" required>

            </div>
            @error('Start_Date')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="col-md-6">
            <label for="validationCustom10" class="form-label label">date final</label>
            <div class="position-relative">
                <input type="date" class="form-control h-58 @error('date_final') is-invalid @enderror" name="date_final"
                    id="validationCustom10" value="{{ old('date_final', $Experience->date_final) }}" required>

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
                   >{{ old('description', $Experience->description) }}</textarea>

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
