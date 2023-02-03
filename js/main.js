// Burger Menu variables
let dropMenu = document.querySelector('.burger-drop');
let burgerButton = document.querySelector('.header-burger');
let burgerIcon = document.querySelector('.header-burger-icon');
let subMenuTechno = document.querySelector('#menu-technos');
let submenu = document.querySelectorAll('#submenu');
let headerContainer = document.querySelector('.header-container');

// Desktop Drop Menu variables
let submenuDesktop = document.querySelector('#submenu-list-desktop');
let technosList = document.querySelector('#drop-item-desktop-a-technos');

// Slider variables
let gridContainer = document.querySelector('.grid-container');
let closeButton = document.querySelector('.close-button');
let controlsWrapper = document.querySelector('.controls-wrapper');
let controlButtons = document.querySelectorAll('.control-button');
let nextButton = document.querySelector('#next');
let prevButton = document.querySelector('#prev');
let imgsArray = ['img-ludo', 'img-baj', 'img-alsh', 'img-alsh2', 'img-alsh3', 'img-carecover', 'img-univtel1', 'img-univtel2', 'img-hcg1', 'img-hcg2', 'img-info1', 'img-info2', 'img-info3'];
let slide = document.querySelector('.slide');
let slideDescript = document.querySelector('.slide-description');
let slideDescriptDetails = document.querySelector('.slide-description-details')
let slideDescriptArray = ['Ludothèque Familles Rurales', 'Ludothèque Familles Rurales', 'ALSH Familles Rurales', 'ALSH Familles Rurales', 'ALSH Familles Rurales', 'CareCover', "L'Univers du Téléphone", "L'Univers du Téléphone", 'Hérault Carte Grise', 'Hérault Carte Grise', 'Familles Rurales', 'Familles Rurales', 'Familles Rurales'];
let slideDescriptDetailsArray = ['Première de couverture projet pédagogique', 'Flyer informations ludothèque', 'Livret programme ALSH (livret 1ère/4ème) 1', 'Livret programme ALSH (livret 1ère/4ème) 2', 'Livret programme ALSH (livret 1ère/4ème) 3', 'Flyer jeu concours', 'Flyer publicitaire', 'Flyer publicitaire n°2', 'Flyer publicitaire recto', 'Flyer publicitaire verso', 'Infographie ALSH page 1', 'Infographie ALSH page 2', 'Infographie ALSH page 3']

// Modal variables
let modal = document.querySelector('.modal-back');
let modalImage = document.querySelector('#modal');
let pop = document.querySelector('#pop');
let closeModal = document.querySelector('.close-modal');

// Home Code Game variables
let homeCodeGame = document.querySelector('.home-code-game');

// Dropdown Function
function showMenu() {
    dropMenu.classList.toggle('hidden');
    burgerIcon.classList.toggle('close-burger-icon');
}

burgerButton.addEventListener('click', (e) => {
    showMenu();
});

let y = 0;
// Slider Function
function sliderMoveNext() {
    // deletes all images
    for (i = 0; i < imgsArray.length; i++) {
        slide.classList.remove(imgsArray[i]);
        modalImage.classList.remove(imgsArray[i]);
    }
    // new iterator to add images/text
    y += 1;
    if (y == imgsArray.length) {
        y = 0;
        slide.classList.add(imgsArray[y]);
        modalImage.classList.add(imgsArray[y]);
        slideDescript.textContent = slideDescriptArray[y];
        slideDescriptDetails.textContent = slideDescriptDetailsArray[y];
    } else {
        slide.classList.add(imgsArray[y]);
        modalImage.classList.add(imgsArray[y]);
        slideDescript.textContent = slideDescriptArray[y];
        slideDescriptDetails.textContent = slideDescriptDetailsArray[y];
    }
}

function sliderMovePrev() {
    for (i = 0; i < imgsArray.length; i++) {
        slide.classList.remove(imgsArray[i]);
        modalImage.classList.remove(imgsArray[i]);
    }
    y -= 1;
    if (y < 0) {
        y = imgsArray.length - 1;
        slide.classList.add(imgsArray[y]);
        modalImage.classList.add(imgsArray[y]);
        slideDescript.textContent = slideDescriptArray[y];
        slideDescriptDetails.textContent = slideDescriptDetailsArray[y];
    } else {
        slide.classList.add(imgsArray[y]);
        modalImage.classList.add(imgsArray[y]);
        slideDescript.textContent = slideDescriptArray[y];
        slideDescriptDetails.textContent = slideDescriptDetailsArray[y];
    }
}

function toggleModal() {
    modal.classList.toggle('hidden');
    closeButton.classList.toggle('hidden');
    gridContainer.classList.toggle('overflow-hide');
    for (i = 0; i < controlButtons.length; i++) {
        controlButtons[i].classList.toggle('controls-style');
    }
    controlsWrapper.classList.toggle('controls-wrapper');
    controlsWrapper.classList.toggle('controls-wrapper-expanded');
    prevButton.classList.toggle('prev');
    nextButton.classList.toggle('next');
}

if (nextButton) {
    nextButton.addEventListener('click', (e) => {
        sliderMoveNext();
    });
    prevButton.addEventListener('click', (e) => {
        sliderMovePrev();
    });
}

if (pop) {
    pop.addEventListener('click', (e) => {
        toggleModal();
    });
    closeButton.addEventListener('click', (e) => {
        toggleModal();
    })
}

subMenuTechno.addEventListener('click', (e) => {
    subMenuTechno.classList.toggle('submenu');
    for (i = 0; i < submenu.length; i++) {
        submenu[i].classList.toggle('hidden');
    }
})

for (i = 0; i < submenu.length; i++) {
    submenu[i].addEventListener('click', (e) => {
        showMenu();
    })
}


// setInterval(e => {
    //     author.textContent += messg[increment];
    //     console.log(author.textContent);
    //     increment++;
    //     if (increment === 10) {
        //         clearInterval(e);
        //     }
        // }, 300);
        
// let increment = 0;
// console.log(increment)
// function testons() {
//         author.textContent += messg[increment];
//         console.log(author.textContent);
//         increment+=increment;
//     }

// let interval = setInterval(testons(), 100);
// setTimeout((e) => {
//     clearInterval(interval)
// }, 2000);
// console.log(increment);

testMsg = `<span><span>$ git</span><span class="code-line-argument"> clone </span>[repo]</span></p><p><span class="code-comment">// Clone un repository vers votre machine locale.</span></p><p><span class="code-comment">// Exemple:</span></p><p><span><span>$ git</span><span class="code-line-argument"> clone </span><span class="code-lines-italic">https://github.com/MetzyS/mediaPlayer.git</span></span>`;


console.log(homeCodeGame);

let increment = 0;
let msgBuffer;
function afficheLettres() {
   if(increment < testMsg.length) {
    // msgBuffer += testMsg.charAt(increment); fonctionne
    msgBuffer = Array.from(testMsg);
    // homeCodeGame.innerHTML += msgBuffer.charAt(increment);
    homeCodeGame.innerHTML += msgBuffer[increment].shift();
    // homeCodeGame.insertAdjacentHTML('beforeend', msgBuffer.charAt(increment));
    increment++;
    console.log(msgBuffer);
       setTimeout(afficheLettres, 10);
   }
}

afficheLettres();
// const doc = new DOMParser().parseFromString(testMsg, "text/html");
// homeCodeGame.parse(testMsg);
