<?php

return [
    'resource' => [
        'label' => 'Evaluación de impacto',
        'plural_label' => 'Evaluaciones de impacto (RIPD)',
    ],

    'fields' => [
        'title' => 'Título',
        'processing_activity' => 'Actividad de tratamiento',
        'description' => 'Descripción del tratamiento',
        'necessity' => 'Necesidad y proporcionalidad',
        'risks' => 'Riesgos',
        'risk_title' => 'Riesgo',
        'threat' => 'Amenaza (LINDDUN)',
        'likelihood' => 'Probabilidad',
        'impact' => 'Impacto',
        'measures' => 'Medidas, salvaguardas y mecanismos de mitigación',
        'residual_likelihood' => 'Probabilidad tras las medidas',
        'residual_impact' => 'Impacto tras las medidas',
        'dpo_opinion' => 'Opinión del encargado de protección de datos',
        'status' => 'Estado',
        'inherent_risk' => 'Riesgo más alto',
        'residual_risk' => 'Riesgo residual más alto',
        'next_review_at' => 'Próxima revisión',
        'approved_by' => 'Aprobado por',
    ],

    'help' => [
        'description' => 'Qué hace el tratamiento, qué datos personales recoge y cómo se recogen y protegen (art. 38, párrafo único).',
        'necessity' => 'Por qué cada dato es necesario para la finalidad y por qué menos datos no bastarían.',
        'risks' => 'Nivel de riesgo = probabilidad x impacto: 1-2 bajo, 3-4 medio, 6-9 alto. Sin las notas tras las medidas, el riesgo residual es el inherente.',
        'candidates' => 'Actividades de tratamiento con datos sensibles o basadas en interés legítimo que aún no tienen evaluación de impacto.',
        'no_candidates' => 'Todas esas actividades de tratamiento tienen evaluación.',
    ],

    'scale' => [
        '1' => '1 - Baja',
        '2' => '2 - Media',
        '3' => '3 - Alta',
    ],

    'levels' => [
        'low' => 'Bajo',
        'medium' => 'Medio',
        'high' => 'Alto',
    ],

    'threats' => [
        'linking' => 'Vinculación',
        'identifying' => 'Identificación',
        'non_repudiation' => 'No repudio',
        'detecting' => 'Detección',
        'data_disclosure' => 'Divulgación de datos',
        'unawareness' => 'Desconocimiento',
        'non_compliance' => 'Incumplimiento',
    ],

    'statuses' => [
        'draft' => 'Borrador',
        'approved' => 'Aprobada',
        'review_due' => 'Revisión pendiente',
    ],

    'reasons' => [
        'sensitive_data' => 'datos sensibles',
        'legitimate_interest' => 'interés legítimo',
    ],

    'actions' => [
        'approve' => 'Aprobar',
        'export' => 'Exportar (JSON)',
        'candidates' => 'Evaluaciones faltantes',
        'close' => 'Cerrar',
    ],

    'notifications' => [
        'approved' => 'Evaluación de impacto aprobada',
        'no_risks' => 'Evalúe al menos un riesgo antes de aprobar.',
    ],
];
