<?php
?>

<?php
include_once 'language.php';
?>
<!DOCTYPE html>
    <head>

		<?php include 'header.php' ?>

		<script src="js/formchecker.js"></script>
</head>
   
<body class="home blog custom-background">
   
	<!-- header navigation -->
    <?php include 'navigation.php' ?>
        
	<div class="content">

		<!-- the container ( align to center ) -->
		<div class="container">
			<div class="row">
	 
				<!-- content -->
				<section class="col s12 m12 l9 mythemes-classic mythemes-classic">
				<!-- post content wrapper -->
				<!-- post content wrapper -->
					<article class="post-915 post type-post status-publish format-standard hentry">

						<h2 class="post-title" style="color:#666666;"><?php echo $lang['Mikro_Titel']?> </h2>
						<div class="clear"></div>
					
						<!-- model content starts here -->
						<div class="post-content">

							<!-- start poll mikro -->

                            <form name="survey" method="POST" action="mesoin.php?utf8=✓<?php if (isset($_GET[">
								<div class="panel-group" id="forms">
                                    <div><input id="uniInput" name="Uni" hidden></div>
                                    <div><input id="kursInput" name="Kurs" hidden></div>
                                    <div><input id="fachbereichInput" name="Fachbereich" hidden></div>
                                    <div><input id="anzahlInput" name="AnzahlStudenten" hidden></div>
                                    <div><input id="semesterInput" name="Semesterzahl" hidden></div>
									<div class="panel panel-default">
										<div class="panel-collapse collapse in" id="second">
										<p>
                                            <?php echo $lang['this']?>
                                            <?php echo $lang['Meso_1_Beschreibung']?>
				</p>
											<table style="width:900px" class="table js-options-table">
												<tr class="header">
														<td colspan="2">
                                                            <?php echo $lang['Meso_1_Frage']?>
														</td>
												</tr>
											
												<tr>
													<td width="10px">
														<input type="radio" name="Einbindung" value="1">
													</td>
													<td>

                                                        <?php echo $lang['Meso_1_Text1']?>													</td>
												</tr>
												<tr>
													<td width="10px">
														<input type="radio" name="Einbindung" value="2">
													</td>
													<td>
                                                        <?php echo $lang['Meso_1_Text2']?>													</td>
												</tr>
												<tr>
													<td width="10px">
														<input type="radio" name="Einbindung" value="3">
													</td>
													<td>
                                                        <?php echo $lang['Meso_1_Text3']?>													</td>
												</tr>
												
											</table> <!---knowledgebuilding negotiable topic question tasks inquiry audience assessment -->
										
											<button type="button" class="btn btn-primary" data-parent="#forms" data-toggle="collapse" data-target="#third"> <?php echo $lang['Btn_Next']?> </button>
										</div>
									</div>
									<div class="panel panel-default">
										<div class="panel-collapse collapse" id="third">
											<table class="table js-options-table">
												<tr class="header">
													<td colspan="2">

                                                        <?php echo $lang['Meso_2_Frage']?>
													</td>
												</tr>
												<tr>
													<td width="10px">
														<input type="radio" name="CreditPoints" value="1">
													</td>
													<td>
                                                        <?php echo $lang['Meso_2_Text1']?>													</td>
												</tr>
												<tr>
													<td width="10px">
														<input type="radio" name="CreditPoints" value="2">
													</td>
													<td>
                                                        <?php echo $lang['Meso_2_Text2']?>													</td>
												</tr>
												<tr>
													<td width="10px">
														<input type="radio" name="CreditPoints" value="3">
													</td>
													<td>
                                                        <?php echo $lang['Meso_2_Text3']?>													</td>
												</tr>
											
											</table> <!---knowledgebuilding negotiable topic question tasks inquiry audience assessment -->
											<button type="button" class="btn btn-primary" data-parent="#forms" data-toggle="collapse" data-target="#fourth"> <?php echo $lang['Btn_Next']?> </button>
										</div>
									</div>
									<div class="panel panel-default">
										<div class="panel-collapse collapse" id="fourth">
											<table class="table js-options-table">
												<tr class="header">
													<td colspan="2">

                                                        <?php echo $lang['Meso_3_Frage']?>
													</td>
												</tr>
												<tr>
													<td width="10px">
														<input type="radio" name="Verortung" value="1">
													</td>
													<td>
                                                        <?php echo $lang['Meso_3_Text1']?>													</td>
												</tr>
												<tr>
													<td width="10px">
														<input type="radio" name="Verortung" value="2">

													</td>
													<td>
                                                        <?php echo $lang['Meso_3_Text2']?>													</td>
												</tr>
												<tr>
													<td width="10px">
														<input type="radio" name="Verortung" value="3">
													</td>
													<td>
                                                        <?php echo $lang['Meso_3_Text3']?>													</td>
												</tr>
											
											</table> <!---knowledgebuilding negotiable topic question tasks inquiry audience assessment -->
											<button type="button" class="btn btn-primary" data-parent="#forms" data-toggle="collapse" data-target="#fifth"> <?php echo $lang['Btn_Next']?> </button>
										</div>
									</div>
									<div class="panel panel-default">
										<div class="panel-collapse collapse" id="fifth">
											<table class="table js-options-table">
												<tr class="header">
													<td colspan="2">

                                                        <?php echo $lang['Meso_4_Frage']?>
														
													</td>
												</tr>
												<tr>
													<td width="10px">
														<input type="radio" name="Prufungsrahmen" value="1">
													</td>
													<td>
                                                        <?php echo $lang['Meso_4_Text1']?>													</td>
												</tr>
												<tr>
													<td width="10px">
														<input type="radio" name="Prufungsrahmen" value="2">
													</td>
													<td>
                                                        <?php echo $lang['Meso_4_Text2']?>													</td>
												</tr>
												<tr>
													<td width="10px">
														<input type="radio" name="Prufungsrahmen" value="3">
													</td>
													<td>
                                                        <?php echo $lang['Meso_4_Text3']?>													</td>
												</tr>
												
											</table> <!---knowledgebuilding negotiable topic question tasks inquiry audience assessment -->
											<button type="button" class="btn btn-primary" data-parent="#forms" data-toggle="collapse" data-target="#sixth"> <?php echo $lang['Btn_Next']?> </button>
										</div>
									</div>
									<div class="panel panel-default">
										<div class="panel-collapse collapse" id="sixth">
											<table class="table js-options-table">
												<tr class="header">
													<td colspan="2">

                                                        <?php echo $lang['Meso_5_Frage']?>
													</td>
												</tr>
												<tr>
													<td width="10px">
														<input type="radio" name="Zeitrahmen" value="1">
													</td>
													<td>
                                                        <?php echo $lang['Meso_5_Text1']?>													</td>
												</tr>
												<tr>
													<td width="10px">
														<input type="radio" name="Zeitrahmen" value="2">
													</td>
													<td>
                                                        <?php echo $lang['Meso_5_Text2']?>													</td>
												</tr>
												<tr>
													<td width="10px">
														<input type="radio" name="Zeitrahmen" value="3">
													</td>
													<td>
                                                        <?php echo $lang['Meso_5_Text3']?>													</td>
												</tr>
											
											</table> <!---knowledgebuilding negotiable topic question tasks inquiry audience assessment -->
											<button type="button" class="btn btn-primary" data-parent="#forms" data-toggle="collapse" data-target="#seventh"> <?php echo $lang['Btn_Next']?> </button>
										</div>
									</div>
									<div class="panel panel-default">
										<div class="panel-collapse collapse" id="seventh">
											<table class="table js-options-table">
												<tr class="header">
													<td colspan="2">

                                                        <?php echo $lang['Meso_6_Frage']?>
														
													</td>
												</tr>
												<tr>
													<td width="10px">
														<input type="radio" name="Ressourcenrahmen" value="1">
													</td>
													<td>
                                                        <?php echo $lang['Meso_6_Text1']?>													</td>
												</tr>
												<tr>
													<td width="10px">
														<input type="radio" name="Ressourcenrahmen" value="2">
													</td>
													<td>
                                                        <?php echo $lang['Meso_6_Text2']?>													</td>
												</tr>
												<tr>
													<td width="10px">
														<input type="radio" name="Ressourcenrahmen" value="3">
													</td>
													<td>
                                                        <?php echo $lang['Meso_6_Text3']?>													</td>
												</tr>
												
											</table> <!---knowledgebuilding negotiable topic question tasks inquiry audience assessment -->
											<button class="btn btn-primary" type="submit"><?php echo $lang['Btn_Send']?></button>
										</div>
									</div>
							</div> <!--complete form div -->
						</form>
						
						<!--model content ends here -->
				
							<div class="clearfix"></div>
						</div> <!-- ende post content -->
					</article>
					<div class=" aligncenter"> </div>
						
				</section>
			
				<!-- widgets -->		
				<?php include 'aside.php' ?>
			</div> <!-- end row -->

		</div><!-- .container -->
	</div><!-- .content -->

   <?php include 'footer.php' ?>
</body>
</html>
<?php
?>		