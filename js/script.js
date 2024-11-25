//COPYTEXT start
function copy(copyId){
    let inputElement = document.createElement("input");

    inputElement.type = "text";
    let copyText = document.getElementById(copyId).innerHTML;
    inputElement.value = copyText;
    document.body.appendChild(inputElement);
    inputElement.select();
    document.execCommand('copy');
    document.body.removeChild(inputElement);
    
    document.getElementById("alert").style.display = "block";
    setTimeout(function(){
        document.getElementById("alert").style.display = "none";
    }, 1000);
}
//COPYTEXT end

//READMORE start
  let noOfCharac = 150;
  let contents = document.querySelectorAll(".content");
      contents.forEach(content => {
    //If text length is less that noOfCharac... then hide the read more button
    if(content.textContent.length < noOfCharac){
        content.nextElementSibling.style.display = "none";
    }
    else{
        let displayText = content.textContent.slice(0,noOfCharac);
        let moreText = content.textContent.slice(noOfCharac);
        content.innerHTML = `${displayText}<p class="dots">...</p><p class="hide more">${moreText}</p>`;
    }
});

function readMore(btn){
    let post = btn.parentElement;
    post.querySelector(".dots").classList.toggle("hide");
    post.querySelector(".more").classList.toggle("hide");
    btn.textContent == "Read More" ? btn.textContent = "Read Less" : btn.textContent = "Read More";
}
//READMORE end

//COUNTDOWN start
     const countdown = () => {
     const countDate = new Date("May 7, 2023 00:00:00").getTime();
     const now = new Date().getTime();
     const gap = countDate - now;
     
     //Time Logic
     const s = 1000;
     const m = s * 60;
     const h = m * 60;
     const d = h * 24;
     
     //Calculating
     const txtDay = Math.floor(gap/d);
     const txtHour = Math.floor((gap % d)/ h);
     const txtMinute = Math.floor((gap % h)/ m);
     const txtSecond = Math.floor((gap % m)/ s);
     
     document.querySelector(".days").innerText=txtDay;
     document.querySelector(".hours").innerText=txtHour;
     document.querySelector(".minutes").innerText=txtMinute;
     document.querySelector(".seconds").innerText=txtSecond;
   };
   setInterval(countdown, 1000);
//COUNTDOWN end

//POP UP start
const hide = document.querySelector('.hide');
const popup = document.querySelector('.popup');
const close = document.querySelector('.popup-content button');
window.addEventListener('load', () => {
    popup.classList.add('showPopup');
    popup.childNodes[1].classList.add('showPopup');
});
close.addEventListener('click', () => {
    hide.classList.remove('hide');
    popup.classList.remove('showPopup');
    popup.childNodes[1].classList.remove('showPopup');
});
//POPUP end

//SCROLLIT JS PLUGIN
  $.scrollIt();
//SCROLLIT JS PLUGIN


