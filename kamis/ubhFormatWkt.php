<?php

function pukul($waktu) {
  
    list($jam, $menit) = explode(':', $waktu);
    
    
    $jamBaru = $jam % 12;
    if ($jamBaru == 0) {
        $jamBaru = 12;
    }
    
    $am_pm = $jam < 12 ? 'am' : 'pm';
    
    return sprintf('%02d:%02d %s', $jamBaru, $menit, $am_pm);
}

echo pukul('10:01');
?>