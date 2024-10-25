window.addEventListener("load", ()=>{
    const zdj_id = document.querySelector('select').selectedOptions[0].dataset.imgs
    const zdej = document.querySelector(".zdj")
    zdej.innerHTML = `<img src='${zdj_id}.jpg'>`
    // zdej.src = `droga${zdj_id}.jpg`
})

const ook = document.querySelector('select')
ook.addEventListener("change", ()=>{
    const zdj_id = document.querySelector('select').selectedOptions[0].dataset.imgs
    const zdej = document.querySelector(".zdj")
    zdej.innerHTML = `<img src='${zdj_id}.jpg'>`
})