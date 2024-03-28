const cardElement1 = document.querySelector('.card1');
const cardElement2 = document.querySelector('.card2');
const cardElement3 = document.querySelector('.card3');
const cardElement4 = document.querySelector('.card4');
const temperatureElement = cardElement1.querySelector('.temperature');
const humidityElement = cardElement2.querySelector('.humidity');
const windspeedElement = cardElement3.querySelector('.windspeed');
const uvindexElement = cardElement4.querySelector('.uvindex');

cardElement1.addEventListener('click', function () {
    if (cardElement1.classList.contains('special1')) {
        // Remove "active" class from the clicked element
        temperatureElement.classList.remove('special1');
        cardElement1.classList.remove('special1');
    } else {
        // Add "active" class to the clicked element
        temperatureElement.classList.add('special1');
        cardElement1.classList.add('special1');
    }
});

cardElement2.addEventListener('click', function () {
    if (cardElement2.classList.contains('special2')) {
        // Remove "active" class from the clicked element
        humidityElement.classList.remove('special2');
        cardElement2.classList.remove('special2');
    } else {
        // Add "active" class to the clicked element
        humidityElement.classList.add('special2');
        cardElement2.classList.add('special2');
    }
});

cardElement3.addEventListener('click', function () {
    if (cardElement3.classList.contains('special2')) {
        // Remove "active" class from the clicked element
        windspeedElement.classList.remove('special2');
        cardElement3.classList.remove('special2');
    } else {
        // Add "active" class to the clicked element
        windspeedElement.classList.add('special2');
        cardElement3.classList.add('special2');
    }
});

cardElement4.addEventListener('click', function () {
    if (cardElement4.classList.contains('special1')) {
        // Remove "active" class from the clicked element
        uvindexElement.classList.remove('special1');
        cardElement4.classList.remove('special1');
    } else {
        // Add "active" class to the clicked element
        uvindexElement.classList.add('special1');
        cardElement4.classList.add('special1');
    }
});

// ===========
let sidebar = document.querySelector(".sidebar");
let sidebarBtn = document.querySelector(".sidebarBtn");
sidebarBtn.onclick = function () {
    sidebar.classList.toggle("active");
    if (sidebar.classList.contains("active")) {
        sidebarBtn.classList.replace("bx-menu", "bx-menu-alt-right");
    } else
        sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
}