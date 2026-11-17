<?php

return [
    'resource' => [
        'label' => 'Valutazione d\'impatto',
        'plural_label' => 'Valutazioni d\'impatto (RIPD)',
    ],

    'fields' => [
        'title' => 'Titolo',
        'processing_activity' => 'Attività di trattamento',
        'description' => 'Descrizione del trattamento',
        'necessity' => 'Necessità e proporzionalità',
        'risks' => 'Rischi',
        'risk_title' => 'Rischio',
        'threat' => 'Minaccia (LINDDUN)',
        'likelihood' => 'Probabilità',
        'impact' => 'Impatto',
        'measures' => 'Misure, garanzie e meccanismi di mitigazione',
        'residual_likelihood' => 'Probabilità dopo le misure',
        'residual_impact' => 'Impatto dopo le misure',
        'dpo_opinion' => 'Parere del responsabile della protezione dei dati',
        'status' => 'Stato',
        'inherent_risk' => 'Rischio più alto',
        'residual_risk' => 'Rischio residuo più alto',
        'next_review_at' => 'Prossima revisione',
        'approved_by' => 'Approvato da',
    ],

    'help' => [
        'description' => 'Cosa fa il trattamento, quali dati personali raccoglie e come li raccoglie e li protegge (art. 38, comma unico).',
        'necessity' => 'Perché ogni dato è necessario per la finalità e perché meno dati non basterebbero.',
        'risks' => 'Livello di rischio = probabilità x impatto: 1-2 basso, 3-4 medio, 6-9 alto. Senza i valori dopo le misure, il rischio residuo è quello inerente.',
        'candidates' => 'Attività di trattamento con dati sensibili o basate sul legittimo interesse, senza ancora una valutazione d\'impatto.',
        'no_candidates' => 'Ognuna di queste attività ha una valutazione.',
    ],

    'scale' => [
        '1' => '1 - Bassa',
        '2' => '2 - Media',
        '3' => '3 - Alta',
    ],

    'levels' => [
        'low' => 'Basso',
        'medium' => 'Medio',
        'high' => 'Alto',
    ],

    'threats' => [
        'linking' => 'Collegamento',
        'identifying' => 'Identificazione',
        'non_repudiation' => 'Non ripudio',
        'detecting' => 'Rilevamento',
        'data_disclosure' => 'Divulgazione dei dati',
        'unawareness' => 'Inconsapevolezza',
        'non_compliance' => 'Non conformità',
    ],

    'statuses' => [
        'draft' => 'Bozza',
        'approved' => 'Approvata',
        'review_due' => 'Revisione da fare',
    ],

    'reasons' => [
        'sensitive_data' => 'dati sensibili',
        'legitimate_interest' => 'legittimo interesse',
    ],

    'actions' => [
        'approve' => 'Approva',
        'export' => 'Esporta (JSON)',
        'candidates' => 'Valutazioni mancanti',
        'close' => 'Chiudi',
    ],

    'notifications' => [
        'approved' => 'Valutazione d\'impatto approvata',
        'no_risks' => 'Valuta almeno un rischio prima di approvare.',
    ],
];
