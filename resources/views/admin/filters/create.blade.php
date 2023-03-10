@extends('admin.layouts.app')

@section('content')
    @include('sweetalert::alert')
    <div class="main-card mb-3 card">
        <div class="m-3" style="margin-bottom: 20px">

            <div class="button-list-flex">
                <h4>Create Filters</h4>

                <a href="{{ route('filter.index') }}">
                    <button class="btn btn-primary" href>
                        Filters List
                    </button>
                </a>
            </div>


            <form action="{{route('filter.store')}}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="col-sm-12 col-md-6">
                    <div class="form-group">
                        <label for="name">Filters Title</label>
                        <input type="text" name="name"
                               class="form-control md-2 {{ $errors->has('name') ? 'is-invalid' : '' }}"
                               value="{{ old('name') }}" placeholder="Write Your Title" />
                        @if ($errors->has('name'))
                            <div class="invalid-feedback">{{ $errors->first('name') }}</div>
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


