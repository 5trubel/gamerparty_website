<!DOCTYPE html>
<html lang="de" style="scrollbar-color: rgb(54, 54, 54) black">
<style>
:root{
  --gp_red: #FE5000!important;
  --gp_blue: #000!important; 
}

typewriter{
	animation: 
      typing 5s steps(20, end),
      blink-caret .5s step-end infinite !important;
}
</style>

<?php  include("head.php"); ?>
<body>
	<div class="container c_LogoRow">
		<!-- Website Content -->
		<div class="row">	
		<!-- <div class="col text-center"><img class="rounded" src="https://gamerparty.eu/assets/gp_white.png" style="height: 350px; width: 350px;"></div> -->
			<div class="col text-center"><img class="rounded" src="cache/3q9hhYgUZ3FwPfWA_a2ncd.png" style="height: 350px; width: 350px;"></div>
			<div class="col hidemobile">
				<div class="typewriter hidemobile mt-5">
					<center>
						<!--  <h3>Where Gamers come together</h3> -->
						<h3>Under construction!</h3>
					</center>
				</div>
			</div>
		</div>
	</div><!-- Footer -->
	<!--<img src="https://gamerparty.eu/assets/slide_bl.png" style="height: 10px; width:100%">-->
	<div class="container-fluid c_SticktoBottom pt-2" id="events" style="background-color: black">
		<div class="row c_tableoverflow">
			<div class="col-lg-3 col-sm-0"></div>
			<div class="col-lg-6 col-sm-12">
				<?php
					include("php/events.php");
				?>
			</div>
		</div>
	</div>
		<div class="container-fluid c_SticktoBottom" id="infos" style="background-color: black">
			<div class="row box_infos">
			<div class="col-lg-3 col-sm-0"></div>
				<div class="col-lg-6 col-sm-12">
					<div class="row">
						<div class="col-md-4">
							<div class="card">
							<div class="card-body">
									<h4 class="card-title">Who we are</h4>
									<div class="server">
										<p class="card-text">Hey there, we are a friendly multi-gaming communtiy founded in 2015, hosting several gameservers. We regularly have Events in Arma and other games. You're welcome to join us on Teamspeak, Steam and Discord.</p>
									</div>
									<br />
								</div>
							</div>
						</div> 
						<div class="col-md-4">
							<div class="card">
							<div class="card-body">
									<h5 class="card-title">Folding @ Home</h5>
									<h6 class="card-subtitle mb-2 text-muted"></h6>
									<p class="card-text"><i class="fas fa-hand-holding-heart" aria-hidden="true"></i> Current score: <?php echo $fahscore; ?></p>
									<p class="card-text"><i class="fas fa-laptop-house" aria-hidden="true"></i> Current WU-count: <?php echo $fahwu; ?></p>
									<p class="card-text"><i class="fas fa-star" aria-hidden="true"></i> Global Rank: <?php echo $fahrank; ?></p>
									<p class="card-text"><i class="fas fa-microchip" aria-hidden="true"></i> Active CPU(s): <?php echo $fahcpu; ?></p>
									<p class="card-text"><i class="fas fa-donate" aria-hidden="true"></i> Contribute: Team-ID <a class="hiddenhref" href="https://stats.foldingathome.org/team/241564">241564</a></p>
									<p class="card-text"><i class="fas fa-hand-holding-heart" aria-hidden="true"></i> Get F@H <a href="https://foldingathome.org/">here</a></p>
								</div>
							</div><br>
							<br>
						</div>
						<div class="col-md-4">
							<div class="card">
								<img alt="Map Image" class="card-img-top" src="<?php echo $topserver['mapimg']; ?>">
								<div class="card-body">
									<h4 class="card-title"><?php echo ucfirst($topserver['game']); ?></h4>
									<div class="server">
										<div class="grid-container">
										<div class="top_name"><?php echo $topserver['name']; ?></div>
										<div class="top_player">Player: <?php echo $topserver['player']; ?>/<?php echo $topserver['playermax']; ?></div>
										<div class="top_join"><a class="hiddenhref" href="steam://connect/<?php echo $topserver['ip']; ?>">JOIN</a></div>
										<div class="top_map">Map: <?php echo $topserver['map']; ?></div>
										</div>
									</div><br>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div><br>
	<br>
	<br>
	<br>
	<br>
	<div class="showmobile" style="display: none;">
		<br>
		<br>
		<br>
	</div><?php include("footer.php"); ?>
</body>
</html>
