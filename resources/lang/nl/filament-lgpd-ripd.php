<?php

return [
    'resource' => [
        'label' => 'Effectbeoordeling',
        'plural_label' => 'Effectbeoordelingen (RIPD)',
    ],

    'fields' => [
        'title' => 'Titel',
        'processing_activity' => 'Verwerkingsactiviteit',
        'description' => 'Beschrijving van de verwerking',
        'necessity' => 'Noodzaak en evenredigheid',
        'risks' => 'Risico\'s',
        'risk_title' => 'Risico',
        'threat' => 'Dreiging (LINDDUN)',
        'likelihood' => 'Waarschijnlijkheid',
        'impact' => 'Impact',
        'measures' => 'Maatregelen, waarborgen en mitigatiemechanismen',
        'residual_likelihood' => 'Waarschijnlijkheid na maatregelen',
        'residual_impact' => 'Impact na maatregelen',
        'dpo_opinion' => 'Advies van de functionaris voor gegevensbescherming',
        'status' => 'Status',
        'inherent_risk' => 'Hoogste risico',
        'residual_risk' => 'Hoogste restrisico',
        'next_review_at' => 'Volgende beoordeling',
        'approved_by' => 'Goedgekeurd door',
    ],

    'help' => [
        'description' => 'Wat de verwerking doet, welke persoonsgegevens ze verzamelt en hoe die worden verzameld en beveiligd (art. 38, enig lid).',
        'necessity' => 'Waarom elk gegeven nodig is voor het doel en waarom minder gegevens niet volstaan.',
        'risks' => 'Risiconiveau = waarschijnlijkheid x impact: 1-2 laag, 3-4 gemiddeld, 6-9 hoog. Zonder scores na maatregelen is het restrisico het inherente risico.',
        'candidates' => 'Verwerkingsactiviteiten met gevoelige gegevens of op basis van gerechtvaardigd belang, nog zonder effectbeoordeling.',
        'no_candidates' => 'Elk van deze verwerkingsactiviteiten heeft een beoordeling.',
    ],

    'scale' => [
        '1' => '1 - Laag',
        '2' => '2 - Gemiddeld',
        '3' => '3 - Hoog',
    ],

    'levels' => [
        'low' => 'Laag',
        'medium' => 'Gemiddeld',
        'high' => 'Hoog',
    ],

    'threats' => [
        'linking' => 'Koppeling',
        'identifying' => 'Identificatie',
        'non_repudiation' => 'Onweerlegbaarheid',
        'detecting' => 'Detectie',
        'data_disclosure' => 'Openbaarmaking van gegevens',
        'unawareness' => 'Onwetendheid',
        'non_compliance' => 'Niet-naleving',
    ],

    'statuses' => [
        'draft' => 'Concept',
        'approved' => 'Goedgekeurd',
        'review_due' => 'Beoordeling nodig',
    ],

    'reasons' => [
        'sensitive_data' => 'gevoelige gegevens',
        'legitimate_interest' => 'gerechtvaardigd belang',
    ],

    'actions' => [
        'approve' => 'Goedkeuren',
        'export' => 'Exporteren (JSON)',
        'candidates' => 'Ontbrekende beoordelingen',
        'close' => 'Sluiten',
    ],

    'notifications' => [
        'approved' => 'Effectbeoordeling goedgekeurd',
        'no_risks' => 'Beoordeel ten minste één risico voordat u goedkeurt.',
    ],
];
