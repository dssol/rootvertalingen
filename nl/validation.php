<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines - Nederlands
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted' => 'Het :attribute veld moet worden geaccepteerd.',
    'accepted_if' => 'Het :attribute veld moet worden geaccepteerd wanneer :other is :value.',
    'active_url' => 'Het :attribute veld moet een geldige URL bevatten.',
    'after' => 'Het :attribute veld moet een datum zijn na :date.',
    'after_or_equal' => 'Het :attribute veld moet een datum zijn na of op :date.',
    'alpha' => 'Het :attribute veld mag enkel letters bevatten.',
    'alpha_dash' => 'Het :attribute veld mag enkel letters, nummers, dashes, en underscores bevatten.',
    'alpha_num' => 'Het :attribute veld mag enkel letters en nummers bevatten.',
    'any_of' => 'Het :attribute veld is ongeldig.',
    'array' => 'Het :attribute veld moet een reeks zijn.',
    'ascii' => 'Het :attribute veld mag enkel enkelvoudige byte alfanumerieke tekens en symbolen bevatten.',
    'before' => 'Het :attribute veld moet een datum zijn voor :date.',
    'before_or_equal' => 'Het :attribute veld moet een datum zijn voor of op :date.',
    'between' => [
        'array' => 'Het :attribute veld moet tussen :min en :max artikelen bevatten.',
        'file' => 'Het :attribute veld moet tussen :min en :max kilobytes bevatten.',
        'numeric' => 'Het :attribute veld moet tussen :min en :max zijn.',
        'string' => 'Het :attribute veld moet tussen :min en :max tekens bevatten.',
    ],
    'boolean' => 'Het :attribute veld moet juist of fout zijn.',
    'can' => 'Het :attribute veld bevat een ongeautoriseerde waarde.',
    'confirmed' => 'De :attribute veldbevestiging komt niet overeen.',
    'contains' => 'Het :attribute veld mist een nodige waarde.',
    'current_password' => 'Het wachtwoord is incorrect.',
    'date' => 'Het :attribute veld moet een geldige datum bevatten.',
    'date_equals' => 'Het :attribute veld moet een datum zijn gelijk aan :date.',
    'date_format' => 'Het :attribute veld moet overeenkomen met het formaat :format.',
    'decimal' => 'Het :attribute veld moet :decimal decimalen hebben.',
    'declined' => 'Het :attribute veld moet afgewezen worden.',
    'declined_if' => 'Het :attribute veld moet afgewezen worden wanneer :other :value is.',
    'different' => 'Het :attribute veld en :other moeten veschillend zijn.',
    'digits' => 'Het :attribute veld moet :digits cijfers bevatten.',
    'digits_between' => 'Het :attribute veld moet tussen :min en :max cijfers bevatten.',
    'dimensions' => 'Het :attribute veld heeft een ongeldige afbeeldingsafmetingen.',
    'distinct' => 'Het :attribute veld heeft een dubbele waarde.',
    'doesnt_end_with' => 'Het :attribute veld mag niet eindigen met een van de  following: :values.',
    'doesnt_start_with' => 'Het :attribute veld mag niet starten met een van de following: :values.',
    'email' => 'Het :attribute veld moet een geldig email adres bevatten.',
    'ends_with' => 'het :attribute veld moet eindigen met een van de following: :values.',
    'enum' => 'Het geselecteerde :attribute is ongeldig.',
    'exists' => 'Het geselecteerde :attribute is ongeldig.',
    'extensions' => 'Het :attribute veld moet een van de volgende extensions: :values bevatten.',
    'file' => 'Het :attribute veld moet een bestand zijn.',
    'filled' => 'Het :attribute veld moet een waarde bevatten.',
    'gt' => [
        'array' => 'Het :attribute veld moet meer dan :value artikelen bevatten.',
        'file' => 'Het :attribute veld moet meer dan :value kilobytes bevatten.',
        'numeric' => 'Het :attribute veld moet meer bevatten dan :value.',
        'string' => 'Het :attribute veld moet meer dan :value tekens bevatten.',
    ],
    'gte' => [
        'array' => 'Het :attribute veld moet :value of meer artikelen bevatten.',
        'file' => 'Het :attribute veld moet meer dan of :value kilobytes bevatten.',
        'numeric' => 'Het :attribute moet meer of gelijk zijn aan :value.',
        'string' => 'Het :attribute veld moet :value of meer tekens bevatten.',
    ],
    'hex_color' => 'Het :attribute veld moet een geldige hexadecimale kleur bevatten.',
    'image' => 'Het :attribute veld moet een afbeelding zijn.',
    'in' => 'het geselecteerde :attribute is ongeldig.',
    'in_array' => 'Het :attribute veld moet bestaan in :other.',
    'in_array_keys' => 'Het :attribute veld moet minstens een van de volgende sleutels bevatten: :values.',
    'integer' => 'Het :attribute veld moet een geheel getal zijn.',
    'ip' => 'Het :attribute veld moet een geldig IP adres bevatten.',
    'ipv4' => 'Het :attribute veld moet een geldig IPv4 adres bevatten.',
    'ipv6' => 'Het :attribute veld moet een geldig IPv6 adres bevatten.',
    'json' => 'Het :attribute veld moet een geldig JSON string bevatten.',
    'list' => 'Het :attribute veld moet een lijst zijn.',
    'lowercase' => 'Het :attribute veld moet bestaan uit kleine letters.',
    'lt' => [
        'array' => 'Het :attribute veld moet minder dan :value artikelen bevatten.',
        'file' => 'Het :attribute veld moet minder dan :value kilobytes bevatten.',
        'numeric' => 'Het :attribute veld moet minder zijn dan :value.',
        'string' => 'Het :attribute veld mag niet meer dan :value tekens bevatten.',
    ],
    'lte' => [
        'array' => 'Het :attribute veld mag niet meer dan :value artikelen bevatten.',
        'file' => 'Het :attribute veld mag maar :value kilobytes of minder bevatten.',
        'numeric' => 'Het :attribute veld moet minder of gelijk zijn aan :value.',
        'string' => 'Het :attribute veld mag maar :value of minder tekens bevatten.',
    ],
    'mac_address' => 'Het :attribute veld moet een geldig MAC adres bevatten.',
    'max' => [
        'array' => 'Het :attribute veld mag niet meer dan :max artikelen bevatten.',
        'file' => 'Het :attribute veld mag niet meer dan :max kilobytes bevatten.',
        'numeric' => 'Het :attribute veld mag niet groter zijn dan :max.',
        'string' => 'Het :attribute veld mag niet meer dan :max tekens bevatten.',
    ],
    'max_digits' => 'Het :attribute veld mag niet meer dan :max cijfers bevatten.',
    'mimes' => 'Het :attribute veld moet een bestand bevatten van het type: :values.',
    'mimetypes' => 'Het :attribute veld moet een betsand bevatten van het type: :values.',
    'min' => [
        'array' => 'Het :attribute veld moet minstens :min artikelen bevatten.',
        'file' => 'Het :attribute veld moet minstens :min kilobytes bevatten.',
        'numeric' => 'Het :attribute veld moet minstens :min zijn.',
        'string' => 'Het :attribute veld moet minstens :min tekens bevatten.',
    ],
    'min_digits' => 'Het :attribute veld moet minstens :min cijfers bevatten.',
    'missing' => 'Het :attribute veld moet ontbreken.',
    'missing_if' => 'Het :attribute veld moet ontbreken wanneer :other is :value.',
    'missing_unless' => 'Het :attribute veld moet ontbreken tenzij :other is :value.',
    'missing_with' => 'Het :attribute veld moet ontbreken wanneer :values aanwezig is.',
    'missing_with_all' => 'Het :attribute veld moet ontbreken wanneer :values aanwezig zijn.',
    'multiple_of' => 'Het :attribute veld moet een meervoud zijn van :value.',
    'not_in' => 'Het geselecteerde :attribute is ongeldig.',
    'not_regex' => 'Het :attribute veld formaat is ongeldig.',
    'numeric' => 'Het :attribute veld moet een nummer zijn.',
    'password' => [
        'letters' => 'Het :attribute veld moet minstens een letter bevatten.',
        'mixed' => 'Het :attribute veld moet minstens een hoofdletter en een kleine letter bevatten.',
        'numbers' => 'Het :attribute veld moet minstens een cijfer bevatten.',
        'symbols' => 'Het :attribute veld moet minstens een symbool bevatten.',
        'uncompromised' => 'Het gegeven :attribute is verschenen in een data lek. Kies alstublieft een verschillend :attribute.',
    ],
    'present' => 'Het :attribute veld moet aanwezig zijn.',
    'present_if' => 'Het :attribute veld moet aanwezig zijn wanneer :other is :value.',
    'present_unless' => 'Het :attribute veld moet aanwezig zijn tenzij :other is :value.',
    'present_with' => 'Het :attribute veld moet aanwezig zijn wanneer :values aanwezig is.',
    'present_with_all' => 'Het :attribute veld moet aanwezig zijn wanneer :values aanwezig zijn.',
    'prohibited' => 'Het :attribute veld is verboden.',
    'prohibited_if' => 'Het :attribute veld is verboden wanneer :other is :value.',
    'prohibited_if_accepted' => 'Het :attribute veld is verboden wanneer :other geaccepteerd is.',
    'prohibited_if_declined' => 'Het :attribute veld is verboden wanneer :other afgewezen is.',
    'prohibited_unless' => 'Het :attribute veld is verboden tenzij :other in :values is.',
    'prohibits' => 'Het :attribute veld verbiedt :other van aanwezig te zijn.',
    'regex' => 'Het :attribute veld formaat is ongeldig.',
    'required' => 'Het :attribute veld is verplicht.',
    'required_array_keys' => 'Het :attribute veld moet vermeldingen bevatten voor: :values.',
    'required_if' => 'Het :attribute veld is nodig wanneer :other is :value.',
    'required_if_accepted' => 'Het :attribute veld is nodig wanneer :other geaccepteerd is.',
    'required_if_declined' => 'Het :attribute veld is nodig wanneer :other afgewezen is.',
    'required_unless' => 'Het :attribute veld is nodig tenzij :other in :values is.',
    'required_with' => 'Het :attribute veld is nodig wanneer :values aanwezig is.',
    'required_with_all' => 'Het :attribute veld is nodig wanneer :values aanwezig zijn.',
    'required_without' => 'Het :attribute veld is nodig wanneer :values niet aanwezig is.',
    'required_without_all' => 'Het :attribute veld is nodig wanneer geen enkele van :values aanwezig zijn.',
    'same' => 'Het :attribute veld moet overeenkomen met :other.',
    'size' => [
        'array' => 'Het :attribute veld moet :size artikelen bevatten.',
        'file' => 'Het :attribute veld moet :size kilobytes bevatten.',
        'numeric' => 'Het :attribute veld moet :size.',
        'string' => 'Het :attribute veld moet :size tekens bevatten.',
    ],
    'starts_with' => 'Het :attribute veld moet beginnen met een van de volgende: :values.',
    'string' => 'Het :attribute veld moet een string zijn.',
    'timezone' => 'Het :attribute veld moet een geldige tijdzone zijn.',
    'unique' => 'Het :attribute is al in gebruik.',
    'uploaded' => 'Het :attribute uploaden is mislukt.',
    'uppercase' => 'Het :attribute veld moet hoofdletters zijn.',
    'url' => 'Het :attribute veld moet een geldige URL bevatten.',
    'ulid' => 'Het :attribute veld moet een geldige ULID bevatten.',
    'uuid' => 'Het :attribute veld moet een geldige UUID bevatten.',

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
