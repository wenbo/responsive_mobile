sed -i '' -e  "s/industry/category/g" `grep industry -rl ./app/views/admin/categories/`
sed -i '' -e  "s/industries/categories/g" `grep industries -rl ./app/views/admin/categories/`


<img src="../images/distribution_r5_c3.jpg" width="10" height="9" />
<%= image_tag "front/distribution_r5_c3.jpg", width: 10, height: 9 %>

<img src="../images/distribution_r7_c2.jpg" width="183" height="41" />
<%= image_tag "front/distribution_r7_c2.jpg", width: 183, height: 41 %>

<img src="../images/distribution_r9_c2.jpg" width="173" height="42" />
<%= image_tag "front/distribution_r9_c2.jpg", width: 173, height: 42 %>

<img src="../images/distribution_r11_c2.jpg" width="173" height="43" />

sed -i "s/href=\"\/\"/href=\"\/demo\/\"/g" `grep -nR 'href="/"'  -rl ./app/views/`
sed -i "s/<a name=\"top\" id=\"top\"><\/a>/<%= render partial: \"shared\/top_search\" %>/g" `grep -nR '<a name="top" id="top"></a>'  -rl ./app/views/`

sed -i "s/href=\"\/demo\/\"/href=\"\/index.html\"/g" `grep -nR 'href="/demo/"'  -rl ./app/views/`
