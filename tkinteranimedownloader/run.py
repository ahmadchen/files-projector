from tkinter import *
from bs4 import BeautifulSoup as bs
import requests
import threading
import webbrowser
class results(object):
	def __init__(self,name,link):
		self.name=name
		self.link=link
	def show(self,gridrow):
		animelabel=Label(window,text=self.name)
		animebutton=Button(window,text="Download "+self.name,command=self.download)
		animelabel.grid(row=gridrow,column=0,sticky=W)
		animebutton.grid(row=gridrow+1,column=0,sticky=W)
	




	def download(self):
		window.destroy()
		# print("the first episode link is "+self.link)
		tempLabel=Label(root,text="From which episode: (Must be a valid number) :",bg="black",fg="white", font="none 12 bold")
		tempLabel.grid(row=1,column=0,sticky=W)
		episodeStart=Entry(root,width=30,bg="yellow")
		episodeStart.grid(row=1,column=3,sticky=W)
		html=requests.get(self.link).text
		soup=bs(html,'html.parser')
		episodeCount=len(soup.find_all('ul',{'class':'check-list'})[-1].find_all('a'))
		# print ("the total no of episode is " +str(episodeCount))
		linkToPass=soup.find_all('ul',{'class':'check-list'})[-1].find_all('a')[-1]['href']
		w = Spinbox(root, from_=1, to=episodeCount,bg="yellow")
		w.grid(row=2,column=3,sticky=W)
		tempLabel2=Label(root,text=f"NO of Episodes (Total episodes available is {episodeCount})",bg="black",fg="white", font="none 12 bold")
		tempLabel2.grid(row=2,column=0,sticky=W)
		global btn2
		btn2=Button(root,text="BEGIN DOWNLOAD",width=25,command=lambda:threadcaller(episodeStart.get(),w.get(),linkToPass))
		btn2.grid(row=4,column=0,sticky=W)
def threadcaller(start,end,link):
	btn2.destroy()
	t1=threading.Thread(target=downloadmod,args=[start,end,link])
	t1.start()
def downloadmod(start,end,link):
	counter=0
	if str(start) is not "1":
		link=link.rsplit('1',1)[0]+str(start)
	print (f'print {link} from {start} to {end}')
	while True:
		html=requests.get(link).text
		soup=bs(html,'html.parser')
		dl=soup.find('div',{'class':'vmn-buttons'}).find_all('a',text="Download")[0]['href']
		# print("downloading episode",)
		Label(root,text=f'Downloading episode {counter+int(start)}').grid(row=counter+5,column=0,sticky=W)
		r=requests.get(dl,allow_redirects=True).content
		with open(soup.find('div',{'class':'vmn-title'}).h1.text+'.mp4', 'wb') as file:
			file.write(r)
		# print(f"Downloaded episode {counter +1}")
		webbrowser.open_new("https://animesa.ga")
		counter=counter+1
		root.update()
		if counter ==int(end):
			break
		link=soup.find('div',{'class':'vmn-buttons'}).find_all('i',{'class':'fa fa-step-forward'})[0].parent['href']




def clicked():
	query=textentry.get()
	textentry.destroy()
	lbl.destroy()
	btn.destroy()
	url="https://www.gogoanime1.com/search/topSearch?q="+query.replace(" ","%20")
	json=requests.get(url).json()['data']
	for count,item in enumerate(json,2):
		name=item['name']
		link="https://www.gogoanime1.com/watch/"+item['seo_name']
		obj=results(name,link)
		obj.show(count*2)


root=Tk()
window=Frame(root)
window.pack()
root.title="Download Anime"
# defining elements
photo1=PhotoImage(file="main-bg.gif")
Label(window,image=photo1,bg="black").grid(row=0,column=0,sticky=E)
lbl=Label(window,text="Enter Anime name you wish to download",bg="black",fg="white", font="none 12 bold")
lbl.grid(row=1,column=0,sticky=W)
textentry=Entry(window,width=30,bg="yellow")
textentry.grid(row=2,column=0,sticky=W)
btn=Button(window,text="SEARCH",width=11,command=clicked)
btn.grid(row=3,column=0,sticky=W)
Label(window,text="_____by Pace Usa .Be sure to check for updates",bg="black",fg="white", font="none 12 bold").grid(row=4,column=0,sticky=W)
if __name__=="__main__":
	root.mainloop()




# TODO LIST 
# 3. Download module completion
