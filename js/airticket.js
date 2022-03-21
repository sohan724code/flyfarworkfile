const inqueryBtn = document.getElementById("inquery-btn");
const inqueryLinksDiv = document.getElementById("inner-inquery-links");

inqueryBtn.addEventListener("click", function () {
  inqueryLinksDiv.classList.toggle("inner-nav-active");
  document.getElementById("inquery-arrow").classList.toggle("nav-arrow-change");
});

const quationBtn = document.getElementById("quation-btn");
const quationLinksDiv = document.getElementById("inner-quation-links");

quationBtn.addEventListener("click", function () {
  quationLinksDiv.classList.toggle("inner-nav-active");
  document.getElementById("quation-arrow").classList.toggle("nav-arrow-change");
});

const invoiceBtn = document.getElementById("invoice-btn");
const invoiceLinksDiv = document.getElementById("inner-invoice-links");

invoiceBtn.addEventListener("click", function () {
  invoiceLinksDiv.classList.toggle("inner-nav-active");
  document.getElementById("invoice-arrow").classList.toggle("nav-arrow-change");
});

const expenseBtn = document.getElementById("expense-btn");
const expenseLinksDiv = document.getElementById("inner-expense-links");

expenseBtn.addEventListener("click", function () {
  expenseLinksDiv.classList.toggle("inner-nav-active");
  document.getElementById("expense-arrow").classList.toggle("nav-arrow-change");
});

const reportBtn = document.getElementById("report-btn");
const reportLinksDiv = document.getElementById("inner-report-links");

reportBtn.addEventListener("click", function () {
  reportLinksDiv.classList.toggle("inner-nav-active");
  document.getElementById("report-arrow").classList.toggle("nav-arrow-change");
});

const logBtn = document.getElementById("log-btn");
const logLinksDiv = document.getElementById("inner-log-links");

logBtn.addEventListener("click", function () {
  logLinksDiv.classList.toggle("inner-nav-active");
  document.getElementById("log-arrow").classList.toggle("nav-arrow-change");
});

const journeyStartCon = document.getElementById("journey-start-con");
const returnDateCon = document.getElementById("return-date-con");
const journeyFromCon = document.getElementById("journey-from-con");
const journeyToCon = document.getElementById("journey-to-con");

function changeTripType(type) {
  if (type == "oneway") {
    returnDateCon.classList.add("d-none");
    journeyStartCon.classList.remove("col-6");
    journeyStartCon.classList.add("col-12");

    journeyFromCon.classList.add("col-md-8");
    journeyFromCon.classList.remove("col-md-7");

    journeyToCon.classList.add("col-md-4");
    journeyToCon.classList.remove("col-md-5");
  } else {
    returnDateCon.classList.remove("d-none");
    journeyStartCon.classList.remove("col-12");
    journeyStartCon.classList.add("col-6");

    journeyFromCon.classList.remove("col-md-8");
    journeyFromCon.classList.add("col-md-7");

    journeyToCon.classList.remove("col-md-4");
    journeyToCon.classList.add("col-md-5");
  }
}

const journeyFrom = document.getElementById("journey-from-input");
const journeyTo = document.getElementById("journey-to-input");

function changeJourneyInputs() {
  const tempValue2 = journeyFrom.value;
  journeyFrom.value = journeyTo.value;
  journeyTo.value = tempValue2;
}

// Mobile Nav
const mobileMenuBtn = document.getElementById("mobile-menu");

const sideNavbar = document.getElementById("side-navbar");

mobileMenuBtn.addEventListener("click", function () {
  sideNavbar.classList.toggle("side-nav-active");
});

// main dashboard content

//search ticket section

const oneway = $(".oneway");
const roundtrip = $(".roundtrip");
const multicity = $(".muticity");

// button color
oneway.click(() => {
  oneway.css("background-color", "#3751ff");
  roundtrip.css("background-color", "#f0f0f0");
  multicity.css("background-color", "#f0f0f0");
});

roundtrip.click(() => {
  oneway.css("background-color", "#f0f0f0");
  roundtrip.css("background-color", "#3751ff");
  multicity.css("background-color", "#f0f0f0");
});
multicity.click(() => {
  oneway.css("background-color", "#f0f0f0");
  roundtrip.css("background-color", "#f0f0f0");
  multicity.css("background-color", "#3751ff");
});

//slick carosuel
$(".slider").slick({
  dots: false,
  infinite: true,
  speed: 300,
  slidesToShow: 4,
  slidesToScroll: 4,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: true,
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
