from flask import Flask,jsonify,request
import requests
import re
from bs4 import BeautifulSoup as bs
app=Flask(__name__)
app.config['DEBUG']=True
@app.route('/', defaults={'path': ''})
@app.route('/<path:path>')
def catch_all(path):
	q=request.args.get('q')
	url='https://vidstreaming.io/'+q
	html=requests.get(url).text
	try:
		soup=bs(html,'html.parser')
		src="https:"+soup.iframe['src']
		page=requests.get(src).text
		regex = r"'https://redirecto[^']+'"
		matches = re.search(regex, page)
		start=matches.start()
		end=matches.end()
		tag=f'''
	<body>
	  <video
	    id="my-video"
	    class="video-js"
	    controls
	    preload="auto"
	    width="640"
	    height="264"
	    poster="videoposter.jpg"
	    data-setup=""
	  >
	    <source src={page[start:end]} type="video/mp4" />
	    <p class="vjs-no-js">
	      To view this video please enable JavaScript, and consider upgrading to a
	      web browser that
	      <a href="https://videojs.com/html5-video-support/" target="_blank"
	        >supports HTML5 video</a
	      >
	    </p>
	  </video>

	  <script src="https://vjs.zencdn.net/7.6.6/video.js"></script>
 '''
		tag=jsonify({"if":tag})
		tag.headers.add('Access-Control-Allow-Origin', '*')
		tag.headers.add('Access-Control-Allow-Headers', 'Content-Type,Authorization')
		tag.headers.add('Access-Control-Allow-Methods', 'GET,PUT,POST,DELETE,OPTIONS')
		return tag
	except:
		iframe=html.find('<iframe')
		iframe2=html.find('>',iframe)+1
		notstripped=html[iframe:iframe2]
		response=jsonify({"if":notstripped})
		response.headers.add('Access-Control-Allow-Origin', '*')
		response.headers.add('Access-Control-Allow-Headers', 'Content-Type,Authorization')
		response.headers.add('Access-Control-Allow-Methods', 'GET,PUT,POST,DELETE,OPTIONS')
		return response

