<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>reddit: the front page of the internet</title>
        <link href="css/styles.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed bg-secondary">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href="index.html"><img src="images/reddit_icon.png"> reddit</a><button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"></button><!-- Navbar Search-->
            
            <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
                <div class="input-group">
                    
                    <div class="input-group-append">
                    	<input class="form-control" type="text" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon1" />
                        <!--<button class="btn btn-primary" type="button"><i class="fas fa-search"></i></button>-->
                    </div>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <div class="input-group-append">
                        <a class="btn btn-secondary" href="#">LOG IN</a>&nbsp;&nbsp;&nbsp;
                        <a class="btn btn-primary" href="#">SIGN UP</a>

                    </div>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ml-auto ml-md-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="#">Settings</a><a class="dropdown-item" href="#">Activity Log</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="login.html">Logout</a>
                    </div>
                </li>
            </ul>
        </nav><br><br><br>

        <div class="container-fluid bg-secondary">
        	<div class="row">
                <div class="col-xl-6">
                	<?php
                	function time_elapsed_string($datetime, $full = false){
                		$now = new DateTime;
                		$ago = new DateTime($datetime);
                		$diff = $now->diff($ago);
                		$diff->w = floor($diff->d / 7);
                		$diff->d -= $diff->w * 7;
                		$string = array(
                			'y' => 'year',
                			'm' => 'month',
                			'w' => 'week',
                			'd' => 'day',
                			'h' => 'hour',
                			'i' => 'minute',
                			's' => 'second',);
                		foreach ($string as $k => &$v) {
                			if ($diff->$k){
                				$v = $diff->$k . ' ' . $v . ($diff->$k > 1 ? 's' : '');
                			}else{
                				unset($string[$k]);
                			}
                		}
                		if (!$full) $string = array_slice($string, 0, 1);
                		return $string ? implode(', ', $string) . ' ago' : 'just now';
                	}

            		foreach($content as $data){ 
         			?>
                    <div class="card mb-4">
                        <div class="card-header"><i class="fas fa-chart-area mr-1"></i><a href="" class="text-dark"><small><strong><?php echo "$data->link";  ?></strong> </a>Posted by <a href="" class="text-dark">u/<?php echo "$data->user_id";  ?></a> <a href="" class="text-dark"><?php echo time_elapsed_string($data->created_time); ?></a></small></div>
                        <div class="card-body mt-0">
                        <h5><?php echo "$data->title"; ?></h5>
                        <?php echo "$data->content";  ?>
                        </div>
                        <div  class="card-footer"> <small class="text-muted"><a href="" class="text-dark"><img src="images/arrow_up.png"></a><a class="text-dark">65.0k</a><a href="" class="text-dark"><img src="images/arrow_down.png"></a><a href="" class="text-dark"></a><a href="" class="text-dark"> 3.1k Comments </a><a href="" class="text-dark"> Share </a><a href="" class="text-dark"> Save </a></small></div>
                    </div>
                    <?php } ?>
                </div>

                <div class="col-xl-6">

                	<div class="row-xl-3">
                		<div class="card" style="width: 18rem;">
                			<div class="card-header">
                				<i class="fas fa-chart-bar mr-3"></i>
                				<small>Today's Top Growing Communities</small>
                			</div>
                			<ol class="list-group list-group-flush">
                				<li class="list-group-item">1. r/Comedy</li>
                				<li class="list-group-item">2. r/AskReddit</li>
                				<li class="list-group-item">3. r/relationAdvice</li>
                				<li class="list-group-item">4. r/Technology</li>
                				<li class="list-group-item">5. r/dankmemes</li>
                			</ol>
                		</div><br>
                	</div>

                	<div class="row-xl-3">
                		<div class="card" style="width: 18rem;">
                			<div class="card-header">
                				<i class="fas fa-chart-bar mr-3"></i>
                				<small>Trending Communities</small>
                			</div>
                			<ol class="list-group list-group-flush">
                				<li class="list-group-item">1. r/Comedy <button type="button" class="btn btn-primary" style="position: absolute; top: 5px; right: 10px;">JOIN</button></li>
                				<li class="list-group-item">2. r/AskReddit <button type="button" class="btn btn-primary" style="position: absolute; top: 5px; right: 10px;">JOIN</button></li>
                				<li class="list-group-item">3. r/relationAdvice <button type="button" class="btn btn-primary" style="position: absolute; top: 5px; right: 10px;">JOIN</button></li>
                				<li class="list-group-item">4. r/Technology <button type="button" class="btn btn-primary" style="position: absolute; top: 5px; right: 10px;">JOIN</button></li>
                				<li class="list-group-item">5. r/dankmemes <button type="button" class="btn btn-primary" style="position: absolute; top: 5px; right: 10px;">JOIN</button></li>
                			</ol>
                		</div><br>
                	</div>
                </div> <!-- col-xl-6 -->
            </div> <!-- row -->
        </div>
                
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/datatables-demo.js"></script>
    </body>

</html>
