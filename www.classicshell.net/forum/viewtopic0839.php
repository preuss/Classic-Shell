<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-gb" xml:lang="en-gb">

<!-- Mirrored from www.classicshell.net/forum/viewtopic.php?f=17&t=5655&view=next by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 08 Jun 2018 10:12:52 GMT -->
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

<title>Classic Shell &bull; View topic - Premultiplied Alpha and not premultiplied images</title>

<link rel="alternate" type="application/atom+xml" title="Feed - Classic Shell" href="feed.php" /><link rel="alternate" type="application/atom+xml" title="Feed - New Topics" href="feed9d17.php?mode=topics" /><link rel="alternate" type="application/atom+xml" title="Feed - Forum - Start Menu Skins" href="feed48ab.php?f=17" /><link rel="alternate" type="application/atom+xml" title="Feed - Topic - Premultiplied Alpha and not premultiplied images" href="feed88c0.php?f=17&amp;t=5655" />

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
	var page = prompt('Enter the page number you wish to go to:', '1');
	var per_page = '';
	var base_url = '';

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
			<td class="gensmall" align="right">It is currently Thu Jun 07, 2018 11:06 pm<br /></td>
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
			<p class="breadcrumbs"><a href="index-2.html">Board index</a> &#187; <a href="viewforumf2fa.html?f=16">User Content</a> &#187; <a href="viewforum48ab.html?f=17">Start Menu Skins</a></p>
			<p class="datetime">All times are UTC - 8 hours [ <abbr title="Daylight Saving Time">DST</abbr> ]</p>
		</td>
	</tr>
	</table>

	<br />

<div id="pageheader">
	<h2><a class="titles" href="viewtopicf617.html?f=17&amp;t=7243">Premultiplied Alpha and not premultiplied images</a></h2>


</div>

<br clear="all" /><br />

