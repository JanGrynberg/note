<html>
    <head></head>
    <body>
        <div class="header">
            <h1>Moje notatki</h1>
        </div>

        <div class="container">
            <div class="menu">
                <ul>
                    <li>
                        <a href="/note">Lista notatek</a>
                    </li>
                    <li>
                        <a href="/note/?action=create">Nowa notatka</a>
                    </li>
                </ul>
            </div>
            <div>
                <?php
    require_once "note/templates/pages/$page.php";
?>
            </div>
        </div>

        <div class="footer">
            STOPKA

        </div>
    </body>
</html>
