<?php $__env->startSection('content'); ?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="https://fonts.googleapis.com/css2?family=Capriola&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Handlee&display=swap" rel="stylesheet">

	<style type="text/css">
		h2 {
			margin-bottom: 20px;
			margin-top: 15px;
			color: salmon;
			font-family: 'Capriola', sans-serif;
			font-size: 30px;
		}
		
		.btn {
			color: dimgray;
		}

		label {
			font-family: 'Handlee', cursive; 
			color: dimgray;
		}
	</style>
</head>
<body>
	<div class="container">
	<div class="col-md-10">
	<h2>Input Data Track</h2>
			<form method="post" action="<?php echo e(url('/track')); ?>" enctype="multipart/form-data">
			<?php echo csrf_field(); ?>
				<table>					
					<div class="form-group row">
							<label for="inputEmail3" class="col-sm-2 col-form-label" style="font-size: 20px">Judul Lagu</label>:
					<div class="col-sm-5">
							<input type="text" name="track_name" class=" form-control" id="inputEmail3"style="color: white; background-color: salmon">
					</div>
					</div>

					<div class="form-group row">
							<label for="inputEmail3" class="col-sm-2 col-form-label" style="font-size: 20px">File</label>:
					<div class="col-sm-5">
							<input type="file" name="track_file">
					</div>
					</div>

					<div class="form-group row">
							<label for="inputEmail3" class="col-sm-2 col-form-label" style="font-size: 20px"> Album-Artist</label>:
					<div class="col-sm-5">
							<select name="album_id" class="form-control" style="background-color: salmon; color: white">
							<option value="" holder>-- Pilih --</option>
							<?php $__currentLoopData = $album; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<option value="<?php echo e($row->id); ?>"><?php echo e($row->album_name); ?> - <?php echo e($row->artist->artist_name); ?></option>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							</select>
					</div>
					</div>


					<div class="form-group row">
							<label for="inputEmail3" class="col-sm-2 col-form-label" style="font-size: 20px">Durasi</label>:
					<div class="col-sm-5">
							<input type="text" name="track_time" class=" form-control" id="inputEmail3"style="color: white; background-color: salmon">
					</div>
					</div>
					
				</table>

				<div class="form-group row">
					<div>
						<div class="col-sm-10">
						<button type="submit" class="btn" style="background-color: #D7BDE2 " >Save</button></div>
					</div>
			</form>

	</div>
</div>
</body>
</html>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel_meidy_uas\resources\views/track/add.blade.php ENDPATH**/ ?>