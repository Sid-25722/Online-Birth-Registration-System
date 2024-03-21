
// NAVIGATION BAR HUMBURGER JAVASCRIPT
const navigation = document.querySelector('.navigation');
const hamburgerElement = document.querySelector('.hamburger');

hamburgerElement.addEventListener("click", () => {
    navigation.classList.toggle('nav-open');
    hamburgerElement.classList.toggle('humburger-open');
});

navigation.addEventListener("click", () => {
    navigation.classList.remove('nav-open');
    hamburgerElement.classList.remove('humburger-open');
});
