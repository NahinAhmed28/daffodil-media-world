@extends('admin.layouts.app')

@section('content')
    @include('sweetalert::alert')
    <div class="main-card mb-3 card">
        <div class="card-body table-full-width table-responsive">

            <div class="button-list-flex">
                <h4> Filter Details Edit</h4>

                <a href="{{ route('filter.index') }}">
                    <button class="btn btn-primary" href>
                        Filter List
                    </button>
                </a>
            </div>

            <!--begin::Form-->
            <form action="{{route('filter.update', $filter->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="row col-md-6 flexbox">

                        <div class="col-xs-12 col-sm-12">
                            <div class="form-group  m-form__group">
                                <label class="form-control-label"><span class="text-danger">*</span> Name </label>
                                <textarea class="form-control  {{ $errors->has('name') ? 'is-invalid' : '' }} " id="name" placeholder="" rows="3" name="name" cols="50">{{
                                old('name', $filter->name) }}</textarea>
                                @if ($errors->has('name'))
                                    <div class="invalid-feedback">{{ $errors->first('name') }}</div>
                                @endif
                            </div>
                        </div>

                        <div class="m-portlet__foot m-portlet__foot--fit">
                            <div class="m-form__actions text-center flexbox">
                                <a href="{{ route('filter.index') }}" class="btn btn-danger btn-flex"><i
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

