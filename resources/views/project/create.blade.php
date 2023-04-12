{{-- create new project --}}

<!DOCTYPE html>
<html>
<head>
	<title>Create Project</title>
	<style>
		body {
			background-color: black;
            display: flex;
			flex-direction: row;
			flex-wrap: wrap;
            justify-content: center;
            min-height: 100vh;
            font-family: cursive, sans-serif;
			min-width: 1360px;
		}

		.container {
			position: relative;
			padding: 40px;
			border: 6px solid white;
			width: fit-content;
			margin: auto;
		}

		button {
			background-color: black;
			color: white;
			border: 2px solid white;
			font-family: cursive;
			font-weight: bold;
			font-size: 25px;
			border-width: 5px;
			text-align: center;
		}

		h1 {
			text-align: center;
			text-transform: uppercase;
			font-weight: bold;
			letter-spacing: 8px;
			color: white;
		}
		form {
			display: flex;
			flex-direction: column;
			align-items: center;
		}
		label {
			color: white;
			font-weight: bold;
			margin-top: 20px;
		}
		input[type="text"], textarea {
			background-color: black;
			border: 2px solid white;
            font-family: cursive, sans-serif;
			color: white;
			padding: 10px;
			width: 300px;
			margin-top: 10px;
			margin-bottom: 20px;
		}
		input[type="submit"] {
			background-color: black;
			border: 5px solid white;
			color: white;
			padding: 10px 20px;
			text-transform: uppercase;
            font-family: cursive, sans-serif;
			font-weight: bold;
            font-size: 24px;
			margin-bottom: 20px;
			transition: all 0.3s ease-in-out;
		}
		input[type="submit"]:hover {
			background-color: white;
			color: black;
		}

		button:hover{
			background-color: white;
			color:black;
		}

		#top-buttons{
			width: 100%;
			margin: 25px;
			display: flex;
			height: 75px;
			flex-direction: row;
		}
		
		#projects{
			width: 15%;
		}

		#leaderboard {
			width: 15%;
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
		<button id="projects"><a href="/projects">Projects</a></button>
		<div style="width:75%;"></div>
		<button id="leaderboard"><a href="">Leaderboard</a></button>
	</div>

	<div>
        <h1>Create Project</h1>
        <div class="container">
            <form id="project-details" method="POST" action="/projects">
                @csrf 
                <label for="project-name">Project Title:</label>
                <input type="text" id="project-name" name="pname">

                @error('pname')
                    <p style="color:red">{{$message}}</p>
                @enderror


				<label for="project-description">Project Description:</label>
				<textarea id="project-description" name="description" form="project-details" style="height: 100px; width: 500px; resize: none; text-align:start;"></textarea>
                @error('description')
                    <p style="color:red">{{$message}}</p>
                @enderror 


				<input type="submit" value="CREATE">
            </form>
		</div>
    </div>

</body>
</html>