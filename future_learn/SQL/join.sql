SELECT model.name, sales.sale_date
FROM model
INNER JOIN sales on model.model_id = sales.model_id;

