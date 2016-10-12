[admin@www hioki]$ ls password/
3196.pwd        88606150.pwd  im3536.pwd      mr8741.pwd   pw3198.pwd    XC714.pwd
339010.pwd      886061.pwd    im3570.pwd      mr8827.pwd   pw3335.pwd    XC734.pwd
3390.pwd        8860.pwd      im3590.pwd      mr8847A.pwd  pw336030.pwd  XC739.pwd
8430.pwd        887021.pwd    im7580.pwd      mr8847.pwd   pw336530.pwd  XC758.pwd
8847.pwd        ate1220.pwd   lr84000102.pwd  mr8875.pwd   pw6001.pwd    xe322.pwd
8860600821.pwd  im352333.pwd  mr8740.pwd      mr8880.pwd   xc661.pwd     XK176.pwd




http://www.hioki.cn/product/download/88606150/index.html

cd /home/htdocs/hioki/www/product/download/88606150/

vi /home/htdocs/hioki/www/product/download/88606150/.htaccess

AuthUserFile   /home/htdocs/hioki/password/88606150.pwd
AuthGroupFile  /dev/null
AuthName       "8860-60,88610-50 Download"
AuthType         Basic
<limit POST GET>
require valid-user
</limit>



103.250.195.42 - - [12/Oct/2016:17:37:55 +0800] "GET /product/download/88606150/index.html HTTP/1.1" 401 479 "http://www.hioki.cn/product/88606150/88606150v.html" "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10_5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/53.0.2785.143 Safari/537.36"
	103.250.195.42 - asdf [12/Oct/2016:17:38:14 +0800] "GET /product/download/88606150/index.html HTTP/1.1" 401 479 "http://www.hioki.cn/product/88606150/88606150v.html" "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10_5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/53.0.2785.143 Safari/537.36"
