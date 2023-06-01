const img1 = document.getElementById("gallery__img1");
const img2 = document.getElementById("gallery__img2");
const img3 = document.getElementById("gallery__img3");

const index1 = document.getElementById("gallery-index-1");
const index2 = document.getElementById("gallery-index-2");
const index3 = document.getElementById("gallery-index-3");

const orcamentoForm = document.getElementById("orcamento");
const contatoForm = document.getElementById("contato");
const popupForm = document.getElementById("popup");

const inputs = document.querySelectorAll('#orcamento-nome, #orcamento-telefone, #orcamento-localizacao, #orcamento-email');
const selectInput = document.getElementById("orcamento-servicos");

window.onclick = function(event) {
    if (event.target === popupForm) {
      popupForm.style.display = "none";
    }
}

const clickPopupHandler = () => {
    popupForm.style.display = "none";
};

orcamentoForm.addEventListener("submit", function(e){
    e.preventDefault();
    inputs.forEach(input => {
        input.value = '';
    });

    selectInput.value = "servico";
    
    popupForm.style.display = "flex";
});


let galleryCounter = 0;
let actualImg = 1;
let actualImgIndex = 1;
let othersImg = [];



const showImage = () => {

    switch (actualImgIndex) {
        case 1:
            img1.style.display = "block";
            img2.style.display = "none";
            img3.style.display = "none";
            index1.style.backgroundColor = "limegreen";
            index2.style.backgroundColor = "#ffffff";
            index3.style.backgroundColor = "#ffffff";
            break;
        case 2:
            index2.style.backgroundColor = "limegreen";
            index1.style.backgroundColor = "#ffffff";
            index3.style.backgroundColor = "#ffffff";
            img1.style.display = "none";
            img2.style.display = "block";
            img3.style.display = "none";
            break;
        case 3:
            index3.style.backgroundColor = "limegreen";
            index2.style.backgroundColor = "#ffffff";
            index1.style.backgroundColor = "#ffffff";
            img1.style.display = "none";
            img2.style.display = "none";
            img3.style.display = "block";
            break;
    }

}


const counting = () => {

    galleryCounter++;

    if (galleryCounter === 5) {

        if (actualImgIndex < 3) {
            actualImgIndex++;
            showImage();
        } else {
            actualImgIndex = 1;
            showImage();
        }

        galleryCounter = 0;
    }
}

const changeIndex = (index) => {
    switch (index) {
        case 1:
            actualImgIndex = 1;
            showImage();
            galleryCounter = 0;
            break;
        case 2:
            actualImgIndex = 2;
            showImage();
            galleryCounter = 0;
            break;
        case 3:
            actualImgIndex = 3;
            showImage();
            galleryCounter = 0;
            break;
    }
}

let counterToMove = setInterval(counting, 1000)
