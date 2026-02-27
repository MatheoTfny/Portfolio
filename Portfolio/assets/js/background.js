class Sparkles {
  constructor(sparkleCount = 200) {
    this.sparkleCount = sparkleCount;
    this.colors = [
      '#edabd2', // pastel-pink
      '#ffae57', // pastel-orange
      '#fcf577', // pastel-yellow
      '#bae67e', // pastel-green
      '#5ccfe6', // pastel-cyan
      '#9cc6f4', // pastel-blue
      '#aa72c5', // pastel-purple
      '#ffffff' // white
    ];
  }

  render() {
    // Find the container element. The HTML now has this class.
    const container = document.querySelector('.sparkles-bg');
    if (!container) {
      console.error('Sparkles container with class .sparkles-bg not found.');
      return;
    }

    for (let i = 0; i < this.sparkleCount; i++) {
      const sparkle = document.createElement("div");
      const size = Math.random() * 3 + 1;
      const colorHex = this.colors[Math.floor(Math.random() * this.colors.length)];

      // vanilla JS styles to create a randomized sparkle
      sparkle.style.position = 'absolute';
      sparkle.style.borderRadius = '50%';
      sparkle.style.animation = `fade-in-out 5s ease-in-out infinite`;
      sparkle.style.backgroundColor = colorHex;
      sparkle.style.width = `${size}px`;
      sparkle.style.height = `${size}px`;
      sparkle.style.top = `${Math.random() * 100}vh`;
      sparkle.style.left = `${Math.random() * 100}vw`;
      sparkle.style.animationDelay = `${Math.random() * 5}s`;
      sparkle.style.boxShadow = `0 0 ${size * 2}px ${colorHex}`;

      container.appendChild(sparkle);
    }
  }
}

// Wait for the DOM to be fully loaded before running the script
document.addEventListener('DOMContentLoaded', () => {
  const sparkles = new Sparkles();
  sparkles.render();
});