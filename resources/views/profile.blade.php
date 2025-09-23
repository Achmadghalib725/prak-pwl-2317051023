<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Profile</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      text-align: center;
      margin-top: 50px;
    }
    .profile-img {
      width: 150px;
      height: 150px;
      object-fit: cover;
      border-radius: 50%;
      border: 3px solid #333;
    }
    .info {
      margin-top: 20px;
      font-size: 18px;
      line-height: 1.6;
    }
  </style>
</head>
<body>
  <!-- Ganti link src dengan link gambar dari image search -->
  <img src="https://i.pinimg.com/736x/32/a2/58/32a2581620d1809fe417c84a88f77e2c.jpg" alt="Foto Profil" class="profile-img">

  <div class="info">
    <div><strong>Nama:</strong> {{ $nama }}</div>
    <div><strong>NPM:</strong> {{ $npm }}</div>
    <div><strong>Kelas:</strong> {{ $kelas }}</div>
  </div>
</body>
</html>