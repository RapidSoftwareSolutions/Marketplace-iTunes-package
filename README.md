[![](https://scdn.rapidapi.com/RapidAPI_banner.png)](https://rapidapi.com/package/iTunes/functions?utm_source=RapidAPIGitHub_iTunesFunctions&utm_medium=button&utm_content=RapidAPI_GitHub)

# iTunes Package
The iTunes Search API allows you to place search fields in your website to search for content within the iTunes Store, App Store, iBooks Store and Mac App Store.
* Domain: apple.com/itunes


## Custom datatypes: 
 |Datatype|Description|Example
 |--------|-----------|----------
 |Datepicker|String which includes date and time|```2016-05-28 00:00:00```
 |Map|String which includes latitude and longitude coma separated|```50.37, 26.56```
 |List|Simple array|```["123", "sample"]``` 
 |Select|String with predefined values|```sample```
 |Array|Array of objects|```[{"Second name":"123","Age":"12","Photo":"sdf","Draft":"sdfsdf"},{"name":"adi","Second name":"bla","Age":"4","Photo":"asfserwe","Draft":"sdfsdf"}] ```

## iTunes.search
Search for content within the iTunes Store, App Store, iBooks Store and Mac App Store.

| Field  | Type  | Description
|--------|-------|----------
| term   | String| The text string you want to search for.
| country| String| The two-letter country code for the store you want to search.
| limit  | Number| The number of search results you want the iTunes Store to return. In range 1 - 200.The default is 50.
| lang   | Select| The language, English or Japanese, you want to use when returning search results. Specify the language using the five-letter codename. The default is en_us (English).

## iTunes.searchMovies
Search in movies.

| Field    | Type  | Description
|----------|-------|----------
| term     | String| The text string you want to search for.
| country  | String| The two-letter country code for the store you want to search.
| entity   | Select| The type of results you want returned, one of movieArtist, movie.
| attribute| Select| The attribute you want to search for in the stores, one of actorTerm, genreIndex, artistTerm, shortFilmTerm, producerTerm, ratingTerm, directorTerm, releaseYearTerm, featureFilmTerm, movieArtistTerm, movieTerm, ratingIndex, descriptionTerm.
| limit    | Number| The number of search results you want the iTunes Store to return. In range 1 - 200.The default is 50.
| lang     | Select| The language, English or Japanese, you want to use when returning search results. Specify the language using the five-letter codename. The default is en_us (English).

## iTunes.searchPodcasts
Search in podcasts.

| Field    | Type  | Description
|----------|-------|----------
| term     | String| The text string you want to search for.
| country  | String| The two-letter country code for the store you want to search.
| entity   | Select| The type of results you want returned, one of podcastAuthor, podcast.
| attribute| Select| The attribute you want to search for in the stores, one of titleTerm, languageTerm, authorTerm, genreIndex, artistTerm, ratingIndex, keywordsTerm, descriptionTerm.
| limit    | Number| The number of search results you want the iTunes Store to return. In range 1 - 200.The default is 50.
| lang     | Select| The language, English or Japanese, you want to use when returning search results. Specify the language using the five-letter codename. The default is en_us (English).

## iTunes.searchMusic
Search in music.

| Field    | Type  | Description
|----------|-------|----------
| term     | String| The text string you want to search for.
| country  | String| The two-letter country code for the store you want to search.
| entity   | Select| The type of results you want returned, one of musicArtist, musicTrack, album, musicVideo, mix, song.
| attribute| Select| The attribute you want to search for in the stores, one of mixTerm, genreIndex, artistTerm, composerTerm, albumTerm, ratingIndex, songTerm.
| limit    | Number| The number of search results you want the iTunes Store to return. In range 1 - 200.The default is 50.
| lang     | Select| The language, English or Japanese, you want to use when returning search results. Specify the language using the five-letter codename. The default is en_us (English).

## iTunes.searchMusicVideos
Search music and videos content.

| Field    | Type  | Description
|----------|-------|----------
| term     | String| The text string you want to search for.
| country  | String| The two-letter country code for the store you want to search.
| entity   | Select| The type of results you want returned, one of musicArtist, musicVideo.
| attribute| Select| The attribute you want to search for in the stores, one of genreIndex, artistTerm, albumTerm, ratingIndex, songTerm.
| limit    | Number| The number of search results you want the iTunes Store to return. In range 1 - 200.The default is 50.
| lang     | Select| The language, English or Japanese, you want to use when returning search results. Specify the language using the five-letter codename. The default is en_us (English).

## iTunes.searchAudiobooks
Search in audiobooks.

| Field    | Type  | Description
|----------|-------|----------
| term     | String| The text string you want to search for.
| country  | String| The two-letter country code for the store you want to search.
| entity   | Select| The type of results you want returned, one of audiobookAuthor, audiobook.
| attribute| Select| The attribute you want to search for in the stores, one of titleTerm, authorTerm, genreIndex, ratingIndex.
| limit    | Number| The number of search results you want the iTunes Store to return. In range 1 - 200.The default is 50.
| lang     | Select| The language, English or Japanese, you want to use when returning search results. Specify the language using the five-letter codename. The default is en_us (English).

## iTunes.searchShortFilms
Search in short films.

| Field    | Type  | Description
|----------|-------|----------
| term     | String| The text string you want to search for.
| country  | String| The two-letter country code for the store you want to search.
| entity   | Select| The type of results you want returned, one of shortFilmArtist, shortFilm.
| attribute| Select| The attribute you want to search for in the stores, one of genreIndex, artistTerm, shortFilmTerm, ratingIndex, descriptionTerm.
| limit    | Number| The number of search results you want the iTunes Store to return. In range 1 - 200.The default is 50.
| lang     | Select| The language, English or Japanese, you want to use when returning search results. Specify the language using the five-letter codename. The default is en_us (English).

## iTunes.searchTvShows
Search in TV shows.

| Field    | Type  | Description
|----------|-------|----------
| term     | String| The text string you want to search for.
| country  | String| The two-letter country code for the store you want to search.
| entity   | Select| The type of results you want returned, one of tvEpisode, tvSeason.
| attribute| Select| The attribute you want to search for in the stores, one of genreIndex, tvEpisodeTerm, showTerm, tvSeasonTerm, ratingIndex, descriptionTerm.
| limit    | Number| The number of search results you want the iTunes Store to return. In range 1 - 200.The default is 50.
| lang     | Select| The language, English or Japanese, you want to use when returning search results. Specify the language using the five-letter codename. The default is en_us (English).

## iTunes.searchSoftwares
Search in softwares.

| Field  | Type  | Description
|--------|-------|----------
| term   | String| The text string you want to search for.
| country| String| The two-letter country code for the store you want to search.
| entity | Select| The type of results you want returned, one of software, iPadSoftware, macSoftware.
| limit  | Number| The number of search results you want the iTunes Store to return. In range 1 - 200.The default is 50.
| lang   | Select| The language, English or Japanese, you want to use when returning search results. Specify the language using the five-letter codename. The default is en_us (English).

## iTunes.searchEbooks
Search in ebooks.

| Field  | Type  | Description
|--------|-------|----------
| term   | String| The text string you want to search for.
| country| String| The two-letter country code for the store you want to search.
| limit  | Number| The number of search results you want the iTunes Store to return. In range 1 - 200.The default is 50.
| lang   | Select| The language, English or Japanese, you want to use when returning search results. Specify the language using the five-letter codename. The default is en_us (English).

## iTunes.getContentById
Look up content by iTunes ID.

| Field    | Type  | Description
|----------|-------|----------
| contentId| String| Id of content for Retrieving.
| term     | String| The text string you want to search for.
| country  | String| The two-letter country code for the store you want to search.
| media    | Select| The media type you want to search for. The default is all.
| entity   | Select| The type of results you want returned, relative to the specified media type. For example: movieArtist for a movie media type search. The default is the track entity associated with the specified media type.
| attribute| Select| The attribute you want to search for in the stores, relative to the specified media type. For example, if you want to search for an artist by name specify entity=allArtist&attribute=allArtistTerm. In this example, if you search for term=maroon, iTunes returns “Maroon 5” in the search results, instead of all artists who have ever recorded a song with the word "maroon" in the title.
| limit    | Number| The number of search results you want the iTunes Store to return. In range 1 - 200.The default is 50.
| lang     | Select| The language, English or Japanese, you want to use when returning search results. Specify the language using the five-letter codename. The default is en_us (English).

## iTunes.getContentByUpc
Look up an album or video by its UPC.

| Field    | Type  | Description
|----------|-------|----------
| upc      | String| UPC of album or video.
| term     | String| The text string you want to search for.
| country  | String| The two-letter country code for the store you want to search.
| media    | Select| The media type you want to search for. The default is all.
| entity   | Select| The type of results you want returned, relative to the specified media type. For example: movieArtist for a movie media type search. The default is the track entity associated with the specified media type.
| attribute| Select| The attribute you want to search for in the stores, relative to the specified media type. For example, if you want to search for an artist by name specify entity=allArtist&attribute=allArtistTerm. In this example, if you search for term=maroon, iTunes returns “Maroon 5” in the search results, instead of all artists who have ever recorded a song with the word "maroon" in the title.
| limit    | Number| The number of search results you want the iTunes Store to return. In range 1 - 200.The default is 50.
| lang     | Select| The language, English or Japanese, you want to use when returning search results. Specify the language using the five-letter codename. The default is en_us (English).

## iTunes.getContentByIsbn
Look up content by ISBN.

| Field    | Type  | Description
|----------|-------|----------
| isbn     | String| International standard book number.
| term     | String| The text string you want to search for.
| country  | String| The two-letter country code for the store you want to search.
| media    | Select| The media type you want to search for. The default is all.
| entity   | Select| The type of results you want returned, relative to the specified media type. For example: movieArtist for a movie media type search. The default is the track entity associated with the specified media type.
| attribute| Select| The attribute you want to search for in the stores, relative to the specified media type. For example, if you want to search for an artist by name specify entity=allArtist&attribute=allArtistTerm. In this example, if you search for term=maroon, iTunes returns “Maroon 5” in the search results, instead of all artists who have ever recorded a song with the word "maroon" in the title.
| limit    | Number| The number of search results you want the iTunes Store to return. In range 1 - 200.The default is 50.
| lang     | Select| The language, English or Japanese, you want to use when returning search results. Specify the language using the five-letter codename. The default is en_us (English).

## iTunes.getContentByAmgAlbumId
Look up an album by its AMG Album ID

| Field     | Type  | Description
|-----------|-------|----------
| amgAlbumId| String| AMG Album identifier or comma separated Ids.
| term      | String| The text string you want to search for.
| country   | String| The two-letter country code for the store you want to search.
| media     | Select| The media type you want to search for. The default is all.
| entity    | Select| The type of results you want returned, relative to the specified media type. For example: movieArtist for a movie media type search. The default is the track entity associated with the specified media type.
| attribute | Select| The attribute you want to search for in the stores, relative to the specified media type. For example, if you want to search for an artist by name specify entity=allArtist&attribute=allArtistTerm. In this example, if you search for term=maroon, iTunes returns “Maroon 5” in the search results, instead of all artists who have ever recorded a song with the word "maroon" in the title.
| limit     | Number| The number of search results you want the iTunes Store to return. In range 1 - 200.The default is 50.
| lang      | Select| The language, English or Japanese, you want to use when returning search results. Specify the language using the five-letter codename. The default is en_us (English).

## iTunes.getContentByAmgArtistId
Look up content by AMG artist ID.

| Field      | Type  | Description
|------------|-------|----------
| amgArtistId| String| AMG Artist Id or comma separated Ids.
| term       | String| The text string you want to search for.
| country    | String| The two-letter country code for the store you want to search.
| media      | Select| The media type you want to search for. The default is all.
| entity     | Select| The type of results you want returned, relative to the specified media type. For example: movieArtist for a movie media type search. The default is the track entity associated with the specified media type.
| attribute  | Select| The attribute you want to search for in the stores, relative to the specified media type. For example, if you want to search for an artist by name specify entity=allArtist&attribute=allArtistTerm. In this example, if you search for term=maroon, iTunes returns “Maroon 5” in the search results, instead of all artists who have ever recorded a song with the word "maroon" in the title.
| limit      | Number| The number of search results you want the iTunes Store to return. In range 1 - 200.The default is 50.
| lang       | Select| The language, English or Japanese, you want to use when returning search results. Specify the language using the five-letter codename. The default is en_us (English).

## iTunes.getContentByAmgVideoId
Look up content by AMG Video ID.

| Field     | Type  | Description
|-----------|-------|----------
| amgVideoId| String| AMG Video identire.
| term      | String| The text string you want to search for.
| country   | String| The two-letter country code for the store you want to search.
| media     | Select| The media type you want to search for. The default is all.
| entity    | Select| The type of results you want returned, relative to the specified media type. For example: movieArtist for a movie media type search. The default is the track entity associated with the specified media type.
| attribute | Select| The attribute you want to search for in the stores, relative to the specified media type. For example, if you want to search for an artist by name specify entity=allArtist&attribute=allArtistTerm. In this example, if you search for term=maroon, iTunes returns “Maroon 5” in the search results, instead of all artists who have ever recorded a song with the word "maroon" in the title.
| limit     | Number| The number of search results you want the iTunes Store to return. In range 1 - 200.The default is 50.
| lang      | Select| The language, English or Japanese, you want to use when returning search results. Specify the language using the five-letter codename. The default is en_us (English).

