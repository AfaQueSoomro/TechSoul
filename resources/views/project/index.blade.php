@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-10 mt-3">
        <a href="{{ route('home') }}" class="btn btn-primary mb-3">Go Back</a>
        <ul class="nav nav-tabs">
            @can('project-create')
            <li class="nav-item" role="presentation">
                <a href="{{ route('project.create') }}" class="nav-link btn btn-primary btn-small mb-2">Create New Projet</a>
            </li>
            @endcan
            <li class="nav-item" role="presentation">
                <button class="nav-link fs-4 active" data-bs-toggle="tab" id="home-tab" type="button" data-bs-target="#home" role="tab" aria-controls="home" aria-selected="true">Project</button>
            </li>
            <li class="nav-item fs-4" role="presentation">
                <button class="nav-link" data-bs-toggle="tab" id="about-tab" type="button" data-bs-target="#about" role="tab" aria-controls="home" aria-selected="false">Compelte Projects</button>
            </li>
        </ul>
        <div class="tab-content mt-3" id="myTabControl">
            <div class="tab-pane show fade active" role="tabpanel" id="home" aria-labelledby="home-tab">
                <div class="card bg-light">
                    <div class="card-header text-primary h5">Projects</div>
                    <div class="card-body">
                        <table class="table text-center">
                            <tr class="bg-primary text-light">
                                <th>Project Number</th>
                                <th>Project Title</th>
                                <th>Project Type</th>
                                <th>Number Of Panel</th>
                                <th>Project Status</th>
                                <th>Action</th>
                            </tr>
                            @foreach($project as $item)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$item->project_title}}</td>
                                <td>{{$item->project_type}}</td>
                                <td>{{$item->number_of_panel}}</td>
                                <td>{{$item->getStatus->status_type}}</td>
                                <td>
                                    <a href="" class="btn btn-warning"><i class="fa fa-eye" aria-hidden="true"></i> View Detail</a>
                                    <a href="" class="btn btn-success"><i class="fas fa-edit    "></i> Edit</a>
                                    <a href="" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i> Delete</a>
                                </td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-content" id="myTabControl">
            <div class="tab-pane show fade" role="tabpanel" id="about" aria-labelledby="about-tab">
                home221122121
            </div>
        </div>
    </div>
    <div class="col-md-1"></div>
</div>
@endsection