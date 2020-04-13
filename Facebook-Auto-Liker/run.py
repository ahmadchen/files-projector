import requests
import bs4
from bs4 import BeautifulSoup as bs
url='https://mbasic.facebook.com/login/device-based/regular/login/?refsrc=https%3A%2F%2Fmbasic.facebook.com%2F&lwv=101&refid=8'
fb='https://mbasic.facebook.com'
ssn=requests.Session()
print('''     Welcome to the Autoliker by Pace Usa , the only used module is requests for http connection.
    Error will be displayed if the login details are worng, have no extra spaces in login details.
  
  ''')
idd=input ("username/email: ")
pss=input("Password: ")
victimfbid=input("Victim id: ")
#header={'authority':'mbasic.facebook.com','path':'/login/device-based/regular/login/?refsrc=https%3A%2F%2Fmbasic.facebook.com%2F&lwv=100&refid=8','user-agent': 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.131 Safari/537'}
#cok={'sb':'JgenXHkbPmbgQYvuPj5UeB0M', 'datr':'yWy0XMr7m5m63pbkYLE29uVJ', 'wd':'1366x625', 'locale':'de_DE' ,'fr':'1mvt6wmIaOqmzHwjH.AWWksQno5V_udRReB1mVR8I_-hY.Bcpwcm.dd.FzR.0.0.Bc1jop.AWWnLaEL'}
#ssn.headers.update(header)
#ssn.cookies.update(cok)
login={'email': idd,
'pass': pss,
'login': 'Anmelden'}
cntpg=ssn.post(url,data=login) 
cntpg=ssn.get('https://mbasic.facebook.com/'+victimfbid)
#print(tryr.text)
counter=0
def liker():
    soup = bs(cntpg.text, 'html.parser')
    c = soup.find_all('a', text='Gefällt mir')
    global counter
    global op
    for em in c:
        hre=(em['href'])
        print()
        ssn.get(fb+hre)
        print("like +1")
        counter=counter+1
    op = soup.find_all('a', href=True)
numbe=int(input("how many pages to load and like"))
for asas in range (numbe):
    liker()
    for i in op:
        c=i['href']
        if '/profile/timeline/stream/?' in str(c):
            break
    cntpg=ssn.get(fb+c)
print("total posts liked:",counter)
