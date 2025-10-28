<?php 
function validateName($field_list, $field_name, &$errors){
    // 1. Cek Ketersediaan dan Kekosongan
    // Menggunakan empty() lebih ringkas untuk memeriksa isset dan nilai kosong
    if (empty($field_list[$field_name]) || trim($field_list[$field_name]) === '' ){
        // Pesan error lebih jelas
        $errors[] = "Field '" . htmlspecialchars($field_name) . "' tidak boleh kosong."; 
        return false;
    }

    // 2. Bersihkan Nilai (Trim)
    // Gunakan nilai yang sudah di-trim untuk validasi selanjutnya
    $value = trim($field_list[$field_name]); 
    
    // 3. Pola Validasi Nama
    // Pola diperbaiki untuk memastikan karakter selain alfabet, apostrof ('), dan tanda hubung (-) tidak diizinkan.
    $pattern = "/^[a-zA-Z\s'-]+$/"; 

    // 4. Cek Pola (Pattern Matching)
    // Gunakan $value yang sudah di-trim untuk preg_match
    if (!preg_match($pattern, $value)){ 
        // Pesan error lebih jelas
        $errors[] = "Field '" . htmlspecialchars($field_name) . "' hanya boleh mengandung huruf, spasi, tanda hubung, atau apostrof.";
        return false;
    }
    
    // Validasi Lolos
    return true; 
}
?>