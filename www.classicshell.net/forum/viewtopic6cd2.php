<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-gb" xml:lang="en-gb">

<!-- Mirrored from www.classicshell.net/forum/viewtopic.php?p=27916&f=20 by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 08 Jun 2018 09:56:37 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>

<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
<meta http-equiv="content-language" content="en-gb" />
<meta http-equiv="content-style-type" content="text/css" />
<meta http-equiv="imagetoolbar" content="no" />
<meta name="resource-type" content="document" />
<meta name="distribution" content="global" />
<meta name="keywords" content="" />
<meta name="description" content="" />

<title>Classic Shell &bull; View topic - The official THANK YOU thread :-) and user reviews</title>

<link rel="alternate" type="application/atom+xml" title="Feed - Classic Shell" href="feed.php" /><link rel="alternate" type="application/atom+xml" title="Feed - New Topics" href="feed9d17.php?mode=topics" /><link rel="alternate" type="application/atom+xml" title="Feed - Forum - Translations" href="feedffeb.php?f=20" /><link rel="alternate" type="application/atom+xml" title="Feed - Topic - The official THANK YOU thread :-) and user reviews" href="feed447d.php?f=20&amp;t=2742" />

<link rel="stylesheet" href="styles/subsilver2/theme/stylesheet.css" type="text/css" />

<script type="text/javascript">
// <![CDATA[


function popup(url, width, height, name)
{
	if (!name)
	{
		name = '_popup';
	}

	window.open(url.replace(/&amp;/g, '&'), name, 'height=' + height + ',resizable=yes,scrollbars=yes,width=' + width);
	return false;
}

function jumpto()
{
	var page = prompt('Enter the page number you wish to go to:', '3');
	var per_page = '50';
	var base_url = 'viewtopic447d.html?f=20&amp;t=2742';

	if (page !== null && !isNaN(page) && page == Math.floor(page) && page > 0)
	{
		if (base_url.indexOf('?') == -1)
		{
			document.location.href = base_url + '?start=' + ((page - 1) * per_page);
		}
		else
		{
			document.location.href = base_url.replace(/&amp;/g, '&') + '&start=' + ((page - 1) * per_page);
		}
	}
}

/**
* Find a member
*/
function find_username(url)
{
	popup(url, 760, 570, '_usersearch');
	return false;
}

/**
* Mark/unmark checklist
* id = ID of parent container, name = name prefix, state = state [true/false]
*/
function marklist(id, name, state)
{
	var parent = document.getElementById(id);
	if (!parent)
	{
		eval('parent = document.' + id);
	}

	if (!parent)
	{
		return;
	}

	var rb = parent.getElementsByTagName('input');
	
	for (var r = 0; r < rb.length; r++)
	{
		if (rb[r].name.substr(0, name.length) == name)
		{
			rb[r].checked = state;
		}
	}
}



	/**
	* Play quicktime file by determining it's width/height
	* from the displayed rectangle area
	*
	* Only defined if there is a file block present.
	*/
	function play_qt_file(obj)
	{
		var rectangle = obj.GetRectangle();

		if (rectangle)
		{
			rectangle = rectangle.split(',')
			var x1 = parseInt(rectangle[0]);
			var x2 = parseInt(rectangle[2]);
			var y1 = parseInt(rectangle[1]);
			var y2 = parseInt(rectangle[3]);

			var width = (x1 < 0) ? (x1 * -1) + x2 : x2 - x1;
			var height = (y1 < 0) ? (y1 * -1) + y2 : y2 - y1;
		}
		else
		{
			var width = 200;
			var height = 0;
		}

		obj.width = width;
		obj.height = height + 16;

		obj.SetControllerVisible(true);

		obj.Play();
	}


// ]]>
</script>
<style>
.menu {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 12px;
	color: #D9F1FA;
	text-decoration: none;
	white-space: nowrap;
}
a.menu {
	text-decoration: none;
	color: #D9F1FA;
}
a.menu:hover {
	color: #D9F1FA;
	text-decoration: underline;
}
a.menu:visited {
	color: #D9F1FA;
	text-decoration: underline;
}
td.menu {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 12px;
	padding: 0px;
}
.title {
	font-family: Arial;
	font-size: 32px;
	font-weight: bold;
	margin: 0px 0px 0px 0px;
	color: #0E4687;
}
.cpr {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 10px;
	color: #FFFFFF;
	white-space: nowrap;
}
.bgrx {
	background-repeat: repeat-x;
}
td.cpr a {
	text-decoration: none;
	color: #D9F1FA !important;
}
td.cpr a:hover {
	color: #D9F1FA;
	text-decoration: underline;
}
td.cpr a:visited {
	color: #D9F1FA;
	text-decoration: underline;
}

</style>
</head>
<body class="ltr">

<a name="top"></a>

<div id="wrapheader">
<table border="0" cellpadding="0" cellspacing="0" height="123px" width="100%">

		<tr>
  <td background="../images/bg_head.png" height="1" class="menu">
    <table style="width: 100%; height: 123px;" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td style="width: 179px; text-align: center;" class="menu"><img src="../images/corner.png" style="width: 179px; height: 129px;" alt=""><br>
        </td>
        <td class="menu">
          <table style="width: 100%; height: 81px;" border="0" cellpadding="0" cellspacing="0">
            <tr>
              <td style="vertical-align: middle; width: 600px; height: 101px;" class="menu">

                <h1 class="title" style="margin-top: 20px; height: 65px; vertical-align: middle;">

<!-- Caption -->

Classic Shell: Forum

                </h1>
              </td>
              <td style="width: 447px; height: 101px;" class="menu"><br>
              </td>
		</tr>
            <tr>
              <td height="28px" colspan="2" background="../images/bg_menu.png" class="menu">
                <table height="25px"  border="0" cellpadding="0" cellspacing="0">
                  <tr>

<!-- Start Navigation -->

<td class="menu" align="center"><a href="http://www.classicshell.net/" class="menu">HOME</a></td>
<td class="menu" align="center" width="36">|</td>
<td class="menu" align="center"><a href="http://www.classicshell.net/forum" class="menu">FORUM</a></td>
<td class="menu" align="center" width="36">|</td>
<td class="menu" align="center"><a href="http://www.classicshell.net/faq" class="menu">F.A.Q.</a></td>
<td class="menu" align="center" width="36">|</td>
<td class="menu" align="center"><a href="http://www.classicshell.net/gallery" class="menu">SCREENSHOTS</a></td>
<td class="menu" align="center" width="36">|</td>
<td class="menu" align="center"><a href="http://www.classicshell.net/translations" class="menu">TRANSLATIONS</a></td>
<td class="menu" align="center" width="36">|</td>
<td class="menu" align="center"><a href="http://www.classicshell.net/downloads" class="menu">ALL DOWNLOADS</a></td>


<!-- End Navigation -->


                  </tr>
                </table>
              </td>
            </tr>
          </table>
        </td>
      </tr>
    </table>
  </td>
</tr>
</table>
	<div id="menubar">
		<table width="100%" cellspacing="0">
		<tr>
			<td class="genmed">
				<a href="ucp26c3.html?mode=login"><img src="styles/subsilver2/theme/images/icon_mini_login.gif" width="12" height="13" alt="*" /> Login</a>&nbsp; &nbsp;<a href="ucp8319.html?mode=register"><img src="styles/subsilver2/theme/images/icon_mini_register.gif" width="12" height="13" alt="*" /> Register</a>
					
			</td>
			<td class="genmed" align="right">
				<a href="faq.html"><img src="styles/subsilver2/theme/images/icon_mini_faq.gif" width="12" height="13" alt="*" /> FAQ</a>
				&nbsp; &nbsp;<a href="search.html"><img src="styles/subsilver2/theme/images/icon_mini_search.gif" width="12" height="13" alt="*" /> Search</a>&nbsp; &nbsp;<a href="memberlist.html"><img src="styles/subsilver2/theme/images/icon_mini_members.gif" width="12" height="13" alt="*" /> Members</a>
			</td>
		</tr>
		</table>
	</div>

	<div id="datebar">
		<table width="100%" cellspacing="0">
		<tr>
			<td class="gensmall"></td>
			<td class="gensmall" align="right">It is currently Thu Jun 07, 2018 10:34 pm<br /></td>
		</tr>
		</table>
	</div>

</div>

<div id="wrapcentre">

	
	<p class="searchbar" style="line-height:1.3">
		<span style="float: left;"><a href="search4d23.html?search_id=unsolved_topics">View unsolved topics</a><br /><a href="search33a7.html?search_id=unanswered">View unanswered posts</a> | <a href="search526f.html?search_id=active_topics">View active topics</a></span>
		
	</p>
	

	<br style="clear: both;" />

	<table class="tablebg" width="100%" cellspacing="1" cellpadding="0" style="margin-top: 5px;">
	<tr>
		<td class="row1">
			<p class="breadcrumbs"><a href="index-2.html">Board index</a> &#187; <a href="viewforum8a83.html?f=11">Development</a> &#187; <a href="viewforumffeb.html?f=20">Translations</a></p>
			<p class="datetime">All times are UTC - 8 hours [ <abbr title="Daylight Saving Time">DST</abbr> ]</p>
		</td>
	</tr>
	</table>

	<br />

<div id="pageheader">
	<h2><a class="titles" href="viewtopicf46a.html?f=20&amp;t=2742&amp;start=100">The official THANK YOU thread :-) and user reviews</a></h2>


</div>

<br clear="all" /><br />

