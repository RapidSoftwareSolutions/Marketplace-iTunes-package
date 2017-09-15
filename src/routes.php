<?php
$routes = [
    'metadata',
    'search',
    'searchMovies',
    'searchPodcasts',
    'searchMusic',
    'searchMusicVideos',
    'searchAudiobooks',
    'searchShortFilms',
    'searchTvShows',
    'searchSoftwares',
    'searchEbooks',
    'getContentById',
    'getContentByUpc',
    'getContentByIsbn',
    'getContentByAmgAlbumId',
    'getContentByAmgArtistId',
    'getContentByAmgVideoId'
];
foreach($routes as $file) {
    require __DIR__ . '/../src/routes/'.$file.'.php';
}

