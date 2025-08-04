<!-- hero-section.php: Reusable Hero Section Component -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
<section class="hero" id="hero" style="margin-top:0;padding-top:0;">
    <div class="swiper hero-swiper">
        <div class="swiper-wrapper">
            <!-- Slide 1 -->
            <div class="swiper-slide" style="background-image:url('assets/images/IMG-20250801-WA0003.jpg'); background-size:cover; background-position:center;">
                <div class="container">
                    <div class="hero-text-bg">
                        <div class="hero-accent-bar"></div>
                        <div class="hero-tagline">Building Trust, Delivering Excellence</div>
                        <h1 class="hero-title">DnR Engineering <span class="highlight">Construction</span></h1>
                        <div class="hero-subtitle">Transforming Ghana’s skyline with innovative engineering and construction solutions for every sector.</div>
                        <div class="hero-actions">
                            <a href="#services" class="btn btn-primary">Our Services</a>
                            <a href="#projects" class="btn btn-secondary">View Projects</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Slide 2 -->
            <div class="swiper-slide" style="background-image:url('assets/images/IMG-20250801-WA0007.jpg'); background-size:cover; background-position:center;">
                <div class="container">
                    <div class="hero-text-bg">
                        <div class="hero-accent-bar"></div>
                        <div class="hero-tagline">Innovative Designs, Lasting Impact</div>
                        <h1 class="hero-title">Residential & Commercial <span class="highlight">Excellence</span></h1>
                        <div class="hero-subtitle">Creating modern homes and commercial spaces that blend style, comfort, and sustainability.</div>
                        <div class="hero-actions">
                            <a href="#about" class="btn btn-primary">About Us</a>
                            <a href="#contact" class="btn btn-secondary">Contact</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Slide 3 -->
            <div class="swiper-slide" style="background-image:url('assets/images/IMG-20250801-WA0004.jpg'); background-size:cover; background-position:center;">
                <div class="container">
                    <div class="hero-text-bg">
                        <div class="hero-accent-bar"></div>
                        <div class="hero-tagline">Expert Supervision & Maintenance</div>
                        <h1 class="hero-title">Quality, Safety, <span class="highlight">Reliability</span></h1>
                        <div class="hero-subtitle">Ensuring every project is delivered safely, on schedule, and to the highest standards.</div>
                        <div class="hero-actions">
                            <a href="#team" class="btn btn-primary">Meet the Team</a>
                            <a href="#projects" class="btn btn-secondary">Our Projects</a>
                        </div>
                    </div>
                </div>
            </div>
             <!-- Slide 4 -->
            <div class="swiper-slide" style="background-image:url('assets/images/IMG-20250729-WA0001.jpg'); background-size:cover; background-position:center;">
                <div class="container">
                    <div class="hero-text-bg">
                        <div class="hero-accent-bar"></div>
                        <div class="hero-tagline">Modern Infrastructure, Lasting Value</div>
                        <h1 class="hero-title">Roads, Bridges & <span class="highlight">Civil Works</span></h1>
                        <div class="hero-subtitle">Delivering durable infrastructure projects that connect communities and drive progress across Ghana.</div>
                        <div class="hero-actions">
                            <a href="#services" class="btn btn-primary">Explore Civil Works</a>
                            <a href="#contact" class="btn btn-secondary">Get in Touch</a>
                        </div>
                    </div>
                </div>
            </div>










        </div>
        <!-- Swiper navigation -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-pagination"></div>
    </div>
