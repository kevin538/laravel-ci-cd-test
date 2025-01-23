@extends('layouts.adminLayout')
@section('content')
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">

        <h4 class="fw-bold py-3 mb-4">
            <span class="text-muted fw-light"> <b>Informations</b> </span>
        </h4>
        <div class="row mb-4">
            <!-- Browser Default -->
            <div class="col-md mb-4 mb-md-0">
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                <div class="card">
                    <h5 class="card-header">AU-PANVAC </h5>
                    <div class="card-body">
                        <form class="browser-default-validation" action="{{ route('director') }}" method="post">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-name">Name of the Director/ Actua Director name is : <span style="color: #25c199 !important ">{{ $latestDirector->director }}</span> </label>
                                <input type="text" name="director" class="form-control" id="basic-default-name"
                                    placeholder="John Doe" required />
                            </div>


                            <div class="row">
                                <div class="col-12">
                                    <button type="submit" style="background-color: #25c199; color:white"
                                        class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        @endsection
