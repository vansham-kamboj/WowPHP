<script>
// Navbar Toggle
document.addEventListener("DOMContentLoaded", () => {
    const hamburger = document.getElementById("hamburger");
    const navLinks = document.getElementById("nav-links");

    if (hamburger && navLinks) {
        hamburger.addEventListener("click", () => {
            navLinks.classList.toggle("show");
        });
    }

    // Counter Animation
    const counter = document.getElementById("counter");
    if (counter) {
        let count = 0;
        const target = <?php echo 150; ?>; // Final count value from PHP
        const speed = 10; // Lower = Faster

        const updateCounter = () => {
            if (count < target) {
                count++;
                counter.innerText = count;
                setTimeout(updateCounter, speed);
            } else {
                counter.innerText = target;
            }
        };

        // Start counter on load
        window.addEventListener("load", updateCounter);
    }

    // Infinite Scroll for Testimonials
    const track = document.querySelector('.testimonial-track');
    if (track) {
        const items = Array.from(track.children);
        
        // Duplicate Items for Infinite Scroll
        items.forEach((item) => {
            const clone = item.cloneNode(true);
            track.appendChild(clone);
        });
    }
});
</script>
