const storedEnd = localStorage.getItem("endTimeCos");

let previousTimeBetweenDates;
if (storedEnd) {
  startTimer(parseInt(storedEnd, 10));
} else {
  const countToDate = new Date().setHours(new Date().getHours() + 12);
  localStorage.setItem("endTimeCos", countToDate);
  startTimer(countToDate);
}

function startTimer(storedEnd) {
  const timer = setInterval(() => {
    const currentDate = new Date();
    const timeBetweenDates = Math.ceil((storedEnd - currentDate) / 1000);
    flipAllCards(timeBetweenDates);

    previousTimeBetweenDates = timeBetweenDates;
    
    if (storedEnd < currentDate.getTime()) {
      clearInterval(timer);
      const countToDate = new Date().setHours(new Date().getHours() + 12);
      localStorage.setItem("endTimeCos", countToDate);
      startTimer(countToDate);
    }
  }, 250);

}

function flipAllCards(time) {
  const seconds = time % 60
  const minutes = Math.floor(time / 60) % 60
  const hours = Math.floor(time / 3600)

  flip(document.querySelector("[data-hours-tens]"), Math.floor(hours / 10))
  flip(document.querySelector("[data-hours-ones]"), hours % 10)
  flip(document.querySelector("[data-minutes-tens]"), Math.floor(minutes / 10))
  flip(document.querySelector("[data-minutes-ones]"), minutes % 10)
  flip(document.querySelector("[data-seconds-tens]"), Math.floor(seconds / 10))
  flip(document.querySelector("[data-seconds-ones]"), seconds % 10)
}

function flip(flipCard, newNumber) {
  const topHalf = flipCard.querySelector(".top")
  const startNumber = parseInt(topHalf.textContent)
  if (newNumber === startNumber) return

  const bottomHalf = flipCard.querySelector(".bottom")
  const topFlip = document.createElement("div")
  topFlip.classList.add("top-flip")
  const bottomFlip = document.createElement("div")
  bottomFlip.classList.add("bottom-flip")

  top.textContent = startNumber
  bottomHalf.textContent = startNumber
  topFlip.textContent = startNumber
  bottomFlip.textContent = newNumber

  topFlip.addEventListener("animationstart", e => {
    topHalf.textContent = newNumber
  })
  topFlip.addEventListener("animationend", e => {
    topFlip.remove()
  })
  bottomFlip.addEventListener("animationend", e => {
    bottomHalf.textContent = newNumber
    bottomFlip.remove()
  })
  flipCard.append(topFlip, bottomFlip)
}