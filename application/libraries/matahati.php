<?php
    class matahati
    {

        public function beli_pakaian($jenis, $jumlah, $harga, $is_member = false)
        {
            $total_harga = $jumlah * $harga;
            $diskon = 0;
    
            switch ($jenis) {
                case 'anak':
                    if ($jumlah >= 2) {
                        $diskon = $total_harga * 0.20;
                    }
                    break;
    
                case 'laki':
                    if ($is_member) {
                        $diskon = $total_harga * 0.35;
                    }
                    break;
    
                case 'wanita':
                    $diskon = $harga * ($jumlah / 2);
                    break;
    
                default:
                    break;
            }
    
            echo "total: ",$total_harga - $diskon;
        }
    
    }
?>