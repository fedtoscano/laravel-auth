@extends("admin.layout.create-or-edit")

@section("form-action")
{{Route("admin.projects.create")}}
@endsection

@section("form-method")
@method("POST")
@endsection

@section("input-value-text")
Create a new project
@endsection
