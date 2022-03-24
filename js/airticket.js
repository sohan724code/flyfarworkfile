// Mobile Nav
const mobileMenuBtn = document.getElementById("mobile-menu");

const sideNavbar = document.getElementById("side-navbar");

mobileMenuBtn.addEventListener("click", function () {
  sideNavbar.classList.toggle("side-nav-active");
});

// main dashboard content

//search ticket section

const oneway = $("#oneway");
const roundtrip = $("#roundtrip");
const multicity = $("#multicity");
const returnDate = $(".return-on");
const oneWayTripPacage = $("#flight-details-wrapper-one-way");
const roundTripPacage = $("#flight-details-wrapper-round-trip");

// button Click behavior

//show element depend on trorType
function changeJournyType(type) {
  if (type === "one-way") {
    oneway.toggleClass("oneway");
    roundtrip.removeClass("roundtrip-clicked");
    multicity.removeClass("muticity-clicked");
    returnDate.addClass("d-none");
    //new functionality
    oneWayTripPacage.removeClass("d-none");
    roundTripPacage.addClass("d-none");
  } else if (type === "round-trip") {
    roundtrip.toggleClass("roundtrip-clicked");
    oneway.toggleClass("oneway-clicked");
    multicity.removeClass("muticity-clicked");
    returnDate.removeClass("d-none");
    //new functionality
    oneWayTripPacage.addClass("d-none");
    roundTripPacage.removeClass("d-none");
  } else {
    multicity.toggleClass("muticity-clicked");
    roundtrip.removeClass("roundtrip-clicked");
    oneway.toggleClass("oneway-clicked");
    returnDate.removeClass("d-none");
    //new functionality
    oneWayTripPacage.removeClass("d-none");
    roundTripPacage.addClass("d-none");
  }
  // console.log(type);
}
//swap button starts
const visevarsabtn = $(".visevarsa");
const fromval = $("#fromval").change();
const toval = $("#toval").change();
visevarsabtn.click(() => {
  const tempval = fromval.val();
  fromval.val(toval.val());
  toval.val(tempval);
});

// set default value to datepicker starts
const currentDate = $.datepicker.formatDate("dd MM DD", new Date());

$.datepicker.setDefaults({
  dateFormat: "dd MM DD",
});

$("#datepicker1").val(currentDate);
// set default value to datepicker ends
// datepicker starts
$(function () {
  $("#datepicker1").datepicker();
});
$(function () {
  $("#datepicker2").datepicker();
});
//datepicker ends

// stops pagination reloading starts
$(".custom-paginatino-wrapper").submit(function (e) {
  e.preventDefault(); // <==stop page refresh==>
});
// stops pagination reloading starts

//slick carosuel
$(".slider").slick({
  dots: false,
  infinite: true,
  speed: 300,
  slidesToShow: 8,
  slidesToScroll: 8,
  prevArrow: '<button class="slide-arrow prev-arrow"></button>',
  nextArrow: '<button class="slide-arrow next-arrow"></button>',
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: false,
      },
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2,
      },
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
      },
    },
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ],
});
