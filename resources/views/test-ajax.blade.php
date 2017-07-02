<!DOCTYPE html>
<html>
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}" />

</head>
<body>

<div id="div1"><h2>Let jQuery AJAX Change This Text</h2></div>

<button>Get External Content</button>


</body>
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $("button").click(function(){
        $.post("/test",
            {
                name: "Donald Duck",
                city: "Duckburg"
            },
            function(data, status){
                alert("Data: " + data + "\nStatus: " + status);
            });
    });
</script>
</html>
