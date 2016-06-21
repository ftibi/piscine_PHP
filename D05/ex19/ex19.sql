SELECT DATEDIFF(DATE(MAX(date)),DATE(MIN(date))) AS 'uptime'
FROM historique_membre;
