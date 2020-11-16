@foreach (App\Models\Owner::all() as $owner)
     <p>{{$owner->first_name}} {{$owner->last_name}}</p>
    <p>{{$owner->address_1}} {{$owner->address_2}} {{$owner->town}} {{$owner->postcode}}</p>
    <p>{{$owner->email}}</p>
    <p>{{$owner->telephone}}</p>
@endforeach