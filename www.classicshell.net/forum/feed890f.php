<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=12&amp;t=195" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2013-02-05T10:26:15-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=12&amp;t=195</id>
<entry>
<author><name><![CDATA[sqrt]]></name></author>
<updated>2013-02-05T10:26:15-07:00</updated>
<published>2013-02-05T10:26:15-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=195&amp;p=869#p869</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=195&amp;p=869#p869"/>
<title type="html"><![CDATA[Re: Cannot open Open the main menu option in option Programs]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=195&amp;p=869#p869"><![CDATA[
It's interesting, if I click on round start button and select an option &quot;<strong>Open main menu</strong>&quot; by clicking right mouse button, the folder <strong>Programms</strong> <em>C:\ProgramData\Microsoft\Windows\Start Menu</em> opens properly<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=259">sqrt</a> — Tue Feb 05, 2013 10:26 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2013-02-05T09:02:19-07:00</updated>
<published>2013-02-05T09:02:19-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=195&amp;p=864#p864</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=195&amp;p=864#p864"/>
<title type="html"><![CDATA[Re: Cannot open Open the main menu option in option Programs]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=195&amp;p=864#p864"><![CDATA[
Everything looks fine. It should work unless %ProgramData% is messed up. Open a command prompt and type &quot;set pro&quot;. See if ProgramData is listed there, and what is it set to.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Tue Feb 05, 2013 9:02 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[sqrt]]></name></author>
<updated>2013-02-05T02:50:07-07:00</updated>
<published>2013-02-05T02:50:07-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=195&amp;p=859#p859</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=195&amp;p=859#p859"/>
<title type="html"><![CDATA[Re: Cannot open Open the main menu option in option Programs]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=195&amp;p=859#p859"><![CDATA[
<div class="quotetitle">Ivo wrote:</div><div class="quotecontent"><br />I think the paths for the system folders like Start Menu or Programs are listed here:<br />HKEY_LOCAL_MACHINE\SOFTWARE\Microsoft\Windows\CurrentVersion\Explorer\User Shell Folders<br /><br />Maybe something has corrupted those paths.<br /></div><br /><br /><br />Perhaps all right there<br /><div class="codetitle"><b>Code:</b></div><div class="codecontent">Windows Registry Editor Version 5.00<br /><br />&#91;HKEY_LOCAL_MACHINE\SOFTWARE\Microsoft\Windows\CurrentVersion\Explorer\User Shell Folders&#93;<br />&quot;CommonVideo&quot;=hex(2):25,00,50,00,55,00,42,00,4c,00,49,00,43,00,25,00,5c,00,56,\<br />00,69,00,64,00,65,00,6f,00,73,00,00,00<br />&quot;{3D644C9B-1FB8-4f30-9B45-F670235F79C0}&quot;=hex(2):25,00,50,00,55,00,42,00,4c,00,\<br />49,00,43,00,25,00,5c,00,44,00,6f,00,77,00,6e,00,6c,00,6f,00,61,00,64,00,73,\<br />00,00,00<br />&quot;Common Documents&quot;=hex(2):25,00,50,00,55,00,42,00,4c,00,49,00,43,00,25,00,5c,\<br />00,44,00,6f,00,63,00,75,00,6d,00,65,00,6e,00,74,00,73,00,00,00<br />&quot;Common Startup&quot;=hex(2):25,00,50,00,72,00,6f,00,67,00,72,00,61,00,6d,00,44,00,\<br />61,00,74,00,61,00,25,00,5c,00,4d,00,69,00,63,00,72,00,6f,00,73,00,6f,00,66,\<br />00,74,00,5c,00,57,00,69,00,6e,00,64,00,6f,00,77,00,73,00,5c,00,53,00,74,00,\<br />61,00,72,00,74,00,20,00,4d,00,65,00,6e,00,75,00,5c,00,50,00,72,00,6f,00,67,\<br />00,72,00,61,00,6d,00,73,00,5c,00,53,00,74,00,61,00,72,00,74,00,75,00,70,00,\<br />00,00<br />&quot;Common AppData&quot;=hex(2):25,00,50,00,72,00,6f,00,67,00,72,00,61,00,6d,00,44,00,\<br />61,00,74,00,61,00,25,00,00,00<br />&quot;CommonPictures&quot;=hex(2):25,00,50,00,55,00,42,00,4c,00,49,00,43,00,25,00,5c,00,\<br />50,00,69,00,63,00,74,00,75,00,72,00,65,00,73,00,00,00<br />&quot;Common Desktop&quot;=hex(2):25,00,50,00,55,00,42,00,4c,00,49,00,43,00,25,00,5c,00,\<br />44,00,65,00,73,00,6b,00,74,00,6f,00,70,00,00,00<br />&quot;CommonMusic&quot;=hex(2):25,00,50,00,55,00,42,00,4c,00,49,00,43,00,25,00,5c,00,4d,\<br />00,75,00,73,00,69,00,63,00,00,00<br />&quot;Common Start Menu&quot;=hex(2):25,00,50,00,72,00,6f,00,67,00,72,00,61,00,6d,00,44,\<br />00,61,00,74,00,61,00,25,00,5c,00,4d,00,69,00,63,00,72,00,6f,00,73,00,6f,00,\<br />66,00,74,00,5c,00,57,00,69,00,6e,00,64,00,6f,00,77,00,73,00,5c,00,53,00,74,\<br />00,61,00,72,00,74,00,20,00,4d,00,65,00,6e,00,75,00,00,00<br />&quot;Common Programs&quot;=hex(2):25,00,50,00,72,00,6f,00,67,00,72,00,61,00,6d,00,44,00,\<br />61,00,74,00,61,00,25,00,5c,00,4d,00,69,00,63,00,72,00,6f,00,73,00,6f,00,66,\<br />00,74,00,5c,00,57,00,69,00,6e,00,64,00,6f,00,77,00,73,00,5c,00,53,00,74,00,\<br />61,00,72,00,74,00,20,00,4d,00,65,00,6e,00,75,00,5c,00,50,00,72,00,6f,00,67,\<br />00,72,00,61,00,6d,00,73,00,00,00<br />&quot;Common Templates&quot;=hex(2):25,00,50,00,72,00,6f,00,67,00,72,00,61,00,6d,00,44,\<br />00,61,00,74,00,61,00,25,00,5c,00,4d,00,69,00,63,00,72,00,6f,00,73,00,6f,00,\<br />66,00,74,00,5c,00,57,00,69,00,6e,00,64,00,6f,00,77,00,73,00,5c,00,54,00,65,\<br />00,6d,00,70,00,6c,00,61,00,74,00,65,00,73,00,00,00<br /><br /><br /></div><br /><div class="codetitle"><b>Code:</b></div><div class="codecontent">Windows Registry Editor Version 5.00<br /><br />&#91;HKEY_CURRENT_USER\Software\IvoSoft&#93;<br /><br />&#91;HKEY_CURRENT_USER\Software\IvoSoft\ClassicExplorer&#93;<br />&quot;ShowedToolbar&quot;=dword:00000001<br />&quot;NewLine&quot;=dword:00000000<br /><br />&#91;HKEY_CURRENT_USER\Software\IvoSoft\ClassicIE9&#93;<br />&quot;CSettingsDlg&quot;=hex:7a,01,00,00,d1,00,00,00,00,00,00,00,00,00,00,00,aa,0f,00,00,\<br />01,00,06,6e<br /><br />&#91;HKEY_CURRENT_USER\Software\IvoSoft\ClassicShell&#93;<br />&quot;LastUpdateTime&quot;=dword:00371ec3<br />&quot;Language&quot;=&quot;ru-RU&quot;<br /><br />&#91;HKEY_CURRENT_USER\Software\IvoSoft\ClassicStartMenu&#93;<br />&quot;ShowedStyle&quot;=dword:00000001<br />&quot;DefaultMenuStyle&quot;=&quot;XP&quot;<br />&quot;CSettingsDlg&quot;=hex:00,00,00,00,00,00,00,00,00,00,00,00,00,00,00,00,36,0d,00,00,\<br />00,00,00,00<br />&quot;UserFiles&quot;=&quot;Hide&quot;<br />&quot;UserPictures&quot;=&quot;Hide&quot;<br />&quot;Printers&quot;=&quot;Hide&quot;<br />&quot;Undock&quot;=dword:00000001<br />&quot;RecentPrograms&quot;=dword:00000000<br />&quot;Skin1&quot;=&quot;Windows XP Luna&quot;<br />&quot;SkinVariation1&quot;=&quot;&quot;<br />&quot;SkinOptions1&quot;=&quot;5D3248DD|1FC64124|E55CEDD2|C26EAF5D|86F3669D|5225DC46|&quot;<br />&quot;Network&quot;=&quot;Hide&quot;<br />&quot;SkipMetro&quot;=dword:00000001<br />&quot;DisableHotCorner&quot;=&quot;DisableNone&quot;<br />&quot;StartButtonType&quot;=&quot;AeroButton&quot;<br />&quot;UserDocuments&quot;=&quot;Hide&quot;<br />&quot;ItemRanks&quot;=hex:1f,98,bc,00,01,00,00,00,95,77,d2,02,09,00,00,00,d1,84,ad,08,01,\<br />00,00,00,3d,1e,e2,08,1d,00,00,00,1d,17,08,09,01,00,00,00,b1,d2,d8,0d,01,00,\<br />00,00,c4,13,a2,0e,01,00,00,00,b7,79,d7,10,17,00,00,00,cd,43,d3,11,01,00,00,\<br />00,cc,76,c6,12,02,00,00,00,35,e8,8a,14,01,00,00,00,40,40,b2,14,02,00,00,00,\<br />54,4b,53,15,01,00,00,00,ae,1c,2f,19,05,00,00,00,00,ab,1c,1b,01,00,00,00,18,\<br />fc,06,1d,01,00,00,00,f0,ef,2b,1d,01,00,00,00,18,ba,92,1f,01,00,00,00,7f,67,\<br />08,21,01,00,00,00,fe,f1,d4,28,0f,00,00,00,9c,11,d1,2a,02,00,00,00,15,49,f6,\<br />2a,02,00,00,00,6f,70,a4,2b,01,00,00,00,33,d9,fd,2b,04,00,00,00,8c,6e,ca,2c,\<br />04,00,00,00,e5,42,81,2d,01,00,00,00,4b,69,a9,30,01,00,00,00,ac,63,18,31,01,\<br />00,00,00,31,d6,00,32,01,00,00,00,19,f6,f6,35,02,00,00,00,5a,45,6a,38,01,00,\<br />00,00,4e,f5,79,38,01,00,00,00,45,46,f9,39,01,00,00,00,a9,ba,b4,3a,01,00,00,\<br />00,be,42,a7,3c,01,00,00,00,d7,ab,32,41,01,00,00,00,bf,16,b8,44,01,00,00,00,\<br />74,b5,c8,44,01,00,00,00,d8,9d,16,48,01,00,00,00,85,66,98,48,01,00,00,00,a6,\<br />2f,dc,4b,03,00,00,00,67,6c,d7,4e,0a,00,00,00,ab,71,20,50,0b,00,00,00,bf,12,\<br />cc,51,01,00,00,00,29,e4,54,53,03,00,00,00,4f,75,da,53,06,00,00,00,8e,ce,61,\<br />59,01,00,00,00,e5,0f,41,5b,03,00,00,00,3b,ff,67,5b,01,00,00,00,6f,bc,98,5d,\<br />16,00,00,00,c0,8d,8e,5f,03,00,00,00,12,35,b7,60,22,00,00,00,38,bf,62,61,02,\<br />00,00,00,e0,c5,9b,66,01,00,00,00,09,40,5b,67,01,00,00,00,88,6a,cb,69,01,00,\<br />00,00,8e,ef,3c,6a,04,00,00,00,59,40,b7,6a,02,00,00,00,00,66,77,6b,06,00,00,\<br />00,4b,9f,d9,6b,01,00,00,00,66,d7,f1,6b,0d,00,00,00,ab,77,13,6c,02,00,00,00,\<br />fd,99,6a,6c,03,00,00,00,c8,b5,77,71,01,00,00,00,b5,6c,44,74,01,00,00,00,b6,\<br />05,5f,75,01,00,00,00,3a,e8,fa,76,01,00,00,00,43,e5,fe,78,01,00,00,00,fe,00,\<br />d1,7a,01,00,00,00,ff,62,aa,7d,01,00,00,00,1c,ea,95,7f,01,00,00,00,c0,35,f7,\<br />7f,01,00,00,00,ee,00,fd,84,01,00,00,00,7b,af,b9,86,05,00,00,00,e1,1f,9f,8d,\<br />01,00,00,00,bc,4a,92,8e,01,00,00,00,88,d1,ea,8e,03,00,00,00,7f,e9,ed,91,01,\<br />00,00,00,0f,7e,f5,98,01,00,00,00,82,f1,f4,99,01,00,00,00,c7,14,35,9a,03,00,\<br />00,00,bf,95,f8,9a,20,00,00,00,19,63,7d,9d,01,00,00,00,3b,fa,65,9e,03,00,00,\<br />00,22,ce,e6,9e,02,00,00,00,73,cf,52,a4,05,00,00,00,c2,04,73,a4,02,00,00,00,\<br />de,c5,5d,a5,01,00,00,00,8b,9f,77,a5,01,00,00,00,0a,e5,f3,a5,01,00,00,00,2d,\<br />da,2d,a9,01,00,00,00,81,69,44,ac,03,00,00,00,f9,42,9a,ac,01,00,00,00,e4,29,\<br />bc,ac,01,00,00,00,04,d2,da,ac,01,00,00,00,95,06,fa,ae,03,00,00,00,89,25,5a,\<br />b0,01,00,00,00,fd,b3,3a,b2,01,00,00,00,7f,f4,0e,b4,02,00,00,00,e5,78,2f,b5,\<br />02,00,00,00,14,e3,39,b5,01,00,00,00,9e,41,05,b7,01,00,00,00,24,93,e7,b7,01,\<br />00,00,00,89,f8,2a,bb,01,00,00,00,a4,1d,b6,be,01,00,00,00,65,28,be,bf,01,00,\<br />00,00,36,0c,73,c0,01,00,00,00,35,38,23,c1,02,00,00,00,5e,28,14,c2,0d,00,00,\<br />00,b4,29,45,c2,02,00,00,00,96,2e,07,c3,02,00,00,00,fc,11,46,c3,01,00,00,00,\<br />3c,ff,a3,c3,01,00,00,00,97,4d,0b,c4,08,00,00,00,08,62,7e,c9,01,00,00,00,4b,\<br />32,a9,c9,01,00,00,00,29,4c,98,ca,11,00,00,00,3f,01,c3,d0,01,00,00,00,a3,81,\<br />e2,d0,01,00,00,00,6b,d2,28,d4,48,00,00,00,a4,a1,1e,d5,02,00,00,00,d5,6f,ab,\<br />d5,01,00,00,00,51,05,67,d6,01,00,00,00,f7,b9,25,d8,01,00,00,00,13,6e,41,d8,\<br />01,00,00,00,2c,fd,cf,dc,02,00,00,00,ea,cd,67,de,03,00,00,00,77,e1,85,df,03,\<br />00,00,00,32,ed,6b,e3,01,00,00,00,69,86,76,e4,01,00,00,00,07,62,ad,e6,01,00,\<br />00,00,cf,fc,d9,e6,14,00,00,00,3d,5f,b0,ee,2a,00,00,00,06,dc,4e,ef,01,00,00,\<br />00,77,86,38,f0,07,00,00,00,a1,12,4f,f0,01,00,00,00,0f,2d,85,f2,01,00,00,00,\<br />df,f4,d0,f2,03,00,00,00,a6,83,01,f6,04,00,00,00,e5,d1,c6,f7,02,00,00,00,d2,\<br />2e,35,f8,01,00,00,00,8f,6a,20,f9,01,00,00,00,ef,3b,7e,fa,48,00,00,00,11,d7,\<br />c8,fc,01,00,00,00,53,83,f9,ff,03,00,00,00<br />&quot;Computer&quot;=&quot;Show&quot;<br />&quot;StartButtonPath&quot;=&quot;%USERPROFILE%\\Documents\\start.bmp&quot;<br />&quot;SearchBox&quot;=&quot;Hide&quot;<br />&quot;CascadingMenu&quot;=dword:00000001<br />&quot;Documents&quot;=&quot;Hide&quot;<br />&quot;ControlPanel&quot;=&quot;Show&quot;<br />&quot;MenuDelay&quot;=dword:00000064<br />&quot;CEditCustomItemDlg&quot;=hex:d5,01,00,00,c2,00,00,00,00,00,00,00,00,00,00,00<br /><br />&#91;HKEY_CURRENT_USER\Software\IvoSoft\ClassicStartMenu\Order&#93;<br />&quot;Order&quot;=hex:6b,d2,28,d4,2c,e7,dc,3b,27,6a,f2,5a,90,59,35,b8,02,46,36,26,71,b5,\<br />6e,95,48,b6,ad,8f,43,a2,3d,b1,5a,9c,0d,30,0d,46,38,2e,64,9c,ca,df,5f,bb,26,\<br />60,36,89,99,fb,a9,06,a3,9a,00,f5,42,3a,7b,f3,71,b6,56,6b,05,96,b7,79,d7,10,\<br />e0,dd,7f,53,1c,1d,9c,f6,b8,01,94,f2,d8,fe,e9,40,c5,9d,1c,81<br /><br />&#91;HKEY_CURRENT_USER\Software\IvoSoft\ClassicStartMenu\Order\&amp;Программы&#93;<br />&quot;Order&quot;=hex:4f,54,55,41<br /><br />&#91;HKEY_CURRENT_USER\Software\IvoSoft\ClassicStartMenu\Order\&amp;Программы\A&#93;<br />&quot;Order&quot;=hex:4f,54,55,41<br /><br />&#91;HKEY_CURRENT_USER\Software\IvoSoft\ClassicStartMenu\Order\&amp;Программы\B&#93;<br />&quot;Order&quot;=hex:4f,54,55,41<br /><br />&#91;HKEY_CURRENT_USER\Software\IvoSoft\ClassicStartMenu\Order\&amp;Программы\C&#93;<br />&quot;Order&quot;=hex:4f,54,55,41<br /><br />&#91;HKEY_CURRENT_USER\Software\IvoSoft\ClassicStartMenu\Order\&amp;Программы\D&#93;<br />&quot;Order&quot;=hex:4f,54,55,41<br /><br />&#91;HKEY_CURRENT_USER\Software\IvoSoft\ClassicStartMenu\Order\&amp;Программы\D\Debugging Tools for Windows (X86)&#93;<br />&quot;Order&quot;=hex:7d,50,5c,7d,b3,ad,29,17,44,33,ff,6d,e1,ab,35,8a<br /><br />&#91;HKEY_CURRENT_USER\Software\IvoSoft\ClassicStartMenu\Order\&amp;Программы\F&#93;<br />&quot;Order&quot;=hex:4f,54,55,41<br /><br />&#91;HKEY_CURRENT_USER\Software\IvoSoft\ClassicStartMenu\Order\&amp;Программы\G&#93;<br />&quot;Order&quot;=hex:4f,54,55,41<br /><br />&#91;HKEY_CURRENT_USER\Software\IvoSoft\ClassicStartMenu\Order\&amp;Программы\H&#93;<br />&quot;Order&quot;=hex:c5,9d,1c,81,58,74,1e,68<br /><br />&#91;HKEY_CURRENT_USER\Software\IvoSoft\ClassicStartMenu\Order\&amp;Программы\I&#93;<br />&quot;Order&quot;=hex:4f,54,55,41<br /><br />&#91;HKEY_CURRENT_USER\Software\IvoSoft\ClassicStartMenu\Order\&amp;Программы\J&#93;<br />&quot;Order&quot;=hex:c5,9d,1c,81,59,11,e5,cf<br /><br />&#91;HKEY_CURRENT_USER\Software\IvoSoft\ClassicStartMenu\Order\&amp;Программы\K&#93;<br />&quot;Order&quot;=hex:c5,9d,1c,81,e3,db,8c,2d<br /><br />&#91;HKEY_CURRENT_USER\Software\IvoSoft\ClassicStartMenu\Order\&amp;Программы\L&#93;<br />&quot;Order&quot;=hex:1f,46,93,58<br /><br />&#91;HKEY_CURRENT_USER\Software\IvoSoft\ClassicStartMenu\Order\&amp;Программы\M&#93;<br />&quot;Order&quot;=hex:4f,54,55,41<br /><br />&#91;HKEY_CURRENT_USER\Software\IvoSoft\ClassicStartMenu\Order\&amp;Программы\McFunSoft Video Convert Master (RePack by SkyTo)&#93;<br />&quot;Order&quot;=hex:4f,9e,f2,0a,9e,c4,0b,14<br /><br />&#91;HKEY_CURRENT_USER\Software\IvoSoft\ClassicStartMenu\Order\&amp;Программы\MegaFon Modem&#93;<br />&quot;Order&quot;=hex:d5,ea,ea,8e,f8,a4,f1,c5<br /><br />&#91;HKEY_CURRENT_USER\Software\IvoSoft\ClassicStartMenu\Order\&amp;Программы\MiniTool Partition Wizard Server Edition 7.6&#93;<br />&quot;Order&quot;=hex:b6,ca,6d,9c,9c,10,b3,ed,86,b5,2a,ad,3a,9f,b4,4c<br /><br />&#91;HKEY_CURRENT_USER\Software\IvoSoft\ClassicStartMenu\Order\&amp;Программы\Moyea&#93;<br />&quot;Order&quot;=hex:67,95,d8,76<br /><br />&#91;HKEY_CURRENT_USER\Software\IvoSoft\ClassicStartMenu\Order\&amp;Программы\Moyea\FLV Editor Lite&#93;<br />&quot;Order&quot;=hex:2d,22,e5,00,c5,9d,1c,81,a3,0a,76,bf,36,41,0a,6c,e9,32,d1,20<br /><br />&#91;HKEY_CURRENT_USER\Software\IvoSoft\ClassicStartMenu\Order\&amp;Программы\N&#93;<br />&quot;Order&quot;=hex:1c,1f,6f,9a,c5,9d,1c,81,43,d0,30,36<br /><br />&#91;HKEY_CURRENT_USER\Software\IvoSoft\ClassicStartMenu\Order\&amp;Программы\O&#93;<br />&quot;Order&quot;=hex:7e,f7,07,5e,66,87,f5,ab,ea,29,d1,e3,ab,97,19,26<br /><br />&#91;HKEY_CURRENT_USER\Software\IvoSoft\ClassicStartMenu\Order\&amp;Программы\P&#93;<br />&quot;Order&quot;=hex:ed,87,66,a0,ab,5c,a0,29,af,c9,a6,4d,7f,67,bb,a9,42,d2,1d,bc,4f,1d,\<br />9e,ca,6a,87,7c,52,1d,2d,ca,7a<br /><br />&#91;HKEY_CURRENT_USER\Software\IvoSoft\ClassicStartMenu\Order\&amp;Программы\PowerTools Lite 2013&#93;<br />&quot;Order&quot;=hex:e8,7d,5b,de,f2,b3,89,22,49,5e,a8,59,e8,8b,4b,4f<br /><br />&#91;HKEY_CURRENT_USER\Software\IvoSoft\ClassicStartMenu\Order\&amp;Программы\PROMT&#93;<br />&quot;Order&quot;=hex:21,0b,b1,64<br /><br />&#91;HKEY_CURRENT_USER\Software\IvoSoft\ClassicStartMenu\Order\&amp;Программы\S&#93;<br />&quot;Order&quot;=hex:80,45,6b,84,fc,ac,f5,5c,9a,19,24,74,a3,c8,fb,ea,bd,e7,53,28,6e,38,\<br />fb,c9,6c,3d,c4,b8,a4,cf,5b,2f,75,39,0b,a1,52,5f,bf,c5,a5,d4,22,17,0a,2c,f9,\<br />7e,13,72,b8,bf,d9,4d,be,18,48,bd,2b,02,c1,06,b5,15,fd,54,c8,8f,a2,4a,02,2c<br /><br />&#91;HKEY_CURRENT_USER\Software\IvoSoft\ClassicStartMenu\Order\&amp;Программы\T&#93;<br />&quot;Order&quot;=hex:50,90,b0,2d,09,5b,14,ac,7d,84,c1,d9,5e,28,14,c2,01,61,19,3c,b4,38,\<br />d5,49,fd,11,69,03,cf,75,4e,c2,1f,4a,80,5c<br /><br />&#91;HKEY_CURRENT_USER\Software\IvoSoft\ClassicStartMenu\Order\&amp;Программы\U&#93;<br />&quot;Order&quot;=hex:c3,13,91,76,a7,70,bc,28,3b,84,f8,77,ea,2b,0d,36,93,d1,dd,ea<br /><br />&#91;HKEY_CURRENT_USER\Software\IvoSoft\ClassicStartMenu\Order\&amp;Программы\V&#93;<br />&quot;Order&quot;=hex:c0,dc,bf,87,4f,9e,f2,0a,c5,9d,1c,81,f2,0e,0b,14,fa,31,46,b1,84,d7,\<br />73,0c,79,cb,be,f1,a5,5e,54,b7,4f,a6,61,41<br /><br />&#91;HKEY_CURRENT_USER\Software\IvoSoft\ClassicStartMenu\Order\&amp;Программы\W&#93;<br />&quot;Order&quot;=hex:08,a1,f0,5b,ac,78,f2,92,f8,2f,a9,5e,c6,2a,08,fb,d9,70,c1,c9,b9,fa,\<br />c8,d7,24,9e,15,0c,c5,9d,1c,81,6d,18,fa,e7,a3,f0,e6,fd,0b,61,6a,29,11,76,09,\<br />80<br /><br />&#91;HKEY_CURRENT_USER\Software\IvoSoft\ClassicStartMenu\Order\&amp;Программы\W\Windows 8 Enterprise 9200 x86 ru (Microsoft)&#93;<br />&quot;Order&quot;=hex:a8,0e,9a,3b,ea,7d,3c,51,14,55,50,76,84,96,80,6e,9d,b2,c4,ec,98,e5,\<br />96,8b,61,2f,a5,22,fd,cc,3f,e6,a0,de,a5,8c,12,c9,85,83,ae,40,49,49,ab,33,e6,\<br />50,f7,f6,23,46,02,6b,c8,23,04,52,f7,78,33,80,ac,86,c3,0d,04,43,0a,e7,ef,b4,\<br />6d,18,fa,e7,c5,9d,1c,81,0d,34,75,d2,f9,2e,45,ff,c4,1a,2b,fb,6d,03,13,78,4d,\<br />1d,c6,fe,17,bf,8f,19,0f,51,87,af,bb,b2,2c,4e,c4,32,09,a9,19,d7,91,ee,ec,d8,\<br />9e,f0,ab,e0,fc,4f,d1,ca,b0,cc,e5,f7,a1,63,8e,45,32,a5,81,01,eb,b4,65,5c,6d,\<br />d3,3f,62,de,91,9b,ab,6e,e0,1c,c3,2d,7a,a8,e9,ed,61,da,8e,da,96,54,73,ab,04,\<br />1e,d4,cf,b9,2f,b0,42,39,ae,83,2c,07,7d,bc,38,95,fb,8d,a0,fa,08,0b,27,8f,64,\<br />38,4f,d9,e5,9e,7a,d7,a3,0a,76,bf,31,f0,69,2b,90,1f,82,09,87,ff,ac,cc,90,d0,\<br />94,8a,fe,b3,95,55,84,6e,0f,f6,0e,c8,41,ab,07,3c,60,d9,e1,e1,fa,e0,05,ab,f9,\<br />c3<br /><br /></div><br /><br />I want to ask, is it right? <div class="codetitle"><b>Code:</b></div><div class="codecontent">&#91;b&#93;&#91;u&#93;&amp;&#91;/u&#93;&#91;/b&#93;Программы </div> (ampersand)<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=259">sqrt</a> — Tue Feb 05, 2013 2:50 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2013-02-04T15:18:57-07:00</updated>
<published>2013-02-04T15:18:57-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=195&amp;p=850#p850</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=195&amp;p=850#p850"/>
<title type="html"><![CDATA[Re: Cannot open Open the main menu option in option Programs]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=195&amp;p=850#p850"><![CDATA[
I think the paths for the system folders like Start Menu or Programs are listed here:<br />HKEY_LOCAL_MACHINE\SOFTWARE\Microsoft\Windows\CurrentVersion\Explorer\User Shell Folders<br /><br />Maybe something has corrupted those paths.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Mon Feb 04, 2013 3:18 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[sqrt]]></name></author>
<updated>2013-02-04T15:13:56-07:00</updated>
<published>2013-02-04T15:13:56-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=195&amp;p=849#p849</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=195&amp;p=849#p849"/>
<title type="html"><![CDATA[Re: Cannot open Open the main menu option in option Programs]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=195&amp;p=849#p849"><![CDATA[
<div class="quotetitle">Ivo wrote:</div><div class="quotecontent"><br />The folder should be here: C:\ProgramData\Microsoft\Windows\Start Menu\Programs<br />Check if that folder exists.<br /></div> <br />That folder exists<br /><br /><div class="quotetitle">Ivo wrote:</div><div class="quotecontent"><br />Also, right-click on the start button and see if that menu command works there. It should open C:\ProgramData\Microsoft\Windows\Start Menu<br /></div> <br />It's a difficult variant and all worked properly at first time after installing and after 2 months has been appearing that problem. When I'm clicking this option (<strong>open main menu</strong>), I become no answer and this folder doesn't open.<br /><br /><div class="quotetitle">Ivo wrote:</div><div class="quotecontent"><br />BTW, which version of Windows are you using?<br /></div><br /><br />Windows 8 ent ru x86 final<br />I want to ask, where may change in windows registry to fix that bug?<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=259">sqrt</a> — Mon Feb 04, 2013 3:13 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ivo]]></name></author>
<updated>2013-02-04T15:03:29-07:00</updated>
<published>2013-02-04T15:03:29-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=195&amp;p=848#p848</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=195&amp;p=848#p848"/>
<title type="html"><![CDATA[Re: Cannot open Open the main menu option in option Programs]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=195&amp;p=848#p848"><![CDATA[
The folder should be here: C:\ProgramData\Microsoft\Windows\Start Menu\Programs<br />Check if that folder exists.<br />Also, right-click on the start button and see if that menu command works there. It should open C:\ProgramData\Microsoft\Windows\Start Menu<br /><br />BTW, which version of Windows are you using?<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=2">Ivo</a> — Mon Feb 04, 2013 3:03 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[sqrt]]></name></author>
<updated>2013-02-04T14:57:11-07:00</updated>
<published>2013-02-04T14:57:11-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=195&amp;p=847#p847</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=195&amp;p=847#p847"/>
<title type="html"><![CDATA[Cannot open Open the main menu option in option Programs]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=195&amp;p=847#p847"><![CDATA[
Cannot open <strong>Open the main menu</strong> option in option Programs. What and where should do in regitstry to resolve this problem? Installed version is 3.6.5<br /><img src="http://www.classicshell.net/forum/https://picasaweb.google.com/lh/photo/lzk6fv7W24iMzKNF9pwN-LxoWAUFaevzpAlxJ8tyj1M?feat=directlink" alt="" /><p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=259">sqrt</a> — Mon Feb 04, 2013 2:57 pm</p><hr />
]]></content>
</entry>
</feed>