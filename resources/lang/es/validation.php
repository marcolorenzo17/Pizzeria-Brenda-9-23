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
    'missing' => 'The :attribute field must be missing.',
    'missing_if' => 'The :attribute field must be missing when :other is :value.',
    'missing_unless' => 'The :attribute field must be missing unless :other is :value.',
    'missing_with' => 'The :attribute field must be missing when :values is present.',
    'missing_with_all' => 'The :attribute field must be missing when :values are present.',
    'multiple_of' => 'The :attribute field must be a multiple of :value.',
    'not_in' => 'The selected :attribute is invalid.',
    'not_regex' => 'The :attribute field format is invalid.',
    'numeric' => 'The :attribute field must be a number.',
    'password' => [
        'letters' => 'The :attribute field must contain at least one letter.',
        'mixed' => 'The :attribute field must contain at least one uppercase and one lowercase letter.',
        'numbers' => 'The :attribute field must contain at least one number.',
        'symbols' => 'The :attribute field must contain at least one symbol.',
        'uncompromised' => 'The given :attribute has appeared in a data leak. Please choose a different :attribute.',
    ],
    'present' => 'The :attribute field must be present.',
    'prohibited' => 'The :attribute field is prohibited.',
    'prohibited_if' => 'The :attribute field is prohibited when :other is :value.',
    'prohibited_unless' => 'The :attribute field is prohibited unless :other is in :values.',
    'prohibits' => 'The :attribute field prohibits :other from being present.',
    'regex' => 'The :attribute field format is invalid.',
    'required' => 'El campo de :attribute es obligatorio.',
    'required_array_keys' => 'The :attribute field must contain entries for: :values.',
    'required_if' => 'The :attribute field is required when :other is :value.',
    'required_if_accepted' => 'The :attribute field is required when :other is accepted.',
    'required_unless' => 'The :attribute field is required unless :other is in :values.',
    'required_with' => 'The :attribute field is required when :values is present.',
    'required_with_all' => 'The :attribute field is required when :values are present.',
    'required_without' => 'The :attribute field is required when :values is not present.',
    'required_without_all' => 'The :attribute field is required when none of :values are present.',
    'same' => 'The :attribute field must match :other.',
    'size' => [
        'array' => 'The :attribute field must contain :size items.',
        'file' => 'The :attribute field must be :size kilobytes.',
        'numeric' => 'The :attribute field must be :size.',
        'string' => 'The :attribute field must be :size characters.',
    ],
    'starts_with' => 'The :attribute field must start with one of the following: :values.',
    'string' => 'The :attribute field must be a string.',
    'timezone' => 'The :attribute field must be a valid timezone.',
    'unique' => 'El :attribute ya está en uso.',
    'uploaded' => 'The :attribute failed to upload.',
    'uppercase' => 'The :attribute field must be uppercase.',
    'url' => 'The :attribute field must be a valid URL.',
    'ulid' => 'The :attribute field must be a valid ULID.',
    'uuid' => 'The :attribute field must be a valid UUID.',

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
