// Search on mobile
const searchIconMobile = document.querySelector('.search_icon_mobile');
searchIconMobile && searchIconMobile.addEventListener('click', function() {
  document.querySelector('.search_header_hide').classList.toggle('active');
})
