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

        <h4 class="fw-bold py-3 mb-4" style="margin-left:56%; ">

            <form action="{{ route('search') }}" method="GET">
                <label for="search">Search Document :</label>
                <input type="search" style="width: 150px; ; display: inline-block !important" id="search" name="search" class="form-control" placeholder="Search Credentials...">
                <button style="background-color: #25c199!important; border-color:#25c199 ! important;  color:white"
                    class="btn btn-primary" type="submit">OK</button>
            </form>

        </h4>

        <!-- Basic Bootstrap Table -->
        @if ($results->isEmpty())
            <h3>No result Found. Result for the input "{{ $searchTerm }}" </h3>
        @else
            <div class="card">


                <h5 class="card-header" style="color: #25c199">Vaccin Quality Control test</h5>
                <div class="">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>S/N</th>
                                <th>Name of Manifacture</th>
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
                            @foreach ($results as $user)
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
                                        <a class="dropdown-item" href="{{ route('reportpdf', ['id' => $user->id]) }}"><i
                                                class="menu-icon tf-icons bx bx-file"></i>Certificat</a>
                                        <a class="dropdown-item" href="{{ route('vaccinepdf', ['id' => $user->id]) }}"><i
                                                class="menu-icon tf-icons bx bx-file"></i>Rapport </a>
                                        @can('admin')
                                            <a class="dropdown-item" href="{{ route('deleted', ['id' => $user->id]) }}"><i
                                                    class="bx bx-trash me-1"></i>
                                                Delete</a>
                                        @endcan
                                    </td>
                                </tr>
                            @endforeach
        @endif


        </tbody>
        </table>

    </div>
    </div>

    <!--/ Basic Bootstrap Table -->

    <hr class="my-5">
@endsection
