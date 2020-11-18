@extends("app")

@section("title"){{
    "{$owners->fullName()}' Page"
}}@endsection

@section("content")
    <div class="list-group">
        @if ($owners->count() > 0)
            @include("../_partials/owner", ["owner" => $owners])
        @else
            <h2>No owner found.</h2>
        @endif
    </div>
@endsection