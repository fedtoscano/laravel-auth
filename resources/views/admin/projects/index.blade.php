@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Project Name</th>
                <th scope="col">Client</th>
                <th scope="col">Stack</th>
                <th scope="col">Data di inizio</th>
                <th scope="col">Stato</th>
                <th scope="col">Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($projects as $project)
            <tr>
                <th scope="row">{{$project->id}}</th>
                <td>{{$project->name}}</td>
                <td>{{$project->client}}</td>
                <td>
                    {{$project->tech_stack}}
                </td>
                <td>{{$project->start_date}}</td>
                <td>{{($project->status) ? "In corso" : "Completato"}}</td>
                <td>
                    <a href="{{Route("admin.projects.show", ["project" => $project])}}" class="btn btn-primary">View</a>
                    <a href="{{Route("admin.projects.edit", ["project" => $project])}}" class="btn btn-warning">Edit</a>
                    <form action="{{Route("admin.projects.destroy", ["project" => $project])}}" method="POST">
                        @method("DELETE")
                        @csrf
                        <input type="submit" class="btn btn-danger" value="Delete"></input>
                    </form>

                </td>
            </tr>
            @endforeach
            </tbody>
        </table>

            {{-- {{ $projects->links() }} --}}

    </div>
</div>
@endsection
