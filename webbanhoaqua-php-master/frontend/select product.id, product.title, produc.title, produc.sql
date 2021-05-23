select product.id, product.title, product.price, 
product.thumbnail, product.updated_at, 
category.name category_name ,xuatxu.name xuatxu_name
from product

left join category 
on product.id_category = category.id 

LEFT JOIN xuatxu on product.id_xuatxu= xuatxu.id

where category.id =     1