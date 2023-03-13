@extends('admin.layouts.app')

@section('content')
@include('sweetalert::alert')
<div class="main-card mb-3 card">
    <div class="m-3" style="margin-bottom: 20px">

        <div class="button-list-flex">
            <h4>Create Product</h4>

            <a href="{{ route('product.index') }}">
                <button class="btn btn-primary" href>
                    Product List
                </button>
            </a>
        </div>


        <form action="{{route('product.store')}}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="col-sm-12 col-md-6">
                <div class="form-group">
                    <label for="title">Product Title</label>
                    <input type="text" name="title"
                        class="form-control md-2 {{ $errors->has('title') ? 'is-invalid' : '' }}"
                        value="{{ old('title') }}" placeholder="Write Your Title" />
                    @if ($errors->has('title'))
                    <div class="invalid-feedback">{{ $errors->first('title') }}</div>
                    @endif
                </div>
            </div>
            <div class="col-sm-12 col-md-6">
                <div class="form-group">
                    <label>Product Image</label>
                    <div class="custom-file">
                        <input type="file" name="image"
                            class="custom-file-input form-control {{ $errors->has('image') ? 'is-invalid' : '' }}"
                            id="PartnersImageFile" />
                        <label class="custom-file-label" for="PartnersImageFile">Choose file</label>
                        @if ($errors->has('image'))
                        <div class="invalid-feedback">{{ $errors->first('image') }}</div>
                        @endif
                    </div>
                    <div id="emailHelp" class="form-text text-info">Recommended image shape:(600x600) px </div>
                    {{-- this one --}}
                    <img class="mt-2" src="#" id="image_tag" width="200px" />
                </div>
            </div>
            <div class="col-sm-12 col-md-6">
                <div class="form-group">
                    <label for="title">Description</label>
                    <textarea class="form-control d-none summernote{{ $errors->has('description') ? 'is-invalid' : '' }}" id="description" placeholder="Write Your Designation"
                              name="description"></textarea>
                    @if ($errors->has('description'))
                    <div class="invalid-feedback">{{ $errors->first('description') }}</div>
                    @endif
                </div>
            </div>
            <div class="col-sm-12 col-md-6">
                <div class="form-group">
                    <label for="title">Model</label>
                    <textarea class="form-control {{ $errors->has('model') ? 'is-invalid' : '' }}" id="model" placeholder="Write Your model"
                        name="model"></textarea>
                    @if ($errors->has('model'))
                    <div class="invalid-feedback">{{ $errors->first('model') }}</div>
                    @endif
                </div>
            </div>
            <div class="col-sm-12 col-md-6">
                <div class="form-group">
                    <label for="title">Category</label>
                    <textarea class="form-control {{ $errors->has('category') ? 'is-invalid' : '' }}" id="category" placeholder="Write Your category"
                              name="category"></textarea>
                    @if ($errors->has('category'))
                        <div class="invalid-feedback">{{ $errors->first('category') }}</div>
                    @endif
                </div>
            </div>
            <div class="col-sm-12 col-md-6">
                <div class="form-group">
                    <label for="title">Manufacturer</label>
                    <textarea class="form-control {{ $errors->has('manufacturer') ? 'is-invalid' : '' }}" id="manufacturer" placeholder="Write Your manufacturer"
                              name="manufacturer"></textarea>
                    @if ($errors->has('manufacturer'))
                        <div class="invalid-feedback">{{ $errors->first('manufacturer') }}</div>
                    @endif
                </div>
            </div>
            <div class="col-sm-12 col-md-6">
                <div class="form-group">
                    <label for="title">Brand</label>
                    <textarea class="form-control {{ $errors->has('brand') ? 'is-invalid' : '' }}" id="brand" placeholder="Write Your brand"
                              name="brand"></textarea>
                    @if ($errors->has('brand'))
                        <div class="invalid-feedback">{{ $errors->first('brand') }}</div>
                    @endif
                </div>
            </div>
            <div class="col-sm-12 col-md-6">
                <div class="form-group">
                    <label for="title">Origin</label>
                    <textarea class="form-control {{ $errors->has('origin') ? 'is-invalid' : '' }}" id="origin" placeholder="Write Your origin"
                              name="origin"></textarea>
                    @if ($errors->has('origin'))
                        <div class="invalid-feedback">{{ $errors->first('origin') }}</div>
                    @endif
                </div>
            </div>
            <div class="col-sm-12 col-md-6">
                <div class="form-group">
                    <label for="title">Filter Name</label>
                    <select class="form-control m-bootstrap-select m_selectpicker" name="filter_id" data-live-search="true">
                        <option value="">---- Select ----</option>
                        @foreach($filters as $filter)
                            <option value="{{$filter->id}}"
                                {{$filter->id == old('filter_id') ? 'selected' : ''}}>{{$filter->name}}</option>
                        @endforeach
                    </select>
                    @if ($errors->has('filter_id'))
                        <div class="invalid-feedback">{{ $errors->first('filter_id') }}</div>
                    @endif
                </div>
            </div>

{{--            <div class="col-sm-12 col-md-6">--}}
{{--                <div class="form-group">--}}
{{--                    <label for="title">Stock</label>--}}
{{--                    <input type="number" class="form-control {{ $errors->has('stock') ? 'is-invalid' : '' }}"--}}
{{--                           id="stock" placeholder="Write Your stock" name="stock"/>--}}
{{--                    @if ($errors->has('stock'))--}}
{{--                        <div class="invalid-feedback">{{ $errors->first('stock') }}</div>--}}
{{--                    @endif--}}
{{--                </div>--}}
{{--            </div>--}}

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
