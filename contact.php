
<?php
    session_start();
    include 'header.php';
?>
    <div style="height: 2.5rem;"></div>
    
    <section class="contact" id="contact" style="background:#f8fafc; border-radius:1.2rem; box-shadow:0 0.25rem 2rem rgba(26,79,160,0.10); max-width:87.5rem; margin:0 auto 2.5rem auto; padding:3.2rem 2.2rem;">
        <div class="contact-container" style="width:100%;">
            <div class="contact-header" style="margin-bottom:1.2rem;">
                <div class="contact-accent-bar" style="height:0.32rem; width:5rem; background:#1a4fa0; border-radius:2rem; margin:0 auto 0.75rem auto;"></div>
                <h2 class="contact-title" style="text-align:center; font-size:2.3rem; color:#1a4fa0; font-weight:700; margin-bottom:0.5rem; letter-spacing:0.02em;"><span class="contact-title-accent" style="color:#1a4fa0;">Contact</span> Us</h2>
            </div>

            <div class="contact-intro-container" style="max-width:68.75rem; margin: 0 auto 2.2rem auto; background: #fff; border-radius:1.1rem; box-shadow:0 0.25rem 1.5rem rgba(26,79,160,0.08); padding:1.5rem 1.2rem; text-align:center;">
                <div style="font-size:1.18rem; color:#1a4fa0; font-weight:500;">
                    Ready to start your next project or have questions about our services?<br>
                    Our team is here to help you turn your vision into reality. Reach out and let’s build something great together!
                </div>
            </div>

            <div class="contact-row" style="display:flex; flex-wrap:wrap; gap:2.5rem; justify-content:center; align-items:flex-start;">
                <!-- Contact Info -->
                <div class="contact-info" style="flex:1 1 28.5%; min-width:18rem; max-width:28.5rem; background:#fff; border-radius:1rem; box-shadow:0 0.25rem 1.5rem rgba(26,79,160,0.08); padding:1.5rem 1.2rem; margin-bottom:1.2rem;">
                    <div class="contact-info-block" style="margin-bottom:0.8rem; font-size:1.25rem; color:#1a4fa0;"><i class="fas fa-id-card"></i></div>
                    <div class="contact-info-block" style="margin-bottom:0.8rem;"><i class="fas fa-envelope"></i> <span style="margin-left:0.3em;"><strong>Email:</strong> enquire@dnrengineering.com</span></div>
                    <div class="contact-info-block" style="margin-bottom:0.8rem;"><i class="fas fa-phone"></i> <span style="margin-left:0.3em;"><strong>Phone:</strong> 0550760606 || 0208284018</span></div>
                    <div class="contact-info-block" style="margin-bottom:0.8rem;"><span><strong>Postal Address:</strong> P O Box OS 2845 - Osu</span></div>
                    <div class="contact-info-block"><i class="fas fa-map-marker-alt"></i> <span style="margin-left:0.3em;"><strong>Digital Address:</strong> East Legon, Ghana || GA-484-6124</span></div>
                </div>
                <!-- Contact Form -->
                <form class="contact-form" action="contact-handler.php" method="POST" style="flex:2 1 46%; min-width:22rem; max-width:46rem; background:#fff; border-radius:1rem; box-shadow:0 0.25rem 1.5rem rgba(26,79,160,0.08); padding:1.5rem 1.2rem; display:flex; flex-direction:column; gap:1.2rem;">
                    <?php if (isset($_GET['error']) && $_GET['error'] === 'captcha') { ?>
                        <div style="color:#d32f2f; font-weight:600; margin-bottom:0.5rem;">CAPTCHA verification failed. Please try again.</div>
                    <?php } ?>
                    <div class="form-group" style="margin-bottom:0.5rem;">
                        <input type="text" name="name" placeholder="Your Name" required style="width:100%; padding:0.9em 1em; border-radius:0.7rem; border:0.09rem solid #cfd8dc; font-size:1.08rem;">
                    </div>
                    <div class="form-group" style="margin-bottom:0.5rem;">
                        <input type="email" name="email" placeholder="Your Email" required style="width:100%; padding:0.9em 1em; border-radius:0.7rem; border:0.09rem solid #cfd8dc; font-size:1.08rem;">
                    </div>
                    <div class="form-group" style="margin-bottom:0.5rem;">
                        <input type="text" name="subject" placeholder="Subject" required style="width:100%; padding:0.9em 1em; border-radius:0.7rem; border:0.09rem solid #cfd8dc; font-size:1.08rem;">
                    </div>
                    <div class="form-group" style="margin-bottom:0.5rem;">
                        <textarea name="message" rows="5" placeholder="Your Message" required style="width:100%; padding:0.9em 1em; border-radius:0.7rem; border:0.09rem solid #cfd8dc; font-size:1.08rem;"></textarea>
                    </div>
                    <div class="form-group" style="margin-bottom:0.5rem;">
                        <div class="g-recaptcha" data-sitekey="6LcRn5srAAAAAF5hlBfO5LE0IvHrMr0-9OrRa8va"></div>
                    </div>
                    <button type="submit" class="btn btn-primary" style="background:#1a4fa0; color:#fff; border:none; border-radius:2rem; padding:0.9em 2em; font-weight:600; font-size:1.15rem; cursor:pointer; transition:background 0.2s;">Send Message <i class="fas fa-paper-plane"></i></button>
                </form>
            </div>
            <!-- Embedded Google Map -->
            <div style="margin-top:2.2rem; border-radius:1.1rem; overflow:hidden; box-shadow:0 0.25rem 1.5rem rgba(26,79,160,0.08);">
                <iframe src="https://www.google.com/maps?q=East+Legon,+Accra,+Ghana&output=embed" width="100%" height="45rem" style="border:0; min-width:20rem; min-height:20rem; max-width:100vw; max-height:60vh;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" title="DnR Engineering Consult Location"></iframe>
            </div>
            <script src="https://www.google.com/recaptcha/api.js" async defer></script>
        </div>
    </section>
    <?php include 'footer.php'; ?>
</body>
</html>
