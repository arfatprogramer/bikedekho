<footer>
   <div class="container">
   <div><center><h2>This Website created By Mo Arfat Ansari</h2>
   <h3>All CopyRight Goes to Mo Arfat</h3></center></div>
    
   </div>

</footer>
<script type="text/JavaScript">
    let nameElement = document.getElementsByName("name")[0];
    let lis = document.getElementsByTagName("li");

    for (let i = 0; i < lis.length; i++) {
      let li = lis[i];
      if (li.textContent === nameElement.textContent) {
        document.title=li.textContent;
        li.classList.add("active"); 
        
        break;
      }
    }

    function close_alert(){
      document.getElementById('close-alert').remove();
      
    }

  </script>
</body>

</html>