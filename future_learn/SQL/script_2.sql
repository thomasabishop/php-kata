SELECT name, ram, release_date
FROM model
WHERE release_date > '2018-01-01' AND ram > 512
ORDER BY release_date DESC; 
