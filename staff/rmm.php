<?php 
	$staff_id="AC0137";
?>

		
<?php
	$url = "http://learner.arts.pdn.ac.lk/api/get-profile-data.html?userName=api@learner.arts.pdn.ac.lk&userPassword=Pro4iLaP!ARt&id=$staff_id";
	
	$json = file_get_contents($url);
	$json = json_decode($json);
	$profile = $json->staffProfile;
?>

<?php
	$pageId = "staff";
?>

<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
	<title>Department of Archaeology</title>

	<?php require_once "../assets/header.php"; ?>
	
	<!-- begin body content -->
	<?php if($profile){?>
	<div class="container">
		<ol class="breadcrumb">
		  <li><a href="../index.php">Home</a></li>
		  <li class="active">Staff</li>
		  <li><a href="academic.php">Academic</a></li>
		</ol>
        <div class="page">
		<div class="well">
			<div class="row profilePage">
				<div class="col-md-12">
    					<div class="panel col-md-12">
    						<div class="container-fluid">
    							<div class="row">
    								<div class="col-md-8">
        								<div class="col-md-4 pull-left hover-image">
        									<a class="btn btn-light"
        										style="a: hover:backgroud:black; cursor: default;"> <img
        										class="profile-image img-responsive img-fluid"
        										id="profileImg" src="<?php echo "data:image/png;base64, ".$profile->encodedImage;?>" alt="Profile Image">
        									</a>
        								</div>
        								<div class="p-2 col-md-8 profile-content pull-left">
        									<h3 class="name">
        										<span id="nameWithTitle"><?php echo $profile->nameWithTitle;?></span>
        									</h3>
        									<h4>
        										<i><span id="currentPosition"><?php echo $profile->currentPosition;?></span></i>
        									</h4>
        									<h4>
        										<i><span id="titleDescription"><?php echo $profile->titleDescription;?></span></i>
        									</h4>
        									<ul class="list-unstyled">
        										<li><i class="glyphicon glyphicon-tag " title="Deportment"></i>&nbsp;&nbsp;<b>
        												Department of <?php echo $profile->department->displayName;?> </b></li>
												<?php if($profile->emailPrimary!='' || $profile->emailSencondary !=''){ ?>
        										<li><i class="glyphicon glyphicon-envelope" title="Email"></i>
        											<span class="email"> <a class="email-mask email-primary d-none"
        												href=""></a><a class="email-mask email-secondary d-none"
        												href=""></a> <span
        												class="btn btn-xs btn-secondary  mask info-label"
        												>Click to show email
        													address</span></span></li>
												<?php }?>
												<?php if($profile->telephoneHome!=''){?>
        										<li><i class="glyphicon glyphicon-phone-alt"
        											title="Telephone"></i><span class="phone"> <a
        												class="d-none" href=""></a> <span
        												class="btn btn-xs btn-secondary mask info-label"
        												>Click to show phone number</span></span></li>
												<?php }?>
												<?php if($profile->telephoneMobile!=''){?>
												<li><i class="glyphicon glyphicon-phone"
        											title="Mobile"></i><span class="mobile"> <a
        												class="d-none" href=""></a> <span
        												class="btn btn-xs btn-secondary mask info-label"
        												>Click to show mobile number</span></span></li>
												<?php }?>
        									</ul>
        									<div class="text-left">
        										<span id="social-media-link-items">
        											<?php foreach($profile->staffAttributesList as $attribute){?> 
                    									<?php if($attribute->type=="SOCIAL_MEDIA_LINK"){?>
															<?php if($attribute->masterList->listKey != 'GOOGLE_SCHOLAR' && $attribute->masterList->listKey != 'RESEARCH_GATE'){?>
                												<?php if($attribute->attribute02 == null || $attribute->attribute02 == '' ){?>
                                                    				<a href="#"><i id="social-fb"
                                                    					class='<?php echo $attribute->masterList->otherListValue;?> social fa-border'></i></a>
                                                    			<?php }else{?>
                                                    				<a href='<?php echo $attribute->attribute02;?>' target="_blank"><i
                                                    					id="social-fb"
                                                    					class='<?php echo $attribute->masterList->otherListValue;?> social fa-border'></i></a>
                                                    			<?php }?>
                                                    		<?php }?>
                                                    	<?php }?>
                                        			<?php }?>
                                        		</span>
        									</div>
        								</div>
        							</div>
        							<div class="col-md-4">
        								<div class="row" style="margin-top:20px">
											<?php if($profile->googleScholar!=null && $profile->googleScholar!=''){?>
    										<div class="col-md-12">
    											<a class="btn btn-default"
    												href="<?php echo $profile->googleScholar;?>" target="_black"><i
    												id="social-fb" class='fa fa-graduation-cap fa-lg'
    												title="Google Scholar"></i> Google Scholar</a>   
    										</div>
											<?php } ?>
											<?php if($profile->researchGate!=null && $profile->researchGate!=''){ ?>  										
    										<div class="col-md-12" style="padding-top:10px">
    											<a class="btn btn-default"
    												href="<?php echo $profile->researchGate;?>" target="_black"><i
    												id="social-fb" class='fab fa-researchgate fa-lg'
    												title="Google Scholar"></i> &nbsp; &nbsp; Research Gate</a>   
    										</div>
											<?php } ?>
    									</div>
        							</div>
    							</div>
    						</div>
    					</div>
						<?php if($profile->aboutMe){?>
						<div class="panel col-md-12">
							<!-- about me -->
							<section class="about section">
								<div class="section-inner" id="aboutme">   
									<div class="update pull-right"></div>
									<h2 class="heading">About Me</h2>
									<div class="content">
										<p class="text-justify" id="aboutMe"><?php echo $profile->aboutMe;?></p>
									</div>
								</div>
							</section>
						</div>
						<?php } ?>
						<?php if(sizeof($profile->staffAttributesMap->EDUCATION)>0){?>
						<div class="panel col-md-12"> <!-- education -->
							<section class="education section">
								<div class="section-inner">
									<div class="update pull-right"></div>
									<h2 class="heading">Education</h2>
									<div class="content">
										<div  class="item-container">
											<?php foreach($profile->staffAttributesMap->EDUCATION as $item){?>
												<?php if($item->type == "EDUCATION"){?>
													<div class="row panel" style="padding-left:10px">
														<div class="pull-left">
															<i class="fa fa-graduation-cap fa-2x"></i>
														</div>
														<div class="col-sm-11 vertical-center">
															<h3 class="info-label" style="margin-top: 5px; !important"><?php echo $item->attribute01;?></h3>
															<p class="info-label" style="text-align: left;"><?php echo $item->attribute02;?></p>
															<p><span  class="info-label"><?php echo $item->dateFromStr;?></span></p>
														</div>					
													</div>
												<?php }?>
											<?php }?>
										</div>
									</div>
								</div>							
							</section>
						</div>
						<?php } ?>
						<?php if(sizeof($profile->staffAttributesMap->CURRENT_POSITIONS)>0){?>
						<div class="panel col-md-12"> <!-- experience -->
							<section class="experience section">
								<div class="section-inner">
									<div class="update pull-right"></div>
									<h2 class="heading">Current Positions</h2>
									<div class="content">
										<div id="positionsHeld" class="item-container">
											<?php foreach($profile->staffAttributesMap->CURRENT_POSITIONS as $item){?>
												<?php if($item->type == "CURRENT_POSITIONS"){?>
													<div class="row panel" style="padding-left:10px">
														<div class="pull-left">
															<i class="fa fa-user-circle fa-2x"></i>
														</div>
														<div class="col-sm-11 vertical-center">
															<p><?php echo $item->attribute01?> - <?php echo $item->attribute02?></p>
															<p><span  class="info-label"><?php echo $item->dateFromStr;/*echo date('Y M d',strtotime($item->dateFrom));*/?> 
															<?php if($item->dateToStr != null && $item->dateToStr != ''){?>
																- <?php echo $item->dateToStr;?> 
															<?php } ?>
															</span></p>
														</div>					
													</div>
												<?php }?>
											<?php }?>
										</div>
									</div>
								</div>							
							</section>
						</div>
						<?php } ?>
						<?php if(sizeof($profile->staffAttributesMap->POSITIONS_HELD)>0){?>
						<div class="panel col-md-12"> <!-- experience -->
							<section class="experience section">
								<div class="section-inner">
									<div class="update pull-right"></div>
									<h2 class="heading">Positions Held</h2>
									<div class="content">
										<div id="positionsHeld" class="item-container">
											<?php foreach($profile->staffAttributesMap->POSITIONS_HELD as $item){?>
												<?php if($item->type == "POSITIONS_HELD"){?>
													<div class="row panel" style="padding-left:10px">
														<div class="pull-left">
															<i class="fa fa-user-circle fa-2x"></i>
														</div>
														<div class="col-sm-11 vertical-center">
															<p><?php echo $item->attribute01?> - <?php echo $item->attribute02?></p>
															<p><span  class="info-label"><?php echo $item->dateFromStr;/*echo date('Y M d',strtotime($item->dateFrom));*/?> 
															<?php if($item->dateToStr != null && $item->dateToStr != ''){?>
																- <?php echo $item->dateToStr;?> 
															<?php } ?>
															<!-- <?php /* else{ */?>
																To Present
															<?php /* }*/?> -->
															</span></p>
														</div>					
													</div>
												<?php }?>
											<?php }?>
										</div>
									</div>
								</div>							
							</section>
						</div>
						<?php } ?>
						<?php if(sizeof($profile->staffAttributesMap->MEMBERSHIPS)>0){?>
						<div class="panel col-md-12"> <!-- memberships -->
							<section class="membership_awards section">
								<div class="section-inner">
									<div class="update pull-right"></div>
									<h2 class="heading">Memberships</h2>
									<div class="content">
										<div  class="item-container">
											<?php foreach($profile->staffAttributesMap->MEMBERSHIPS as $item){?>
												<?php if($item->type == "MEMBERSHIPS"){?>
													<div class="row panel" style="padding-left:10px">
														<div class="pull-left">
															<i class="fa fa-id-card fa-2x"></i>
														</div>
														<div class="col-sm-11 vertical-center">
															<p><?php echo $item->attribute01?> - <?php echo $item->attribute02?></p>
															<p><span  class="info-label"><?php echo $item->dateFromStr;?></span></p>
														</div>					
													</div>
												<?php }?>
											<?php }?>
										</div>
									</div>
								</div>							
							</section>
						</div>
						<?php } ?>
						<?php if(sizeof($profile->staffAttributesMap->AWARDS)>0){?>
						<div class="panel col-md-12"> <!-- awards -->
							<section class="membership_awards section">
								<div class="section-inner">
									<div class="update pull-right"></div>
									<h2 class="heading">Awards</h2>
									<div class="content">
										<div  class="item-container">
											<?php foreach($profile->staffAttributesMap->AWARDS as $item){?>
												<?php if($item->type == "AWARDS"){?>
													<div class="row panel" style="padding-left:10px">
														<div class="pull-left">
															<i class="fa fa-trophy fa-2x"></i>
														</div>
														<div class="col-sm-11 vertical-center">
															<p><?php echo $item->attribute01?> - <?php echo $item->attribute02?></p>
															<p><span  class="info-label"><?php echo $item->dateFromStr;?></span></p>
														</div>					
													</div>
												<?php }?>
											<?php }?>
										</div>
									</div>
								</div>							
							</section>
						</div>
						<?php } ?>
						<?php 
							$publicationCount = 0;
							foreach($profile->publicationMap as $key => $value){
								$publicationCount++;
							}
						?>
						<?php if($publicationCount>0){?>    					
						<div class="panel col-md-12"> <!-- publications -->
							<section class="publications section">
								<div class="section-inner">
									<div class="update pull-right"></div>
									<h2 class="heading">Publications</h2>
									<div class="content">
										<div  class="item-container">
											<?php foreach($profile->publicationMap as $key => $value){?>
												<div class="heading publication-header"><?php echo $key;?></div>
													<?php foreach($value as $item){?>
														<?php if($item->type == "KEY_PUBLICATIONS"){?>
															<div class="item">
																<div class="row panel" style="padding-left:10px">
																	<div class="pull-left">
																		<i class="fa fa fa-book fa-2x"></i>
																	</div>
																	<div class="col-sm-11 vertical-center" style="padding-left:20px;">
																		<p style="text-align: justify;"><?php echo $item->attribute01;?></p>
																		<p style="text-align: left;"><a href='<?php echo $item->attribute02;?>' target="_blank"><?php echo $item->attribute02;?></a></p>
																	</div>																	
																 </div>
															</div>
														<?php }?>													
												<?php }?>
											<?php }?>
										</div>
									</div>
								</div>							
							</section>
						</div>
						<?php } ?>
						<?php if(sizeof($profile->staffAttributesMap->CONFERENCES)>0){?>    											
						<div class="panel col-md-12"> <!-- conferences -->
							<section class="conferences section">
								<div class="section-inner">
									<div class="update pull-right"></div>
									<h2 class="heading">Conferences</h2>
									<div class="content">
										<div  class="item-container">
											<?php foreach($profile->staffAttributesMap->CONFERENCES as $item){?>
												<?php if($item->type == "CONFERENCES"){?>
													<div class="row panel" style="padding-left:10px">
														<div class="pull-left">
															<i class="fa fa-globe-asia fa-2x"></i>
														</div>
														<div class="col-sm-11 vertical-center">
															<p style="text-align:justify"><?php echo $item->attribute01;?></p>
															<p class="info-label" style="text-align: left;"><?php echo $item->attribute02;?></p>
															<p class="info-label" style="text-align: left;"><?php echo $item->attribute03;?></p>
															<p><span  class="info-label"><?php echo $item->dateFromStr;?></span></p>
														</div>					
													</div>
												<?php }?>
											<?php }?>
										</div>
									</div>
								</div>							
							</section>
						</div> 
						<?php } ?>
						<?php if(sizeof($profile->staffAttributesMap->CREATIVE_WORK)>0){?>    					
						<div class="panel col-md-12"> <!-- Creative Work -->
							<section class="creative_work section">
								<div class="section-inner">
									<div class="update pull-right"></div>
									<h2 class="heading">Creative Work</h2>
									<div class="content">
										<div class="item-container">
											<?php foreach($profile->staffAttributesMap->CREATIVE_WORK as $item){?>
												<?php if($item->type == "CREATIVE_WORK"){?>
													<div class="row panel" style="padding-left:10px">
														<div class="pull-left">
															<i class="fa fa-podcast fa-2x"></i>
														</div>
														<div class="col-sm-11 vertical-center">
															<p style="text-align: justify"><?php echo $item->attribute01;?></p>
														</div>					
													</div>
												<?php }?>
											<?php }?>
										</div>
									</div>
								</div>							
							</section>
						</div> 
						<?php } ?>
						<?php if(sizeof($profile->staffAttributesMap->SPECIALIZATION)>0){?>    											
						<div class="panel col-md-12"> <!-- specialization -->
							<section class="specialization section">
								<div class="section-inner">
									<div class="update pull-right"></div>
									<h2 class="heading">Specialization</h2>
									<div class="content">
										<div  class="item-container">
											<?php foreach($profile->staffAttributesMap->SPECIALIZATION as $item){?>
												<?php if($item->type == "SPECIALIZATION"){?>
													<div class="row panel" style="padding-left:10px">
														<div class="pull-left">
															<i class="fa fa-bullseye fa-2x"></i>
														</div>
														<div class="col-sm-11 vertical-center">
															<p style="text-align:justify"><?php echo $item->attribute01;?></p>
														</div>					
													</div>
												<?php }?>
											<?php }?>
										</div>
									</div>
								</div>							
							</section>
						</div>
						<?php } ?>
						<?php if(sizeof($profile->staffAttributesMap->TEACHING)>0){?>  									
						<div class="panel col-md-12"> <!-- Teaching -->
							<section class="Teaching section">
								<div class="section-inner">
									<div class="update pull-right"></div>
									<h2 class="heading">Teaching</h2>
									<div class="content">
										<div  class="item-container">
											<?php foreach($profile->staffAttributesMap->TEACHING as $item){?>
												<?php if($item->type == "TEACHING"){?>
													<div class="row panel" style="padding-left:10px">
														<div class="pull-left">
															<i class="fa fa-edit fa-2x"></i>
														</div>
														<div class="col-sm-11 vertical-center">
															<p style="text-align:justify"><?php echo $item->attribute01;?><span> - <?php echo $item->attribute02;?></span></p>
															<p style="text-align: left;"><?php echo $item->attribute03;?></p>
															<p><span class="info-label">
															<?php if($item->dateFromStr != null && $item->dateFromStr != ''){?>
																<?php echo $item->dateFromStr;?>
															<?php } ?>															
															<?php if($item->dateFromStr != null && $item->dateFromStr != '' && $item->dateToStr != null && $item->dateToStr != ''){?>
																- 
															<?php } ?>
															<?php if($item->dateToStr != null && $item->dateToStr != ''){?>
																<?php echo $item->dateToStr;?>
															<?php } ?>
															</span></p>
														</div>					
													</div>
												<?php }?>
											<?php }?>
										</div>
									</div>
								</div>							
							</section>
						</div>
						<?php } ?>
						<?php if(sizeof($profile->staffAttributesMap->RESEARCH_INTERESTS)>0){?>    					
						<div class="panel col-md-12"> <!-- Research Interest -->
							<section class="research_interest section">
								<div class="section-inner">
									<div class="update pull-right"></div>
									<h2 class="heading">Research Interests</h2>
									<div class="content">
										<div class="item-container">
											<?php foreach($profile->staffAttributesMap->RESEARCH_INTERESTS as $item){?>
												<?php if($item->type == "RESEARCH_INTERESTS"){?>
													<div class="row panel" style="padding-left:10px">
														<div class="pull-left" style="padding-right: 10px;">
															<i class="fa fa-bookmark fa-2x"></i>
														</div>
														<div class="col-sm-11 align-text-middle vertical-center">
															<p style="text-align: justify"><?php echo $item->attribute01;?></p>
														</div>					
													</div>
												<?php }?>
											<?php }?>
										</div>
									</div>
								</div>							
							</section>
						</div> 
						<?php } ?>
						<?php if(sizeof($profile->staffAttributesMap->ONGONG_RESERCH_AND_PROJECTS)>0){?>
						<div class="panel col-md-12"> <!-- Ongoing Research and Projects -->
							<section class="research section">
								<div class="section-inner">
									<div class="update pull-right"></div>
									<h2 class="heading">Ongoing Research and Projects</h2>
									<div class="content">
										<div class="item-container">
											<?php foreach($profile->staffAttributesMap->ONGONG_RESERCH_AND_PROJECTS as $item){?>
												<?php if($item->type == "ONGONG_RESERCH_AND_PROJECTS"){?>
													<div class="row panel" style="padding-left:10px">
														<div class="pull-left">
															<i class="fa fa-flag fa-2x"></i>
														</div>
														<div class="col-sm-11 vertical-center">
															<span style="text-align: justify;" class="info-label"><?php echo $item->attribute01;?></span>
															<p style="text-align: justify; line-height:1.5 !important"><?php echo $item->attribute02;?></p>
														</div>					
													</div>
												<?php }?>
											<?php }?>
										</div>
									</div>
								</div>							
							</section>
						</div> 
						<?php } ?>
						<?php if(sizeof($profile->staffAttributesMap->RESEARCH_GRANTS_RECEIVED)>0){?>    					
						<div class="panel col-md-12"> <!-- Research Grants Received -->
							<section class="research_grant section">
								<div class="section-inner">
									<div class="update pull-right"></div>
									<h2 class="heading">Research Grants Received</h2>
									<div class="content">
										<div class="item-container">
											<?php foreach($profile->staffAttributesMap->RESEARCH_GRANTS_RECEIVED as $item){?>
												<?php if($item->type == "RESEARCH_GRANTS_RECEIVED"){?>
													<div class="row panel" style="padding-left:10px">
														<div class="pull-left">
															<i class="fa fa-certificate fa-2x"></i>
														</div>
														<div class="col-sm-11 vertical-center">
															<p style="text-align: justify; line-height:1.5 !important""><?php echo $item->attribute01;?></p>
														</div>					
													</div>
												<?php }?>
											<?php }?>
										</div>
									</div>
								</div>							
							</section>
						</div> 
						<?php } ?>
						<?php if(sizeof($profile->staffAttributesMap->OTHER_ACADEMIC_CONTRIBUTIONS)>0){?>    					
						<div class="panel col-md-12"> <!-- Other Academic Contributions -->
							<section class="other_contribution section">
								<div class="section-inner">
									<div class="update pull-right"></div>
									<h2 class="heading">Other Academic Contributions</h2>
									<div class="content">
										<div class="item-container">
											<?php foreach($profile->staffAttributesMap->OTHER_ACADEMIC_CONTRIBUTIONS as $item){?>
												<?php if($item->type == "OTHER_ACADEMIC_CONTRIBUTIONS"){?>
													<div class="row panel" style="padding-left:10px">
														<div class="pull-left">
															<i class="fa fa-cube fa-2x"></i>
														</div>
														<div class="col-sm-11 vertical-center">
															<p style="text-align: justify; line-height:1.5 !important""><?php echo $item->attribute01;?></p>
														</div>					
													</div>
												<?php }?>
											<?php }?>
										</div>
									</div>
								</div>							
							</section>
						</div> 
						<?php } ?>
					</div>					
					
					<div class="col-md-4 hidden">
						<div class="panel">
							<div class="p-2">
        						<h4>Time Line</h4>
        						<ul class="timeline">
        							<?php 
        							     foreach($profile->timeline as $item) {
        									if($item->showInTimeline==1){
        										//echo $item->type;
        							?>
        								<?php if($item->type=="POSITIONS_HELD"){ ?>					
        									<li>
        										<a class="info-label"><?php echo date('Y F',strtotime($item->timelineDatetime));?></a>
        										<p class="m-0"><?php echo $item->attribute01;?></p>
        										<p style="text-align: left;"><?php echo $item->attribute02;?></p>
        										<p style="text-align: left;"><?php echo $item->attribute03;?></p>
        										<p><span  class="info-label"><?php echo date('Y M d',strtotime($item->dateFrom));?> - <?php echo date('Y M d',strtotime($item->dateTo));?></span></p>
        									</li>
        								<?php } ?>
        										
        							<?php	}
        									else{
        						      ?>
        										<li>not</li>
        							<?php 	}
        								}
        							?>
        						</ul>
        					</div>
    					</div>
				</div>
			</div>
		</div>
		<div class="container">
		    <div class="container mt-5 mb-5">
				<div class="row">
					<div class="col-md-9">
						<div class="col-md-12">
							
						</div>
					</div>
					
					
				</div>
			</div>         
		
        </div>
	</div>
	<?php }else{?>
		<h3>No data found for the input staff code: <?php echo $staff_id;?></h3>
	<?php }?>

	<?php require_once "../assets/footer.php" ?>
	<script type="text/javascript">
		$(document).ready(function(){
			//$(".phone").append(phone_mask);
	  	  	$('.phone').click(function() {
		  	  	$(this).find('span').remove(); 
  				$(this).find('a').removeClass('d-none');
  				$(this).find('a').attr("href",'tel:<?php echo $profile->telephoneHome;?>');
  				$(this).find('a').html('<?php echo '<span style="padding-left:5px">'.$profile->telephoneHome.'</span>';?>');
  			});
			$('.mobile').click(function() {
		  	  	$(this).find('span').remove(); 
  				$(this).find('a').removeClass('d-none');
  				$(this).find('a').attr("href",'tel:<?php echo $profile->telephoneMobile;?>');
  				$(this).find('a').html('<?php echo '<span style="padding-left:5px">'.$profile->telephoneMobile.'</span>';?>');
  			});
	  	  	$('.email').click(function() { 
  				$(this).find('span').remove(); 
  				$(this).find('a').removeClass('d-none');
				<?php if($profile->emailPrimary!=''){ ?>
					$(this).find('a.email-primary').attr("href",'mailto:<?php echo $profile->emailPrimary;?>');
					$(this).find('a.email-primary').html('<?php echo '<span style="padding-left:5px">'.$profile->emailPrimary.'</span>';?>');
				<?php }?>
				<?php if($profile->emailSencondary!=''){?>
					$(this).find('a.email-secondary').attr("href",'mailto:<?php echo $profile->emailSencondary;?>');
					<?php if($profile->emailPrimary!=''){ ?>
						$(this).find('a.email-secondary').html('<?php echo '<span> /</span><span style="padding-left:5px">'.$profile->emailSencondary.'</span>';?>');
					<?php } else { ?>
						$(this).find('a.email-secondary').html('<?php echo '<span style="padding-left:5px">'.$profile->emailSencondary.'</span>';?>');	
					<?php } ?>
				<?php }?>
  				
  			});
		});
	</script>
</body>
</html>