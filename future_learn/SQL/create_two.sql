CREATE TABLE returns (
	return_id integer PRIMARY KEY,
	sale_id integer NOT NULL,
	date_returned text,
	reason text,
	FOREIGN KEY (sale_id) REFERENCES sales(sale_id)
	);
