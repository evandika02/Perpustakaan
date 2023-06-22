<!DOCTYPE html>
<html>
<head>
  <title>Menu with Search</title>
  <style>
    * {
      box-sizing: border-box;
    }

    body {
      background-color: #f5f5f5;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      background-image: url(bg.jpg);
      background-size: cover;
    }

    .search-menu {
      width: 300px;
      background-color: #ffffff;
      border-radius: 5px;
      padding: 20px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .search-input {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 4px;
      font-size: 16px;
    }

    .search-button {
      width: 100%;
      padding: 10px;
      background-color: #4CAF50;
      border: none;
      color: white;
      font-size: 16px;
      cursor: pointer;
      border-radius: 4px;
    }

    .search-button:hover {
      background-color: #45a049;
    }

    .search-results {
      margin-top: 10px;
    }

    .search-results ul {
      list-style-type: none;
      padding: 0;
    }

    .search-results li {
      padding: 5px 0;
      border-bottom: 1px solid #ccc;
    }
  </style>
</head>
<body>
  <div class="search-menu">
    <form method="post">
      <input type="text" class="search-input" name="keyword" placeholder="Search...">
      <button type="submit" class="search-button" name="search">Search</button>
    </form>
    <div class="search-results">
      <ul>
        <?php
          if (isset($_POST['search'])) {
            $keyword = $_POST['keyword'];
            // Simulated search results
            $data = ['Result 1', 'Result 2', 'Result 3', 'Result 4', 'Result 5'];

            foreach ($data as $result) {
              if (stripos($result, $keyword) !== false) {
                echo '<li>' . $result . '</li>';
              }
            }
          }
        ?>
      </ul>
    </div>
  </div>
</body>
</html>
