<!DOCTYPE html>
<html>
  <center>
    <header>
        <link rel="stylesheet" href="google_search.css">
        
    </header>
    
    <body>
    <div class="logo">
      <img alt="Google" src="https://www.google.com/images/branding/googlelogo/1x/googlelogo_color_272x92dp.png">
    </div>
    <div class="bar">
      <input class="searchbar" type="text" title="Search">
      <a href="#"> <img class="voice" src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/e8/Google_mic.svg/716px-Google_mic.svg.png" title="Search by Voice"></a>
    </div>
    <div class="buttons">
      <button class="button" type="button" onPressed = "get_data_using_Ajax()">Google Search</button>
      <button class="button" type="button">I'm Feeling Lucky</button>
     </div>

     <script>
            function get_data_using_Ajax(){
                var q=document.getElementById('god').value;
                var xmlhttp= new XMLHttpRequest();
                xmlhttp.onreadystatechange=function(){
                    if(this.readyState==4 && this.status==200){
                        document.getElementById('god_result').innerHTML=this.responseText
                        console.log(this.responseText);
                
                    }
                }
                xmlhttp.open("GET","ajax_server.php?search="+q, true);
                xmlhttp.send();
            }
        </script>
  </body>