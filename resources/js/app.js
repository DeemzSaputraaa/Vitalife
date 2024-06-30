import "./bootstrap";

import Alpine from "alpinejs";
import { initializeImageSlider } from "./imageSlider";

document.addEventListener("DOMContentLoaded", () => {
    initializeImageSlider();
});

window.addEventListener("load", () => {
    console.log("Window fully loaded");
    initializeImageSlider();
});

window.Alpine = Alpine;

Alpine.start();
