<?php
    function test() {
        try {
            throw new Exception("Lỗi 2");
        } catch(Exception $e) {
            throw $e;   // dùng throư $e đẩy lỗi 2 trên ra ngoài lỗi 1.
            echo "Lỗi 2 xxxx";
        }
        
        return "fffff";
    }

    try {
        $b = test();
    } catch(Exception $e) {
        echo $e->getMessage();
        echo "Lỗi 1 ";
    }
?>