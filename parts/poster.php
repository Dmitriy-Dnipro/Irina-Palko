                                <?php
                                    $event_date = strtotime(get_field('event_date'));
                                    $field = get_field_object('event_city');
                                    $value = $field['value'];
                                    $label = $field['choices'][ $value ];  
                                                
                                    $thumb_id = get_post_thumbnail_id();
                                    $thumb_url = wp_get_attachment_image_src($thumb_id,'full', true);
                                ?>
									<?php
										if ( has_term('oratorskoe-iskusstvo', 'activities_category') ) {
									?>
									<div class="card text-center">
										<a href="<?php the_permalink() ?>">
											<img class="card-img-top" src="<?php echo $thumb_url[0]; ?>" alt="Card image cap">
											<div class="card-body">
												<p class="date"><?php echo date_i18n('d F', $event_date);?></p>
												<h3 class="card-title"><?php echo the_title();?></h3>
												<p class="place"><?php echo $label;?></p>
											</div>
										</a>
									</div>
                                <?php
									}
										if ( has_term('motivacionnye-zavtraki', 'activities_category') ) {
										?>
										<div class="card text-center">
											<a href="//irinapalko.com/events/motivacionnye-zavtraki/">
												<img class="card-img-top" src="<?php echo $thumb_url[0]; ?>" alt="Card image cap">
												<div class="card-body">
													<p class="date"><?php echo date_i18n('d F', $event_date);?></p>
													<h3 class="card-title"><?php echo the_title();?></h3>
													<p class="place"><?php echo $label;?></p>
												</div>
											</a>
										</div>
									<?php
									}
                            	?>