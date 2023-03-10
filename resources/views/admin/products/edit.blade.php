@extends('admin.layouts.app')

@section('content')
@include('sweetalert::alert')
<div class="main-card mb-3 card">
    <div class="card-body table-full-width table-responsive">

        <div class="button-list-flex">
            <h4> Product Details Edit</h4>

            <a href="{{ route('product.index') }}">
                <button class="btn btn-primary" href>
                    Product List
                </button>
            </a>
        </div>

        <!--begin::Form-->
        <form action="{{route('product.update', $product->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="row col-md-6 flexbox">

                    <div class="col-xs-12 col-sm-12">
                        <div class="form-group  m-form__group">
                            <label class="form-control-label"><span class="text-danger">*</span> Title </label>
                            <textarea class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}" id="title" placeholder="" rows="3" name="title" cols="50">{{
                                old('title', $product->title) }}</textarea>
                            @if ($errors->has('title'))
                            <div class="invalid-feedback">{{ $errors->first('title') }}</div>
                            @endif
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12">
                        <div class="form-group  m-form__group">
                            <label class="form-control-label"><span class="text-danger">*</span> Description </label>
                            <textarea class="form-control d-none summernote{{ $errors->has('description') ? 'is-invalid' : '' }}" id="description" placeholder="" rows="3" name="description"
                                      cols="50">{{ old('description', $product->description)
                                }}</textarea>
                            @if ($errors->has('description'))
                            <div class="invalid-feedback">{{ $errors->first('description') }}</div>
                            @endif
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12">
                        <div class="form-group  m-form__group">
                            <label class="form-control-label"><span class="text-danger">*</span> Model </label>
                            <textarea class="form-control {{ $errors->has('model') ? 'is-invalid' : '' }}" id="model" placeholder="" rows="3" name="model"
                                cols="50">{{ old('model', $product->model)
                                }}</textarea>
                            @if ($errors->has('model'))
                            <div class="invalid-feedback">{{ $errors->first('model') }}</div>
                            @endif
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12">
                        <div class="form-group  m-form__group">
                            <label class="form-control-label"><span class="text-danger">*</span> Category </label>
                            <textarea class="form-control {{ $errors->has('category') ? 'is-invalid' : '' }}" id="category" placeholder="" rows="3" name="category"
                                      cols="50">{{ old('category', $product->category)
                                }}</textarea>
                            @if ($errors->has('category'))
                                <div class="invalid-feedback">{{ $errors->first('category') }}</div>
                            @endif
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12">
                        <div class="form-group  m-form__group">
                            <label class="form-control-label"><span class="text-danger">*</span> Manufacturer </label>
                            <textarea class="form-control {{ $errors->has('manufacturer') ? 'is-invalid' : '' }}" id="manufacturer" placeholder="" rows="3" name="manufacturer"
                                      cols="50">{{ old('manufacturer', $product->manufacturer)
                                }}</textarea>
                            @if ($errors->has('manufacturer'))
                                <div class="invalid-feedback">{{ $errors->first('manufacturer') }}</div>
                            @endif
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12">
                        <div class="form-group  m-form__group">
                            <label class="form-control-label"><span class="text-danger">*</span> Brand </label>
                            <textarea class="form-control {{ $errors->has('brand') ? 'is-invalid' : '' }}" id="brand" placeholder="" rows="3" name="brand"
                                      cols="50">{{ old('brand', $product->brand)
                                }}</textarea>
                            @if ($errors->has('brand'))
                                <div class="invalid-feedback">{{ $errors->first('brand') }}</div>
                            @endif
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12">
                        <div class="form-group  m-form__group">
                            <label class="form-control-label"><span class="text-danger">*</span> Origin </label>
                            <textarea class="form-control {{ $errors->has('origin') ? 'is-invalid' : '' }}" id="origin" placeholder="" rows="3" name="origin"
                                      cols="50">{{ old('origin', $product->origin)
                                }}</textarea>
                            @if ($errors->has('origin'))
                                <div class="invalid-feedback">{{ $errors->first('origin') }}</div>
                            @endif
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12">
                        <div class="form-group  m-form__group">
                            <label class="form-control-label"><span class="text-danger">*</span> Filter Name</label>
                            <select class="form-control" data-live-search="true" name="filter_id" id="filter_id">
                                <option value="">---Select Filter ---</option>
                                @foreach($filters as $filter)
                                    <option value="{{$filter->id}}"
                                        {{$product->filter_id == $filter->id  ? 'selected' : ''}}>{{$filter->name}}</option>
                                @endforeach
                            </select>
                            @if ($errors->has('filter_id'))
                                <div class="invalid-feedback">{{ $errors->first('filter_id') }}</div>
                            @endif
                        </div>
                    </div>
{{--                    <div class="col-xs-12 col-sm-12">--}}
{{--                        <div class="form-group  m-form__group">--}}
{{--                            <label class="form-control-label"><span class="text-danger">*</span> Stock </label>--}}

{{--                            <input type="number" class="form-control {{ $errors->has('stock') ? 'is-invalid' : '' }}"--}}
{{--                                   name="stock" id="stock" placeholder="stock" value="{{ old('stock', $product->stock) }}" />--}}
{{--                            @if ($errors->has('stock'))--}}
{{--                                <div class="invalid-feedback">{{ $errors->first('stock') }}</div>--}}
{{--                            @endif--}}
{{--                        </div>--}}
{{--                    </div>--}}
                    <div class="col-xs-12 col-sm-12">
                        <div class="form-group  m-form__group">
                            <label class="form-control-label"><span class="text-danger">*</span> Status </label>
                            <select class="form-control m-input"  name="status">
                                <option value="1" {{ $product->status == 1  ? 'selected' : '' }}>Active</option>
                                <option value="0" {{ $product->status == 0  ? 'selected' : '' }}>Inactive</option>
                            </select>
                            @if ($errors->has('status'))
                                <div class="invalid-feedback">{{ $errors->first('status') }}</div>
                            @endif
                        </div>
                    </div>


                    {{-- product image area --}}
                    <div class="col-xs-12 col-sm-12">
                        <div class="form-group">
                            <div class="service-flex">
                                <label class="form-control-label">Product Image</label>
                                <img class="img-thumbnail" src="{{ asset('assets/uploads/product/'.$product->image)}}"
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
                            <div id="emailHelp" class="form-text text-info">Recommended image shape:(600x600) px </div>
                            <img class="mt-4" style="display: none" src="#" id="image_tag" width="200px" />
                        </div>
                    </div>
                    <div class="m-portlet__foot m-portlet__foot--fit">
                        <div class="m-form__actions text-center flexbox">
                            <a href="{{ route('product.index') }}" class="btn btn-danger btn-flex"><i
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
