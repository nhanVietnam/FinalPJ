require("./bootstrap");
require("font-awesome/css/font-awesome.min.css");
import Swiper, { Autoplay, Navigation } from "swiper";
import "swiper/css";
import "swiper/css/navigation";

const swiper = new Swiper(".s1", {
    // Optional parameters
    modules: [Autoplay],
    direction: "horizontal",
    loop: true,
    autoplay: {
        delay: 2000,
    },
});

const swiper_second = new Swiper(".s2", {
    // Optional parameters
    modules: [Navigation],
    direction: "horizontal",
    loop: true,
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
});
