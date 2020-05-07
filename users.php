<?php 

	// class parents
	class Users {
		public $username,
			   $nama,
			   $email,
			   $telepon;


		public function __construct( $username, $nama, $email, $telepon, $nama_usaha = "", $nominal = ""  ) {
			$this->username = $username;
			$this->nama = $nama;
			$this->email = $email;
			$this->telepon = $telepon;
			$this->nama_usaha = $nama_usaha;
			$this->nominal = $nominal;
		}

		public function __toString() {
			return $this->username . " , " . $this->nama . " , " . $this->email . " , " . $this->telepon;
		}


	}

	// child class
	class Pengusaha extends Users {
		public $nama_usaha;
		public function getInfoPengusaha() {
			$str = "{$this->username}  ,  {$this->nama} , {$this->email} , {$this->telepon} || {$this->nama_usaha}";
			return $str;

		}
	}

	// child class 
	class Investor extends Users {
		public $nominal;
		public function getInfoInvestor() {
			$str = "{$this->username} , {$this->nama} , {$this->email} , {$this->telepon} || (Rp. {$this->nominal})";
			return $str;

		}
	} 

	// isinya informasi tentang user, pengusaha, dan investor.
	// pengusaha bertambah informasi tentang nama usahanya
	// investor bertambah informasi tentang nominal investasinya
	$user1 = new Users("daffaallamr", "Daffa Allam Renanda", "daffa@gmail.com", "081555666777");
	$user2 = new Pengusaha("wahyusupra", "Wahyu Suprayogi", "wahyu@gmail.com", "081555666888", "Ayam Grepek Wong Solo", 0);
	$user3 = new Investor("aqin", "Thowiilul", "thowiilul@gmail.com", "081555666999", "", 5000000);

	echo "User 1 : " . $user1;
	echo "<br>";
	echo "Pengusaha : " . $user2->getInfoPengusaha();
	echo "<br>";
	echo "Investor : " . $user3->getInfoInvestor();
	

?>