@extends("admin.layout.create-or-edit")

@section("form-action")
{{Route("admin.projects.update", ["project"=>$project])}}
@endsection

@section("form-method")
@method("PUT")
@endsection

@section("input-value-text")
Edit {{$project->name}}
@endsection
