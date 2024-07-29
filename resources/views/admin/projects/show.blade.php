@extends("layouts.admin")

@section("content")
<div class="container">
    <div class="row justify-content-center">
        <div class="col-8">
            <div class="card">
                    <div class="card-body">
                    <h3 class="card-title">{{$project->name}}</h3>
                    <h6 class="card-subtitle mb-2 text-body-secondary">Commissioned by: {{$project->client}}</h6>
                    <h5>Project Description</h5>
                    <p class="card-text"><em>{{$project->description}}</em></p>
                    <p class="card-text"><strong>Tech Stack:</strong>
                    @php
                        $techStack = json_decode($project->tech_stack)
                    @endphp
                    @foreach ($techStack as $singleTech)
                        <span>{{$singleTech}}</span>
                    @endforeach
                    </p>

                    <p class="card-text"><strong>Team:</strong>
                        @php
                            $teamMembers = json_decode($project->team_members)
                        @endphp
                        <ul>
                            @foreach ($teamMembers as $singleMember)
                            <li>
                                {{$singleMember}}
                            </li>
                            @endforeach
                        </ul>
                    </p>

                    <p class="card-text"><strong>Project Manager: </strong> {{$project->project_manager}}</p>
                    <p class="card-text"><strong>Status: </strong>{{($project->status) ? "In corso" : "Completato"}}</p>
                    <p class="card-text"><strong>Budget: </strong>{{$project->budget}}€</p>
                    <p class="card-text"><strong>Repository Link: </strong>{{$project->repository}}</p>
                </div>
            </div>
        </div>
        <a href="{{Route("admin.projects.index")}}" class="btn btn-primary">Home</a>
    </div>
</div>
@endsection
