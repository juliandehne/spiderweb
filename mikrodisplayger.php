<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <?php include 'header.php' ?>
</head> <!-- all the libraries-->
<body class="home blog custom-background" onLoad="
<?php
    if (isset($_GET["id"])) {
        echo "showall([ 'id',";
        echo $_GET["id"];
        echo "])";

    }
?>
        ">
<script src="libs/jquery.js"></script>
<script src="libs/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
<script src="bonsai.js"></script>
<script src="diagram.js"></script>
<script src="serviceout.js"></script>
<script src="Listingout.js"></script>
<<<<<<< HEAD
<div class="dropdown" align="right" style="margin-right:50px;margin-top:-10px;margin-bottom: 20px;">
    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Sprache
        <span class="caret"></span></button>
    <ul class="dropdown-menu dropdown-menu-right">
        <li><a href="mikrodisplayger.php">deutsch</a></li>
        <li><a href="mikrodisplayeng.php">englisch</a></li>
    </ul>
</div> <!-- language toogle -->
<div align="right" style="margin-right:50px;margin-top:10px">
    <a href="mesodisplayger.php">meso</a>
</div><!-- meso / mikro toggle -->
<div align="center">
    <h2><u>Diagramme zur Darstellung verschiedener Kriterien in Universitäten</u></h2>
    <h2><u>mikroebene</u></h2>
</div><!--header -->
<table border="0" align="center">
    <tr>
        <td>
            <table id="labels0" hidden align="center">
                <tr>
                    <td>
                        <p>Universität:</p>
                    </td>
                    <td>
                        <p id="Unilabel0">Dummy</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>Projekttitel:</p>
                    </td>
                    <td>
                        <p id="Kurslabel0">Dummy</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>Fachbereich:</p>
                    </td>
                    <td>
                        <p id="Fachbereichlabel0">Dummy</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>Anzahl von Studierenden:</p>
                    </td>
                    <td>
                        <p id="AnzahlStudentenlabel0">Dummy</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>Semesterzahl der Studierenden:</p>
                    </td>
                    <td>
                        <p id="Semesterzahllabel0">Dummy</p>
                    </td>
                </tr>
            </table>
            <div  id="diagram0" class="dia"></div>
        </td>
        <td>
            <table id="labels1" hidden align="center">
                <tr>
                    <td>
                        <p>Universität:</p>
                    </td>
                    <td>
                        <p id="Unilabel1">Dummy</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>Projekttitel:</p>
                    </td>
                    <td>
                        <p id="Kurslabel1">Dummy</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>Fachbereich:</p>
                    </td>
                    <td>
                        <p id="Fachbereichlabel1">Dummy</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>Anzahl von Studierenden:</p>
                    </td>
                    <td>
                        <p id="AnzahlStudentenlabel1">Dummy</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>Semesterzahl der Studierenden:</p>
                    </td>
                    <td>
                        <p id="Semesterzahllabel1">Dummy</p>
                    </td>
                </tr>
            </table>
            <div  id="diagram1" class="dia"></div>
        </td>
        <td>
            <table id="labels2" hidden align="center">
                <tr>
                    <td>
                        <p>Universität:</p>
                    </td>
                    <td>
                        <p id="Unilabel2">Dummy</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>Projekttitel:</p>
                    </td>
                    <td>
                        <p id="Kurslabel2">Dummy</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>Fachbereich:</p>
                    </td>
                    <td>
                        <p id="Fachbereichlabel2">Dummy</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>Anzahl von Studierenden:</p>
                    </td>
                    <td>
                        <p id="AnzahlStudentenlabel2">Dummy</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>Semesterzahl der Studierenden:</p>
                    </td>
                    <td>
                        <p id="Semesterzahllabel2">Dummy</p>
                    </td>
                </tr>
            </table>
            <div  id="diagram2" class="dia"></div>
        </td>
        <td>
    </tr>