<div id="pagecontent">

	<table width="100%" cellspacing="1">
	<tr>
		<td align="left" valign="middle" nowrap="nowrap">
		<a href="posting2915.html?mode=post&amp;f=17"><img src="styles/subsilver2/imageset/en/button_topic_new.gif" alt="Post new topic" title="Post new topic" /></a>&nbsp;<a href="posting3689.html?mode=reply&amp;f=17&amp;t=7243"><img src="styles/subsilver2/imageset/en/button_topic_reply.gif" alt="Reply to topic" title="Reply to topic" /></a>
		</td>
		
			<td class="nav" valign="middle" nowrap="nowrap">&nbsp;Page <strong>1</strong> of <strong>1</strong><br /></td>
			<td class="gensmall" nowrap="nowrap">&nbsp;[ 5 posts ]&nbsp;</td>
			<td class="gensmall" width="100%" align="right" nowrap="nowrap"></td>
		
	</tr>
	</table>

	<table class="tablebg" width="100%" cellspacing="1">
	<tr>
		<td class="cat">
			<table width="100%" cellspacing="0">
			<tr>
				<td class="nav" nowrap="nowrap">&nbsp;
				<a href="viewtopic187f.html?f=17&amp;t=7243&amp;view=print" title="Print view">Print view</a>
				</td>
				<td class="nav" align="right" nowrap="nowrap"><a href="viewtopic99c1-2.html?f=17&amp;t=7243&amp;view=previous">Previous topic</a> | <a href="viewtopicaa9f.html?f=17&amp;t=7243&amp;view=next">Next topic</a>&nbsp;</td>
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
				<a name="p31114"></a>
				<b class="postauthor">juniper7</b>
			</td>
			<td width="100%" height="25">
				<table width="100%" cellspacing="0">
				<tr>
				
					<td class="gensmall" width="100%"><div style="float: left;">&nbsp;<b>Post subject:</b> <a href="#p31114">Premultiplied Alpha and not premultiplied images</a></div><div style="float: right;"><a href="viewtopicd1a4.html?p=31114#p31114"><img src="styles/subsilver2/imageset/icon_post_target.gif" width="12" height="9" alt="Post" title="Post" /></a><b>Posted:</b> Thu Jan 05, 2017 1:46 pm&nbsp;</div></td>
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
					<td><img src="download/file63f2.jpg?avatar=856_1379385760.jpg" width="90" height="90" alt="User avatar" /></td>
				</tr>
			
				</table>

				<span class="postdetails">
					<br /><b>Joined:</b> Thu Jun 13, 2013 12:07 pm<br /><b>Posts:</b> 1014
				</span>

			</td>
			<td valign="top">
				<table width="100%" cellspacing="5">
				<tr>
					<td>
					

						<div class="postbody">Premultiplied Alpha and not premultiplied images.<br /><br /><br />From what I see in the skinning tutorial, CSM does not use premultiplied images:<br />&quot;For 32-bit images don't premultiply the alpha channel. If you don't know what &quot;premultiply the alpha&quot; means, never mind.&quot;<br /><br /><br />A lot of buttons, user picture frames, menu images from msstyles files have some type of premultiplied alpha in them.<br />It's some kind of merging, and throwing away pixels process. They appear darker in a photo program.<br /><br />Example red color:<br /><br />* Red pixels with a premultiplied alpha of 50% have 8bit RGBA value: 127,0,0,127<br /><br />* Red pixels with a ………straight alpha of 50% have 8bit RGBA value: 255,0,0,127<br /><br />What's puzzling to me is photo programs do this anyway, and a premultiplied, or not premultipled same image look same in editor.<br />I think MS multiplied with a different factor, to make it hard on us. <img src="images/smilies/icon_mad.gif" alt=":x" title="Mad" /> <br /><br />How to exactly undo premultiplied alpha image, so it can be used?<br />Beats the H%LL out of me, and everyone else. <br />Can only boost the brightness of all channels to get approximate look from original os.</div>

					
						<br clear="all" /><br />

						<table class="tablebg" width="100%" cellspacing="1">
						<tr>
							<td class="row3"><b class="genmed">Attachments: </b></td>
						</tr>
						
							<tr>
								<td class="row2">
			<span class="genmed">
				<img src="styles/subsilver2/imageset/icon_topic_attach.gif" width="14" height="18" alt="" title="" /> 
				<a href="download/file2e7e.php?id=4361">Not premultiplied. examples.zip</a> [1.15 KiB]
			</span><br />
			<span class="gensmall">Downloaded 198 times</span>
		

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
			<td><div class="gensmall" style="float: left;">&nbsp;<a href="memberliste3e9.html?mode=viewprofile&amp;u=856"><img src="styles/subsilver2/imageset/en/icon_user_profile.gif" alt="Profile" title="Profile" /></a> &nbsp;</div> <div class="gensmall" style="float: right;"><a href="postingb6bc.html?mode=quote&amp;f=17&amp;p=31114"><img src="styles/subsilver2/imageset/en/icon_post_quote.gif" alt="Reply with quote" title="Reply with quote" /></a> &nbsp;</div></td>
	
		</tr>

	<tr>
		<td class="spacer" colspan="2" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
	</tr>
	</table>

	<table class="tablebg" width="100%" cellspacing="1">
	<tr class="row2">

			<td align="center" valign="middle">
				<a name="p35179"></a>
				<b class="postauthor">Blokk888</b>
			</td>
			<td width="100%" height="25">
				<table width="100%" cellspacing="0">
				<tr>
				
					<td class="gensmall" width="100%"><div style="float: left;">&nbsp;<b>Post subject:</b> <a href="#p35179">Re: Premultiplied Alpha and not premultiplied images</a></div><div style="float: right;"><a href="viewtopic11fc.html?p=35179#p35179"><img src="styles/subsilver2/imageset/icon_post_target.gif" width="12" height="9" alt="Post" title="Post" /></a><b>Posted:</b> Tue Jan 02, 2018 11:53 am&nbsp;</div></td>
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
					<td><img src="download/file9de8.png?avatar=27227_1518797025.png" width="90" height="85" alt="User avatar" /></td>
				</tr>
			
				</table>

				<span class="postdetails">
					<br /><b>Joined:</b> Tue Nov 21, 2017 10:52 am<br /><b>Posts:</b> 73<br /><b>Location:</b> Liepaja, Latvia
				</span>

			</td>
			<td valign="top">
				<table width="100%" cellspacing="5">
				<tr>
					<td>
					

						<div class="postbody">thank</div>

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
			<td><div class="gensmall" style="float: left;">&nbsp;<a href="memberlist7ba5.html?mode=viewprofile&amp;u=27227"><img src="styles/subsilver2/imageset/en/icon_user_profile.gif" alt="Profile" title="Profile" /></a> &nbsp;</div> <div class="gensmall" style="float: right;"><a href="posting52d9.html?mode=quote&amp;f=17&amp;p=35179"><img src="styles/subsilver2/imageset/en/icon_post_quote.gif" alt="Reply with quote" title="Reply with quote" /></a> &nbsp;</div></td>
	
		</tr>

	<tr>
		<td class="spacer" colspan="2" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
	</tr>
	</table>

	<table class="tablebg" width="100%" cellspacing="1">
	<tr class="row1">

			<td align="center" valign="middle">
				<a name="p35181"></a>
				<b class="postauthor">juniper7</b>
			</td>
			<td width="100%" height="25">
				<table width="100%" cellspacing="0">
				<tr>
				
					<td class="gensmall" width="100%"><div style="float: left;">&nbsp;<b>Post subject:</b> <a href="#p35181">Re: Premultiplied Alpha and not premultiplied images</a></div><div style="float: right;"><a href="viewtopic2646.html?p=35181#p35181"><img src="styles/subsilver2/imageset/icon_post_target.gif" width="12" height="9" alt="Post" title="Post" /></a><b>Posted:</b> Tue Jan 02, 2018 3:56 pm&nbsp;</div></td>
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
					<td><img src="download/file63f2.jpg?avatar=856_1379385760.jpg" width="90" height="90" alt="User avatar" /></td>
				</tr>
			
				</table>

				<span class="postdetails">
					<br /><b>Joined:</b> Thu Jun 13, 2013 12:07 pm<br /><b>Posts:</b> 1014
				</span>

			</td>
			<td valign="top">
				<table width="100%" cellspacing="5">
				<tr>
					<td>
					

						<div class="postbody">I found a free program later, that can switch between premultiplied and not premultiplied.<br />It is called Blender. <br /><br />I never got around to trying the buttons I converted on an actual menu.<br />I had just used screenshots.<br /><br />Here is example of the shutdown button that got set correctly for CSM:<br /><br />; Shutdown button<br /><br />Shutdown_selection=19<br />Shutdown_jump_selection=19<br />Shutdown_search_selection=19<br />Shutdown_selection_slices_X=5,14,4,3,14,5<br />Shutdown_selection_slices_Y=5,14,5<br /><br />You can be the first to try it.</div>

					
						<br clear="all" /><br />

						<table class="tablebg" width="100%" cellspacing="1">
						<tr>
							<td class="row3"><b class="genmed">Attachments: </b></td>
						</tr>
						
							<tr>
								<td class="row2">
			<img src="download/fileaf9d.png?id=5131" alt="fixed premultiplied shutdown.png" /><br />
			<span class="gensmall">fixed premultiplied shutdown.png [ 1.52 KiB | Viewed 2123 times ]</span>
		

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
			<td><div class="gensmall" style="float: left;">&nbsp;<a href="memberliste3e9.html?mode=viewprofile&amp;u=856"><img src="styles/subsilver2/imageset/en/icon_user_profile.gif" alt="Profile" title="Profile" /></a> &nbsp;</div> <div class="gensmall" style="float: right;"><a href="posting7fae.html?mode=quote&amp;f=17&amp;p=35181"><img src="styles/subsilver2/imageset/en/icon_post_quote.gif" alt="Reply with quote" title="Reply with quote" /></a> &nbsp;</div></td>
	
		</tr>

	<tr>
		<td class="spacer" colspan="2" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
	</tr>
	</table>

	<table class="tablebg" width="100%" cellspacing="1">
	<tr class="row2">

			<td align="center" valign="middle">
				<a name="p35413"></a>
				<b class="postauthor">juniper7</b>
			</td>
			<td width="100%" height="25">
				<table width="100%" cellspacing="0">
				<tr>
				
					<td class="gensmall" width="100%"><div style="float: left;">&nbsp;<b>Post subject:</b> <a href="#p35413">Re: Premultiplied Alpha and not premultiplied images</a></div><div style="float: right;"><a href="viewtopic24ef.html?p=35413#p35413"><img src="styles/subsilver2/imageset/icon_post_target.gif" width="12" height="9" alt="Post" title="Post" /></a><b>Posted:</b> Sun Feb 11, 2018 4:20 pm&nbsp;</div></td>
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
					<td><img src="download/file63f2.jpg?avatar=856_1379385760.jpg" width="90" height="90" alt="User avatar" /></td>
				</tr>
			
				</table>

				<span class="postdetails">
					<br /><b>Joined:</b> Thu Jun 13, 2013 12:07 pm<br /><b>Posts:</b> 1014
				</span>

			</td>
			<td valign="top">
				<table width="100%" cellspacing="5">
				<tr>
					<td>
					

						<div class="postbody">More about Premultiplied/Straight<br /><br />Blender software is ok to convert either Straight or premultiplied image.<br />Just takes a bit of work.<br />Today I found thoriumknight from 2011:<br /><br /><!-- m --><a class="postlink" href="https://thoriumknight.deviantart.com/art/Create-Aero-Compatible-PNGs-V2-262526394">https://thoriumknight.deviantart.com/ar ... -262526394</a><!-- m --><br /><br />has a great software converter, that is very easy to use.<br />For all those images in example aero.msstyles<br />What this means is if you like some button and try and use it in Classic Shell skin, the converted image will look correct brightness.<br />See how the 2nd column transparent button looks brighter in the below picture. It corrected the RGB layer, so it matches like on real Windows Vista/7 start menu. <img src="images/smilies/icon_e_smile.gif" alt=":)" title="Smile" /><br /><br />I tried it it works.<br />I just had to force Windows 10 to run the program, as it thought it is harmful.<br />I checked it with Malwarebytes, and Windows Defender. No threats were found.</div>

					
						<br clear="all" /><br />

						<table class="tablebg" width="100%" cellspacing="1">
						<tr>
							<td class="row3"><b class="genmed">Attachments: </b></td>
						</tr>
						
							<tr>
								<td class="row2">
			<img src="download/file4a8b.png?id=5188" alt="His software in action.png" /><br />
			<span class="gensmall">His software in action.png [ 13.34 KiB | Viewed 1782 times ]</span>
		

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
			<td><div class="gensmall" style="float: left;">&nbsp;<a href="memberliste3e9.html?mode=viewprofile&amp;u=856"><img src="styles/subsilver2/imageset/en/icon_user_profile.gif" alt="Profile" title="Profile" /></a> &nbsp;</div> <div class="gensmall" style="float: right;"><a href="postinga525-2.html?mode=quote&amp;f=17&amp;p=35413"><img src="styles/subsilver2/imageset/en/icon_post_quote.gif" alt="Reply with quote" title="Reply with quote" /></a> &nbsp;</div></td>
	
		</tr>

	<tr>
		<td class="spacer" colspan="2" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
	</tr>
	</table>

	<table class="tablebg" width="100%" cellspacing="1">
	<tr class="row1">

			<td align="center" valign="middle">
				<a name="p35415"></a>
				<b class="postauthor">juniper7</b>
			</td>
			<td width="100%" height="25">
				<table width="100%" cellspacing="0">
				<tr>
				
					<td class="gensmall" width="100%"><div style="float: left;">&nbsp;<b>Post subject:</b> <a href="#p35415">Re: Premultiplied Alpha and not premultiplied images</a></div><div style="float: right;"><a href="viewtopicb8b6.html?p=35415#p35415"><img src="styles/subsilver2/imageset/icon_post_target.gif" width="12" height="9" alt="Post" title="Post" /></a><b>Posted:</b> Sun Feb 11, 2018 5:58 pm&nbsp;</div></td>
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
					<td><img src="download/file63f2.jpg?avatar=856_1379385760.jpg" width="90" height="90" alt="User avatar" /></td>
				</tr>
			
				</table>

				<span class="postdetails">
					<br /><b>Joined:</b> Thu Jun 13, 2013 12:07 pm<br /><b>Posts:</b> 1014
				</span>

			</td>
			<td valign="top">
				<table width="100%" cellspacing="5">
				<tr>
					<td>
					

						<div class="postbody">It makes the Vista taskbar on Classic Shell better looking <br />than using the unaltered one from MSstyles</div>

					
						<br clear="all" /><br />

						<table class="tablebg" width="100%" cellspacing="1">
						<tr>
							<td class="row3"><b class="genmed">Attachments: </b></td>
						</tr>
						
							<tr>
								<td class="row2">
			<img src="download/file3944.png?id=5191" alt="Vista taskbar converted to straight.png" /><br />
			<span class="gensmall">Vista taskbar converted to straight.png [ 327 Bytes | Viewed 1775 times ]</span>
		

		<br />
	</td>
							</tr>
						
							<tr>
								<td class="row1">
			<img src="download/fileaf0c.png?id=5190" alt="Vista taskbar untouched premultiplied.png" /><br />
			<span class="gensmall">Vista taskbar untouched premultiplied.png [ 378 Bytes | Viewed 1775 times ]</span>
		

		<br />
	</td>
							</tr>
						
							<tr>
								<td class="row2">
			<img src="download/filed500.png?id=5189" alt="Example taskbar better .png" /><br />
			<span class="gensmall">Example taskbar better .png [ 51.98 KiB | Viewed 1775 times ]</span>
		

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
			<td><div class="gensmall" style="float: left;">&nbsp;<a href="memberliste3e9.html?mode=viewprofile&amp;u=856"><img src="styles/subsilver2/imageset/en/icon_user_profile.gif" alt="Profile" title="Profile" /></a> &nbsp;</div> <div class="gensmall" style="float: right;"><a href="posting74a4-2.html?mode=quote&amp;f=17&amp;p=35415"><img src="styles/subsilver2/imageset/en/icon_post_quote.gif" alt="Reply with quote" title="Reply with quote" /></a> &nbsp;</div></td>
	
		</tr>

	<tr>
		<td class="spacer" colspan="2" height="1"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
	</tr>
	</table>

	<table width="100%" cellspacing="1" class="tablebg">
	<tr align="center">
		<td class="cat"><form name="viewtopic" method="post" action="http://www.classicshell.net/forum/viewtopic.php?f=17&amp;t=7243"><span class="gensmall">Display posts from previous:</span> <select name="st" id="st"><option value="0" selected="selected">All posts</option><option value="1">1 day</option><option value="7">7 days</option><option value="14">2 weeks</option><option value="30">1 month</option><option value="90">3 months</option><option value="180">6 months</option><option value="365">1 year</option></select>&nbsp;<span class="gensmall">Sort by</span> <select name="sk" id="sk"><option value="a">Author</option><option value="t" selected="selected">Post time</option><option value="s">Subject</option></select> <select name="sd" id="sd"><option value="a" selected="selected">Ascending</option><option value="d">Descending</option></select>&nbsp;<input class="btnlite" type="submit" value="Go" name="sort" /></form></td>
	</tr>
	</table>
	

	<table width="100%" cellspacing="1">
	<tr>
		<td align="left" valign="middle" nowrap="nowrap">
		<a href="posting2915.html?mode=post&amp;f=17"><img src="styles/subsilver2/imageset/en/button_topic_new.gif" alt="Post new topic" title="Post new topic" /></a>&nbsp;<a href="posting3689.html?mode=reply&amp;f=17&amp;t=7243"><img src="styles/subsilver2/imageset/en/button_topic_reply.gif" alt="Reply to topic" title="Reply to topic" /></a>
		</td>
		
			<td class="nav" valign="middle" nowrap="nowrap">&nbsp;Page <strong>1</strong> of <strong>1</strong><br /></td>
			<td class="gensmall" nowrap="nowrap">&nbsp;[ 5 posts ]&nbsp;</td>
			<td class="gensmall" width="100%" align="right" nowrap="nowrap"></td>
		
	</tr>
	</table>

