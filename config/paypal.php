<?php 
return [ 
    'client_id' => 'AWPftRgghYMy8Va3S11CjnT2fFNzWz6OWn_DTJVawR812E-JKqbUjVIl2SfZWf6hmoLspkXCcemvbEZH',
	'secret' => 'EB-b3CuQ3mHU1H9e4vg3Q0e8MOp2GIRoOk9Lk14qkQikd8PzXnTw49HT8DKhPBmEVUvDLmlLpK-HhE-A',
    'settings' => array(
        'mode' => 'sandbox',
        'http.ConnectionTimeOut' => 1000,
        'log.LogEnabled' => true,
        'log.FileName' => storage_path() . '/logs/paypal.log',
        'log.LogLevel' => 'FINE'
    ),
];