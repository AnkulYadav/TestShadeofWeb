const blogImageContainer = document.getElementsByClassName('news-item-img');
for (let index = 1; index <= blogImageContainer.length; index++) {
    const blogImage = document.getElementById(`blog-image-container-${index}`);
    const imageName = blogImage.dataset.image;
    blogImage.style.background = "linear-gradient(180deg, rgba(255, 255, 255, 0.00) 50%, rgba(0, 0, 0, 0.70) 99.86%),url('"+imageName+"') lightgray 50% / cover no-repeat ";
}

$(document).ready(function() {
    $('.owl-carousel').owlCarousel({
        loop: true,
        autoplay: false,
        smartSpeed: 100,
        animateIn: true,
        responsive: {
            0: {
                items: 1,
                stagePadding: 20
            },
            350:{
                items: 1,
                stagePadding:35
            },
            768: {
                items: 2,
                nav:false,
                margin: 5,
                stagePadding: 40
            },
            1200: {
                items: 3,
                nav: true,
                margin: 15,
            }

        }
    });
});


