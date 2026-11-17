<?php

return [
    'resource' => [
        'label' => 'Ocena skutków',
        'plural_label' => 'Oceny skutków (RIPD)',
    ],

    'fields' => [
        'title' => 'Tytuł',
        'processing_activity' => 'Czynność przetwarzania',
        'description' => 'Opis przetwarzania',
        'necessity' => 'Niezbędność i proporcjonalność',
        'risks' => 'Ryzyka',
        'risk_title' => 'Ryzyko',
        'threat' => 'Zagrożenie (LINDDUN)',
        'likelihood' => 'Prawdopodobieństwo',
        'impact' => 'Wpływ',
        'measures' => 'Środki, zabezpieczenia i mechanizmy ograniczania',
        'residual_likelihood' => 'Prawdopodobieństwo po środkach',
        'residual_impact' => 'Wpływ po środkach',
        'dpo_opinion' => 'Opinia inspektora ochrony danych',
        'status' => 'Status',
        'inherent_risk' => 'Najwyższe ryzyko',
        'residual_risk' => 'Najwyższe ryzyko szczątkowe',
        'next_review_at' => 'Następny przegląd',
        'approved_by' => 'Zatwierdził',
    ],

    'help' => [
        'description' => 'Co robi przetwarzanie, jakie dane osobowe zbiera oraz jak są zbierane i zabezpieczane (art. 38, akapit jedyny).',
        'necessity' => 'Dlaczego każda dana jest niezbędna do celu i dlaczego mniej danych by nie wystarczyło.',
        'risks' => 'Poziom ryzyka = prawdopodobieństwo x wpływ: 1-2 niskie, 3-4 średnie, 6-9 wysokie. Bez ocen po środkach ryzyko szczątkowe równa się ryzyku inherentnemu.',
        'candidates' => 'Czynności przetwarzania z danymi wrażliwymi lub oparte na prawnie uzasadnionym interesie, bez oceny skutków.',
        'no_candidates' => 'Każda taka czynność przetwarzania ma ocenę.',
    ],

    'scale' => [
        '1' => '1 - Niskie',
        '2' => '2 - Średnie',
        '3' => '3 - Wysokie',
    ],

    'levels' => [
        'low' => 'Niskie',
        'medium' => 'Średnie',
        'high' => 'Wysokie',
    ],

    'threats' => [
        'linking' => 'Powiązanie',
        'identifying' => 'Identyfikacja',
        'non_repudiation' => 'Niezaprzeczalność',
        'detecting' => 'Wykrywanie',
        'data_disclosure' => 'Ujawnienie danych',
        'unawareness' => 'Nieświadomość',
        'non_compliance' => 'Niezgodność',
    ],

    'statuses' => [
        'draft' => 'Szkic',
        'approved' => 'Zatwierdzona',
        'review_due' => 'Wymagany przegląd',
    ],

    'reasons' => [
        'sensitive_data' => 'dane wrażliwe',
        'legitimate_interest' => 'prawnie uzasadniony interes',
    ],

    'actions' => [
        'approve' => 'Zatwierdź',
        'export' => 'Eksportuj (JSON)',
        'candidates' => 'Brakujące oceny',
        'close' => 'Zamknij',
    ],

    'notifications' => [
        'approved' => 'Ocena skutków zatwierdzona',
        'no_risks' => 'Przed zatwierdzeniem oceń co najmniej jedno ryzyko.',
    ],
];
