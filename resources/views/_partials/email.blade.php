@foreach (App\Models\Owner::all() as $owner)
    <p>{{$owner->email}}</p>
@endforeach


