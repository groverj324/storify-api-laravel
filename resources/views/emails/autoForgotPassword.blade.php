<!DOCTYPE html>
<html>

<head>
    <!-- <title>{{config('app.name')}}</title> -->
    <title>Password for Storify Account</title>
</head>

<body>
    <p style="font-family:calibri;color:black">Hi {{$mailData['name']}}, <br /> 
    Your Storify password has been changed successfully. <br /> 
    You can access your purchase here:
        <a href="{{url('login')}}" style="text-decoration: underline;">{{url('login')}}</a>
        using the these credentials: <br/>
        Email: {{$mailData['email']}} <br />
        Password: {{$mailData['password']}}</p>
    <p style="font-family:calibri;color:black">In case you have any questions, feel free to reach out at:
        <a href="mailto:max@maxgerstenmeyer.com" style="text-decoration: underline;">max@maxgerstenmeyer.com</a>
    </p>
    <p style="font-family:calibri;color:black">Best,
        <br /> Max from Storify
    </p>




</body>

</html>
