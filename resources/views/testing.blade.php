<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Testing Page</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
      margin: 0;
      padding: 20px;
    }
    h1, h2 {
      color: #333;
    }
    .container {
      background: #fff;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
      max-width: 600px;
      margin: auto;
    }
    .btn {
      display: inline-block;
      padding: 10px 15px;
      background-color: #007BFF;
      color: white;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }
    .btn:hover {
      background-color: #0056b3;
    }
    input, textarea {
      width: 100%;
      padding: 10px;
      margin: 10px 0;
      box-sizing: border-box;
    }
  </style>
</head>
<body>

  <div class="container">
    <h1>Testing Page</h1>
    <h2>Testing page</h2>
    
    <p>This is a simple HTML page to test layout, input fields, and buttons.</p>

    <form id="testForm">
      <label for="name">Name:</label>
      <input type="text" id="name" placeholder="Enter your name" required>

      <label for="message">Message:</label>
      <textarea id="message" rows="4" placeholder="Enter a message"></textarea>

      <button type="submit" class="btn">Submit</button>
    </form>

    <p id="output"></p>
  </div>

  <script>
    const form = document.getElementById('testForm');
    const output = document.getElementById('output');

    form.addEventListener('submit', function(event) {
      event.preventDefault();
      const name = document.getElementById('name').value;
      const message = document.getElementById('message').value;
      output.innerHTML = `<strong>${name}</strong> says: "${message}"`;
    });
  </script>

</body>
</html>
