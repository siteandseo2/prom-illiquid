<!-- Main Content -->

<div id="main">
    <div class="container wf-wrap">
        <div class="row">

            <!-- Cabinet Content -->
            <section id="cabinet-content" class="clearfix">

                <h2 class="cabinetHead">Информация о компании</h2>

                <form id="cabinet-company-info" class="form-submit clearfix" method="POST" enctype="multipart/form-data">
					
					<div class="row">
					
						<div class="col-sm-6 company_view">

							<div>
								<h4>Название компании:</h4>
								<span><?= $user_data['company'] ?></span>
							</div>
							<div>
								<h4>Контактное лицо:</h4>
								<span><?= $user_data['name'] ?></span>
							</div>
							<div>
								<h4>Email компании:</h4>
								<span><?= $user_data['email'] ?></span>
							</div>
							<div>
								<h4>Телефон компании:</h4>
								<span><?= $user_data['phone'] ?></span>
							</div>
							<?php  if(!empty($user_data['phone_more'])){
							?>
							<div>
								<h4>Дополнительный телефон:</h4>
								<span><?= $user_data['phone_more'] ?></span>
							</div>
							<?php } ?>
							<div>
								<h4>Страна:</h4>
								<span ><?= $user_data['country'] ?></span>
							</div>
							<div>
								<h4>Город:</h4>
								<span ><?= $user_data['city'] ?></span>  
							</div>                       
							<div>
								<h4>Улица:</h4>
								<span ><?= $user_data['street'] ?></span> 
							</div>
							<div>
								<h4>Дом:</h4>
								<span ><?= $user_data['building'] ?></span>       
							</div>
							<p>
								<select class="cabinet-form-input" id="company_country" name="company_country" data-map="country" hidden>
									<option value="ua"><?= $user_data['country'] ?></option>
									<option value="ua">Украина</option>
									<option value="ru">Россия</option>
									<option value="bl">Беларуссия</option>
									<option value="kz">Казахстан</option>
									<option value="ge">Грузия</option>
									<!-- AJAX ? -->
								</select>
							</p>

							<p>
								<select id="city" name="city" class="cabinet-form-input" data-map="city" hidden>
									<option value="zp"><?= $user_data['city'] ?></option>                                
								</select>
							</p>
							<p>

								<input type="text" value="<?= $user_data['street'] ?>" id="company_street" name="company_street" class="cabinet-form-input" data-map="street" hidden>
							</p>
							<p>

								<input type="text" value="<?= $user_data['building'] ?>" id="company_building" name="company_building" class="cabinet-form-input" data-map="building" hidden>
							</p>
							
							<div class="rating clearfix">
								<h4>Рейтинг компании:</h4>
								<span class="star-rating" title="Rated 5.00 of 5">
									<i class="fa fa-star-o"></i>
									<i class="fa fa-star-o"></i>
									<i class="fa fa-star-o"></i>
									<i class="fa fa-star-o"></i>
									<i class="fa fa-star-o"></i>
								</span>
							</div>

						</div>

						<div class="col-sm-6">

							<p>
								<label>Местоположение на карте</label>
							<div id="map"></div>
							</p>


						</div>
						
					</div>
					
					<hr>
					
					<div class="row">
						<div class="col-sm-12">
							
							<div id="reviews_panel" style="display: block;">
								<div id="comments">
									<ul class="commentslist">
										<li class="comment" id="comment-1">
											<div class="comment-container">
												<img src="../../../img/avatar-1.png" alt="" width="60" height="60">
												<div class="comment-text clearfix">
													<div class="star-right clearfix">
														<i class="fa fa-star-o"></i>
														<i class="fa fa-star-o"></i>
														<i class="fa fa-star-o"></i>
														<i class="fa fa-star-o"></i>
														<i class="fa fa-star-o"></i>
													</div>

													<p class="meta">
														<strong class="author">Alex Greenfield</strong>
														-
														<time datetime="2014-09-16T09:33:34+00:00">September 16, 2014</time>
													</p>

													<div class="descr">
														<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris ipsum erat, finibus sit amet fringilla id, accumsan sed nisl. 
															Nulla odio eros, blandit ac metus faucibus, sollicitudin posuere sapien. Maecenas ut convallis arcu. Phasellus at tellus 
															sed odio vestibulum sodales in at lacus. Sed commodo metus et sapien pretium, ac sollicitudin enim dignissim. Donec tempus 
															diam et porta aliquam. Ut efficitur sollicitudin diam a accumsan.</p>
													</div>
												</div>
											</div>
										</li>
										<li class="comment" id="comment-2">
											<div class="comment-container">
												<img src="../../../img/avatar-2.png" alt="" width="60" height="60">
												<div class="comment-text clearfix">
													<div class="star-right clearfix">
														<i class="fa fa-star-o"></i>
														<i class="fa fa-star-o"></i>
														<i class="fa fa-star-o"></i>
														<i class="fa fa-star-o"></i>
													</div>

													<p class="meta">
														<strong class="author">Alex Greenfield</strong>
														-
														<time datetime="2014-09-16T09:33:34+00:00">September 16, 2014</time>
													</p>

													<div class="descr">
														<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris ipsum erat, finibus sit amet fringilla id, accumsan sed nisl. 
															Nulla odio eros, blandit ac metus faucibus, sollicitudin posuere sapien. Maecenas ut convallis arcu. Phasellus at tellus 
															sed odio vestibulum sodales in at lacus. Sed commodo metus et sapien pretium, ac sollicitudin enim dignissim. Donec tempus 
															diam et porta aliquam. Ut efficitur sollicitudin diam a accumsan.</p>
													</div>
												</div>
											</div>
										</li>
									</ul>
								</div>

								<div class="add-review">
									
										<h3>Добавить комментарий о компании</h3>
									
										<div class="comment-form-author">
											<label for="author">Имя *</label>
											<input type="text" name="author" size="30" aria-required="true">
										</div>
										<div class="comment-form-email">
											<label for="email">Email *</label>
											<input type="text" name="email" size="30" aria-required="true">
										</div>
										<div class="comment-form-rating">
											<label>Ваш рейтинг</label>
											<p class="stars">
												<span>
													<i class="fa fa-star-o"></i>
												</span>
												<span>
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
												</span>
												<span>
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
												</span>
												<span>
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
												</span>
												<span>
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
												</span>
											</p>
											<input type="hidden" name="star_rating" value="">
										</div>
										<div class="comment-form-comment">
											<label for="comment">Ваш комментарий</label>
											<textarea name="comment" id="comment" cols="45" rows="8" aria-required="true"></textarea>
										</div>
										<div class="form-submit">
											<input type="submit" name="submit" id="submit" value="Отправить">
										</div>
									
								</div>
							</div>
							
						
						</div>
					</div>

                </form>

            </section>

        </div>
    </div>

</div>