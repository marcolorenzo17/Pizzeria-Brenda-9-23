<?php
$productoslista = str_replace("¬", ", ", $productos);
?>
{{__('Usuario:')}} {{$user}}<br>
{{__('Productos comprados:')}} {{$productoslista}}<br>
{{__('Pizzacoins obtenidas:')}} {{$pcob}}<br>
{{__('Pizzacoins gastadas:')}} {{$pcga}}<br>
{{__('Coste:')}} {{$coste}} €<br>
{{__('Entrega:')}}
@if ($direccion == "C/ Padre Lerchundi, 3")
    {{__('Recoger en Pizzería')}}
@else
    {{__('A domicilio')}}
@endif
