<?php
$brandLogos = [
    './assets/images/logo-slider/googlebooks.webp',
    './assets/images/logo-slider/waterstones-logo.webp',
    './assets/images/logo-slider/draft2digital.webp',
    './assets/images/logo-slider/ingram.webp',
    './assets/images/logo-slider/kindle.webp',
    './assets/images/logo-slider/lulu.webp',
    './assets/images/logo-slider/publishdrive.webp',
    './assets/images/logo-slider/smashwords.webp',
    './assets/images/logo-slider/bookbaby-logo.svg',
];
?>

<style>
.brand-slider-section {
    padding: 40px 0;
    overflow: hidden;
    background: #fff;
    position: relative;
}

.brand-slider-track {
    display: flex;
    gap: 40px;
    width: max-content;
    animation: scrollLogos 25s linear infinite;
}

.brand-slide {
    flex: 0 0 auto;
    display: flex;
    align-items: center;
    justify-content: center;
}

.brand-slide img {
    height: 40px;
    opacity: 1;
    transition: 0.3s ease;
}

.brand-slide img:hover {
    opacity: 1;
    transform: scale(1.08);
}

@keyframes scrollLogos {
    from { transform: translateX(0); }
    to { transform: translateX(-50%); }
}

.brand-slider-section:hover .brand-slider-track {
    animation-play-state: paused;
}

.brand-slider-section::before,
.brand-slider-section::after {
    content: "";
    position: absolute;
    top: 0;
    width: 80px;
    height: 100%;
    z-index: 2;
    pointer-events: none;
}

.brand-slider-section::before {
    left: 0;
    background: linear-gradient(to right, #fff, transparent);
}

.brand-slider-section::after {
    right: 0;
    background: linear-gradient(to left, #fff, transparent);
}
.brand-slider-track {
    will-change: transform;
}
</style>

<section class="brand-slider-section">
    <div class="custom_container">

        <div class="brand-slider-track">
            <?php foreach ($brandLogos as $logo): ?>
                <div class="brand-slide">
                    <img src="<?= e($logo) ?>" alt="brand logo" loading="lazy" decoding="async">
                </div>
            <?php endforeach; ?>

            <!-- duplicate for infinite loop -->
            <?php foreach ($brandLogos as $logo): ?>
                <div class="brand-slide">
                    <img src="<?= e($logo) ?>" alt="brand logo" loading="lazy" decoding="async">
                </div>
            <?php endforeach; ?>
        </div>

    </div>
</section>