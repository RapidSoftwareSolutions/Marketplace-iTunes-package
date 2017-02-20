<?php
return array (
    'package' => 'iTunes',
    'tagline' => 'The iTunes Search API allows you to place search fields in your website to search for content within the iTunes Store, App Store, iBooks Store and Mac App Store.',
    'description' => 'The iTunes Search API allows you to place search fields in your website to search for content within the iTunes Store, App Store, iBooks Store and Mac App Store.',
    'image' => 'https://logo.clearbit.com/apple.com?s=128',
    'repo' => 'https://github.com/RapidSoftwareSolutions/Marketplace-iTunes-package',
    'keywords' => array (
        'API',
        'media',
        'iTunes',
    ),
    'accounts' => array (
        'domain' => 'apple.com/itunes',
        'credentials' => array (),
    ),
    'blocks' => array (
        array (
            'name' => 'search',
            'description' => 'Search for content within the iTunes Store, App Store, iBooks Store and Mac App Store.',
            'args' => array (
                array (
                    'name' => 'term',
                    'type' => 'String',
                    'info' => 'The text string you want to search for.',
                    'required' => true,
                ),
                array (
                    'name' => 'country',
                    'type' => 'String',
                    'info' => 'The two-letter country code for the store you want to search.',
                    'required' => true,
                ),
                array (
                    'name' => 'limit',
                    'type' => 'Number',
                    'info' => 'The number of search results you want the iTunes Store to return. In range 1 - 200.The default is 50.',
                    'required' => false,
                ),
                array (
                    'name' => 'lang',
                    'type' => 'String',
                    'info' => 'The language, English or Japanese, you want to use when returning search results. Specify the language using the five-letter codename. The default is en_us (English).',
                    'required' => false,
                )
            ),
            'callbacks' => array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'searchMovies',
            'description' => 'Search in movies.',
            'args' => array (
                array (
                    'name' => 'term',
                    'type' => 'String',
                    'info' => 'The text string you want to search for.',
                    'required' => true,
                ),
                array (
                    'name' => 'country',
                    'type' => 'String',
                    'info' => 'The two-letter country code for the store you want to search.',
                    'required' => true,
                ),
                array (
                    'name' => 'entity',
                    'type' => 'String',
                    'info' => 'The type of results you want returned, one of movieArtist, movie.',
                    'required' => false,
                ),
                array (
                    'name' => 'attribute',
                    'type' => 'String',
                    'info' => 'The attribute you want to search for in the stores, one of actorTerm, genreIndex, artistTerm, shortFilmTerm, producerTerm, ratingTerm, directorTerm, releaseYearTerm, featureFilmTerm, movieArtistTerm, movieTerm, ratingIndex, descriptionTerm.',
                    'required' => false,
                ),
                array (
                    'name' => 'limit',
                    'type' => 'Number',
                    'info' => 'The number of search results you want the iTunes Store to return. In range 1 - 200.The default is 50.',
                    'required' => false,
                ),
                array (
                    'name' => 'lang',
                    'type' => 'String',
                    'info' => 'The language, English or Japanese, you want to use when returning search results. Specify the language using the five-letter codename. The default is en_us (English).',
                    'required' => false,
                )
            ),
            'callbacks' => array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'searchPodcasts',
            'description' => 'Search in podcasts.',
            'args' => array (
                array (
                    'name' => 'term',
                    'type' => 'String',
                    'info' => 'The text string you want to search for.',
                    'required' => true,
                ),
                array (
                    'name' => 'country',
                    'type' => 'String',
                    'info' => 'The two-letter country code for the store you want to search.',
                    'required' => true,
                ),
                array (
                    'name' => 'entity',
                    'type' => 'String',
                    'info' => 'The type of results you want returned, one of podcastAuthor, podcast.',
                    'required' => false,
                ),
                array (
                    'name' => 'attribute',
                    'type' => 'String',
                    'info' => 'The attribute you want to search for in the stores, one of titleTerm, languageTerm, authorTerm, genreIndex, artistTerm, ratingIndex, keywordsTerm, descriptionTerm.',
                    'required' => false,
                ),
                array (
                    'name' => 'limit',
                    'type' => 'Number',
                    'info' => 'The number of search results you want the iTunes Store to return. In range 1 - 200.The default is 50.',
                    'required' => false,
                ),
                array (
                    'name' => 'lang',
                    'type' => 'String',
                    'info' => 'The language, English or Japanese, you want to use when returning search results. Specify the language using the five-letter codename. The default is en_us (English).',
                    'required' => false,
                )
            ),
            'callbacks' => array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'searchMusic',
            'description' => 'Search in music.',
            'args' => array (
                array (
                    'name' => 'term',
                    'type' => 'String',
                    'info' => 'The text string you want to search for.',
                    'required' => true,
                ),
                array (
                    'name' => 'country',
                    'type' => 'String',
                    'info' => 'The two-letter country code for the store you want to search.',
                    'required' => true,
                ),
                array (
                    'name' => 'entity',
                    'type' => 'String',
                    'info' => 'The type of results you want returned, one of musicArtist, musicTrack, album, musicVideo, mix, song.',
                    'required' => false,
                ),
                array (
                    'name' => 'attribute',
                    'type' => 'String',
                    'info' => 'The attribute you want to search for in the stores, one of mixTerm, genreIndex, artistTerm, composerTerm, albumTerm, ratingIndex, songTerm.',
                    'required' => false,
                ),
                array (
                    'name' => 'limit',
                    'type' => 'Number',
                    'info' => 'The number of search results you want the iTunes Store to return. In range 1 - 200.The default is 50.',
                    'required' => false,
                ),
                array (
                    'name' => 'lang',
                    'type' => 'String',
                    'info' => 'The language, English or Japanese, you want to use when returning search results. Specify the language using the five-letter codename. The default is en_us (English).',
                    'required' => false,
                )
            ),
            'callbacks' => array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'searchMusicVideos',
            'description' => 'Search music and videos content.',
            'args' => array (
                array (
                    'name' => 'term',
                    'type' => 'String',
                    'info' => 'The text string you want to search for.',
                    'required' => true,
                ),
                array (
                    'name' => 'country',
                    'type' => 'String',
                    'info' => 'The two-letter country code for the store you want to search.',
                    'required' => true,
                ),
                array (
                    'name' => 'entity',
                    'type' => 'String',
                    'info' => 'The type of results you want returned, one of musicArtist, musicVideo.',
                    'required' => false,
                ),
                array (
                    'name' => 'attribute',
                    'type' => 'String',
                    'info' => 'The attribute you want to search for in the stores, one of genreIndex, artistTerm, albumTerm, ratingIndex, songTerm.',
                    'required' => false,
                ),
                array (
                    'name' => 'limit',
                    'type' => 'Number',
                    'info' => 'The number of search results you want the iTunes Store to return. In range 1 - 200.The default is 50.',
                    'required' => false,
                ),
                array (
                    'name' => 'lang',
                    'type' => 'String',
                    'info' => 'The language, English or Japanese, you want to use when returning search results. Specify the language using the five-letter codename. The default is en_us (English).',
                    'required' => false,
                )
            ),
            'callbacks' => array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'searchAudiobooks',
            'description' => 'Search in audiobooks.',
            'args' => array (
                array (
                    'name' => 'term',
                    'type' => 'String',
                    'info' => 'The text string you want to search for.',
                    'required' => true,
                ),
                array (
                    'name' => 'country',
                    'type' => 'String',
                    'info' => 'The two-letter country code for the store you want to search.',
                    'required' => true,
                ),
                array (
                    'name' => 'entity',
                    'type' => 'String',
                    'info' => 'The type of results you want returned, one of audiobookAuthor, audiobook.',
                    'required' => false,
                ),
                array (
                    'name' => 'attribute',
                    'type' => 'String',
                    'info' => 'The attribute you want to search for in the stores, one of titleTerm, authorTerm, genreIndex, ratingIndex.',
                    'required' => false,
                ),
                array (
                    'name' => 'limit',
                    'type' => 'Number',
                    'info' => 'The number of search results you want the iTunes Store to return. In range 1 - 200.The default is 50.',
                    'required' => false,
                ),
                array (
                    'name' => 'lang',
                    'type' => 'String',
                    'info' => 'The language, English or Japanese, you want to use when returning search results. Specify the language using the five-letter codename. The default is en_us (English).',
                    'required' => false,
                )
            ),
            'callbacks' => array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'searchShortFilms',
            'description' => 'Search in short films.',
            'args' => array (
                array (
                    'name' => 'term',
                    'type' => 'String',
                    'info' => 'The text string you want to search for.',
                    'required' => true,
                ),
                array (
                    'name' => 'country',
                    'type' => 'String',
                    'info' => 'The two-letter country code for the store you want to search.',
                    'required' => true,
                ),
                array (
                    'name' => 'entity',
                    'type' => 'String',
                    'info' => 'The type of results you want returned, one of shortFilmArtist, shortFilm.',
                    'required' => false,
                ),
                array (
                    'name' => 'attribute',
                    'type' => 'String',
                    'info' => 'The attribute you want to search for in the stores, one of genreIndex, artistTerm, shortFilmTerm, ratingIndex, descriptionTerm.',
                    'required' => false,
                ),
                array (
                    'name' => 'limit',
                    'type' => 'Number',
                    'info' => 'The number of search results you want the iTunes Store to return. In range 1 - 200.The default is 50.',
                    'required' => false,
                ),
                array (
                    'name' => 'lang',
                    'type' => 'String',
                    'info' => 'The language, English or Japanese, you want to use when returning search results. Specify the language using the five-letter codename. The default is en_us (English).',
                    'required' => false,
                )
            ),
            'callbacks' => array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'searchTvShows',
            'description' => 'Search in TV shows.',
            'args' => array (
                array (
                    'name' => 'term',
                    'type' => 'String',
                    'info' => 'The text string you want to search for.',
                    'required' => true,
                ),
                array (
                    'name' => 'country',
                    'type' => 'String',
                    'info' => 'The two-letter country code for the store you want to search.',
                    'required' => true,
                ),
                array (
                    'name' => 'entity',
                    'type' => 'String',
                    'info' => 'The type of results you want returned, one of tvEpisode, tvSeason.',
                    'required' => false,
                ),
                array (
                    'name' => 'attribute',
                    'type' => 'String',
                    'info' => 'The attribute you want to search for in the stores, one of genreIndex, tvEpisodeTerm, showTerm, tvSeasonTerm, ratingIndex, descriptionTerm.',
                    'required' => false,
                ),
                array (
                    'name' => 'limit',
                    'type' => 'Number',
                    'info' => 'The number of search results you want the iTunes Store to return. In range 1 - 200.The default is 50.',
                    'required' => false,
                ),
                array (
                    'name' => 'lang',
                    'type' => 'String',
                    'info' => 'The language, English or Japanese, you want to use when returning search results. Specify the language using the five-letter codename. The default is en_us (English).',
                    'required' => false,
                )
            ),
            'callbacks' => array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'searchSoftwares',
            'description' => 'Search in softwares.',
            'args' => array (
                array (
                    'name' => 'term',
                    'type' => 'String',
                    'info' => 'The text string you want to search for.',
                    'required' => true,
                ),
                array (
                    'name' => 'country',
                    'type' => 'String',
                    'info' => 'The two-letter country code for the store you want to search.',
                    'required' => true,
                ),
                array (
                    'name' => 'entity',
                    'type' => 'String',
                    'info' => 'The type of results you want returned, one of software, iPadSoftware, macSoftware.',
                    'required' => false,
                ),
                array (
                    'name' => 'limit',
                    'type' => 'Number',
                    'info' => 'The number of search results you want the iTunes Store to return. In range 1 - 200.The default is 50.',
                    'required' => false,
                ),
                array (
                    'name' => 'lang',
                    'type' => 'String',
                    'info' => 'The language, English or Japanese, you want to use when returning search results. Specify the language using the five-letter codename. The default is en_us (English).',
                    'required' => false,
                )
            ),
            'callbacks' => array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'searchEbooks',
            'description' => 'Search in ebooks.',
            'args' => array (
                array (
                    'name' => 'term',
                    'type' => 'String',
                    'info' => 'The text string you want to search for.',
                    'required' => true,
                ),
                array (
                    'name' => 'country',
                    'type' => 'String',
                    'info' => 'The two-letter country code for the store you want to search.',
                    'required' => true,
                ),
                array (
                    'name' => 'limit',
                    'type' => 'Number',
                    'info' => 'The number of search results you want the iTunes Store to return. In range 1 - 200.The default is 50.',
                    'required' => false,
                ),
                array (
                    'name' => 'lang',
                    'type' => 'String',
                    'info' => 'The language, English or Japanese, you want to use when returning search results. Specify the language using the five-letter codename. The default is en_us (English).',
                    'required' => false,
                )
            ),
            'callbacks' => array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'getContentById',
            'description' => 'Look up content by iTunes ID.',
            'args' => array (
                array (
                    'name' => 'contentId',
                    'type' => 'String',
                    'info' => 'Id of content for Retrieving.',
                    'required' => true,
                ),
                array (
                    'name' => 'term',
                    'type' => 'String',
                    'info' => 'The text string you want to search for.',
                    'required' => false,
                ),
                array (
                    'name' => 'country',
                    'type' => 'String',
                    'info' => 'The two-letter country code for the store you want to search.',
                    'required' => false,
                ),
                array (
                    'name' => 'media',
                    'type' => 'String',
                    'info' => 'The media type you want to search for. The default is all.',
                    'required' => false,
                ),
                array (
                    'name' => 'entity',
                    'type' => 'String',
                    'info' => 'The type of results you want returned, relative to the specified media type. For example: movieArtist for a movie media type search. The default is the track entity associated with the specified media type.',
                    'required' => false,
                ),
                array (
                    'name' => 'attribute',
                    'type' => 'String',
                    'info' => 'The attribute you want to search for in the stores, relative to the specified media type. For example, if you want to search for an artist by name specify entity=allArtist&attribute=allArtistTerm. In this example, if you search for term=maroon, iTunes returns “Maroon 5” in the search results, instead of all artists who have ever recorded a song with the word "maroon" in the title.',
                    'required' => false,
                ),
                array (
                    'name' => 'limit',
                    'type' => 'Number',
                    'info' => 'The number of search results you want the iTunes Store to return. In range 1 - 200.The default is 50.',
                    'required' => false,
                ),
                array (
                    'name' => 'lang',
                    'type' => 'String',
                    'info' => 'The language, English or Japanese, you want to use when returning search results. Specify the language using the five-letter codename. The default is en_us (English).',
                    'required' => false,
                )
            ),
            'callbacks' => array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'getContentByUpc',
            'description' => 'Look up an album or video by its UPC.',
            'args' => array (
                array (
                    'name' => 'upc',
                    'type' => 'String',
                    'info' => 'UPC of album or video.',
                    'required' => true,
                ),
                array (
                    'name' => 'term',
                    'type' => 'String',
                    'info' => 'The text string you want to search for.',
                    'required' => false,
                ),
                array (
                    'name' => 'country',
                    'type' => 'String',
                    'info' => 'The two-letter country code for the store you want to search.',
                    'required' => false,
                ),
                array (
                    'name' => 'media',
                    'type' => 'String',
                    'info' => 'The media type you want to search for. The default is all.',
                    'required' => false,
                ),
                array (
                    'name' => 'entity',
                    'type' => 'String',
                    'info' => 'The type of results you want returned, relative to the specified media type. For example: movieArtist for a movie media type search. The default is the track entity associated with the specified media type.',
                    'required' => false,
                ),
                array (
                    'name' => 'attribute',
                    'type' => 'String',
                    'info' => 'The attribute you want to search for in the stores, relative to the specified media type. For example, if you want to search for an artist by name specify entity=allArtist&attribute=allArtistTerm. In this example, if you search for term=maroon, iTunes returns “Maroon 5” in the search results, instead of all artists who have ever recorded a song with the word "maroon" in the title.',
                    'required' => false,
                ),
                array (
                    'name' => 'limit',
                    'type' => 'Number',
                    'info' => 'The number of search results you want the iTunes Store to return. In range 1 - 200.The default is 50.',
                    'required' => false,
                ),
                array (
                    'name' => 'lang',
                    'type' => 'String',
                    'info' => 'The language, English or Japanese, you want to use when returning search results. Specify the language using the five-letter codename. The default is en_us (English).',
                    'required' => false,
                )
            ),
            'callbacks' => array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'getContentByIsbn',
            'description' => 'Look up content by ISBN.',
            'args' => array (
                array (
                    'name' => 'isbn',
                    'type' => 'String',
                    'info' => 'International standard book number.',
                    'required' => true,
                ),
                array (
                    'name' => 'term',
                    'type' => 'String',
                    'info' => 'The text string you want to search for.',
                    'required' => false,
                ),
                array (
                    'name' => 'country',
                    'type' => 'String',
                    'info' => 'The two-letter country code for the store you want to search.',
                    'required' => false,
                ),
                array (
                    'name' => 'media',
                    'type' => 'String',
                    'info' => 'The media type you want to search for. The default is all.',
                    'required' => false,
                ),
                array (
                    'name' => 'entity',
                    'type' => 'String',
                    'info' => 'The type of results you want returned, relative to the specified media type. For example: movieArtist for a movie media type search. The default is the track entity associated with the specified media type.',
                    'required' => false,
                ),
                array (
                    'name' => 'attribute',
                    'type' => 'String',
                    'info' => 'The attribute you want to search for in the stores, relative to the specified media type. For example, if you want to search for an artist by name specify entity=allArtist&attribute=allArtistTerm. In this example, if you search for term=maroon, iTunes returns “Maroon 5” in the search results, instead of all artists who have ever recorded a song with the word "maroon" in the title.',
                    'required' => false,
                ),
                array (
                    'name' => 'limit',
                    'type' => 'Number',
                    'info' => 'The number of search results you want the iTunes Store to return. In range 1 - 200.The default is 50.',
                    'required' => false,
                ),
                array (
                    'name' => 'lang',
                    'type' => 'String',
                    'info' => 'The language, English or Japanese, you want to use when returning search results. Specify the language using the five-letter codename. The default is en_us (English).',
                    'required' => false,
                )
            ),
            'callbacks' => array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'getContentByAmgAlbumId',
            'description' => 'Look up an album by its AMG Album ID',
            'args' => array (
                array (
                    'name' => 'amgAlbumId',
                    'type' => 'String',
                    'info' => 'AMG Album identifier or comma separated Ids.',
                    'required' => true,
                ),
                array (
                    'name' => 'term',
                    'type' => 'String',
                    'info' => 'The text string you want to search for.',
                    'required' => false,
                ),
                array (
                    'name' => 'country',
                    'type' => 'String',
                    'info' => 'The two-letter country code for the store you want to search.',
                    'required' => false,
                ),
                array (
                    'name' => 'media',
                    'type' => 'String',
                    'info' => 'The media type you want to search for. The default is all.',
                    'required' => false,
                ),
                array (
                    'name' => 'entity',
                    'type' => 'String',
                    'info' => 'The type of results you want returned, relative to the specified media type. For example: movieArtist for a movie media type search. The default is the track entity associated with the specified media type.',
                    'required' => false,
                ),
                array (
                    'name' => 'attribute',
                    'type' => 'String',
                    'info' => 'The attribute you want to search for in the stores, relative to the specified media type. For example, if you want to search for an artist by name specify entity=allArtist&attribute=allArtistTerm. In this example, if you search for term=maroon, iTunes returns “Maroon 5” in the search results, instead of all artists who have ever recorded a song with the word "maroon" in the title.',
                    'required' => false,
                ),
                array (
                    'name' => 'limit',
                    'type' => 'Number',
                    'info' => 'The number of search results you want the iTunes Store to return. In range 1 - 200.The default is 50.',
                    'required' => false,
                ),
                array (
                    'name' => 'lang',
                    'type' => 'String',
                    'info' => 'The language, English or Japanese, you want to use when returning search results. Specify the language using the five-letter codename. The default is en_us (English).',
                    'required' => false,
                )
            ),
            'callbacks' => array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'getContentByAmgArtistId',
            'description' => 'Look up content by AMG artist ID.',
            'args' => array (
                array (
                    'name' => 'amgArtistId',
                    'type' => 'String',
                    'info' => 'AMG Artist Id or comma separated Ids.',
                    'required' => true,
                ),
                array (
                    'name' => 'term',
                    'type' => 'String',
                    'info' => 'The text string you want to search for.',
                    'required' => false,
                ),
                array (
                    'name' => 'country',
                    'type' => 'String',
                    'info' => 'The two-letter country code for the store you want to search.',
                    'required' => false,
                ),
                array (
                    'name' => 'media',
                    'type' => 'String',
                    'info' => 'The media type you want to search for. The default is all.',
                    'required' => false,
                ),
                array (
                    'name' => 'entity',
                    'type' => 'String',
                    'info' => 'The type of results you want returned, relative to the specified media type. For example: movieArtist for a movie media type search. The default is the track entity associated with the specified media type.',
                    'required' => false,
                ),
                array (
                    'name' => 'attribute',
                    'type' => 'String',
                    'info' => 'The attribute you want to search for in the stores, relative to the specified media type. For example, if you want to search for an artist by name specify entity=allArtist&attribute=allArtistTerm. In this example, if you search for term=maroon, iTunes returns “Maroon 5” in the search results, instead of all artists who have ever recorded a song with the word "maroon" in the title.',
                    'required' => false,
                ),
                array (
                    'name' => 'limit',
                    'type' => 'Number',
                    'info' => 'The number of search results you want the iTunes Store to return. In range 1 - 200.The default is 50.',
                    'required' => false,
                ),
                array (
                    'name' => 'lang',
                    'type' => 'String',
                    'info' => 'The language, English or Japanese, you want to use when returning search results. Specify the language using the five-letter codename. The default is en_us (English).',
                    'required' => false,
                )
            ),
            'callbacks' => array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'getContentByAmgVideoId',
            'description' => 'Look up content by AMG Video ID.',
            'args' => array (
                array (
                    'name' => 'amgVideoId',
                    'type' => 'String',
                    'info' => 'AMG Video identire.',
                    'required' => true,
                ),
                array (
                    'name' => 'term',
                    'type' => 'String',
                    'info' => 'The text string you want to search for.',
                    'required' => false,
                ),
                array (
                    'name' => 'country',
                    'type' => 'String',
                    'info' => 'The two-letter country code for the store you want to search.',
                    'required' => false,
                ),
                array (
                    'name' => 'media',
                    'type' => 'String',
                    'info' => 'The media type you want to search for. The default is all.',
                    'required' => false,
                ),
                array (
                    'name' => 'entity',
                    'type' => 'String',
                    'info' => 'The type of results you want returned, relative to the specified media type. For example: movieArtist for a movie media type search. The default is the track entity associated with the specified media type.',
                    'required' => false,
                ),
                array (
                    'name' => 'attribute',
                    'type' => 'String',
                    'info' => 'The attribute you want to search for in the stores, relative to the specified media type. For example, if you want to search for an artist by name specify entity=allArtist&attribute=allArtistTerm. In this example, if you search for term=maroon, iTunes returns “Maroon 5” in the search results, instead of all artists who have ever recorded a song with the word "maroon" in the title.',
                    'required' => false,
                ),
                array (
                    'name' => 'limit',
                    'type' => 'Number',
                    'info' => 'The number of search results you want the iTunes Store to return. In range 1 - 200.The default is 50.',
                    'required' => false,
                ),
                array (
                    'name' => 'lang',
                    'type' => 'String',
                    'info' => 'The language, English or Japanese, you want to use when returning search results. Specify the language using the five-letter codename. The default is en_us (English).',
                    'required' => false,
                )
            ),
            'callbacks' => array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
    ),
    'custom' => array (
        'search' => array (
            'dictionary' => array (
                'term' => 'term',
                'country' => 'country',
                'limit' => 'limit',
                'lang' => 'lang',
            ),
            'vendorUrl' => 'https://itunes.apple.com/search',
            'method' => 'GET',
            'default' => array (
                'media' => 'all',
            ),
        ),
        'searchMovies' => array (
            'dictionary' => array (
                'term' => 'term',
                'country' => 'country',
                'entity' => 'entity',
                'attribute' => 'attribute',
                'limit' => 'limit',
                'lang' => 'lang',
            ),
            'vendorUrl' => 'https://itunes.apple.com/search',
            'method' => 'GET',
            'default' => array (
                'media' => 'movie',
            ),
        ),
        'searchPodcasts' => array (
            'dictionary' => array (
                'term' => 'term',
                'country' => 'country',
                'entity' => 'entity',
                'attribute' => 'attribute',
                'limit' => 'limit',
                'lang' => 'lang',
            ),
            'vendorUrl' => 'https://itunes.apple.com/search',
            'method' => 'GET',
            'default' => array (
                'media' => 'podcast',
            ),
        ),
        'searchMusic' => array (
            'dictionary' => array (
                'term' => 'term',
                'country' => 'country',
                'entity' => 'entity',
                'attribute' => 'attribute',
                'limit' => 'limit',
                'lang' => 'lang',
            ),
            'vendorUrl' => 'https://itunes.apple.com/search',
            'method' => 'GET',
            'default' => array (
                'media' => 'music',
            ),
        ),
        'searchMusicVideos' => array (
            'dictionary' => array (
                'term' => 'term',
                'country' => 'country',
                'entity' => 'entity',
                'attribute' => 'attribute',
                'limit' => 'limit',
                'lang' => 'lang',
            ),
            'vendorUrl' => 'https://itunes.apple.com/search',
            'method' => 'GET',
            'default' => array (
                'media' => 'musicVideo',
            ),
        ),
        'searchAudiobooks' => array (
            'dictionary' => array (
                'term' => 'term',
                'country' => 'country',
                'entity' => 'entity',
                'attribute' => 'attribute',
                'limit' => 'limit',
                'lang' => 'lang',
            ),
            'vendorUrl' => 'https://itunes.apple.com/search',
            'method' => 'GET',
            'default' => array (
                'media' => 'audiobook',
            ),
        ),
        'searchShortFilms' => array (
            'dictionary' => array (
                'term' => 'term',
                'country' => 'country',
                'entity' => 'entity',
                'attribute' => 'attribute',
                'limit' => 'limit',
                'lang' => 'lang',
            ),
            'vendorUrl' => 'https://itunes.apple.com/search',
            'method' => 'GET',
            'default' => array (
                'media' => 'shortFilm',
            ),
        ),
        'searchTvShows' => array (
            'dictionary' => array (
                'term' => 'term',
                'country' => 'country',
                'entity' => 'entity',
                'attribute' => 'attribute',
                'limit' => 'limit',
                'lang' => 'lang',
            ),
            'vendorUrl' => 'https://itunes.apple.com/search',
            'method' => 'GET',
            'default' => array (
                'media' => 'tvShow',
            ),
        ),
        'searchSoftwares' => array (
            'dictionary' => array (
                'term' => 'term',
                'country' => 'country',
                'entity' => 'entity',
                'limit' => 'limit',
                'lang' => 'lang',
            ),
            'vendorUrl' => 'https://itunes.apple.com/search',
            'method' => 'GET',
            'default' => array (
                'media' => 'software',
                'attribute' => 'softwareDeveloper',
            ),
        ),
        'searchEbooks' => array (
            'dictionary' => array (
                'term' => 'term',
                'country' => 'country',
                'limit' => 'limit',
                'lang' => 'lang',
            ),
            'vendorUrl' => 'https://itunes.apple.com/search',
            'method' => 'GET',
            'default' => array (
                'media' => 'ebook',
                'entity' => 'ebook',
            ),
        ),
        'getContentById' => array (
            'dictionary' => array (
                'contentId' => 'id',
                'term' => 'term',
                'country' => 'country',
                'media' => 'media',
                'entity' => 'entity',
                'attribute' => 'attribute',
                'limit' => 'limit',
                'lang' => 'lang',
            ),
            'vendorUrl' => 'https://itunes.apple.com/lookup',
            'method' => 'GET',
        ),
        'getContentByUpc' => array (
            'dictionary' => array (
                'upc' => 'upc',
                'term' => 'term',
                'country' => 'country',
                'media' => 'media',
                'entity' => 'entity',
                'attribute' => 'attribute',
                'limit' => 'limit',
                'lang' => 'lang',
            ),
            'vendorUrl' => 'https://itunes.apple.com/lookup',
            'method' => 'GET',
        ),
        'getContentByIsbn' => array (
            'dictionary' => array (
                'isbn' => 'isbn',
                'term' => 'term',
                'country' => 'country',
                'media' => 'media',
                'entity' => 'entity',
                'attribute' => 'attribute',
                'limit' => 'limit',
                'lang' => 'lang',
            ),
            'vendorUrl' => 'https://itunes.apple.com/lookup',
            'method' => 'GET',
        ),
        'getContentByAmgAlbumId' => array (
            'dictionary' => array (
                'amgAlbumId' => 'amgAlbumId',
                'term' => 'term',
                'country' => 'country',
                'media' => 'media',
                'entity' => 'entity',
                'attribute' => 'attribute',
                'limit' => 'limit',
                'lang' => 'lang',
            ),
            'vendorUrl' => 'https://itunes.apple.com/lookup',
            'method' => 'GET',
        ),
        'getContentByAmgArtistId' => array (
            'dictionary' => array (
                'amgArtistId' => 'amgArtistId',
                'term' => 'term',
                'country' => 'country',
                'media' => 'media',
                'entity' => 'entity',
                'attribute' => 'attribute',
                'limit' => 'limit',
                'lang' => 'lang',
            ),
            'vendorUrl' => 'https://itunes.apple.com/lookup',
            'method' => 'GET',
        ),
        'getContentByAmgVideoId' => array (
            'dictionary' => array (
                'amgVideoId' => 'amgVideoId',
                'term' => 'term',
                'country' => 'country',
                'media' => 'media',
                'entity' => 'entity',
                'attribute' => 'attribute',
                'limit' => 'limit',
                'lang' => 'lang',
            ),
            'vendorUrl' => 'https://itunes.apple.com/lookup',
            'method' => 'GET',
        ),
    ),
);