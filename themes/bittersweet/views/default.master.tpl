<!DOCTYPE html>
<html>
<head>
  {asset name="Head"}
</head>
<body id="{$BodyID}" class="{$BodyClass}">
<div id="Frame">
  <div class="Top">
    <div class="Row">
      <div class="TopMenu">
        <!--{home_link}-->
        <a href="http://www.thundermatch.com.my" target="_blank">Official Website</a>
        <a href="http://www.tmt.my" target="_blank">TMT.MY</a>
        <!--
        You can add more of your top-level navigation links like this:

        <a href="#">Store</a>
        <a href="#">Blog</a>
        <a href="#">Contact Us</a>
        -->
      </div>
   </div>
  </div>
  <div class="Banner">
    <div class="Row">
      <strong class="SiteTitle"><a href="{link path="/"}">{logo}</a></strong>
      <strong class="SiteTitle" style="top:6px;position:absolute;"><a href="{link path="/"}"><img src="http://www.tmt.my/forum/uploads/S7PPIXQ9OEX4.jpg" width="180px" height="65px"/></a></strong>
      <!--
      We've placed this optional advertising space below. Just comment out the line and replace "Advertising Space" with your 728x90 ad banner. 
      -->
      <!-- <div class="AdSpace">Advertising Space</div> -->
    </div>
  </div>
  <div id="Head">
    <div class="Row">
      <div class="SiteSearch">{searchbox}</div>
      <ul class="SiteMenu">
       {dashboard_link}
       {discussions_link}
       {activity_link}
       {inbox_link}
       {custom_menu}
       {profile_link}
       {signinout_link}
      </ul>
    </div>
  </div>
  <div class="BreadcrumbsWrapper">
    <div class="Row">
     {breadcrumbs}
    </div>
  </div>
  <div id="Body">
    <div class="Row">
      <div class="Column PanelColumn" id="Panel">
         {module name="MeModule"}
         {asset name="Panel"}
      </div>
      <div class="Column ContentColumn" id="Content">{asset name="Content"}</div>
    </div>
  </div>
  <div id="Foot">
    <div class="Row">
      <a href="{vanillaurl}" class="PoweredByVanilla">Powered by Vanilla</a>
      {asset name="Foot"}
    </div>
  </div>
</div>
{event name="AfterBody"}
</body>
</html>