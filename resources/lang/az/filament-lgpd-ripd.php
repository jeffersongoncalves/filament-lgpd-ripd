<?php

return [
    'resource' => [
        'label' => 'Təsirin qiymətləndirilməsi',
        'plural_label' => 'Təsirin qiymətləndirmələri (RIPD)',
    ],

    'fields' => [
        'title' => 'Başlıq',
        'processing_activity' => 'Emal fəaliyyəti',
        'description' => 'Emalın təsviri',
        'necessity' => 'Zərurət və mütənasiblik',
        'risks' => 'Risklər',
        'risk_title' => 'Risk',
        'threat' => 'Təhlükə (LINDDUN)',
        'likelihood' => 'Ehtimal',
        'impact' => 'Təsir',
        'measures' => 'Tədbirlər, təminatlar və azaltma mexanizmləri',
        'residual_likelihood' => 'Tədbirlərdən sonra ehtimal',
        'residual_impact' => 'Tədbirlərdən sonra təsir',
        'dpo_opinion' => 'Məlumatların mühafizəsi üzrə məsul şəxsin rəyi',
        'status' => 'Status',
        'inherent_risk' => 'Ən yüksək risk',
        'residual_risk' => 'Ən yüksək qalıq risk',
        'next_review_at' => 'Növbəti yoxlama',
        'approved_by' => 'Təsdiq edən',
    ],

    'help' => [
        'description' => 'Emal nə edir, hansı şəxsi məlumatları toplayır və onları necə toplayıb qoruyur (mad. 38, yeganə bənd).',
        'necessity' => 'Hər məlumat məqsəd üçün niyə lazımdır və niyə daha az məlumat kifayət etmir.',
        'risks' => 'Risk səviyyəsi = ehtimal x təsir: 1-2 aşağı, 3-4 orta, 6-9 yüksək. Tədbirlərdən sonrakı qiymət olmadıqda qalıq risk ilkin riskə bərabərdir.',
        'candidates' => 'Həssas məlumatlı və ya qanuni marağa əsaslanan, hələ təsir qiymətləndirməsi olmayan emal fəaliyyətləri.',
        'no_candidates' => 'Belə fəaliyyətlərin hamısının qiymətləndirməsi var.',
    ],

    'scale' => [
        '1' => '1 - Aşağı',
        '2' => '2 - Orta',
        '3' => '3 - Yüksək',
    ],

    'levels' => [
        'low' => 'Aşağı',
        'medium' => 'Orta',
        'high' => 'Yüksək',
    ],

    'threats' => [
        'linking' => 'Əlaqələndirmə',
        'identifying' => 'İdentifikasiya',
        'non_repudiation' => 'İnkar edilməzlik',
        'detecting' => 'Aşkarlama',
        'data_disclosure' => 'Məlumatların ifşası',
        'unawareness' => 'Xəbərsizlik',
        'non_compliance' => 'Uyğunsuzluq',
    ],

    'statuses' => [
        'draft' => 'Qaralama',
        'approved' => 'Təsdiqlənib',
        'review_due' => 'Yoxlama vaxtı çatıb',
    ],

    'reasons' => [
        'sensitive_data' => 'həssas məlumatlar',
        'legitimate_interest' => 'qanuni maraq',
    ],

    'actions' => [
        'approve' => 'Təsdiq et',
        'export' => 'İxrac (JSON)',
        'candidates' => 'Çatışmayan qiymətləndirmələr',
        'close' => 'Bağla',
    ],

    'notifications' => [
        'approved' => 'Təsirin qiymətləndirilməsi təsdiqləndi',
        'no_risks' => 'Təsdiqdən əvvəl ən azı bir riski qiymətləndirin.',
    ],
];
