



<ul class="main">
	<?php
	$query = mysqli_query($koneksi, "SELECT * FROM blog");

	while($row = mysqli_fetch_assoc($query)){
		echo "<li><img src='".BASE."images/$row[gambar]'>
					<span>

					<h3>$row[judul]</h3>
						<p>$row[materi]</p>
					</span>
				</li>";
	}
	?>
</ul>