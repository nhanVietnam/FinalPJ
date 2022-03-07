require("./bootstrap");
require("font-awesome/css/font-awesome.min.css");
import Swiper, { Autoplay, Navigation } from "swiper";
import "swiper/css";
import "swiper/css/navigation";

const swiper_s1 = new Swiper(".s1", {
    // Optional parameters
    modules: [Autoplay],
    direction: "horizontal",
    loop: true,
    autoplay: {
        delay: 2000,
    },
});

const swiper_s2 = new Swiper(".s2", {
    // Optional parameters
    modules: [Navigation, Autoplay],
    direction: "horizontal",
    loop: true,
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
});

const swiper_s3 = new Swiper(".s3", {
    // Optional parameters
    modules: [Navigation],
    direction: "horizontal",
    loop: true,
    slidesPerView: 5,
    spaceBetween: 10,
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
});

const swiper_s4 = new Swiper(".s4", {
    // Optional parameters
    modules: [Navigation],
    direction: "horizontal",
    loop: true,
    slidesPerView: 5,
    spaceBetween: 10,
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
});
