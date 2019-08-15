import Request from './helpers/request'
import FormData from './helpers/getFormData'

const form = document.getElementById('contact-message');
const email = document.getElementById('email');
const message = document.getElementById('message');
const responseMessage = document.getElementById('responseMessage');

form.onsubmit = (e) => {
  e.preventDefault();
  return validateForm() ? sendRequest() : false;
};

function validateForm() {
  clearErrors();
  return isValidEmail(email.value.trim()) && isValidMessage(message.value.trim());
}

function renderMessage(message) {
  responseMessage.innerText = message;
  responseMessage.classList.add('show');
}

function isValidEmail(emailText) {
  if (emailText.length === 0) {
    email.classList.add('error');
    renderMessage('Email field is required');
    return false;
  }
  const re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  if (re.test(String(emailText).toLowerCase())) {
    return true;
  }
  email.classList.add('error');
  renderMessage('Not valid Email Address');
  return false;
}

function isValidMessage(messageText) {
  if (messageText.length === 0) {
    message.classList.add('error');
    renderMessage('Message field is required');
    return false;
  }
  return true;
}

function clearErrors() {
  responseMessage.classList.remove('show');
  responseMessage.classList.remove('error');
  email.classList.remove('error');
  message.classList.remove('error');
}

async function sendRequest() {
    let formData = FormData(form);
    let response = await Request('/contactMessage', formData);
    showResponse(response);
    if (!response.errors) {
      form.reset();
    }
}

function showResponse(response) {
  let validationErrors = response.errors;
  if (validationErrors) {
    Object.keys(validationErrors).map(function(key) {
      let inputField = document.querySelector('#'+form.id + ' [name=' + key + ']');
      renderMessage(validationErrors[key]);
      if (inputField) {
        inputField.classList.add('error');
      }
    });
  } else {
    responseMessage.classList.add(response.error ? 'error' : 'success');
    renderMessage(response.message);
  }
}