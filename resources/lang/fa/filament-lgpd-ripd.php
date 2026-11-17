<?php

return [
    'resource' => [
        'label' => 'ارزیابی اثر',
        'plural_label' => 'ارزیابی‌های اثر (RIPD)',
    ],

    'fields' => [
        'title' => 'عنوان',
        'processing_activity' => 'فعالیت پردازش',
        'description' => 'شرح پردازش',
        'necessity' => 'ضرورت و تناسب',
        'risks' => 'ریسک‌ها',
        'risk_title' => 'ریسک',
        'threat' => 'تهدید (LINDDUN)',
        'likelihood' => 'احتمال',
        'impact' => 'اثر',
        'measures' => 'اقدامات، تضمین‌ها و سازوکارهای کاهش',
        'residual_likelihood' => 'احتمال پس از اقدامات',
        'residual_impact' => 'اثر پس از اقدامات',
        'dpo_opinion' => 'نظر مسئول حفاظت از داده',
        'status' => 'وضعیت',
        'inherent_risk' => 'بیشترین ریسک',
        'residual_risk' => 'بیشترین ریسک باقی‌مانده',
        'next_review_at' => 'بازبینی بعدی',
        'approved_by' => 'تأییدکننده',
    ],

    'help' => [
        'description' => 'پردازش چه می‌کند، چه داده‌های شخصی‌ای جمع می‌کند و چگونه آن‌ها را جمع‌آوری و ایمن می‌کند (ماده ۳۸، بند واحد).',
        'necessity' => 'چرا هر داده برای هدف لازم است و چرا داده کمتر کافی نیست.',
        'risks' => 'سطح ریسک = احتمال × اثر: ۱-۲ کم، ۳-۴ متوسط، ۶-۹ زیاد. بدون امتیازهای پس از اقدامات، ریسک باقی‌مانده همان ریسک ذاتی است.',
        'candidates' => 'فعالیت‌های پردازشی با داده‌های حساس یا مبتنی بر منافع مشروع که هنوز ارزیابی اثر ندارند.',
        'no_candidates' => 'همه این فعالیت‌ها ارزیابی دارند.',
    ],

    'scale' => [
        '1' => '۱ - کم',
        '2' => '۲ - متوسط',
        '3' => '۳ - زیاد',
    ],

    'levels' => [
        'low' => 'کم',
        'medium' => 'متوسط',
        'high' => 'زیاد',
    ],

    'threats' => [
        'linking' => 'پیوند دادن',
        'identifying' => 'شناسایی',
        'non_repudiation' => 'عدم انکار',
        'detecting' => 'آشکارسازی',
        'data_disclosure' => 'افشای داده',
        'unawareness' => 'ناآگاهی',
        'non_compliance' => 'عدم انطباق',
    ],

    'statuses' => [
        'draft' => 'پیش‌نویس',
        'approved' => 'تأییدشده',
        'review_due' => 'زمان بازبینی رسیده',
    ],

    'reasons' => [
        'sensitive_data' => 'داده‌های حساس',
        'legitimate_interest' => 'منافع مشروع',
    ],

    'actions' => [
        'approve' => 'تأیید',
        'export' => 'خروجی (JSON)',
        'candidates' => 'ارزیابی‌های ناموجود',
        'close' => 'بستن',
    ],

    'notifications' => [
        'approved' => 'ارزیابی اثر تأیید شد',
        'no_risks' => 'پیش از تأیید دست‌کم یک ریسک را ارزیابی کنید.',
    ],
];
