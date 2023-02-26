

// range slider in service details
var sliderEl1 = document.querySelector('.first [data-rangeslider]')
var sliderEl2 = document.querySelector('.second [data-rangeslider]')
var sliderEl3 = document.querySelector('.third [data-rangeslider]')
var sliderEl4 = document.querySelector('.fourth [data-rangeslider]')
var sliderEl5 = document.querySelector('.fifth [data-rangeslider]')


var firstOutput;
var secondOutput;
var thirdOutput;
var fourOutput;
var summa;
var summas;
var prev;
var itog;
var stav;
var one;
var vse;

sliderEl1.addEventListener('input', (ev) => {
  document.querySelector('.lc-amount .output').innerHTML = ev.target.value;
  firstOutput = ev.target.value;

  monthlyAmount();
    pereAmount()
})
sliderEl2.addEventListener('input', (ev) => {
  document.querySelector('.lc-term .output').innerHTML = ev.target.value;
  secondOutput = ev.target.value;
  monthlyAmount();
    pereAmount()
})

sliderEl3.addEventListener('input', (ev) => {
  document.querySelector('.lc-interest .output').innerHTML = ev.target.value;
  thirdOutput = ev.target.value;
  monthlyAmount();
    pereAmount()
})

sliderEl4.addEventListener('input', (ev) => {
  document.querySelector('.lc-proc .output').innerHTML = ev.target.value;
    fourOutput = ev.target.value;
  monthlyAmount();
    pereAmount()
})

sliderEl5.addEventListener('input', (ev) => {
  document.querySelector('.lc-term .output').innerHTML = ev.target.value;
  secondOutput = ev.target.value;
  monthlyAmount();
    pereAmount()
})
function pereAmount() {
    document.querySelector('.lc-pere .output').innerHTML = Math.ceil(firstOutput*fourOutput/100);
}


function monthlyAmount() {
    one = firstOutput;
    prev = firstOutput*secondOutput/100;
    stav = firstOutput/100
 summa = stav*fourOutput;
    summas = parseInt(summa)+parseInt(one);
 itog = parseInt(summas) - parseInt(prev);
 vse = parseInt(itog) / (12*parseInt(thirdOutput));
        document.querySelector('.lc-monthlyd .output').innerHTML = Math.ceil(vse)  ;
}
// rangesliderJs.create(sliderEl1, {min: 0, max: 5, step: 0.5})
rangesliderJs.create(sliderEl1)
rangesliderJs.create(sliderEl2)
rangesliderJs.create(sliderEl3)
rangesliderJs.create(sliderEl4)
rangesliderJs.create(sliderEl5)

