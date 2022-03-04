<<<<<<< HEAD
require('./bootstrap');
require('font-awesome/css/font-awesome.min.css')

=======
require("font-awesome/css/font-awesome.min.css");
>>>>>>> 169f1e6f218c549114a298b0ada1657b3ba047ef
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
