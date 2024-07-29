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
                    @php
                    $techStack = json_decode($project->tech_stack);
                    @endphp
                        @foreach ($techStack as $singleTechStack)
                            <span>{{$singleTechStack}}</span>
                        @endforeach</td>
                <td>{{$project->start_date}}</td>
                <td>{{($project->status) ? "In corso" : "Completato"}}</td>
                <td>
                    <button>View</button>
                    <button>Edit</button>
                    <button>Delete</button>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>

            {{-- {{ $projects->links() }} --}}

    </div>
</div>
@endsection
