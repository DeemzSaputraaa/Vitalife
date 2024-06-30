export function initializeImageSlider() {
    const slider = document.getElementById("imageSlider");
    if (!slider) {
        console.error("Slider element not found");
        return;
    }

    const images = slider.querySelectorAll(".slider-image");
    let currentIndex = 0;

    function showImages() {
        images.forEach((img, i) => {
            if (i >= currentIndex && i < currentIndex + 3) {
                img.classList.remove("hidden");
                img.style.order = i - currentIndex;
            } else {
                img.classList.add("hidden");
                img.style.order = "";
            }
        });
        console.log("Current index:", currentIndex);
    }

    function nextImage() {
        currentIndex = (currentIndex + 1) % images.length;
        showImages();
    }

    function prevImage() {
        currentIndex = (currentIndex - 1 + images.length) % images.length;
        showImages();
    }

    // Inisialisasi tampilan awal
    showImages();

    // Fungsi untuk tombol next
    const nextButton = document.getElementById("nextButton");
    if (nextButton) {
        nextButton.addEventListener("click", () => {
            console.log("Next button clicked");
            nextImage();
        });
    } else {
        console.error("Next button not found");
    }

    // Fungsi untuk tombol previous
    const prevButton = document.getElementById("prevButton");
    if (prevButton) {
        prevButton.addEventListener("click", () => {
            console.log("Prev button clicked");
            prevImage();
        });
    } else {
        console.error("Prev button not found");
    }

    console.log("Image slider initialized");
}
