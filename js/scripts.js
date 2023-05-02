const html = document.querySelector( "html" );
const header = document.querySelector( "#navbar" );
const nav = document.querySelector("nav");
const menu = document.querySelector( "#menu" );
const body = document.querySelector( "body" );
let prevScrollpos = window.pageYOffset;

// Load javaScript dependent styling
html.className = 'js';

// Add nav Button
const navBtn = document.createElement("button");
navBtn.setAttribute("id", "hamburger");
navBtn.setAttribute("class", "hamburger hamburger--squeeze");
navBtn.setAttribute("type", "button");
navBtn.innerHTML =
`<span class="hamburger-box">
  <span class="visually-hidden">Menu</span>
  <span class="hamburger-inner" role="presentation"></span>
</span>`;

nav.insertBefore(navBtn, menu);

// Focus trap
function trapFocus(element) {
  var focusableEls = element.querySelectorAll('a[href]:not([disabled]), button:not([disabled]), textarea:not([disabled]), input[type="text"]:not([disabled]), input[type="radio"]:not([disabled]), input[type="checkbox"]:not([disabled]), select:not([disabled])');
  var firstFocusableEl = focusableEls[0];
  var lastFocusableEl = focusableEls[focusableEls.length - 1];
  var KEYCODE_TAB = 9;

  element.addEventListener('keydown', function(e) {
    var isTabPressed = (e.key === 'Tab' || e.keyCode === KEYCODE_TAB);

    const open = header.className.includes( "open" );
    if (!open) {
      return;
    }
    if (!isTabPressed) {
      return;
    }
    if ( e.shiftKey ) /* shift + tab */ {
      if (document.activeElement === firstFocusableEl) {
        lastFocusableEl.focus();
          e.preventDefault();
        }
      } else /* tab */ {
      if (document.activeElement === lastFocusableEl) {
        firstFocusableEl.focus();
          e.preventDefault();
        }
      }
  });
}

// Exclude focus
function excludeFocus(element) {
  var focusableEls = element.querySelectorAll('a[href]:not([disabled]), button:not([disabled]), textarea:not([disabled]), input[type="text"]:not([disabled]), input[type="radio"]:not([disabled]), input[type="checkbox"]:not([disabled]), select:not([disabled])');
  for (let i = 0; i < focusableEls.length; i++ ) {
    focusableEls[i].tabIndex = '-1';
  }
}

// Include focus
function includeFocus(element) {
  var focusableEls = element.querySelectorAll('a[href]:not([disabled]), button:not([disabled]), textarea:not([disabled]), input[type="text"]:not([disabled]), input[type="radio"]:not([disabled]), input[type="checkbox"]:not([disabled]), select:not([disabled])');
  for (let i = 0; i < focusableEls.length; i++ ) {
    focusableEls[i].tabIndex = '0';
  }
}

// Set focus behaviour on nav
function setMenuFocus() {
  const open = header.className.includes( "open" );
  if ( !open && window.innerWidth < 1025 ) {
    excludeFocus(menu);
    return "excluded"
  } else {
    includeFocus(menu);
    return "included"
  }
}

// Set aria attributes on nav
function setAria() {
  if (window.innerWidth < 1025) {

    navBtn.setAttribute("aria-label", "Menu");
    navBtn.setAttribute("aria-controls", "menu");
    menu.setAttribute( 'aria-labelledby', "hamburger" )
    navBtn.ariaHidden = false;
    const open = header.className.includes( "open" );
    open ? navBtn.ariaExpanded = true : navBtn.ariaExpanded = false ;

  } else {

    navBtn.removeAttribute('aria-expanded');
    navBtn.setAttribute( 'aria-hidden', true )
    menu.removeAttribute('aria-labelledby');

  }
}

// Nav open-close
function openCloseNav() {
  body.classList.toggle('no-scroll');
  //menu.classList.toggle( "open" );
  header.classList.toggle( "open" );
  setAria();
  setMenuFocus();
  trapFocus(header);
}


// Call functions that need initiating
setMenuFocus();
setAria();


// Define event handlers

// Click event
if (navBtn) {
  navBtn.addEventListener('click', event => {
    openCloseNav();
  });
}

