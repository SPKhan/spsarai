import cv2
import numpy as np
import json
from flask.ext.cors import CORS, cross_origin
from flask import Flask, request
app = Flask(__name__)
cors = CORS(app)


@app.route("/imageSearch",methods=["POST"])
def imageSearch():
	filename = request.form.get("filename","")
	typeof = request.form.get("type","")
	if typeof == "pest":
		result = pest(filename)
	else:
		result = diseases(filename)
	return result

def pest(filename):
	#img = cv2.imread(filename,0)
	#img = cv2.medianBlur(img,5)

	#ret,th1 = cv2.threshold(img,127,255,cv2.THRESH_BINARY)
	#th2 = cv2.adaptiveThreshold(img,255,cv2.ADAPTIVE_THRESH_MEAN_C,\
	#            cv2.THRESH_BINARY,11,2)
	#th3 = cv2.adaptiveThreshold(img,255,cv2.ADAPTIVE_THRESH_GAUSSIAN_C,\
	#            cv2.THRESH_BINARY,11,2)

	#images = [img, th1, th2, th3]
	#th1 = cv2.bitwise_not(th1,th1)
	#res = cv2.bitwise_and(img,img, mask= th1)
	#os.remove(filename)
	#cv2.imwrite('../web/results/res.jpg',res)
	# for i in xrange(4):
	#     cv2.imwrite('../web/results/pest'+str(i)+'.jpg',images[i])
	return "<img src='results/res.jpg'>"


def diseases(filename):
	
	name = filename[15:]
	name, extension = name.split(".")
	#data is a json to be converted into html tags
	data = {}
	data['data'] = []
	data['data'].append({'title':'Original Image','location':[filename]})
	data['data'].append({'title':'Histogram','location':[]})

	img2 = cv2.imread(filename, 0)
	img2 = cv2.medianBlur(img2,5)
	ret,th1 = cv2.threshold(img2,127,255,cv2.THRESH_BINARY)
	th2 = cv2.adaptiveThreshold(img2,255,cv2.ADAPTIVE_THRESH_MEAN_C, cv2.THRESH_BINARY,11,2)
	th3 = cv2.adaptiveThreshold(img2,255,cv2.ADAPTIVE_THRESH_GAUSSIAN_C, cv2.THRESH_BINARY,11,2)


	img = cv2.imread(filename)
	bgr = img
	hsv = cv2.cvtColor(img, cv2.COLOR_BGR2HSV)
	h,s,v = cv2.split(hsv)
	b,g,r = cv2.split(bgr)

	red_location = '../web/results/' + name + '-red.jpg'
	blue_location = '../web/results/' + name + '-blue.jpg'
	green_location = '../web/results/' + name + '-green.jpg'

	redmasked_location = '../web/results/' + name + '-red-masked.jpg'
	bluemasked_location = '../web/results/' + name + '-blue-masked.jpg'
	greenmasked_location = '../web/results/' + name + '-green-masked.jpg'

	hue_location = '../web/results/' + name + '-hue.jpg'
	sat_location = '../web/results/' + name + '-sat.jpg'
	val_location = '../web/results/' + name + '-val.jpg'
	mask_location = '../web/results/' + name + '-mask.jpg'
	result_location = '../web/results/' + name + '-result.jpg'

	th_location = '../web/results/' + name + '-th.jpg'


	mask = cv2.inRange(h, 40, 80)
	cv2.bitwise_not(mask, mask)
	
	res = cv2.bitwise_and(img,img, mask= mask)
	redmask = cv2.bitwise_and(r,r, mask= mask)
	greenmask = cv2.bitwise_and(g,g, mask= mask)
	bluemask = cv2.bitwise_and(b,b, mask= mask)


	cv2.imwrite(mask_location,mask)
	cv2.imwrite(result_location,res)
	cv2.imwrite(hue_location,h)
	cv2.imwrite(sat_location,s)
	cv2.imwrite(val_location,v)
	cv2.imwrite(red_location,r)
	cv2.imwrite(green_location,g)
	cv2.imwrite(blue_location,b)
	cv2.imwrite(redmasked_location,redmask)
	cv2.imwrite(greenmasked_location,greenmask)
	cv2.imwrite(bluemasked_location,bluemask)

	cv2.imwrite(th_location,th1)

	data['data'].append({'title':'Threshold','location':[th_location]})
	data['data'].append({'title':'RGB Colorspace','location':[red_location, green_location, blue_location]})
	data['data'].append({'title':'HSV Colorspace','location':[hue_location, sat_location, val_location]})
	data['data'].append({'title':'Mask','location':[mask_location]})
	data['data'].append({'title':'RGB Masked','location':[redmasked_location, greenmasked_location, bluemasked_location]})
	data['data'].append({'title':'Result', 'location':[result_location]})

	html = jsontohtml(data)
	hist = cv2.calcHist([img],[0],None,[256],[0,256])
	
	histdata = []
	i=0
	for pixel in hist:
		histdata.append([i,int(pixel[0])])
		i+=1

	val = {'histogram':histdata,'html':html}

	return json.dumps(val)


def jsontohtml(data):
	html = ''
	for data in data['data']:
		html += '<h3>' + data['title'] + '</h3>'
		html += '<div class="row">'
		if len(data['location']) > 0:
			for image in data['location']:
				html += "<img src='" + image + "' class='span4'>"

		else:
			html += '<div id="histogram" style="height:400px;width:600px; "></div>'

		html += '</div>'

	return html

if __name__ == "__main__":
    app.run(debug=True, host = '0.0.0.0')