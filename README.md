Search Entire DB
===

Search Engine for huge DataBases...
Using this class is quite easy: just make an object and give these arguments :

Arguments:

1/DB name
2/Username
3/Password
4/Column Name that you want to search or give it NULL if you want to search all fields
5/The text that you are looking for ( You can search an integer value but becareful because the search result will be as string.... )

Sample: $obg = new searchEntireDB(DBName, userName, password, columnName, targetText)

and then use the result;

that's it...

How to use result:
There is two propeties for check and use search result,

first : $obj->_finalResult that's an array contains search result

second : $obj->_reports that contains report about search. The report is associative array that have these indexes:
	I-->   'emptyDBs' if there was empty table(s)<br><br>
	II-->  'result' that's nested array structured like this:<br>
			 'result' => <br>
			  array <br>
				 'tableName1' => <br>
					array (size=1)<br>
					  'Column Name' => string 'SearchResult'<br>
				 'tableName2' => <br>
					array (size=1)<br>
					  'Column Name' => string 'SearchResult'<br>
				 'tableName n' => <br>
					array (size=1)<br>
					  'Column Name' => string 'SearchResult'<br><br>
	III--> The name of tables have value; structured like this:<br>
			 'notEmpty' => <br>
				  array <br>
					 0 => string 'tableName1'<br>
					 1 => string 'tableName2'<br>
					 2 => string 'tableName3'<br>
					 3 => string 'tableName n'<br><br>
         
			☼ notEmpty shows which table(s) is(are) not empty...
			
If you are not sure that which column have the right value, just give NULL to 4th argument...				 <br>
Author : Kiyarash Sanjarani Vahed<br>
E-mail : ksvahed@gmail.com, info@ksvahed.ir, kiarash.3tar@gmail.com<br>
website: ksvahed.ir<br><br>

Please feel free to improve and use this class and please let me know if you found bug or problem...


Enjoy the life...

