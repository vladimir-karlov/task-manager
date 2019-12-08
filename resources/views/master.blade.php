
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>Vue js App</title>
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>

<body class="hold-transition sidebar-mini">
<div class="wrapper" id="app">

  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <div class="sidebar">
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-cog green"></i>

            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <router-link to="/tasks" class="nav-link">
                  <i class="fas fa-users nav-icon"></i>
                  <p>Tasks</p>
                </router-link>
              </li>

            </ul>
          </li>

        </ul>
      </nav>
    </div>
  </aside>

  <div class="content-wrapper">
    <div class="content">
      <div class="container-fluid">

        <router-view></router-view>

        <vue-progress-bar></vue-progress-bar>

      </div>
    </div>
  </div>

</div>

<script src="{{ mix('js/app.js') }}"></script>
</body>
</html> 