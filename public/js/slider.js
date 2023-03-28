//slider
const slickSettings = {
  slidesToShow: 8,
  infinite: true,
  autoplay: true,
  autoplaySpeed: 0,
  speed: 4800,
  cssEase: "linear",
  centerMode: true,
  focusOnSelect: true,
  arrows: false,
  dots: false,
  responsive: [
    {
      breakpoint: 1025,
      settings: {
        slidesToShow: 6,
      },
    },
    {
      breakpoint: 770,
      settings: {
        slidesToShow: 4,
      },
    },
    {
      breakpoint: 590,
      settings: {
        slidesToShow: 3,
      },
    },

    {
      breakpoint: 480,
      settings: {
        speed: 3000,
        slidesToShow: 2.2,
      },
    },
    {
      breakpoint: 420,
      settings: {
        speed: 2600,
        slidesToShow: 1.5,
      },
    },
  ],
};

const slickSliders = document.querySelectorAll(".slickSlider");
slickSliders.forEach((slider) => {
  $(slider).slick(slickSettings);
});
//slider end
