

<title>Eagle BOM/Pricing/Ordering ULP</title>
<meta name="KEYWORDS" content="Eagle, BOM, Pricing, Ordering, Digi-Key">
<meta name="DESCRIPTION" content="Eagle ULP for generating BOMs, getting component pricing, and generating online orders.">

<div class="StdPageSidebar">
This is the help page for the ULP we've written to get real-time component pricing
and generate online component orders directly from our Eagle schematics.
<p>
You can download the ULP <a href="../static/media/oss/tool_bom_03072011.zip">here</a>.
</div>

<div class="StdPageBody">
<p align="center">
<img src="../static/media/oss/tool_bom_03072011.png" alt="bom-xs.ulp dialog"/>
</p>
<h1>How to Generate the Bill Of Materials</h1>  
<h2><a name="Build_Quantity">Build Quantity</a></h2> 
<p>Enter the number of boards to be built in the <b>Build Quantity</b> field. 
<h2><a name="List_Types">List Types</a></h2> 
<p> 
The BOM format is selected by clicking one of the following radio buttons. 
<ul> 
<li> 
<b>Parts:</b> The BOM consists of a list of parts with each part on its own line. 
</li> 
<li> 
<b>Values:</b> The BOM consists of a list of values where all the parts with  
the same value are grouped together on one line. 
</li> 
<li> 
<b>Manf:</b> This BOM format is similar to Values with the addition of the  
manufacturer's name and their part number. This format is useful for sending to distributors to get quotes. 
</li> 
<li> 
<b>Manf+Distributors:</b> This BOM format is similar to Manf with the  
ordering codes for both Digi-Key and Mouser added. 
</li> 
<li> 
<b>Digi-Key Order:</b> This generates a parts list that can be input directly into  
Digi-Key's BOM Manager. 
</li> 
<li> 
<b>Mouser Order:</b> This generates a parts list that can be input directly into  
Mouser's BOM import tool. 
</li> 
<li> 
<b>Part Kit Labels:</b> This generates a list of labels that can be applied  
to parts before they are shipped to an assembly house. (This is XESS-specific.) 
</li> 
</ul> 
<h2><a name="Output_Formats">Output Formats</a></h2> 
<p> 
You have the following output formats available when you view or save a BOM: 
<ul> 
<li> 
<b>Text:</b> Straight ASCII text with no formatting. 
</li> 
<li> 
<b>HTML:</b> HTML-encoded text for inclusion in documents. 
</li> 
<li> 
<b>CSV:</b> Comma-separated-values for importing into spreadsheets. 
</li> 
</ul> 
<h2>Actions</h2> 
<p> 
The buttons along the bottom of the dialog box perform the following actions: 
<ul> 
<li> 
<b>View:</b> Opens a window where you can view the BOM in a format determined by the <a href="tool_bom_03072011.php#List_Types">List Type</a>  
and <a href="tool_bom_03072011.php#Output_Formats">Output Format</a> radio buttons. 
</li> 
<li> 
<b>Save...:</b> Opens a dialog where you can specify a file to store the BOM. 
</li> 
<li> 
<b>Prices:</b> Fetches and displays quantity-based component pricing from Digi-Key. 
</li> 
<li> 
<b>Order:</b> Opens the appropriate order-entry page and displays the BOM in the required import format. 
</li> 
<li> 
<b>Edit:</b> Opens a dialog where you can edit information from a database you have loaded. 
</li> 
<li> 
<b>Help:</b> Brings up this help screen. 
</li> 
<li> 
<b>Close:</b> Terminates the BOM tool. 
</li> 
</ul> 
<h2>Common BOM Operations</h2> 
<h3>Preparing the Schematic</h3>  
You will need to add the following attributes to the parts in your schematic if you want to use the real-time pricing  
or online ordering features:  
<ul>  
<li>  
<b>MANF:</b> This attribute holds the name of the manufacturer for the part.  
</li>  
<li>  
<b>MANF#:</b> This attribute holds the manufacturer's part number.  
</li>  
<li>  
<b>DIGIKEY#:</b> This attribute holds the Digi-Key part number.  
</li>  
<li>  
<b>MOUSER#:</b> This attribute holds the Mouser part number.  
</li>  
</ul> 
<p> 
The bad news is you have to lookup and enter these attributes for all the parts in your schematic  
that you want included in the real-time pricing and/or the online ordering.  
To assist with this chore, use the <b>attrib-copy</b> ULP to copy the attributes from a single part  
across all identical parts.  
<p> 
To save effort, you can also add these attributes directly to the parts in the library.  
But this won't work if it's a generic part like a resistor whose resistance value will affect it's part number.  
It also won't work for ICs that have multiple package options (for example, SOIC and TSSOP)  
since those also affect the part number.  
<p> 
The good news is you don't need to enter all these attributes for every part to use the ordering/pricing features.  
For example, parts without a Mouser part number simply aren't included in a Mouser order list.  
<h3>Viewing the BOM</h3> 
<p> 
Click on the <b>Vie<u>w</u></b> button to get a preview of the BOM output.  
Use the <a href="tool_bom_03072011.php#List_Types">List Type</a>  
and <a href="tool_bom_03072011.php#Output_Formats">Output Format</a> radio buttons to change how the BOM is displayed. 
<h3>Saving the BOM</h3> 
<p> 
Click on the <b><u>S</u>ave</b> button to save the BOM to a file.  
Use the <a href="tool_bom_03072011.php#List_Types">List Type</a>  
and <a href="tool_bom_03072011.php#Output_Formats">Output Format</a> radio buttons to select the format and type of data to store. 
<h3>Pricing the BOM</h3> 
<p> 
Click on the <b>Price</b> button to get current pricing information from Digi-Key.  
Pricing will be adjusted based on the quantity you have entered in the <a href="tool_bom_03072011.php#Build_Quantity">Build Quantity</a> field.  
(Pricing from Mouser is not currently supported.) 
<h3>Ordering Parts</h3> 
<p> 
To order parts for your design from Digi-Key or Mouser, select either the  
<b>Digikey Order</b> or <b>Mouser Order</b> radio button in the <b>List Type</b> box and  
then click on the <b>Order</b> button.  
This will open the appropriate order-entry web page in your default browser and  
display a dialog window with your BOM in the correct import format.  
(You will have to register and login to each site before you can reach the order-entry page.)  
Select the parts list in the <b>Parts Order</b> window.  
Then right-click on the selection and pick <b>Copy</b> from the pop-up menu that appears.  
Go to the order-entry field in your browser and paste the parts list.  
Then proceed to complete the order on the particular site you've chosen. 
<h3>Database Operations</h3> 
<p> 
You can pull in additional information about the used parts by loading 
a database file with the <b><u>L</u>oad</b> button. 
<p> 
A database file must consist of lines of text, each of which contains 
one record consisting of CSV (<u>C</u>omma <u>S</u>eparated <u>V</u>alues) 
or TSV (<u>T</u>ab <u>S</u>eparated <u>V</u>alues) data. 
The very first line must contain a \"header\", which defines a unique name for 
each column, and the first column of every following line must contain 
a unique (non-empty) key for this record. 
<p> 
An example for a valid database file would be: 
<pre> 
Key              Manufacturer       Order Code Price 
74LS00N          Texas Instruments  123-456    0.20 
R-EU_0204/5:4k7  Somebody           RES4k7     0.10 
</pre> 
Note that the columns are separated by a <b>tab</b> character (you may also 
use a semicolon (';') to separate the columns, but then you will have to make sure 
none of the data items contains a semicolon). 
The keys for looking up records in the database are built from the 
parts' values. If a part's device has defined \"value on\" it means that 
the user needs to specify a particular value for this part, as for 
example with a resistor. In such a case the key consists of the device 
name and the user defined value, separated by a colon (':'). If the 
device has \"value off\", only the device name is used as key (if the 
user has edited the value of such a part and insisted on changing 
it, the edited value will be used). 
<h4>Creating a new database</h4> 
<p> 
Click on the <b><u>N</u>ew</b> button to create a new database. 
You will get a dialog in which you can define the names of the column headers 
for your new database. The first column always contains the key for database 
lookups and can't be deleted (you can edit it, though, to give it a different 
name than the default \"Key\"). This first column will not be visible in the 
generated list, so you don't really need to worry about it. 
<h4>Editing the database</h4> 
<p> 
If you have loaded a database you can either double click on a line 
in the list, or select a line and press Enter (or click on the <b>Edit</b> 
button) to bring up a dialog in which you can edit the database entry 
for this part. If the database has been modified you will be asked if 
you want to save it before leaving the program or loading a new database. 
<h1>Authors</h1> 
<p> 
Original Author: <a href="mailto:support@cadsoft.de?subject=bom-xs ULP">support@cadsoft.de</a> 
<p> 
Modified by: Dave Vandenbout / XESS Corp. - <a href="mailto:devb@xess.com?subject=bom-xs ULP">devb@xess.com</a> 

</div>


