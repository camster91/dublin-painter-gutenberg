/**
 * Before/After Slider — Front-end interactivity
 *
 * Uses WordPress Interactivity API for draggable comparison.
 */
document.addEventListener("DOMContentLoaded", () => {
	document.querySelectorAll(".dp-ba-container").forEach((container) => {
		const handle = container.querySelector(".dp-ba-handle");
		const beforeWrap = container.querySelector(".dp-ba-before-wrap");
		let isDragging = false;

		const updatePosition = (clientX) => {
			const rect = container.getBoundingClientRect();
			const x = Math.max(0, Math.min(clientX - rect.left, rect.width));
			const percent = (x / rect.width) * 100;
			beforeWrap.style.clipPath = `inset(0 ${100 - percent}% 0 0)`;
			handle.style.left = `${percent}%`;
			handle.setAttribute("aria-valuenow", Math.round(percent));
		};

		const onStart = (e) => {
			isDragging = true;
			container.style.cursor = "grabbing";
			const clientX = e.touches ? e.touches[0].clientX : e.clientX;
			updatePosition(clientX);
		};

		const onMove = (e) => {
			if (!isDragging) return;
			e.preventDefault();
			const clientX = e.touches ? e.touches[0].clientX : e.clientX;
			updatePosition(clientX);
		};

		const onEnd = () => {
			isDragging = false;
			container.style.cursor = "ew-resize";
		};

		// Mouse events
		container.addEventListener("mousedown", onStart);
		document.addEventListener("mousemove", onMove);
		document.addEventListener("mouseup", onEnd);

		// Touch events
		container.addEventListener("touchstart", onStart, { passive: true });
		document.addEventListener("touchmove", onMove, { passive: false });
		document.addEventListener("touchend", onEnd);

		// Keyboard accessibility
		handle.addEventListener("keydown", (e) => {
			let current = parseFloat(handle.getAttribute("aria-valuenow")) || 50;
			if (e.key === "ArrowLeft" || e.key === "ArrowDown") {
				e.preventDefault();
				current = Math.max(0, current - 2);
			} else if (e.key === "ArrowRight" || e.key === "ArrowUp") {
				e.preventDefault();
				current = Math.min(100, current + 2);
			} else {
				return;
			}
			beforeWrap.style.clipPath = `inset(0 ${100 - current}% 0 0)`;
			handle.style.left = `${current}%`;
			handle.setAttribute("aria-valuenow", Math.round(current));
		});

		// Set initial position
		const initial = parseInt(container.dataset.initial, 10) || 50;
		handle.style.left = `${initial}%`;
		beforeWrap.style.clipPath = `inset(0 ${100 - initial}% 0 0)`;
	});
});
