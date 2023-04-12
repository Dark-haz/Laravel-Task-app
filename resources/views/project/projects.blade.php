{{-- show all projects of user --}}

{{-- projects list of user  username 
 {{auth()->user()->created_at}}
 

@foreach ($projects as $project)
    {{$project->pname}}
    {{$project->description}}

@endforeach --}}

{{-- ------------------------------------------------------------------ --}}

<!DOCTYPE html>
<html>
<head>
	<title>Projects</title>
	<style>
		body {
			background-color: black;
			color: white;
			font-weight: bold;
			min-width: 1200px;
		}
    
		button {
      background-color: black;
			color: white;
			border: 2px solid white;
			font-family: cursive;
      font-weight: bold;
      font-size: 25px;
      border-width: 5px;
      padding: 10px;
		}
    
    .delete:hover{
      background-color: red;
      border-color: red;
      color:white;
    }

    .edit:hover{
      background-color: blue;
      border-color: blue;
      color:white;
    }

    button:hover{
			background-color: white;
			color: black;
		}
    
    h1{
      font-family: cursive;
      width: 50%;
      margin: auto;
      text-align: center;
      margin-bottom: 20px;
    }
    
    .project {
      width: 100%;
      display: flex;
      flex-wrap: wrap;
      flex-direction: row;
      margin-bottom: 20px;
      gap: 12px;
    }

    .project-options{
      display: flex;
      flex-wrap: wrap;
      flex-direction: column;
      gap: 12px;
      width: 20%;
    }
    
    .project-bar{
      position: relative;
      display: flex;
      flex-wrap: nowrap;
      flex-direction: row;
      border-width: 5px;
      margin-left:20px;
      width: 75%;
      border: 4px solid white;
      background-color: black;
    }
    .project-content{
      z-index: 1;
      color: white;
			font-family: cursive;
      font-weight: bold;
      font-size: 15px;
    }

    .project-button{
      font-size: 20px;
    }

    .progress{
      height: 100%;
      border-width: 5px;
      border-color: rgb(44, 93, 44);
      background-color: rgb(41, 255, 41);
      z-index: 0;
      opacity: 0.5;
      position:absolute;
      top: 0%;
      left: 0%; /*<---- HERE YOU ADJUST THE PROGRESS */
      border-style: solid;
      border-right-width: 10px;
      border-bottom-width: 0px;
      border-top-width: 0px;
      border-left-width: 0px;
    }

    #top-buttons{
      margin: 25px;
    }

		#leaderboard {
      position: absolute;
      right: 25px;  
		}

        a{
            text-decoration: none;
            color: white;
        }

        a:hover{
            color: magenta;
        }

	</style>
</head>
<body>
  <div id="top-buttons">
    <button id="new-project"><a href="/projects/create">New Project</a></button>
    <button id="leaderboard"><a href="">Leaderboard</a></button>
  </div>

  <h1>Projects</h1>

  <!-- A single project -->
    @if (count($projects) == 0)
        <h1>Let's get this day going</h1>
        <p align="center">Create a new project!</p>
    @else
        
        @foreach ($projects as $project)

        @php
        $p = $project->pname;
        $d = $project->description;
        $pid = $project->id;
        @endphp
        <x-pcard  width='17' title='{{$p}}' description='{{$d}}' project_id='{{$pid}}' />
        @endforeach

    @endif

</body>
</html>