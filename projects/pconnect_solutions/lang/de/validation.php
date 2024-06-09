<?php

// resources/lang/de/validation.php

return [
    'accepted' => 'Das :attribute muss akzeptiert werden.',
    'accepted_if' => 'Das :attribute muss akzeptiert werden, wenn :other :value ist.',
    'active_url' => 'Das :attribute ist keine gültige URL.',
    'after' => 'Das :attribute muss ein Datum nach dem :date sein.',
    'after_or_equal' => 'Das :attribute muss ein Datum nach oder gleich dem :date sein.',
    'alpha' => 'Das :attribute darf nur Buchstaben enthalten.',
    'alpha_dash' => 'Das :attribute darf nur Buchstaben, Zahlen, Bindestriche und Unterstriche enthalten.',
    'alpha_num' => 'Das :attribute darf nur Buchstaben und Zahlen enthalten.',
    'array' => 'Das :attribute muss ein Array sein.',
    'before' => 'Das :attribute muss ein Datum vor dem :date sein.',
    'before_or_equal' => 'Das :attribute muss ein Datum vor oder gleich dem :date sein.',
    'between' => [
        'array' => 'Das :attribute muss zwischen :min und :max Elemente haben.',
        'file' => 'Die :attribute muss zwischen :min und :max Kilobyte groß sein.',
        'numeric' => 'Das :attribute muss zwischen :min und :max liegen.',
        'string' => 'Das :attribute muss zwischen :min und :max Zeichen lang sein.',
    ],
    'boolean' => 'Das :attribute Feld muss wahr oder falsch sein.',
    'confirmed' => 'Die :attribute Bestätigung stimmt nicht überein.',
    'current_password' => 'Das Passwort ist falsch.',
    'date' => 'Das :attribute ist kein gültiges Datum.',
    'date_equals' => 'Das :attribute muss ein Datum gleich :date sein.',
    'date_format' => 'Das :attribute entspricht nicht dem Format :format.',
    'different' => 'Das :attribute und :other müssen unterschiedlich sein.',
    'digits' => 'Das :attribute muss :digits Ziffern enthalten.',
    'digits_between' => 'Das :attribute muss zwischen :min und :max Ziffern liegen.',
    'dimensions' => 'Das :attribute hat ungültige Bildabmessungen.',
    'distinct' => 'Das :attribute Feld hat einen doppelten Wert.',
    'email' => 'Das :attribute muss eine gültige E-Mail-Adresse sein.',
    'ends_with' => 'Das :attribute muss mit einer der folgenden Endungen enden: :values.',
    'enum' => 'Der ausgewählte :attribute ist ungültig.',
    'exists' => 'Das ausgewählte :attribute ist ungültig.',
    'file' => 'Das :attribute muss eine Datei sein.',
    'filled' => 'Das :attribute Feld muss einen Wert enthalten.',
    'gt' => [
        'array' => 'Das :attribute muss mehr als :value Elemente enthalten.',
        'file' => 'Das :attribute muss größer als :value Kilobyte sein.',
        'numeric' => 'Das :attribute muss größer als :value sein.',
        'string' => 'Das :attribute muss mehr als :value Zeichen lang sein.',
    ],
    'gte' => [
        'array' => 'Das :attribute muss :value Elemente oder mehr enthalten.',
        'file' => 'Das :attribute muss größer oder gleich :value Kilobyte sein.',
        'numeric' => 'Das :attribute muss größer oder gleich :value sein.',
        'string' => 'Das :attribute muss größer oder gleich :value Zeichen lang sein.',
    ],
    'hex_color' => 'Das :attribute muss eine gültige Hexadezimalfarbe sein.',
    'image' => 'Das :attribute muss ein Bild sein.',
    'in' => 'Das ausgewählte :attribute ist ungültig.',
    'in_array' => 'Das :attribute Feld existiert nicht in :other.',
    'integer' => 'Das :attribute muss eine ganze Zahl sein.',
    'ip' => 'Das :attribute muss eine gültige IP-Adresse sein.',
    'ipv4' => 'Das :attribute muss eine gültige IPv4-Adresse sein.',
    'ipv6' => 'Das :attribute muss eine gültige IPv6-Adresse sein.',
    'json' => 'Das :attribute muss ein gültiger JSON-String sein.',
    'lowercase' => 'Das :attribute muss kleinbuchstaben sein.',
    'lt' => [
        'array' => 'Das :attribute muss weniger als :value Elemente enthalten.',
        'file' => 'Das :attribute muss kleiner als :value Kilobyte sein.',
        'numeric' => 'Das :attribute muss kleiner als :value sein.',
        'string' => 'Das :attribute muss weniger als :value Zeichen lang sein.',
    ],
    'lte' => [
        'array' => 'Das :attribute darf nicht mehr als :value Elemente enthalten.',
        'file' => 'Das :attribute muss kleiner oder gleich :value Kilobyte sein.',
        'numeric' => 'Das :attribute muss kleiner oder gleich :value sein.',
        'string' => 'Das :attribute muss kleiner oder gleich :value Zeichen lang sein.',
    ],
    'mac_address' => 'Das :attribute muss eine gültige MAC-Adresse sein.',
    'max' => [
        'array' => 'Das :attribute darf nicht mehr als :max Elemente enthalten.',
        'file' => 'Das :attribute darf nicht größer als :max Kilobyte sein.',
        'numeric' => 'Das :attribute darf nicht größer als :max sein.',
        'string' => 'Das :attribute darf nicht länger als :max Zeichen sein.',
    ],
    'max_digits' => 'Das :attribute darf nicht mehr als :max Ziffern enthalten.',
    'mimes' => 'Das :attribute muss eine Datei des Typs: :values sein.',
    'mimetypes' => 'Das :attribute muss eine Datei des Typs: :values sein.',
    'min' => [
        'array' => 'Das :attribute muss mindestens :min Elemente enthalten.',
        'file' => 'Das :attribute muss mindestens :min Kilobyte groß sein.',
        'numeric' => 'Das :attribute muss mindestens :min sein.',
        'string' => 'Das :attribute muss mindestens :min Zeichen lang sein.',
    ],
    'min_digits' => 'Das :attribute muss mindestens :min Ziffern enthalten.',
    'missing' => 'Das :attribute Feld muss fehlen.',
    'missing_if' => 'Das :attribute Feld muss fehlen, wenn :other :value ist.',
    'missing_unless' => 'Das :attribute Feld muss fehlen, es sei denn, :other ist :value.',
    'missing_with' => 'Das :attribute Feld muss fehlen',
    'missing_with_all' => 'Das Feld :attribute muss fehlen, wenn :values vorhanden sind.',
    'multiple_of' => 'Das Feld :attribute muss ein Vielfaches von :value sein.',
    'not_in' => 'Die ausgewählte Option für :attribute ist ungültig.',
    'not_regex' => 'Das Format des Feldes :attribute ist ungültig.',
    'numeric' => 'Das Feld :attribute muss eine Zahl sein.',
    'password' => [
        'letters' => 'Das Feld :attribute muss mindestens einen Buchstaben enthalten.',
        'mixed' => 'Das Feld :attribute muss mindestens einen Groß- und einen Kleinbuchstaben enthalten.',
        'numbers' => 'Das Feld :attribute muss mindestens eine Zahl enthalten.',
        'symbols' => 'Das Feld :attribute muss mindestens ein Symbol enthalten.',
        'uncompromised' => 'Das angegebene :attribute ist in einem Datenleck aufgetaucht. Bitte wählen Sie ein anderes :attribute.',
    ],
    'present' => 'Das Feld :attribute muss vorhanden sein.',
    'present_if' => 'Das Feld :attribute muss vorhanden sein, wenn :other :value ist.',
    'present_unless' => 'Das Feld :attribute muss vorhanden sein, außer wenn :other :value ist.',
    'present_with' => 'Das Feld :attribute muss vorhanden sein, wenn :values vorhanden ist.',
    'present_with_all' => 'Das Feld :attribute muss vorhanden sein, wenn :values vorhanden sind.',
    'prohibited' => 'Das Feld :attribute ist verboten.',
    'prohibited_if' => 'Das Feld :attribute ist verboten, wenn :other :value ist.',
    'prohibited_unless' => 'Das Feld :attribute ist verboten, außer wenn :other in :values ist.',
    'prohibits' => 'Das Feld :attribute verbietet das Vorhandensein von :other.',
    'regex' => 'Das Format des Feldes :attribute ist ungültig.',
    'required' => 'Das Feld :attribute ist erforderlich.',
    'required_array_keys' => 'Das Feld :attribute muss Einträge für: :values enthalten.',
    'required_if' => 'Das Feld :attribute ist erforderlich, wenn :other :value ist.',
    'required_if_accepted' => 'Das Feld :attribute ist erforderlich, wenn :other akzeptiert wird.',
    'required_unless' => 'Das Feld :attribute ist erforderlich, außer wenn :other in :values ist.',
    'required_with' => 'Das Feld :attribute ist erforderlich, wenn :values vorhanden ist.',
    'required_with_all' => 'Das Feld :attribute ist erforderlich, wenn :values vorhanden sind.',
    'required_without' => 'Das Feld :attribute ist erforderlich, wenn :values nicht vorhanden ist.',
    'required_without_all' => 'Das Feld :attribute ist erforderlich, wenn keines von :values vorhanden ist.',
    'same' => 'Das Feld :attribute muss mit :other übereinstimmen.',
    'size' => [
        'array' => 'Das Feld :attribute muss :size Einträge enthalten.',
        'file' => 'Das Feld :attribute muss :size Kilobyte groß sein.',
        'numeric' => 'Das Feld :attribute muss :size sein.',
        'string' => 'Das Feld :attribute muss :size Zeichen lang sein.',
    ],
    'starts_with' => 'Das Feld :attribute muss mit einem der folgenden beginnen: :values.',
    'string' => 'Das Feld :attribute muss ein Text sein.',
    'timezone' => 'Das Feld :attribute muss eine gültige Zeitzone sein.',
    'unique' => 'Das :attribute existiert bereits.',
    'uploaded' => 'Das Hochladen von :attribute ist fehlgeschlagen.',
    'uppercase' => 'Das Feld :attribute muss in Großbuchstaben sein.',
    'url' => 'Das Feld :attribute muss eine gültige URL sein.',
    'ulid' => 'Das Feld :attribute muss eine gültige ULID sein.',
    'uuid' => 'Das Feld :attribute muss eine gültige UUID sein.',

    /*
|--------------------------------------------------------------------------
| Benutzerdefinierte Validierungssprachzeilen
|--------------------------------------------------------------------------
|
| Hier können Sie benutzerdefinierte Validierungsmeldungen für Attribute angeben, indem Sie die Konvention "attribute.rule" verwenden, um die Zeilen zu benennen. Dies erleichtert das Festlegen einer bestimmten benutzerdefinierten Sprachzeile für eine bestimmte Attributregel.
|
*/

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'benutzerdefinierte Nachricht',
        ],
    ],

    /*
|--------------------------------------------------------------------------
| Benutzerdefinierte Validierungsattribute
|--------------------------------------------------------------------------
|
| Die folgenden Sprachzeilen werden verwendet, um unsere Attributplatzhalter mit etwas Benutzerfreundlicherem wie "E-Mail-Adresse" anstelle von "E-Mail" auszutauschen. Dies hilft uns einfach, unsere Nachricht ausdrucksstärker zu gestalten.
|
*/
    'attributes' => [
        'name' => 'Name',
        'email' => 'E-Mail',
        'password' => 'Passwort',
    ],



];