</table> <!--includes all diagrams-->
<div class="collapse" id="table" align="center" style="margin-top:20px;">
<table style="width:500px" class="table table-bordered table-striped js-options-table">
    <tr>
        <td>
            Uni:
        </td>
        <td>
            <input name="Uni" value="" class="stringFilter" size="40">
        </td>
    </tr>
    <tr>
        <td>
            Kurs:
        </td>
        <td>
            <input name="Kurs" value="" class="stringFilter" size="40">
        </td>
    </tr>
    <tr>
        <td>
            Fachbereich:
        </td>
        <td>
            <input name="Fachbereich" value="" class="stringFilter" size="40">
        </td>
    </tr>
    <tr>
        <td>
            Anzahl von Studierenden:
        </td>
        <td>
            <input name="AnzahlStudenten" value="" class="stringFilter" size="40">
        </td>
    </tr>
    <tr>
        <td>
            Semesterzahl der Studierenden:
        </td>
        <td>
            <input name="Semesterzahl" value="" class="stringFilter" size="40">
        </td>
    </tr>
    <tr>
        <td>
            Assessment:
        </td>
        <td>
            <table>
                <tr>
                <td width="150">
                    <input type="radio" name="Assessment" class="dimensionFilter" value="1">
                </td>
                <td width="150">
                    <input type="radio" name="Assessment" class="dimensionFilter" value="2">
                </td>
                <td width="150">
                    <input type="radio" name="Assessment" class="dimensionFilter" value="3">
                </td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
        <td>
            Forschungsthema:
        </td>
        <td>
            <table>
                <tr>
                    <td width="150">
                        <input type="radio" name="Forschungsthema" class="dimensionFilter" value="1">
                    </td>
                    <td width="150">
                        <input type="radio" name="Forschungsthema" class="dimensionFilter" value="2">
                    </td>
                    <td width="150">
                        <input type="radio" name="Forschungsthema" class="dimensionFilter" value="3">
                    </td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
        <td>
            Forschungsfrage:
        </td>
        <td>
            <table>
                <tr>
                    <td width="150">
                        <input type="radio" name="Forschungsfrage" class="dimensionFilter" value="1">
                    </td>
                    <td width="150">
                        <input type="radio" name="Forschungsfrage" class="dimensionFilter" value="2">
                    </td>
                    <td width="150">
                        <input type="radio" name="Forschungsfrage" class="dimensionFilter" value="3">
                    </td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
        <td>
            Planung:
        </td>
        <td>
            <table>
                <tr>
                    <td width="150">
                        <input type="radio" name="Planung" class="dimensionFilter" value="1">
                    </td>
                    <td width="150">
                        <input type="radio" name="Planung" class="dimensionFilter" value="2">
                    </td>
                    <td width="150">
                        <input type="radio" name="Planung" class="dimensionFilter" value="3">
                    </td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
        <td>
            Durchführung:
        </td>
        <td>
            <table>
                <tr>
                    <td width="150">
                        <input type="radio" name="Durchfuhrung" class="dimensionFilter" value="1">
                    </td>
                    <td width="150">
                        <input type="radio" name="Durchfuhrung" class="dimensionFilter" value="2">
                    </td>
                    <td width="150">
                        <input type="radio" name="Durchfuhrung" class="dimensionFilter" value="3">
                    </td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
        <td>
            Reflexion:
        </td>
        <td>
            <table>
                <tr>
                    <td width="150">
                        <input type="radio" name="Reflexion" class="dimensionFilter" value="1">
                    </td>
                    <td width="150">
                        <input type="radio" name="Reflexion" class="dimensionFilter" value="2">
                    </td>
                    <td width="150">
                        <input type="radio" name="Reflexion" class="dimensionFilter" value="3">
                    </td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
        <td>
            Ergebnisdarstellung:
        </td>
        <td>
            <table>
                <tr>
                    <td width="150">
                        <input type="radio" name="Ergebnisdarstellung" class="dimensionFilter" value="1">
                    </td>
                    <td width="150">
                        <input type="radio" name="Ergebnisdarstellung" class="dimensionFilter" value="2">
                    </td>
                    <td width="150">
                        <input type="radio" name="Ergebnisdarstellung" class="dimensionFilter" value="3">
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>
</div> <!-- all the filters -->
<div align="center" style="margin-top:20px;">
    <button type="button" class="btn btn-primary" data-toggle="collapse" data-target="#table">zeige Filter</button>
    <button type="button" class="btn btn-primary" onClick="cleanFilter(); return false">bereinige Filter</button>
    <button type="button" class="btn btn-primary" onClick="showall(Listing())">suche!</button><br> <br>
    <button id="previous" type="button" class="btn btn-info" disabled onClick="previous(Listing());return false;">letzten 3</button>
    <button id="next" type="button" class="btn btn-info" disabled onClick="next(Listing());return false;">nächsten 3</button>
