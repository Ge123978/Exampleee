<html lang="en"><head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Faculty Union - Events</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
      body {
          font-family: Arial, sans-serif;
          background-image: linear-gradient(rgba(0,0,0,0.5), rgba(231,47,47,0.5)), url(../images/client.jpg);
          background-position: center;
          height: 100vh;
          background-size: cover;

      }
      .header {
          display: flex;
          align-items: center;
          justify-content: center;
          background: #7D0A0A;
          color: white;
          padding: 15px;
          font-size: 28px;
          font-weight: bold;
      }
      .container {
          max-width: 600px;
          margin-top: 20px;
      }
      .search-form {
          margin-bottom: 20px;
      }
      .event-card {
          background: #FFF085;
          border-radius: 10px;
          padding: 15px;
          margin-bottom: 15px;
          box-shadow: 0 2px 5px rgba(0,0,0,0.2);
          cursor: pointer;
      }
      .event-title {
          font-size: 20px;
          font-weight: bold;
          color: #E83F25;
      }
      .event-date {
          font-size: 14px;
          color: #EA7300;
      }
      .event-description {
          font-size: 16px;
          color: #444;
          margin-top: 5px;
      }
      .logo {
          width: 80px;
          border-radius: 50%;
          margin: 0 10px;
      }
      h3.text-center.my-4 {
          color: #D3CA79;
          font-size: 40px;
      }
  </style>
</head>
<body>

  <!-- Header Section -->
  <div class="header">
      <i>Faculty </i>
      <img src="../images/logo.jpg" alt="Your Logo" class="logo">
      <i>Union</i>
  </div>

  <!-- Container Section -->
  <div class="container">
      <!-- Search Form -->
      <form class="search-form" method="GET" action="">
          <div class="input-group">
              <input type="text" name="search" class="form-control" placeholder="Search upcoming events" value="">
              <button class="btn btn-primary" type="submit">Search</button>
          </div>
      </form>

</body></html>