export default () => {
  const contactForm = document.querySelector('.contact-form__form');

  if ( contactForm === null) {
    return;
  }

  contactForm.addEventListener('submit', async (e) => {
    e.preventDefault();

    const submitButton = contactForm.querySelector('.contact-form__submit');
    const submitMessage = contactForm.querySelector('.contact-form__submit-message');

    submitButton.setAttribute('disabled', true);

    const payload = {
      salutation: contactForm.querySelector('select[name=salutation]').value,
      firstname: contactForm.querySelector('input[name=firstname]').value,
      lastname: contactForm.querySelector('input[name=lastname]').value,
      email: contactForm.querySelector('input[name=email]').value,
      countryCode: contactForm.querySelector('select[name=country-code]').value,
      country: contactForm.querySelector('input[name=country]').value,
      phone: contactForm.querySelector('input[name=phone]').value,
      branchCountry: contactForm.querySelector('select[name=branch-country]').value,
      branch: contactForm.querySelector('input[name=branch]').value,
      message: contactForm.querySelector('textarea[name=message]').value,
      agreement: contactForm.querySelector('input[name=agreement]').value,
    };

    console.log(payload);

    const api = '/wp-json/wp63/v1/submit-contact';

    try {
      submitMessage.textContent = 'Submitting contact';

      const response = await fetch( api, {
        method: 'POST',
        body: JSON.stringify( payload ),
        headers: {
          'Content-Type': 'application/json',
        }
      });

      if (!response.ok) {
        throw new Error(response.message);
      }

      const data = await response.json();

      submitMessage.textContent = 'Your message is sent!';
      submitButton.setAttribute('disabled', false);
    } catch ( error ) {
      submitMessage.textContent = error.message;
      submitButton.setAttribute('disabled', false);
    }
  });
}
