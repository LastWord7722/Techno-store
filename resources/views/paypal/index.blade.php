@extends('layouts.layouts')
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pay status</title>
    <link rel="stylesheet" href={{asset("plugins/css/bootstrap.5.1.1.min.css")}}>
    <script src="https://www.paypal.com/sdk/js?client-id={{env('PAYPAL_SANDBOX_CLIENT_ID')}}"></script>

</head>
<body>
@section('Content')

    @if(\Session::has('error'))
        <div class="alert alert-danger">{{ \Session::get('error') }}</div>
        {{ \Session::forget('error') }}

    @endif
    <div>
        <h2 style="margin-top: 10%">
            C вами приятно иметь дело
        </h2>
        <h3>
            Вернуться к покупкам
        </h3>
        <a href={{route("main.index")}}>
        <button class="btn btn-success"> Назад</button>

        </a>
    </div>

    @if(\Session::has('success'))
        <div class="alert alert-success">{{ \Session::get('success') }}</div>
        {{ \Session::forget('success') }}
    @endif
@endsection

</body>
