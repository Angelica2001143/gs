<!DOCTYPE html>
<html>

<head>
    <style>

        h2 {
            color: blue;
        }

    </style>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script>
        $(document).ready(function() {
            $("button").click(function() {
                $("#div1").load("demo.html");
              $(".btn").hide();
            });
           
        });
        $(document).ready(function() {
            $("#myInput").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $("#myTable tr").filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
               
            });
         
         
        });
      
    </script>

</head>
<center>
    
<body>

<h2>LOAD AND FILTER TABLE</h2>
<p>TYPE HERE TO SEARCH SOMETHING FROM THE TABLE :</p>
<input id="myInput" type="text" placeholder="Search...">
<!-- placeholder for filtering -->
<br><br>
<div id="div1">

</div>
<br>
<button class="btn">TABLE</button>
<!-- button for load -->


</body>
</center>

</html>