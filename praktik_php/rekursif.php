<?php

$menu = [
    [
        "nama" => "Beranda"
    ],
    [
        "nama" => "Berita",
        "subMenu" => [
            [
                "nama" => "Wisata",
                "subMenu" => [
                    [
                        "nama" => "Pantai"
                    ],
                    [
                        "nama" => "Gunung"
                    ]
                ]                
            ],
            [
                "nama" => "Kuliner"
            ],
            [
                "nama" => "Hiburan"
            ]
        ]
    ],
    [
        "nama" => "Tentang"
    ],
    [
        "nama" => "Kontak"
    ],
];

function tampilkanMenuBertingkat(array $menu, $indentasi = 0) {
    echo "<ul>";
    foreach ($menu as $key => $item) {
        echo "<li>";
        echo str_repeat("&nbsp;", $indentasi);
        echo $item['nama'];
        if (isset($item['subMenu'])) {
            tampilkanMenuBertingkat($item['subMenu'], $indentasi ); 
        }
        echo "</li>";
    }
    echo "</ul>";
}

tampilkanMenuBertingkat($menu);
?>