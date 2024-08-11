</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  <script type="text/JavaScript">
    let nameElement = document.getElementsByName("name")[0];
    let lis = document.getElementsByTagName("li");

    for (let i = 0; i < lis.length; i++) {
      let li = lis[i];
      if (li.textContent === nameElement.textContent) {
        li.classList.add("ad-active"); 
        break;
      }
    }
  </script>
  </body>
</html>