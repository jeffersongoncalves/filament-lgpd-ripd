<?php

return [
    'resource' => [
        'label' => 'Folgenabschätzung',
        'plural_label' => 'Folgenabschätzungen (RIPD)',
    ],

    'fields' => [
        'title' => 'Titel',
        'processing_activity' => 'Verarbeitungstätigkeit',
        'description' => 'Beschreibung der Verarbeitung',
        'necessity' => 'Notwendigkeit und Verhältnismäßigkeit',
        'risks' => 'Risiken',
        'risk_title' => 'Risiko',
        'threat' => 'Bedrohung (LINDDUN)',
        'likelihood' => 'Eintrittswahrscheinlichkeit',
        'impact' => 'Auswirkung',
        'measures' => 'Maßnahmen, Garantien und Abhilfemechanismen',
        'residual_likelihood' => 'Wahrscheinlichkeit nach Maßnahmen',
        'residual_impact' => 'Auswirkung nach Maßnahmen',
        'dpo_opinion' => 'Stellungnahme des Datenschutzbeauftragten',
        'status' => 'Status',
        'inherent_risk' => 'Höchstes Risiko',
        'residual_risk' => 'Höchstes Restrisiko',
        'next_review_at' => 'Nächste Prüfung',
        'approved_by' => 'Genehmigt von',
    ],

    'help' => [
        'description' => 'Was die Verarbeitung tut, welche personenbezogenen Daten sie erhebt und wie sie erhoben und gesichert werden (Art. 38, einziger Absatz).',
        'necessity' => 'Warum jedes Datum für den Zweck nötig ist und warum weniger Daten nicht genügen.',
        'risks' => 'Risikostufe = Wahrscheinlichkeit x Auswirkung: 1-2 niedrig, 3-4 mittel, 6-9 hoch. Ohne Werte nach Maßnahmen entspricht das Restrisiko dem inhärenten Risiko.',
        'candidates' => 'Verarbeitungstätigkeiten mit sensiblen Daten oder auf Basis berechtigter Interessen, für die noch keine Folgenabschätzung existiert.',
        'no_candidates' => 'Für jede dieser Verarbeitungstätigkeiten gibt es eine Abschätzung.',
    ],

    'scale' => [
        '1' => '1 - Niedrig',
        '2' => '2 - Mittel',
        '3' => '3 - Hoch',
    ],

    'levels' => [
        'low' => 'Niedrig',
        'medium' => 'Mittel',
        'high' => 'Hoch',
    ],

    'threats' => [
        'linking' => 'Verknüpfung',
        'identifying' => 'Identifizierung',
        'non_repudiation' => 'Nichtabstreitbarkeit',
        'detecting' => 'Erkennung',
        'data_disclosure' => 'Offenlegung von Daten',
        'unawareness' => 'Unkenntnis',
        'non_compliance' => 'Nichteinhaltung',
    ],

    'statuses' => [
        'draft' => 'Entwurf',
        'approved' => 'Genehmigt',
        'review_due' => 'Prüfung fällig',
    ],

    'reasons' => [
        'sensitive_data' => 'sensible Daten',
        'legitimate_interest' => 'berechtigtes Interesse',
    ],

    'actions' => [
        'approve' => 'Genehmigen',
        'export' => 'Exportieren (JSON)',
        'candidates' => 'Fehlende Abschätzungen',
        'close' => 'Schließen',
    ],

    'notifications' => [
        'approved' => 'Folgenabschätzung genehmigt',
        'no_risks' => 'Bewerten Sie vor der Genehmigung mindestens ein Risiko.',
    ],
];
