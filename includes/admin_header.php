<?php require_once __DIR__ . '/config.php'; ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Freelance Management CMS - Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/style.css">
</head>
<body class="bg-light">

<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
  <div class="container">
    <a class="navbar-brand" href="dashboard.php">Admin - Freelance Management CMS</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#adminNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div id="adminNav" class="collapse navbar-collapse">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link" href="dashboard.php">Projects</a></li>
        <li class="nav-item"><a class="nav-link" href="services_list.php">Services</a></li>
        <li class="nav-item"><a class="nav-link" href="../index.php">View Site</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container mb-5">
