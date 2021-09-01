<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages.
    |
    */

    'accepted'             => ':Attribute musí být přijat.',
    'active_url'           => ':Attribute není platnou URL adresou.',
    'after'                => ':Attribute musí být datum po :date.',
    'after_or_equal'       => ':Attribute musí být datum :date nebo pozdější.',
    'alpha'                => ':Attribute může obsahovat pouze písmena.',
    'alpha_dash'           => ':Attribute může obsahovat pouze písmena, číslice, pomlčky a podtržítka. České znaky (á, é, í, ó, ú, ů, ž, š, č, ř, ď, ť, ň) nejsou podporovány.',
    'alpha_num'            => ':Attribute může obsahovat pouze písmena a číslice.',
    'array'                => ':Attribute musí být pole.',
    'before'               => ':Attribute musí být datum před :date.',
    'before_or_equal'      => 'Datum :attribute musí být před nebo rovno :date.',
    'between'              => [
        'numeric' => ':Attribute musí být hodnota mezi :min a :max.',
        'file'    => ':Attribute musí být větší než :min a menší než :max Kilobytů.',
        'string'  => ':Attribute musí být delší než :min a kratší než :max znaků.',
        'array'   => ':Attribute musí obsahovat nejméně :min a nesmí obsahovat více než :max prvků.',
    ],
    'boolean'              => ':Attribute musí být true nebo false',
    'confirmed'            => ':Attribute nesouhlasí.',
    'date'                 => ':Attribute musí být platné datum.',
    'date_equals'          => ':Attribute musí být datum shodné s :date.',
    'date_format'          => ':Attribute není platný formát data podle :format.',
    'different'            => ':Attribute a :other se musí lišit.',
    'digits'               => ':Attribute musí být :digits pozic dlouhé.',
    'digits_between'       => ':Attribute musí být dlouhé nejméně :min a nejvíce :max pozic.',
    'dimensions'           => ':Attribute má neplatné rozměry.',
    'distinct'             => ':Attribute má duplicitní hodnotu.',
    'email'                => ':Attribute není platný formát.',
    'ends_with'            => ':Attribute musí končit jednou z následujících hodnot: :values',
    'exists'               => 'Zvolená hodnota pro :attribute není platná.',
    'file'                 => ':Attribute musí být soubor.',
    'filled'               => 'Položka musí být vyplněna.',
    'gt'                   => [
        'numeric' => ':Attribute musí být větší než :value.',
        'file'    => 'Velikost souboru :attribute musí být větší než :value kB.',
        'string'  => 'Počet znaků :attribute musí být větší :value.',
        'array'   => 'Pole :attribute musí mít více prvků než :value.',
    ],
    'gte'                  => [
        'numeric' => ':Attribute musí být větší nebo rovno :value.',
        'file'    => 'Velikost souboru :attribute musí být větší nebo rovno :value kB.',
        'string'  => 'Počet znaků :attribute musí být větší nebo rovno :value.',
        'array'   => 'Pole :attribute musí mít :value prvků nebo více.',
    ],
    'image'                => ':Attribute musí být obrázek.',
    'in'                   => 'Vybraná hodnota :attribute je neplatná.',
    'in_array'             => ':Attribute není obsažen v :other.',
    'integer'              => ':Attribute musí být celé číslo.',
    'ip'                   => ':Attribute musí být platnou IP adresou.',
    'ipv4'                 => ':Attribute musí být platná IPv4 adresa.',
    'ipv6'                 => ':Attribute musí být platná IPv6 adresa.',
    'json'                 => ':Attribute musí být platný JSON řetězec.',
    'lt'                   => [
        'numeric' => ':Attribute musí být menší než :value.',
        'file'    => 'Velikost souboru :attribute musí být menší než :value kB.',
        'string'  => ':Attribute musí obsahovat méně než :value znaků.',
        'array'   => ':Attribute by měl obsahovat méně než :value položek.',
    ],
    'lte'                  => [
        'numeric' => ':Attribute musí být menší nebo rovno než :value.',
        'file'    => 'Velikost souboru :attribute musí být menší než :value kB.',
        'string'  => ':Attribute nesmí být delší než :value znaků.',
        'array'   => ':Attribute by měl obsahovat maximálně :value položek.',
    ],
    'max'                  => [
        'numeric' => ':Attribute nemůže být větší než :max.',
        'file'    => 'Velikost souboru :attribute musí být menší než :value kB.',
        'string'  => ':Attribute nemůže být delší než :max znaků.',
        'array'   => ':Attribute nemůže obsahovat více než :max prvků.',
    ],
    'mimes'                => ':Attribute musí být jeden z následujících datových typů :values.',
    'mimetypes'            => ':Attribute musí být jeden z následujících datových typů :values.',
    'min'                  => [
        'numeric' => ':Attribute musí být větší než :min.',
        'file'    => ':Attribute musí být větší než :min kB.',
        'string'  => ':Attribute musí být delší než :min znaků.',
        'array'   => ':Attribute musí obsahovat více než :min prvků.',
    ],
    'multiple_of'          => 'The :attribute must be a multiple of :value',
    'not_in'               => 'Zvolená hodnota pro :attribute je neplatná.',
    'not_regex'            => ':Attribute musí být regulární výraz.',
    'numeric'              => ':Attribute musí být číslo.',
    'password'             => 'The password is incorrect.',
    'present'              => ':Attribute musí být vyplněno.',
    'regex'                => ':Attribute nemá správný formát.',
    'required'             => 'Položka musí být vyplněna.',
    'required_if'          => 'Položka musí být vyplněna pokud :other je :value.',
    'required_unless'      => 'Položka musí být vyplněna dokud :other je v :values.',
    'required_with'        => 'Položka musí být vyplněna pokud :values je vyplněno.',
    'required_with_all'    => 'Položka musí být vyplněna pokud :values je zvoleno.',
    'required_without'     => 'Položka musí být vyplněna pokud :values není vyplněno.',
    'required_without_all' => 'Položka musí být vyplněna pokud není žádné z :values zvoleno.',
    'same'                 => ':Attribute a :other se musí shodovat.',
    'size'                 => [
        'numeric' => ':Attribute musí být přesně :size.',
        'file'    => ':Attribute musí mít přesně :size Kilobytů.',
        'string'  => ':Attribute musí být přesně :size znaků dlouhý.',
        'array'   => ':Attribute musí obsahovat právě :size prvků.',
    ],
    'starts_with'          => ':Attribute musí začínat jednou z následujících hodnot: :values',
    'string'               => ':Attribute musí být řetězec znaků.',
    'timezone'             => ':Attribute musí být platná časová zóna.',
    'unique'               => ':Attribute musí být unikátní.',
    'uploaded'             => 'Nahrávání :attribute se nezdařilo.',
    'url'                  => 'Formát :attribute je neplatný.',
    'uuid'                 => ':Attribute musí být validní UUID.',

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
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [
        'password' => 'heslo',
    ],
];
