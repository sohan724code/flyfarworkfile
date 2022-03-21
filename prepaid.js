// prepaid-reciveable-unerned

const prepaidBtn = document.getElementById('prepaid-btn');
const unearnedBtn = document.getElementById('unearned-btn');
const reciveableBtn = document.getElementById('reciveable-btn');



const totalthing = document.getElementById('total-thing');

const prepaid = document.getElementById('prepaid');
const unearned = document.getElementById('unearned');
const reciveable = document.getElementById('reciveable');

prepaidBtn.addEventListener('click', function () {

    totalthing.innerText = 'Total Payment = 5,000,00 Tk';

    prepaid.classList.remove('d-none');
    unearned.classList.add('d-none');
    reciveable.classList.add('d-none');

    prepaidBtn.classList.add('active-btn');
    unearnedBtn.classList.remove('active-btn');
    reciveableBtn.classList.remove('active-btn');

});
unearnedBtn.addEventListener('click', function () {

    totalthing.innerText = 'Total Advance Recived = 5,000,00 Tk';


    prepaid.classList.add('d-none');
    unearned.classList.remove('d-none');
    reciveable.classList.add('d-none');

    prepaidBtn.classList.remove('active-btn');
    unearnedBtn.classList.add('active-btn');
    reciveableBtn.classList.remove('active-btn')

});

reciveableBtn.addEventListener('click', function () {
    totalthing.innerText = 'Total Reciveable = 5,000,00 Tk';

    prepaid.classList.add('d-none');
    unearned.classList.add('d-none');
    reciveable.classList.remove('d-none');

    prepaidBtn.classList.remove('active-btn');
    unearnedBtn.classList.remove('active-btn');
    reciveableBtn.classList.add('active-btn')
});

