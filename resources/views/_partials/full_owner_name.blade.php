@if($owners->count() > 0)
@foreach ($owners as $owner)
    <p>{{$owner->first_name}} {{$owner->last_name}}</p>
@endforeach
@else
There are no owners
@endif