// Escape keydown
header.addEventListener('keydown', function(e) {
  var KEYCODE_ESC = 27;
  var isEscPressed = (e.key === 'Escape' || e.keyCode === KEYCODE_ESC);
  if(isEscPressed) {
    if (header.className.includes( "open" )) {
      openCloseNav();
    }
  }
});

// Resize event
window.onresize = function(event) {
  setAria();
  setMenuFocus();
  if (window.innerWidth >= 1025) {
    if (header.className.includes( "open" )) {
      openCloseNav();
    }
  }
};

// Nav show-hide on scroll
window.onscroll = function() {
  let currentScrollPos = window.pageYOffset;
  if ((prevScrollpos < currentScrollPos) && (currentScrollPos > 20)) {
      document.getElementById("navbar").style.top = "-110px";
  } else {
      document.getElementById("navbar").style.top = "0";
  }
  prevScrollpos = currentScrollPos;
}


// Cards
const cards = document.querySelectorAll('.card');
Array.prototype.forEach.call(cards, card => {
    let down, up, link = card.querySelector('h3 a');
    if (link) {
      let initial = card.style.background;
      card.classList.add('haslink');
      card.onmousedown = () => down = +new Date();
      card.onmouseup = () => {
          up = +new Date();
          if ((up - down) < 200) {
              link.click();
          }
      }
    }
});


/* ----- Accordion ----- */

(function() {

  // Get accordion container and add js class
  const accordion = document.querySelector('.accordion');
  if (accordion) accordion.classList.add('js');

  // Get all the <h2> headings
  const headings = document.querySelectorAll('.accordion-heading');
  //console.log(headings);

  Array.prototype.forEach.call(headings, heading => {
    // Give each accordion heading a toggle button child
    // with the SVG plus/minus icon
    heading.innerHTML = `
      <button aria-expanded="false">
        ${heading.textContent}
        <svg class="svg" width="21" height="21" viewBox="0 0 21 21" aria-hidden="true" focusable="false">
          <rect class="vert" height="21" width="3" y="0" x="9"/>
          <rect class="hori" height="3" width="21" y="9" x="0"/>
        </svg>
      </button>`;

    // Get wrapper element for `contents` and hide it
    let wrapper = heading.parentElement.nextElementSibling;
    wrapper.setAttribute('hidden', true);

    // Assign the button
    let btn = heading.querySelector('button');
    let btnParent = heading.parentElement;

    btnParent.onclick = () => {
      // Cast the state as a boolean
      let expanded = btn.getAttribute('aria-expanded') === 'true' || false

      // Switch the state
      btn.setAttribute('aria-expanded', !expanded)
      // Switch the content's visibility
      wrapper.hidden = expanded
    }
  })
})()


/* ----- Slider ----- */

'use strict';

