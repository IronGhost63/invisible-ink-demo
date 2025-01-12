<div class="contact-form {{ $block->classes }}" style="{{ $block->inlineStyle }}">
  <div class="container mx-auto">
    <h3 class="contact-form__title">{{ $title }}</h3>
    <div class="contact-form__container">
      <h4 class="contact-form__section-title">Your information</h4>
      <div class="contact-form__input-row contact-form__input-row--fullname">
        <div class="contact-form__input-wrapper contact-form__input-wrapper--salutation">
          <select name="salutation" class="contact-form__input contact-form__input--select">
            <option selected disabled>Salutation</option>
            <option>Mr</option>
            <option>Ms</option>
            <option>Mrs</option>
          </select>
        </div>
        <div class="contact-form__input-wrapper contact-form__input-wrapper--firstname">
          <input type="text" name="firstname" class="contact-form__input contact-form__input--text" placeholder="Given name">
        </div>
        <div class="contact-form__input-wrapper contact-form__input-wrapper--lastname">
          <input type="text" name="lastname"class="contact-form__input contact-form__input--text" placeholder="Family name">
        </div>
      </div>
      <div class="contact-form__input-row contact-form__input-row--contact">
        <div class="contact-form__input-wrapper contact-form__input-wrapper--email">
          <input type="email" name="email" class="contact-form__input contact-form__input--email" placeholder="Email">
        </div>
        <div class="contact-form__input-wrapper contact-form__input-wrapper--country-code">
          <select name="country-code" class="contact-form__input contact-form__input--select">
            <option selected>+66</option>
            <option>+65</option>
          </select>
        </div>
        <div class="contact-form__input-wrapper contact-form__input-wrapper--phone">
          <input type="text" name="phone" class="contact-form__input contact-form__input--phone" placeholder="Phone Number">
        </div>
      </div>
      <div class="contact-form__input-row contact-form__input-row--country">
        <div class="contact-form__input-wrapper contact-form__input-wrapper--country">
          <input type="text" name="country" class="contact-form__input contact-form__input--country" placehoder="Which country / region do you reside in?">
        </div>
      </div>
      <h4 class="contact-form__section-title">Which Boutique would you like a reply from?</h4>
      <div class="contact-form__input-row contact-form__input-row--branch">
        <div class="contact-form__input-wrapper contact-form__input-wrapper--branch-country">
          <select name="country" class="contact-form__input contact-form__input--select">
            <option selected disabled>Country/region</option>
            <option>Thailand</option>
            <option>Singapore</option>
          </select>
        </div>
        <div class="contact-form__input-wrapper contact-form__input-wrapper--branch">
          <input type="text" name="branch" class="contact-form__input contact-form__input--text" placeholder="Preferred Boutique">
        </div>
      </div>
      <div class="contact-form__input-row contact-form__input-row--message">
        <div class="contact-form__input-wrapper contact-form__input-wrapper--message">
          <textarea name="message" row="4" class="contact-form__input contact-form__input--textarea">I would like to enquire about the availability of this model.</textarea>
        </div>
      </div>
      <div class="contact-form__input-row contact-form__input-row--agreement">
        <label for="contact-form__agreement" class="contact-form__input-label">
          <input type="checkbox" class="contact-form__input contact-form__input--checkbox" name="agreement" id="contact-form__agreement">
          <p>I agree to the collection and use of my personal data by The Swainson Group in accordance with the <a href="{{ $privacy_policy }}">Privacy Policy</a>.</p>
        </label>
      </div>
      <div class="contact-form__submit-container">
        <button class="contact-form__submit">Submit</button>
      </div>
    </div>
  </div>
</div>
