<style>
    h3 {
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

    footer {
        background-color: #0c84a4;
        z-index: 1;
        bottom:0;
        width:100%;
        position:static;
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
                <h3>About</h3>
                <p class="desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod, diam eu bibendum bibendum, velit sapien bibendum augue, vel bibendum sapien sapien vel sapien. Sed euismod, diam eu bibendum bibendum, velit sapien bibendum augue, vel bibendum sapien sapien vel sapien.</p>
            </div>
            <div class="col-md-4 mt-4">
                <h3>Contact</h3>
                <p class="desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod, diam eu bibendum bibendum, velit sapien bibendum augue, vel bibendum sapien sapien vel sapien. Sed euismod, diam eu bibendum bibendum, velit sapien bibendum augue, vel bibendum sapien sapien vel sapien.</p>
            </div>
            <div class="col-md-4 mb-2 mt-0">
                <img src="{{ asset('images/logo_shield.png') }}" class="footer-logo-shield">
            </div>
        </div>
    </div>
</footer>
