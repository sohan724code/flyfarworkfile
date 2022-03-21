const oneway = document.getElementById('one-way');
const roundTrip = document.getElementById('round-trip');
const multiCity = document.getElementById('multi-city')

oneway.addEventListener('click', function () {

    oneway.classList.add('way-active')
    roundTrip.classList.remove('way-active')
    multiCity.classList.remove('way-active')
})

roundTrip.addEventListener('click', function () {
    oneway.classList.remove('way-active')
    roundTrip.classList.add('way-active')
    multiCity.classList.remove('way-active')
})

multiCity.addEventListener('click', function () {
    oneway.classList.remove('way-active')
    roundTrip.classList.remove('way-active')
    multiCity.classList.add('way-active')
})

const swapBtn = document.getElementById('swap-btn');
const placeFrom = document.getElementById('place-from');
const placeTo = document.getElementById('place-to');

swapBtn.addEventListener('click', function () {
    const tempValue = placeFrom.value;
    placeFrom.value = placeTo.value;
    placeTo.value = tempValue;
});