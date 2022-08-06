SELECT SUM(quantity) AS quantity_sold_out, products.*
FROM sales
LEFT JOIN products ON products.id = product_id
GROUP BY product_id
ORDER BY SUM(quantity) DESC
LIMIT 1