to Run Shopping Cart Project on localhost: <br><br>

<ul>1- Download Shopping Cart ZIP file 'shopping-cart.zip'. </ul>
<ul>2- open termenal from project folder.</ul>
<ul>3- Check whether everything has been installed correctly (git , node , npm and composer).</ul>
<ul>4- Run Mysql on your PC.</ul>
<ul>5- Create a database called "control-panal".</ul>
<ul>6- Change the .env file settings to fit your database settings (such as DB_PORT).</ul>
<ul>
	7- Run commands:<br>
	 <li>	 $ composer install</li>
	 <li>	 $ npm install</li>
	 <li>	 $ npm install --no-bin-links</li>
	 <li>	 $ php artisan migrate</li>
	 <li>	 $ php artisan db:seed</li>
	 <li>	 $ php artisan serve</li>
</ul>
<ul>8- Now you can go to your browser and open project link (Project like such as http://localhost:8000).</ul>
<br><br>
User Types:<br><br>

 Admin can: <br>
<ul>1- See all types of users . </ul>
<ul>2- Reset the password for users and set privileges (set user as "admin , assist or normal user").</ul>
<ul>3- See , add , delete or update products.</ul>
<ul>4- See , add , delete or update Bills.</ul>

 Assist can: <br>
<ul>3- See products.</ul>
<ul>4- See and Add Bills.</ul>
<br>

Admin and assist can create Bill . Bill has total price before discount , total price , discount , notes , customer name ,
and products . (Number of products set dynamically)<br>
each Product in bill has id, name, price, amount, total price and notes. 
admin and assist can't set price or total price of products. it set dynamically depends on price of product (in table products). 



