@section('hire_me')
<div class="modal" id="modal_hire_me">
    <div class="modal__dialog  modal__dialog--sm">

        <button class="modal__close" type="button" data-close>
			<svg xmlns="http://www.w3.org/2000/svg"  width="30" height="30" fill="currentColor" class="bi bi-x-circle-fill" viewBox="0 0 16 16">
				<path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z"/>
			  </svg>
        </button>


        <div class="contact">
            <div class="contact__left">
                <h3 class="modal__title mb-0">LET'S TALK!</h3>
                <h4 class="modal__subtitle">CALL ME OR SEND ME A REQUEST</h4>

                <ul class="contact__info">
                    <li class="contact__info-item">
                        <svg class="contact__info-icon" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
							<path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
						  </svg>
                        +380 99 43 69 646
                    </li>
                    <li class="contact__info-item">
                        <svg class="contact__info-icon" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
							<path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
						  </svg>
                        +48 516 368 532
                    </li>
                    <li class="contact__info-item">
                        <svg class="contact__info-icon" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
							<path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"/>
						  </svg>
                        taras131104@gmail.com
                    </li>
                </ul>

                <form class="form" action="/" method="post">
                    <div class="form__group">
                        <label class="form__label" for="input-email">Adress e-mail</label>
                        <input class="form__input" name="input-email" type="text" id="input-email" placeholder="Adress e-mail">
                    </div>

                    <div class="form__group">
                        <label class="form__label" for="input-text">Request</label>
                        <textarea class="form__textarea" name="input-text" id="input-text" placeholder="Type your request..."></textarea>
                    </div>

                    <div class="text-right">
                        <button class="btn" type="submit">SEND</button>
                    </div>
                </form>
            </div><!-- /.contact__left -->
            <div class="contact__right">
                <img class="contact_img" src="{{ URL('images/2555.jpg')}}">
            </div>
        </div><!-- /.contact -->

    </div><!-- /.modal__dialog -->
</div><!-- /.modal -->
