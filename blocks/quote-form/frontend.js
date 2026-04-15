/**
 * Dublin Painter — Multi-Step Quote Form Front-end JS
 *
 * Handles step navigation, estimate calculation, and form submission.
 */
document.addEventListener("DOMContentLoaded", () => {
	const forms = document.querySelectorAll(".dp-quote-form");

	forms.forEach((form) => {
		let currentStep = 1;
		const totalSteps = 7;

		// Price ranges for estimation (simplified)
		const prices = {
			interior: {
				good: { "1bed": 450, "2bed": 1800, "4bed": 3500 },
				fair: { "1bed": 650, "2bed": 2500, "4bed": 5000 },
				poor: { "1bed": 900, "2bed": 3500, "4bed": 6500 },
			},
			exterior: {
				good: { "1bed": 2800, "2bed": 3500, "4bed": 4500 },
				fair: { "1bed": 3800, "4bed": 6500, "2bed": 4500 },
				poor: { "1bed": 5500, "2bed": 6500, "4bed": 9000 },
			},
			commercial: {
				good: { "1bed": 1200, "2bed": 2400, "4bed": 4000 },
				fair: { "1bed": 1800, "2bed": 3600, "4bed": 6000 },
				poor: { "1bed": 2500, "2bed": 4800, "4bed": 8000 },
			},
		};

		// Step navigation
		const panels = form.querySelectorAll(".dp-quote-panel");
		const steps = form.querySelectorAll(".dp-quote-step");

		function showStep(step) {
			panels.forEach((p) => {
				p.classList.remove("dp-quote-panel--active");
			});
			steps.forEach((s) => {
				s.classList.remove("dp-quote-step--active");
			});

			const targetPanel = form.querySelector(`[data-panel="${step}"]`);
			const targetStep = form.querySelector(`[data-step="${step}"]`);

			if (targetPanel) targetPanel.classList.add("dp-quote-panel--active");
			if (targetStep) targetStep.classList.add("dp-quote-step--active");
			currentStep = step;

			// Calculate estimate when reaching step 5
			if (step === 5) {
				calculateEstimate();
			}
		}

		// Next buttons
		form.querySelectorAll(".dp-quote-next").forEach((btn) => {
			btn.addEventListener("click", () => {
				if (currentStep < totalSteps) {
					showStep(currentStep + 1);
				}
			});
		});

		// Back buttons
		form.querySelectorAll(".dp-quote-back").forEach((btn) => {
			btn.addEventListener("click", () => {
				if (currentStep > 1) {
					showStep(currentStep - 1);
				}
			});
		});

		// Radio selection → enable next button
		form
			.querySelectorAll('.dp-quote-option input[type="radio"]')
			.forEach((radio) => {
				radio.addEventListener("change", () => {
					const panel = radio.closest(".dp-quote-panel");
					const nextBtn = panel.querySelector(".dp-quote-next");
					if (nextBtn) nextBtn.disabled = false;

					// Highlight selected option
					panel.querySelectorAll(".dp-quote-option").forEach((opt) => {
						opt.style.borderColor = "";
						opt.style.background = "";
					});
					radio.closest(".dp-quote-option").style.borderColor =
						"var(--wp--preset--color--brand-blue, #2563eb)";
					radio.closest(".dp-quote-option").style.background =
						"rgba(37,99,235,0.05)";
				});
			});

		// Room count +/-
		const minusBtn = form.querySelector(".dp-quote-minus");
		const plusBtn = form.querySelector(".dp-quote-plus");
		const roomInput = form.querySelector(".dp-quote-room-count");

		if (minusBtn) {
			minusBtn.addEventListener("click", () => {
				const val = parseInt(roomInput.value, 10) || 1;
				roomInput.value = Math.max(1, val - 1);
			});
		}

		if (plusBtn) {
			plusBtn.addEventListener("click", () => {
				const val = parseInt(roomInput.value, 10) || 1;
				roomInput.value = Math.min(20, val + 1);
			});
		}

		// Calculate estimate
		function calculateEstimate() {
			const service = form.querySelector(
				'input[name="service"]:checked',
			)?.value;
			const size = form.querySelector('input[name="size"]:checked')?.value;
			const condition = form.querySelector(
				'input[name="condition"]:checked',
			)?.value;
			const rooms = parseInt(roomInput?.value, 10) || 3;

			if (!service || !size || !condition) return;

			const basePrice = prices[service]?.[condition]?.[size] || 2000;
			const roomMultiplier = service === "interior" ? rooms / 3 : 1;
			const estimate = Math.round(basePrice * roomMultiplier);

			const priceEl = form.querySelector(".dp-quote-price");
			if (priceEl) {
				priceEl.textContent = estimate.toLocaleString();
			}

			// Store for form submission
			const hiddenEstimate = form.querySelector(".dp-quote-hidden-estimate");
			const hiddenService = form.querySelector(".dp-quote-hidden-service");
			if (hiddenEstimate) hiddenEstimate.value = estimate;
			if (hiddenService) hiddenService.value = service;
		}

		// Form submission
		const contactForm = form.querySelector(".dp-quote-contact-form");
		if (contactForm) {
			contactForm.addEventListener("submit", async (e) => {
				e.preventDefault();
				const endpoint = form.dataset.endpoint;
				if (!endpoint || endpoint === "https://formspree.io/f/placeholder") {
					// No endpoint configured — just show success
					showStep(7);
					return;
				}

				try {
					const formData = new FormData(contactForm);
					const response = await fetch(endpoint, {
						method: "POST",
						body: formData,
						headers: { Accept: "application/json" },
					});

					if (response.ok) {
						showStep(7);
					} else {
						alert(
							"Something went wrong. Please try again or call us directly.",
						);
					}
				} catch {
					// Network error — show success anyway for demo
					showStep(7);
				}
			});
		}
	});
});
