<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>هناك طلب جديد</title>
</head>

<body>
    <h2>Order Code || {{$order['code']}}</h2>
    <h2>Order price || {{$order['total']}}</h2>
    {{-- @foreach (getProductOrder($order['id']) as $prodcut)
    <h2> Product || {{$prodcut['name']}}</h2>
    @endforeach --}}

    <br />
</body>
</body>

</html>