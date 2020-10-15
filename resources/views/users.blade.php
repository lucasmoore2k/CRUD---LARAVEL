
{{$name}}

@if($male == true)
male = true
@else
male = false
@endif

@foreach($hobbies as $hobbie)
{{$hobbie}}
@endforeach