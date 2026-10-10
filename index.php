<?php
include 'header.php';
include 'navbar.php';
?>

<main>
    <div class="welcome-banner py-3">
        <div class="container">
            <h2 class="h5 fw-semibold mb-0">
                Welcome, <span id="welcomeName" class="text-info">Explorer</span>! 🚀
            </h2>
        </div>
    </div>

    <section id="home" class="hero-section py-5">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-6">
                    <span class="badge bg-info-subtle text-info mb-3">INFINITE. ANCIENT. EXPANDING.</span>
                    <h1 class="display-4 fw-bold mb-4">Journey Into the <span class="text-info">Unknown.</span></h1>
                    <p class="lead text-light-50 mb-4">Discover billions of stars, massive black holes, and breathtaking nebulae across the vast canvas of space.</p>
                    <div class="d-flex flex-wrap gap-3">
                        <a href="#phenomena" class="btn btn-info btn-lg px-4">Discover Galaxies</a>
                        <a href="#missions" class="btn btn-outline-info btn-lg px-4">Deep Space Data</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="hero-card p-4 rounded border border-secondary text-center">
                        <div class="floating-card card-one mb-3"><span>✨</span> 100 Billion+ Galaxies</div>
                        <div class="main-illustration py-4">
                            <div class="illustration-circle display-1">🌀</div>
                            <h3 class="mt-3">The Milky Way &amp; Beyond</h3>
                            <p class="text-secondary">Peer through light-years of interstellar dust.</p>
                        </div>
                        <div class="floating-card card-two"><strong>13.8 Billion</strong> Years Old</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="phenomena" class="section-padding bg-black py-5 border-top border-bottom border-secondary">
        <div class="container">
            <div class="text-center mb-5">
                <span class="section-label text-info fw-bold">COSMIC WONDERS</span>
                <h2 class="fw-bold mt-2">Architects of the Universe</h2>
                <p class="text-secondary mx-auto section-description">Explore the celestial bodies and gravitational forces shaping our cosmos.</p>
            </div>
            <div class="row g-4">
                <div class="col-md-4">
                    <article class="feature-card h-100 p-4 rounded border border-secondary">
                        <div class="feature-icon display-5 mb-3">⭐</div>
                        <h3>Stellar Nebulae</h3>
                        <p class="text-secondary">Giant clouds of dust and gas serving as the birthing grounds for brilliant new stars.</p>
                    </article>
                </div>
                <div class="col-md-4">
                    <article class="feature-card h-100 p-4 rounded border border-secondary">
                        <div class="feature-icon display-5 mb-3">🕳️</div>
                        <h3>Supermassive Black Holes</h3>
                        <p class="text-secondary">Gravitational titans resting at the core of galaxies, pulling light itself past event horizons.</p>
                    </article>
                </div>
                <div class="col-md-4">
                    <article class="feature-card h-100 p-4 rounded border border-secondary">
                        <div class="feature-icon display-5 mb-3">🪐</div>
                        <h3>Exoplanetary Systems</h3>
                        <p class="text-secondary">Distant star systems harboring worlds hidden beyond our solar system's boundary.</p>
                    </article>
                </div>
            </div>
        </div>
    </section>

    <section id="missions" class="section-padding py-5">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-6">
                    <div class="about-box d-flex gap-3 mb-4">
                        <div class="about-number fs-2 fw-bold text-info">01</div>
                        <div>
                            <h3>Infrared Mapping</h3>
                            <p class="text-secondary mb-0">Cutting through cosmic dust to capture the earliest formed galaxies near the dawn of time.</p>
                        </div>
                    </div>
                    <div class="about-box d-flex gap-3">
                        <div class="about-number fs-2 fw-bold text-info">02</div>
                        <div>
                            <h3>Spectral Analysis</h3>
                            <p class="text-secondary mb-0">Decoding light spectrums to identify atmospheric gases and signs of planetary habitability.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <span class="section-label text-info fw-bold">EXPLORATION</span>
                    <h2 class="fw-bold mt-2 mb-3">Mapping the Edge of Space</h2>
                    <p class="text-secondary">Modern astronomical arrays capture signals emitted billions of light-years ago, allowing scientists to piece together galactic evolution.</p>
                    <a href="#observatory" class="btn btn-info mt-2">Access Telemetry</a>
                </div>
            </div>
        </div>
    </section>

    <section id="observatory" class="cta-section text-dark py-5">
        <div class="container text-center">
            <span class="badge bg-dark text-info mb-3">JOIN THE ODYSSEY</span>
            <h2 class="fw-bold mb-3">Ready to Stargaze?</h2>
            <p class="mb-4">Subscribe to daily high-resolution captures from deep-space orbital telescopes.</p>
            <a href="mailto:stargaze@cosmic.example" class="btn btn-dark btn-lg px-5">Connect Observatory</a>
        </div>
    </section>
</main>

<?php
include 'footer.php';
?>