<?php
require_once 'includes/config.php';
require_once 'includes/header.php';

// sql table for clients
$sql = "SELECT client_id, name, email, phone, created_at FROM client ORDER BY name";
$res = $conn->query($sql);
?>

<div class="container py-5">
  <header class="d-flex justify-content-between align-items-center mb-4">
      <h1 class="h3 mb-0">Clients</h1>
      <a class="btn btn-outline-secondary" href="index.php">← Back</a>
  </header>

  <!-- Refrence form Stack_over flow -->
  <?php if ($res && $res->num_rows > 0): ?>
    <div class="row g-3">
      <?php while ($row = $res->fetch_assoc()):
          $is_new = (strtotime($row['created_at']) >= strtotime('-30 days'));
      ?>
        <div class="col-md-4">
          <article class="card shadow-sm <?php echo $is_new ? 'highlight' : ''; ?>">
            <div class="card-body">
              <h5 class="card-title"><?php echo htmlspecialchars($row['name']); ?></h5>
              <p class="mb-1"><strong>Email:</strong> <?php echo htmlspecialchars($row['email']); ?></p>
              <p class="mb-1"><strong>Phone:</strong> <?php echo htmlspecialchars($row['phone']); ?></p>
              <p class="muted mb-0">Joined: <?php echo date('M j, Y', strtotime($row['created_at'])); ?></p>
              <span class="badge <?php echo $is_new ? 'new' : 'bg-secondary'; ?> mt-2">
                <?php echo $is_new ? 'New client' : 'Established'; ?>
              </span>
            </div>
          </article>
        </div>
      <?php endwhile; ?>
    </div>
  <?php else: ?>
    <div class="alert alert-info">No clients found.</div>
  <?php endif; ?>
</div>

<?php require_once 'includes/footer.php'; ?>
