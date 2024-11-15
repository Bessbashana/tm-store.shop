const logo = document.getElementById('logo-img-link');
const navShopCart = document.getElementById('nav-shop-cart-link');
const navAccount = document.getElementById('nav-account-link');

document.addEventListener("DOMContentLoaded", function() {
  var currentLocation = window.location.href;

  document.querySelectorAll('a').forEach(function(a) {
      if (a.href === currentLocation) {
          a.classList.add('active');
      }
  });
});


