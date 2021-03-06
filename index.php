<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Mastoshare</title>
    <meta name="description" content="Mastoshare(マストシェア)とはTwitter共有ボタンのようなMastodon共有ボタンです。簡単に設置が出来ます。">
    <link rel="icon" href="./favicon.ico" />
    <link rel="icon" href="./favicon.ico" sizes="16x16" />
    <link rel="stylesheet" type="text/css" href="./css/bootstrap.dark.min.css">
    <link rel="stylesheet" type="text/css" href="./css/top.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
</head>
<body>
<div class="container-fluid">
    <div class="mx-auto" style="max-width: 100%; width: 800px;">
        <a href="./"><img src="./img/mastoshare.png" class="mx-auto d-block top-logo"></a>
        <p class="text-intro text-center">Mastoshare(マストシェア)はMastodon版のTwitterシェアボタンです。</p>
        <p class="text-intro text-center"><strong>誰でも簡単に利用ができます。</strong></p>
        <p class="text-center">
            <a href="./post.php?text=" onclick="window.open(this.href, '', 'width=512,height=640'); return false;"><img src="./img/toot.svg" width="75" height="20"></a>
        </p>
        <p class="text-center">
            <a class="btn text-white" href="./post.php?text=" style="background-color: #2b90d9;" onclick="window.open(this.href, '', 'width=512,height=640'); return false;"><i class="fab fa-mastodon fa-fw"></i> トゥート!</a>
        </p>
        <div class="row">
            <div class="col-md-6 col-sm-6">
                <div class="card">
                    <div class="card-body" style="height: 13rem;">
                        <h4 class="text-center">シンプル</h4>
                        <p>Mastoshareボタンの設置はhtmlコードのコピペだけで出来ます。また、カスタマイズも簡単に出来ます。</p>
                        <p><a href="create.html">ボタンの設置</a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-6">
                <div class="card">
                    <div class="card-body" style="height: 13rem;">
                        <h4 class="text-center">高機能</h4>
                        <p>Mastoshareは共有元URLが自動挿入されます。また、リストに追加したインスタンスはブラウザに保存されます。</p>
                        <p><a href="usage.html">使いかた</a>
                    </div>
                </div>
            </div>
        </div>
        <h4>ブラウザ拡張機能版</h4>
        <div class="row">
            <div class="col-md-6 col-sm-6">
                <strong>Google Chrome</strong><br>
                <a href="https://chrome.google.com/webstore/detail/mastoshare/mfdneocoinldonfcdoicdjllngnakoga" ><img src="https://developer.chrome.com/webstore/images/ChromeWebStore_BadgeWBorder_v2_206x58.png"></a>
            </div>
            <div class="col-md-6 col-sm-6">
                <strong>Mozilla FIrefox</strong><br>
                <p>鋭意制作中</p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 col-sm-6">
                <h4>連絡先</h4>
                <ul>
                    <li><a href="https://mstdn.jp/@mastoshare">Mastoshare公式アカウント</a></li>
                    <li><a href="https://otogamer.me/@naf">@Naf</a></li>
                </ul>
            </div>
            <div class="col-md-6 col-sm-6">
                <h4>設置者： weep 運営</h4>
                <ul>
                    <li><a href="https://weep.jp/fed">weep</a></li>
                    <li><a href="https://github.com/weepjp/mastoshare">ここは GitHub で Fork して改造して使ってます。</a></li>
                </ul>
            </div>
        </div>

    </div>
</div>
</body>
</html>
