const colors = ["#FCD6E7", "#ffffff", "#52BED8"];

function reveal() {
  document.getElementById("overlay").style.display = "none";
  document.getElementById("gender").classList.add("animate");

  (function frame() {
    confetti({
      particleCount: 2,
      angle: 60,
      spread: 55,
      origin: { x: 0 },
      colors: colors,
    });

    confetti({
      particleCount: 2,
      angle: 120,
      spread: 55,
      origin: { x: 1 },
      colors: colors,
    });

    const end = Date.now() + 15 * 1000;
    if (Date.now() < end) {
      requestAnimationFrame(frame);
    }
  })();
}
