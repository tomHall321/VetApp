@foreach (App\Models\Owner::all() as $owner)
    <p>{{$owner->address_1}} {{$owner->address_2}} {{$owner->town}} {{$owner->postcode}}</p>
@endforeach


