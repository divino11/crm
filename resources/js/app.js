/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const Swal = require('sweetalert2');
const flatpickr = require("flatpickr");
require('select2');
require('fullcalendar');
window.moment = require('moment');
const app = new Vue({
    el: '#app'
});

$(document).ready(function () {
    $('.menu_dropdown').click(function () {
        $('.menu_dropdown ul').slideUp();
        $('.menu_dropdown a').attr("aria-expanded", "false");
        $('.menu_dropdown a').css("color", "#4a5161");
        $('.menu_dropdown ul').attr("aria-expanded", "false");
        if ($(this).children('ul').css('display') == 'block') {
            $(this).children('ul').slideUp();
            $('.menu_dropdown a').css("color", "#4a5161");
            $(this).children('a').attr("aria-expanded", "false");
            $(this).children('ul').attr("aria-expanded", "false");
        }
        if ($(this).children('ul').css('display') == 'none') {
            $(this).children('ul').slideDown();
            $(this).children('a').css("color", "#4a5161");
            $(this).children('a').attr("aria-expanded", "true");
            $(this).children('ul').attr("aria-expanded", "true");
        }
    });

    $("input[type='date']").flatpickr();
});

$('#deleteCRUD button').click(function (event) {
    event.preventDefault();
    Swal.fire({
        title: 'Are you sure?',
        text: 'You will not be able to recover this imaginary file!',
        type: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Yes, delete it!',
        cancelButtonText: 'No, keep it'
    }).then((result) => {
        if (result.value) {
            $(this).parent().submit();
        }
    })
});