<div id="pagecontent">

	<table width="100%" cellspacing="1">
	<tr>
		<td align="left" valign="middle" nowrap="nowrap">
		<a href="posting985f.html?mode=post&amp;f=20"><img src="styles/subsilver2/imageset/en/button_topic_new.gif" alt="Post new topic" title="Post new topic" /></a>&nbsp;<a href="postingc20e.html?mode=reply&amp;f=20&amp;t=2742"><img src="styles/subsilver2/imageset/en/button_topic_reply.gif" alt="Reply to topic" title="Reply to topic" /></a>
		</td>
		
			<td class="nav" valign="middle" nowrap="nowrap">&nbsp;Page <strong>3</strong> of <strong>4</strong><br /></td>
			<td class="gensmall" nowrap="nowrap">&nbsp;[ 182 posts ]&nbsp;</td>
			<td class="gensmall" width="100%" align="right" nowrap="nowrap"><b><a href="#" onclick="jumpto(); return false;" title="Click to jump to page…">Go to page</a> <a href="viewtopicc0a9.html?f=20&amp;t=2742&amp;start=50">Previous</a>&nbsp;&nbsp;<a href="viewtopic447d.html?f=20&amp;t=2742">1</a><span class="page-sep">, </span><a href="viewtopicc0a9.html?f=20&amp;t=2742&amp;start=50">2</a><span class="page-sep">, </span><strong>3</strong><span class="page-sep">, </span><a href="viewtopicaa64.html?f=20&amp;t=2742&amp;start=150">4</a> &nbsp;<a href="viewtopicaa64.html?f=20&amp;t=2742&amp;start=150">Next</a></b></td>
		
	</tr>
	</table>

	<table class="tablebg" width="100%" cellspacing="1">
	<tr>
		<td class="cat">
			<table width="100%" cellspacing="0">
			<tr>
				<td class="nav" nowrap="nowrap">&nbsp;
				<a href="viewtopica043.html?f=20&amp;t=2742&amp;start=100&amp;view=print" title="Print view">Print view</a>
				</td>
				<td class="nav" align="right" nowrap="nowrap"><a href="viewtopicb0d5.html?f=20&amp;t=2742&amp;view=previous">Previous topic</a> | <a href="viewtopicafef.html?f=20&amp;t=2742&amp;view=next">Next topic</a>&nbsp;</td>
			</tr>
			</table>
		</td>
	</tr>

	</table>


	<table class="tablebg" width="100%" cellspacing="1">
	
		<tr>
			<th>Author</th>
			<th>Message</th>
		</tr>
	<tr class="row1">

			<td align="center" valign="middle">
				<a name="p23729"></a>
				<b class="postauthor">mwoffenden</b>
			</td>
			<td width="100%" height="25">
				<table width="100%" cellspacing="0">
				<tr>
				
					<td class="gensmall" width="100%"><div style="float: left;">&nbsp;<b>Post subject:</b> <a href="#p23729">Absolutely brilliant!</a></div><div style="float: right;"><a href="viewtopic3c1f.html?p=23729&amp;f=20#p23729"><img src="styles/subsilver2/imageset/icon_post_target.gif" width="12" height="9" alt="Post" title="Post" /></a><b>Posted:</b> Fri Nov 27, 2015 8:06 pm&nbsp;</div></td>
				</tr>
				</table>
			</td>
		</tr>

		<tr class="row1">

			<td valign="top" class="profile">
				<table cellspacing="4" align="center" width="150">
			
				<tr>
					<td><img src="styles/subsilver2/imageset/en/icon_user_offline.gif" alt="Offline" title="Offline" /></td>
				</tr>
			
				</table>

				<span class="postdetails">
					<br /><b>Joined:</b> Fri Nov 27, 2015 7:48 pm<br /><b>Posts:</b> 3
				</span>

			</td>
			<td valign="top">
				<table width="100%" cellspacing="5">
				<tr>
					<td>
					

						<div class="postbody">In the Windows world, I would not be without Classic Shell.<br /><br />A couple of years ago, I was struggling with the total frustration of Windows Server 2012's start menu, and Classic Shell came to the rescue.  Within minutes of installing, I had my productivity -- and my sanity -- back! I could finally get back to work without the constant struggle.<br /><br />Fast forward to November 2015, and of course I just &quot;had&quot; to upgrade to Windows 10. Upgrade I did, and for the most part I like it. <br /><br /><strong>However </strong>the start menu again has turned out to be a stumbling block. Specifically, I searched and search to find a way to bring back the ever-so-useful &quot;Recent Items&quot; menu. I used the &quot;Recent Items&quot; menu many times a day in Windows 7.<br /><br />There seemed to be NO WAY to do it in Windows 10. Google search after Google search turned up <strong>nothing</strong>.<br /><br />Within seconds (literally) of installing Classic Shell on W10, voila! The old standby &quot;Recent Items&quot; is back, in all its glory. And as a huge bonus I got a Windows-7-like menu with a Windows 10 facelift -- all with every customization I could ever want.<br /><br />And yes, I donated. <img src="images/smilies/icon_e_smile.gif" alt=":)" title="Smile" /></div>

					<br clear="all" /><br />

						<table width="100%" cellspacing="0">
						<tr valign="middle">
							<td class="gensmall" align="right">
							
							</td>
						</tr>
						</table>
					</td>
				</tr>
				</table>
			</td>
		</tr>

		<tr class="row1">

			<td class="profile"><strong><a href="#wrapheader">Top</a></strong></td>
			<td><div class="gensmall" style="float: left;">&nbsp;<a href="memberlist3fbb.html?mode=viewprofile&amp;u=12126"><img src="styles/subsilver2/imageset/en/icon_user_profile.gif" alt="Profile" title="Profile" /></a> &nbsp;</div> <div class="gensmall" style="float: right;"><a href="posting743c.html?mode=quote&amp;f=20&amp;p=23729"><img src="styles/subsilver2/imageset/en/icon_post_quote.gif" alt="Reply with quote" title="Reply with quote" /></a> &nbsp;</div></td>
	
		</tr>

	<tr>
		<td class="spacer" colspan="2" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
	</tr>
	</table>

	<table class="tablebg" width="100%" cellspacing="1">
	<tr class="row2">

			<td align="center" valign="middle">
				<a name="p24014"></a>
				<b class="postauthor">masterzep</b>
			</td>
			<td width="100%" height="25">
				<table width="100%" cellspacing="0">
				<tr>
				
					<td class="gensmall" width="100%"><div style="float: left;">&nbsp;<b>Post subject:</b> <a href="#p24014">Re: The official THANK YOU thread :-)</a></div><div style="float: right;"><a href="viewtopiccb3c-3.html?p=24014&amp;f=20#p24014"><img src="styles/subsilver2/imageset/icon_post_target.gif" width="12" height="9" alt="Post" title="Post" /></a><b>Posted:</b> Mon Dec 14, 2015 1:55 pm&nbsp;</div></td>
				</tr>
				</table>
			</td>
		</tr>

		<tr class="row2">

			<td valign="top" class="profile">
				<table cellspacing="4" align="center" width="150">
			
				<tr>
					<td><img src="styles/subsilver2/imageset/en/icon_user_offline.gif" alt="Offline" title="Offline" /></td>
				</tr>
			
				</table>

				<span class="postdetails">
					<br /><b>Joined:</b> Mon Dec 14, 2015 12:12 pm<br /><b>Posts:</b> 9
				</span>

			</td>
			<td valign="top">
				<table width="100%" cellspacing="5">
				<tr>
					<td>
					

						<div class="postbody">Thanks Classic Shell. I hated Win8. Reinstalled 7 as soon as I tried it. But time marches on and 7 is being cast aside as XP was, So time to find a way to live with it. And frankly, what a POC. Every &quot;improvement&quot; they made, makes using windows more difficult. Wasting days to relearn what, by now, have been the basics. <br /><br />First, the lack of the Start menu was a paramount DeadFish for me. So, fighting through the resource hogging win update, I tried to get one. I tried some version of Start8 or the like, filled with extra junk it wanted to trick you into downloading, and topping the menu with add buttons. That in itself, maybe I could have hacked past, but it was a huge resource hog on its own.<br /><br />Whenever You click the start button, you wait, go get a coffee wait. I was born in 64, I DON'T GOT THAT KIND OF TIME. So, Luckily my second attempt, before deleting 8 again, Was ClassicShell's start menu. Perfect, fast and snappy, correct items and locations for me, easy to customize, NO EXTRAS!. Really, that's all I can ask for. <br /><br />Now the only question, since I opted no when I installed, how can I install the rest of ClassicShell app options without reinstalling my start menu.<br /><br />Huge kudos you all. well done.</div>

					<br clear="all" /><br />

						<table width="100%" cellspacing="0">
						<tr valign="middle">
							<td class="gensmall" align="right">
							
							</td>
						</tr>
						</table>
					</td>
				</tr>
				</table>
			</td>
		</tr>

		<tr class="row2">

			<td class="profile"><strong><a href="#wrapheader">Top</a></strong></td>
			<td><div class="gensmall" style="float: left;">&nbsp;<a href="memberlist9be9.html?mode=viewprofile&amp;u=12232"><img src="styles/subsilver2/imageset/en/icon_user_profile.gif" alt="Profile" title="Profile" /></a> &nbsp;</div> <div class="gensmall" style="float: right;"><a href="posting9245.html?mode=quote&amp;f=20&amp;p=24014"><img src="styles/subsilver2/imageset/en/icon_post_quote.gif" alt="Reply with quote" title="Reply with quote" /></a> &nbsp;</div></td>
	
		</tr>

	<tr>
		<td class="spacer" colspan="2" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
	</tr>
	</table>

	<table class="tablebg" width="100%" cellspacing="1">
	<tr class="row1">

			<td align="center" valign="middle">
				<a name="p24015"></a>
				<b class="postauthor">masterzep</b>
			</td>
			<td width="100%" height="25">
				<table width="100%" cellspacing="0">
				<tr>
				
					<td class="gensmall" width="100%"><div style="float: left;">&nbsp;<b>Post subject:</b> <a href="#p24015">Re: The official THANK YOU thread :-)</a></div><div style="float: right;"><a href="viewtopicb83e.html?p=24015&amp;f=20#p24015"><img src="styles/subsilver2/imageset/icon_post_target.gif" width="12" height="9" alt="Post" title="Post" /></a><b>Posted:</b> Mon Dec 14, 2015 2:21 pm&nbsp;</div></td>
				</tr>
				</table>
			</td>
		</tr>

		<tr class="row1">

			<td valign="top" class="profile">
				<table cellspacing="4" align="center" width="150">
			
				<tr>
					<td><img src="styles/subsilver2/imageset/en/icon_user_offline.gif" alt="Offline" title="Offline" /></td>
				</tr>
			
				</table>

				<span class="postdetails">
					<br /><b>Joined:</b> Mon Dec 14, 2015 12:12 pm<br /><b>Posts:</b> 9
				</span>

			</td>
			<td valign="top">
				<table width="100%" cellspacing="5">
				<tr>
					<td>
					

						<div class="postbody"><div class="quotetitle">kerplunk wrote:</div><div class="quotecontent">Windows 8.x UI was a massive balls up by MS and this hasn't really been addressed in 10 other than a big mad fudge! The efforts by you guys to put back in place the usable interface that MS discarded so foolishly is hugely appreciated! Many thanks for now making the decision to update OS not seem like a shot in the foot!<br /><br />2 feature requests:<br /><br />1) Every time I press the &quot;Classic Shell&quot; button, could Steve Balmer receive a mild electric shock?<br />2) To allow me to use Win 10, could you add a &quot;Stop Windows behaving like a Google Product&quot; option to prevent my life being spooled back to MS servers?<br /><br />These should help Windows get back on track!<br /><br />Cheers!</div><br /><br />I gotta go along with you, Both 1 and 2. Especially #2. For real, software developers, stop stalking us and turning every part of our lives over to the Government(s).</div>

					<br clear="all" /><br />

						<table width="100%" cellspacing="0">
						<tr valign="middle">
							<td class="gensmall" align="right">
							
							</td>
						</tr>
						</table>
					</td>
				</tr>
				</table>
			</td>
		</tr>

		<tr class="row1">

			<td class="profile"><strong><a href="#wrapheader">Top</a></strong></td>
			<td><div class="gensmall" style="float: left;">&nbsp;<a href="memberlist9be9.html?mode=viewprofile&amp;u=12232"><img src="styles/subsilver2/imageset/en/icon_user_profile.gif" alt="Profile" title="Profile" /></a> &nbsp;</div> <div class="gensmall" style="float: right;"><a href="posting56a5.html?mode=quote&amp;f=20&amp;p=24015"><img src="styles/subsilver2/imageset/en/icon_post_quote.gif" alt="Reply with quote" title="Reply with quote" /></a> &nbsp;</div></td>
	
		</tr>

	<tr>
		<td class="spacer" colspan="2" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
	</tr>
	</table>

	<table class="tablebg" width="100%" cellspacing="1">
	<tr class="row2">

			<td align="center" valign="middle">
				<a name="p24017"></a>
				<b class="postauthor">Jcee</b>
			</td>
			<td width="100%" height="25">
				<table width="100%" cellspacing="0">
				<tr>
				
					<td class="gensmall" width="100%"><div style="float: left;">&nbsp;<b>Post subject:</b> <a href="#p24017">Re: The official THANK YOU thread :-)</a></div><div style="float: right;"><a href="viewtopic2ab6.html?p=24017&amp;f=20#p24017"><img src="styles/subsilver2/imageset/icon_post_target.gif" width="12" height="9" alt="Post" title="Post" /></a><b>Posted:</b> Mon Dec 14, 2015 3:49 pm&nbsp;</div></td>
				</tr>
				</table>
			</td>
		</tr>

		<tr class="row2">

			<td valign="top" class="profile">
				<table cellspacing="4" align="center" width="150">
			
				<tr>
					<td><img src="styles/subsilver2/imageset/en/icon_user_offline.gif" alt="Offline" title="Offline" /></td>
				</tr>
			
				<tr>
					<td><img src="download/file18da.jpg?avatar=62_1366838364.jpg" width="73" height="89" alt="User avatar" /></td>
				</tr>
			
				</table>

				<span class="postdetails">
					<br /><b>Joined:</b> Sun Jan 06, 2013 1:44 pm<br /><b>Posts:</b> 1939
				</span>

			</td>
			<td valign="top">
				<table width="100%" cellspacing="5">
				<tr>
					<td>
					

						<div class="postbody">@<span style="color:#4b5c77;"><span style="font-family:Lucida Grande, Trebuchet MS, Helvetica, Arial, sans-serif;"><span style="background-color:#fafafa;">2&#41; To allow me to use Win 10, could you add a &quot;Stop Windows behaving like a Google Product&quot; option to prevent my life being spooled back to MS servers?</span></span></span><br /><br /><span style="color:#4b5c77;"><span style="font-family:Lucida Grande, Trebuchet MS, Helvetica, Arial, sans-serif;"><span style="background-color:#fafafa;"><br />If this is a legitimate feature request, there is a forum for it. and this might be relevant &#40;if you haven&#39;t already done it&#41; <!-- m --><a class="postlink" href="http://winaero.com/blog/how-to-disable-telemetry-and-data-collection-in-windows-10/">http://winaero.com/blog/how-to-disable- ... indows-10/</a><!-- m --> as for googles spying. They offer a &#39;free&#39; service in a world where nothing is free &#40;yes they have to pay for their servers, and coders&#41; Its only natural they receive some form of compensation. Personally I don&#39;t care about aggregate advertisement data. Its when things start getting personal, that it bothers me...<br />&#40;I&#39;m not saying spying is the right course, just the most profitable&#41;<br /></span></span></span></div>

					<br clear="all" /><br />

						<table width="100%" cellspacing="0">
						<tr valign="middle">
							<td class="gensmall" align="right">
							
							</td>
						</tr>
						</table>
					</td>
				</tr>
				</table>
			</td>
		</tr>

		<tr class="row2">

			<td class="profile"><strong><a href="#wrapheader">Top</a></strong></td>
			<td><div class="gensmall" style="float: left;">&nbsp;<a href="memberlist6caa.html?mode=viewprofile&amp;u=62"><img src="styles/subsilver2/imageset/en/icon_user_profile.gif" alt="Profile" title="Profile" /></a> &nbsp;</div> <div class="gensmall" style="float: right;"><a href="posting681c.html?mode=quote&amp;f=20&amp;p=24017"><img src="styles/subsilver2/imageset/en/icon_post_quote.gif" alt="Reply with quote" title="Reply with quote" /></a> &nbsp;</div></td>
	
		</tr>

	<tr>
		<td class="spacer" colspan="2" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
	</tr>
	</table>

	<table class="tablebg" width="100%" cellspacing="1">
	<tr class="row1">

			<td align="center" valign="middle">
				<a name="p24026"></a>
				<b class="postauthor">quaywe</b>
			</td>
			<td width="100%" height="25">
				<table width="100%" cellspacing="0">
				<tr>
				
					<td class="gensmall" width="100%"><div style="float: left;">&nbsp;<b>Post subject:</b> <a href="#p24026">Re: The official THANK YOU thread :-)</a></div><div style="float: right;"><a href="viewtopic4052.html?p=24026&amp;f=20#p24026"><img src="styles/subsilver2/imageset/icon_post_target.gif" width="12" height="9" alt="Post" title="Post" /></a><b>Posted:</b> Tue Dec 15, 2015 5:19 pm&nbsp;</div></td>
				</tr>
				</table>
			</td>
		</tr>

		<tr class="row1">

			<td valign="top" class="profile">
				<table cellspacing="4" align="center" width="150">
			
				<tr>
					<td><img src="styles/subsilver2/imageset/en/icon_user_offline.gif" alt="Offline" title="Offline" /></td>
				</tr>
			
				</table>

				<span class="postdetails">
					<br /><b>Joined:</b> Tue Dec 15, 2015 5:15 pm<br /><b>Posts:</b> 1
				</span>

			</td>
			<td valign="top">
				<table width="100%" cellspacing="5">
				<tr>
					<td>
					

						<div class="postbody">My first post on a forum is normally an introductory post, but in this case I am so impressed that the thank you is more important, will surely be donating...<br /><br />&quot;kiwi&quot;</div>

					<br clear="all" /><br />

						<table width="100%" cellspacing="0">
						<tr valign="middle">
							<td class="gensmall" align="right">
							
							</td>
						</tr>
						</table>
					</td>
				</tr>
				</table>
			</td>
		</tr>

		<tr class="row1">

			<td class="profile"><strong><a href="#wrapheader">Top</a></strong></td>
			<td><div class="gensmall" style="float: left;">&nbsp;<a href="memberlistd9e0.html?mode=viewprofile&amp;u=12239"><img src="styles/subsilver2/imageset/en/icon_user_profile.gif" alt="Profile" title="Profile" /></a> &nbsp;</div> <div class="gensmall" style="float: right;"><a href="postingd049.html?mode=quote&amp;f=20&amp;p=24026"><img src="styles/subsilver2/imageset/en/icon_post_quote.gif" alt="Reply with quote" title="Reply with quote" /></a> &nbsp;</div></td>
	
		</tr>

	<tr>
		<td class="spacer" colspan="2" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
	</tr>
	</table>

	<table class="tablebg" width="100%" cellspacing="1">
	<tr class="row2">

			<td align="center" valign="middle">
				<a name="p24125"></a>
				<b class="postauthor">Alan_uk</b>
			</td>
			<td width="100%" height="25">
				<table width="100%" cellspacing="0">
				<tr>
				
					<td class="gensmall" width="100%"><div style="float: left;">&nbsp;<b>Post subject:</b> <a href="#p24125">Re: The official THANK YOU thread :-)</a></div><div style="float: right;"><a href="viewtopicde5a.html?p=24125&amp;f=20#p24125"><img src="styles/subsilver2/imageset/icon_post_target.gif" width="12" height="9" alt="Post" title="Post" /></a><b>Posted:</b> Sun Dec 20, 2015 9:49 am&nbsp;</div></td>
				</tr>
				</table>
			</td>
		</tr>

		<tr class="row2">

			<td valign="top" class="profile">
				<table cellspacing="4" align="center" width="150">
			
				<tr>
					<td><img src="styles/subsilver2/imageset/en/icon_user_offline.gif" alt="Offline" title="Offline" /></td>
				</tr>
			
				</table>

				<span class="postdetails">
					<br /><b>Joined:</b> Sun Dec 20, 2015 8:55 am<br /><b>Posts:</b> 3
				</span>

			</td>
			<td valign="top">
				<table width="100%" cellspacing="5">
				<tr>
					<td>
					

						<div class="postbody">Just want to add my thanks (and donation) for this great little utility <img src="images/smilies/icon_e_smile.gif" alt=":)" title="Smile" /><br /><br />Has helped to soften the pain when moving from XP to Win 7 recently.<br /><br />Hoping to stay on Win 7 til 2020 providing I can stop MS$ automatically installing Win 10. I'm using another great utility GWX from Ultimate Outsider to help fight that battle <img src="images/smilies/icon_e_wink.gif" alt=";)" title="Wink" /><br /><br />Alan<br />UK</div>

					<br clear="all" /><br />

						<table width="100%" cellspacing="0">
						<tr valign="middle">
							<td class="gensmall" align="right">
							
							</td>
						</tr>
						</table>
					</td>
				</tr>
				</table>
			</td>
		</tr>

		<tr class="row2">

			<td class="profile"><strong><a href="#wrapheader">Top</a></strong></td>
			<td><div class="gensmall" style="float: left;">&nbsp;<a href="memberlist6e1c.html?mode=viewprofile&amp;u=12274"><img src="styles/subsilver2/imageset/en/icon_user_profile.gif" alt="Profile" title="Profile" /></a> &nbsp;</div> <div class="gensmall" style="float: right;"><a href="postingd9a7.html?mode=quote&amp;f=20&amp;p=24125"><img src="styles/subsilver2/imageset/en/icon_post_quote.gif" alt="Reply with quote" title="Reply with quote" /></a> &nbsp;</div></td>
	
		</tr>

	<tr>
		<td class="spacer" colspan="2" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
	</tr>
	</table>

	<table class="tablebg" width="100%" cellspacing="1">
	<tr class="row1">

			<td align="center" valign="middle">
				<a name="p24424"></a>
				<b class="postauthor">hardimpact01</b>
			</td>
			<td width="100%" height="25">
				<table width="100%" cellspacing="0">
				<tr>
				
					<td class="gensmall" width="100%"><div style="float: left;">&nbsp;<b>Post subject:</b> <a href="#p24424">Re: The official THANK YOU thread :-)</a></div><div style="float: right;"><a href="viewtopicab15-2.html?p=24424&amp;f=20#p24424"><img src="styles/subsilver2/imageset/icon_post_target.gif" width="12" height="9" alt="Post" title="Post" /></a><b>Posted:</b> Fri Jan 08, 2016 8:52 am&nbsp;</div></td>
				</tr>
				</table>
			</td>
		</tr>

		<tr class="row1">

			<td valign="top" class="profile">
				<table cellspacing="4" align="center" width="150">
			
				<tr>
					<td><img src="styles/subsilver2/imageset/en/icon_user_offline.gif" alt="Offline" title="Offline" /></td>
				</tr>
			
				</table>

				<span class="postdetails">
					<br /><b>Joined:</b> Fri Jan 08, 2016 8:24 am<br /><b>Posts:</b> 2
				</span>

			</td>
			<td valign="top">
				<table width="100%" cellspacing="5">
				<tr>
					<td>
					

						<div class="postbody">this start menu program is so fast and efficient, I had to create a post for thanking the author for creating such a great software that replaces the old start. It's faster, and the search box is perfect. Exactly how I would have wished! I still can't believe its free. I love the hover to open feature that xp had that .now I have on Windows 7. Also, the author is a great person, answering my personal admin requests to get an account registered correctly. That's off his own time, too.</div>

					<br clear="all" /><br />

						<table width="100%" cellspacing="0">
						<tr valign="middle">
							<td class="gensmall" align="right">
							
							</td>
						</tr>
						</table>
					</td>
				</tr>
				</table>
			</td>
		</tr>

		<tr class="row1">

			<td class="profile"><strong><a href="#wrapheader">Top</a></strong></td>
			<td><div class="gensmall" style="float: left;">&nbsp;<a href="memberlist2b64.html?mode=viewprofile&amp;u=12412"><img src="styles/subsilver2/imageset/en/icon_user_profile.gif" alt="Profile" title="Profile" /></a> &nbsp;</div> <div class="gensmall" style="float: right;"><a href="posting83d3.html?mode=quote&amp;f=20&amp;p=24424"><img src="styles/subsilver2/imageset/en/icon_post_quote.gif" alt="Reply with quote" title="Reply with quote" /></a> &nbsp;</div></td>
	
		</tr>

	<tr>
		<td class="spacer" colspan="2" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
	</tr>
	</table>

	<table class="tablebg" width="100%" cellspacing="1">
	<tr class="row2">

			<td align="center" valign="middle">
				<a name="p24432"></a>
				<b class="postauthor">Butterfly2016</b>
			</td>
			<td width="100%" height="25">
				<table width="100%" cellspacing="0">
				<tr>
				
					<td class="gensmall" width="100%"><div style="float: left;">&nbsp;<b>Post subject:</b> <a href="#p24432">Re: The official THANK YOU thread :-)</a></div><div style="float: right;"><a href="viewtopic5580.html?p=24432&amp;f=20#p24432"><img src="styles/subsilver2/imageset/icon_post_target.gif" width="12" height="9" alt="Post" title="Post" /></a><b>Posted:</b> Fri Jan 08, 2016 9:34 pm&nbsp;</div></td>
				</tr>
				</table>
			</td>
		</tr>

		<tr class="row2">

			<td valign="top" class="profile">
				<table cellspacing="4" align="center" width="150">
			
				<tr>
					<td><img src="styles/subsilver2/imageset/en/icon_user_offline.gif" alt="Offline" title="Offline" /></td>
				</tr>
			
				</table>

				<span class="postdetails">
					<br /><b>Joined:</b> Fri Jan 08, 2016 9:16 pm<br /><b>Posts:</b> 1
				</span>

			</td>
			<td valign="top">
				<table width="100%" cellspacing="5">
				<tr>
					<td>
					

						<div class="postbody">A friend of mine just told me about Classic Shell and wow! Such an excellent program and its free! I hated Windows 8 and upgraded to Windows 10 and I do like it for the most part except I find the Windows 10 start menu so clunky. <br /><br />Now I have the option to make my start menu look like the way I want it to! At the moment I have it set as Classic Style with Windows XP Luna skin. Goodbye clunky Windows 10 start menu. And I've donated! Its totally worth it. I've still got to play with Classic Explorer Setting and Classic IE Settings.</div>

					<br clear="all" /><br />

						<table width="100%" cellspacing="0">
						<tr valign="middle">
							<td class="gensmall" align="right">
							
							</td>
						</tr>
						</table>
					</td>
				</tr>
				</table>
			</td>
		</tr>

		<tr class="row2">

			<td class="profile"><strong><a href="#wrapheader">Top</a></strong></td>
			<td><div class="gensmall" style="float: left;">&nbsp;<a href="memberlist2155.html?mode=viewprofile&amp;u=12418"><img src="styles/subsilver2/imageset/en/icon_user_profile.gif" alt="Profile" title="Profile" /></a> &nbsp;</div> <div class="gensmall" style="float: right;"><a href="posting721b.html?mode=quote&amp;f=20&amp;p=24432"><img src="styles/subsilver2/imageset/en/icon_post_quote.gif" alt="Reply with quote" title="Reply with quote" /></a> &nbsp;</div></td>
	
		</tr>

	<tr>
		<td class="spacer" colspan="2" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
	</tr>
	</table>

	<table class="tablebg" width="100%" cellspacing="1">
	<tr class="row1">

			<td align="center" valign="middle">
				<a name="p24520"></a>
				<b class="postauthor">mykou</b>
			</td>
			<td width="100%" height="25">
				<table width="100%" cellspacing="0">
				<tr>
				
					<td class="gensmall" width="100%"><div style="float: left;">&nbsp;<b>Post subject:</b> <a href="#p24520">Re: The official THANK YOU thread :-)</a></div><div style="float: right;"><a href="viewtopic05f5.html?p=24520&amp;f=20#p24520"><img src="styles/subsilver2/imageset/icon_post_target.gif" width="12" height="9" alt="Post" title="Post" /></a><b>Posted:</b> Wed Jan 13, 2016 8:42 am&nbsp;</div></td>
				</tr>
				</table>
			</td>
		</tr>

		<tr class="row1">

			<td valign="top" class="profile">
				<table cellspacing="4" align="center" width="150">
			
				<tr>
					<td><img src="styles/subsilver2/imageset/en/icon_user_offline.gif" alt="Offline" title="Offline" /></td>
				</tr>
			
				</table>

				<span class="postdetails">
					<br /><b>Joined:</b> Sun Sep 27, 2015 7:52 am<br /><b>Posts:</b> 43
				</span>

			</td>
			<td valign="top">
				<table width="100%" cellspacing="5">
				<tr>
					<td>
					

						<div class="postbody">A big thanks to all CSM team which worked hard ! <br /><br />A special thanks to  Juniper7 , Jcee and Gaurav for their kind help when I needed to understand some features:) <br /><br />My wish list for 2016 as feature:<br /> <br />skin the taskbar <img src="images/smilies/icon_e_smile.gif" alt=":)" title="Smile" /> <br /><br />happy new year all</div>

					<br clear="all" /><br />

						<table width="100%" cellspacing="0">
						<tr valign="middle">
							<td class="gensmall" align="right">
							
							</td>
						</tr>
						</table>
					</td>
				</tr>
				</table>
			</td>
		</tr>

		<tr class="row1">

			<td class="profile"><strong><a href="#wrapheader">Top</a></strong></td>
			<td><div class="gensmall" style="float: left;">&nbsp;<a href="memberlistaff3.html?mode=viewprofile&amp;u=11606"><img src="styles/subsilver2/imageset/en/icon_user_profile.gif" alt="Profile" title="Profile" /></a> &nbsp;</div> <div class="gensmall" style="float: right;"><a href="posting456a.html?mode=quote&amp;f=20&amp;p=24520"><img src="styles/subsilver2/imageset/en/icon_post_quote.gif" alt="Reply with quote" title="Reply with quote" /></a> &nbsp;</div></td>
	
		</tr>

	<tr>
		<td class="spacer" colspan="2" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
	</tr>
	</table>

	<table class="tablebg" width="100%" cellspacing="1">
	<tr class="row2">

			<td align="center" valign="middle">
				<a name="p24532"></a>
				<b class="postauthor">Teipreob</b>
			</td>
			<td width="100%" height="25">
				<table width="100%" cellspacing="0">
				<tr>
				
					<td class="gensmall" width="100%"><div style="float: left;">&nbsp;<b>Post subject:</b> <a href="#p24532">Re: The official THANK YOU thread :-)</a></div><div style="float: right;"><a href="viewtopic8547.html?p=24532&amp;f=20#p24532"><img src="styles/subsilver2/imageset/icon_post_target.gif" width="12" height="9" alt="Post" title="Post" /></a><b>Posted:</b> Wed Jan 13, 2016 3:21 pm&nbsp;</div></td>
				</tr>
				</table>
			</td>
		</tr>

		<tr class="row2">

			<td valign="top" class="profile">
				<table cellspacing="4" align="center" width="150">
			
				<tr>
					<td><img src="styles/subsilver2/imageset/en/icon_user_offline.gif" alt="Offline" title="Offline" /></td>
				</tr>
			
				</table>

				<span class="postdetails">
					<br /><b>Joined:</b> Wed Jan 13, 2016 3:18 pm<br /><b>Posts:</b> 1
				</span>

			</td>
			<td valign="top">
				<table width="100%" cellspacing="5">
				<tr>
					<td>
					

						<div class="postbody">Great, I donated for it. Finally I can work with this OS without frustrations</div>

					<br clear="all" /><br />

						<table width="100%" cellspacing="0">
						<tr valign="middle">
							<td class="gensmall" align="right">
							
							</td>
						</tr>
						</table>
					</td>
				</tr>
				</table>
			</td>
		</tr>

		<tr class="row2">

			<td class="profile"><strong><a href="#wrapheader">Top</a></strong></td>
			<td><div class="gensmall" style="float: left;">&nbsp;<a href="memberlist869b.html?mode=viewprofile&amp;u=12459"><img src="styles/subsilver2/imageset/en/icon_user_profile.gif" alt="Profile" title="Profile" /></a> &nbsp;</div> <div class="gensmall" style="float: right;"><a href="posting6e49.html?mode=quote&amp;f=20&amp;p=24532"><img src="styles/subsilver2/imageset/en/icon_post_quote.gif" alt="Reply with quote" title="Reply with quote" /></a> &nbsp;</div></td>
	
		</tr>

	<tr>
		<td class="spacer" colspan="2" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
	</tr>
	</table>

	<table class="tablebg" width="100%" cellspacing="1">
	<tr class="row1">

			<td align="center" valign="middle">
				<a name="p24559"></a>
				<b class="postauthor">mayka</b>
			</td>
			<td width="100%" height="25">
				<table width="100%" cellspacing="0">
				<tr>
				
					<td class="gensmall" width="100%"><div style="float: left;">&nbsp;<b>Post subject:</b> <a href="#p24559">Re: The official THANK YOU thread :-)</a></div><div style="float: right;"><a href="viewtopicefd9.html?p=24559&amp;f=20#p24559"><img src="styles/subsilver2/imageset/icon_post_target.gif" width="12" height="9" alt="Post" title="Post" /></a><b>Posted:</b> Fri Jan 15, 2016 2:09 pm&nbsp;</div></td>
				</tr>
				</table>
			</td>
		</tr>

		<tr class="row1">

			<td valign="top" class="profile">
				<table cellspacing="4" align="center" width="150">
			
				<tr>
					<td><img src="styles/subsilver2/imageset/en/icon_user_offline.gif" alt="Offline" title="Offline" /></td>
				</tr>
			
				</table>

				<span class="postdetails">
					<br /><b>Joined:</b> Fri Jan 15, 2016 2:02 pm<br /><b>Posts:</b> 9
				</span>

			</td>
			<td valign="top">
				<table width="100%" cellspacing="5">
				<tr>
					<td>
					

						<div class="postbody">This (master)piece of software is the reason that new Windows' (post XP) don't suck. It was worrying change when in Vista/7 you were restricted to use minimal space, but then with Windows 8 came this... something... I think that drugs that were being taken by designers/programmers during brainstorming that lead to that &quot;invention&quot; should be banned if it isn't already a case. And the thing in Windows 10 isn't much better. It's just not fullscreen.</div>

					<br clear="all" /><br />

						<table width="100%" cellspacing="0">
						<tr valign="middle">
							<td class="gensmall" align="right">
							
							</td>
						</tr>
						</table>
					</td>
				</tr>
				</table>
			</td>
		</tr>

		<tr class="row1">

			<td class="profile"><strong><a href="#wrapheader">Top</a></strong></td>
			<td><div class="gensmall" style="float: left;">&nbsp;<a href="memberlist68f0.html?mode=viewprofile&amp;u=12478"><img src="styles/subsilver2/imageset/en/icon_user_profile.gif" alt="Profile" title="Profile" /></a> &nbsp;</div> <div class="gensmall" style="float: right;"><a href="postinga01a.html?mode=quote&amp;f=20&amp;p=24559"><img src="styles/subsilver2/imageset/en/icon_post_quote.gif" alt="Reply with quote" title="Reply with quote" /></a> &nbsp;</div></td>
	
		</tr>

	<tr>
		<td class="spacer" colspan="2" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
	</tr>
	</table>

	<table class="tablebg" width="100%" cellspacing="1">
	<tr class="row2">

			<td align="center" valign="middle">
				<a name="p24671"></a>
				<b class="postauthor">motan</b>
			</td>
			<td width="100%" height="25">
				<table width="100%" cellspacing="0">
				<tr>
				
					<td class="gensmall" width="100%"><div style="float: left;">&nbsp;<b>Post subject:</b> <a href="#p24671">Re: The official THANK YOU thread :-)</a></div><div style="float: right;"><a href="viewtopice0d2.html?p=24671&amp;f=20#p24671"><img src="styles/subsilver2/imageset/icon_post_target.gif" width="12" height="9" alt="Post" title="Post" /></a><b>Posted:</b> Fri Jan 22, 2016 5:50 pm&nbsp;</div></td>
				</tr>
				</table>
			</td>
		</tr>

		<tr class="row2">

			<td valign="top" class="profile">
				<table cellspacing="4" align="center" width="150">
			
				<tr>
					<td><img src="styles/subsilver2/imageset/en/icon_user_offline.gif" alt="Offline" title="Offline" /></td>
				</tr>
			
				<tr>
					<td><img src="download/filee2f8.jpg?avatar=12463_1457481894.jpg" width="90" height="84" alt="User avatar" /></td>
				</tr>
			
				</table>

				<span class="postdetails">
					<br /><b>Joined:</b> Thu Jan 14, 2016 5:24 am<br /><b>Posts:</b> 28
				</span>

			</td>
			<td valign="top">
				<table width="100%" cellspacing="5">
				<tr>
					<td>
					

						<div class="postbody"><strong><span style="color:#0000ff;">The added picture below shows a Classic Shell Start Menu within Windows 10 desktop screenshot.<br /><br />Thanks so much to Classic Shell developers and supporters in forum. You guys did a great job.</span></strong><br /><br /><br /><br /><br /><strong><span style="color:#0000ff;"><a href="http://hizliresim.com/yLp4Ln" class="postlink"><img src="../../i.hizliresim.com/yLp4Ln.html" alt="" /></a><br /><br /><br /></span></strong></div>

					<br clear="all" /><br />

						<table width="100%" cellspacing="0">
						<tr valign="middle">
							<td class="gensmall" align="right">
							
							</td>
						</tr>
						</table>
					</td>
				</tr>
				</table>
			</td>
		</tr>

		<tr class="row2">

			<td class="profile"><strong><a href="#wrapheader">Top</a></strong></td>
			<td><div class="gensmall" style="float: left;">&nbsp;<a href="memberlist6e06.html?mode=viewprofile&amp;u=12463"><img src="styles/subsilver2/imageset/en/icon_user_profile.gif" alt="Profile" title="Profile" /></a> &nbsp;</div> <div class="gensmall" style="float: right;"><a href="postingc12e.html?mode=quote&amp;f=20&amp;p=24671"><img src="styles/subsilver2/imageset/en/icon_post_quote.gif" alt="Reply with quote" title="Reply with quote" /></a> &nbsp;</div></td>
	
		</tr>

	<tr>
		<td class="spacer" colspan="2" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
	</tr>
	</table>

	<table class="tablebg" width="100%" cellspacing="1">
	<tr class="row1">

			<td align="center" valign="middle">
				<a name="p25593"></a>
				<b class="postauthor">VeganCaramel</b>
			</td>
			<td width="100%" height="25">
				<table width="100%" cellspacing="0">
				<tr>
				
					<td class="gensmall" width="100%"><div style="float: left;">&nbsp;<b>Post subject:</b> <a href="#p25593">Re: The official THANK YOU thread :-) and user reviews</a></div><div style="float: right;"><a href="viewtopicd6c0.html?p=25593&amp;f=20#p25593"><img src="styles/subsilver2/imageset/icon_post_target.gif" width="12" height="9" alt="Post" title="Post" /></a><b>Posted:</b> Fri Mar 04, 2016 8:24 am&nbsp;</div></td>
				</tr>
				</table>
			</td>
		</tr>

		<tr class="row1">

			<td valign="top" class="profile">
				<table cellspacing="4" align="center" width="150">
			
				<tr>
					<td><img src="styles/subsilver2/imageset/en/icon_user_offline.gif" alt="Offline" title="Offline" /></td>
				</tr>
			
				<tr>
					<td><img src="download/filec32e.png?avatar=12849_1457105519.png" width="90" height="90" alt="User avatar" /></td>
				</tr>
			
				</table>

				<span class="postdetails">
					<br /><b>Joined:</b> Fri Mar 04, 2016 7:39 am<br /><b>Posts:</b> 1
				</span>

			</td>
			<td valign="top">
				<table width="100%" cellspacing="5">
				<tr>
					<td>
					

						<div class="postbody">mind = blown<br /><br />So lean, clean, crisp, solid, intuitive, ingenious, non-invasive, option-packed and empowering.<br /><br />So much respect for system resources, system integrity, user time, user control and users in general.<br /><br />The option to backup settings nearly gave me a joygasm.<br /><br />I've never felt so compelled to donate for free software.<br /><br />Every day, I'm going to pray to the FSM that you guys design an entire OS some day.<br /><br /><strong>Thank you!</strong></div>

					<br clear="all" /><br />

						<table width="100%" cellspacing="0">
						<tr valign="middle">
							<td class="gensmall" align="right">
							
							</td>
						</tr>
						</table>
					</td>
				</tr>
				</table>
			</td>
		</tr>

		<tr class="row1">

			<td class="profile"><strong><a href="#wrapheader">Top</a></strong></td>
			<td><div class="gensmall" style="float: left;">&nbsp;<a href="memberlist4aea.html?mode=viewprofile&amp;u=12849"><img src="styles/subsilver2/imageset/en/icon_user_profile.gif" alt="Profile" title="Profile" /></a> &nbsp;</div> <div class="gensmall" style="float: right;"><a href="posting962f.html?mode=quote&amp;f=20&amp;p=25593"><img src="styles/subsilver2/imageset/en/icon_post_quote.gif" alt="Reply with quote" title="Reply with quote" /></a> &nbsp;</div></td>
	
		</tr>

	<tr>
		<td class="spacer" colspan="2" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
	</tr>
	</table>

	<table class="tablebg" width="100%" cellspacing="1">
	<tr class="row2">

			<td align="center" valign="middle">
				<a name="p25595"></a>
				<b class="postauthor">Gaurav</b>
			</td>
			<td width="100%" height="25">
				<table width="100%" cellspacing="0">
				<tr>
				
					<td class="gensmall" width="100%"><div style="float: left;">&nbsp;<b>Post subject:</b> <a href="#p25595">Re: The official THANK YOU thread :-) and user reviews</a></div><div style="float: right;"><a href="viewtopicfb56.html?p=25595&amp;f=20#p25595"><img src="styles/subsilver2/imageset/icon_post_target.gif" width="12" height="9" alt="Post" title="Post" /></a><b>Posted:</b> Fri Mar 04, 2016 8:50 am&nbsp;</div></td>
				</tr>
				</table>
			</td>
		</tr>

		<tr class="row2">

			<td valign="top" class="profile">
				<table cellspacing="4" align="center" width="150">
			
				<tr>
					<td><img src="styles/subsilver2/imageset/en/icon_user_offline.gif" alt="Offline" title="Offline" /></td>
				</tr>
			
				<tr>
					<td><img src="download/file209d.png?avatar=54_1464201643.png" width="90" height="90" alt="User avatar" /></td>
				</tr>
			
				</table>

				<span class="postdetails">
					<br /><b>Joined:</b> Thu Jan 03, 2013 12:38 am<br /><b>Posts:</b> 5341
				</span>

			</td>
			<td valign="top">
				<table width="100%" cellspacing="5">
				<tr>
					<td>
					

						<div class="postbody">Thanks VeganCaramel, that's one of the nicest compliments anyone has ever given Classic Shell.</div>

					
						<div class="postbody"><br />_________________<br /><span style="font-family:Segoe UI Semibold;"><span style="font-size: 100%; line-height: 116%;">Links to some general topics</span></span><span style="font-size: 100%; line-height: 116%;"><span style="font-family:Segoe UI Semibold;">:</span></span><br /><span style="font-size: 100%; line-height: 116%;"><span style="font-family:Segoe UI Semibold;"></span></span><br /><span style="font-size: 100%; line-height: 116%;"><span style="font-family:Segoe UI Semibold;"></span></span><span style="font-family:Segoe UI Semibold;"></span><span style="font-size: 100%; line-height: 116%;"><span style="font-family:Segoe UI Semibold;">●</span></span><span style="font-size: 100%; line-height: 116%;"><span style="font-family:Segoe UI Semibold;"> <a href="viewtopic9d3a.html?f=4&amp;t=2399" class="postlink">Compare Start Menus</a></span></span> <br /><br /><span style="font-size: 100%; line-height: 116%;"><span style="font-family:Segoe UI Semibold;">●</span></span><span style="font-size: 100%; line-height: 116%;"><span style="font-family:Segoe UI Semibold;"> <a href="viewtopic5327.html?f=4&amp;t=1588" class="postlink">Read the Search box usage guide</a></span></span><span style="font-size: 100%; line-height: 116%;"><span style="font-family:Segoe UI Semibold;">. <br /><br />I am a Windows enthusiast and did Classic Shell&#39;s testing and usability/UX feedback.</span></span></div>
					<br clear="all" /><br />

						<table width="100%" cellspacing="0">
						<tr valign="middle">
							<td class="gensmall" align="right">
							
							</td>
						</tr>
						</table>
					</td>
				</tr>
				</table>
			</td>
		</tr>

		<tr class="row2">

			<td class="profile"><strong><a href="#wrapheader">Top</a></strong></td>
			<td><div class="gensmall" style="float: left;">&nbsp;<a href="memberlist367b.html?mode=viewprofile&amp;u=54"><img src="styles/subsilver2/imageset/en/icon_user_profile.gif" alt="Profile" title="Profile" /></a> &nbsp;</div> <div class="gensmall" style="float: right;"><a href="postingaaf9.html?mode=quote&amp;f=20&amp;p=25595"><img src="styles/subsilver2/imageset/en/icon_post_quote.gif" alt="Reply with quote" title="Reply with quote" /></a> &nbsp;</div></td>
	
		</tr>

	<tr>
		<td class="spacer" colspan="2" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
	</tr>
	</table>

	<table class="tablebg" width="100%" cellspacing="1">
	<tr class="row1">

			<td align="center" valign="middle">
				<a name="p25902"></a>
				<b class="postauthor">sreilly24590</b>
			</td>
			<td width="100%" height="25">
				<table width="100%" cellspacing="0">
				<tr>
				
					<td class="gensmall" width="100%"><div style="float: left;">&nbsp;<b>Post subject:</b> <a href="#p25902">Re: The official THANK YOU thread :-) and user reviews</a></div><div style="float: right;"><a href="viewtopicc770.html?p=25902&amp;f=20#p25902"><img src="styles/subsilver2/imageset/icon_post_target.gif" width="12" height="9" alt="Post" title="Post" /></a><b>Posted:</b> Sat Mar 26, 2016 8:40 am&nbsp;</div></td>
				</tr>
				</table>
			</td>
		</tr>

		<tr class="row1">

			<td valign="top" class="profile">
				<table cellspacing="4" align="center" width="150">
			
				<tr>
					<td><img src="styles/subsilver2/imageset/en/icon_user_offline.gif" alt="Offline" title="Offline" /></td>
				</tr>
			
				</table>

				<span class="postdetails">
					<br /><b>Joined:</b> Sat Mar 26, 2016 8:23 am<br /><b>Posts:</b> 3<br /><b>Location:</b> Central Virginia
				</span>

			</td>
			<td valign="top">
				<table width="100%" cellspacing="5">
				<tr>
					<td>
					

						<div class="postbody">Having a Classic Start Menu made every version of Windows since 7 a more user friendly experience. It shouldn't be a head scratcher to figure out how to start programs and Classic Shell solves a lot of problems for me. Thanks a ton guys!</div>

					<br clear="all" /><br />

						<table width="100%" cellspacing="0">
						<tr valign="middle">
							<td class="gensmall" align="right">
							
							</td>
						</tr>
						</table>
					</td>
				</tr>
				</table>
			</td>
		</tr>

		<tr class="row1">

			<td class="profile"><strong><a href="#wrapheader">Top</a></strong></td>
			<td><div class="gensmall" style="float: left;">&nbsp;<a href="memberlistdc60.html?mode=viewprofile&amp;u=13033"><img src="styles/subsilver2/imageset/en/icon_user_profile.gif" alt="Profile" title="Profile" /></a> &nbsp;</div> <div class="gensmall" style="float: right;"><a href="posting346f.html?mode=quote&amp;f=20&amp;p=25902"><img src="styles/subsilver2/imageset/en/icon_post_quote.gif" alt="Reply with quote" title="Reply with quote" /></a> &nbsp;</div></td>
	
		</tr>

	<tr>
		<td class="spacer" colspan="2" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
	</tr>
	</table>

	<table class="tablebg" width="100%" cellspacing="1">
	<tr class="row2">

			<td align="center" valign="middle">
				<a name="p26142"></a>
				<b class="postauthor">gracysmith</b>
			</td>
			<td width="100%" height="25">
				<table width="100%" cellspacing="0">
				<tr>
				
					<td class="gensmall" width="100%"><div style="float: left;">&nbsp;<b>Post subject:</b> <a href="#p26142">Re: The official THANK YOU thread :-) and user reviews</a></div><div style="float: right;"><a href="viewtopic35e6.html?p=26142&amp;f=20#p26142"><img src="styles/subsilver2/imageset/icon_post_target.gif" width="12" height="9" alt="Post" title="Post" /></a><b>Posted:</b> Mon Apr 11, 2016 11:16 pm&nbsp;</div></td>
				</tr>
				</table>
			</td>
		</tr>

		<tr class="row2">

			<td valign="top" class="profile">
				<table cellspacing="4" align="center" width="150">
			
				<tr>
					<td><img src="styles/subsilver2/imageset/en/icon_user_offline.gif" alt="Offline" title="Offline" /></td>
				</tr>
			
				</table>

				<span class="postdetails">
					<br /><b>Joined:</b> Mon Apr 11, 2016 11:12 pm<br /><b>Posts:</b> 1<br /><b>Location:</b> UK
				</span>

			</td>
			<td valign="top">
				<table width="100%" cellspacing="5">
				<tr>
					<td>
					

						<div class="postbody">Classic Shell is really one precious board with great Classic Buttons options.</div>

					<br clear="all" /><br />

						<table width="100%" cellspacing="0">
						<tr valign="middle">
							<td class="gensmall" align="right">
							
							</td>
						</tr>
						</table>
					</td>
				</tr>
				</table>
			</td>
		</tr>

		<tr class="row2">

			<td class="profile"><strong><a href="#wrapheader">Top</a></strong></td>
			<td><div class="gensmall" style="float: left;">&nbsp;<a href="memberlistbde7.html?mode=viewprofile&amp;u=13159"><img src="styles/subsilver2/imageset/en/icon_user_profile.gif" alt="Profile" title="Profile" /></a> &nbsp;</div> <div class="gensmall" style="float: right;"><a href="postingff55.html?mode=quote&amp;f=20&amp;p=26142"><img src="styles/subsilver2/imageset/en/icon_post_quote.gif" alt="Reply with quote" title="Reply with quote" /></a> &nbsp;</div></td>
	
		</tr>

	<tr>
		<td class="spacer" colspan="2" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
	</tr>
	</table>

	<table class="tablebg" width="100%" cellspacing="1">
	<tr class="row1">

			<td align="center" valign="middle">
				<a name="p26191"></a>
				<b class="postauthor">Indianatone</b>
			</td>
			<td width="100%" height="25">
				<table width="100%" cellspacing="0">
				<tr>
				
					<td class="gensmall" width="100%"><div style="float: left;">&nbsp;<b>Post subject:</b> <a href="#p26191">Re: The official THANK YOU thread :-) and user reviews</a></div><div style="float: right;"><a href="viewtopic9cf3.html?p=26191&amp;f=20#p26191"><img src="styles/subsilver2/imageset/icon_post_target.gif" width="12" height="9" alt="Post" title="Post" /></a><b>Posted:</b> Sat Apr 16, 2016 6:46 pm&nbsp;</div></td>
				</tr>
				</table>
			</td>
		</tr>

		<tr class="row1">

			<td valign="top" class="profile">
				<table cellspacing="4" align="center" width="150">
			
				<tr>
					<td><img src="styles/subsilver2/imageset/en/icon_user_offline.gif" alt="Offline" title="Offline" /></td>
				</tr>
			
				<tr>
					<td><img src="download/filee4db.jpg?avatar=13208_1460856769.jpg" width="81" height="90" alt="User avatar" /></td>
				</tr>
			
				</table>

				<span class="postdetails">
					<br /><b>Joined:</b> Sat Apr 16, 2016 6:27 pm<br /><b>Posts:</b> 1<br /><b>Location:</b> NW Indianapolis IN.
				</span>

			</td>
			<td valign="top">
				<table width="100%" cellspacing="5">
				<tr>
					<td>
					

						<div class="postbody">Thank you to Ivo and everyone else who helps out with Classic Shell. I have been using it for years on my Windows 7 machines and also on my Vista, Seven, 8.1 and Ten VMware Virtual machines. It really looks good and makes my life easier. Microsoft developed the Start Menu with 95 and after XP seem to have lost their way and have completely lost the plot with Windows 10.<br />Indianatone</div>

					
						<br clear="all" /><br />

						<table class="tablebg" width="100%" cellspacing="1">
						<tr>
							<td class="row3"><b class="genmed">Attachments: </b></td>
						</tr>
						
							<tr>
								<td class="row2">
			<span class="gensmall"><b>File comment:</b> This is a Start Menu !</span><br />
		
			<span class="genmed">
				<img src="styles/subsilver2/imageset/icon_topic_attach.gif" width="14" height="18" alt="" title="" /> 
				<a href="download/filebd97.png?id=3387">2016-04-16 21_43_49-Greenshot.png</a> [696.49 KiB]
			</span><br />
			<span class="gensmall">Not downloaded yet</span>
		

		<br />
	</td>
							</tr>
						
						</table>
					

						<table width="100%" cellspacing="0">
						<tr valign="middle">
							<td class="gensmall" align="right">
							
							</td>
						</tr>
						</table>
					</td>
				</tr>
				</table>
			</td>
		</tr>

		<tr class="row1">

			<td class="profile"><strong><a href="#wrapheader">Top</a></strong></td>
			<td><div class="gensmall" style="float: left;">&nbsp;<a href="memberlist2b48.html?mode=viewprofile&amp;u=13208"><img src="styles/subsilver2/imageset/en/icon_user_profile.gif" alt="Profile" title="Profile" /></a> &nbsp;</div> <div class="gensmall" style="float: right;"><a href="posting3ddc.html?mode=quote&amp;f=20&amp;p=26191"><img src="styles/subsilver2/imageset/en/icon_post_quote.gif" alt="Reply with quote" title="Reply with quote" /></a> &nbsp;</div></td>
	
		</tr>

	<tr>
		<td class="spacer" colspan="2" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
	</tr>
	</table>

	<table class="tablebg" width="100%" cellspacing="1">
	<tr class="row2">

			<td align="center" valign="middle">
				<a name="p26192"></a>
				<b class="postauthor">SoCalMBA</b>
			</td>
			<td width="100%" height="25">
				<table width="100%" cellspacing="0">
				<tr>
				
					<td class="gensmall" width="100%"><div style="float: left;">&nbsp;<b>Post subject:</b> <a href="#p26192">Re: The official THANK YOU thread :-) and user reviews</a></div><div style="float: right;"><a href="viewtopic4334.html?p=26192&amp;f=20#p26192"><img src="styles/subsilver2/imageset/icon_post_target.gif" width="12" height="9" alt="Post" title="Post" /></a><b>Posted:</b> Sat Apr 16, 2016 7:10 pm&nbsp;</div></td>
				</tr>
				</table>
			</td>
		</tr>

		<tr class="row2">

			<td valign="top" class="profile">
				<table cellspacing="4" align="center" width="150">
			
				<tr>
					<td><img src="styles/subsilver2/imageset/en/icon_user_offline.gif" alt="Offline" title="Offline" /></td>
				</tr>
			
				</table>

				<span class="postdetails">
					<br /><b>Joined:</b> Sat Apr 16, 2016 6:42 pm<br /><b>Posts:</b> 1
				</span>

			</td>
			<td valign="top">
				<table width="100%" cellspacing="5">
				<tr>
					<td>
					

						<div class="postbody">I am SO grateful for Classic Shell! I stumbled upon it right after Windows 10 automatically installed on my computer in August of 2015 and I was looking online for how to get back to Windows 7 (Restore would not work).<br /><br />Classic Shell works beautifully with Windows 10 that updated on my 2007 HP Pavilion tower/desktop  and I could not restore back to Windows 7 (yes, I tried everything). I know, 2007 is technically &quot;old&quot;, but I've done my own upgrades (more RAM, new hard drive, etc) over the years and this PC is working great, especially with Classic Shell!<br /><br />I'm not a &quot;gamer&quot; or anything like that. I do mostly Microsoft Office documents and machine embroidery digitizing, in addition to email/Internet, so this PC is fine for me (I have a &quot;back-up&quot; two year old AIO Vizio with Windows 8.1 if/when this HP bites the dust).<br /><br />Two days after Windows 10 updated I tried to restore Windows 7; Windows 10 said that the Windows.old file had been deleted...NO, it had not been. It was right where it should be (I've since  renamed the file so Windows 10 wouldn't do the automatic deletion 30 days later).<br /><br />...the other PCs/laptops in my household are still on Windows 7 &amp; 8.1...I did not allow them to go to Windows 10.<br /><br />Anyway, had it not been for Classic Shell, I surely would have lost my mind being stuck with Windows 10 on my primary PC. But thankfully, Classic Shell lets me see my old Windows Start Menu, etc. so I didn't have a complete mental meltdown. I continue to try to &quot;like&quot; Windows 10 but without Classic Shell, it just isn't going to happen.</div>

					<br clear="all" /><br />

						<table width="100%" cellspacing="0">
						<tr valign="middle">
							<td class="gensmall" align="right">
							
							</td>
						</tr>
						</table>
					</td>
				</tr>
				</table>
			</td>
		</tr>

		<tr class="row2">

			<td class="profile"><strong><a href="#wrapheader">Top</a></strong></td>
			<td><div class="gensmall" style="float: left;">&nbsp;<a href="memberliste8bf.html?mode=viewprofile&amp;u=13209"><img src="styles/subsilver2/imageset/en/icon_user_profile.gif" alt="Profile" title="Profile" /></a> &nbsp;</div> <div class="gensmall" style="float: right;"><a href="postinge128.html?mode=quote&amp;f=20&amp;p=26192"><img src="styles/subsilver2/imageset/en/icon_post_quote.gif" alt="Reply with quote" title="Reply with quote" /></a> &nbsp;</div></td>
	
		</tr>

	<tr>
		<td class="spacer" colspan="2" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
	</tr>
	</table>

	<table class="tablebg" width="100%" cellspacing="1">
	<tr class="row1">

			<td align="center" valign="middle">
				<a name="p26385"></a>
				<b class="postauthor">Riza_Xahi</b>
			</td>
			<td width="100%" height="25">
				<table width="100%" cellspacing="0">
				<tr>
				
					<td class="gensmall" width="100%"><div style="float: left;">&nbsp;<b>Post subject:</b> <a href="#p26385">Re: The official THANK YOU thread :-) and user reviews</a></div><div style="float: right;"><a href="viewtopic03f0.html?p=26385&amp;f=20#p26385"><img src="styles/subsilver2/imageset/icon_post_target.gif" width="12" height="9" alt="Post" title="Post" /></a><b>Posted:</b> Thu Apr 28, 2016 9:02 am&nbsp;</div></td>
				</tr>
				</table>
			</td>
		</tr>

		<tr class="row1">

			<td valign="top" class="profile">
				<table cellspacing="4" align="center" width="150">
			
				<tr>
					<td><img src="styles/subsilver2/imageset/en/icon_user_offline.gif" alt="Offline" title="Offline" /></td>
				</tr>
			
				</table>

				<span class="postdetails">
					<br /><b>Joined:</b> Tue Apr 26, 2016 4:42 am<br /><b>Posts:</b> 3
				</span>

			</td>
			<td valign="top">
				<table width="100%" cellspacing="5">
				<tr>
					<td>
					

						<div class="postbody">Thank you very much for your product and work. Now can't imagine Windows 7 without Classic Shell. <img src="../../forum.net.hr/emoticons/emotion-5.html" alt="" /></div>

					<br clear="all" /><br />

						<table width="100%" cellspacing="0">
						<tr valign="middle">
							<td class="gensmall" align="right">
							
							</td>
						</tr>
						</table>
					</td>
				</tr>
				</table>
			</td>
		</tr>

		<tr class="row1">

			<td class="profile"><strong><a href="#wrapheader">Top</a></strong></td>
			<td><div class="gensmall" style="float: left;">&nbsp;<a href="memberlista43b.html?mode=viewprofile&amp;u=13269"><img src="styles/subsilver2/imageset/en/icon_user_profile.gif" alt="Profile" title="Profile" /></a> &nbsp;</div> <div class="gensmall" style="float: right;"><a href="postinge155.html?mode=quote&amp;f=20&amp;p=26385"><img src="styles/subsilver2/imageset/en/icon_post_quote.gif" alt="Reply with quote" title="Reply with quote" /></a> &nbsp;</div></td>
	
		</tr>

	<tr>
		<td class="spacer" colspan="2" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
	</tr>
	</table>

	<table class="tablebg" width="100%" cellspacing="1">
	<tr class="row2">

			<td align="center" valign="middle">
				<a name="p26441"></a>
				<b class="postauthor">xorgon</b>
			</td>
			<td width="100%" height="25">
				<table width="100%" cellspacing="0">
				<tr>
				
					<td class="gensmall" width="100%"><div style="float: left;">&nbsp;<b>Post subject:</b> <a href="#p26441">Re: The official THANK YOU thread :-) and user reviews</a></div><div style="float: right;"><a href="viewtopicfcc6.html?p=26441&amp;f=20#p26441"><img src="styles/subsilver2/imageset/icon_post_target.gif" width="12" height="9" alt="Post" title="Post" /></a><b>Posted:</b> Tue May 03, 2016 7:00 am&nbsp;</div></td>
				</tr>
				</table>
			</td>
		</tr>

		<tr class="row2">

			<td valign="top" class="profile">
				<table cellspacing="4" align="center" width="150">
			
				<tr>
					<td><img src="styles/subsilver2/imageset/en/icon_user_offline.gif" alt="Offline" title="Offline" /></td>
				</tr>
			
				<tr>
					<td><img src="download/filec0d3.png?avatar=13318_1462285762.png" width="90" height="90" alt="User avatar" /></td>
				</tr>
			
				</table>

				<span class="postdetails">
					<br /><b>Joined:</b> Tue May 03, 2016 6:35 am<br /><b>Posts:</b> 1<br /><b>Location:</b> Sofia, Bulgaria
				</span>

			</td>
			<td valign="top">
				<table width="100%" cellspacing="5">
				<tr>
					<td>
					

						<div class="postbody">Hello to everyone here! I just found out about Classic Shell, and it's made by a fellow countryman, no less! <br /><br />I am in awe. Inspired, excited and alive again! Thank you for that!<br /><br />Yasso</div>

					
						<br clear="all" /><br />

						<table class="tablebg" width="100%" cellspacing="1">
						<tr>
							<td class="row3"><b class="genmed">Attachments: </b></td>
						</tr>
						
							<tr>
								<td class="row2">
			<span class="gensmall"><b>File comment:</b> So inspired that I immediately set to work on my own set of of start buttons. Attaching here, not sure this is the right place though. Enjoy!</span><br />
		
			<img src="download/filee03d.png?id=3418" alt="win_10_start_button_yasso2.png" /><br />
			<span class="gensmall">win_10_start_button_yasso2.png [ 5.6 KiB | Viewed 200768 times ]</span>
		

		<br />
	</td>
							</tr>
						
						</table>
					
						<div class="postbody"><br />_________________<br />Light is an exception, darkness is the rule. Seek out the light.</div>
					

						<table width="100%" cellspacing="0">
						<tr valign="middle">
							<td class="gensmall" align="right">
							
							</td>
						</tr>
						</table>
					</td>
				</tr>
				</table>
			</td>
		</tr>

		<tr class="row2">

			<td class="profile"><strong><a href="#wrapheader">Top</a></strong></td>
			<td><div class="gensmall" style="float: left;">&nbsp;<a href="memberlistb0cd.html?mode=viewprofile&amp;u=13318"><img src="styles/subsilver2/imageset/en/icon_user_profile.gif" alt="Profile" title="Profile" /></a> &nbsp;</div> <div class="gensmall" style="float: right;"><a href="posting0c47.html?mode=quote&amp;f=20&amp;p=26441"><img src="styles/subsilver2/imageset/en/icon_post_quote.gif" alt="Reply with quote" title="Reply with quote" /></a> &nbsp;</div></td>
	
		</tr>

	<tr>
		<td class="spacer" colspan="2" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
	</tr>
	</table>

	<table class="tablebg" width="100%" cellspacing="1">
	<tr class="row1">

			<td align="center" valign="middle">
				<a name="p26443"></a>
				<b class="postauthor">Jcee</b>
			</td>
			<td width="100%" height="25">
				<table width="100%" cellspacing="0">
				<tr>
				
					<td class="gensmall" width="100%"><div style="float: left;">&nbsp;<b>Post subject:</b> <a href="#p26443">Re: The official THANK YOU thread :-) and user reviews</a></div><div style="float: right;"><a href="viewtopicc439.html?p=26443&amp;f=20#p26443"><img src="styles/subsilver2/imageset/icon_post_target.gif" width="12" height="9" alt="Post" title="Post" /></a><b>Posted:</b> Tue May 03, 2016 10:29 am&nbsp;</div></td>
				</tr>
				</table>
			</td>
		</tr>

		<tr class="row1">

			<td valign="top" class="profile">
				<table cellspacing="4" align="center" width="150">
			
				<tr>
					<td><img src="styles/subsilver2/imageset/en/icon_user_offline.gif" alt="Offline" title="Offline" /></td>
				</tr>
			
				<tr>
					<td><img src="download/file18da.jpg?avatar=62_1366838364.jpg" width="73" height="89" alt="User avatar" /></td>
				</tr>
			
				</table>

				<span class="postdetails">
					<br /><b>Joined:</b> Sun Jan 06, 2013 1:44 pm<br /><b>Posts:</b> 1939
				</span>

			</td>
			<td valign="top">
				<table width="100%" cellspacing="5">
				<tr>
					<td>
					

						<div class="postbody">The best place for start buttons would be here: <a href="viewforuma213.html?f=18" class="postlink">http://www.classicshell.net/forum/viewforum.php?f=18</a></div>

					<br clear="all" /><br />

						<table width="100%" cellspacing="0">
						<tr valign="middle">
							<td class="gensmall" align="right">
							
							</td>
						</tr>
						</table>
					</td>
				</tr>
				</table>
			</td>
		</tr>

		<tr class="row1">

			<td class="profile"><strong><a href="#wrapheader">Top</a></strong></td>
			<td><div class="gensmall" style="float: left;">&nbsp;<a href="memberlist6caa.html?mode=viewprofile&amp;u=62"><img src="styles/subsilver2/imageset/en/icon_user_profile.gif" alt="Profile" title="Profile" /></a> &nbsp;</div> <div class="gensmall" style="float: right;"><a href="posting632e.html?mode=quote&amp;f=20&amp;p=26443"><img src="styles/subsilver2/imageset/en/icon_post_quote.gif" alt="Reply with quote" title="Reply with quote" /></a> &nbsp;</div></td>
	
		</tr>

	<tr>
		<td class="spacer" colspan="2" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
	</tr>
	</table>

	<table class="tablebg" width="100%" cellspacing="1">
	<tr class="row2">

			<td align="center" valign="middle">
				<a name="p26608"></a>
				<b class="postauthor">darkwarrior92</b>
			</td>
			<td width="100%" height="25">
				<table width="100%" cellspacing="0">
				<tr>
				
					<td class="gensmall" width="100%"><div style="float: left;">&nbsp;<b>Post subject:</b> <a href="#p26608">Re: The official THANK YOU thread :-) and user reviews</a></div><div style="float: right;"><a href="viewtopic029d.html?p=26608&amp;f=20#p26608"><img src="styles/subsilver2/imageset/icon_post_target.gif" width="12" height="9" alt="Post" title="Post" /></a><b>Posted:</b> Mon May 16, 2016 7:39 am&nbsp;</div></td>
				</tr>
				</table>
			</td>
		</tr>

		<tr class="row2">

			<td valign="top" class="profile">
				<table cellspacing="4" align="center" width="150">
			
				<tr>
					<td><img src="styles/subsilver2/imageset/en/icon_user_offline.gif" alt="Offline" title="Offline" /></td>
				</tr>
			
				</table>

				<span class="postdetails">
					<br /><b>Joined:</b> Mon May 09, 2016 5:35 pm<br /><b>Posts:</b> 3
				</span>

			</td>
			<td valign="top">
				<table width="100%" cellspacing="5">
				<tr>
					<td>
					

						<div class="postbody">Classic Shell is the best thing ever happened to Windows 8, 8.1 and 10 ! Thank you so much !!! <img src="images/smilies/icon_e_smile.gif" alt=":)" title="Smile" /></div>

					<br clear="all" /><br />

						<table width="100%" cellspacing="0">
						<tr valign="middle">
							<td class="gensmall" align="right">
							
							</td>
						</tr>
						</table>
					</td>
				</tr>
				</table>
			</td>
		</tr>

		<tr class="row2">

			<td class="profile"><strong><a href="#wrapheader">Top</a></strong></td>
			<td><div class="gensmall" style="float: left;">&nbsp;<a href="memberlist3016.html?mode=viewprofile&amp;u=13372"><img src="styles/subsilver2/imageset/en/icon_user_profile.gif" alt="Profile" title="Profile" /></a> &nbsp;</div> <div class="gensmall" style="float: right;"><a href="posting3a79.html?mode=quote&amp;f=20&amp;p=26608"><img src="styles/subsilver2/imageset/en/icon_post_quote.gif" alt="Reply with quote" title="Reply with quote" /></a> &nbsp;</div></td>
	
		</tr>

	<tr>
		<td class="spacer" colspan="2" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
	</tr>
	</table>

	<table class="tablebg" width="100%" cellspacing="1">
	<tr class="row1">

			<td align="center" valign="middle">
				<a name="p26943"></a>
				<b class="postauthor">XaDos</b>
			</td>
			<td width="100%" height="25">
				<table width="100%" cellspacing="0">
				<tr>
				
					<td class="gensmall" width="100%"><div style="float: left;">&nbsp;<b>Post subject:</b> <a href="#p26943">Re: The official THANK YOU thread :-) and user reviews</a></div><div style="float: right;"><a href="viewtopic8938.html?p=26943&amp;f=20#p26943"><img src="styles/subsilver2/imageset/icon_post_target.gif" width="12" height="9" alt="Post" title="Post" /></a><b>Posted:</b> Tue May 31, 2016 8:42 pm&nbsp;</div></td>
				</tr>
				</table>
			</td>
		</tr>

		<tr class="row1">

			<td valign="top" class="profile">
				<table cellspacing="4" align="center" width="150">
			
				<tr>
					<td><img src="styles/subsilver2/imageset/en/icon_user_offline.gif" alt="Offline" title="Offline" /></td>
				</tr>
			
				</table>

				<span class="postdetails">
					<br /><b>Joined:</b> Tue May 31, 2016 8:34 pm<br /><b>Posts:</b> 1
				</span>

			</td>
			<td valign="top">
				<table width="100%" cellspacing="5">
				<tr>
					<td>
					

						<div class="postbody">Thanks for existing, Classic Shell. You gave us the little personalization Windows took away, and improved it by ten.</div>

					
						<br clear="all" /><br />

						<table class="tablebg" width="100%" cellspacing="1">
						<tr>
							<td class="row3"><b class="genmed">Attachments: </b></td>
						</tr>
						
							<tr>
								<td class="row2">
			<img src="download/filec7e0.png?id=3520" alt="Differences.png" /><br />
			<span class="gensmall">Differences.png [ 50.97 KiB | Viewed 197486 times ]</span>
		

		<br />
	</td>
							</tr>
						
						</table>
					

						<table width="100%" cellspacing="0">
						<tr valign="middle">
							<td class="gensmall" align="right">
							
							</td>
						</tr>
						</table>
					</td>
				</tr>
				</table>
			</td>
		</tr>

		<tr class="row1">

			<td class="profile"><strong><a href="#wrapheader">Top</a></strong></td>
			<td><div class="gensmall" style="float: left;">&nbsp;<a href="memberlistd3ec.html?mode=viewprofile&amp;u=13666"><img src="styles/subsilver2/imageset/en/icon_user_profile.gif" alt="Profile" title="Profile" /></a> &nbsp;</div> <div class="gensmall" style="float: right;"><a href="posting52ca.html?mode=quote&amp;f=20&amp;p=26943"><img src="styles/subsilver2/imageset/en/icon_post_quote.gif" alt="Reply with quote" title="Reply with quote" /></a> &nbsp;</div></td>
	
		</tr>

	<tr>
		<td class="spacer" colspan="2" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
	</tr>
	</table>

	<table class="tablebg" width="100%" cellspacing="1">
	<tr class="row2">

			<td align="center" valign="middle">
				<a name="p26987"></a>
				<b class="postauthor">pimp06</b>
			</td>
			<td width="100%" height="25">
				<table width="100%" cellspacing="0">
				<tr>
				
					<td class="gensmall" width="100%"><div style="float: left;">&nbsp;<b>Post subject:</b> <a href="#p26987">Re: The official THANK YOU thread :-) and user reviews</a></div><div style="float: right;"><a href="viewtopicec9d-2.html?p=26987&amp;f=20#p26987"><img src="styles/subsilver2/imageset/icon_post_target.gif" width="12" height="9" alt="Post" title="Post" /></a><b>Posted:</b> Fri Jun 03, 2016 6:43 am&nbsp;</div></td>
				</tr>
				</table>
			</td>
		</tr>

		<tr class="row2">

			<td valign="top" class="profile">
				<table cellspacing="4" align="center" width="150">
			
				<tr>
					<td><img src="styles/subsilver2/imageset/en/icon_user_offline.gif" alt="Offline" title="Offline" /></td>
				</tr>
			
				</table>

				<span class="postdetails">
					<br /><b>Joined:</b> Wed Jun 01, 2016 8:57 pm<br /><b>Posts:</b> 1<br /><b>Location:</b> Atlanta
				</span>

			</td>
			<td valign="top">
				<table width="100%" cellspacing="5">
				<tr>
					<td>
					

						<div class="postbody">cool</div>

					<br clear="all" /><br />

						<table width="100%" cellspacing="0">
						<tr valign="middle">
							<td class="gensmall" align="right">
							
							</td>
						</tr>
						</table>
					</td>
				</tr>
				</table>
			</td>
		</tr>

		<tr class="row2">

			<td class="profile"><strong><a href="#wrapheader">Top</a></strong></td>
			<td><div class="gensmall" style="float: left;">&nbsp;<a href="memberlistec55.html?mode=viewprofile&amp;u=13682"><img src="styles/subsilver2/imageset/en/icon_user_profile.gif" alt="Profile" title="Profile" /></a> &nbsp;</div> <div class="gensmall" style="float: right;"><a href="posting4013.html?mode=quote&amp;f=20&amp;p=26987"><img src="styles/subsilver2/imageset/en/icon_post_quote.gif" alt="Reply with quote" title="Reply with quote" /></a> &nbsp;</div></td>
	
		</tr>

	<tr>
		<td class="spacer" colspan="2" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
	</tr>
	</table>

	<table class="tablebg" width="100%" cellspacing="1">
	<tr class="row1">

			<td align="center" valign="middle">
				<a name="p27000"></a>
				<b class="postauthor">Splitwirez</b>
			</td>
			<td width="100%" height="25">
				<table width="100%" cellspacing="0">
				<tr>
				
					<td class="gensmall" width="100%"><div style="float: left;">&nbsp;<b>Post subject:</b> <a href="#p27000">Re: The official THANK YOU thread :-) and user reviews</a></div><div style="float: right;"><a href="viewtopic4a9e.html?p=27000&amp;f=20#p27000"><img src="styles/subsilver2/imageset/icon_post_target.gif" width="12" height="9" alt="Post" title="Post" /></a><b>Posted:</b> Sat Jun 04, 2016 1:06 pm&nbsp;</div></td>
				</tr>
				</table>
			</td>
		</tr>

		<tr class="row1">

			<td valign="top" class="profile">
				<table cellspacing="4" align="center" width="150">
			
				<tr>
					<td><img src="styles/subsilver2/imageset/en/icon_user_offline.gif" alt="Offline" title="Offline" /></td>
				</tr>
			
				<tr>
					<td><img src="download/file7bf9.png?avatar=9454_1515258130.png" width="90" height="90" alt="User avatar" /></td>
				</tr>
			
				</table>

				<span class="postdetails">
					<br /><b>Joined:</b> Sun Feb 22, 2015 3:09 pm<br /><b>Posts:</b> 677
				</span>

			</td>
			<td valign="top">
				<table width="100%" cellspacing="5">
				<tr>
					<td>
					

						<div class="postbody">Why is this thread permanently marked as unread?</div>

					
						<div class="postbody"><br />_________________<br />TILES WOOOOOO</div>
					<br clear="all" /><br />

						<table width="100%" cellspacing="0">
						<tr valign="middle">
							<td class="gensmall" align="right">
							
							</td>
						</tr>
						</table>
					</td>
				</tr>
				</table>
			</td>
		</tr>

		<tr class="row1">

			<td class="profile"><strong><a href="#wrapheader">Top</a></strong></td>
			<td><div class="gensmall" style="float: left;">&nbsp;<a href="memberlist3690.html?mode=viewprofile&amp;u=9454"><img src="styles/subsilver2/imageset/en/icon_user_profile.gif" alt="Profile" title="Profile" /></a> &nbsp;</div> <div class="gensmall" style="float: right;"><a href="posting9de8.html?mode=quote&amp;f=20&amp;p=27000"><img src="styles/subsilver2/imageset/en/icon_post_quote.gif" alt="Reply with quote" title="Reply with quote" /></a> &nbsp;</div></td>
	
		</tr>

	<tr>
		<td class="spacer" colspan="2" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
	</tr>
	</table>

	<table class="tablebg" width="100%" cellspacing="1">
	<tr class="row2">

			<td align="center" valign="middle">
				<a name="p27006"></a>
				<b class="postauthor">Jcee</b>
			</td>
			<td width="100%" height="25">
				<table width="100%" cellspacing="0">
				<tr>
				
					<td class="gensmall" width="100%"><div style="float: left;">&nbsp;<b>Post subject:</b> <a href="#p27006">Re: The official THANK YOU thread :-) and user reviews</a></div><div style="float: right;"><a href="viewtopic29eb.html?p=27006&amp;f=20#p27006"><img src="styles/subsilver2/imageset/icon_post_target.gif" width="12" height="9" alt="Post" title="Post" /></a><b>Posted:</b> Sun Jun 05, 2016 3:05 am&nbsp;</div></td>
				</tr>
				</table>
			</td>
		</tr>

		<tr class="row2">

			<td valign="top" class="profile">
				<table cellspacing="4" align="center" width="150">
			
				<tr>
					<td><img src="styles/subsilver2/imageset/en/icon_user_offline.gif" alt="Offline" title="Offline" /></td>
				</tr>
			
				<tr>
					<td><img src="download/file18da.jpg?avatar=62_1366838364.jpg" width="73" height="89" alt="User avatar" /></td>
				</tr>
			
				</table>

				<span class="postdetails">
					<br /><b>Joined:</b> Sun Jan 06, 2013 1:44 pm<br /><b>Posts:</b> 1939
				</span>

			</td>
			<td valign="top">
				<table width="100%" cellspacing="5">
				<tr>
					<td>
					

						<div class="postbody">Its not always unread, it just very frequently has new post.. <img src="images/smilies/icon_e_smile.gif" alt=":)" title="Smile" /></div>

					<br clear="all" /><br />

						<table width="100%" cellspacing="0">
						<tr valign="middle">
							<td class="gensmall" align="right">
							
							</td>
						</tr>
						</table>
					</td>
				</tr>
				</table>
			</td>
		</tr>

		<tr class="row2">

			<td class="profile"><strong><a href="#wrapheader">Top</a></strong></td>
			<td><div class="gensmall" style="float: left;">&nbsp;<a href="memberlist6caa.html?mode=viewprofile&amp;u=62"><img src="styles/subsilver2/imageset/en/icon_user_profile.gif" alt="Profile" title="Profile" /></a> &nbsp;</div> <div class="gensmall" style="float: right;"><a href="postingf0eb.html?mode=quote&amp;f=20&amp;p=27006"><img src="styles/subsilver2/imageset/en/icon_post_quote.gif" alt="Reply with quote" title="Reply with quote" /></a> &nbsp;</div></td>
	
		</tr>

	<tr>
		<td class="spacer" colspan="2" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
	</tr>
	</table>

	<table class="tablebg" width="100%" cellspacing="1">
	<tr class="row1">

			<td align="center" valign="middle">
				<a name="p27009"></a>
				<b class="postauthor">Splitwirez</b>
			</td>
			<td width="100%" height="25">
				<table width="100%" cellspacing="0">
				<tr>
				
					<td class="gensmall" width="100%"><div style="float: left;">&nbsp;<b>Post subject:</b> <a href="#p27009">Re: The official THANK YOU thread :-) and user reviews</a></div><div style="float: right;"><a href="viewtopic5072.html?p=27009&amp;f=20#p27009"><img src="styles/subsilver2/imageset/icon_post_target.gif" width="12" height="9" alt="Post" title="Post" /></a><b>Posted:</b> Sun Jun 05, 2016 9:53 am&nbsp;</div></td>
				</tr>
				</table>
			</td>
		</tr>

		<tr class="row1">

			<td valign="top" class="profile">
				<table cellspacing="4" align="center" width="150">
			
				<tr>
					<td><img src="styles/subsilver2/imageset/en/icon_user_offline.gif" alt="Offline" title="Offline" /></td>
				</tr>
			
				<tr>
					<td><img src="download/file7bf9.png?avatar=9454_1515258130.png" width="90" height="90" alt="User avatar" /></td>
				</tr>
			
				</table>

				<span class="postdetails">
					<br /><b>Joined:</b> Sun Feb 22, 2015 3:09 pm<br /><b>Posts:</b> 677
				</span>

			</td>
			<td valign="top">
				<table width="100%" cellspacing="5">
				<tr>
					<td>
					

						<div class="postbody"><div class="quotetitle">Jcee wrote:</div><div class="quotecontent">Its not always unread, it just very frequently has new post.. <img src="images/smilies/icon_e_smile.gif" alt=":)" title="Smile" /></div><br /><br />Well I mean the same post remained &quot;unread&quot; for a while after I'd read it. Anywaves, seems our posting on the thread has resolved the issue .__.</div>

					
						<div class="postbody"><br />_________________<br />TILES WOOOOOO</div>
					<br clear="all" /><br />

						<table width="100%" cellspacing="0">
						<tr valign="middle">
							<td class="gensmall" align="right">
							
							</td>
						</tr>
						</table>
					</td>
				</tr>
				</table>
			</td>
		</tr>

		<tr class="row1">

			<td class="profile"><strong><a href="#wrapheader">Top</a></strong></td>
			<td><div class="gensmall" style="float: left;">&nbsp;<a href="memberlist3690.html?mode=viewprofile&amp;u=9454"><img src="styles/subsilver2/imageset/en/icon_user_profile.gif" alt="Profile" title="Profile" /></a> &nbsp;</div> <div class="gensmall" style="float: right;"><a href="postinga520.html?mode=quote&amp;f=20&amp;p=27009"><img src="styles/subsilver2/imageset/en/icon_post_quote.gif" alt="Reply with quote" title="Reply with quote" /></a> &nbsp;</div></td>
	
		</tr>

	<tr>
		<td class="spacer" colspan="2" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
	</tr>
	</table>

	<table class="tablebg" width="100%" cellspacing="1">
	<tr class="row2">

			<td align="center" valign="middle">
				<a name="p27182"></a>
				<b class="postauthor">Sonoff</b>
			</td>
			<td width="100%" height="25">
				<table width="100%" cellspacing="0">
				<tr>
				
					<td class="gensmall" width="100%"><div style="float: left;">&nbsp;<b>Post subject:</b> <a href="#p27182">Re: The official THANK YOU thread :-) and user reviews</a></div><div style="float: right;"><a href="viewtopice87a.html?p=27182&amp;f=20#p27182"><img src="styles/subsilver2/imageset/icon_post_target.gif" width="12" height="9" alt="Post" title="Post" /></a><b>Posted:</b> Wed Jun 15, 2016 10:15 am&nbsp;</div></td>
				</tr>
				</table>
			</td>
		</tr>

		<tr class="row2">

			<td valign="top" class="profile">
				<table cellspacing="4" align="center" width="150">
			
				<tr>
					<td><img src="styles/subsilver2/imageset/en/icon_user_offline.gif" alt="Offline" title="Offline" /></td>
				</tr>
			
				</table>

				<span class="postdetails">
					<br /><b>Joined:</b> Wed Jun 15, 2016 10:12 am<br /><b>Posts:</b> 4
				</span>

			</td>
			<td valign="top">
				<table width="100%" cellspacing="5">
				<tr>
					<td>
					

						<div class="postbody">Thanks to all of you for great work</div>

					<br clear="all" /><br />

						<table width="100%" cellspacing="0">
						<tr valign="middle">
							<td class="gensmall" align="right">
							
							</td>
						</tr>
						</table>
					</td>
				</tr>
				</table>
			</td>
		</tr>

		<tr class="row2">

			<td class="profile"><strong><a href="#wrapheader">Top</a></strong></td>
			<td><div class="gensmall" style="float: left;">&nbsp;<a href="memberlist07a4.html?mode=viewprofile&amp;u=13837"><img src="styles/subsilver2/imageset/en/icon_user_profile.gif" alt="Profile" title="Profile" /></a> &nbsp;</div> <div class="gensmall" style="float: right;"><a href="posting0041.html?mode=quote&amp;f=20&amp;p=27182"><img src="styles/subsilver2/imageset/en/icon_post_quote.gif" alt="Reply with quote" title="Reply with quote" /></a> &nbsp;</div></td>
	
		</tr>

	<tr>
		<td class="spacer" colspan="2" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
	</tr>
	</table>

	<table class="tablebg" width="100%" cellspacing="1">
	<tr class="row1">

			<td align="center" valign="middle">
				<a name="p27214"></a>
				<b class="postauthor">VinsLong</b>
			</td>
			<td width="100%" height="25">
				<table width="100%" cellspacing="0">
				<tr>
				
					<td class="gensmall" width="100%"><div style="float: left;">&nbsp;<b>Post subject:</b> <a href="#p27214">Re: The official THANK YOU thread :-) and user reviews</a></div><div style="float: right;"><a href="viewtopic6ee6.html?p=27214&amp;f=20#p27214"><img src="styles/subsilver2/imageset/icon_post_target.gif" width="12" height="9" alt="Post" title="Post" /></a><b>Posted:</b> Thu Jun 16, 2016 12:06 pm&nbsp;</div></td>
				</tr>
				</table>
			</td>
		</tr>

		<tr class="row1">

			<td valign="top" class="profile">
				<table cellspacing="4" align="center" width="150">
			
				<tr>
					<td><img src="styles/subsilver2/imageset/en/icon_user_offline.gif" alt="Offline" title="Offline" /></td>
				</tr>
			
				</table>

				<span class="postdetails">
					<br /><b>Joined:</b> Thu Jun 16, 2016 11:56 am<br /><b>Posts:</b> 1
				</span>

			</td>
			<td valign="top">
				<table width="100%" cellspacing="5">
				<tr>
					<td>
					

						<div class="postbody">Thank you guys for your work, u r doing well!</div>

					
						<div class="postbody"><br />_________________<br />Easiest booking of <a href="http://discountconcertticket.com/" class="postlink">concert tickets</a></div>
					<br clear="all" /><br />

						<table width="100%" cellspacing="0">
						<tr valign="middle">
							<td class="gensmall" align="right">
							
							</td>
						</tr>
						</table>
					</td>
				</tr>
				</table>
			</td>
		</tr>

		<tr class="row1">

			<td class="profile"><strong><a href="#wrapheader">Top</a></strong></td>
			<td><div class="gensmall" style="float: left;">&nbsp;<a href="memberlist3965.html?mode=viewprofile&amp;u=13853"><img src="styles/subsilver2/imageset/en/icon_user_profile.gif" alt="Profile" title="Profile" /></a> &nbsp;</div> <div class="gensmall" style="float: right;"><a href="posting0dbc.html?mode=quote&amp;f=20&amp;p=27214"><img src="styles/subsilver2/imageset/en/icon_post_quote.gif" alt="Reply with quote" title="Reply with quote" /></a> &nbsp;</div></td>
	
		</tr>

	<tr>
		<td class="spacer" colspan="2" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
	</tr>
	</table>

	<table class="tablebg" width="100%" cellspacing="1">
	<tr class="row2">

			<td align="center" valign="middle">
				<a name="p27238"></a>
				<b class="postauthor">bjm</b>
			</td>
			<td width="100%" height="25">
				<table width="100%" cellspacing="0">
				<tr>
				
					<td class="gensmall" width="100%"><div style="float: left;">&nbsp;<b>Post subject:</b> <a href="#p27238">Re: The official THANK YOU thread :-) and user reviews</a></div><div style="float: right;"><a href="viewtopicbee5.html?p=27238&amp;f=20#p27238"><img src="styles/subsilver2/imageset/icon_post_target.gif" width="12" height="9" alt="Post" title="Post" /></a><b>Posted:</b> Sat Jun 18, 2016 9:50 pm&nbsp;</div></td>
				</tr>
				</table>
			</td>
		</tr>

		<tr class="row2">

			<td valign="top" class="profile">
				<table cellspacing="4" align="center" width="150">
			
				<tr>
					<td><img src="styles/subsilver2/imageset/en/icon_user_offline.gif" alt="Offline" title="Offline" /></td>
				</tr>
			
				</table>

				<span class="postdetails">
					<br /><b>Joined:</b> Sat Jun 18, 2016 9:40 pm<br /><b>Posts:</b> 1
				</span>

			</td>
			<td valign="top">
				<table width="100%" cellspacing="5">
				<tr>
					<td>
					

						<div class="postbody">ClassicShell 4.2.5 went wonky with W10 Upgrade. Tried to install 4.2.5c with message, need to Uninstall.<br />Well, uninstall was not cooperating and after much head scratching. I found CSUtility. <br />Amazing what having the right tool will do...... <img src="images/smilies/icon_e_wink.gif" alt=";-)" title="Wink" /><br />Thank you!<br /><br />Edit: just found FAQ's &gt; <br /><strong>What is the right way to uninstall Classic Shell?</strong><br />To uninstall Classic Shell follow these steps:<br /><ol style="list-style-type: decimal"><li><strong>Stop the start menu if it is installed (right-click on the start button and select “Exit”)</strong></li></ol><br />My bad re <strong>&quot;Exit&quot;</strong>.....<br />LUV to CS</div>

					<br clear="all" /><br />

						<table width="100%" cellspacing="0">
						<tr valign="middle">
							<td class="gensmall" align="right">
							
							</td>
						</tr>
						</table>
					</td>
				</tr>
				</table>
			</td>
		</tr>

		<tr class="row2">

			<td class="profile"><strong><a href="#wrapheader">Top</a></strong></td>
			<td><div class="gensmall" style="float: left;">&nbsp;<a href="memberlista88c.html?mode=viewprofile&amp;u=13872"><img src="styles/subsilver2/imageset/en/icon_user_profile.gif" alt="Profile" title="Profile" /></a> &nbsp;</div> <div class="gensmall" style="float: right;"><a href="postingcb15.html?mode=quote&amp;f=20&amp;p=27238"><img src="styles/subsilver2/imageset/en/icon_post_quote.gif" alt="Reply with quote" title="Reply with quote" /></a> &nbsp;</div></td>
	
		</tr>

	<tr>
		<td class="spacer" colspan="2" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
	</tr>
	</table>

	<table class="tablebg" width="100%" cellspacing="1">
	<tr class="row1">

			<td align="center" valign="middle">
				<a name="p27389"></a>
				<b class="postauthor">tjarieloker</b>
			</td>
			<td width="100%" height="25">
				<table width="100%" cellspacing="0">
				<tr>
				
					<td class="gensmall" width="100%"><div style="float: left;">&nbsp;<b>Post subject:</b> <a href="#p27389">Re: The official THANK YOU thread :-) and user reviews</a></div><div style="float: right;"><a href="viewtopic5bd9.html?p=27389&amp;f=20#p27389"><img src="styles/subsilver2/imageset/icon_post_target.gif" width="12" height="9" alt="Post" title="Post" /></a><b>Posted:</b> Fri Jul 01, 2016 11:52 pm&nbsp;</div></td>
				</tr>
				</table>
			</td>
		</tr>

		<tr class="row1">

			<td valign="top" class="profile">
				<table cellspacing="4" align="center" width="150">
			
				<tr>
					<td><img src="styles/subsilver2/imageset/en/icon_user_offline.gif" alt="Offline" title="Offline" /></td>
				</tr>
			
				</table>

				<span class="postdetails">
					<br /><b>Joined:</b> Fri Jul 01, 2016 11:41 pm<br /><b>Posts:</b> 1<br /><b>Location:</b> Indonesia
				</span>

			</td>
			<td valign="top">
				<table width="100%" cellspacing="5">
				<tr>
					<td>
					

						<div class="postbody">wow, many people review CS, i must try first before give word 'thanks'</div>

					<br clear="all" /><br />

						<table width="100%" cellspacing="0">
						<tr valign="middle">
							<td class="gensmall" align="right">
							
							</td>
						</tr>
						</table>
					</td>
				</tr>
				</table>
			</td>
		</tr>

		<tr class="row1">

			<td class="profile"><strong><a href="#wrapheader">Top</a></strong></td>
			<td><div class="gensmall" style="float: left;">&nbsp;<a href="memberlist28bd.html?mode=viewprofile&amp;u=14030"><img src="styles/subsilver2/imageset/en/icon_user_profile.gif" alt="Profile" title="Profile" /></a> &nbsp;</div> <div class="gensmall" style="float: right;"><a href="postingb11c-2.html?mode=quote&amp;f=20&amp;p=27389"><img src="styles/subsilver2/imageset/en/icon_post_quote.gif" alt="Reply with quote" title="Reply with quote" /></a> &nbsp;</div></td>
	
		</tr>

	<tr>
		<td class="spacer" colspan="2" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
	</tr>
	</table>

	<table class="tablebg" width="100%" cellspacing="1">
	<tr class="row2">

			<td align="center" valign="middle">
				<a name="p27748"></a>
				<b class="postauthor">sjain</b>
			</td>
			<td width="100%" height="25">
				<table width="100%" cellspacing="0">
				<tr>
				
					<td class="gensmall" width="100%"><div style="float: left;">&nbsp;<b>Post subject:</b> <a href="#p27748">Re: The official THANK YOU thread :-) and user reviews</a></div><div style="float: right;"><a href="viewtopic8ae9.html?p=27748&amp;f=20#p27748"><img src="styles/subsilver2/imageset/icon_post_target.gif" width="12" height="9" alt="Post" title="Post" /></a><b>Posted:</b> Fri Jul 22, 2016 11:39 am&nbsp;</div></td>
				</tr>
				</table>
			</td>
		</tr>

		<tr class="row2">

			<td valign="top" class="profile">
				<table cellspacing="4" align="center" width="150">
			
				<tr>
					<td><img src="styles/subsilver2/imageset/en/icon_user_offline.gif" alt="Offline" title="Offline" /></td>
				</tr>
			
				</table>

				<span class="postdetails">
					<br /><b>Joined:</b> Mon Jun 13, 2016 12:04 pm<br /><b>Posts:</b> 5
				</span>

			</td>
			<td valign="top">
				<table width="100%" cellspacing="5">
				<tr>
					<td>
					

						<div class="postbody">saviour of windows 10 i love you guys</div>

					<br clear="all" /><br />

						<table width="100%" cellspacing="0">
						<tr valign="middle">
							<td class="gensmall" align="right">
							
							</td>
						</tr>
						</table>
					</td>
				</tr>
				</table>
			</td>
		</tr>

		<tr class="row2">

			<td class="profile"><strong><a href="#wrapheader">Top</a></strong></td>
			<td><div class="gensmall" style="float: left;">&nbsp;<a href="memberlistc2b7.html?mode=viewprofile&amp;u=13810"><img src="styles/subsilver2/imageset/en/icon_user_profile.gif" alt="Profile" title="Profile" /></a> &nbsp;</div> <div class="gensmall" style="float: right;"><a href="posting1ddd.html?mode=quote&amp;f=20&amp;p=27748"><img src="styles/subsilver2/imageset/en/icon_post_quote.gif" alt="Reply with quote" title="Reply with quote" /></a> &nbsp;</div></td>
	
		</tr>

	<tr>
		<td class="spacer" colspan="2" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
	</tr>
	</table>

	<table class="tablebg" width="100%" cellspacing="1">
	<tr class="row1">

			<td align="center" valign="middle">
				<a name="p27765"></a>
				<b class="postauthor">Rainierman</b>
			</td>
			<td width="100%" height="25">
				<table width="100%" cellspacing="0">
				<tr>
				
					<td class="gensmall" width="100%"><div style="float: left;">&nbsp;<b>Post subject:</b> <a href="#p27765">Re: The official THANK YOU thread :-) and user reviews</a></div><div style="float: right;"><a href="viewtopic8379.html?p=27765&amp;f=20#p27765"><img src="styles/subsilver2/imageset/icon_post_target.gif" width="12" height="9" alt="Post" title="Post" /></a><b>Posted:</b> Sat Jul 23, 2016 7:54 pm&nbsp;</div></td>
				</tr>
				</table>
			</td>
		</tr>

		<tr class="row1">

			<td valign="top" class="profile">
				<table cellspacing="4" align="center" width="150">
			
				<tr>
					<td><img src="styles/subsilver2/imageset/en/icon_user_offline.gif" alt="Offline" title="Offline" /></td>
				</tr>
			
				</table>

				<span class="postdetails">
					<br /><b>Joined:</b> Sat Jul 23, 2016 7:47 pm<br /><b>Posts:</b> 1
				</span>

			</td>
			<td valign="top">
				<table width="100%" cellspacing="5">
				<tr>
					<td>
					

						<div class="postbody">;_; THANK YOU FOR FIXING EVERYTHING<br /><br />(caps)<br /><br />Yours truly: A delighted Windows 10 user</div>

					<br clear="all" /><br />

						<table width="100%" cellspacing="0">
						<tr valign="middle">
							<td class="gensmall" align="right">
							
							</td>
						</tr>
						</table>
					</td>
				</tr>
				</table>
			</td>
		</tr>

		<tr class="row1">

			<td class="profile"><strong><a href="#wrapheader">Top</a></strong></td>
			<td><div class="gensmall" style="float: left;">&nbsp;<a href="memberliste62b.html?mode=viewprofile&amp;u=14286"><img src="styles/subsilver2/imageset/en/icon_user_profile.gif" alt="Profile" title="Profile" /></a> &nbsp;</div> <div class="gensmall" style="float: right;"><a href="posting1e8f.php?mode=quote&amp;f=20&amp;p=27765"><img src="styles/subsilver2/imageset/en/icon_post_quote.gif" alt="Reply with quote" title="Reply with quote" /></a> &nbsp;</div></td>
	
		</tr>

	<tr>
		<td class="spacer" colspan="2" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
	</tr>
	</table>

	<table class="tablebg" width="100%" cellspacing="1">
	<tr class="row2">

			<td align="center" valign="middle">
				<a name="p27916"></a>
				<b class="postauthor">whiskey_river</b>
			</td>
			<td width="100%" height="25">
				<table width="100%" cellspacing="0">
				<tr>
				
					<td class="gensmall" width="100%"><div style="float: left;">&nbsp;<b>Post subject:</b> <a href="#p27916">Re: The official THANK YOU thread :-) and user reviews</a></div><div style="float: right;"><a href="viewtopic6cd2.php?p=27916&amp;f=20#p27916"><img src="styles/subsilver2/imageset/icon_post_target.gif" width="12" height="9" alt="Post" title="Post" /></a><b>Posted:</b> Sun Jul 31, 2016 2:55 pm&nbsp;</div></td>
				</tr>
				</table>
			</td>
		</tr>

		<tr class="row2">

			<td valign="top" class="profile">
				<table cellspacing="4" align="center" width="150">
			
				<tr>
					<td><img src="styles/subsilver2/imageset/en/icon_user_offline.gif" alt="Offline" title="Offline" /></td>
				</tr>
			
				</table>

				<span class="postdetails">
					<br /><b>Joined:</b> Sun Jul 31, 2016 12:41 pm<br /><b>Posts:</b> 4
				</span>

			</td>
			<td valign="top">
				<table width="100%" cellspacing="5">
				<tr>
					<td>
					

						<div class="postbody">hey, <strong><span style="color:#993300;">classic-shell</span></strong> … just wanted to say i really appreciate your dedication and insight with creating <strong><span style="color:#993300;"> classic-shell</span></strong>. i have read lots of positive feedback on several different forums. also do  my  part  by spreading the word to others less fortunate. if not for <strong><span style="color:#993300;">classic-shell</span></strong> … i'd still be pulling my hair out with <strong><span style="color:#993300;">microsoft</span></strong>'s funky gimmicks.<br /><br />you guys have truly given hope to many out there who struggle on a daily basis to make sense of changing attitudes 'n landscapes … we commend you for it. veritably, i woulda' given up  on microsoft and switched to mac … had it not been for <strong><span style="color:#993300;">classic-shell</span></strong>. the volunteers in the forum are well-informed <em>(thanks, ivo)</em> and knowledgeable. if i was a programmer … i'd hop onto the bandwagon and help you guys out even more.<br /><br />lots of thanks from me and the undernet.</div>

					
						<br clear="all" /><br />

						<table class="tablebg" width="100%" cellspacing="1">
						<tr>
							<td class="row3"><b class="genmed">Attachments: </b></td>
						</tr>
						
							<tr>
								<td class="row2">
			<span class="gensmall"><b>File comment:</b> current  desktop (with classic shell menu)</span><br />
		
			<img src="download/file276f.png?id=3710" alt="Image1.png" /><br />
			<span class="gensmall">Image1.png [ 315.86 KiB | Viewed 187003 times ]</span>
		

		<br />
	</td>
							</tr>
						
						</table>
					

						<table width="100%" cellspacing="0">
						<tr valign="middle">
							<td class="gensmall" align="right">
							
							</td>
						</tr>
						</table>
					</td>
				</tr>
				</table>
			</td>
		</tr>

		<tr class="row2">

			<td class="profile"><strong><a href="#wrapheader">Top</a></strong></td>
			<td><div class="gensmall" style="float: left;">&nbsp;<a href="memberliste309.html?mode=viewprofile&amp;u=14430"><img src="styles/subsilver2/imageset/en/icon_user_profile.gif" alt="Profile" title="Profile" /></a> &nbsp;</div> <div class="gensmall" style="float: right;"><a href="posting03e4.html?mode=quote&amp;f=20&amp;p=27916"><img src="styles/subsilver2/imageset/en/icon_post_quote.gif" alt="Reply with quote" title="Reply with quote" /></a> &nbsp;</div></td>
	
		</tr>

	<tr>
		<td class="spacer" colspan="2" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
	</tr>
	</table>

	<table class="tablebg" width="100%" cellspacing="1">
	<tr class="row1">

			<td align="center" valign="middle">
				<a name="p28662"></a>
				<b class="postauthor">snehasingh9012</b>
			</td>
			<td width="100%" height="25">
				<table width="100%" cellspacing="0">
				<tr>
				
					<td class="gensmall" width="100%"><div style="float: left;">&nbsp;<b>Post subject:</b> <a href="#p28662">Re: The official THANK YOU thread :-) and user reviews</a></div><div style="float: right;"><a href="viewtopic7403.html?p=28662&amp;f=20#p28662"><img src="styles/subsilver2/imageset/icon_post_target.gif" width="12" height="9" alt="Post" title="Post" /></a><b>Posted:</b> Tue Aug 16, 2016 5:35 am&nbsp;</div></td>
				</tr>
				</table>
			</td>
		</tr>

		<tr class="row1">

			<td valign="top" class="profile">
				<table cellspacing="4" align="center" width="150">
			
				<tr>
					<td><img src="styles/subsilver2/imageset/en/icon_user_offline.gif" alt="Offline" title="Offline" /></td>
				</tr>
			
				<tr>
					<td><img src="download/file3802.png?avatar=14558_1471351809.png" width="90" height="90" alt="User avatar" /></td>
				</tr>
			
				</table>

				<span class="postdetails">
					<br /><b>Joined:</b> Thu Aug 04, 2016 2:38 am<br /><b>Posts:</b> 1<br /><b>Location:</b> pune
				</span>

			</td>
			<td valign="top">
				<table width="100%" cellspacing="5">
				<tr>
					<td>
					

						<div class="postbody">Thank You Classicshell !!!</div>

					
						<div class="postbody"><br />_________________<br />Software Professional</div>
					<br clear="all" /><br />

						<table width="100%" cellspacing="0">
						<tr valign="middle">
							<td class="gensmall" align="right">
							
							</td>
						</tr>
						</table>
					</td>
				</tr>
				</table>
			</td>
		</tr>

		<tr class="row1">

			<td class="profile"><strong><a href="#wrapheader">Top</a></strong></td>
			<td><div class="gensmall" style="float: left;">&nbsp;<a href="memberlistebeb.html?mode=viewprofile&amp;u=14558"><img src="styles/subsilver2/imageset/en/icon_user_profile.gif" alt="Profile" title="Profile" /></a> &nbsp;</div> <div class="gensmall" style="float: right;"><a href="posting7b36.html?mode=quote&amp;f=20&amp;p=28662"><img src="styles/subsilver2/imageset/en/icon_post_quote.gif" alt="Reply with quote" title="Reply with quote" /></a> &nbsp;</div></td>
	
		</tr>

	<tr>
		<td class="spacer" colspan="2" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
	</tr>
	</table>

	<table class="tablebg" width="100%" cellspacing="1">
	<tr class="row2">

			<td align="center" valign="middle">
				<a name="p28719"></a>
				<b class="postauthor">hailinh</b>
			</td>
			<td width="100%" height="25">
				<table width="100%" cellspacing="0">
				<tr>
				
					<td class="gensmall" width="100%"><div style="float: left;">&nbsp;<b>Post subject:</b> <a href="#p28719">Re: The official THANK YOU thread :-) and user reviews</a></div><div style="float: right;"><a href="viewtopic3254.html?p=28719&amp;f=20#p28719"><img src="styles/subsilver2/imageset/icon_post_target.gif" width="12" height="9" alt="Post" title="Post" /></a><b>Posted:</b> Thu Aug 18, 2016 2:41 am&nbsp;</div></td>
				</tr>
				</table>
			</td>
		</tr>

		<tr class="row2">

			<td valign="top" class="profile">
				<table cellspacing="4" align="center" width="150">
			
				<tr>
					<td><img src="styles/subsilver2/imageset/en/icon_user_offline.gif" alt="Offline" title="Offline" /></td>
				</tr>
			
				</table>

				<span class="postdetails">
					<br /><b>Joined:</b> Thu Aug 18, 2016 2:37 am<br /><b>Posts:</b> 1
				</span>

			</td>
			<td valign="top">
				<table width="100%" cellspacing="5">
				<tr>
					<td>
					

						<div class="postbody">work which is surely deserving of a reasonable shareware purchase contribution by all its users, including myself. Well done!</div>

					
						<div class="postbody"><br />_________________<br /><img src="images/smilies/icon_e_ugeek.gif" alt=":ugeek:" title="Uber Geek" /> <img src="images/smilies/icon_e_ugeek.gif" alt=":ugeek:" title="Uber Geek" /> <img src="images/smilies/icon_e_ugeek.gif" alt=":ugeek:" title="Uber Geek" /> <img src="images/smilies/icon_e_ugeek.gif" alt=":ugeek:" title="Uber Geek" /> <img src="images/smilies/icon_e_ugeek.gif" alt=":ugeek:" title="Uber Geek" /></div>
					<br clear="all" /><br />

						<table width="100%" cellspacing="0">
						<tr valign="middle">
							<td class="gensmall" align="right">
							
							</td>
						</tr>
						</table>
					</td>
				</tr>
				</table>
			</td>
		</tr>

		<tr class="row2">

			<td class="profile"><strong><a href="#wrapheader">Top</a></strong></td>
			<td><div class="gensmall" style="float: left;">&nbsp;<a href="memberlist22d5.html?mode=viewprofile&amp;u=14798"><img src="styles/subsilver2/imageset/en/icon_user_profile.gif" alt="Profile" title="Profile" /></a> &nbsp;</div> <div class="gensmall" style="float: right;"><a href="posting2979.html?mode=quote&amp;f=20&amp;p=28719"><img src="styles/subsilver2/imageset/en/icon_post_quote.gif" alt="Reply with quote" title="Reply with quote" /></a> &nbsp;</div></td>
	
		</tr>

	<tr>
		<td class="spacer" colspan="2" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
	</tr>
	</table>

	<table class="tablebg" width="100%" cellspacing="1">
	<tr class="row1">

			<td align="center" valign="middle">
				<a name="p28877"></a>
				<b class="postauthor">NewYoga</b>
			</td>
			<td width="100%" height="25">
				<table width="100%" cellspacing="0">
				<tr>
				
					<td class="gensmall" width="100%"><div style="float: left;">&nbsp;<b>Post subject:</b> <a href="#p28877">Re: The official THANK YOU thread :-) and user reviews</a></div><div style="float: right;"><a href="viewtopicbb3b.html?p=28877&amp;f=20#p28877"><img src="styles/subsilver2/imageset/icon_post_target.gif" width="12" height="9" alt="Post" title="Post" /></a><b>Posted:</b> Thu Aug 25, 2016 2:29 pm&nbsp;</div></td>
				</tr>
				</table>
			</td>
		</tr>

		<tr class="row1">

			<td valign="top" class="profile">
				<table cellspacing="4" align="center" width="150">
			
				<tr>
					<td><img src="styles/subsilver2/imageset/en/icon_user_offline.gif" alt="Offline" title="Offline" /></td>
				</tr>
			
				</table>

				<span class="postdetails">
					<br /><b>Joined:</b> Thu Aug 25, 2016 1:54 pm<br /><b>Posts:</b> 1<br /><b>Location:</b> Los Angeles / New York / Miami / Atlanta
				</span>

			</td>
			<td valign="top">
				<table width="100%" cellspacing="5">
				<tr>
					<td>
					

						<div class="postbody">This is awesome, I love it.</div>

					<br clear="all" /><br />

						<table width="100%" cellspacing="0">
						<tr valign="middle">
							<td class="gensmall" align="right">
							
							</td>
						</tr>
						</table>
					</td>
				</tr>
				</table>
			</td>
		</tr>

		<tr class="row1">

			<td class="profile"><strong><a href="#wrapheader">Top</a></strong></td>
			<td><div class="gensmall" style="float: left;">&nbsp;<a href="memberlist3d24.html?mode=viewprofile&amp;u=14895"><img src="styles/subsilver2/imageset/en/icon_user_profile.gif" alt="Profile" title="Profile" /></a> &nbsp;</div> <div class="gensmall" style="float: right;"><a href="posting598c.html?mode=quote&amp;f=20&amp;p=28877"><img src="styles/subsilver2/imageset/en/icon_post_quote.gif" alt="Reply with quote" title="Reply with quote" /></a> &nbsp;</div></td>
	
		</tr>

	<tr>
		<td class="spacer" colspan="2" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
	</tr>
	</table>

	<table class="tablebg" width="100%" cellspacing="1">
	<tr class="row2">

			<td align="center" valign="middle">
				<a name="p29163"></a>
				<b class="postauthor">rokyroy</b>
			</td>
			<td width="100%" height="25">
				<table width="100%" cellspacing="0">
				<tr>
				
					<td class="gensmall" width="100%"><div style="float: left;">&nbsp;<b>Post subject:</b> <a href="#p29163">Re: The official THANK YOU thread :-) and user reviews</a></div><div style="float: right;"><a href="viewtopic97e9-2.html?p=29163&amp;f=20#p29163"><img src="styles/subsilver2/imageset/icon_post_target.gif" width="12" height="9" alt="Post" title="Post" /></a><b>Posted:</b> Fri Sep 02, 2016 2:13 am&nbsp;</div></td>
				</tr>
				</table>
			</td>
		</tr>

		<tr class="row2">

			<td valign="top" class="profile">
				<table cellspacing="4" align="center" width="150">
			
				<tr>
					<td><img src="styles/subsilver2/imageset/en/icon_user_offline.gif" alt="Offline" title="Offline" /></td>
				</tr>
			
				</table>

				<span class="postdetails">
					<br /><b>Joined:</b> Fri Sep 02, 2016 2:04 am<br /><b>Posts:</b> 1
				</span>

			</td>
			<td valign="top">
				<table width="100%" cellspacing="5">
				<tr>
					<td>
					

						<div class="postbody">The great shell and a great add on to all windows after 7, even I use it with win 7.  It must be used by everyone for windows as it takes very less ram for running.  Iam really happy with classicshell. Thank you.  <img src="images/smilies/icon_e_smile.gif" alt=":)" title="Smile" /> <img src="images/smilies/icon_e_wink.gif" alt=";)" title="Wink" /></div>

					<br clear="all" /><br />

						<table width="100%" cellspacing="0">
						<tr valign="middle">
							<td class="gensmall" align="right">
							
							</td>
						</tr>
						</table>
					</td>
				</tr>
				</table>
			</td>
		</tr>

		<tr class="row2">

			<td class="profile"><strong><a href="#wrapheader">Top</a></strong></td>
			<td><div class="gensmall" style="float: left;">&nbsp;<a href="memberlist2587.html?mode=viewprofile&amp;u=14985"><img src="styles/subsilver2/imageset/en/icon_user_profile.gif" alt="Profile" title="Profile" /></a> &nbsp;</div> <div class="gensmall" style="float: right;"><a href="posting5c4e.html?mode=quote&amp;f=20&amp;p=29163"><img src="styles/subsilver2/imageset/en/icon_post_quote.gif" alt="Reply with quote" title="Reply with quote" /></a> &nbsp;</div></td>
	
		</tr>

	<tr>
		<td class="spacer" colspan="2" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
	</tr>
	</table>

	<table class="tablebg" width="100%" cellspacing="1">
	<tr class="row1">

			<td align="center" valign="middle">
				<a name="p29605"></a>
				<b class="postauthor">justintuijl</b>
			</td>
			<td width="100%" height="25">
				<table width="100%" cellspacing="0">
				<tr>
				
					<td class="gensmall" width="100%"><div style="float: left;">&nbsp;<b>Post subject:</b> <a href="#p29605">Thanks so much!</a></div><div style="float: right;"><a href="viewtopic9cc0.html?p=29605&amp;f=20#p29605"><img src="styles/subsilver2/imageset/icon_post_target.gif" width="12" height="9" alt="Post" title="Post" /></a><b>Posted:</b> Thu Sep 29, 2016 9:41 am&nbsp;</div></td>
				</tr>
				</table>
			</td>
		</tr>

		<tr class="row1">

			<td valign="top" class="profile">
				<table cellspacing="4" align="center" width="150">
			
				<tr>
					<td><img src="styles/subsilver2/imageset/en/icon_user_offline.gif" alt="Offline" title="Offline" /></td>
				</tr>
			
				</table>

				<span class="postdetails">
					<br /><b>Joined:</b> Thu Sep 29, 2016 9:40 am<br /><b>Posts:</b> 2<br /><b>Location:</b> London
				</span>

			</td>
			<td valign="top">
				<table width="100%" cellspacing="5">
				<tr>
					<td>
					

						<div class="postbody">I truly hate the Windows 10 start menu. Thanks so much for making me feel sane again.</div>

					<br clear="all" /><br />

						<table width="100%" cellspacing="0">
						<tr valign="middle">
							<td class="gensmall" align="right">
							
							</td>
						</tr>
						</table>
					</td>
				</tr>
				</table>
			</td>
		</tr>

		<tr class="row1">

			<td class="profile"><strong><a href="#wrapheader">Top</a></strong></td>
			<td><div class="gensmall" style="float: left;">&nbsp;<a href="memberlist899b.html?mode=viewprofile&amp;u=15397"><img src="styles/subsilver2/imageset/en/icon_user_profile.gif" alt="Profile" title="Profile" /></a> &nbsp;</div> <div class="gensmall" style="float: right;"><a href="postinge29e.html?mode=quote&amp;f=20&amp;p=29605"><img src="styles/subsilver2/imageset/en/icon_post_quote.gif" alt="Reply with quote" title="Reply with quote" /></a> &nbsp;</div></td>
	
		</tr>

	<tr>
		<td class="spacer" colspan="2" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
	</tr>
	</table>

	<table class="tablebg" width="100%" cellspacing="1">
	<tr class="row2">

			<td align="center" valign="middle">
				<a name="p29614"></a>
				<b class="postauthor">justintuijl</b>
			</td>
			<td width="100%" height="25">
				<table width="100%" cellspacing="0">
				<tr>
				
					<td class="gensmall" width="100%"><div style="float: left;">&nbsp;<b>Post subject:</b> <a href="#p29614">Re: The official THANK YOU thread :-) and user reviews</a></div><div style="float: right;"><a href="viewtopic34d6.html?p=29614&amp;f=20#p29614"><img src="styles/subsilver2/imageset/icon_post_target.gif" width="12" height="9" alt="Post" title="Post" /></a><b>Posted:</b> Fri Sep 30, 2016 3:26 am&nbsp;</div></td>
				</tr>
				</table>
			</td>
		</tr>

		<tr class="row2">

			<td valign="top" class="profile">
				<table cellspacing="4" align="center" width="150">
			
				<tr>
					<td><img src="styles/subsilver2/imageset/en/icon_user_offline.gif" alt="Offline" title="Offline" /></td>
				</tr>
			
				</table>

				<span class="postdetails">
					<br /><b>Joined:</b> Thu Sep 29, 2016 9:40 am<br /><b>Posts:</b> 2<br /><b>Location:</b> London
				</span>

			</td>
			<td valign="top">
				<table width="100%" cellspacing="5">
				<tr>
					<td>
					

						<div class="postbody">Classic shell is the best, I feel sane again!</div>

					<br clear="all" /><br />

						<table width="100%" cellspacing="0">
						<tr valign="middle">
							<td class="gensmall" align="right">
							
							</td>
						</tr>
						</table>
					</td>
				</tr>
				</table>
			</td>
		</tr>

		<tr class="row2">

			<td class="profile"><strong><a href="#wrapheader">Top</a></strong></td>
			<td><div class="gensmall" style="float: left;">&nbsp;<a href="memberlist899b.html?mode=viewprofile&amp;u=15397"><img src="styles/subsilver2/imageset/en/icon_user_profile.gif" alt="Profile" title="Profile" /></a> &nbsp;</div> <div class="gensmall" style="float: right;"><a href="posting8a83.html?mode=quote&amp;f=20&amp;p=29614"><img src="styles/subsilver2/imageset/en/icon_post_quote.gif" alt="Reply with quote" title="Reply with quote" /></a> &nbsp;</div></td>
	
		</tr>

	<tr>
		<td class="spacer" colspan="2" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
	</tr>
	</table>

	<table class="tablebg" width="100%" cellspacing="1">
	<tr class="row1">

			<td align="center" valign="middle">
				<a name="p29731"></a>
				<b class="postauthor">MarkJones</b>
			</td>
			<td width="100%" height="25">
				<table width="100%" cellspacing="0">
				<tr>
				
					<td class="gensmall" width="100%"><div style="float: left;">&nbsp;<b>Post subject:</b> <a href="#p29731">Re: The official THANK YOU thread :-) and user reviews</a></div><div style="float: right;"><a href="viewtopic8b7b.html?p=29731&amp;f=20#p29731"><img src="styles/subsilver2/imageset/icon_post_target.gif" width="12" height="9" alt="Post" title="Post" /></a><b>Posted:</b> Fri Oct 07, 2016 2:08 am&nbsp;</div></td>
				</tr>
				</table>
			</td>
		</tr>

		<tr class="row1">

			<td valign="top" class="profile">
				<table cellspacing="4" align="center" width="150">
			
				<tr>
					<td><img src="styles/subsilver2/imageset/en/icon_user_offline.gif" alt="Offline" title="Offline" /></td>
				</tr>
			
				</table>

				<span class="postdetails">
					<br /><b>Joined:</b> Fri Oct 07, 2016 1:55 am<br /><b>Posts:</b> 5
				</span>

			</td>
			<td valign="top">
				<table width="100%" cellspacing="5">
				<tr>
					<td>
					

						<div class="postbody">I love this thread)) But really, classic shell - thank you for your work. This add gives significant improvement. I think everybody should use it.</div>

					
						<div class="postbody"><br />_________________<br />No replacement for displacement</div>
					<br clear="all" /><br />

						<table width="100%" cellspacing="0">
						<tr valign="middle">
							<td class="gensmall" align="right">
							
							</td>
						</tr>
						</table>
					</td>
				</tr>
				</table>
			</td>
		</tr>

		<tr class="row1">

			<td class="profile"><strong><a href="#wrapheader">Top</a></strong></td>
			<td><div class="gensmall" style="float: left;">&nbsp;<a href="memberlistcefc.html?mode=viewprofile&amp;u=15523"><img src="styles/subsilver2/imageset/en/icon_user_profile.gif" alt="Profile" title="Profile" /></a> &nbsp;</div> <div class="gensmall" style="float: right;"><a href="posting50ab.html?mode=quote&amp;f=20&amp;p=29731"><img src="styles/subsilver2/imageset/en/icon_post_quote.gif" alt="Reply with quote" title="Reply with quote" /></a> &nbsp;</div></td>
	
		</tr>

	<tr>
		<td class="spacer" colspan="2" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
	</tr>
	</table>

	<table class="tablebg" width="100%" cellspacing="1">
	<tr class="row2">

			<td align="center" valign="middle">
				<a name="p30100"></a>
				<b class="postauthor">Vetral 32</b>
			</td>
			<td width="100%" height="25">
				<table width="100%" cellspacing="0">
				<tr>
				
					<td class="gensmall" width="100%"><div style="float: left;">&nbsp;<b>Post subject:</b> <a href="#p30100">Re: The official THANK YOU thread :-) and user reviews</a></div><div style="float: right;"><a href="viewtopicdf84-2.html?p=30100&amp;f=20#p30100"><img src="styles/subsilver2/imageset/icon_post_target.gif" width="12" height="9" alt="Post" title="Post" /></a><b>Posted:</b> Thu Oct 27, 2016 4:14 pm&nbsp;</div></td>
				</tr>
				</table>
			</td>
		</tr>

		<tr class="row2">

			<td valign="top" class="profile">
				<table cellspacing="4" align="center" width="150">
			
				<tr>
					<td><img src="styles/subsilver2/imageset/en/icon_user_offline.gif" alt="Offline" title="Offline" /></td>
				</tr>
			
				</table>

				<span class="postdetails">
					<br /><b>Joined:</b> Thu Oct 27, 2016 4:01 pm<br /><b>Posts:</b> 4
				</span>

			</td>
			<td valign="top">
				<table width="100%" cellspacing="5">
				<tr>
					<td>
					

						<div class="postbody">I am thankful that classic shell was made because now my entire computer looks like Windows 7. <img src="images/smilies/icon_e_biggrin.gif" alt=":D" title="Very Happy" /></div>

					<br clear="all" /><br />

						<table width="100%" cellspacing="0">
						<tr valign="middle">
							<td class="gensmall" align="right">
							
							</td>
						</tr>
						</table>
					</td>
				</tr>
				</table>
			</td>
		</tr>

		<tr class="row2">

			<td class="profile"><strong><a href="#wrapheader">Top</a></strong></td>
			<td><div class="gensmall" style="float: left;">&nbsp;<a href="memberlist9201.html?mode=viewprofile&amp;u=15873"><img src="styles/subsilver2/imageset/en/icon_user_profile.gif" alt="Profile" title="Profile" /></a> &nbsp;</div> <div class="gensmall" style="float: right;"><a href="posting8e29-2.html?mode=quote&amp;f=20&amp;p=30100"><img src="styles/subsilver2/imageset/en/icon_post_quote.gif" alt="Reply with quote" title="Reply with quote" /></a> &nbsp;</div></td>
	
		</tr>

	<tr>
		<td class="spacer" colspan="2" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
	</tr>
	</table>

	<table class="tablebg" width="100%" cellspacing="1">
	<tr class="row1">

			<td align="center" valign="middle">
				<a name="p30113"></a>
				<b class="postauthor">lalibrew</b>
			</td>
			<td width="100%" height="25">
				<table width="100%" cellspacing="0">
				<tr>
				
					<td class="gensmall" width="100%"><div style="float: left;">&nbsp;<b>Post subject:</b> <a href="#p30113">Re: The official THANK YOU thread :-) and user reviews</a></div><div style="float: right;"><a href="viewtopic144f.html?p=30113&amp;f=20#p30113"><img src="styles/subsilver2/imageset/icon_post_target.gif" width="12" height="9" alt="Post" title="Post" /></a><b>Posted:</b> Fri Oct 28, 2016 7:58 am&nbsp;</div></td>
				</tr>
				</table>
			</td>
		</tr>

		<tr class="row1">

			<td valign="top" class="profile">
				<table cellspacing="4" align="center" width="150">
			
				<tr>
					<td><img src="styles/subsilver2/imageset/en/icon_user_offline.gif" alt="Offline" title="Offline" /></td>
				</tr>
			
				</table>

				<span class="postdetails">
					<br /><b>Joined:</b> Sun Oct 23, 2016 11:26 am<br /><b>Posts:</b> 1
				</span>

			</td>
			<td valign="top">
				<table width="100%" cellspacing="5">
				<tr>
					<td>
					

						<div class="postbody">Thanks!!! This has saved my life.</div>

					<br clear="all" /><br />

						<table width="100%" cellspacing="0">
						<tr valign="middle">
							<td class="gensmall" align="right">
							
							</td>
						</tr>
						</table>
					</td>
				</tr>
				</table>
			</td>
		</tr>

		<tr class="row1">

			<td class="profile"><strong><a href="#wrapheader">Top</a></strong></td>
			<td><div class="gensmall" style="float: left;">&nbsp;<a href="memberlista607.html?mode=viewprofile&amp;u=15795"><img src="styles/subsilver2/imageset/en/icon_user_profile.gif" alt="Profile" title="Profile" /></a> &nbsp;</div> <div class="gensmall" style="float: right;"><a href="posting23db.html?mode=quote&amp;f=20&amp;p=30113"><img src="styles/subsilver2/imageset/en/icon_post_quote.gif" alt="Reply with quote" title="Reply with quote" /></a> &nbsp;</div></td>
	
		</tr>

	<tr>
		<td class="spacer" colspan="2" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
	</tr>
	</table>

	<table class="tablebg" width="100%" cellspacing="1">
	<tr class="row2">

			<td align="center" valign="middle">
				<a name="p30292"></a>
				<b class="postauthor">lwinstead</b>
			</td>
			<td width="100%" height="25">
				<table width="100%" cellspacing="0">
				<tr>
				
					<td class="gensmall" width="100%"><div style="float: left;">&nbsp;<b>Post subject:</b> <a href="#p30292">Re: The official THANK YOU thread :-) and user reviews</a></div><div style="float: right;"><a href="viewtopiccb39.html?p=30292&amp;f=20#p30292"><img src="styles/subsilver2/imageset/icon_post_target.gif" width="12" height="9" alt="Post" title="Post" /></a><b>Posted:</b> Wed Nov 09, 2016 7:54 am&nbsp;</div></td>
				</tr>
				</table>
			</td>
		</tr>

		<tr class="row2">

			<td valign="top" class="profile">
				<table cellspacing="4" align="center" width="150">
			
				<tr>
					<td><img src="styles/subsilver2/imageset/en/icon_user_offline.gif" alt="Offline" title="Offline" /></td>
				</tr>
			
				</table>

				<span class="postdetails">
					<br /><b>Joined:</b> Wed Nov 09, 2016 7:45 am<br /><b>Posts:</b> 1
				</span>

			</td>
			<td valign="top">
				<table width="100%" cellspacing="5">
				<tr>
					<td>
					

						<div class="postbody">THANK YOU FOR CLASSIC SHELL!!!<br />I can't say it enough, and even though I/my employer donated twice, no amount of praise is enough for you and your company.  <br /><br />I appreciate the dynamic at Microsoft, but I think the Start Menu is a component/element should be largely left alone, due to it being such a familiar element and core feature of the OS.  Thankfully, we have ClassicShell around to ensure that such a recognizable element remains a core identifiable feature.  <br /><br />Again, thank you Classic Shell!!<br /><br />-Lawrence Winstead<br />IT Manager<br />DuraTech Industries Int'l Inc.<br />Jamestown, ND</div>

					<br clear="all" /><br />

						<table width="100%" cellspacing="0">
						<tr valign="middle">
							<td class="gensmall" align="right">
							
							</td>
						</tr>
						</table>
					</td>
				</tr>
				</table>
			</td>
		</tr>

		<tr class="row2">

			<td class="profile"><strong><a href="#wrapheader">Top</a></strong></td>
			<td><div class="gensmall" style="float: left;">&nbsp;<a href="memberlist7c44.html?mode=viewprofile&amp;u=16109"><img src="styles/subsilver2/imageset/en/icon_user_profile.gif" alt="Profile" title="Profile" /></a> &nbsp;</div> <div class="gensmall" style="float: right;"><a href="posting1d3d.html?mode=quote&amp;f=20&amp;p=30292"><img src="styles/subsilver2/imageset/en/icon_post_quote.gif" alt="Reply with quote" title="Reply with quote" /></a> &nbsp;</div></td>
	
		</tr>

	<tr>
		<td class="spacer" colspan="2" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
	</tr>
	</table>

	<table class="tablebg" width="100%" cellspacing="1">
	<tr class="row1">

			<td align="center" valign="middle">
				<a name="p30293"></a>
				<b class="postauthor">Gaurav</b>
			</td>
			<td width="100%" height="25">
				<table width="100%" cellspacing="0">
				<tr>
				
					<td class="gensmall" width="100%"><div style="float: left;">&nbsp;<b>Post subject:</b> <a href="#p30293">Re: The official THANK YOU thread :-) and user reviews</a></div><div style="float: right;"><a href="viewtopiceb0a.html?p=30293&amp;f=20#p30293"><img src="styles/subsilver2/imageset/icon_post_target.gif" width="12" height="9" alt="Post" title="Post" /></a><b>Posted:</b> Wed Nov 09, 2016 10:13 am&nbsp;</div></td>
				</tr>
				</table>
			</td>
		</tr>

		<tr class="row1">

			<td valign="top" class="profile">
				<table cellspacing="4" align="center" width="150">
			
				<tr>
					<td><img src="styles/subsilver2/imageset/en/icon_user_offline.gif" alt="Offline" title="Offline" /></td>
				</tr>
			
				<tr>
					<td><img src="download/file209d.png?avatar=54_1464201643.png" width="90" height="90" alt="User avatar" /></td>
				</tr>
			
				</table>

				<span class="postdetails">
					<br /><b>Joined:</b> Thu Jan 03, 2013 12:38 am<br /><b>Posts:</b> 5341
				</span>

			</td>
			<td valign="top">
				<table width="100%" cellspacing="5">
				<tr>
					<td>
					

						<div class="postbody">Thank you everyone for the appreciation and donations.</div>

					
						<div class="postbody"><br />_________________<br /><span style="font-family:Segoe UI Semibold;"><span style="font-size: 100%; line-height: 116%;">Links to some general topics</span></span><span style="font-size: 100%; line-height: 116%;"><span style="font-family:Segoe UI Semibold;">:</span></span><br /><span style="font-size: 100%; line-height: 116%;"><span style="font-family:Segoe UI Semibold;"></span></span><br /><span style="font-size: 100%; line-height: 116%;"><span style="font-family:Segoe UI Semibold;"></span></span><span style="font-family:Segoe UI Semibold;"></span><span style="font-size: 100%; line-height: 116%;"><span style="font-family:Segoe UI Semibold;">●</span></span><span style="font-size: 100%; line-height: 116%;"><span style="font-family:Segoe UI Semibold;"> <a href="viewtopic9d3a.html?f=4&amp;t=2399" class="postlink">Compare Start Menus</a></span></span> <br /><br /><span style="font-size: 100%; line-height: 116%;"><span style="font-family:Segoe UI Semibold;">●</span></span><span style="font-size: 100%; line-height: 116%;"><span style="font-family:Segoe UI Semibold;"> <a href="viewtopic5327.html?f=4&amp;t=1588" class="postlink">Read the Search box usage guide</a></span></span><span style="font-size: 100%; line-height: 116%;"><span style="font-family:Segoe UI Semibold;">. <br /><br />I am a Windows enthusiast and did Classic Shell&#39;s testing and usability/UX feedback.</span></span></div>
					<br clear="all" /><br />

						<table width="100%" cellspacing="0">
						<tr valign="middle">
							<td class="gensmall" align="right">
							
							</td>
						</tr>
						</table>
					</td>
				</tr>
				</table>
			</td>
		</tr>

		<tr class="row1">

			<td class="profile"><strong><a href="#wrapheader">Top</a></strong></td>
			<td><div class="gensmall" style="float: left;">&nbsp;<a href="memberlist367b.html?mode=viewprofile&amp;u=54"><img src="styles/subsilver2/imageset/en/icon_user_profile.gif" alt="Profile" title="Profile" /></a> &nbsp;</div> <div class="gensmall" style="float: right;"><a href="posting3691.html?mode=quote&amp;f=20&amp;p=30293"><img src="styles/subsilver2/imageset/en/icon_post_quote.gif" alt="Reply with quote" title="Reply with quote" /></a> &nbsp;</div></td>
	
		</tr>

	<tr>
		<td class="spacer" colspan="2" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
	</tr>
	</table>

	<table class="tablebg" width="100%" cellspacing="1">
	<tr class="row2">

			<td align="center" valign="middle">
				<a name="p30735"></a>
				<b class="postauthor">John_H</b>
			</td>
			<td width="100%" height="25">
				<table width="100%" cellspacing="0">
				<tr>
				
					<td class="gensmall" width="100%"><div style="float: left;">&nbsp;<b>Post subject:</b> <a href="#p30735">Re: The official THANK YOU thread :-) and user reviews</a></div><div style="float: right;"><a href="viewtopic1c84.html?p=30735&amp;f=20#p30735"><img src="styles/subsilver2/imageset/icon_post_target.gif" width="12" height="9" alt="Post" title="Post" /></a><b>Posted:</b> Wed Dec 07, 2016 10:28 am&nbsp;</div></td>
				</tr>
				</table>
			</td>
		</tr>

		<tr class="row2">

			<td valign="top" class="profile">
				<table cellspacing="4" align="center" width="150">
			
				<tr>
					<td><img src="styles/subsilver2/imageset/en/icon_user_offline.gif" alt="Offline" title="Offline" /></td>
				</tr>
			
				</table>

				<span class="postdetails">
					<br /><b>Joined:</b> Wed Dec 07, 2016 10:26 am<br /><b>Posts:</b> 1
				</span>

			</td>
			<td valign="top">
				<table width="100%" cellspacing="5">
				<tr>
					<td>
					

						<div class="postbody"><img src="images/smilies/icon_e_biggrin.gif" alt=":D" title="Very Happy" /> <img src="images/smilies/icon_e_biggrin.gif" alt=":D" title="Very Happy" /> <img src="images/smilies/icon_e_biggrin.gif" alt=":D" title="Very Happy" /> <img src="images/smilies/icon_e_biggrin.gif" alt=":D" title="Very Happy" /> <img src="images/smilies/icon_e_biggrin.gif" alt=":D" title="Very Happy" /> <img src="images/smilies/icon_e_biggrin.gif" alt=":D" title="Very Happy" /> <img src="images/smilies/icon_e_biggrin.gif" alt=":D" title="Very Happy" /> brilliant program!! what more can be said?<br />thankyou thankyou thankyou thankyou thankyou thankyou thankyou thankyou thankyou thankyou thankyou thankyou</div>

					<br clear="all" /><br />

						<table width="100%" cellspacing="0">
						<tr valign="middle">
							<td class="gensmall" align="right">
							
							</td>
						</tr>
						</table>
					</td>
				</tr>
				</table>
			</td>
		</tr>

		<tr class="row2">

			<td class="profile"><strong><a href="#wrapheader">Top</a></strong></td>
			<td><div class="gensmall" style="float: left;">&nbsp;<a href="memberlist78b8.html?mode=viewprofile&amp;u=16569"><img src="styles/subsilver2/imageset/en/icon_user_profile.gif" alt="Profile" title="Profile" /></a> &nbsp;</div> <div class="gensmall" style="float: right;"><a href="posting186c-2.html?mode=quote&amp;f=20&amp;p=30735"><img src="styles/subsilver2/imageset/en/icon_post_quote.gif" alt="Reply with quote" title="Reply with quote" /></a> &nbsp;</div></td>
	
		</tr>

	<tr>
		<td class="spacer" colspan="2" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
	</tr>
	</table>

	<table class="tablebg" width="100%" cellspacing="1">
	<tr class="row1">

			<td align="center" valign="middle">
				<a name="p30771"></a>
				<b class="postauthor">AcroGen</b>
			</td>
			<td width="100%" height="25">
				<table width="100%" cellspacing="0">
				<tr>
				
					<td class="gensmall" width="100%"><div style="float: left;">&nbsp;<b>Post subject:</b> <a href="#p30771">Re: The official THANK YOU thread :-) and user reviews</a></div><div style="float: right;"><a href="viewtopicb2db.html?p=30771&amp;f=20#p30771"><img src="styles/subsilver2/imageset/icon_post_target.gif" width="12" height="9" alt="Post" title="Post" /></a><b>Posted:</b> Sun Dec 11, 2016 12:08 pm&nbsp;</div></td>
				</tr>
				</table>
			</td>
		</tr>

		<tr class="row1">

			<td valign="top" class="profile">
				<table cellspacing="4" align="center" width="150">
			
				<tr>
					<td><img src="styles/subsilver2/imageset/en/icon_user_offline.gif" alt="Offline" title="Offline" /></td>
				</tr>
			
				<tr>
					<td><img src="download/file74da.png?avatar=16614_1483484626.png" width="90" height="90" alt="User avatar" /></td>
				</tr>
			
				</table>

				<span class="postdetails">
					<br /><b>Joined:</b> Sat Dec 10, 2016 10:25 am<br /><b>Posts:</b> 25<br /><b>Location:</b> Somewhere in the US.
				</span>

			</td>
			<td valign="top">
				<table width="100%" cellspacing="5">
				<tr>
					<td>
					

						<div class="postbody">I am so happy to be part of the forum, and be part of the millions that downloaded Classic Shell. I was a big fan of Windows XP, and thanks to this app, it's boosted my way of becoming a graphic designer. I would recommend this 100% to the people that want a little bit of a change to the Start Menu, button, and taskbar. <br /><br />Once again, thank you so much for creating this application. I would donate if I could, but I need to use my money for other stuff (I'll donate someday, however).</div>

					
						<div class="postbody"><br />_________________<br />Don't mind me, just your average Indian Tech Support on a forum. <img src="images/smilies/icon_e_biggrin.gif" alt=":D" title="Very Happy" /><br />My blog: officialrydrblog.blogspot.com<br />Dank beats: soundcloud.com/officialnitroedm</div>
					<br clear="all" /><br />

						<table width="100%" cellspacing="0">
						<tr valign="middle">
							<td class="gensmall" align="right">
							
							</td>
						</tr>
						</table>
					</td>
				</tr>
				</table>
			</td>
		</tr>

		<tr class="row1">

			<td class="profile"><strong><a href="#wrapheader">Top</a></strong></td>
			<td><div class="gensmall" style="float: left;">&nbsp;<a href="memberlist7b1f.html?mode=viewprofile&amp;u=16614"><img src="styles/subsilver2/imageset/en/icon_user_profile.gif" alt="Profile" title="Profile" /></a> &nbsp;</div> <div class="gensmall" style="float: right;"><a href="posting21c6.html?mode=quote&amp;f=20&amp;p=30771"><img src="styles/subsilver2/imageset/en/icon_post_quote.gif" alt="Reply with quote" title="Reply with quote" /></a> &nbsp;</div></td>
	
		</tr>

	<tr>
		<td class="spacer" colspan="2" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
	</tr>
	</table>

	<table class="tablebg" width="100%" cellspacing="1">
	<tr class="row2">

			<td align="center" valign="middle">
				<a name="p30839"></a>
				<b class="postauthor">friendlyape</b>
			</td>
			<td width="100%" height="25">
				<table width="100%" cellspacing="0">
				<tr>
				
					<td class="gensmall" width="100%"><div style="float: left;">&nbsp;<b>Post subject:</b> <a href="#p30839">Re: The official THANK YOU thread :-) and user reviews</a></div><div style="float: right;"><a href="viewtopiccab8.html?p=30839&amp;f=20#p30839"><img src="styles/subsilver2/imageset/icon_post_target.gif" width="12" height="9" alt="Post" title="Post" /></a><b>Posted:</b> Sat Dec 17, 2016 8:40 pm&nbsp;</div></td>
				</tr>
				</table>
			</td>
		</tr>

		<tr class="row2">

			<td valign="top" class="profile">
				<table cellspacing="4" align="center" width="150">
			
				<tr>
					<td><img src="styles/subsilver2/imageset/en/icon_user_offline.gif" alt="Offline" title="Offline" /></td>
				</tr>
			
				</table>

				<span class="postdetails">
					<br /><b>Joined:</b> Sat Dec 17, 2016 8:28 pm<br /><b>Posts:</b> 2
				</span>

			</td>
			<td valign="top">
				<table width="100%" cellspacing="5">
				<tr>
					<td>
					

						<div class="postbody">Thank you. This product is (1) one of the most important innovations in my day-to-day life in years, and (2) one of the most important stands against the Evil Empire that there is. <br /><br />If I had money I would give you more of it, but then, if I had money I'd buy a machine from some company not in the Evil Empire. So I gave my five bucks. Drop in the bucket. I thought I was just rewarding some guy that had a clever idea once, but I see now, this is an ongoing fight. Fuck Microsoft. Fuck them with a pointy cactus.</div>

					<br clear="all" /><br />

						<table width="100%" cellspacing="0">
						<tr valign="middle">
							<td class="gensmall" align="right">
							
							</td>
						</tr>
						</table>
					</td>
				</tr>
				</table>
			</td>
		</tr>

		<tr class="row2">

			<td class="profile"><strong><a href="#wrapheader">Top</a></strong></td>
			<td><div class="gensmall" style="float: left;">&nbsp;<a href="memberlistd7d7.html?mode=viewprofile&amp;u=16730"><img src="styles/subsilver2/imageset/en/icon_user_profile.gif" alt="Profile" title="Profile" /></a> &nbsp;</div> <div class="gensmall" style="float: right;"><a href="posting2ed7.html?mode=quote&amp;f=20&amp;p=30839"><img src="styles/subsilver2/imageset/en/icon_post_quote.gif" alt="Reply with quote" title="Reply with quote" /></a> &nbsp;</div></td>
	
		</tr>

	<tr>
		<td class="spacer" colspan="2" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
	</tr>
	</table>

	<table class="tablebg" width="100%" cellspacing="1">
	<tr class="row1">

			<td align="center" valign="middle">
				<a name="p30877"></a>
				<b class="postauthor">DrMichael</b>
			</td>
			<td width="100%" height="25">
				<table width="100%" cellspacing="0">
				<tr>
				
					<td class="gensmall" width="100%"><div style="float: left;">&nbsp;<b>Post subject:</b> <a href="#p30877">Re: The official THANK YOU thread :-) and user reviews</a></div><div style="float: right;"><a href="viewtopica9e4.html?p=30877&amp;f=20#p30877"><img src="styles/subsilver2/imageset/icon_post_target.gif" width="12" height="9" alt="Post" title="Post" /></a><b>Posted:</b> Wed Dec 21, 2016 8:45 am&nbsp;</div></td>
				</tr>
				</table>
			</td>
		</tr>

		<tr class="row1">

			<td valign="top" class="profile">
				<table cellspacing="4" align="center" width="150">
			
				<tr>
					<td><img src="styles/subsilver2/imageset/en/icon_user_offline.gif" alt="Offline" title="Offline" /></td>
				</tr>
			
				</table>

				<span class="postdetails">
					<br /><b>Joined:</b> Wed Dec 21, 2016 7:52 am<br /><b>Posts:</b> 4
				</span>

			</td>
			<td valign="top">
				<table width="100%" cellspacing="5">
				<tr>
					<td>
					

						<div class="postbody">Thank you so much for Classic Shell, without which, I could not function. Microsoft has nerfed their entire operating system since 2008, and it is your program which has restored operation to my computer. I can't imagine ever purchasing a computer in the future without with program onboard. Thank you, thank you, a million times, thank you!! Thank God for you, and for Classic Shell!!!<br /><br />Oh, and did I mention your customer support outshines Microsoft's 1000 times over?!?!?<br /><br />Thank You!!</div>

					<br clear="all" /><br />

						<table width="100%" cellspacing="0">
						<tr valign="middle">
							<td class="gensmall" align="right">
							
							</td>
						</tr>
						</table>
					</td>
				</tr>
				</table>
			</td>
		</tr>

		<tr class="row1">

			<td class="profile"><strong><a href="#wrapheader">Top</a></strong></td>
			<td><div class="gensmall" style="float: left;">&nbsp;<a href="memberlist2da5.html?mode=viewprofile&amp;u=16797"><img src="styles/subsilver2/imageset/en/icon_user_profile.gif" alt="Profile" title="Profile" /></a> &nbsp;</div> <div class="gensmall" style="float: right;"><a href="posting9996.html?mode=quote&amp;f=20&amp;p=30877"><img src="styles/subsilver2/imageset/en/icon_post_quote.gif" alt="Reply with quote" title="Reply with quote" /></a> &nbsp;</div></td>
	
		</tr>

	<tr>
		<td class="spacer" colspan="2" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
	</tr>
	</table>

	<table class="tablebg" width="100%" cellspacing="1">
	<tr class="row2">

			<td align="center" valign="middle">
				<a name="p30990"></a>
				<b class="postauthor">myaz</b>
			</td>
			<td width="100%" height="25">
				<table width="100%" cellspacing="0">
				<tr>
				
					<td class="gensmall" width="100%"><div style="float: left;">&nbsp;<b>Post subject:</b> <a href="#p30990">Re: The official THANK YOU thread :-) and user reviews</a></div><div style="float: right;"><a href="viewtopic0a5b.html?p=30990&amp;f=20#p30990"><img src="styles/subsilver2/imageset/icon_post_target.gif" width="12" height="9" alt="Post" title="Post" /></a><b>Posted:</b> Fri Dec 30, 2016 12:46 am&nbsp;</div></td>
				</tr>
				</table>
			</td>
		</tr>

		<tr class="row2">

			<td valign="top" class="profile">
				<table cellspacing="4" align="center" width="150">
			
				<tr>
					<td><img src="styles/subsilver2/imageset/en/icon_user_offline.gif" alt="Offline" title="Offline" /></td>
				</tr>
			
				<tr>
					<td><img src="download/file682f.jpg?avatar=16863_1483672190.jpg" width="80" height="45" alt="User avatar" /></td>
				</tr>
			
				</table>

				<span class="postdetails">
					<br /><b>Joined:</b> Sun Dec 25, 2016 9:29 pm<br /><b>Posts:</b> 3
				</span>

			</td>
			<td valign="top">
				<table width="100%" cellspacing="5">
				<tr>
					<td>
					

						<div class="postbody">Thanks a lot,love Classic Shell <img src="images/smilies/icon_e_biggrin.gif" alt=":D" title="Very Happy" /></div>

					<br clear="all" /><br />

						<table width="100%" cellspacing="0">
						<tr valign="middle">
							<td class="gensmall" align="right">
							
							</td>
						</tr>
						</table>
					</td>
				</tr>
				</table>
			</td>
		</tr>

		<tr class="row2">

			<td class="profile"><strong><a href="#wrapheader">Top</a></strong></td>
			<td><div class="gensmall" style="float: left;">&nbsp;<a href="memberlistf5f9.html?mode=viewprofile&amp;u=16863"><img src="styles/subsilver2/imageset/en/icon_user_profile.gif" alt="Profile" title="Profile" /></a> &nbsp;</div> <div class="gensmall" style="float: right;"><a href="posting9cc5.html?mode=quote&amp;f=20&amp;p=30990"><img src="styles/subsilver2/imageset/en/icon_post_quote.gif" alt="Reply with quote" title="Reply with quote" /></a> &nbsp;</div></td>
	
		</tr>

	<tr>
		<td class="spacer" colspan="2" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
	</tr>
	</table>

	<table width="100%" cellspacing="1" class="tablebg">
	<tr align="center">
		<td class="cat"><form name="viewtopic" method="post" action="http://www.classicshell.net/forum/viewtopic.php?f=20&amp;t=2742&amp;start=100"><span class="gensmall">Display posts from previous:</span> <select name="st" id="st"><option value="0" selected="selected">All posts</option><option value="1">1 day</option><option value="7">7 days</option><option value="14">2 weeks</option><option value="30">1 month</option><option value="90">3 months</option><option value="180">6 months</option><option value="365">1 year</option></select>&nbsp;<span class="gensmall">Sort by</span> <select name="sk" id="sk"><option value="a">Author</option><option value="t" selected="selected">Post time</option><option value="s">Subject</option></select> <select name="sd" id="sd"><option value="a" selected="selected">Ascending</option><option value="d">Descending</option></select>&nbsp;<input class="btnlite" type="submit" value="Go" name="sort" /></form></td>
	</tr>
	</table>
	

	<table width="100%" cellspacing="1">
	<tr>
		<td align="left" valign="middle" nowrap="nowrap">
		<a href="posting985f.html?mode=post&amp;f=20"><img src="styles/subsilver2/imageset/en/button_topic_new.gif" alt="Post new topic" title="Post new topic" /></a>&nbsp;<a href="postingc20e.html?mode=reply&amp;f=20&amp;t=2742"><img src="styles/subsilver2/imageset/en/button_topic_reply.gif" alt="Reply to topic" title="Reply to topic" /></a>
		</td>
		
			<td class="nav" valign="middle" nowrap="nowrap">&nbsp;Page <strong>3</strong> of <strong>4</strong><br /></td>
			<td class="gensmall" nowrap="nowrap">&nbsp;[ 182 posts ]&nbsp;</td>
			<td class="gensmall" width="100%" align="right" nowrap="nowrap"><b><a href="#" onclick="jumpto(); return false;" title="Click to jump to page…">Go to page</a> <a href="viewtopicc0a9.html?f=20&amp;t=2742&amp;start=50">Previous</a>&nbsp;&nbsp;<a href="viewtopic447d.html?f=20&amp;t=2742">1</a><span class="page-sep">, </span><a href="viewtopicc0a9.html?f=20&amp;t=2742&amp;start=50">2</a><span class="page-sep">, </span><strong>3</strong><span class="page-sep">, </span><a href="viewtopicaa64.html?f=20&amp;t=2742&amp;start=150">4</a> &nbsp;<a href="viewtopicaa64.html?f=20&amp;t=2742&amp;start=150">Next</a></b></td>
		
	</tr>
	</table>

