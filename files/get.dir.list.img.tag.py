import os
import re

directory = input("Input directory full pathname:")
pattern = r"[a-zA-Z0-9\/\-\_\.]+"
try:
	match = re.match(pattern, directory)
	directory = match[0]
except:
	print("Bad directory")
	exit()

cmd = f"ls -p1 {directory} > tmp.filelist.txt"
output = os.system(cmd)
f = open("./tmp.filelist.txt","r")
lines_list = f.readlines()

destination = input("Input destination full pathname:")
try:
	match = re.match(pattern, destination)
	destination = match[0]
except:
	print("Bad directory")
	exit()

new_list = []
for x in lines_list:
	string = f"<img src='{destination}{x[:-1]}' />"
	new_list.append(string)
new_string = "\r\n".join(new_list)
cmd = f"cat {new_string} > tmp.filelist.txt"
os.system(cmd)
print("Your file is available at ./tmp.filelist.txt")
