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
let autoplayCheckbox = document.querySelector('#autoplay');
let imgsArray = ['img-ludo', 'img-baj', 'img-alsh', 'img-alsh2', 'img-alsh3', 'img-carecover', 'img-univtel1', 'img-univtel2', 'img-hcg1', 'img-hcg2', 'img-info1', 'img-info2', 'img-info3'];
let slide = document.querySelector('.slide');
let slideDescript = document.querySelector('.slide-description');
let slideDescriptDetails = document.querySelector('.slide-description-details');
let lang = document.querySelector('.lang-list-item');
/* Translation Text for the slider (generated via data-attr: data-lang (fr/en), this data-attr is set by $lang with php) */
// French
let slideDescriptArray = ['Ludothèque Familles Rurales', 'Ludothèque Familles Rurales', 'ALSH Familles Rurales', 'ALSH Familles Rurales', 'ALSH Familles Rurales', 'CareCover', "L'Univers du Téléphone", "L'Univers du Téléphone", 'Hérault Carte Grise', 'Hérault Carte Grise', 'Familles Rurales', 'Familles Rurales', 'Familles Rurales'];
let slideDescriptDetailsArray = ['Première de couverture projet pédagogique', 'Flyer informations', "Livret programme d'activités (1ère/4ème de couverture) 1", "Livret programme d'activités (1ère/4ème de couverture) 2", "Livret programme d'activités (1ère/4ème de couverture) 3", 'Flyer jeu concours', 'Flyer publicitaire', 'Flyer publicitaire n°2', 'Flyer publicitaire recto', 'Flyer publicitaire verso', 'Infographie ALSH page 1', 'Infographie ALSH page 2', 'Infographie ALSH page 3'];
// English
let slideDescriptArrayEnglish = ['Toy Library (Familles Rurales)', 'Toy Library (Familles Rurales)', 'Community Center (Familles Rurales)', 'Community Center (Familles Rurales)', 'Community Center (Familles Rurales)', 'CareCover', "L'Univers du Téléphone", "L'Univers du Téléphone", 'Hérault Carte Grise', 'Hérault Carte Grise', 'Familles Rurales', 'Familles Rurales', 'Familles Rurales'];
let slideDescriptDetailsArrayEnglish = ['Cover page for the Educational Project', 'Informative flyer', 'Activities Schedule (cover page/fourth cover) 1', 'Activities Schedule (cover page/fourth cover) 2', 'Activities Schedule (cover page/fourth cover) 3', 'Flyer social media contest', 'Advertising flyer', 'Advertising flyer n°2', 'Advertising flyer recto', 'Advertising flyer verso', 'Infographic page 1', 'Infographic page 2', 'Infographic page 3'];

// Modal variables
let modal = document.querySelector('.modal-back');
let modalImage = document.querySelector('#modal');
let pop = document.querySelector('#pop');
let closeModal = document.querySelector('.close-modal');

