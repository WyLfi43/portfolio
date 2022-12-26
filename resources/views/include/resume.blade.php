@section('resume')
<div class="modal" id="modal_resume">
    <div class="modal__dialog">

        <button class="modal__close" type="button" data-close>
			<svg xmlns="http://www.w3.org/2000/svg"  width="30" height="30" fill="currentColor" class="bi bi-x-circle-fill" viewBox="0 0 16 16">
				<path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z"/>
			  </svg>
        </button>


        <div class="modal__content">
            <h3 class="modal__title  text-center">RESUME</h3>

            <div class="text-center">
                <a class="btn btn--thin" href="#">DOWNLOAD PDF</a>
                <a class="btn btn--thin" href="#">PRINT</a>
            </div>

            <div class="timeline">
                <div class="timeline__col  timeline__col--left">
                    <h4 class="timeline__title">PROJECTS</h4>

                    <div class="timeline__item">
                        <time class="timeline__date" datetime="11-21-2019">2022 - <b>Present</b></time>
                        <h5 class="timeline__subtitle">Freelancer</h5>
                        <div class="timeline__position">Art Director</div>
                        <div class="timeline__text">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis debitis autem aspernatur sed iusto maiores nihil magni provident dolore, animi nemo est corporis in facilis eum quae sint aliquam, ipsam?</p>
                        </div>
                    </div>

                    <div class="timeline__item">
                        <time class="timeline__date" datetime="11-21-2019">2022 - <b>Present</b></time>
                        <h5 class="timeline__subtitle">Freelancer</h5>
                        <div class="timeline__position">Art Director</div>
                        <div class="timeline__text">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis debitis autem aspernatur sed iusto maiores nihil magni provident dolore, animi nemo est corporis in facilis eum quae sint aliquam, ipsam?</p>
                        </div>
                    </div>
                <h4 class="timeline__title">Languages</h4>
                    <div class="timeline__item">
                        <div class="timeline__position">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-dot" viewBox="0 0 16 16">
                                <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"/>
                            </svg><b>Ukraine - native</b></div>
                        <div class="timeline__position">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-dot" viewBox="0 0 16 16">
                                <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"/>
                            </svg><b>Russian - professional</b></div>
                        <div class="timeline__position">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-dot" viewBox="0 0 16 16">
                                <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"/>
                            </svg><b>English - professional</b></div>
                            <div class="timeline__position">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-dot" viewBox="0 0 16 16">
                                    <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"/>
                                </svg><b>German - elementary</b>
                            </div>
                    </div>
                </div>

                <div class="timeline__col  timeline__col--right">
                    <h4 class="timeline__title">EDUCATION</h4>

                    <div class="timeline__item">
                        <time class="timeline__date" datetime="11-21-2019">2011 - 2022</time>
                        <h5 class="timeline__subtitle">Gymanasia 18</h5>
                        <div class="timeline__position">Lutsk, Ukraine</div>
                    </div>

                    <div class="timeline__item">
                        <time class="timeline__date" datetime="11-21-2019">2022 - <b>Present</b></time>
                        <h5 class="timeline__subtitle">Computer engineering</h5>
                        <div class="timeline__position">National Technical University, Lutsk, Ukr</div>
                    </div>

                    <h4 class="timeline__title">Skills</h4>
                    <div class="progress-bar">
                        
                        
                        
                        <div class="progress-bar__item">
                            <div class="progress-bar__left">
                                <div class="progress-bar__title">HTML</div>
                            </div>
                            <div class="progress-bar__right">
                                <div class="progress-bar__bar">
                                    <div class="progress-bar__progress" style="width: 90%;"></div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="progress-bar__item">
                            <div class="progress-bar__left">
                                <div class="progress-bar__title">CSS/LESS</div>
                            </div>
                            <div class="progress-bar__right">
                                <div class="progress-bar__bar">
                                    <div class="progress-bar__progress" style="width: 80%;"></div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="progress-bar__item">
                            <div class="progress-bar__left">
                                <div class="progress-bar__title">Photoshop</div>
                            </div>
                            <div class="progress-bar__right">
                                <div class="progress-bar__bar">
                                    <div class="progress-bar__progress" style="width: 90%;"></div>
                                </div>
                            </div>
                        </div>

                        <div class="progress-bar__item">
                            <div class="progress-bar__left">
                                <div class="progress-bar__title">Bootstrap</div>
                            </div>
                            <div class="progress-bar__right">
                                <div class="progress-bar__bar">
                                    <div class="progress-bar__progress" style="width: 70%;"></div>
                                </div>
                            </div>
                        </div>

                        <div class="progress-bar__item">
                            <div class="progress-bar__left">
                                <div class="progress-bar__title">Node.js</div>
                            </div>
                            <div class="progress-bar__right">
                                <div class="progress-bar__bar">
                                    <div class="progress-bar__progress" style="width: 25%;"></div>
                                </div>
                            </div>
                        </div>

                        <div class="progress-bar__item">
                            <div class="progress-bar__left">
                                <div class="progress-bar__title">My SQL</div>
                            </div>
                            <div class="progress-bar__right">
                                <div class="progress-bar__bar">
                                    <div class="progress-bar__progress" style="width: 50%;"></div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="progress-bar__item">
                            <div class="progress-bar__left">
                                <div class="progress-bar__title">Laravel</div>
                            </div>
                            <div class="progress-bar__right">
                                <div class="progress-bar__bar">
                                    <div class="progress-bar__progress" style="width: 50%;"></div>
                                </div>
                            </div>
                        </div>
                    </div><!-- /.progress-bar -->


                    <h4 class="timeline__title">Strengths</h4>

                    <div class="timeline__item">
                        <div class="timeline__position"><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" class="bi bi-hand-thumbs-up-fill" viewBox="0 0 16 16">
                            <path d="M6.956 1.745C7.021.81 7.908.087 8.864.325l.261.066c.463.116.874.456 1.012.965.22.816.533 2.511.062 4.51a9.84 9.84 0 0 1 .443-.051c.713-.065 1.669-.072 2.516.21.518.173.994.681 1.2 1.273.184.532.16 1.162-.234 1.733.058.119.103.242.138.363.077.27.113.567.113.856 0 .289-.036.586-.113.856-.039.135-.09.273-.16.404.169.387.107.819-.003 1.148a3.163 3.163 0 0 1-.488.901c.054.152.076.312.076.465 0 .305-.089.625-.253.912C13.1 15.522 12.437 16 11.5 16H8c-.605 0-1.07-.081-1.466-.218a4.82 4.82 0 0 1-.97-.484l-.048-.03c-.504-.307-.999-.609-2.068-.722C2.682 14.464 2 13.846 2 13V9c0-.85.685-1.432 1.357-1.615.849-.232 1.574-.787 2.132-1.41.56-.627.914-1.28 1.039-1.639.199-.575.356-1.539.428-2.59z"/>
                          </svg> Communication with team 
                        </div>
                        <div class="timeline__position"><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" class="bi bi-hand-thumbs-up-fill" viewBox="0 0 16 16">
                            <path d="M6.956 1.745C7.021.81 7.908.087 8.864.325l.261.066c.463.116.874.456 1.012.965.22.816.533 2.511.062 4.51a9.84 9.84 0 0 1 .443-.051c.713-.065 1.669-.072 2.516.21.518.173.994.681 1.2 1.273.184.532.16 1.162-.234 1.733.058.119.103.242.138.363.077.27.113.567.113.856 0 .289-.036.586-.113.856-.039.135-.09.273-.16.404.169.387.107.819-.003 1.148a3.163 3.163 0 0 1-.488.901c.054.152.076.312.076.465 0 .305-.089.625-.253.912C13.1 15.522 12.437 16 11.5 16H8c-.605 0-1.07-.081-1.466-.218a4.82 4.82 0 0 1-.97-.484l-.048-.03c-.504-.307-.999-.609-2.068-.722C2.682 14.464 2 13.846 2 13V9c0-.85.685-1.432 1.357-1.615.849-.232 1.574-.787 2.132-1.41.56-.627.914-1.28 1.039-1.639.199-.575.356-1.539.428-2.59z"/>
                          </svg> Quickly learn new information
                        </div>
                        <div class="timeline__position">
                            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" class="bi bi-hand-thumbs-up-fill" viewBox="0 0 16 16">
                                <path d="M6.956 1.745C7.021.81 7.908.087 8.864.325l.261.066c.463.116.874.456 1.012.965.22.816.533 2.511.062 4.51a9.84 9.84 0 0 1 .443-.051c.713-.065 1.669-.072 2.516.21.518.173.994.681 1.2 1.273.184.532.16 1.162-.234 1.733.058.119.103.242.138.363.077.27.113.567.113.856 0 .289-.036.586-.113.856-.039.135-.09.273-.16.404.169.387.107.819-.003 1.148a3.163 3.163 0 0 1-.488.901c.054.152.076.312.076.465 0 .305-.089.625-.253.912C13.1 15.522 12.437 16 11.5 16H8c-.605 0-1.07-.081-1.466-.218a4.82 4.82 0 0 1-.97-.484l-.048-.03c-.504-.307-.999-.609-2.068-.722C2.682 14.464 2 13.846 2 13V9c0-.85.685-1.432 1.357-1.615.849-.232 1.574-.787 2.132-1.41.56-.627.914-1.28 1.039-1.639.199-.575.356-1.539.428-2.59z"/>
                          </svg>
                          Stress resistant 
                        </div>
                    </div>
                </div><!-- /.timeline__col -->

            </div><!-- /.timeline -->

            <div class="text-center">
                <a class="btn" href="#" data-modal="#modal_hire_me">Hire me</a>
            </div>

        </div><!-- /.modal__content -->

    </div><!-- /.modal__dialog -->
</div><!-- /.modal -->