<?php require_once 'includes/header.php'; ?>

<div class="container py-5">
    <h2 class="text-center mb-4">Contact Us</h2>

    <div class="card shadow-sm mx-auto" style="max-width: 500px;">
        <div class="card-body">
            <form>
                <div class="mb-3">
                    <label class="form-label">Name</label>
                    <input class="form-control" type="text" placeholder="Your name">
                </div>

                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input class="form-control" type="email" placeholder="you@example.com">
                </div>

                <div class="mb-3">
                    <label class="form-label">Message</label>
                    <textarea class="form-control" rows="4" placeholder="Your message"></textarea>
                </div>

                <button type="button" class="btn btn-primary w-100">Submit</button>
            </form>
        </div>
    </div>
</div>

<?php require_once 'includes/footer.php'; ?>
