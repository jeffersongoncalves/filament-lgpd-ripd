<?php

return [
    'resource' => [
        'label' => 'Relatório de impacto',
        'plural_label' => 'Relatórios de impacto (RIPD)',
    ],

    'fields' => [
        'title' => 'Título',
        'processing_activity' => 'Atividade de tratamento',
        'description' => 'Descrição do tratamento',
        'necessity' => 'Necessidade e proporcionalidade',
        'risks' => 'Riscos',
        'risk_title' => 'Risco',
        'threat' => 'Ameaça (LINDDUN)',
        'likelihood' => 'Probabilidade',
        'impact' => 'Impacto',
        'measures' => 'Medidas, salvaguardas e mecanismos de mitigação',
        'residual_likelihood' => 'Probabilidade após as medidas',
        'residual_impact' => 'Impacto após as medidas',
        'dpo_opinion' => 'Parecer do encarregado',
        'status' => 'Situação',
        'inherent_risk' => 'Maior risco',
        'residual_risk' => 'Maior risco residual',
        'next_review_at' => 'Próxima revisão',
        'approved_by' => 'Aprovado por',
    ],

    'help' => [
        'description' => 'O que o tratamento faz, os dados pessoais coletados e a metodologia de coleta e de garantia da segurança (art. 38, parágrafo único).',
        'necessity' => 'Por que cada dado é necessário para a finalidade e por que menos dados não bastariam.',
        'risks' => 'Nível de risco = probabilidade x impacto: 1-2 baixo, 3-4 médio, 6-9 alto. Sem as notas após as medidas, o risco residual é o inerente.',
        'candidates' => 'Atividades de tratamento com dados sensíveis ou baseadas em legítimo interesse, ainda sem relatório de impacto.',
        'no_candidates' => 'Todas essas atividades de tratamento têm relatório.',
    ],

    'scale' => [
        1 => '1 - Baixa',
        2 => '2 - Média',
        3 => '3 - Alta',
    ],

    'levels' => [
        'low' => 'Baixo',
        'medium' => 'Médio',
        'high' => 'Alto',
    ],

    'threats' => [
        'linking' => 'Vinculação',
        'identifying' => 'Identificação',
        'non_repudiation' => 'Não repúdio',
        'detecting' => 'Detecção',
        'data_disclosure' => 'Divulgação de dados',
        'unawareness' => 'Desconhecimento do titular',
        'non_compliance' => 'Não conformidade',
    ],

    'statuses' => [
        'draft' => 'Rascunho',
        'approved' => 'Aprovado',
        'review_due' => 'Revisão pendente',
    ],

    'reasons' => [
        'sensitive_data' => 'dados sensíveis',
        'legitimate_interest' => 'legítimo interesse',
    ],

    'actions' => [
        'approve' => 'Aprovar',
        'export' => 'Exportar (JSON)',
        'candidates' => 'Relatórios faltando',
        'close' => 'Fechar',
    ],

    'notifications' => [
        'approved' => 'Relatório de impacto aprovado',
        'no_risks' => 'Avalie ao menos um risco antes de aprovar.',
    ],
];
