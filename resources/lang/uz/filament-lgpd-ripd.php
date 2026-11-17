<?php

return [
    'resource' => [
        'label' => 'Ta\'sirni baholash',
        'plural_label' => 'Ta\'sirni baholashlar (RIPD)',
    ],

    'fields' => [
        'title' => 'Sarlavha',
        'processing_activity' => 'Ishlov berish faoliyati',
        'description' => 'Ishlov berish tavsifi',
        'necessity' => 'Zaruriyat va mutanosiblik',
        'risks' => 'Xavflar',
        'risk_title' => 'Xavf',
        'threat' => 'Tahdid (LINDDUN)',
        'likelihood' => 'Ehtimollik',
        'impact' => 'Ta\'sir',
        'measures' => 'Choralar, kafolatlar va yumshatish mexanizmlari',
        'residual_likelihood' => 'Choralardan keyingi ehtimollik',
        'residual_impact' => 'Choralardan keyingi ta\'sir',
        'dpo_opinion' => 'Ma\'lumotlarni himoya qilish bo\'yicha mas\'ulning xulosasi',
        'status' => 'Holat',
        'inherent_risk' => 'Eng yuqori xavf',
        'residual_risk' => 'Eng yuqori qoldiq xavf',
        'next_review_at' => 'Keyingi tekshiruv',
        'approved_by' => 'Tasdiqlagan',
    ],

    'help' => [
        'description' => 'Ishlov berish nima qiladi, qaysi shaxsiy ma\'lumotlarni to\'playdi va ularni qanday to\'plab himoya qiladi (38-modda, yagona xatboshi).',
        'necessity' => 'Har bir ma\'lumot maqsad uchun nega zarur va nega kamroq ma\'lumot yetarli emas.',
        'risks' => 'Xavf darajasi = ehtimollik x ta\'sir: 1-2 past, 3-4 o\'rta, 6-9 yuqori. Choralardan keyingi baholar bo\'lmasa, qoldiq xavf dastlabki xavfga teng.',
        'candidates' => 'Nozik ma\'lumotlarga ega yoki qonuniy manfaatga asoslangan, hali ta\'sirni baholashi yo\'q ishlov berish faoliyatlari.',
        'no_candidates' => 'Bunday faoliyatlarning barchasida baholash bor.',
    ],

    'scale' => [
        '1' => '1 - Past',
        '2' => '2 - O\'rta',
        '3' => '3 - Yuqori',
    ],

    'levels' => [
        'low' => 'Past',
        'medium' => 'O\'rta',
        'high' => 'Yuqori',
    ],

    'threats' => [
        'linking' => 'Bog\'lash',
        'identifying' => 'Identifikatsiya',
        'non_repudiation' => 'Rad etib bo\'lmaslik',
        'detecting' => 'Aniqlash',
        'data_disclosure' => 'Ma\'lumotlarni oshkor qilish',
        'unawareness' => 'Xabarsizlik',
        'non_compliance' => 'Nomuvofiqlik',
    ],

    'statuses' => [
        'draft' => 'Qoralama',
        'approved' => 'Tasdiqlangan',
        'review_due' => 'Tekshiruv vaqti keldi',
    ],

    'reasons' => [
        'sensitive_data' => 'nozik ma\'lumotlar',
        'legitimate_interest' => 'qonuniy manfaat',
    ],

    'actions' => [
        'approve' => 'Tasdiqlash',
        'export' => 'Eksport (JSON)',
        'candidates' => 'Yetishmayotgan baholashlar',
        'close' => 'Yopish',
    ],

    'notifications' => [
        'approved' => 'Ta\'sirni baholash tasdiqlandi',
        'no_risks' => 'Tasdiqlashdan oldin kamida bitta xavfni baholang.',
    ],
];
