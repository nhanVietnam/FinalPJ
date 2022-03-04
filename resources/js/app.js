
require('./bootstrap');
require('font-awesome/css/font-awesome.min.css')
import Swiper from "swiper";
import "swiper/css";

const swiper = new Swiper(".swiper", {
    // Optional parameters
    direction: "horizontal",
    loop: true,
    autoplay: {
        delay: 2000,
    },
});