// Home Code Game variables
let homeCodeGame = document.querySelector('.home-code-game');
// Array (storing game content text)
let gameCodeMessage = ['<span><span class="color-blue">function</span> <span class="color-fuschia">factorial(n)</span> { </span><p><span> <span class="color-blue margin-1">let</span> result = 1; </span></p><p><span> <span class="color-blue margin-2">for</span> (<span class="color-blue">let</span> i = 1; i <= n; i++) { </span></p><p><span class="margin-2"> result *= i; </span></p><p><span class="margin-1"> } </span></p><p><span> <span class="color-blue margin-1">return</span> result; </span></p><p><span>} </span></p><p><span><span class="color-red">console.log</span>(<span class="color-fuschia">factorial</span>(5)); </span></p>',
    '<span><span class="color-blue">#include</span> <span class="color-green">&lt;iostream&gt;</span></span></p><p><span>using namespace <span class="color-chocolate">std</span>;</span></p><br><p><span><span class="color-red">int</span> <span class="color-fuschia">factorial</span>(<span class="color-red">int</span> n) {</span></p><p><span class=" margin-1"><span class="color-red">int</span> result = 1;</span></p><p><span class="margin-1"><span class="color-blue">for</span> (<span class="color-red">int</span> i = 1; i <= n; i++) {</span></p><p><span class="margin-2">result *=i;</span></p><p><span class="margin-2">}</span></p><p><span class="margin-1"><span class="color-blue">return</span> result;</span></p><p><span>}</span></p><br><p><span><span class="color-red">int</span> <span class="color-fuschia">main</span>() {</span></p><p><span class="margin-1"><span class="color-red">int</span> n; <span class="color-chocolate">cout</span><< "Enter a number: " ; <span class="color-chocolate">cin</span>>> n;</span></p><p><span class="margin-1"><span class="color-chocolate">cout</span><< n << "! = " << <span><span class="color-fuschia">factorial(n)</span><< endl; </span></p><p><span><span class="color-blue">return</span> 0;</span></p><p><span>}</span>',
    '<span><span class="color-blue">function</span> <span class="color-fuschia">factorial($n)</span> {</span><br><p><span><span class="color-red margin-1">$result</span> = 1;</span></p><p><span><span class="color-blue margin-1">for</span> (<span class="color-red">$i</span> = 1; <span class="color-red">$i</span><= <span class="color-red">$n</span>; <span class="color-red">$i</span>++) {</span></p><p><span><span class="color-red margin-2">$result</span> *= <span class="color-red">$i</span>;</span></p><p><span class="margin-2">}</span></p><p><span><span class="color-blue margin-1">return</span> <span class="color-red">$result</span>;</span></p><p><span>}</span></p><p><span><span class="color-chocolate">echo</span> <span class="color-fuschia">factorial(5)</span>;</span></p><br> <p><span>?&gt;</span></p>',
    '<span><span class="color-blue">using</span> System;</span><br><br><p><span><span class="color-blue">namespace</span> <span class="color-chocolate">FactorialExample</span></span></p><p><span>{</span></p><p><span class="margin-1"><span class="color-blue">class</span> <span color="fuschia">Program</span></span></p><p><span class="margin-1">{</span></p><p><span class="margin-2"><span class="color-blue">static void</span> <span class="color-fuschia">Main</span>(<span class="color-red">string</span>[] args)</span></p><p><span class="margin-2">{</span></p><p><span class="margin-3">Console.WriteLine(Factorial(5));Console.WriteLine(Factorial(5));</span></p><p><span class="margin-2">}</span></p><p><span class="margin-2"><span class="color-blue">static</span> <span class="color-red">int</span> <span class="color-fuschia">Factorial</span>(<span class="color-red">int</span> n)</span></p><p><span class="margin-2">{</span></p><p><span class="margin-3"><span class="color-blue">if (n <= 1) <span class="color-blue">return</span> 1;</span></p><p><span class="margin-3"><span class="color-blue">return</span> n * Factorial(n - 1);</span></p><p><span class="margin-2">}</span></p><p><span class="margin-1">}</span></p><p><span>}</span></p>',
    '<span><span class="color-blue">def</span> <span class="color-fuschia">factorial</span>(n):</span><br><p><span class="margin-1">result = 1</span></p><p><span class="margin-1"><span class="color-blue">for</span> i <span class="color-blue">in</span> <span class="color-chocolate">range</span>(1, n+1):</span></p><p><span class="margin-2">result *= i</span></p><p><span class="margin-1"><span class="color-blue">return</span> result</span></p><p><span><span class="color-chocolate">print</span>(<span class="color-fuschia">factorial</span>(5))</span></p>'
];

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
        // checks the data-attr to pick text from the correct array (fr/en)
        if (lang.dataset.lang == 'fr') {
            slideDescript.textContent = slideDescriptArray[y];
            slideDescriptDetails.textContent = slideDescriptDetailsArray[y];
        }
        else {
            slideDescript.textContent = slideDescriptArrayEnglish[y];
            slideDescriptDetails.textContent = slideDescriptDetailsArrayEnglish[y];
        }
    } else {
        slide.classList.add(imgsArray[y]);
        modalImage.classList.add(imgsArray[y]);
        if (lang.dataset.lang == 'fr') {
            slideDescript.textContent = slideDescriptArray[y];
            slideDescriptDetails.textContent = slideDescriptDetailsArray[y];
        }
        else {
            slideDescript.textContent = slideDescriptArrayEnglish[y];
            slideDescriptDetails.textContent = slideDescriptDetailsArrayEnglish[y];
        }
    }
}

