<!DOCTYPE html>
<html>
    <head>
        <title>Autocomplete</title>
        
        <!-- load jquery ui css-->
        <link href="jquery-ui.min.css" rel="stylesheet" type="text/css" />
        <!-- load jquery library -->
        <script src="jquery-1.11.3.min.js"></script>
        <!-- load jquery ui js file -->
        <script src="jquery-ui.min.js"></script>

        <script type="text/javascript">
        $(function() {
            var availableTags = <?php include('autocomplete.php'); ?>;
            $("#origin").autocomplete({
                source: availableTags,
                autoFocus:true
            });
            $("#destination").autocomplete({
                source: availableTags,
                autoFocus:true
            });
        });
        </script>
    </head>
    <body>
        <div class="container">
        <form  method="post" action="airclientDB.php"  id="searchform">
            <fieldset>
                <label>Origin</label>
                    <input id="origin" type="text" placeholder = "From" size="50" required/></br>
                <label>Destination</label>
                    <input id="destination" type="text" placeholder = "To" size="50" required/></br>
                <label>Date</label>
                    <input name="date" type="date" required /> <br>
            </fieldset>    
        </form>
    </div>
    </body>
</html>