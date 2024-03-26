@extends('layouts.dashboardnav')

@section('content')
    <form class="row g-3 needs-validation" action="{{ route('Skills.update', $Skill->id) }}" method="POST"
        enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="col-md-6">
            <label for="validationCustom10" class="form-label label">name</label>
            <div class="position-relative">
                <input type="text" class="form-control h-58 @error('name') is-invalid @enderror" name="name"
                    id="validationCustom10" value="{{ old('name', $Skill->name) }}" required>

            </div>
            @error('name')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="col-md-6">
            <div class="form-group mb-4">
                <label class="label">You Photo</label>
                <input type="file" name="Photo" class="form-control text-dark file  @error('Photo') is-invalid @enderror">
                @error('Photo')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="form-group mb-4">
            <label class="label">Skills Types</label>
            <div class="form-group position-relative">
                <select name="SkillsType_id" id="SkillsType_id" class="form-select form-control h-58" aria-label="Default select example">
                         @foreach ($Skills_Types as $Skills_Type)
                         <option  value="{{$Skills_Type->id }}">{{ $Skills_Type->name}}</option>
                         @endforeach
                   
                    
                </select>
            </div>
        </div>
        
        <div class="col-12">
            <button class="btn btn-primary fw-semibold text-white py-2 px-3" type="submit">Submit Form</button>
        </div>
    </form>
    <br>
    <br>
   
@endsection
