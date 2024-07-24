document.addEventListener("DOMContentLoaded", function() {
    const adHTML = `
        <section class="ad">
            <a class="display-item box-1 visible" href="event.html">
                <img src="./Imgs/ad-1.png" alt="Ad Posting">
                <span class="hover-effect">Click Me</span>
            </a>
            <a class="display-item box-2" href="event.html">
                <img src="./Imgs/ad-2.png" alt="Ad Posting">
                <span class="hover-effect">Click Me</span>
            </a>
            <a class="display-item box-3" href="event.html">
                <img src="./Imgs/ad-3.png" alt="Ad Posting">
                <span class="hover-effect">Click Me</span>
            </a>
        </section>
    `;

    const adPlaceholder = document.getElementById('ad-placeholder');
    adPlaceholder.innerHTML = adHTML;
});