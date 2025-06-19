<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>User Profiles</title>
  <style>
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background-color: #f2f2f2;
      padding: 30px;
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    .card {
      background-color: white;
      border-radius: 10px;
      padding: 25px;
      margin-bottom: 20px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.1);
      max-width: 600px;
      width: 100%;
    }

    h2 {
      margin-bottom: 5px;
    }

    .section {
      margin-top: 20px;
    }

    .label {
      font-weight: bold;
      color: #444;
    }

    .pair {
      margin-bottom: 5px;
    }

    .geo {
      margin-left: 20px;
      font-size: 14px;
      color: #666;
    }

    .section-title {
      color: #007bff;
      margin-bottom: 10px;
      border-bottom: 1px solid #ddd;
      padding-bottom: 5px;
    }
  </style>
</head>
<body>

  @foreach ($users as $user)
  <div class="card">
    <h2>{{ $user['name'] }}</h2>
    <p><strong>Username:</strong> {{ $user['username'] }}</p>
    <p><strong>Email:</strong> {{ $user['email'] }}</p>
    <p><strong>Phone:</strong> {{ $user['phone'] }}</p>
    <p><strong>Website:</strong> {{ $user['website'] }}</p>

    <div class="section">
      <div class="section-title">📍 Address</div>
      <div class="pair"><span class="label">Street:</span> {{ $user['address']['street'] }}</div>
      <div class="pair"><span class="label">Suite:</span> {{ $user['address']['suite'] }}</div>
      <div class="pair"><span class="label">City:</span> {{ $user['address']['city'] }}</div>
      <div class="pair"><span class="label">Zipcode:</span> {{ $user['address']['zipcode'] }}</div>
      <div class="geo">
        <div><span class="label">Latitude:</span> {{ $user['address']['geo']['lat'] }}</div>
        <div><span class="label">Longitude:</span> {{ $user['address']['geo']['lng'] }}</div>
      </div>
    </div>

    <div class="section">
      <div class="section-title">🏢 Company</div>
      <div class="pair"><span class="label">Name:</span> {{ $user['company']['name'] }}</div>
      <div class="pair"><span class="label">Catch Phrase:</span> {{ $user['company']['catchPhrase'] }}</div>
      <div class="pair"><span class="label">BS:</span> {{ $user['company']['bs'] }}</div>
    </div>
  </div>
  @endforeach

</body>
</html>
