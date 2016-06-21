SELECT genre.id_genre, genre.nom AS 'nom genre', distrib.id_distrib, distrib.nom AS 'nom distrib', titre AS 'titre film'
FROM genre
LEFT JOIN film
LEFT JOIN distrib
WHERE genre.id_genre BETWEEN 4 and 8;
