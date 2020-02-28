<html>
<head>
    
<title>::SMART HOUSE::</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<STYLE type=text/css>
BODY {
	PADDING-RIGHT: 0px; PADDING-LEFT: 0px; PADDING-BOTTOM: 0px; MARGIN: 0px; FONT: 14pt arial, helvetica,verdana; COLOR: #000000; PADDING-TOP: 0px; BACKGROUND-COLOR: #ffffff
}

.thead {
	FONT: bold 11px tahoma, arial, helvetica,verdana; COLOR: #ffffff; BACKGROUND-COLOR: #336699
}

.alt2 {
	FONT: bold 16px arial, helvetica,verdana; COLOR: #000000; BACKGROUND-COLOR: #e3f1ff
}

.wysiwyg {
	FONT: 10pt arial, helvetica,verdana; COLOR: #000000; BACKGROUND-COLOR: #e3f1ff
}


</STYLE>

</head>

<body>

<table width="500" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr> 
    <td height="50" align="left"><img src="house1.jpeg" width="169" height="119"  ></td>
  </tr>
</table>

<table width="700" border="0" align="center" bordercolor="#E3F1FF" bgcolor="#CCCCCC" class="wysiwyg">
  <tr> 
    <td width="900" height="70" align="center" class="thead">LES LAMPES <br>    </td>
  </tr>
</table>



<table width="700" border="0" align="center" cellpadding="0" cellspacing="0" class="alt2">
  <tr> 
    <td height="180" valign="middle">

      <table width="700" height="110" border="0" align="center" cellpadding="0" cellspacing="0" class="alt2">
        <tr align="center"> 
          
		  
		<p>&nbsp;</p> 
	
    <td width="900" height="70" align="center" class="thead">TEMPERATURE ET HUMIDITE <br>      </td>
  
         <form method="get" action="house.php">
                 <input type="submit" value="L 1"  style=" width: 150px; height:50px; font-size:50px; "name="on1">
               
     
         </form>
	 
	 
         <?php
          

         if(isset($_GET['on1'])){
                         shell_exec('sudo python relayScript19.py');
			$setmode19 = shell_exec('sudo  python relayStatus19.py');


               }

        $setmode19 = shell_exec('sudo  python relayStatus19.py');

         if ($setmode19==0)
           {  
        
              print '<img src="on.png" alt="texte alternatif"  style=" width: 100px; height:50px; font-size:20px;"/>';
             
              }
         else
           { 
              print '<img src="off.png" alt="texte alternatif"  style=" width: 100px; height:50px; font-size:20px;"/>';
               }

       

         ?>       
         
	<form method="get" action="house.php">
                 <input type="submit" value="L 2"  style=" width: 150px; height:50px; font-size:50px; "name="on2">
               
     
         </form>
	 
	 <?php
         
        if(isset($_GET['on2'])){
                         shell_exec('sudo python relayScript13.py');
                        

                 $setmode13 = shell_exec('sudo  python relayStatus13.py');
         }
         

         $setmode13 = shell_exec('sudo  python relayStatus13.py');

         if ($setmode13==0)
           {  
        
              print '<img src="on.png" alt="texte alternatif"  style=" width: 100px; height:50px; font-size:20px;"/>';
              
              }
         else
           { 
              print '<img src="off.png" alt="texte alternatif"  style=" width: 100px; height:50px; font-size:20px;"/>';
               }

        


         ?>  
	 <p>&nbsp;</p>
	 
	 
             <tr align="center"> 
		                 <td class="titresmain2"><div align="center"> </div>
		 <form method="get" action="house.php">
	        <input type="submit" value="ok"  style=" width: 120px; height:40px; font-size:30px; "name="go">

		</form>
   		
		</td>
	     
	     
              <tr align="center"> 
		 	 
		 
                <td class="titresmain2"><div align="center">Température</div>
		
		              
	 
		
		<?php 	
		
		if(isset($_GET['go'])){
		  $sensor[1]=shell_exec('sudo python temperature.py');
		  echo '<span style="font-size: 25pt">' . $sensor[1] . '</span>';
		
        
	  }  ?>
	   
		
		</td>
		
	
                <td class="titresmain2"><div align="center">
                 
                </div></td>
              </tr>
	      
	      
	       <tr align="center"> 
                <td class="titresmain2"><div align="center">Humidité</div>
		<?php 	
		if(isset($_GET['go'])){
		 $sensor[0]=shell_exec('sudo python humidite.py');
		 

echo '<span style="font-size: 25pt">' . $sensor[0] . '</span>';
		
		
         
	    }  ?>
		
		</td>
                <td class="titresmain2"><div align="center">
                 
                </div></td>
              </tr>
	      
	      
              
          </table>
		  </form>		  </td>
        </tr>
      </table>
    </td>
  </tr>
</table>
<table width="700" border="0" align="center" class="tborder">
  <tr> 
    <td align="center" class="thead">SMART HOUSE</td>
  </tr>
</table>



</body>
</html>
