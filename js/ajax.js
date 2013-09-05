function getData(table, mode)
{
	mode = mode || "match";
	
	$.ajax(
	{                                      
		url: 'fetch_data.php?table=' + table,                  //the page to send and recieve data from        
		data: "",                                                 //url argumnets									   
		dataType: 'json',                                         //data format      
	  
		success: function(data)          						  //on succcessfully recieving data...
		{
			var output="";
			var match_output="";
			var match = "/home";									  	//The string by which to check the column text matches with
			var match_col = 4;											//The column number by which to check it's text matches the variable "match"
			
			for(i = 0; i<data.length;i++)
			{
				for(j = 0; j<data[i].length;j++) 				 		//get all sub arrays (j = columns) within the initial array (i = rows)
				{
					output += data[i][j]+"</br>";	             		//Add all data to the output variable
					
					if(match === data[i][4])				 			//Add data to match_output only if it matches variable 'match'...
					{
						match_output += data[i][j] + "</br>";
					}
				}
				output+="</br>";								//Add line breaks to the end of variable
				match_output+="</br>";
			}	
		
		if(mode === "match")
		{
			$('#output').html(match_output); 				//Set element "output"'s html to the content of the matching rows
			console.log(match_output);
		}
		else if(mode === "all")
		{
			$('#output').html(output); 				//Set element "output"'s html to the content of the matching rows
			console.log(output);   
		}                  
	  } 
	});
}

getData("running_man", "all");