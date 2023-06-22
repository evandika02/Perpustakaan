<!DOCTYPE html>
<html>
<head>
  <title>Sidebar Menu</title>
  <style>
    @import url('https://fonts.googleapis.com/css?family=Roboto:300');

    * {
        box-sizing: border-box;
        font-family: 'Roboto', Arial, sans-serif;
    }

    body {
        background-color: #f5f5f5;
        margin: 0;
        background-image: url(bg.jpg);
			  background-size: cover;
    }

    #checkbox, .btn span {
        display: none;
    }

    .btn {
        display: block;
        background-color: #247D9E;
        color: #fff;
        width: 55px;
        height: 50px;
        line-height: 50px;
        padding: 0 20px;
        cursor: pointer;
        transition: width .3s ease-in-out;
    }

    .sidebar {
        background-color: #2B2E33;
        position: fixed;
        width: 250px;
        height: 100%;
        z-index: 1111;
        transition: transform .3s ease-in-out;
        transform: translateX(-250px);
    }

    .sidebar ul {
        padding: 0;
        margin: 0;
        list-style-type: none;
    }

    .sidebar ul a {
        position: relative;
        text-decoration: none;
        display: block;
        background-color: transparent;
        color: #BAB5BD;
        padding: 15px 20px;
        font-size: 16px;
    }

    .sidebar ul a li {
        display: inline-block;
    }

    .sidebar ul a li i {
        margin-right: 15px;
    }

    .sidebar ul a:hover, .sidebar ul a.active {
        background-color: #161920;
        color: #fff;
    }

    .sidebar ul a:hover::before, .sidebar ul a.active::before {
        position: absolute;
        top: 0;
        left: 0;
        content: "";
        background-color: #247D9E;
        width: 4px;
        height: 100%;
    }

    #checkbox:checked ~ .sidebar {
        transform: translateX(0);
    }

    #checkbox:checked + .btn {
        width: 250px;
        padding: 0 20px;
    }

    #checkbox:checked + .btn span {
        display: inline;
    }
  </style>
</head>
<body>
  <input type="checkbox" id="checkbox">
  <label class="btn" for="checkbox"><i class="fa fa-bars"></i> <span>Menu</span></label>

  <div class="sidebar">
      <ul>
          <li><a href="#"><i class="fa fa-tachometer"></i>Dashboard</a></li>
          <li><a href="#"><i class="fa fa-lightbulb-o"></i>Widgets</a></li>
          <li><a href="#" class="active"><i class="fa fa-line-chart"></i>Charts</a></li>
          <li><a href="#"><i class="fa fa-television"></i>Front-End</a></li>
          <li><a href="#"><i class="fa fa-send"></i>Email</a></li>
          <li><a href="#"><i class="fa fa-wpforms"></i>Forms</a></li>
          <li><a href="#"><i class="fa fa-paint-brush"></i>UI Elements</a></li>
          <li><a href="#"><i class="fa fa-file-text-o"></i>Pages</a></li>
          <li><a href="#"><i class="fa fa-globe"></i>Google Maps</a></li>
      </ul>
  </div>
</body>
</html>
