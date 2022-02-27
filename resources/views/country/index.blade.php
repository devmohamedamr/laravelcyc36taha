<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <select id="country" onchange="getcity()">
        <option>select country</option>
        @foreach($country as $c)
        <option value="{{$c->id}}">{{$c->name}}</option>
        @endforeach
    </select>

    <select id="city" style="display: none">

    </select>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js" integrity="sha512-n/4gHW3atM3QqRcbCn6ewmpxcLAHGaDjpEBu4xZd47N0W2oQ+6q7oc3PXstrJYXcbNU1OHdQ1T7pAP+gi5Yu8g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        function getcity(){
            let country = $("#country").find(":selected").val();
            $.ajax({
                "type":"get",
                "url":`getcity/${country}`,
                "success":function(data){
                    $("#city").css("display","block");
                    $("#city").html(data);
                },
                "error":function(){

                }
            });
        }
    </script>
</body>
</html>
