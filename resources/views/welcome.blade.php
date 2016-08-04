<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html" charset="utf-8"/>
    <title>Get Json Data</title>
    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    
</head>
<body>
    <button id="post">post ile veri al</button>

    <button id="get">get ile veri al</button>

    <div class="veri"></div>

    <script type="text/javascript">



    $("#post").click(function(){

        $.ajax({
            url: "{{ action('DefaultController@index') }}",
            type: "post",
            data: { _token: "{{ csrf_token() }}", url: "http://localhost/test.php" },
            success: function (data) {
                alert(JSON.stringify(data.veri[0].tags[1]));

            },
            error: function(jqXHR, textStatus, errorThrown) {
                console.log(textStatus, errorThrown);
            }
        })

    })



    

    /*    sonucAl() fonksiyonu sayesinde JSON ile verilerimizi çağırıyoruz.    */

    function sonucAl()

    {
     

    }

 </script>
</body>

</html>