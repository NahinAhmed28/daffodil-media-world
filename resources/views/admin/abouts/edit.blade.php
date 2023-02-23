@extends('admin.layouts.app')

@section('content')

@include('sweetalert::alert')
<div class="main-card card">
    <div class="card-body table-full-width table-responsive">
        <h4> About Details </h4>
        <!--begin::Form-->
        <form action="{{route('about.update', $about->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="row col-md-9 flexbox">
                    <div class="col-sm-12">
                        <div class="form-group {{ $errors->has('description') ? 'has-danger' : '' }}">
                            <label><span class="text-danger">*</span> Description </label>
                            <textarea class="form-control summernote d-none {{ $errors->has('description') ? 'is-invalid' : '' }}" id="description" placeholder="" rows="12"
                                name="description" cols="80">{{ old('description', $about->description) }}</textarea>
                            @if ($errors->has('description'))
                            <div class="invalid-feedback">{{ $errors->first('description') }}</div>
                            @endif
                        </div>
                    </div>

                    {{-- about image area --}}
                    <div class="col-xs-12 col-sm-12">
                        <div class="form-group">
                            <div class="about-flex">
                                <label class="form-control-label">About Image</label>
                                <img class="img-thumbnail" src="{{ asset('assets/uploads/about/'.$about->image)}}"
                                     width="200px">
                            </div>
                            <div class="custom-file">
                                <input type="file" name="image"
                                       class="custom-file-input form-control {{ $errors->has('image') ? 'is-invalid' : '' }}"
                                       id="PartnersImageFile" />
                                <label class="custom-file-label" for="PartnersImageFile">Choose file</label>
                                @if ($errors->has('image'))
                                    <div class="invalid-feedback">{{ $errors->first('image') }}</div>
                                @endif

                            </div>
                            <div id="emailHelp" class="form-text text-info">Recommended image shape:(600x400) px </div>
                            <img class="mt-4" src="#" id="image_tag" width="200px" />
                        </div>
                    </div>


                    <div class=" text-center flexbox">
                        <a href="{{ route('about.index') }}" class="btn btn-danger btn-flex"><i class="fa fa-times"></i>
                            Cancel</a>
                        <button type="submit" class="btn btn-success btn-flex"><i class="fa fa-save"></i>
                            Save</button>
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
            readURL(this);
        });
    </script>

@endpush
