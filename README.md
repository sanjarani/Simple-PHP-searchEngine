Search Entire DB
===

Search Engine for huge DataBases...<br>
Using this class is quite easy: just make an object and give these arguments :
<br><br>
Arguments:
<br><br>
`1/DB name`<br>
`2/Username`<br>
`3/Password`<br>
`4/Column Name that you want to search or give it NULL if you want to search all fields`<br>
`5/The text that you are looking for` <br>( You can search an integer value but becareful because the search result will be as string.... )<br><br>

Sample: `$obg = new searchEntireDB(DBName, userName, password, columnName, targetText);`<br><br>

and then use the result;<br><br>

that's it...<br><br>

<h4><em>How to use result:</em></h4><br>
There are `two` `propeties` for check and use search result,<br><br>

first :<h5>`$obj->_finalResult`</h5> that's an array contains search result

second : <h5>`$obj->_reports`</h5> that contains report about search. The report is associative array that have these `indexes:`<br>
	`I-->   'emptyDBs'` if there was empty table(s)<br><br>
	`II-->  'result'` that's nested array structured like this: <h3>&dArr;</h3><br>
	          		 
	         		  
	        	 'tableName1' =>
					array (size=1)
					  'Column Name' => string 'SearchResult'
				 'tableName2' => <br>
					array (size=1)
					  'Column Name' => string 'SearchResult'
				 'tableName n' => <br>
					array (size=1)
					  'Column Name' => string 'SearchResult'
					  
					  
					  
`III--> The name of tables have value;` structured like this: <h3>&dArr;</h3> <br>
			 `'notEmpty' => `<br>
			 
				  array <br>
					 0 => string 'tableName1'<br>
					 1 => string 'tableName2'<br>
					 2 => string 'tableName3'<br>
					 3 => string 'tableName n'<br><br>
					 
         
			☼ notEmpty shows which table(s) is(are) not empty...
			
<h6>`If you are not sure that which column have the right value, just give NULL to 4th argument...`</h6>	 <br>
<h6>`Author :`</h6> <h4>`Kiyarash Sanjarani Vahed`</h4><br>
E-mail : ksvahed@gmail.com, info@ksvahed.ir, kiarash.3tar@gmail.com<br>
website: ksvahed.ir<br><br>

Please feel free to improve and use this class and please let me know if you found bug or problem...


Enjoy the life...

