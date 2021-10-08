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
<p>  {{$eventName}}</p>
<p>  {{$bandNames}}</p>
<p>   {{$startDate}}</p>
<p>{{$endDate}}</p>
<p>{{$portfolio}}</p>
<p>{{$ticketPrice}}</p>
@switch($status)
    @case(1)
    <p>Đang diễn ra</p>
    @break
    @case(2)
    <p>Sắp diễn ra</p>
    @break
    @case(3)
    <p>Đã diễn ra</p>
    @break
    @case(0)
    <p>Tạm hoãn</p>
    @break
    @default
    <p>Chọn lại</p>
    @break
@endswitch
</body>
</html>