</div>

<div id="pagefooter"></div>

<br clear="all" />
<table class="tablebg" width="100%" cellspacing="1" cellpadding="0" style="margin-top: 5px;">
	<tr>
		<td class="row1">
			<p class="breadcrumbs"><a href="index-2.html">Board index</a> &#187; <a href="viewforum8a83.html?f=11">Development</a> &#187; <a href="viewforumffeb.html?f=20">Translations</a></p>
			<p class="datetime">All times are UTC - 8 hours [ <abbr title="Daylight Saving Time">DST</abbr> ]</p>
		</td>
	</tr>
	</table>
	<br clear="all" />

	<table class="tablebg" width="100%" cellspacing="1">
	<tr>
		<td class="cat"><h4>Who is online</h4></td>
	</tr>
	<tr>
		<td class="row1"><p class="gensmall">Users browsing this forum: No registered users and 1 guest</p></td>
	</tr>
	</table>


<br clear="all" />

<table width="100%" cellspacing="1">
<tr>
	<td width="40%" valign="top" nowrap="nowrap" align="left"></td>
	<td align="right" valign="top" nowrap="nowrap"><span class="gensmall">You <strong>cannot</strong> post new topics in this forum<br />You <strong>cannot</strong> reply to topics in this forum<br />You <strong>cannot</strong> edit your posts in this forum<br />You <strong>cannot</strong> delete your posts in this forum<br />You <strong>cannot</strong> post attachments in this forum<br /></span></td>