</section>
<!-- To use: include 'hero-section.php'; in your PHP page -->
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
<script>
  document.addEventListener('DOMContentLoaded', function() {
    var heroSwiper = new Swiper('.hero-swiper', {
      loop: true,
      autoplay: {
        delay: 3500,
        disableOnInteraction: false,
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      effect: 'fade',
      fadeEffect: { crossFade: true },
      speed: 900,
    });
  });
</script>
<style>
.hero {
  position: relative;
  min-height: 45vh;
  background: #1a4fa0;
  overflow: hidden;
  width: 100%;
  display: flex;
  align-items: stretch;
  justify-content: center;
}
.hero .swiper {
  width: 100%;
  height: 100vh;
}
.hero .swiper-wrapper {
  width: 100%;
  height: 100vh;
}
.hero .swiper-slide {
  height: 100vh;
  min-height: 25rem;
  display: flex;
  align-items: center;
  justify-content: center;
  position: relative;
  background-size: cover !important;
  background-position: center !important;
  background-repeat: no-repeat !important;
  width: 100%;
}
.hero .container {
  position: relative;
  z-index: 2;
  color: #fff;
  text-align: center;
  max-width: 50rem;
  margin: 0 auto;
  padding: 2.2rem 1.2rem;
  border-radius: 1.2rem;
  box-shadow: 0 0.25rem 2rem rgba(26,79,160,0.10);
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  min-height: 60vh;
  background: none;
  width: 100%;
}
.hero .hero-text-bg {
  background: rgba(20, 30, 50, 0.68);
  border-radius: 1.2rem;
  padding: 1.2rem;
  display: inline-block;
  margin: 0 auto;
  box-shadow: 0 0.25rem 2rem rgba(26,79,160,0.10);
  max-width: 100%;
  width: 100%;
}
.hero .hero-title {
  font-family: 'Playfair Display', serif;
  font-size: 2.7rem;
  font-weight: 700;
  line-height: 1.1;
  margin-bottom: 1.1rem;
  color: #fff;
  text-align: center;
  width: 100%;
}
.hero .highlight { color: #ffd700; }
.hero .hero-tagline {
  font-size: 1.2rem;
  font-weight: 500;
  margin-bottom: 0.7rem;
  letter-spacing: 0.03em;
  color: #e3e9f3;
  width: 100%;
}
.hero .hero-subtitle {
  font-size: 1.1rem;
  font-weight: 400;
  margin-bottom: 1.5rem;
  color: #f3f6fa;
  width: 100%;
}
.hero .hero-actions { margin-bottom: 1.5rem; width: 100%; }
.hero .btn-primary, .hero .btn-secondary {
  font-size: 1rem;
  padding: 0.7rem 1.6rem;
  border-radius: 2rem;
  margin-right: 0.7rem;
  width: auto;
}
.hero .btn-primary {
  background: #fff;
  color: #1a4fa0;
  border: 2px solid #1a4fa0;
  font-weight: 600;
}
.hero .btn-primary:hover {
  background: #1a4fa0;
  color: #fff;
}
.hero .btn-secondary {
  background: #1a4fa0;
  color: #fff;
  border: 2px solid #fff;
  font-weight: 500;
}
.hero .btn-secondary:hover {
  background: #fff;
  color: #1a4fa0;
}
.hero .hero-icons { margin-bottom: 1.2rem; width: 100%; }
.hero .hero-icon { font-size: 1.5rem; margin-right: 0.7rem; color: #ffd700; width: auto; }
.hero .hero-stats { display: flex; gap: 2.2rem; margin-bottom: 1.2rem; width: 100%; }
.hero .hero-stat { text-align: center; width: auto; }
.hero .hero-stat-number { font-size: 1.5rem; font-weight: 700; color: #ffd700; width: auto; }
.hero .hero-stat-label { display: block; font-size: 0.95rem; color: #fff; width: auto; }
.hero .hero-credibility { margin-top: 1.2rem; display: flex; gap: 1.2rem; align-items: center; width: 100%; }
.hero .hero-credibility img { height: 2.375rem; background: #fff; border-radius: 0.5rem; padding: 0.2rem 0.7rem; box-shadow: 0 0.125rem 0.75rem rgba(26,79,160,0.08); width: auto; }
.hero .swiper-button-next, .hero .swiper-button-prev {
  color: #ffd700;
  background: rgba(26,79,160,0.7);
  border-radius: 50%;
  width: 2.5rem;
  height: 2.5rem;
  top: 50%;
  transform: translateY(-50%);
  box-shadow: 0 0.125rem 0.75rem rgba(26,79,160,0.12);
  transition: background 0.2s;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 1.5rem;
  border: none;
}
.hero .swiper-button-next:hover, .hero .swiper-button-prev:hover {
  background: #ffd700;
  color: #1a4fa0;
}
.hero .swiper-pagination-bullet {
  background: #fff;
  opacity: 0.7;
  border: 0.125em solid #ffd700;
  width: 1em;
  height: 1em;
  margin: 0 0.3em;
  border-radius: 50%;
  display: inline-block;
  transition: background 0.2s, border 0.2s;
}
.hero .swiper-pagination-bullet-active {
  background: #ffd700;
  opacity: 1;
  border-color: #1a4fa0;
}
@media (max-width: 56.25em) {
  .hero {
    min-height: 70vh;
  }
  .hero .swiper,
  .hero .swiper-wrapper,
  .hero .swiper-slide {
    height: 70vh;
  }
  .hero .container { padding: 0.5rem 0.2rem; margin: 0 auto; width: 100%; }
  .hero .hero-title { font-size: 1.1rem; }
  .hero .hero-stats { gap: 0.5rem; }
  .hero .swiper-button-next, .hero .swiper-button-prev {
    width: 2rem;
    height: 2rem;
    font-size: 1.2rem;
  }
  .hero .swiper-pagination-bullet {
    width: 0.8em;
    height: 0.8em;
  }
}
@media (max-width: 37.5em) {
  .hero, .hero .swiper, .hero .swiper-wrapper, .hero .swiper-slide {
    min-height: 45vh;
    height: 45vh;
    width: 100%;
  }
  .hero .container { padding: 0.2rem 0.1rem; margin: 0 auto; width: 100%; }
  .hero .hero-title { font-size: 0.7rem; }
  .hero .hero-tagline, .hero .hero-subtitle { font-size: 0.55rem; }
  .hero .hero-stats { flex-direction: column; gap: 0.1rem; }
  .hero .hero-credibility img { height: 0.75rem; }
  .hero .swiper-button-next, .hero .swiper-button-prev {
    width: 1.2rem;
    height: 1.2rem;
    font-size: 0.9rem;
  }
  .hero .swiper-pagination-bullet {
    width: 0.6em;
    height: 0.6em;
  }
}
</style>
