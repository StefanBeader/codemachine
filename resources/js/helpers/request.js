export default async function request(url, data) {
  let requestBody = {
    headers: {
      "Content-Type": "application/json",
      "Accept": "application/json",
      "X-Requested-With": "XMLHttpRequest",
      "X-CSRF-Token": document.querySelector('input[name="_token"]').value
    },
    method: "post",
    credentials: "same-origin",
    body: JSON.stringify(data)
  };

  return await fetch(url, requestBody)
    .then(async (response) => {
      if (response.status === 500) {
        return {message: 'Error occurred, please try again later.', error: true}
      } else if(response.status === 422) {
        return await response.json();
      }
      return {message: 'Successfully sent message.', error: false}
    })
    .catch(() => {
      return {message: 'Error occurred, please check you internet connection.', error: true}
    });
}