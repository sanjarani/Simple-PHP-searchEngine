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
	I-->   'emptyDBs' if there was empty database(s)
	II-->  'result' that's nested array structured like this:
			 'result' => 
			  array 
				 'tableName1' => 
					array (size=1)
					  'Column Name' => string 'SearchResult'
				 'tableName2' => 
					array (size=1)
					  'Column Name' => string 'SearchResult'
				 'tableName n' => 
					array (size=1)
					  'Column Name' => string 'SearchResult'
	III--> The name of tables have value; structured like this:
			 'notEmpty' => 
				  array 
					 0 => string 'tableName1'
					 1 => string 'tableName2'
					 2 => string 'tableName3'
					 3 => string 'tableName n'
         
			☼ notEmpty shows which table(s) is(are) not empty...
			
If you are not sure that which column have the right value, just give NULL to 4th argument...				 
Author : Kiyarash Sanjarani Vahed
E-mail : ksvahed@gmail.com, info@ksvahed.ir, kiarash.3tar@gmail.com
website: ksvahed.ir

Please feel free to improve and use this class and please let me know if you found bug or problem...


Enjoy the life...

