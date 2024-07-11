


let tbody=document.querySelector('#t');
donor=document.querySelector('#donor');
medical=document.querySelector('#medical');
title=document.querySelector('#title');


donor.addEventListener('click', e=>{
    e.preventDefault();
    title.innerHTML="المتبرعين";
    getData('./php/getDonors.php',tbody);
});


medical.addEventListener('click', e=>{
    e.preventDefault();
    title.innerHTML="الجهات الصحية";
    getData('./php/getMedicals.php',tbody);
});



async function getData(url,ele) {
    await fetch(url)
    .then(response => {
        if (response.ok) {
            return response.text();
        } else {
            throw new Error('Request Failed');
        }
    }).then(data => { console.log(data);   ele.innerHTML=data }).catch(error => { });
}


document.addEventListener('DOMContentLoaded',e=>{donor.click()});