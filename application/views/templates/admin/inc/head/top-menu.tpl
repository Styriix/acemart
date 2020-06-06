<div class="header navbar navbar-inverse ">

<div class="navbar-inner">
<div class="header-seperation">
<ul class="nav pull-left notifcation-center visible-xs visible-sm">
<li class="dropdown">
<a href="#main-menu" data-webarch="toggle-left-side">
<i class="material-icons">menu</i>
</a>
</li>
</ul>

<a href="index.html">
<img src="{$app.logo}" class="logo" alt="" data-src="{$app.logo}" data-src-retina="{$app.logo}" width="106" height="21" />
</a>

<ul class="nav pull-right notifcation-center">
<li class="dropdown hidden-xs hidden-sm">
<a href="{$url.main}" class="dropdown-toggle active" data-toggle="">
<i class="material-icons">home</i>
</a>
</li>


</ul>
</div>

<div class="header-quick-nav">

<div class="pull-left">
<ul class="nav quick-section">
<li class="quicklinks">
<a href="#" class="" id="layout-condensed-toggle">
<i class="material-icons">menu</i>
</a>
</li>
</ul>
</div>


<div class="pull-right">
<div class="chat-toggler sm">
<div class="profile-pic">
<img src="{$a_photo}{$usr.avater|default:'default'}" alt="" data-src="{$a_photo}{$usr.avater|default:'default'}" data-src-retina="{$a_photo}{$usr.avater|default:'default'}" width="35" height="35" />
</div>
</div>
<ul class="nav quick-section ">
<li class="quicklinks">
<a data-toggle="dropdown" class="dropdown-toggle  pull-right " href="#" id="user-options">
<i class="material-icons">tune</i>
</a>
<ul class="dropdown-menu  pull-right" role="menu" aria-labelledby="user-options">

<li class="divider"></li>
<li>
<a href="{$url.main}admin-logout"><i class="material-icons">power_settings_new</i>&nbsp;&nbsp;Log Out</a>
</li>
</ul>
</li>

</ul>
</div>

</div>

</div>

</div>