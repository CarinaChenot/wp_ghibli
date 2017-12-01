IntersectionObserver.prototype.POLL_INTERVAL = 100

function onIntersect(entries) {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      entry.target.classList.add('fade')

      setInterval(() => {
        entry.target.classList.remove('anim')
      }, 700)
    }
  })
}

const options = {
  rootMargin: '-200px', // To fire the event little bit after screen enters
}

const observer = new window.IntersectionObserver(onIntersect, options)

document.addEventListener('DOMContentLoaded', function(event) {
  ;[...document.querySelectorAll('.anim')].forEach(element => observer.observe(element))
});
