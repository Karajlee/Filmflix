'use strict';

// multiple elements event

const addEventOnElements = function (elements, eventType, callback) {
    for (const elem of elements) elem.addEventListener(eventType, callback);
}

// toggle search box (mobile device screen)

const searchBox = document.querySelector("[search-box]");
const searchTogglers = document.querySelectorAll("[search-toggler]")

addEventOnElements(searchTogglers, "click", function () {
    searchBox.classList.toggle("active");
});

// store movieId in `localStorage` when click any movie card

const getMovieDetail = function(movieId) {
    window.localStorage.setItem("movieId", String(movieId));
}

const getMovieList = function (urlParam, genreName) {
    window.localStorage.setItem("urlParam", urlParam);
    window.localStorage.setItem("genreName", genreName);
}