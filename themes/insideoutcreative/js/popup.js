console.log('15');
let openModalArrowFunction = (elem) => {
    elemID = elem.getAttribute('id');
    elemClose = document.querySelector('.modal-content.' + elemID + ' .close');
    elemOverlay = document.querySelector('.modal-content.' + elemID + ' .bg-overlay');
    elemContent = document.querySelector('.modal-content.' + elemID);
    elemContent.classList.add('activate-modal');

    iframeVideo = document.querySelector(`.modal-content.${elemID} iframe`);
    var player = new Vimeo.Player(iframeVideo);
    player.play();

    // console.log('iframe video below 1');
    // console.log(iframeVideo);

    // iframeVideo.src += "&autoplay=1";

    // let player = $f(iframeVideo);

    elemClose.addEventListener('click', function(){
        elemContent.classList.remove('activate-modal');
        player.pause();
    });
    elemOverlay.addEventListener('click', function(){
        elemContent.classList.remove('activate-modal');
        player.pause();
    });
}

let openModalBtn = document.querySelectorAll('.open-modal');

for ( i = 0; i < openModalBtn.length; i++ ) {
    

    openModalBtn[i].addEventListener('click', openModal);
    function openModal() {
        openModalArrowFunction(this);
    }
    function closeModal() {
        closeModalArrowFunction(this);
        player.pause();
    }
}

document.onkeydown = function(evt) {
    evt = evt || window.event;
    if (evt.keyCode == 27) {

        modalContent = document.querySelectorAll('.modal-content');
        for ( i = 0; i < modalContent.length; i++){
            iframeVideo = document.querySelector(`.modal-content.${elemID} iframe`);
            var player = new Vimeo.Player(iframeVideo);

            if(modalContent[i].classList.contains('activate-modal')){
                modalContent[i].classList.remove('activate-modal');
                player.pause();
            }
        }
    }
};