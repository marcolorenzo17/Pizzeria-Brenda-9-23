<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ __('Recibo') }} - {{ $recibo->created_at }}</title>
</head>

<body>
    <h1>{{ __('RECIBO') }}</h1>

    <h2 style="text-align:right;">Pizzería Brenda</h2>
    <h4 style="text-align:right;">C/ Padre Lerchundi, 3</h4>
    <h4 style="text-align:right;">11550 - Chipiona (Cádiz)</h4>

    <p style="text-align:center;">{{ __('Entrega') }}: {{ __($recibo->direccion) }}</p>
    @if ($recibo->direccion == 'A domicilio')
        <p style="text-align:center;">{{ __('Dirección') }}: {{ Auth::User()->direccion }}</p>
    @endif

    <?php
    $productoslista = explode(', ', $recibo->productos);
    $cantidadeslista = explode(', ', $recibo->cantidades);
    $precioslista = explode(', ', $recibo->precios);
    ?>
    <table style="width:100%;">
        <tr>
            <td>
                <p style="font-weight:bolder;">{{ __('Productos') }}</p>
            </td>
            <td>
                <p style="font-weight:bolder;">{{ __('Cantidad') }}</p>
            </td>
            <td>
                <p style="font-weight:bolder;">{{ __('Precio') }}</p>
            </td>
        </tr>
        @foreach (range(0, count($productoslista) - 1) as $index)
            <tr>
                <td>
                    <p>{{ $productoslista[$index] }}</p>
                </td>
                <td>
                    <p>{{ $cantidadeslista[$index] }}</p>
                </td>
                <td>
                    <p>{{ $precioslista[$index] }}</p>
                </td>
            </tr>
        @endforeach
    </table>
    <table>
        <tr>
            <td>
                <p style="font-weight:bolder;">{{ __('Pizzacoins obtenidas') }}</p>
            </td>
            <td>
                <p style="padding-left:50px;">{{ round($recibo->total * 10) }}</p>
            </td>
        </tr>
        <tr>
            <td>
                <p style="font-weight:bolder;">{{ __('Pizzacoins gastadas') }}</p>
            </td>
            <td>
                <p style="padding-left:50px;">{{ $recibo->puntos }}</p>
            </td>
        </tr>
    </table>

    <h2 style="text-align:right;">{{ __('Total') }}: {{ number_format($recibo->total, 2, '.', '') }} €</h2>
</body>

</html>
