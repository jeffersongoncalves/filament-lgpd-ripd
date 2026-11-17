<?php

return [
    'resource' => [
        'label' => '影响评估',
        'plural_label' => '影响评估（RIPD）',
    ],

    'fields' => [
        'title' => '标题',
        'processing_activity' => '处理活动',
        'description' => '处理说明',
        'necessity' => '必要性与相称性',
        'risks' => '风险',
        'risk_title' => '风险',
        'threat' => '威胁（LINDDUN）',
        'likelihood' => '可能性',
        'impact' => '影响',
        'measures' => '措施、保障和缓解机制',
        'residual_likelihood' => '采取措施后的可能性',
        'residual_impact' => '采取措施后的影响',
        'dpo_opinion' => '数据保护官意见',
        'status' => '状态',
        'inherent_risk' => '最高风险',
        'residual_risk' => '最高剩余风险',
        'next_review_at' => '下次审查',
        'approved_by' => '批准人',
    ],

    'help' => [
        'description' => '处理做什么、收集哪些个人数据以及如何收集和保护（第 38 条唯一款）。',
        'necessity' => '为什么每项数据对目的都是必要的，以及为什么更少的数据不够。',
        'risks' => '风险等级 = 可能性 x 影响：1-2 低，3-4 中，6-9 高。没有措施后评分时，剩余风险等于固有风险。',
        'candidates' => '包含敏感数据或基于合法利益、尚无影响评估的处理活动。',
        'no_candidates' => '所有此类处理活动都已有评估。',
    ],

    'scale' => [
        '1' => '1 - 低',
        '2' => '2 - 中',
        '3' => '3 - 高',
    ],

    'levels' => [
        'low' => '低',
        'medium' => '中',
        'high' => '高',
    ],

    'threats' => [
        'linking' => '关联',
        'identifying' => '识别',
        'non_repudiation' => '不可否认',
        'detecting' => '检测',
        'data_disclosure' => '数据泄露',
        'unawareness' => '不知情',
        'non_compliance' => '不合规',
    ],

    'statuses' => [
        'draft' => '草稿',
        'approved' => '已批准',
        'review_due' => '需要审查',
    ],

    'reasons' => [
        'sensitive_data' => '敏感数据',
        'legitimate_interest' => '合法利益',
    ],

    'actions' => [
        'approve' => '批准',
        'export' => '导出（JSON）',
        'candidates' => '缺少的评估',
        'close' => '关闭',
    ],

    'notifications' => [
        'approved' => '影响评估已批准',
        'no_risks' => '批准前请至少评估一项风险。',
    ],
];
