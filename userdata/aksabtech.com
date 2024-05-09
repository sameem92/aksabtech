--- 
customlog: 
  - 
    format: combined
    target: /etc/apache2/logs/domlogs/aksabtech.com
  - 
    format: "\"%{%s}t %I .\\n%{%s}t %O .\""
    target: /etc/apache2/logs/domlogs/aksabtech.com-bytes_log
documentroot: /home/aksabtech/public_html
group: aksabtech
hascgi: 1
homedir: /home/aksabtech
ip: 68.66.253.104
owner: whitee
phpopenbasedirprotect: 1
phpversion: ea-php71
port: 80
scriptalias: 
  - 
    path: /home/aksabtech/public_html/cgi-bin
    url: /cgi-bin/
serveradmin: webmaster@aksabtech.com
serveralias: mail.aksabtech.com www.aksabtech.com
servername: aksabtech.com
usecanonicalname: 'Off'
user: aksabtech
