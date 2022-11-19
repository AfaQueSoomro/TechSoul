@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8 mt-5">
        <a href="{{ route('home') }}" class="btn btn-primary mb-3">Go Back</a>
        <div class="card">
            <div class="card-header">Create New Project</div>
            <div class="card-body">
                <form action="{{ route('project.store') }}" method="post">
                    @csrf
                    <div class="form-floating">
                        <input type="text" class="form-control mb-3" name="project_title" id="floatingInput" placeholder="Project Titile">
                        <label for="floatingInput">Project Title</label>
                    </div>

                    <select class="form-select form-selecet-lg mb-3" name="project_type" aria-label="select example">
                        <option value="">Projetc Type</option>
                        <option value="Android_App">Android Application</option>
                        <option value="Desktop_App">Android Application</option>
                        <option value="Web_desgining">Web Desgining</option>
                        <option value="Web_development">Web Development</option>
                    </select>

                    <div class="form-floating">
                        <input type="number" min="1" class="form-control mb-3" name="number_of_panel" id="floatingInput" placeholder="Number Of Panel">
                        <label for="floatingInput">Number Of Panel</label>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                        <button type="submit" class="btn btn-success">Create</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-md-2"></div>
</div>

@endsection