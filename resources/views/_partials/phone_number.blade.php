@foreach (App\Models\Owner::all() as $owner)
    <p>{{$owner->telephone}}</p>
@endforeach