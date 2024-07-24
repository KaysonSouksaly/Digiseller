document.addEventListener("DOMContentLoaded", function() {
    const adHTML = `
        <section class="ad">
            <a class="display-item box-1 visible" href="event.php">
                <img src="./Imgs/ad-1.png" alt="Ad Posting">
                <span class="hover-effect">Click Me</span>
            </a>
            <a class="display-item box-2" href="event.php">
                <img src="./Imgs/ad-2.png" alt="Ad Posting">
                <span class="hover-effect">Click Me</span>
            </a>
            <a class="display-item box-3" href="event.php">
                <img src="./Imgs/ad-3.png" alt="Ad Posting">
                <span class="hover-effect">Click Me</span>
            </a>
        </section>
    `;

    document.body.insertAdjacentHTML('afterbegin', adHTML);
});