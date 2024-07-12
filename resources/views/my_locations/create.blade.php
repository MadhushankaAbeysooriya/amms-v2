@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Location</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item ">Master Data</li>
                            <li class="breadcrumb-item ">Location Type Management</li>
                            <li class="breadcrumb-item active">Create</li>
                        </ol>
                    </div>
                </div>
        </section>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-teal">
                    <div class="card-header">
                        <h3 class="card-title">Create New Location</h3>
                        {{-- <div class="card-tools">
                            <a class="btn btn-primary" href="{{ route('roles.index') }}"> Back</a>
                        </div> --}}
                    </div>

                    <form role="form" method="POST" action="{{route('locations.store')}}"
                          enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">

                            <div class="form-group row">
                                <label for="location_type" class="col-sm-2 col-form-label">Location Type</label>
                                <div class="col-sm-6">
                                    <select class="form-control select2" name="location_type_id" id="location_type_id"
                                            autocomplete="off">
                                        <option value="" selected>select one</option>
                                        @foreach($locationTypes as $locationType)
                                            <option value="{{$locationType->id}}">{{$locationType->name}}</option>
                                        @endforeach
                                    </select>
                                    <span class="text-danger">@error('location_type_id') {{ $message }} @enderror</span>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="name" class="col-sm-2 col-form-label">Name</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control @error('name')
                                        is-invalid @enderror" name="name" value="{{ old('name') }}" id="name"
                                           autocomplete="off">
                                    <span class="text-danger">@error('name') {{ $message }} @enderror</span>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="under_cmd_loc_id" class="col-sm-2 col-form-label">Under Command Location</label>
                                <div class="col-sm-6">
                                    <select class="form-control select2" name="under_cmd_loc_id" id="under_cmd_loc_id"
                                            autocomplete="off">
                                        <option value="" selected>select one</option>
                                        @foreach($uclocations as $uclocation)
                                            <option value="{{$uclocation->id}}">{{$uclocation->name}}</option>
                                        @endforeach
                                    </select>
                                    <span class="text-danger">@error('under_cmd_loc_id') {{ $message }} @enderror</span>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="mo_loc_id" class="col-sm-2 col-form-label">Medical Officer Location</label>
                                <div class="col-sm-6">
                                    <select class="form-control select2" name="mo_loc_id" id="mo_loc_id"
                                            autocomplete="off">
                                        <option value="" selected>select one</option>
                                        @foreach($locations as $location)
                                            <option value="{{$location->id}}">{{$location->name}}</option>
                                        @endforeach
                                    </select>
                                    <span class="text-danger">@error('mo_loc_id') {{ $message }} @enderror</span>
                                </div>
                            </div>

                        </div>

                        <div class="card-footer">
                            <a href="{{ route('locations.index') }}" class="btn btn-sm bg-info"><i
                                        class="fa fa-arrow-circle-left"></i> Back</a>
                            <button type="reset" class="btn btn-sm btn-secondary">Cancel</button>
                            @can('master-location-create')
                                <button type="submit" class="btn btn-sm btn-success">Create</button>
                            @endcan
                        </div>
                </div>

                </form>

            </div>
        </div>
    </div>
    </div>
@endsection

@section('third_party_stylesheets')
    <link rel="stylesheet" href="{{ asset('plugins/select2/css/select2.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/admin/css/adminlte.css') }}">
@endsection

@section('third_party_scripts')

    <script src="{{asset('plugins/select2/js/select2.js')}}" defer></script>

    <script>

        $(document).ready(function () {
            $('.select2').select2();
        });

    </script>
@endsection