@extends('layouts.master')

@section('content')
    @include('series.partials.jumobtron')
    <div class="container mt-4">
        <div class="row">
            <div class="col-3">
                    <ul class="nav flex-column">
                            <li class="nav-item">
                              <a class="nav-link active" href="#">Active</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="#">Link</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="#">Link</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link disabled" href="#">Disabled</a>
                            </li>
                          </ul>
            </div>
            <div class="col-9">
                Hey
            </div>
        </div>
    </div>
@endsection
