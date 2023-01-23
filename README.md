<h1 text-align="center">The-City-Library-Managemnt-System</h1>
<p>A full-fledge City Library system for a Librarian</p>

Features:

1. General - Easy to use GUI

2. Reader's Functions
      <ul>
      <li><em>Add to Cart</em> Functionality</li>
      <li>Borrow (single documents/ multiple documents)</li>
      <li>Reserve (single documents/ multiple documents)</li>
      <li>Return (single documents/ multiple documents)</li>
      <li>Search Documents by Document's name or by the Publisher's name </li>
      <li>Automatic Fine setting (Default Due-date: 20 days from document borrow date for each borrowed document)</li>
      <li>Automatic Deletion of Reserved Document (Default: by 6PM / at Library close time every day)</li>
      <li>Max Limit for Borrowing documents (Default: 10 documents per reader)</li>
      </ul>
3. Admin's Functions
      <ul>
      <li>Add new Readers</li>
      <li>Add new Documents / Copies</li>
      <li>View all Library Branches (if any)</li>
4. Miscellaneous
      <ul>    
      <li> Taking Library Branch number and get the most popular book at the moment</li>
      <li> Taking Library Branch number and get the active reader for that libranch branch</li>
      <li> Most popular books of a given year</li>
      <li> Average Fine paid by the borrowers from in a given interval date</li>
      </ul>

Installation Guide:
      <ul>    
      <li>Install Xampp: https://www.apachefriends.org/index.html</li>
      <li>Place the Frontend folder htdoc*: $INSTALL_PATH\xampp\htdocs</li>
      <li>Run Apache in XAMPP and then open a browser enter url address as, localhost/Frontend/, to view the app.</li>
      </ul>

Open MySQL Admin:
      <ul>
      <li>`$ mysql -u root -p`</li>
      <li>Then we need to give access like this:</li>
      <li>`mysql> SET GLOBAL local_infile = true;`</li>
      <li>`mysql> exit`</li>
      <li>Command to use to populate database:</li>
      <li>`$ mysql --local-infile=1 -u root -p < initialize.sql`</li>
      </ul>
$INSTALL_PATH = the path where XAMPP files are located*
