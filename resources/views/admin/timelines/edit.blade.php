@extends('admin.layouts.app')

@section('content')
@include('sweetalert::alert')
<div class="main-card mb-3 card">
    <div class="card-body table-full-width table-responsive">



        <!--begin::Form-->
        <form action="{{route('timeline.update', $timeline->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="row col-md-6 flexbox">

                    <div class="col-xs-12 col-sm-12">
                        <div class="form-group  m-form__group">
                            <label class="form-control-label"><span class="text-danger">*</span> Client </label>
                            <textarea class="form-control {{ $errors->has('clients') ? 'is-invalid' : '' }}" id="clients" placeholder="" rows="3" name="clients" cols="50">{{
                                old('clients', $timeline->clients) }}</textarea>
                            @if ($errors->has('clients'))
                            <div class="invalid-feedback">{{ $errors->first('clients') }}</div>
                            @endif
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12">
                        <div class="form-group  m-form__group">
                            <label class="form-control-label"><span class="text-danger">*</span> Projects </label>
                            <textarea class="form-control {{ $errors->has('projects') ? 'is-invalid' : '' }}" id="projects" placeholder="" rows="3" name="projects"
                                cols="50">{{ old('projects', $timeline->projects)
                                }}</textarea>
                            @if ($errors->has('projects'))
                            <div class="invalid-feedback">{{ $errors->first('projects') }}</div>
                            @endif
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12">
                        <div class="form-group  m-form__group">
                            <label class="form-control-label"><span class="text-danger">*</span> Experience </label>
                            <textarea class="form-control {{ $errors->has('experience') ? 'is-invalid' : '' }}" id="experience" placeholder="" rows="3" name="experience"
                                cols="50">{{ old('experience', $timeline->experience)
                                }}</textarea>
                            @if ($errors->has('experience'))
                            <div class="invalid-feedback">{{ $errors->first('experience') }}</div>
                            @endif
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12">
                        <div class="form-group  m-form__group">
                            <label class="form-control-label"><span class="text-danger">*</span> Awards </label>
                            <textarea class="form-control {{ $errors->has('awards') ? 'is-invalid' : '' }}" id="awards" placeholder="" rows="3" name="awards"
                                      cols="50">{{ old('awards', $timeline->awards)
                                }}</textarea>
                            @if ($errors->has('awards'))
                                <div class="invalid-feedback">{{ $errors->first('awards') }}</div>
                            @endif
                        </div>
                    </div>

                    <div class="m-portlet__foot m-portlet__foot--fit">
                        <div class="m-form__actions text-center flexbox">
                            <a href="{{ route('timeline.index') }}" class="btn btn-danger btn-flex"><i
                                    class="fa fa-times"></i> Cancel</a>
                            <button type="submit" class="btn btn-success btn-flex"><i class="fa fa-save"></i>
                                Save</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <!--end::Form-->
    </div>
</div>
@endsection
@push('scripts')
<script>
    function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#image_tag').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }
        $("#PartnersImageFile").change(function(){
            document.getElementById('image_tag').style.display = "block";
            readURL(this);
        });
</script>

@endpush
