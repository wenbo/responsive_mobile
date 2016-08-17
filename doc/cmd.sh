sed -i '' -e  "s/industry/category/g" `grep industry -rl ./app/views/admin/categories/`
sed -i '' -e  "s/industries/categories/g" `grep industries -rl ./app/views/admin/categories/`

