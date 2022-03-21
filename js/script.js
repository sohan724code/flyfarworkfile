const swapBtn2 = document.getElementById('swap-btn2');
const journeyFrom = document.getElementById('journey-from');
const journeyTo = document.getElementById('journey-to');

swapBtn2.addEventListener('click', function () {
    const tempValue2 = journeyFrom.value;
    journeyFrom.value = journeyTo.value;
    journeyTo.value = tempValue2;
});