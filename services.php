<?php
require_once 'includes/config.php';
require_once 'includes/header.php';

$sql    = "SELECT service_name, rate, description FROM services ORDER BY service_name";
$result = $conn->query($sql);
?>

<div class="container py-5">
    <h2 class="text-center mb-4">Our Services</h2>

    <?php if ($result && $result->num_rows > 0): ?>
        <?php while ($row = $result->fetch_assoc()): ?>
            <div class="card mb-3 shadow-sm">
                <div class="card-body">
                    <h4 class="card-title"><?php echo htmlspecialchars($row['service_name']); ?></h4>

                    <?php if (!empty($row['description'])): ?>
                        <p class="card-text">
                            <?php echo nl2br(htmlspecialchars($row['description'])); ?>
                        </p>
                    <?php endif; ?>

                    <p class="card-text fw-semibold">
                        Rate: $<?php echo number_format($row['rate'], 2); ?>
                    </p>
                </div>
            </div>
        <?php endwhile; ?>
    <?php else: ?>
        <div class="alert alert-info">No services found.</div>
    <?php endif; ?>
</div>

<?php require_once 'includes/footer.php'; ?>
