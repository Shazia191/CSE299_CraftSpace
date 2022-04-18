const form = document.querySelector(".typing-area"),
inputField = form.querySelector(".input-field"),
sendBtn = form.querySelector("button"),
chatBox = document.querySelector(".chat-box");

form.onsubmit = (e)=>{
  e.preventDefault(); //preventing form from submitting
}

sendBtn.onclick = ()=>{
  //Ajax
  let xhr = new XMLHttpRequest(); //creating XML object
  xhr.open("POST", "php/insert-chat.php", true);
  xhr.onload = ()=>{
    if(xhr.readyState === XMLHttpRequest.DONE){
      if(xhr.status === 200){
         inputField.value = ""; //once message inserted into database then leave blank input field
         scrollToBottom();
      }
    }
  }
  // we have to send the form data through ajax to php
  let formData = new FormData(form);//creating new formData object
  xhr.send(formData);//sending the form data to PHp
}

chatBox.onmouseenter = ()=>{
  chatBox.classList.add("active");
}
chatBox.onmouseleave = ()=>{
  chatBox.classList.remove("active");
}

setInterval(()=>{ 
  //Ajax
 let xhr = new XMLHttpRequest(); //creating XML object
 xhr.open("POST", "php/get-chat.php", true);
 xhr.onload = ()=>{ 
   if(xhr.readyState === XMLHttpRequest.DONE){
     if(xhr.status === 200){
       let data = xhr.response;
       chatBox.innerHTML = data;
       if(!chatBox.classList.contains("active")){ //if active class not contains in chatbox the scroll to bottom
        scrollToBottom();
       }
     }
   }
 }

 // we have to send the form data through ajax to php
 let formData = new FormData(form);//creating new formData object
 xhr.send(formData);//sending the form data to PHp
  }, 500); //this function will run frequently after 500ms

  function scrollToBottom(){
    chatBox.scrollTop = chatBox.scrollHeight;
  }