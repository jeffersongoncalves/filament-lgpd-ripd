<?php

return [
    'resource' => [
        'label' => 'Avaliação de impacto',
        'plural_label' => 'Avaliações de impacto (RIPD)',
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
        'dpo_opinion' => 'Parecer do encarregado da proteção de dados',
        'status' => 'Estado',
        'inherent_risk' => 'Risco mais alto',
        'residual_risk' => 'Risco residual mais alto',
        'next_review_at' => 'Próxima revisão',
        'approved_by' => 'Aprovado por',
    ],

    'help' => [
        'description' => 'O que o tratamento faz, os dados pessoais recolhidos e a metodologia de recolha e de segurança (art. 38, parágrafo único).',
        'necessity' => 'Porque cada dado é necessário para a finalidade e porque menos dados não bastariam.',
        'risks' => 'Nível de risco = probabilidade x impacto: 1-2 baixo, 3-4 médio, 6-9 alto. Sem as notas após as medidas, o risco residual é o inerente.',
        'candidates' => 'Atividades de tratamento com dados sensíveis ou baseadas em interesse legítimo, ainda sem avaliação de impacto.',
        'no_candidates' => 'Todas essas atividades de tratamento têm avaliação.',
    ],

    'scale' => [
        '1' => '1 - Baixa',
        '2' => '2 - Média',
        '3' => '3 - Alta',
    ],

    'levels' => [
        'low' => 'Baixo',
        'medium' => 'Médio',
        'high' => 'Alto',
    ],

    'threats' => [
        'linking' => 'Ligação',
        'identifying' => 'Identificação',
        'non_repudiation' => 'Não repúdio',
        'detecting' => 'Deteção',
        'data_disclosure' => 'Divulgação de dados',
        'unawareness' => 'Desconhecimento',
        'non_compliance' => 'Não conformidade',
    ],

    'statuses' => [
        'draft' => 'Rascunho',
        'approved' => 'Aprovada',
        'review_due' => 'Revisão em falta',
    ],

    'reasons' => [
        'sensitive_data' => 'dados sensíveis',
        'legitimate_interest' => 'interesse legítimo',
    ],

    'actions' => [
        'approve' => 'Aprovar',
        'export' => 'Exportar (JSON)',
        'candidates' => 'Avaliações em falta',
        'close' => 'Fechar',
    ],

    'notifications' => [
        'approved' => 'Avaliação de impacto aprovada',
        'no_risks' => 'Avalie pelo menos um risco antes de aprovar.',
    ],
];