</div>

<div id="pagefooter"></div>

<br clear="all" />
<table class="tablebg" width="100%" cellspacing="1" cellpadding="0" style="margin-top: 5px;">
	<tr>
		<td class="row1">
			<p class="breadcrumbs"><a href="index-2.html">Board index</a> &#187; <a href="viewforumf2fa.html?f=16">User Content</a> &#187; <a href="viewforum48ab.html?f=17">Start Menu Skins</a></p>
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
		<td class="row1"><p class="gensmall">Users browsing this forum: No registered users and 2 guests</p></td>
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
	<td><form method="get" name="search" action="http://www.classicshell.net/forum/search.php"><span class="gensmall">Search for:</span> <input class="post" type="text" name="keywords" size="20" /> <input class="btnlite" type="submit" value="Go" /><input type="hidden" name="t" value="7243" />
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
		
			<option value="20">&nbsp; &nbsp;Translations</option>
		
			<option value="16">User Content</option>
		
			<option value="17" selected="selected">&nbsp; &nbsp;Start Menu Skins</option>
		
			<option value="18">&nbsp; &nbsp;Start Buttons</option>
		
			<option value="21">&nbsp; &nbsp;Taskbar Skins</option>
		

		</select>&nbsp;<input class="btnlite" type="submit" value="Go" /></td>
	</tr>
	</table>

	</form>
</td>
</tr>
</table>


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

<!-- Mirrored from www.classicshell.net/forum/viewtopic.php?f=17&t=5655&view=next by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 08 Jun 2018 10:12:52 GMT -->
</html>