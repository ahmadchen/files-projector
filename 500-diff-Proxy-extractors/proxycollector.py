import requests
import bs4
from bs4 import BeautifulSoup as bs
c=0
urls = ['https://www.us-proxy.org','https://free-proxy-list.net','https://www.socks-proxy.net']
for url in urls:
    print ('from',url)

    opened=requests.get(url)
    soup=bs(opened.text,'html.parser')
    soup=soup.tbody
    trs= soup.find_all('tr')
    for tds in trs:
        proxy=tds.find_all('td')[0].text
        port=tds.find_all('td')[1].text
        c=c+1
        print (proxy+':'+port)

print ('total proxies: ',c)
