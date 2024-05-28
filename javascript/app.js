//Code für eine bewegte Linie und für bewegliche Containe

let border = document.querySelector('.border-line');

let animationWidth = 0;
let oldScroll = 0;

window.onscroll = () => {
    let scrollY = window.scrollY;

    if (oldScroll > scrollY) {
        animationWidth -= 1.0;
    } else {
        animationWidth += 1.0;
    }

    animationWidth = Math.min(Math.max(animationWidth, 0), 100);
    border.style.width = animationWidth + '%';

    oldScroll = scrollY;

    animateElements();
};

const animateElements = () => {
    let elements = document.querySelectorAll('.bewegung .bewegungs_text p');
    let screenPosition = window.innerHeight / 1.3;

    elements.forEach(element => {
        let position = element.getBoundingClientRect().top;
        if (position < screenPosition) {
            element.classList.add('animated');
        }
    });
};




// Code für Partikel



var stats = new Stats();

stats.setMode(0);

stats.domElement.style.position = 'absolute';
stats.domElement.style.left = '0px';
stats.domElement.style.top = '0px';

document.body.appendChild(stats.domElement);

function updateStats() {
  stats.begin();
  
  stats.end();

  requestAnimationFrame(updateStats);
}

updateStats();


