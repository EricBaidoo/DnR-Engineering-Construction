<?php
// Newsletter signup section for DnR Engineering Construction
?>
<section id="newsletter" class="newsletter-section" style="max-width:700px; margin:2.5rem auto; background:#f8fafc; border-radius:1.1rem; box-shadow:0 4px 24px rgba(26,79,160,0.08); padding:2rem 1.5rem; text-align:center;">
    <h3 style="color:#1a4fa0; margin-bottom:0.5rem; font-size:1.3rem; font-weight:700;">Stay Updated!</h3>
    <p style="font-size:1rem; color:#222; margin-bottom:1.2rem;">Subscribe to our newsletter for the latest news, project updates, and exclusive offers.</p>
    <?php if (isset($_GET['status'])): ?>
        <?php if ($_GET['status'] === 'success'): ?>
            <div style="color:#388e3c; background:#eafaf1; border-radius:0.5em; padding:0.7em; margin-bottom:1em; text-align:center;">Thank you for subscribing!</div>
        <?php elseif ($_GET['status'] === 'error'): ?>
            <div style="color:#d32f2f; background:#fdecea; border-radius:0.5em; padding:0.7em; margin-bottom:1em; text-align:center;">Sorry, there was a problem. Please try again.</div>
        <?php endif; ?>
    <?php endif; ?>
    <form action="newsletter-handler.php" method="POST" style="display:flex; flex-direction:row; gap:1rem; align-items:center; justify-content:center; width:100%; max-width:650px; margin:0 auto;">
        <input type="email" name="email" placeholder="Your Email Address" required style="flex:2 1 260px; min-width:180px; max-width:320px; padding:0.7rem 1rem; border-radius:0.7rem; border:1.5px solid #cfd8dc; font-size:1rem;">
        <button type="submit" style="flex:1 1 120px; background:#1a4fa0; color:#fff; border:none; border-radius:2rem; padding:0.7rem 2rem; font-weight:600; font-size:1rem; cursor:pointer; transition:background 0.2s;">Subscribe <i class="fas fa-paper-plane"></i></button>
    </form>
</section>
