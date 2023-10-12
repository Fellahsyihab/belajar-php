<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dashboard | Pondok Mak Sati</title>

  <!-- CSS links for AdminLTE and Bootstrap -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.1.0/css/adminlte.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="dashboard.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Sidebar -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <span class="brand-text font-weight-light">Pondok Mak Sati</span>
    </a>

    <!-- Sidebar Menu -->
    <div class="sidebar">
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="newproduct.html" class="nav-link">
              <i class="nav-icon fas fa-plus-circle"></i>
              <p>New Product</p>
            </a>
          </li>
          <!-- Add more sidebar items here -->
          <!-- Example: -->
          <!--
          <li class="nav-item">
            <a href="another_page.html" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>Another Page</p>
            </a>
          </li>
          -->
        </ul>
      </nav>
    </div>
  </aside>

  <!-- Content Wrapper -->
  <div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div>
        </div>
      </div>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- Product Listing -->
          <?php
          $products = [
              [
                  'name' => 'Sate Padang Daging As',
                  'price' => 'Rp25.000,00',
                  'description' => 'Delicious Sate Padang with tender beef.'
              ],
              [
                  'name' => 'Soto Padang',
                  'price' => 'Rp17.000,00',
                  'description' => 'Authentic Soto Padang, a flavorful soup dish.'
              ],
              [
                  'name' => 'Lontong Padang',
                  'price' => 'Rp10.000,00',
                  'description' => 'Traditional Lontong Padang with tasty sauce.'
              ],
              [
                  'name' => 'Gado-gado Padang',
                  'price' => 'Rp13.000,00',
                  'description' => 'Fresh and delicious Gado-gado Padang.'
              ],
              // Add more products here
          ];

          foreach ($products as $product) {
              echo '<div class="col-md-6">';
              echo '<div class="card">';
              echo '<div class="card-body">';
              echo '<h5 class="card-title">Makanan</h5>';
              echo '<p class="card-text">' . $product['name'] . '</p>';
              echo '<p class="card-text">Price: ' . $product['price'] . '</p>';
              echo '<p class="card-text">' . $product['description'] . '</p>';
              echo '</div>';
              echo '</div>';
              echo '</div>';
          }
          ?>
          <!-- Add more product listings as needed -->
        </div>
      </div>
    </section>
  </div>

  <!-- Sidebar -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <span class="brand-text font-weight-light">Pondok Mak Sati</span>
    </a>

    <!-- Sidebar Menu -->
    <div class="sidebar">
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="newproduct.html" class="nav-link">
              <i class="nav-icon fas fa-plus-circle"></i>
              <p>New Product</p>
            </a>
          </li>
          <!-- Add more sidebar items here -->
          <!-- Example: -->
          <!--
          <li class="nav-item">
            <a href="another_page.html" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>Another Page</p>
            </a>
          </li>
          -->
        </ul>
      </nav>
    </div>
</aside>

</div>

<!-- JavaScript links for AdminLTE and Bootstrap -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.1.0/js/adminlte.min.js"></script>
<script src="dashboard.js"></script>
</body>
</html>
