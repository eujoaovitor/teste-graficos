<?php

$grafico = [
    "type" => "bar",
    "data" => [
        "labels" => [],
        "datasets" => [[
            "label" => "Faturamento",
            "data" => [],
            "borderWidth" => 1
        ]]
    ],
    "options" => [
        "scales" => [
            "y" => [
                "beginAtZero" => true
            ]
        ]
    ]
];

$labels = ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho'];

foreach ($labels as $label) {
    $grafico["data"]["labels"][] = $label;
    $grafico["data"]["datasets"][0]["data"][] = rand(1, 1000000);
}


header('Content-Type: application/json; charset=UTF-8');
echo json_encode(
    $grafico,
    JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP | JSON_UNESCAPED_UNICODE
);
