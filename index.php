<!-- Embed the chatbox using an iframe -->
<iframe src="/chat.php" style="position: fixed; bottom: 20px; right: 20px; width: 330px; height: 400px; border: none;"></iframe>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SamiCustomGPT - A customizable ai powered chatbot for websites built in php</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f4f4f4;
    }
    header {
      background-color: #333;
      color: #fff;
      padding: 20px;
      text-align: center;
    }
    .container {
      max-width: 800px;
      margin: 20px auto;
      padding: 20px;
      background-color: #fff;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    h1 {
      color: #333;
      text-align: center;
    }
    ul {
      list-style: none;
      padding: 0;
    }
    li {
      margin-bottom: 10px;
      padding-left: 30px;
      position: relative;
    }
    li::before {
      content: '\2713';
      color: #4CAF50;
      position: absolute;
      left: 0;
    }
  </style>
</head>
<body>
  <header>
    <h1>SamiCustomGPT - Customizable AI powered chatbot for websites</h1>
  </header>
  <div class="container">
    <h2>Top Pros of Using SamiCustomGPT</h2>
    <ul>
      <li>24/7 Availability for Customer Support</li>
      <li>Instant Responses to Customer Queries</li>
      <li>Personalized User Experience</li>
      <li>Increased Efficiency and Cost Savings</li>
      <li>Data Collection and Analysis for Business Insights</li>
    </ul>
  </div>
  <div class="container">You can also check out a static chatbot page <a href="/chat_page.php">here</a></div>
  <div class="container">
    <h2>Function calling in the chatbot</h2>
    <p>Try out function calling!<br><br> Tell the chatbot to run the getSpecialString function and see which string you get<br>
    the ai runs a function called getSpecialString that returns a unique string with a prefix.<br><br> This is just an example of 
    how the ai can run functions in the php code.</p>
  </div>
</body>
</html>
