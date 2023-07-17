<nav class="navbar">
    <div class="box">
        <div class="btn not active">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <ul class="menu-items">
        <li><a class="routes" href="/view/pages/index.php">Home</a></li>
        <li><a class="routes" href="/view/pages/about.php">About</a></li>
        <li><a class="routes" href="/view/pages/my-art.php">My Art</a></li>
        <li><a class="routes" href="/view/pages/contact.php">Contact</a></li>
        <div>
            <select class="language-select" onchange="selectLanguage(this.options[this.selectedIndex].value)">
                <option value="deutsch">Deutsch</option>
                <option value="english" <?= $_COOKIE['lang'] == 'english' ? 'selected' : '' ?> >English</option>
            </select>
        </div>
    </ul>
</nav>
<script>
    var btn = document.getElementsByClassName('btn')[0];
    var menu = document.getElementsByClassName('menu-items')[0];

    btn.addEventListener('click', () => {
        btn.classList.toggle('not');
        menu.classList.toggle('open');
    });

    function setCookie(name, value, days) {
        var expires = "";
        if (days) {
            var date = new Date();
            date.setTime(date.getTime() + (days*24*60*60*1000));
            expires = "; expires=" + date.toUTCString();
        }
        document.cookie = name + "=" + (value || "")  + expires + "; path=/";
    }

    function selectLanguage(language) {
        setCookie("lang", language, 30);
        window.location.reload();
    }
</script>