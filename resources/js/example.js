
const modal = document.getElementById('result-modal');

if (modal != null) {
    modal.addEventListener('click', () => {
        modal.classList.add('hidden');
    });
}

const imageModals = document.querySelectorAll('#image-modal');

const tweetImages = document.querySelectorAll('#tweet-image');

imageModals.forEach((imageModal, index) => {
    imageModal.addEventListener('click', () => {
        imageModal.classList.add('hidden');
    });
});

tweetImages.forEach((tweetImage, index) => {
    tweetImage.addEventListener('click', () => {
        imageModals[index].classList.remove('hidden');
    });
});

const aaa = document.getElementById('aaa');
const inputImage = document.getElementById('bbb');

