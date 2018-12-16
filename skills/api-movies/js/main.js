(function(){
	'use strict';

	let body = document.querySelector('body');
	let films = document.querySelector('.films');
	let filmValue = document.querySelector('.home-search input');
	let filmsRow = document.querySelector('.films-row');


	/***********Listener for POPUP************/
	if(films){
		films.addEventListener('click', function(event){
			let self = event.target;
			while(self != this){
				if(self.classList.contains('films-portfolio-img')){
					self.parentElement.querySelector('.modal').classList.add('active');
					return;
				}
				self = self.parentElement;
			}
		}, false);
	}


	/***********Listener for POPUP close button************/
	if(body) {
		body.addEventListener('click', function (event) {
			let self = event.target;
			if (self.classList.contains('modal_close-button')) {
				while (self != this) {
					if (self.classList.contains('modal')) {
						self.classList.remove('active');
						return;
					}
					self = self.parentElement;
				}
			}
		}, false);
	}


	/***********Listener for INPUT************/
	if(filmValue){
		filmValue.addEventListener('input', function(){

			if(filmValue.value == ''){
				filmsRow.innerHTML = "";
				filmsRow.insertAdjacentHTML('beforeEnd', `
						<div class="col-12"><strong>Nothing added!</strong> Please add something into the search field!</div>
					`);
			}
			else {
				let url = `https://api.themoviedb.org/3/search/movie?api_key=6798ccc84f05ae3affe8981ed353f461&query=${filmValue.value}`;
				fetch(url)
					.then(response => {
						if(response.status == 200){
							return Promise.resolve(response);
						}
						else {
							return Promise.reject(new Error(response.statusText));
						}
					})
					.then(response => response.json())
					.then(data => {

						filmsRow.innerHTML = "";
						for(let i = 0; i < data.results.length; i++){
							filmsRow.insertAdjacentHTML('beforeEnd', `
							<div class="col-12 col-sm-6 col-md-4 col-lg-3">
								<div class="films-portfolio">
									<!--Poster-->
									<div class="films-portfolio-img">
										<img src="http://image.tmdb.org/t/p/w500/${data.results[i].poster_path}" alt="${data.results[i].title}">
										<a href="javascript:void(0)" class="popup-btn" data-name="${data.results[i].title}"><i class="fa fa-play"></i></a>
									</div>
				
									<!--Description film-->
									<div class="films-portfolio-content">
										<h2 class="films-title">${data.results[i].title}</h2>
										<div class="review">
											<span class="date">${data.results[i].release_date}</span>
											<span class="voiters"><strong>${data.results[i].vote_count}</strong> voters</span>
										</div>
									</div>
									
									<!--PopUp-->
									<div class="modal">
										<div class="modal_content">
											<span class="modal_close-button">&times;</span>
											<div class="container">
												<div class="row">
									
													<div class="col-3">
														<div class="modal_content_poster">
															<img src="http://image.tmdb.org/t/p/w500/${data.results[i].poster_path}" alt="${data.results[i].title}">
														</div>
													</div>
									
													<div class="col-9">
														<div class="modal_content_name">
															<div class="title">
																<h2>${data.results[i].title}</h2>
																<p>Date: <span>${data.results[i].release_date}</span></p>
																<p>Original Language: <span>${data.results[i].original_language}</span></p>
															</div>
									
															<div class="description">
																<h2>Overview</h2>
																<p>${data.results[i].overview}</p>
															</div>
									
															<div class="feature">
																<h2>Popularity & Voters</h2>
																<div class="feature-count">
																	<span class="feature-count-popular">Popularity: <strong>${data.results[i].popularity}</strong></span>
																	<span class="feature-count-voiters">Voters: <strong>${data.results[i].vote_count}</strong></span>
																</div>
															</div>
									
														</div>
													</div>
									
												</div>
											</div>
										</div>
									</div>
									<!--End PopUp-->
				
								</div><!--end films-portfolio-->
							</div><!--end col-3-->
					`);/*end filmsRow*/

						}/*end for*/
					})/*end .then*/
			}/*end else*/
		}, false);/*end filmValue*/
	}

}());