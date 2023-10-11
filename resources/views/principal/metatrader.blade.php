<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Terminal web para las plataformas comerciales MetaTrader 4 y MetaTrader 5</title>
    <style type="text/css">
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, Tahoma;
            font-size: 16px;
            color: #000;
            background-color: #FFF;
            min-width: 1010px;
        }

        .top {
            background-color: #0055A7;
        }

        .top h1 {
            margin: 10px 20px 10px 10px;
            font-size: 25px;
            font-weight: normal;
            color: #FFF;
            display: inline-block;
            vertical-align: middle;
        }

        .top .menu,
        .top .menu li {
            margin: 0;
            padding: 0;
            list-style: none;
            display: inline-block;
            vertical-align: middle;
        }

        .top .menu li {
            margin: 0;
            padding: 0;
            list-style: none;
            display: inline-block;
        }

        .top .menu li a {
            padding: 20px;
            font-size: 16px;
            color: #FFF;
            text-decoration: none;
            text-align: center;
            display: block;
        }

        .top .menu li a:hover {
            background-color: #0B6ABF;
        }

        .top .menu li a.selected {
            background-color: #2989DF;
            color: #FFF;
        }

        .content {
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
            position: fixed;
            width: 100%;
            top: 60px;
            bottom: 60px;
        }

        .footer {
            text-align: center;
            padding: 20px;
            color: #0A0A0A;
            font-size: 14px;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>

<body>
    <div class="top">
        <h1>Nombre de la compañía</h1>
        <ul class="menu">
            <li><a href="#">Análisis</a></li>
            <li><a href="#" class="selected">Terminal web</a></li>
            <li><a href="#">Noticias</a></li>
            <li><a href="#">Contactos</a></li>
        </ul>
    </div>
    <div class="content">
        <!-- Web Terminal Code Start -->
        <!-- TradingView Widget BEGIN -->
<!-- <div class="tradingview-widget-container">
    <div id="tradingview_6e73e"></div>
    <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/chart" rel="noopener nofollow" target="_blank"><span class="blue-text">Track all markets on TradingView</span></a></div>
    <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
    <script type="text/javascript">
    new TradingView.widget(
    {
    "autosize": true,
    "symbol": "NASDAQ:AAPL",
    "interval": "D",
    "timezone": "Etc/UTC",
    "theme": "light",
    "style": "1",
    "locale": "en",
    "enable_publishing": false,
    "allow_symbol_change": true,
    "container_id": "tradingview_6e73e"
  }
    );
    </script>
  </div> -->
  <!-- TradingView Widget END -->
         <!-- <iframe
            src="https://www.tradingview.com/chart/"
            allowfullscreen="allowfullscreen" style="width: 100%; height: 100%; border: none;"></iframe>  -->
        <iframe allowfullscreen="allowfullscreen" allow="clipboard-write" name="webTerminalHost" id="webTerminalHost"
            src="https://trade.metatrader5.com/terminal?switch_platform=1&amp;border=0&amp;startup_version=5&amp;demo_all_servers=1&amp;user_token=0&amp;startup_mode=create_demo" style="width: 100%; height: 100%; border: none;"></iframe>
        <!-- Web Terminal Code End -->
    </div>
    <div class="footer"> Copyright 2000-2017, Nombre de la compañía</div>
</body>

</html>