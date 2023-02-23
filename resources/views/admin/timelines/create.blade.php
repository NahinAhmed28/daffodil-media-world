@extends('admin.layouts.app')

@section('content')
@include('sweetalert::alert')
<div class="main-card mb-3 card">
    <div class="m-3" style="margin-bottom: 20px">

        <div class="button-list-flex">
            <h4>Create Timeline</h4>

            <a href="{{ route('timeline.index') }}">
                <button class="btn btn-primary" href>
                    Timeline Details
                </button>
            </a>
        </div>


        <form action="{{route('timeline.store')}}" method="POST" enctype="multipart/form-data">
            @csrf


            <div class="col-sm-12 col-md-6">
                <div class="form-group">
                    <label for="title">Clients</label>
                    <textarea class="form-control {{ $errors->has('clients') ? 'is-invalid' : '' }}" id="clients" placeholder="Write Your Designation"
                        name="clients"></textarea>
                    @if ($errors->has('clients'))
                    <div class="invalid-feedback">{{ $errors->first('clients') }}</div>
                    @endif
                </div>
            </div>
            <div class="col-sm-12 col-md-6">
                <div class="form-group">
                    <label for="title">Projects</label>
                    <textarea class="form-control {{ $errors->has('projects') ? 'is-invalid' : '' }}" id="projects" placeholder="Write Your projects"
                        name="projects"></textarea>
                    @if ($errors->has('projects'))
                    <div class="invalid-feedback">{{ $errors->first('projects') }}</div>
                    @endif
                </div>
            </div>
            <div class="col-sm-12 col-md-6">
                <div class="form-group">
                    <label for="title">Experiences</label>
                    <textarea class="form-control {{ $errors->has('experience') ? 'is-invalid' : '' }}" id="experience" placeholder="Write Your experience"
                              name="experience"></textarea>
                    @if ($errors->has('experience'))
                        <div class="invalid-feedback">{{ $errors->first('experience') }}</div>
                    @endif
                </div>
            </div>
            <div class="col-sm-12 col-md-6">
                <div class="form-group">
                    <label for="title">Awards</label>
                    <textarea class="form-control {{ $errors->has('award') ? 'is-invalid' : '' }}" id="award" placeholder="Write Your award"
                              name="award"></textarea>
                    @if ($errors->has('award'))
                        <div class="invalid-feedback">{{ $errors->first('award') }}</div>
                    @endif
                </div>
            </div>
            <div class="col-sm-12 col-md-6">
                <button class="btn btn-success mt-2" type="submit">Submit Info</button>
            </div>
        </form>
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
