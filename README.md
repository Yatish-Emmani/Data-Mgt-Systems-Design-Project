<h1 text-align="center">City-Library-System-2020</h1>
<p>A full-fledge City Library system for a Librarian</p>

Features:

1.General - Easy to use GUI

2. Reader's Functions
      <li><em>Add to Cart</em> Functionality</li>
      <li>Borrow (single documents/ multiple documents)</li>
      <li>Reserve (single documents/ multiple documents)</li>
      <li>Return (single documents/ multiple documents)</li>
      <li>Search Documents by Document's name or by the Publisher's name </li>
      <li>Automatic Fine setting (Default Due-date: 20 days from document borrow date for each borrowed document)</li>
      <li>Automatic Deletion of Reserved Document (Default: by 6PM / at Library close time every day)</li>
      <li>Max Limit for Borrowing documents (Default: 10 documents per reader)</li>
3. Admin's Functions
 ● Add new Readers
 ● Add new Documents / Copies
 ● View all Library Branches (if any)
 ● Miscellaneous
 ● Taking Library Branch number and get the most popular book at the moment
 ● Taking Library Branch number and get the active reader for that libranch branch
 ● Most popular books of a given year
 ● Average Fine paid by the borrowers from in a given interval date

Installation Guide:
 ● Install Xampp: https://www.apachefriends.org/index.html
 ● Place the Frontend folder htdoc*: $INSTALL_PATH\xampp\htdocs
 ● Run Apache in XAMPP and then open a browser enter url address as,
   localhost/Frontend/, to view the app.

Open MySQL Admin:
1. `$ mysql -u root -p`
2. Then we need to give access like this:
   `mysql> SET GLOBAL local_infile = true;`
   `mysql> exit`
3. Command to use to populate database:
   `$ mysql --local-infile=1 -u root -p < initialize.sql`
$INSTALL_PATH = the path where XAMPP files are located*
