#!/usr/bin/env python3
import os

cmd = "cd images && ls -p1 | grep -v / > ../files.txt"
os.system(cmd)
files = open('./files.txt', 'r')
print("\r".join(files.readlines()))