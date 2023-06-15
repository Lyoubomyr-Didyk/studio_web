<div class="backdrop is-hidden" data-modal>
    <div class="modal">
        <button type="button" class="modal-btn" data-modal-close>
            <svg class="modal-btn-icon" width="8" height="8">
                <use href="./images/sprite.svg#close-modal"></use>
            </svg>
        </button>
        <p class="title-modal-form">Leave your contacts and we will call you back</p>
        <form class="modal-form">
            <label class="modal-field">
                <span class="modal-input-desc">Name</span>
                <span class="input-icon-wrapper">
              <input class="modal-input" type="text" name="user_name" />
              <svg class="modal-icon" width="18" height="24">
                <use href="./images/sprite.svg#person"></use>
              </svg>
            </span>
            </label>

            <label class="modal-field">
                <span class="modal-input-desc">Phone</span>
                <span class="input-icon-wrapper">
              <input class="modal-input" type="tel" name="user_phone" />
              <svg class="modal-icon" width="18" height="24">
                <use href="./images/sprite.svg#phone"></use>
              </svg>
            </span>
            </label>

            <label class="modal-field">
                <span class="modal-input-desc">Email</span>
                <span class="input-icon-wrapper">
              <input class="modal-input" type="email" name="user_email" />
              <svg class="modal-icon" width="18" height="24">
                <use href="./images/sprite.svg#email"></use>
              </svg>
            </span>
            </label>

            <label class="modal-field">
                <span class="modal-input-desc">Comment</span>
                <textarea class="modal-message" name="user_messege" placeholder="Text input"></textarea>
            </label>

            <input id="user-policy" type="checkbox" name="validation_policy" class="form-check hidden" />
            <label for="user-policy" class="form-check-desc">
            <span class="icon-check-box">
              <svg class="icon-check" width="10" height="8">
                <use href="./images/sprite.svg#vector"></use>
              </svg>
            </span>
                I accept the terms and conditions of the&nbsp;
                <a class="form-check-desc-link link" href="">Privacy Policy</a>
            </label>

            <button type="submit" class="hero-btn modal-submit">Send</button>
        </form>
    </div>
</div>