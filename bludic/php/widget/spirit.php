</div>
<script>
const homeNav = document.querySelector('#home-nav');
const widgetNav = document.querySelector('#widget-nav');
const navigationNav = document.querySelector('#navigation-nav');
const infoNav = document.querySelector('#info-nav');
const homePage = document.querySelector('#home-page');
const navigationPage = document.querySelector('#navigation-page');
const widgetPage = document.querySelector('#widget-page');
const infoPage = document.querySelector('#info-page');
homeNav.root = homePage;
navigationNav.root = navigationPage;
widgetNav.root = widgetPage;
infoNav.root = infoPage;
</script>
</body>
</html>