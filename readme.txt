How to run the demonstration implementation (tested under Windows 8.1 Professional 64-bit with Chrome and IE)
	A.Firstly, please install XAMPPv3.2.1 then navigate to the XAMPP folder and copy the whole project and paste into htdocs folder.
	  (for example, D:\xampp\htdocs) (before copy and paste our project files, delete the default files of XAMPP in htdocs folder)
	B. start xampp-control.exe and click start buttons next to both Apache and MySQL
	C. Type in http://localhost:8080/index.html in a broswer and the website will be shown up if setup successfully
	D. In our project file, there should be a file called dbtest.sql. 
	   Copy the code of the whole file and open http://localhost:8080/phpmyadmin. 
	   Paste the sql code into console and press ctrl+enter to execute the sql code. This will create the database needed for the website.
	   (login/register,calendar functions only works fine when database setup correctly)
	E. Make sure no applications that uses the ports required are running, e.g. Skype.
		a. In the demonstration implementation, the Apache server uses port 8080
		b. the MySQL server uses port 3306
		c. port 403 may also be used by relevant processes
	F. Unblock any port that Windows notifies to unblock (May require administrator rights)	
	G. Open up the browser
	H. Type in http://localhost:8080/index.html
	I. To access backend management
		a. In the browser navigate to http://localhost:8080/phpmyadmin/
		


