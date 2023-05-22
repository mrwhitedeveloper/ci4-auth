<div class="container">
	<div class="card mt-2">
		<div class="card-header">
			<div class="user-block">
				<span class="username">
					<a href="#"><?= esc($news['title']) ?>
					</a>
				</span>
			</div>
			<!-- /.user-block -->
			<div class="card-tools">
               
                </div>
			<!-- /.card-tools -->
		</div>
		<!-- /.card-header -->
		<div class="card-body">
			<!-- post text -->
			<p><?= esc($news['body']) ?>
			</p>
		</div>
		<!-- /.card-body -->
	</div>
</div>