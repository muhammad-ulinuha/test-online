<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

	<div class="container">
		<div class="row">
			<div class="col">
				<h1 class="text-center mt-5">Post</h1>
				<hr>
			
				<div class="row">
				<?php 
				foreach($getPost as $post){
				?>
					<div class="col-sm-6 mt-4">
						<div class="card">
						<div class="card-body">
							<h5 class="card-title"><?= $post['title']; ?></h5>
							<p class="card-text"><?= $post['content']; ?></p>
						</div>
						</div>
					</div>
					<?php } ?>
				</div>

				</div>
		</div>
	</div>

<?= $this->endSection() ?>