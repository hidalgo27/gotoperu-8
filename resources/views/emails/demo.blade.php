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
Hello <i>{{ $design->receiver }}</i>,
<p>This is a demo email for testing purposes! Also, it's the HTML version.</p>

<p><u>Demo object values:</u></p>

<div>
    <p><b>Demo One:</b>&nbsp;{{ $design->demo_one }}</p>
    <p><b>Demo Two:</b>&nbsp;{{ $design->demo_two }}</p>
</div>

Thank You,
<br/>
<i>{{ $design->sender }}</i>
</body>
</html>
