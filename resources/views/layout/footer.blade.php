<style>
    .footer-title {
        color: white;
        text-shadow: 1px 1px black;
        font-size: 24px;
        font-weight: 500;
        transition: 0.3s;
    }

    .desc {
        text-align: justify;
        color: white;
    }

    body {
        margin: 0;
        padding: 0;
        min-height: 100vh; /* Make sure the body takes up at least the viewport height */
        display: flex;
        flex-direction: column;
    }

    main {
        flex-grow: 1; /* Allow the main content to grow and push the footer to the bottom */
    }

    footer {
        background-color: #0c84a4;
        width: 100%;
        position: relative;
        clear: both;
    }

    .footer-logo-shield {
        display: flex;
        width: 100%;
        height: 100%;
        max-width: 200px;
        max-height: 200px;
        margin: auto;
    }
</style>
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-4 mt-4">
                <h3 class="footer-title">About</h3>
                <p class="desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod, diam eu bibendum bibendum, velit sapien bibendum augue, vel bibendum sapien sapien vel sapien. Sed euismod, diam eu bibendum bibendum, velit sapien bibendum augue, vel bibendum sapien sapien vel sapien.</p>
            </div>
            <div class="col-md-4 mt-4">
                <h3 class="footer-title">Contact</h3>
                <p class="desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod, diam eu bibendum bibendum, velit sapien bibendum augue, vel bibendum sapien sapien vel sapien. Sed euismod, diam eu bibendum bibendum, velit sapien bibendum augue, vel bibendum sapien sapien vel sapien.</p>
            </div>
            <div class="col-md-4 mb-2 mt-0">
                <img src="{{ asset('images/logo_shield.png') }}" class="footer-logo-shield">
            </div>
        </div>
    </div>
</footer>
