const locationInput = document.getElementById('location-input')
const domesticBtn = document.getElementById('domestic-btn');
const internationalBtn = document.getElementById('international-btn');

function changeBtn(btn) {
    if (btn === 'domestic') {
        domesticBtn.classList.add('ffl-btn-active');
        internationalBtn.classList.remove('ffl-btn-active');
        locationInput.setAttribute('list', 'domestic-locations')
    } else {
        domesticBtn.classList.remove('ffl-btn-active');
        internationalBtn.classList.add('ffl-btn-active');
        locationInput.setAttribute('list', 'international-locations')
    }
}