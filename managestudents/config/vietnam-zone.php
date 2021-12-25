<?php
return [
    'tables' => [
        'provinces' => 'tbl_tinhthanh',
        'districts' => 'tbl_quanhuyen',
        'wards'     => 'tbl_phuongxa',
    ],

    'columns' => [
        'name'        => 'name',
        'gso_id'      => 'gso_id',
        'province_id' => 'idtinhthanh',
        'district_id' => 'idquanhuyen',
    ],
];
