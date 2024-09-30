const form = document.querySelector( "form" );
let statusTxt = form.querySelector( ".button-area span" );

form.onsubmit = (e) =>
{
  e.preventDefault()
  statusTxt.style.display = "block"

  let xhr = new XMLHttpRequest()
  xhr.open("POST", "message.php", true)
  xhr.onload = () =>
  { 
    if ( xhr.readyState === 4 && xhr.status === 200 )
    {
      let response = xhr.response;
      console.log(response)
      statusTxt.innerText = response;
    } else
    {
      statusTxt.innerText = "something went wrong!"
    }
  }
  let formData = new FormData(form)
  xhr.send(formData)
}