/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!*****************************************!*\
  !*** ./resources/js/auth_user/tabel.js ***!
  \*****************************************/
var Toast = Swal.mixin({
  toast: true,
  position: 'top-end',
  showConfirmButton: false,
  timer: 3000
});

function mes_right(type, mes) {
  Toast.fire({
    icon: type,
    title: mes
  });
}

$('#all_check').change(function () {
  if ($(this).prop('checked') == true) {
    $('.users_id').prop('checked', true);
  } else {
    $('.users_id').prop('checked', false);
  }
});
$('.users_id').change(function () {
  if ($('.users_id:checked').length == $('.users_id').length) {
    $('#all_check').prop('checked', true);
  } else {
    $('#all_check').prop('checked', false);
  }
});
/******/ })()
;