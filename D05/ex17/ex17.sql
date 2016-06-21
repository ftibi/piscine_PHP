SELECT (SELECT count(*) FROM abonnement) AS 'nb_abo',
FLOOR(SUM(CASE WHEN prix THEN prix END) / (SELECT count(*) FROM abonnement)) AS 'moy_abo',
SUM(CASE WHEN duree_abo THEN duree_abo END) % 42 AS 'ft'
FROM abonnement;
