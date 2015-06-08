<!-- Main Content -->

<div id="main">
	<div class="container wf-wrap">
		<div class="row">
		
			<!-- Cabinet Content -->
			<section id="cabinet-content" class="clearfix">
			
				<h2 class="cabinetHead">Информация о компании</h2>
				
				<form id="cabinet-company-info" class="form-submit clearfix" method="POST" enctype="multipart/form-data">
				
					<div class="col-sm-6">
						
						<p>
                            <label for="company_name">Название компании</label>
                            <input type="text" value="ЗапорожСтеклоФлюс" id="company_name" name="company_name" class="cabinet-form-input">
                        </p>
						<p>
                            <label for="company_email">Email компании</label>
                            <input type="text" value="stekloflus@gmail.com" id="company_email" name="company_email" class="cabinet-form-input">
                        </p>
						<p>
                            <label for="company_phone">Телефон компании</label>
                            <input type="text" value="+38 061 245 67 45" id="company_phone" name="company_phone" class="cabinet-form-input">
                        </p>
						<p>
                            <label for="company_phone_more">Дополнительный телефон</label>
                            <input type="text" value="+38 061 245 99 00" id="company_phone_more" name="company_phone_more" class="cabinet-form-input">
                        </p>
						<p>
                            <label for="company_country">Страна</label>
                            <select class="cabinet-form-input" id="company_country" name="company_country" data-map="country">
                                <option value="ua"><?=$user_data['country']?></option>
                                <option value="ua">Украина</option>
                                <option value="ru">Россия</option>
                                <option value="bl">Беларуссия</option>
                                <option value="kz">Казахстан</option>
                                <option value="ge">Грузия</option>
                                <!-- AJAX ? -->
                            </select>
                        </p>
                        <p>
                            <label for="company_city">Город</label>
                            <select id="company_city" name="company_city" class="cabinet-form-input" data-map="city">
                                <option value="zp"><?=$user_data['city']?></option>
                                <option value="zp">Запорожье</option>
                                <option value="ky">Киев</option>
                                <option value="kh">Харьков</option>
                                <option value="ky">Львов</option>
                                <option value="dn">Днепропетровск</option>
                                <!-- AJAX ? -->
                            </select>
                        </p>
						<p>
                            <label for="company_street">Улица</label>
                            <input type="text" value="пр. Ленина" id="company_street" name="company_street" class="cabinet-form-input" data-map="street">
                        </p>
						<p>
                            <label for="company_building">Дом</label>
                            <input type="text" value="143" id="company_building" name="company_building" class="cabinet-form-input" data-map="building">
                        </p>
						
						<hr>
						
						<p>
                            <span class="form-submit">
                                <input type="button" name="company_submit" id="company_submit" value="Сохранить">
                            </span>
                        </p>
						
					</div>
					
					<div class="col-sm-6">
						
                        <p>
                            <label>Ваше местоположение на карте</label>
							<div id="map"></div>
                        </p>
					
					</div>
				
				</form>
			
			</section>
		
		</div>
	</div>
</div>