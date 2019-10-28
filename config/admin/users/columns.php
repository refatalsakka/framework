<?php

return [
  'username' => [
    'table' => 'users',
    'user_id_table_name' => 'id',
    'filters' => [
      'type' => 'textWithAllowNumber',
      'require' => true,
      'noUmlaut' => true,
      'unique' => 'users',
      'noSpaceBetween' => true,
      'uppercaseNotAllowed' => true,
      'maxLen' => 20,
      'minLen' => 5,
    ],
  ],
  'fname' => [
    'table' => 'users',
    'user_id_table_name' => 'id',
    'filters' => [
      'type' => 'text',
      'require' => true,
      'noSpaceBetween' => true,
      'uppercaseNotAllowed' => true,
      'maxLen' => 20,
      'minLen' => 3,
    ],
  ],
  'lname' => [
    'table' => 'users',
    'user_id_table_name' => 'id',
    'filters' => [
      'type' => 'text',
      'require' => true,
      'noSpaceBetween' => true,
      'uppercaseNotAllowed' => true,
      'maxLen' => 20,
      'minLen' => 3,
    ],
  ],
  'gender' => [
    'table' => 'users',
    'user_id_table_name' => 'id',
    'filters' => [
      'require' => true,
      'containJust' => ['male', 'female'],
    ],
  ],
  'birthday' => [
    'table' => 'users',
    'user_id_table_name' => 'id',
    'filters' => [
      'require' => true,
      'date' => [
        [
          'format' => 'd M Y',
          'start' => '1920',
          'end' => '2004',
        ]
      ],
    ],
  ],
  'email' => [
    'table' => 'users',
    'user_id_table_name' => 'id',
    'filters' => [
      'type' => 'email',
      'require' => true,
      'unique' => 'users',
      'uppercaseNotAllowed' => true,
    ],
  ],
  'status' => [
    'table' => 'users',
    'user_id_table_name' => 'id',
    'filters' => [
      'require' => true,
      'containJust' => [0,1,2],
    ],
  ],
  'country' => [
    'table' => 'address',
    'user_id_table_name' => 'user_id',
    'filters' => [
      'type' => 'text',
      'uppercaseNotAllowed' => true,
      'containJust' => 'path:config/icons:[flags]::keys',
    ],
  ],
  'state' => [
    'table' => 'address',
    'user_id_table_name' => 'user_id',
    'filters' => [
      'uppercaseNotAllowed' => true,
      'type' => 'text',
      'maxLen' => 20,
      'minLen' => 3,
    ],
  ],
  'zip' => [
    'table' => 'address',
    'user_id_table_name' => 'user_id',
    'filters' => [
      'type' => 'number',
      'maxLen' => 5,
      'minLen' => 5,
    ],
  ],
  'city' => [
    'table' => 'address',
    'user_id_table_name' => 'user_id',
    'filters' => [
      'uppercaseNotAllowed' => true,
      'type' => 'text',
      'maxLen' => 20,
      'minLen' => 3,
    ],
  ],
  'street' => [
    'table' => 'address',
    'user_id_table_name' => 'user_id',
    'filters' => [
      'uppercaseNotAllowed' => true,
      'type' => 'text',
      'maxLen' => 20,
      'minLen' => 3,
    ],
  ],
  'house_number' => [
    'table' => 'address',
    'user_id_table_name' => 'user_id',
    'filters' => [
      'type' => 'number',
      'maxLen' => 5,
      'minLen' => 1,
    ],
  ],
  'additional' => [
    'table' => 'address',
    'user_id_table_name' => 'user_id',
    'filters' => [
      'type' => 'textWithAllowNumber',
      'maxLen' => 100,
      'minLen' => 5,
    ],
  ],
];
