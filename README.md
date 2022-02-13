## Apacheの再起動
    httpd -k restart

## 有効なmoduleを調べる
    httpd -M

## httpd.confの場所
    /etc/httpd/conf/httpd.conf

## .htaccessでのリダイレクト指定が効かない
`httpd.conf`の`AllowOverride`を`All`に変更してApacheを再起動する
[参考ページ](https://www.keycdn.com/support/htaccess-not-working#htaccess-needs-to-be-enabled-with-allowoverride)

## Apacheのエラーログ
    /var/log/httpd/error_log
