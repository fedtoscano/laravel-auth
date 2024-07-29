@extends("layouts.admin")

@section("content")
<div class="container">
    <div class="row justify-content-center">
        <div class="col-8">
            <form action="{{Route("admin.projects.store")}}" method="POST">
                @method("POST")
                @csrf

                <div class="mb-3">
                    <label for="Project Name" class="form-label">Project's Name</label>
                    <input type="text" class="form-control" id="project-name" name="name"
                    value="{{old("name", $project->name)}}">
                    @error("name")
                    <div>
                        {{$message}}
                    </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="Project description" class="form-label">Project's Description</label>
                    <input type="text" class="form-control" id="project-description" name="description"
                    value="{{old("description", $project->description)}}">
                    @error("description")
                    <div>
                        {{$message}}
                    </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="Project client" class="form-label">Project's client</label>
                    <input type="text" class="form-control" id="project-client" name="client"
                    value="{{old("client", $project->client)}}">
                    @error("client")
                    <div>
                        {{$message}}
                    </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="Project Finish Date" class="form-label">Project's end date</label>
                    <input type="date" class="form-control" id="project-end-date" name="end_date"
                    value="{{old("end_date", $project->end_date)}}">
                    @error("end_date")
                    <div>
                        {{$message}}
                    </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="Project budget" class="form-label">Project's budget</label>
                    <input type="text" class="form-control" id="project-budget"name="budget"
                    value="{{old("budget", $project->budget)}}">
                    @error("budget")
                    <div>
                        {{$message}}
                    </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="Project repository" class="form-label">Project's repository</label>
                    <input type="text" class="form-control" id="project-repository" name="repository"
                    value="{{old("repository", $project->repository)}}">
                    @error("repository")
                    <div>
                        {{$message}}
                    </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="Project Tech Stack" class="form-label">Project's Tech Stack</label>
                    <input type="text" class="form-control" id="project-tech_stack" name="tech_stack"
                    value="{{old("tech_stack", $project->tech_stack)}}">
                    @error("tech_stack")
                    <div>
                        {{$message}}
                    </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="Project manager" class="form-label">Project's manager</label>
                    <input type="text" class="form-control" id="project-manager" name="project_manager"
                    value="{{old("manager", $project->project_manager)}}">
                    @error("project_manager")
                    <div>
                        {{$message}}
                    </div>
                    @enderror
                </div>


                <div class="mb-3">
                    <label for="Project team" class="form-label">Project's team</label>
                    <input type="text" class="form-control" id="project-team" name="team_members"
                    value="{{old("team", $project->team_members)}}">
                    @error("team_members")
                    <div>
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <input type="submit" class="btn btn-primary" value="Create a new project"></input>
            </form>
        </div>
    </div>
</div>
@endsection
