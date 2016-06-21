SELECT etage_salle AS 'etage',
SUM(
	CASE WHEN etage_salle  = etage_salle THEN nbr_siege ELSE 0 END
) AS 'sieges'
FROM salle
GROUP BY etage
ORDER BY sieges DESC;
