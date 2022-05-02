<?php
include_once "view/components/layout.php";
?>

<div class="__container--computers">
    <div class="__container--child">
        <div>
            <a href="/computer.php?ip=192.168.10.1">
                <h2>Computer 1</h2>
            </a>
        </div>
        <div>
            <a href="/computer.php?ip=192.168.10.2">
                <h2>Computer 2</h2>
            </a>

        </div>
    </div>
    <div class="__container--child">
        <div>
        <a href="/computer.php?ip=192.168.10.3">
                <h2>Computer 4</h2>
            </a>
        </div>
        <div>
        <a href="/computer.php?ip=192.168.10.4">
                <h2>Computer 4</h2>
            </a>
        </div>
    </div>

</div>

<?php
include_once "view/components/footer.php";
?>

</body>

</html>