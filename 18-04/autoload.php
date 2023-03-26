<?php 
 $username =  'hoadc';
 $password =  'Hoadc1098';
	try {
		// Kết nối
		$conn = new PDO("mysql:host=localhost; dbname=sql_injection", 'root', '');
		 
		// Thiết lập chế độ lỗi
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		$sql = "SELECT username  FROM  users WHERE username = '$username' AND password = md5('$password') ";

		var_dump($sql);
		 
		$stmt = $conn->prepare("SELECT username  FROM  users WHERE username = '$username' AND password = md5('$password');");                  
                  // Thực thi câu truy vấn
        $stmt->execute();

		// $stmt->setFetchMode(PDO::FETCH_ASSOC); 
     
    // Lấy danh sách kết quả
		$result = $stmt->fetchAll();
		
		var_dump($result);
		// Lặp kết quả
			if (!empty($result)) { 
				echo "hhh" ; 
			} 
		
		} 
	// Nhánh kết nối thất bại
	catch (PDOException $e) {
		echo "Kết nối thất bại: " . $e->getMessage();
	}

?>