(function () {
  /* touch detection */
  window.addEventListener('touchstart', function touched() {
    document.body.classList.add('touch');
    window.removeEventListener('touchstart', touched, false);
  }, false);

  /* lazy loading and button controls */
  const gallery = document.querySelector('[aria-label="gallery"]');
  const slides = gallery.querySelectorAll('li');
  const instructions = document.getElementById('instructions');

  Array.prototype.forEach.call(slides, function (slide) {
    slide.querySelector('a').setAttribute('tabindex', '-1');
  });

  const observerSettings = {
    root: gallery,
    rootMargin: '-10px'
  };

  if ('IntersectionObserver' in window) {
    const scrollIt = function scrollIt(slideToShow) {
      const galWidth = gallery.scrollWidth;
      const noOfSlides = slides.length;
      const scrollPos = Array.prototype.indexOf.call(slides, slideToShow) * (galWidth / noOfSlides);
      gallery.scrollLeft = scrollPos;
      //console.log(scrollPos);
    };

    var showSlide = function showSlide(dir, slides) {
      let visible = document.querySelectorAll('[aria-label="gallery"] .visible');
      let i = dir === 'previous' ? 0 : 1;

      if (visible.length > 1) {
        scrollIt(visible[i]);
      } else {
        let newSlide = i === 0 ? visible[0].previousElementSibling : visible[0].nextElementSibling;
        if (newSlide) {
          scrollIt(newSlide);
        }
      }
    };

    const callback = function callback(slides, observer) {
      Array.prototype.forEach.call(slides, function (entry) {
        entry.target.classList.remove('visible');
        let link = entry.target.querySelector('a');
        link.setAttribute('tabindex', '-1');
        if (!entry.intersectionRatio > 0) {
          return;
        }
        let img = entry.target.querySelector('img');
        //console.log(img);
        if (img.dataset.src) {
          img.setAttribute('src', img.dataset.src);
          img.removeAttribute('data-src');
        }
        entry.target.classList.add('visible');
        link.removeAttribute('tabindex', '-1');
      });
    };

    const observer = new IntersectionObserver(callback, observerSettings);
    Array.prototype.forEach.call(slides, function (t) {
      return observer.observe(t);
    });

    const controls = document.createElement('ul');
    controls.setAttribute('aria-label', 'gallery controls');
    controls.innerHTML = '\n    <li><button type="button" id="previous" aria-label="previous">\n      <svg aria-hidden="true" focusable="false"><use xlink:href="#arrow-left"></use></svg>\n    </button></li>\n    <li><button type="button" id="next" aria-label="next">\n      <svg aria-hidden="true" focusable="false"><use xlink:href="#arrow-right"/></svg>\n    </button></li>\n    ';
    instructions.parentNode.insertBefore(controls, instructions.nextElementSibling);
    instructions.parentNode.style.padding = '0 3rem';

    controls.addEventListener('click', function (e) {
      showSlide(e.target.closest('button').id, slides);
    });

    /* ----- ADDED BY ME ----- */

    const images = gallery.querySelectorAll('img');
    const links = gallery.querySelectorAll('a');
    let isDragging = false;
    let startPos, currentPos, endPos = 0;
    let index = 1;

    // disable default image drag
    images.forEach(element => element.setAttribute("draggable", false));
    links.forEach(element => element.addEventListener("click",function(e){
      //prevent event action
      e.preventDefault();
    }));

    function getPositionX(event) {
				return event.type.includes('mouse') ? event.pageX : event.touches[0].clientX;
		}

    // function getSlideIndex() {
    //   // Convert slides NodeList to an array
    //   const slidesArr = Array.prototype.slice.call(slides);
    //   let visible = document.querySelectorAll('[aria-label="gallery"] .visible')[0];
    //   let child = visible;
    //   let parent = child.parentNode;
    //   let index = Array.prototype.indexOf.call(parent.children, child);
    //   console.log(index);
    //   return index;
    // }

    function touchStart() {
      return function (event) {
        startPos = getPositionX(event);
        prevScroll = gallery.scrollLeft;
        isDragging = true;
        gallery.classList.add('grabbing');
        console.log('startPos is ' + startPos);
        console.log(prevScroll);
      }
    }

    function touchMove(event) {
      return function (event) {
  			if (isDragging) {
          let currentPos = getPositionX(event);
          gallery.scrollLeft = prevScroll + startPos - currentPos;
  			}
      }
		}

    function touchEnd() {
      return function (event) {
        isDragging = false;
        let endPos = getPositionX(event);
        gallery.classList.remove('grabbing');
        let movedBy = endPos - startPos;
        console.log('moved by ' + movedBy);
        console.log('endPos is ' + endPos);

        if (movedBy < -50) {
          // if moved enough negative then snap to next slide if there is one
          showSlide(next, slides);
        } else if (movedBy > 50) {
          // if moved enough positive then snap to previous slide if there is one
          console.log('previous');
          showSlide(previous, slides);
        } else {
          gallery.scrollLeft = prevScroll;
        }

      }
    }

    slides.forEach((slide, index) => {
      // touch events
      slide.addEventListener('touchstart', touchStart());
      slide.addEventListener('touchend', touchEnd());
      slide.addEventListener('touchmove', touchMove());
      // mouse events
      slide.addEventListener('mousedown', touchStart());
      slide.addEventListener('mouseup', touchEnd());
      slide.addEventListener('mousemove', touchMove());
      //gallery.addEventListener('mouseleave', touchEnd());
    })

    /* ----- END ----- */

  } else {
    Array.prototype.forEach.call(slides, function (s) {
      var img = s.querySelector('img');
      img.setAttribute('src', img.getAttribute('data-src'));
    });
  }
})();
