@extends('layouts.adminLayout')

@section('content')
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <a href="{{ route('report') }}" class="" style="margin-right: 50px ; ">
            <button class="btn btn-primary "
                style="background-color:  #25c199 ! important; border-color: #25c199 ! important; color: #FFFFFF"
                data-bs-toggle="offcanvas" data-bs-target="" aria-controls="">
                <i class="bx bx-plus me-1"></i>

                <span class="align-middle">New Report</span>

            </button>
        </a>

        <h4 class="fw-bold py-3 mb-4" style="margin-left:40%">

            <div style="">
                <form action="{{ route('search') }}" method="GET">

                    <label for="search">Search Document :</label>
                    <input type="search" id="search" name="search" placeholder="Search Credentials...">
                    <button style="background-color: #25c199!important; border-color:#25c199 ! important;  color:white"
                        class="btn btn-primary" type="submit">OK</button>
                </form>
            </div>

        </h4>


        <!-- Basic Bootstrap Table -->
        <div class="card">
            @if (session('failled'))
                <div class="alert alert-danger">
                    {{ session('failled') }}
                </div>
            @endif
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            @if (session('deleted'))
                <div class="alert alert-success">
                    {{ session('deleted') }}
                </div>
            @endif
            <h5 class="card-header" style="color: #25c199 "> Vaccin Quality Control Test</h5>
            <div class="">
                <table class="table">
                    <thead>
                        <tr>
                            <th>S/N</th>
                            <th>Name of Document</th>
                            <th>Address</th>
                            <th>QCR Number</th>
                            <th>Vaccine Type</th>
                            <th>Panvac Reference</th>
                            <th>Batch Number</th>
                            <th>Date of Edition</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach ($articles as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->address }}</td>
                                <td>{{ $user->cqn }}</td>
                                <td>{{ $user->vacinetype }}</td>
                                <td>{{ $user->prn }}</td>
                                <td>{{ $user->bn }}</td>
                                <td>{{ $user->updated_at }}</td>
                                <td>
                                    <div class="dropdown">
                                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                            data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                                        <div class="dropdown-menu">

                                            <a class="dropdown-item" href="{{ route('restore', ['id' => $user->id]) }}"><i
                                                    class="menu-icon tf-icons bx bx-file"></i>Resaturer</a>
                                            <a class="dropdown-item"
                                                href="{{ route('reportpdf', ['id' => $user->id]) }}"><i
                                                    class="menu-icon tf-icons bx bx-file"></i>Certificat</a>
                                            <a class="dropdown-item"
                                                href="{{ route('vaccinepdf', ['id' => $user->id]) }}"><i
                                                    class="menu-icon tf-icons bx bx-file"></i>Rapport </a>
                                            @can('admin')
                                                <a class="dropdown-item"
                                                    href="{{ route('completetly', ['id' => $user->id]) }}"><i
                                                        class="bx bx-trash me-1"></i>
                                                    Delete Completly</a>
                                            @endcan
                                        </div>
                                </td>
                            </tr>
                        @endforeach


                    </tbody>
                </table>
                <div style="padding-left: 86%;">
                    {{ $articles->links() }}
                </div>
            </div>
        </div>

        <!--/ Basic Bootstrap Table -->

        <hr class="my-5">
    @endsection
