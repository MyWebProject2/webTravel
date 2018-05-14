<?php
	$first_time= $first[0]->ngay;
	$first_time1 = strtotime($first_time);
	$thang= date('M',$first_time1);
	$thu= date('D',$first_time1);
	$ngay= date('d',$first_time1);
	$nam= date('Y',$first_time1);
?>
<div class="event-content">
	<div class="event-content-image">
		<img src="<?php echo public_url('site/template/img-event/'.$info->link_img);?>" 
		width= "800" height = "250">
	</div>
	<div class="event-content-info">
		<div class="event-content-info-title">
			<div class="lich">
				<div class="anh-lich">
					<div class="thang">
						<?php echo get_month($thang);?>
					</div>
					<div class="ngay">
						<?php echo $ngay;?>
					</div>
					<div class="thu">
						<?php echo get_thu($thu);?>
					</div>
				</div>
			</div>
			<div class="tieu-de-su-kien">
				<div class="ten-su-kien">
					<h3>
						<?php echo $info->ten;?>
					</h3>
				</div>
				<div class="thoi-gian">

					Thời gian: <span><?php echo get_thu($thu).", Ngày ".$ngay.", ".get_month($thang).", Năm ".$nam." (".$first[0]->gio.")"; ?></span>
				</div>
				<div class="dia-diem">
					<h4 style="font-size: 17px;">
						<?php echo $info->dia_diem;?>
					</h4>
					<p style="color:#5B5B5B;">
						<?php echo $info->dia_chi;?>
					</p>
				</div>
			</div>
		</div>
		<div class="them-lich-trinh">
			<button style="margin-top: 20px;width: 200px;height: 50px;background-color: red;color: white;font-size: 17px;border-radius: 6px;" onclick="window.location.href='' ">
				THÊM VÀO LỊCH TRÌNH
			</button>
			<p style="margin-top: 10px;text-align: center;font-size: 17px;">
				<a href="#danh-sach-thoi-gian">Thay đổi thời gian</a>
				<br> <br>
				<a href="">Xem bản đồ</a>
			</p>
		</div>
	</div>
	<hr style="color: #EEEEEE;">
	<div id="danh-sach-thoi-gian">
		<h4 style="margin-top: 10px;">
			THỜI GIAN
		</h4>
		<br>
		<form action="" method="post">

			<?php foreach($list_time as $row):?>
				<?php
				$thoi_gian= $row->ngay;
				$thoi_gian = strtotime($thoi_gian);
				$m= get_month(date('M',$thoi_gian));
				$D= get_thu(date('D',$thoi_gian));
				$d= date('d',$thoi_gian);
				$y= date('Y',$thoi_gian); 
				?>
				<input type="radio" name="pick_time" required>
			<?php echo "<span style='font-size:19px;'>".$D.", Ngày ".$d.", ".$m.", Năm ".$y." (".$row->gio.")</span>"; ?>
			<br>
		<?php endforeach;?>
		<input type="submit" name="them-lich-trinh" value="THÊM VÀO LỊCH TRÌNH" style="margin-top: 20px;border-radius: 6px;background-color: red; color: white;font-size:17px;width: 200px;height: 50px; ">
		</form>
	</div>
</div>
