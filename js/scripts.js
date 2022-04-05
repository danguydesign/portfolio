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
