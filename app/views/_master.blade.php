<!doctype html>
<html lang="en">
<head>
  <script src="poly/platform/platform.js"></script>

  <link rel="import" href="poly/polymer/polymer.html">
  <link rel="import" href="poly/core-collapse/core-collapse.html">
  <link rel="import" href="poly/core-drawer-panel/core-drawer-panel.html">
  <link rel="import" href="poly/core-header-panel/core-header-panel.html">
  <link rel="import" href="poly/core-icon-button/core-icon-button.html">
  <link rel="import" href="poly/core-icons/core-icons.html">
  <link rel="import" href="poly/core-input/core-input.html">
  <link rel="import" href="poly/core-item/core-item.html">
  <link rel="import" href="poly/core-meta/core-meta.html">
  <link rel="import" href="poly/core-overlay/core-overlay.html">
  <link rel="import" href="poly/core-scaffold/core-scaffold.html">
  <link rel="import" href="poly/core-scroll-header-panel/core-scroll-header-panel.html">
  <link rel="import" href="poly/core-style/core-style.html">
  <link rel="import" href="poly/core-toolbar/core-toolbar.html">

  <link rel="import" href="poly/polymer/polymer.html">
  <link rel="import" href="roboto.html">
  <link rel="import" href="poly/paper-button/paper-button.html">
  <link rel="import" href="poly/paper-checkbox/paper-checkbox.html">
  <link rel="import" href="poly/paper-dialog/paper-dialog.html">
  <link rel="import" href="poly/paper-fab/paper-fab.html">
  <link rel="import" href="poly/paper-icon-button/paper-icon-button.html">
  <link rel="import" href="poly/paper-input/paper-input.html">
  <link rel="import" href="poly/paper-menu-button/paper-menu-button.html">
  <link rel="import" href="poly/paper-progress/paper-progress.html">
  <link rel="import" href="poly/paper-radio-button/paper-radio-button.html">
  <link rel="import" href="poly/paper-radio-group/paper-radio-group.html">
  <link rel="import" href="poly/paper-ripple/paper-ripple.html">
  <link rel="import" href="poly/paper-shadow/paper-shadow.html">
  <link rel="import" href="poly/paper-slider/paper-slider.html">
  <link rel="import" href="poly/paper-tabs/paper-tabs.html">
  <link rel="import" href="poly/paper-toast/paper-toast.html">
  <link rel="import" href="poly/paper-toggle-button/paper-toggle-button.html">
	<meta charset="UTF-8">
	<title>Developer's Friend</title>

  <link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
  <script src="js/jquery.js"></script>

  <link rel="stylesheet" href="css/style.css">

  @yield('scripts')
</head>

<body>
    <div id="side" style="display:none">
  		<div class="side-header">
  			<h6>Developer's Friend</h6>
  		</div>
  		<hr/>
  		<div class="side-item">
  			<a href="http://php-harvardp3.rhcloud.com/">
  				<paper-ripple></paper-ripple>
  				<core-icon icon="home"></core-icon>Home
  			</a>
  		</div>

      <div class="side-item">
        <a href="http://php-harvardp3.rhcloud.com/lorem">
          <paper-ripple></paper-ripple>
          <core-icon icon="text-format"></core-icon>Lorem Ipsum
        </a>
      </div>

      <div class="side-item">
        <a href="http://php-harvardp3.rhcloud.com/user">
          <paper-ripple></paper-ripple>
          <core-icon icon="account-circle"></core-icon>User Generator
        </a>
      </div>

      <div class="side-item">
        <a href="https://github.com/mkaminsky11/harvard-p3">
          <paper-ripple></paper-ripple>
          <core-icon icon="info-outline"></core-icon>GitHub page
        </a>
      </div>

  	</div>
    <div id="detect" style="display:none"></div>


    <core-toolbar id="mainheader">
      <paper-icon-button icon="menu" style="color:white !important" onclick="toggle_side()"></paper-icon-button>
      <span flex>@yield("title","Home")</span>
      <paper-icon-button id="searchbutton" icon="help" style="color:white !important"></paper-icon-button>
    </core-toolbar>

    <div class="content_main" style="text-align: center">
      @yield('content')
    </div>
  <script src="js/main.js"></script>
</body>
</html>
