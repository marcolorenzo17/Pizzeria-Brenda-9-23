<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted' => 'El campo de :attribute debe ser aceptado.',
    'accepted_if' => 'El campo de :attribute debe ser aceptado cuando :other es :value.',
    'active_url' => 'El campo de :attribute debe ser una URL válida.',
    'after' => 'El campo de :attribute debe ser una fecha posterior a :date.',
    'after_or_equal' => 'El campo de :attribute debe ser una fecha posterior o igual a :date.',
    'alpha' => 'El campo de :attribute sólo puede contener letras.',
    'alpha_dash' => 'El campo de :attribute sólo puede contener letras, números, guiones, y barras bajas.',
    'alpha_num' => 'El campo de :attribute sólo puede contener letras y números.',
    'array' => 'El campo de :attribute debe ser una colección.',
    'ascii' => 'El campo de :attribute sólo puede contener caracteres y símbolos alfanuméricos de un solo bit.',
    'before' => 'El campo de :attribute debe ser una fecha anterior a :date.',
    'before_or_equal' => 'El campo de :attribute debe ser una fecha anterior o igual a :date.',
    'between' => [
        'array' => 'El campo de :attribute debe tener entre :min y :max objetos.',
        'file' => 'El campo de :attribute debe pesar entre :min y :max kilobytes.',
        'numeric' => 'El campo de :attribute debe ser un valor entre :min y :max.',
        'string' => 'El campo de :attribute debe tener entre :min y :max caracteres.',
    ],
    'boolean' => 'El campo de :attribute sólo puede ser verdadero o falso.',
    'confirmed' => 'El campo de confirmación de :attribute no coincide.',
    'current_password' => 'La contraseña es incorrecta.',
    'date' => 'El campo de :attribute debe ser una fecha válida.',
    'date_equals' => 'El campo de :attribute debe ser una fecha equivalente a :date.',
    'date_format' => 'El campo de :attribute debe seguir el formato de :format.',
    'decimal' => 'El campo de :attribute debe tener :decimal decimales.',
    'declined' => 'El campo de :attribute debe ser rechazado.',
    'declined_if' => 'El campo de :attribute debe ser rechazado cuando :other es :value.',
    'different' => 'Los campos de :attribute y :other deben ser diferentes.',
    'digits' => 'El campo de :attribute debe tener :digits dígitos.',
    'digits_between' => 'El campo de :attribute debe tener entre :min y :max dígitos.',
    'dimensions' => 'La imagen del campo de :attribute tiene dimensiones inválidas.',
    'distinct' => 'El campo de :attribute tiene un valor duplicado.',
    'doesnt_end_with' => 'El campo de :attribute no puede terminar en: :values.',
    'doesnt_start_with' => 'El campo de :attribute no puede empezar por: :values.',
    'email' => 'El campo de :attribute debe ser un correo electrónico válido.',
    'ends_with' => 'El campo de :attribute debe terminar en: :values.',
    'enum' => 'El valor de :attribute seleccionado no es válido.',
    'exists' => 'El valor de :attribute seleccionado no es válido.',
    'file' => 'El campo de :attribute debe ser un archivo.',
    'filled' => 'El campo de :attribute debe tener un valor.',
    'gt' => [
        'array' => 'El campo de :attribute debe tener más de :value objeto/s.',
        'file' => 'El campo de :attribute debe pesar más de :value kilobytes.',
        'numeric' => 'El campo de :attribute debe tener un valor mayor que :value.',
        'string' => 'El campo de :attribute debe tener más de :value caracteres.',
    ],
    'gte' => [
        'array' => 'El campo de :attribute debe tener :value objetos o más.',
        'file' => 'El campo de :attribute debe pesar :value kilobytes o más.',
        'numeric' => 'El campo de :attribute debe tener un valor mayor o igual a :value.',
        'string' => 'El campo de :attribute debe tener :value caracteres o más.',
    ],
    'image' => 'El campo de :attribute debe ser una imagen.',
    'in' => 'El valor seleccionado de :attribute no es válido.',
    'in_array' => 'El valor de :attribute debe estar presente en :other.',
    'integer' => 'El campo de :attribute debe ser un número entero.',
    'ip' => 'El campo de :attribute debe ser una dirección IP válida.',
    'ipv4' => 'El campo de :attribute debe ser una dirección IPv4 válida.',
    'ipv6' => 'El campo de :attribute debe ser una dirección IPv6 válida.',
    'json' => 'El campo de :attribute debe ser una cadena JSON válida.',
    'lowercase' => 'El campo de :attribute debe estar en minúsculas.',
    'lt' => [
        'array' => 'El campo de :attribute debe tener menos de :value objetos.',
        'file' => 'El campo de :attribute debe pesar menos de :value kilobytes.',
        'numeric' => 'El campo de :attribute debe ser menor que :value.',
        'string' => 'El campo de :attribute debe tener menos de :value caracteres.',
    ],
    'lte' => [
        'array' => 'El campo de :attribute no puede tener más de :value objetos.',
        'file' => 'El campo de :attribute debe tener un peso menor o igual a :value kilobytes.',
        'numeric' => 'El campo de :attribute debe ser menor o igual a :value.',
        'string' => 'El campo de :attribute debe tener :value caracteres o menos.',
    ],
    'mac_address' => 'El campo de :attribute debe ser una dirección MAC válida.',
    'max' => [
        'array' => 'El campo de :attribute no puede tener más de :max objetos.',
        'file' => 'El campo de :attribute no puede pesar más de :max kilobytes.',
        'numeric' => 'El valor de :attribute no puede ser mayor que :max.',
        'string' => 'El campo de :attribute no puede tener más de :max caracteres.',
    ],
    'max_digits' => 'El campo de :attribute no puede tener más de :max dígitos.',
    'mimes' => 'El campo de :attribute debe tener el formato: :values.',
    'mimetypes' => 'El campo de :attribute debe tener el formato: :values.',
    'min' => [
        'array' => 'El campo de :attribute debe tener al menos :min objetos.',
        'file' => 'El campo de :attribute debe pesar al menos :min kilobytes.',
        'numeric' => 'El valor mínimo de :attribute es :min.',
        'string' => 'El campo de :attribute debe tener al menos :min caracteres.',
    ],
    'min_digits' => 'El campo de :attribute debe tener al menos :min dígitos.',
    'missing' => 'El campo de :attribute no debe tener ningún valor.',
    'missing_if' => 'El campo de :attribute no puede tener ningún valor cuando :other es :value.',
    'missing_unless' => 'El campo de :attribute no puede tener ningún valor excepto cuando :other es :value.',
    'missing_with' => 'El campo de :attribute no puede tener ningún valor cuando :values están presentes.',
    'missing_with_all' => 'El campo de :attribute no puede tener ningún valor cuando :values están presentes.',
    'multiple_of' => 'El campo de :attribute debe ser un múltiplo de :value.',
    'not_in' => 'El valor de :attribute seleccionado no es válido.',
    'not_regex' => 'El formato del campo de :attribute no es válido.',
    'numeric' => 'El campo de :attribute debe ser un número.',
    'password' => [
        'letters' => 'El campo de :attribute debe contener al menos una letra.',
        'mixed' => 'El campo de :attribute debe contener al menos una letra en mayúsculas y otra en minúsculas.',
        'numbers' => 'El campo de :attribute debe contener al menos un número.',
        'symbols' => 'El campo de :attribute debe contener al menos un símbolo.',
        'uncompromised' => 'El valor de :attribute ha aparecido en una fuga de datos. Por favor, escoja otro valor para :attribute.',
    ],
    'present' => 'El campo de :attribute debe estar presente.',
    'prohibited' => 'El campo de :attribute está prohibido.',
    'prohibited_if' => 'El campo de :attribute está prohibido cuando :other es :value.',
    'prohibited_unless' => 'El campo de :attribute está prohibido excepto cuando :other está en :values.',
    'prohibits' => 'El campo de :attribute prohíbe que :other esté presente.',
    'regex' => 'El formato del campo de :attribute no es válido.',
    'required' => 'El campo de :attribute es obligatorio.',
    'required_array_keys' => 'El campo de :attribute debe contener entradas para: :values.',
    'required_if' => 'El campo de :attribute es obligatorio cuando :other es :value.',
    'required_if_accepted' => 'El campo de :attribute es obligatorio cuando :other está aceptado.',
    'required_unless' => 'El campo de :attribute es obligatorio excepto cuando :other está en :values.',
    'required_with' => 'El campo de :attribute es obligatorio cuando :values están presentes.',
    'required_with_all' => 'El campo de :attribute es obligatorio cuando :values están presentes.',
    'required_without' => 'El campo de :attribute es obligatorio cuando :values no está presente.',
    'required_without_all' => 'El campo de :attribute es obligatorio cuando :values no están presentes.',
    'same' => 'El campo de :attribute debe tener el mismo valor que el de :other.',
    'size' => [
        'array' => 'El campo de :attribute debe contener :size objetos.',
        'file' => 'El campo de :attribute debe pesar :size kilobytes.',
        'numeric' => 'El tamaño del campo de :attribute debe ser de :size.',
        'string' => 'El campo de :attribute debe tener :size caracteres.',
    ],
    'starts_with' => 'El campo de :attribute debe empezar en: :values.',
    'string' => 'El campo de :attribute debe ser una cadena.',
    'timezone' => 'El campo de :attribute debe ser una zona horaria válida.',
    'unique' => 'El valor de :attribute ya está en uso.',
    'uploaded' => 'Se ha producido un error al enviar el valor de :attribute.',
    'uppercase' => 'El campo de :attribute debe estar en mayúsculas.',
    'url' => 'El campo de :attribute debe ser una URL válida.',
    'ulid' => 'El campo de :attribute debe ser una ULID válida.',
    'uuid' => 'El campo de :attribute debe ser una UUID válida.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],

];
