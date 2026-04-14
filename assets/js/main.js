/**
 * Dublin Painter — Main Front-End JS
 *
 * Before/After slider is loaded per-block via block.json.
 * This file handles mobile CTA bar and accessibility enhancements.
 */

document.addEventListener("DOMContentLoaded", () => {
	// Mobile CTA Bar — inject at bottom of body on small screens
	const ctaBar = document.createElement("div");
	ctaBar.className = "dp-mobile-cta";
	ctaBar.setAttribute("role", "complementary");
	ctaBar.setAttribute("aria-label", "Contact options");
	ctaBar.innerHTML = `
		<a href="tel:${document.documentElement.dataset.dpPhone || "012345678"}" class="dp-mobile-cta-call" aria-label="Call us">
			📞 Call
		</a>
		<a href="/get-a-quote/" class="dp-mobile-cta-quote" aria-label="Get a free quote">
			Get Quote →
		</a>
	`;
	document.body.appendChild(ctaBar);

	// Smooth scroll for anchor links
	document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
		anchor.addEventListener("click", (e) => {
			const target = document.querySelector(anchor.getAttribute("href"));
			if (target) {
				e.preventDefault();
				target.scrollIntoView({ behavior: "smooth", block: "start" });
			}
		});
	});
});
