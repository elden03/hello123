const optionMenu=document.querySelectorAll(".select-menu");

optionMenu.forEach(optionMenu => {
    
    const selectBtn=optionMenu.querySelector(".select-btn");
    const options=optionMenu.querySelectorAll(".option");
    const sBtn_text=optionMenu.querySelector(".sBtn-text");
    
    selectBtn.addEventListener("click",()=>{optionMenu.classList.toggle("active");});


    

options.forEach(option => {
    option.addEventListener("click", ()=>{
        let selectedOption=option.querySelector(".option-text").innerText;
        sBtn_text.innerText=selectedOption;
        console.log(selectedOption)
        optionMenu.classList.remove("active");
    });
    
})
})