function sliderMovePrev() {
    // deletes all images
    for (i = 0; i < imgsArray.length; i++) {
        slide.classList.remove(imgsArray[i]);
        modalImage.classList.remove(imgsArray[i]);
    }
    // new iterator to add images/text
    y -= 1;
    if (y < 0) {
        y = imgsArray.length - 1;
        slide.classList.add(imgsArray[y]);
        modalImage.classList.add(imgsArray[y]);
        // checks the data-attr to pick text from the correct array (fr/en)
        if (lang.dataset.lang == 'fr') {
            slideDescript.textContent = slideDescriptArray[y];
            slideDescriptDetails.textContent = slideDescriptDetailsArray[y];
            console.log(lang.dataset.lang);
        }
        else {
            slideDescript.textContent = slideDescriptArrayEnglish[y];
            slideDescriptDetails.textContent = slideDescriptDetailsArrayEnglish[y];
            console.log(lang.dataset.lang);
        }
    } else {
        slide.classList.add(imgsArray[y]);
        modalImage.classList.add(imgsArray[y]);
        if (lang.dataset.lang == 'fr') {
            slideDescript.textContent = slideDescriptArray[y];
            slideDescriptDetails.textContent = slideDescriptDetailsArray[y];
        }
        else {
            slideDescript.textContent = slideDescriptArrayEnglish[y];
            slideDescriptDetails.textContent = slideDescriptDetailsArrayEnglish[y];
        }
    }
}

function autoPlay(slider) {
    if (slider.checked) {
        window.sliderInterval = setInterval(e => {
            nextButton.click();
        }, 1500);
    }
    else {
        clearInterval(window.sliderInterval);
    }
}

if (autoplayCheckbox) {
    autoplayCheckbox.addEventListener('click', e => {
        autoPlay(autoplayCheckbox);
    });
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

function forceCloseModal() {
    modal.classList.add('hidden');
    closeButton.classList.add('hidden');
    gridContainer.classList.remove('overflow-hide');
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

    if (gridContainer.classList.contains('overflow-hide')) {
        console.log('hidden');
    }


    window.addEventListener('keydown', function (even) {
        var key = event.which || event.keyCode;
        if (key === 27) {
            modal.classList.toggle('hidden');
            closeButton.classList.toggle('hidden');
            gridContainer.classList.toggle('overflow-hide');
            controlsWrapper.classList.toggle('controls-wrapper');
            controlsWrapper.classList.toggle('controls-wrapper-expanded');
            for (i = 0; i < controlButtons.length; i++) {
                controlButtons[i].classList.toggle('controls-style');
            }
            prevButton.classList.toggle('prev');
            nextButton.classList.toggle('next');
        }
        else {
            console.log('wronng key');
        }
    })
};

// subMenuTechno.addEventListener('click', (e) => {
//     subMenuTechno.classList.toggle('submenu');
//     for (i = 0; i < submenu.length; i++) {
//         submenu[i].classList.toggle('hidden');
//     }
// });

for (i = 0; i < submenu.length; i++) {
    submenu[i].addEventListener('click', (e) => {
        showMenu();
    })
};


// Guess the Code Game //

// Picks a random (int) index (from 0 to array.length) from an array
function randomMessage(array) {
    let random = Math.floor(Math.random() * array.length);
    return random;
}
let randomIndex = randomMessage(gameCodeMessage)

// Typewriter effect increment
let increment = 0;

// printSentence solves one problem:
// if you print chars 1 by 1, JS encodes special chars in UTF-8
// so HTML tags cannot be read.
// Solution: When printSentence() finds a "<", it skips to ">" and print the whole
// sequence as one string
const printSentence = (sentence, speed = 50) => {
    let index = 0;

    let timer = setInterval(function () {
        const char = sentence[randomIndex][index];

        if (char === '<') {
            index = sentence[randomIndex].indexOf('>', index);  // skip to greater-than
        }

        homeCodeGame.innerHTML = sentence[randomIndex].slice(0, index);

        if (++index === sentence[randomIndex].length) {
            clearInterval(timer);
        }
    }, speed);
} // printSentence

if (homeCodeGame) {
    printSentence(
        gameCodeMessage
        ,
        30
    );
}