import requests
from bs4 import BeautifulSoup as bs
class mp4(object):
	def __init__(self,url):
		self.url=url
		html=requests.get(url).text
		soup=bs(html,'html.parser')
		self.fileName=soup.h2.text
		self.fileName=self.fileName.replace('Download File ','')
		size =soup.font.text
		self.soup=soup
		self.size=size.split('(')[1].replace('MB)','')
	def press(self):
		params=dict()
		inputs=self.soup.find_all('input')
		for item in inputs:
			params.update({item['name']:item['value']})
		response=requests.post(self.url,data=params).text
		return response
	def press2(self):
		soup=bs(self.press(),'html.parser')
		params=dict()
		inputs=soup.find_all('input')
		for item in inputs:
			params.update({item['name']:item['value']})
		response=requests.post(self.url,data=params,verify=False).content
		return response
