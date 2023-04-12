@props(['width','title','description'])

{{-- array of variables passed into the component --}}
{{-- can be self closing or wrapping something else using {{$slot}} --}}
{{-- we can pass extra classes by using $arrtibutes->merge --}}

<div class="project">

    {{-- progress --}}
    <div class="project-bar">

      {{-- progress width --}}
      <div class="progress" style="width: {{$width}}%;"></div>

      {{-- content --}}
      <div class="project-content">
        <a href="Tasks List.html" style="text-decoration: none; font-size: 25px; color:white; margin:5px; margin-left: 20px; margin-right: 20px;">{{$title}}</a>
        <p style="margin: 0px; margin-left: 20px; margin-bottom: 10px; margin-right: 20px;">{{$description}}</p>
      </div>
    </div>

    {{-- options --}}
		<div class="project-options">
			<button class="delete project-button" id="DELETE">Delete</button>
			<button class="edit project-button" id="EDIT">Edit</button>
		</div>

	</div>