</tr>
</table>

<br clear="all" />

<table width="100%" cellspacing="0">
<tr>
	<td><form method="get" name="search" action="http://www.classicshell.net/forum/search.php"><span class="gensmall">Search for:</span> <input class="post" type="text" name="keywords" size="20" /> <input class="btnlite" type="submit" value="Go" /><input type="hidden" name="t" value="2742" />
<input type="hidden" name="sf" value="msgonly" />
</form></td>
	<td align="right">
	<form method="post" name="jumpbox" action="http://www.classicshell.net/forum/viewforum.php" onsubmit="if(document.jumpbox.f.value == -1){return false;}">

	<table cellspacing="0" cellpadding="0" border="0">
	<tr>
		<td nowrap="nowrap"><span class="gensmall">Jump to:</span>&nbsp;<select name="f" onchange="if(this.options[this.selectedIndex].value != -1){ document.forms['jumpbox'].submit() }">

		
			<option value="-1">Select a forum</option>
		<option value="-1">------------------</option>
			<option value="3">Classic Shell</option>
		
			<option value="4">&nbsp; &nbsp;Announcements</option>
		
			<option value="5">&nbsp; &nbsp;Tutorials</option>
		
			<option value="6">Discussion</option>
		
			<option value="7">&nbsp; &nbsp;Classic Start Menu</option>
		
			<option value="8">&nbsp; &nbsp;Classic Explorer</option>
		
			<option value="9">&nbsp; &nbsp;Classic IE</option>
		
			<option value="10">&nbsp; &nbsp;Chitchat</option>
		
			<option value="19">&nbsp; &nbsp;Classic Shell 4.0 beta</option>
		
			<option value="22">&nbsp; &nbsp;Hack hotline</option>
		
			<option value="11">Development</option>
		
			<option value="12">&nbsp; &nbsp;Bug Reports</option>
		
			<option value="13">&nbsp; &nbsp;Feature Requests</option>
		
			<option value="20" selected="selected">&nbsp; &nbsp;Translations</option>
		
			<option value="16">User Content</option>
		
			<option value="17">&nbsp; &nbsp;Start Menu Skins</option>
		
			<option value="18">&nbsp; &nbsp;Start Buttons</option>
		
			<option value="21">&nbsp; &nbsp;Taskbar Skins</option>
		

		</select>&nbsp;<input class="btnlite" type="submit" value="Go" /></td>
	</tr>
	</table>

	</form>
