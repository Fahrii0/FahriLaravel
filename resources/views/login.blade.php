<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  @vite('resources/css/login.css')  
</head>
<body class="bg-[#c1d72e] flex items-center justify-center h-screen">
  <div class="bg-[#d6f9c1] shadow-md rounded-lg px-8 py-6 w-full max-w-md">
    <h2 class="text-2xl font-bold mb-6 text-center">Login</h2>
    <form class="space-y-4">
      <div>
        <label class="block font-medium mb-1" for="username">Username:</label>
        <input class="w-full border-2 border-[#c1d72e] rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-[#c1d72e]" type="text" id="username" name="username" placeholder="Enter your username" required>
      </div>
      <div>
        <label class="block font-medium mb-1" for="password">Password:</label>
        <input class="w-full border-2 border-[#c1d72e] rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-[#c1d72e]" type="password" id="password" name="password" placeholder="Enter your password" required>
      </div>
      <button class="bg-[#c1d72e] hover:bg-[#b1c524] text-white font-medium px-4 py-2 rounded-md w-full" type="submit">LOGIN</button>
    </form>
  </div>
</body>
</html>