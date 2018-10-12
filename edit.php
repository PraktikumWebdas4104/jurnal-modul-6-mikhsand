<?php
	
	$conn=new mysqli("localhost", "root", "", "jurnal6");
	$sql= 'SELECT * FROM akun';
	$query=mysqli_query($conn,$sql);

	echo "<table border=1>
		<thead>
			<tr>
				<th>Nama</th>
				<th>NIM</th>
				<th>Kelas</th>
				<th>Jenis Kelamin</th>
				<th>Alamat</th>
				<th>Fakultas</th>
				<th>Hobi</th>
			</tr>
		</thead>
		<tbody>";

	while ($row=mysqli_fetch_array($query)) {
		echo '<tr>
			<td>'.$row['nama'].'</td>
			<td>'.$row['nim'].'</td>
			<td>'.$row['kelas'].'</td>
			<td>'.$row['jenis kelamin'].'</td>
			<td>'.$row['alamat'].'</td>
			<td>'.$row['fakultas'].'</td>
			<td>'.$row['hobi'].'</td>
		</tr>';
	}
?>