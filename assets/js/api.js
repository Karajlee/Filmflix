'use strict';

const api_key = '78880c6eb1899dd0522cf910ab83d7f5';
const imageBaseURL = 'https://image.tmdb.org/t/p/';

// fetch
const fetchDataFromServer = function(url, callback, optionalParam) {
    fetch(url).then(response => response.json()).then(data => callback(data, optionalParam));
}

export { imageBaseURL, api_key, fetchDataFromServer };