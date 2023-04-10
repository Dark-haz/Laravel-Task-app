hello world
{{-- {{$one}} --}}
<br>

@php
use Faker\Factory as Faker;
use Illuminate\Support\Facades\Hash;
// Create a new Faker instance
$faker = Faker::create();
$sentence = Hash::make($faker->unique->password);
$s = bcrypt('ahwijd231');
@endphp

{{$sentence}} <br>
bcrypt {{$s}}
{{-- getting array values from ::find --}}
{{-- @foreach ($arr as $key=>$val)
    {{$key}} : {{$val}}
    <br>
@endforeach --}}

<br>

{{-- @foreach ($projects as $project)

   <a href="projects/{$project}"> {{$project['pname']}}</a> <br>
@endforeach --}}
@php
    $num = 0
@endphp

@foreach ($tasks as $task)
    {{$project['pname']}}  : task {{++$num}}  {{$task['tname']}} <br>
@endforeach
