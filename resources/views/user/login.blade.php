{{-- user login or register --}}

{{-- <form method="POST" action="/users/authenticate">
    @csrf

    <div class="mb-6">
      <label for="email" class="inline-block text-lg mb-2">Email</label>
      <input type="email" class="border border-gray-200 rounded p-2 w-full" name="email" value="{{old('email')}}" />

      @error('email')
      <p class="text-red-500 text-xs mt-1">{{$message}}</p>
      @enderror
    </div>

    <div class="mb-6">
      <label for="password" class="inline-block text-lg mb-2">
        Password
      </label>
      <input type="password" class="border border-gray-200 rounded p-2 w-full" name="password"
        value="{{old('password')}}" />

      @error('password')
      <p class="text-red-500 text-xs mt-1">{{$message}}</p>
      @enderror
    </div>

    <div class="mb-6">
      <button type="submit" class="bg-laravel text-white rounded py-2 px-4 hover:bg-black">
        Sign In
      </button>
    </div>

    <div class="mt-8">
      <p>
        Don't have an account?
        <a href="/register" class="text-laravel">Register</a>
      </p>
    </div>
  </form> --}}

  <!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<style>
		body {
			background-color: black;
			font-family: Arial, sans-serif;
			min-width: 1200px;
			margin: 0;
			padding: 0;
		}
		

		.container {
			display: flex;
			flex-direction: column;
			align-items: center;
			justify-content: center;
			height: 100vh;
		}
		
		a{
			text-decoration: none;
			color: white;
			margin-top: 10px;
			border-style: solid;
			border-top: 0px;
			border-left: 0px;
			border-right: 0px;
			border-color: white;
		}
		
		h1 {
			color: white;
            text-align: center;
			font-size: 40px;
			font-weight: bold;
			letter-spacing: 10px;
			margin-bottom: 30px;
		}

		form {
			display: flex;
			flex-direction: column;
			align-items: center;
			justify-content: center;
			width: 100%;
			max-width: 400px;
			background-color: black;
			padding: 50px;
			border: 5px solid white;
			box-sizing: border-box;
		}
		
		label {
			color: white;
			font-size: 20px;
			font-weight: bold;
			text-transform: uppercase;
			margin-bottom: 10px;
		}
		
		input[type=text], input[type=email], input[type=password] {
			background-color: black;
			color: white;
			border: 2px solid white;
			border-radius: 4px;
			padding: 10px;
			width: 100%;
			font-size: 20px;
			font-weight: bold;
			margin-bottom: 20px;
		}
		
		button {
			background-color: black;
			color: white;
			border: 5px solid white;
			border-radius: 4px;
			padding: 15px 50px;
			width: 100%;
			max-width: 200px;
			font-size: 20px;
			font-weight: bold;
			text-transform: uppercase;
			margin-top: 20px;
			cursor: pointer;
		}
		
		button:hover {
			background-color: white;
			color: black;
		}
	</style>
</head>
<body>
	<div class="container">
		<h1>LOGIN</h1>
		<form method="POST" action="/users/authenticate">
      @csrf

			<label for="email">EMAIL:</label>
			<input type="email" id="email" name="email" value="{{old('email')}}" required>
      @error('email')
      <p style="color:red">{{$message}}</p>
      @enderror
    

			<label for="password">PASSWORD:</label>
			<input type="password" id="password" name="password" value="{{old('password')}}"  required>
     

			<button type="submit">LOGIN</button>
		</form>
		<a href="/register">Create account</a>
	</div>
</body>
</html>