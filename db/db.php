<?php

// $movies = [
//   new Movie('Il mio amico Totoro', [2, 3], 'mio-vicino-totoro.jpg', 1988, 86),
//   new Movie('Matrix', [1], 'matrix.jpg', 1999, 136)
// ];

// $tvSeries = [
//   new TvSerie('Ai confini della realtà', [5, 6, 8], 'twilight-zone.jpg', 1959, 1964, 156, 5),
//   new TvSerie('Friends', [11, 14], 'friends.jpg', 1994, 2004, 234, 10)
// ];

$productions = [
    new Movie('Il mio amico Totoro', /* try to empty this array to catch error */ [2, 3], 'mio-vicino-totoro.jpg', /* try to give string instead of number to catch error */ 1988, 86, 4.35, 4.67),
    new Movie('Matrix', [1], 'matrix.jpg', 1999, 136),
    new TvSerie('Ai confini della realtà', [5, 6, 8], 'twilight-zone.jpg', 1959, 1964, 156, 5),
    new TvSerie('Friends', [11, 14], 'friends.jpg', 1994, 2004, 234, 10),
    new Movie('Il mio amico Totoro', [2, 3], 'mio-vicino-totoro.jpg', 1988, 86),
    new Movie('Matrix', [1], 'matrix.jpg', 1999, 136),
    new TvSerie('Ai confini della realtà', [5, 6, 8], 'twilight-zone.jpg', 1959, 1964, 156, 5),
    new Movie('Il mio amico Totoro', [2, 3], 'mio-vicino-totoro.jpg', 1988, 86),
    new Movie('Matrix', [1], 'matrix.jpg', 1999, 136),
];

function getAlert() {
    echo '<script>alert("Welcome to Geeks for Geeks")</script>'; 
}
