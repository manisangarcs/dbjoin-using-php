<html>
    <head>
    <?php include_once 'head.php'?>
    </head>
    <body>
        <center>
        
             <br/><br/><br/><p id='space'></p><br/><br/><br/>
             <button type='submit' class='btn btn-primary' onclick='myfunction()'>next</button>
             
            <script>
               var i = 0;
                var out= [];
                var fruits = ["1", "2", "3", "4","5","6","7","8","9","10","11", "12", "13", "14","15","16","17","18","19","20"];
                 function myfunction(){
                     var d = parseInt(fruits.length/10);
                     var j;
                     
                     for(j=0;j<d;j++){
                         
                        while(i<d){
                            out[i]=fruits[]; 
                            i++;
                        }
                     
                     }
                    
                     document.getElementById("space").innerHTML = d+' '+out;
                }
                
            </script>
            
        </center>
    </body>
</html>