</td>
</tr>
</table>

<img src="cronb8fa.gif?cron_type=tidy_warnings" width="1" height="1" alt="cron" />
</div>

<div id="wrapfooter">
	
	<span class="copyright">
	</span>
<table style="width: 100%" border="0" cellpadding="0" cellspacing="0">
      <td class="bgrx" background="../images/bg_bottom.gif" bgcolor="#88cce6" height="1">
      <table border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td style="padding: 0" colspan="4" height="8"><img src="../images/spacer.gif" height="8" width="1"></td>
          </tr>
          <tr>
            <td style="padding: 0" width="21"><img src="../images/spacer.gif" height="1" width="21"></td>
            <td style="padding: 0; text-align: left" class="cpr" width="50%">
            Powered by <a href="https://www.phpbb.com/">phpBB</a>&reg; Forum Software &copy; phpBB Group, Almsamim WYSIWYG
            </td>
            <td style="padding: 0; text-align: right" class="cpr" width="50%">
            Classic Shell &copy; 2010-2016, Ivo Beltchev.<br>All right reserved.
            </td>
            <td style="padding: 0" width="21"><img src="../images/spacer.gif" height="1" width="21"></td>
          </tr>
          <tr>
            <td style="padding: 0" colspan="4" height="7"><img src="../images/spacer.gif" height="7" width="1"></td>
          </tr>
      </table>
      </td>
    </tr>
</table>
</div>

</body>

<!-- Mirrored from www.classicshell.net/forum/viewtopic.php?p=27916&f=20 by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 08 Jun 2018 09:56:37 GMT -->
</html>