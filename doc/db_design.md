# DataBase Design


## Industry
name
note
parent_id

## Category
name
note
parent_id

## Product
name:string
banner:string
feature:string
desc_as_option:string
red_desc_as_option:string
summary:textarea
upgraded:textarea
is_new:boolean
is_option:boolean
is_recommended:boolean

## categories_products
category_id
product_id

## industries_products
industry_d
product_id


## OptionCategory
name
note
product_id
option_sku_collection

## Option
sku
title
description
avatar


##PDFCategory
name
note

## ProductAttachment
name
pdf_category_id
pdf


## User
username
password_hash


## Tool(便利工具)

Logger Utility(http://www.hioki.cn/product/extras/lu_e.html)
DC 信号源 SS7012 软件(http://www.hioki.cn/download/soft/ss7012/ss7012smpl_c.html)
存储记录仪 & 数据记录仪 应用盘(http://www.hioki.cn/product/extras/application_e.html)
HIOKI 存储记录仪最大记录计算(http://www.hioki.cn/product/extras/recshot_e.html)

