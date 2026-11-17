<?php

return [
    'resource' => [
        'label' => 'Impact assessment',
        'plural_label' => 'Impact assessments (RIPD)',
    ],

    'fields' => [
        'title' => 'Title',
        'processing_activity' => 'Processing activity',
        'description' => 'Description of the processing',
        'necessity' => 'Necessity and proportionality',
        'risks' => 'Risks',
        'risk_title' => 'Risk',
        'threat' => 'Threat (LINDDUN)',
        'likelihood' => 'Likelihood',
        'impact' => 'Impact',
        'measures' => 'Measures, safeguards and mitigation mechanisms',
        'residual_likelihood' => 'Likelihood after measures',
        'residual_impact' => 'Impact after measures',
        'dpo_opinion' => 'Data protection officer\'s opinion',
        'status' => 'Status',
        'inherent_risk' => 'Highest risk',
        'residual_risk' => 'Highest residual risk',
        'next_review_at' => 'Next review',
        'approved_by' => 'Approved by',
    ],

    'help' => [
        'description' => 'What the processing does, the personal data it collects and the method used to collect it and keep it secure (art. 38, sole paragraph).',
        'necessity' => 'Why each piece of data is needed for the purpose, and why less data would not do.',
        'risks' => 'Risk level = likelihood x impact: 1-2 low, 3-4 medium, 6-9 high. Without the after-measures scores, the residual risk is the inherent one.',
        'candidates' => 'Processing activities with sensitive data or based on legitimate interest, and no impact assessment yet.',
        'no_candidates' => 'Every such processing activity has an assessment.',
    ],

    'scale' => [
        1 => '1 - Low',
        2 => '2 - Medium',
        3 => '3 - High',
    ],

    'levels' => [
        'low' => 'Low',
        'medium' => 'Medium',
        'high' => 'High',
    ],

    'threats' => [
        'linking' => 'Linking',
        'identifying' => 'Identifying',
        'non_repudiation' => 'Non-repudiation',
        'detecting' => 'Detecting',
        'data_disclosure' => 'Data disclosure',
        'unawareness' => 'Unawareness',
        'non_compliance' => 'Non-compliance',
    ],

    'statuses' => [
        'draft' => 'Draft',
        'approved' => 'Approved',
        'review_due' => 'Review due',
    ],

    'reasons' => [
        'sensitive_data' => 'sensitive data',
        'legitimate_interest' => 'legitimate interest',
    ],

    'actions' => [
        'approve' => 'Approve',
        'export' => 'Export (JSON)',
        'candidates' => 'Missing assessments',
        'close' => 'Close',
    ],

    'notifications' => [
        'approved' => 'Impact assessment approved',
        'no_risks' => 'Assess at least one risk before approving.',
    ],
];
