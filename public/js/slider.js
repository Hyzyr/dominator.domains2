//slider
const slickSettings = {
  slidesToShow: 6,
  infinite: true,
  autoplay: true,
  autoplaySpeed: 0,
  speed: 2000,
  cssEase:'linear',
  centerMode: true,
  focusOnSelect: true,
  arrows: false,
  dots: false,
  responsive: [
    {
      breakpoint: 1025,
      settings: {
        slidesToShow: 4,
        speed: 1000,
        autoplay: true,
      },
    },
    {
      breakpoint: 720,
      settings: {
        slidesToShow: 3,
        speed: 1000,
        autoplay: true,
      },
    },
    {
      breakpoint: 590,
      settings: {
        slidesToShow: 2.6,
        speed: 1000,
        autoplay: true,
      },
    },
    {
      breakpoint: 520,
      settings: {
        slidesToShow: 2,
        speed: 1000,
        autoplay: true,
      },
    },
    {
      breakpoint: 460,
      settings: {
        slidesToShow: 1,
        speed: 1000,
        autoplay: true,
      },
    },
  ],
};

const slickSliders = document.querySelectorAll(".slickSlider");
slickSliders.forEach((slider) => {
  $(slider).slick(slickSettings);
});
//slider end
