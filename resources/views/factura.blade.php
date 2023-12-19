<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ __('Factura') }} - {{ $recibo->created_at }}</title>
</head>

<body>
    <h1 style="text-align:center;">{{__('Factura')}}</h1>
    <table>
        <tr>
            <td>
                <p style="font-weight:bolder;">{{ __('Productos') }}</p>
            </td>
            <td>
                <?php
                $productoslista = explode(', ', $recibo->productos);
                ?>
                @foreach ($productoslista as $producto)
                    <p style="padding-left:50px;">
                        - {{ $producto }}
                    </p>
                @endforeach
            </td>
        </tr>
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
        <tr>
            <td>
                <p style="font-weight:bolder;">{{ __('Entrega') }}</p>
            </td>
            <td>
                <p style="padding-left:50px;">{{ __($recibo->direccion) }}</p>
            </td>
        </tr>
        <tr>
            <td>
                <p style="font-weight:bolder;">{{ __('Total') }}</p>
            </td>
            <td>
                <p style="padding-left:50px;">{{ number_format($recibo->total, 2, '.', '') }} €</p>
            </td>
        </tr>
    </table>
</body>

</html>
