wifi: vXz2c8LjNF
wifi: PZgT9frizo (ChinaNet 1bMR)
wifi: Pointer.2016 Pointer

http://localhost/usercenter/
front user
chenlu@hioki.com.cn
hiokish
http://localhost/usercenter/admin/user.php
cl03031019820411

http://localhost/usercenter/lib/conn.php

http://localhost/usercenter/admin/user.php
http://103.197.26.6/usercenter/admin/user.php
admin 
cl03031019820411
http://www.hioki.cn/usercenter/reg.php

scp -r root@103.197.26.6:/var/www/hioki/0930 ./

http://www.hioki.co.jp/
et124207
hioki2017
https://www.hioki.co.jp/jp/mypage/registration/
https://www.hioki.co.jp/jp/mypage/registration/result-search-ajax/?search_word=8847
http://www.hioki.cn/userscenter/intellectual/im_download.php?category_id=1
2017年 08月 31日 星期四 21:10:29 CST  OK  
http://103.197.26.6/userscenter/intellectual/im_download.php?category_id=1

http://localhost/userscenter/intellectual/im_download.php?category_id=1

irb(main):012:0* HUser.count
          (0.3ms)  SELECT COUNT(*) FROM `h_user`
          => 2031
          irb(main):013:0> HUser.last
                    HUser Load (0.6ms)  SELECT  `h_user`.* FROM `h_user` ORDER BY `h_user`.`user_id` DESC LIMIT 1
                    => #<HUser user_id: 2031, company: "顺络电子", dept: "设备部", job: "电气工程师", name: "梁广荣", type: "最终用户", area: "中南", work1: "8", work2: "2", postcode: "518110", address: "深圳市龙华新区观光路观澜大富苑顺络工业园", tel: "13510985773", fax: "", email: "guangrong_liang@sunlordinc.com", password: "81f8c654b345b2393253df0276c12bcf6f3865b0", is_used: "yes", hioki_code1: "LR8400-21", hioki_name1: "", hioki_code2: "", hioki_name2: "", hioki_code3: "", hioki_name3: "", other_code1: "", other_name1: "", other_code2: "", other_name2: "", other_code3: "", other_name3: "", info_type: "", feedback: "", check_flag: 9, add_time: "2017-09-04 16:14:39", del_flag: "no">

## sql
select CONCAT("(^|,)", 33, "(,|$)");
