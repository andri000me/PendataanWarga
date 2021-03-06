<section class="content-header">
      <h1>Users</h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i></a></li>
        <li class="active">Users</li>
      </ol>
</section>

<section class="content">
      
	<div class="box">
		<div class="box-header">
			<center><h3 class="box-tittle">Edit Users</h3></center>
			<div>
				<a href="<?=site_url('user/index')?>" class="btn btn-warning btn-flat">
					<i class="fa fa-undo"> Back</i>
				</a>
			</div>
		</div>
		<div class="box-body">
			<div class="">
				<div class="col-md-4 col-md-offset-4">
					<form action="" method="post">
						<div class="form-group <?=form_error('fullname') ? 'has-error' : null ?>">
							<label>Name </label>
							<input type="hidden" name="user_id" value="<?=$row->user_id?>">
							<input type="text" name="fullname" value="<?=$this->input->post('fullname') ? $this->input->post('fullname') : $row->name?>" class="form-control">
							<?=form_error('fullname')?>
						</div>
						<div class="form-group <?=form_error('username') ? 'has-error' : null ?>">
							<label>Username </label>
							<input type="text" name="username" value="<?=$this->input->post('username') ? $this->input->post('username') : $row->username?>" class="form-control">
							<?=form_error('username')?>
						</div>
						<div class="form-group <?=form_error('password') ? 'has-error' : null ?>">
							<label>Password </label> <small>Biarkan kosong jika tidak diisi</small>
							<input type="password" name="password" value="<?=$this->input->post('password') ?>" class="form-control">
							<?=form_error('password')?>
						</div>
						<div class="form-group <?=form_error('passconf') ? 'has-error' : null ?>">
							<label>Password Confirmation </label>
							<input type="password" name="passconf" value="<?=$this->input->post('passconf')?>" class="form-control">
							<?=form_error('passconf')?>
						</div>
						<div class="form-group <?=form_error('address') ? 'has-error' : null ?>">
							<label>Address </label>
							<textarea name="address" class="form-control"><?=$this->input->post('address') ? $this->input->post('address') : $row->address?></textarea>
							<?=form_error('address')?>
						</div>
						<div class="form-group <?=form_error('level') ? 'has-error' : null ?>">
							<label>Level </label>
							<select name="level" class="form-control">
								<?php $level = $this->input->post('level') ? $this->input->post('level') : $row->level ?>
								<option value="1">Admin</option>
								<option value="2"<?=$level == 2 ? 'selected' : null ?>>RT</option>
								<option value="3"<?=$level == 3 ? 'selected' : null ?>>Bendahara</option>
							</select>
							<?=form_error('level')?>
						</div>
						<div class="form-group">
							<button type="submit" class="btn btn-success btn-flat">
								<i class="fa fa-paper-plane"></i>Save
							</button>
							<button type="reset" class="btn btn-flat">Reset</button>
						</div>
					</form>
				</div>
			</div>
			
		</div>
	</div>
        
</section>