</div> <!-- all the buttons -->
=======
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

						<h2 class="post-title" style="color:#666666;">Mikroebene Darstellung</h2>
						<div class="clear"></div>

						<!-- begin modell content -->
						<div id="left_col">
							<table border="0" align="center">
								<tr>
									<td>
										<div  id="diagram0" class="dia"></div>
									</td>
									<td>
										<div  id="diagram1" class="dia"></div>
									</td>
									<td>
										<div  id="diagram2" class="dia"></div>
									</td>
									<td>
								</tr>
							</table> <!--includes all diagrams-->
						</div>
						
						<div id="right-col">
							<div class="collapse" id="table"  >
							<table class="table table-striped js-options-table">
								<tr>
									<td>
										Uni:
									</td>
									<td>
										<input name="Uni" value="" class="stringFilter" size="40">
									</td>
								</tr>
								<tr>
									<td>
										Kurs:
									</td>
									<td>
										<input name="Kurs" value="" class="stringFilter" size="40">
									</td>
								</tr>
								<tr>
									<td>
										Assessment:
									</td>
									<td>
										
										<input type="radio" name="Assessment" class="dimensionFilter" value="1">
									</td>
									<td>
										<input type="radio" name="Assessment" class="dimensionFilter" value="2">
									</td>
									<td>
										<input type="radio" name="Assessment" class="dimensionFilter" value="3">
									</td>
								</tr>
								
								<tr>
									<td>
										Forschungsthema:
									</td>
									<td>
									
										<input type="radio" name="Forschungsthema" class="dimensionFilter" value="1">
									</td>
									<td>
										<input type="radio" name="Forschungsthema" class="dimensionFilter" value="2">
									</td>
									<td>
										<input type="radio" name="Forschungsthema" class="dimensionFilter" value="3">
									</td>
								</tr>
										
								<tr>
									<td>
										Forschungsfrage:
									</td>
									<td>
										<input type="radio" name="Forschungsfrage" class="dimensionFilter" value="1">
									</td>
									<td>
										<input type="radio" name="Forschungsfrage" class="dimensionFilter" value="2">
									</td>
									<td >
										<input type="radio" name="Forschungsfrage" class="dimensionFilter" value="3">
									</td>
								
								</tr>
										
								<tr>
									<td>
										Planung:
									</td>
									<td>
									
									<td >
										<input type="radio" name="Planung" class="dimensionFilter" value="1">
									</td>
										<td >
									<input type="radio" name="Planung" class="dimensionFilter" value="2">
										</td>
									<td >
										<input type="radio" name="Planung" class="dimensionFilter" value="3">
									</td>
								</tr>
										
								<tr>
									<td>
										Durchführung:
									</td>
									<td>
									
									<td >
										<input type="radio" name="Durchfuhrung" class="dimensionFilter" value="1">
									</td>
										<td >
									<input type="radio" name="Durchfuhrung" class="dimensionFilter" value="2">
									</td>
									<td >
										<input type="radio" name="Durchfuhrung" class="dimensionFilter" value="3">
									</td>
								</tr>
											
								<tr>
									<td>
										Reflexion:
									</td>
									<td>
										<table>
											<tr>
												<td >
													<input type="radio" name="Reflexion" class="dimensionFilter" value="1">
												</td>
												<td >
													<input type="radio" name="Reflexion" class="dimensionFilter" value="2">
												</td>
												<td >
													<input type="radio" name="Reflexion" class="dimensionFilter" value="3">
												</td>
											</tr>
										</table>
									</td>
								</tr>
								<tr>
									<td>
										Ergebnisdarstellung:
									</td>
									<td>
										<table>
											<tr>
												<td >
													<input type="radio" name="Ergebnisdarstellung" class="dimensionFilter" value="1">
												</td>
												<td >
													<input type="radio" name="Ergebnisdarstellung" class="dimensionFilter" value="2">
												</td>
												<td>
													<input type="radio" name="Ergebnisdarstellung" class="dimensionFilter" value="3">
												</td>
											</tr>
										</table>
									</td>
								</tr>
							</table>
							</div> <!-- all the filters -->
						
							<div>
								<button type="button" class="btn btn-primary" data-toggle="collapse" data-target="#table">zeige Filter</button>
								<button type="button" class="btn btn-primary" onClick="cleanFilter(); return false">bereinige Filter</button>
								<button type="button" class="btn btn-primary" onClick="showall(Listing())">suche!</button><br> <br>
								<button id="previous" type="button" class="btn btn-info" disabled onClick="previous(Listing());return false;">letzten 3</button>
								<button id="next" type="button" class="btn btn-info" disabled onClick="next(Listing());return false;">nächsten 3</button>
							</div> <!-- all the buttons -->
						</div> <!-- end right-col -->
						
						<!-- end of modell content -->
						
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
>>>>>>> refs/remotes/origin/master

</body>
</html>