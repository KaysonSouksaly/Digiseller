document.addEventListener("DOMContentLoaded", function() {
    const headerHTML = `
        <header>
            <div class="logo">
                <img src="./imgs/Digiseller.png" alt="logo">
                <i class="fa-brands fa-square-facebook"></i>
                <i class="fa-brands fa-square-instagram"></i>
                <i class="fa-brands fa-square-github"></i>
                <i class="fa-brands fa-square-x-twitter"></i>
                <i class="fa-brands fa-tiktok"></i>
                <i class="fa-brands fa-youtube"></i>
            </div>
            <menu>
                <li><a href="index.html">HOME</a></li>
                <li><a href="about-us.html">ABOUT US</a></li>
                <li><a href="event.html">EVENT</a></li>
                <li><a href="contact-us.html">CONTACT US</a></li>
                <li><a href="pricing.html">PRICING</a></li>
            </menu>
        </header>
    `;

    document.body.insertAdjacentHTML('afterbegin', headerHTML);
});