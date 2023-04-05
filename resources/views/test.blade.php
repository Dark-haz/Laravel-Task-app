hello world
{{$one}}
<br>

@php
use Faker\Factory as Faker;
use Illuminate\Support\Facades\Hash;
// Create a new Faker instance
$faker = Faker::create();
$sentence = Hash::make($faker->unique->password);
@endphp

{{$sentence}}
{{-- getting array values from ::find --}}
@foreach ($arr as $key=>$val)
    {{$key}} : {{$val}}
    <br>
@endforeach