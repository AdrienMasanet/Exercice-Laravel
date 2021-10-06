<footer class="footer-bs">
    <div class="row">
        <div class="col-md-3 footer-brand animated fadeInLeft">
            <h2>Site de ouf</h2>
            <p>Suspendisse hendrerit tellus laoreet luctus pharetra. Aliquam porttitor vitae orci nec ultricies. Curabitur vehicula, libero eget faucibus faucibus, purus erat eleifend enim, porta pellentesque ex mi ut sem.</p>
            <p>© 2021, Adrien Masanet, All rights not reserved</p>
        </div>
        <div class="col-md-4 footer-nav animated fadeInUp">
            <h4>Menu —</h4>
            <div class="col-md-6">
                <ul class="pages">
                    <li><a href="/">Accueil</a></li>
                    <li><a href="{{ URL::route('authors.index') }}">Auteurs</a></li>
                    <li><a href="{{ URL::route('articles.index') }}">Articles</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </div>
            <div class="col-md-6">
                <ul class="list">
                    <li><a href="#">Mentions légales</a></li>
                    <li><a href="#">Loi RGPD</a></li>
                </ul>
            </div>
        </div>
        <div class="col-md-2 footer-social animated fadeInDown">
            <h4>Rejoignez-nous</h4>
            <ul>
                <li><a href="#">Facebook</a></li>
                <li><a href="#">Twitter</a></li>
                <li><a href="#">Instagram</a></li>
                <li><a href="#">RSS</a></li>
            </ul>
        </div>
        <div class="col-md-3 footer-ns animated fadeInRight">
            <h4>Newsletter</h4>
            <p>A rover wearing a fuzzy suit doesn’t alarm the real penguins</p>
            <p>
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Search for...">
                <span class="input-group-btn">
                    <button class="btn btn-default" type="button"><span class="glyphicon glyphicon-envelope"></span></button>
                </span>
            </div>
            </p>
        </div>
    </div>
</footer>
<section style="text-align:center; margin:10px auto;">
    <p>Made by <a href="http://enfoplus.net">Adrien Masanet</a></p>
</section>

</div>
