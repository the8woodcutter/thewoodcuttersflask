import requests
import os
from bs4 import BeautifulSoup

def getdata(url):
	r = requests.get(url)
	return r.text

pages = ["https://cyber.dabamos.de/88x31/index.html","https://cyber.dabamos.de/88x31/index2.html","https://cyber.dabamos.de/88x31/index3.html","https://cyber.dabamos.de/88x31/index4.html","https://cyber.dabamos.de/88x31/index5.html"]
for page in pages:
	htmldata = getdata(page)
	soup = BeautifulSoup(htmldata, 'html.parser') 
	for item in soup.find_all('img'):
	    cmd = f"wget https://cyber.dabamos.de/88x31/{item['src']}"
	    os.system(cmd)