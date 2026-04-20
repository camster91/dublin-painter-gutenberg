/**
 * Dublin Painter — Main Front-End JS
 *
 * - Dark mode toggle with localStorage persistence
 * - Section reveal animation (IntersectionObserver)
 * - Process timeline scroll animation
 * - Mobile CTA bar
 */

document.addEventListener("DOMContentLoaded", () => {
	// ============================================
	// DARK MODE — Restore from localStorage
	// ============================================
	if (localStorage.getItem("dp-dark") === "true") {
		document.body.classList.add("dark-mode");
	}

	// ============================================
	// MOBILE CTA BAR — inject at bottom of body on small screens
	// ============================================
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

	// ============================================
	// SMOOTH SCROLL for anchor links
	// ============================================
	document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
		anchor.addEventListener("click", (e) => {
			const target = document.querySelector(anchor.getAttribute("href"));
			if (target) {
				e.preventDefault();
				target.scrollIntoView({ behavior: "smooth", block: "start" });
			}
		});
	});

	// ============================================
	// SECTION REVEAL — IntersectionObserver for .dp-reveal
	// ============================================
	const revealElements = document.querySelectorAll(".dp-reveal");
	if (revealElements.length > 0 && "IntersectionObserver" in window) {
		const revealObserver = new IntersectionObserver(
			(entries) => {
				for (const entry of entries) {
					if (entry.isIntersecting) {
						entry.target.classList.add("dp-visible");
						revealObserver.unobserve(entry.target);
					}
				}
			},
			{ threshold: 0.15, rootMargin: "0px 0px -50px 0px" },
		);
		for (const el of revealElements) {
			revealObserver.observe(el);
		}
	}

	// ============================================
	// PROCESS TIMELINE — Scroll-driven step activation
	// ============================================
	const processSteps = document.querySelectorAll(".dp-process-step");
	const processLine = document.querySelector(".dp-process-line");

	if (processSteps.length > 0 && "IntersectionObserver" in window) {
		let activeStep = 0;

		const stepObserver = new IntersectionObserver(
			(entries) => {
				for (const entry of entries) {
					if (entry.isIntersecting) {
						entry.target.classList.add("dp-step-visible");
						const stepIndex = Array.from(processSteps).indexOf(entry.target);
						if (stepIndex > activeStep) {
							activeStep = stepIndex + 1;
						}
						if (processLine) {
							processLine.className = `dp-process-line dp-line-step-${activeStep}`;
						}
					}
				}
			},
			{ threshold: 0.5 },
		);

		for (const step of processSteps) {
			stepObserver.observe(step);
		}
	}

	// ============================================
	// SERVICE CARDS — Add dp-service-card class for hover
	// ============================================
	document
		.querySelectorAll(".wp-block-columns .wp-block-column")
		.forEach((col) => {
			if (col.querySelector("img") && col.querySelector("h3")) {
				col.classList.add("dp-service-card");
			}
		});
});
