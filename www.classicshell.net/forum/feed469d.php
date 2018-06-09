<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.classicshell.net/forum/feed.php?f=12&amp;t=7781" />

<title>Classic Shell</title>
<subtitle>Classic Shell support forum</subtitle>
<link href="http://www.classicshell.net/forum/index.php" />
<updated>2017-07-29T05:35:21-07:00</updated>

<author><name><![CDATA[Classic Shell]]></name></author>
<id>http://www.classicshell.net/forum/feed.php?f=12&amp;t=7781</id>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2017-07-29T05:35:21-07:00</updated>
<published>2017-07-29T05:35:21-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7781&amp;p=33517#p33517</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7781&amp;p=33517#p33517"/>
<title type="html"><![CDATA[Re: Classic Start Menu crashes after update to Win 10 Ver 17]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7781&amp;p=33517#p33517"><![CDATA[
The link are not in my reply but it's my signature that appears below every post I make.<br /><br />If your crashes are gone, it means you already found the right driver and don't need to do anything else. Even without Classic Shell, simply opening Control Panel crashes Explorer.exe if the buggy driver file is present. If you can open Control Panel or use the Classic Start menu without crashes, preserve that driver for future use with Windows 10.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Sat Jul 29, 2017 5:35 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[MikeMeinz]]></name></author>
<updated>2017-07-29T04:39:56-07:00</updated>
<published>2017-07-29T04:39:56-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7781&amp;p=33516#p33516</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7781&amp;p=33516#p33516"/>
<title type="html"><![CDATA[Re: Classic Start Menu crashes after update to Win 10 Ver 17]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7781&amp;p=33516#p33516"><![CDATA[
I checked the HP Software and Driver Downloads page for my PC and found that the latest audio driver was dated Nov 30, 2012 and was for Windows 8.1 not Windows 10. Nevertheless, I downloaded and installed that version and restarted. After the restart, the Windows Troubleshooter ran and asked me to restart again. After that restart, I installed Classic Start Menu Version 4.3.0 and am no longer experiencing the problem.<br /><br />I am a bit nervous about running a 2012 version of the audio driver. When you say &quot;get the updated or fixed one&quot;, I wonder where I would get that other than from the HP Software and Downloads page for my PC. <br /><br />What do the Compare Start Menu and Read the Search Box Usage Guide links in your reply have to do with the problem that I reported? What should I be finding there to help with this issue?<br /><br />Thanks.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=22316">MikeMeinz</a> — Sat Jul 29, 2017 4:39 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gaurav]]></name></author>
<updated>2017-07-28T20:05:32-07:00</updated>
<published>2017-07-28T20:05:32-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7781&amp;p=33513#p33513</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7781&amp;p=33513#p33513"/>
<title type="html"><![CDATA[Re: Classic Start Menu crashes after update to Win 10 Ver 17]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7781&amp;p=33513#p33513"><![CDATA[
On PCs which have IDT audio, the audio driver (IDTNC64.cpl file to be specific) is known to be incompatible with the latest Windows 10. It can cause Explorer/Classic Shell to crash. Uninstall IDT audio driver or get the updated fixed one. Simply removing IDTNC64.cpl should fix the crash too.<p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=54">Gaurav</a> — Fri Jul 28, 2017 8:05 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[MikeMeinz]]></name></author>
<updated>2017-07-28T16:57:10-07:00</updated>
<published>2017-07-28T16:57:10-07:00</published>
<id>http://www.classicshell.net/forum/viewtopic.php?t=7781&amp;p=33512#p33512</id>
<link href="http://www.classicshell.net/forum/viewtopic.php?t=7781&amp;p=33512#p33512"/>
<title type="html"><![CDATA[Classic Start Menu crashes after update to Win 10 Ver 1703]]></title>

<content type="html" xml:base="http://www.classicshell.net/forum/viewtopic.php?t=7781&amp;p=33512#p33512"><![CDATA[
After updating to Windows 10 Version 1703 (OS Build 15063.483):<br /><blockquote class="editor"><br />1. ClassicStartMenu keeps crashing and restarting.<br />2. When started, Control Panel crashes after a couple of seconds.<br /></blockquote><br />Uninstalled and reinstalled version 4.3.0 with same results.<br /><br />Zip of multiple crashdumps is attached.<br /><br /><strong><span style="text-decoration: underline">Information from Event log:</span></strong><br /><br /><div class="codetitle"><b>Code:</b></div><div class="codecontent">Fault bucket 120787582459, type 4<br />Event Name: APPCRASH<br />Response: Not available<br />Cab Id: 0<br /><br /><br />Problem signature:<br />P1: explorer.exe<br />P2: 10.0.15063.447<br />P3: 951324bb<br />P4: IDTNC64.cpl<br />P5: 1.0.6425.0<br />P6: 5031ade3<br />P7: c0000005<br />P8: 0000000000001154<br />P9: <br />P10: <br /><br /><br />Attached files:<br />\\?\C:\ProgramData\Microsoft\Windows\WER\Temp\WER1716.tmp.WERInternalMetadata.xml<br /><br /><br />These files may be available here:<br />C:\ProgramData\Microsoft\Windows\WER\ReportArchive\AppCrash_explorer.exe_d696cf2cf02e7f852e723bad2f99691b11e77_10d58a87_083d257e<br /><br /><br />Analysis symbol: <br />Rechecking for solution: 0<br />Report Id: 8e62085b-1bb1-4347-af95-b30565f4891b<br />Report Status: 268435456<br />Hashed bucket: 009e4a076c788e6df211995c46fa334e</div><br /><br /><blockquote class="editor"><br /><strong><span style="text-decoration: underline">C:\ProgramData\Microsoft\Windows\WER\Temp\WER1716.tmp.WERInternalMetadata.xml contents:</span></strong><br /><div class="codetitle"><b>Code:</b></div><div class="codecontent">&lt;?xml version=&quot;1.0&quot; encoding=&quot;UTF-16&quot;?&gt;<br />&lt;WERReportMetadata&gt;<br />&lt;OSVersionInformation&gt;<br />&lt;WindowsNTVersion&gt;10.0&lt;/WindowsNTVersion&gt;<br />&lt;Build&gt;15063&lt;/Build&gt;<br />&lt;Product&gt;(0x30): Windows 10 Pro&lt;/Product&gt;<br />&lt;Edition&gt;Professional&lt;/Edition&gt;<br />&lt;BuildString&gt;15063.483.amd64fre.rs2_release.170317-1834&lt;/BuildString&gt;<br />&lt;Revision&gt;483&lt;/Revision&gt;<br />&lt;Flavor&gt;Multiprocessor Free&lt;/Flavor&gt;<br />&lt;Architecture&gt;X64&lt;/Architecture&gt;<br />&lt;LCID&gt;1033&lt;/LCID&gt;<br />&lt;/OSVersionInformation&gt;<br />&lt;ProblemSignatures&gt;<br />&lt;EventType&gt;APPCRASH&lt;/EventType&gt;<br />&lt;Parameter0&gt;explorer.exe&lt;/Parameter0&gt;<br />&lt;Parameter1&gt;10.0.15063.447&lt;/Parameter1&gt;<br />&lt;Parameter2&gt;951324bb&lt;/Parameter2&gt;<br />&lt;Parameter3&gt;IDTNC64.cpl&lt;/Parameter3&gt;<br />&lt;Parameter4&gt;1.0.6425.0&lt;/Parameter4&gt;<br />&lt;Parameter5&gt;5031ade3&lt;/Parameter5&gt;<br />&lt;Parameter6&gt;c0000005&lt;/Parameter6&gt;<br />&lt;Parameter7&gt;0000000000001154&lt;/Parameter7&gt;<br />&lt;/ProblemSignatures&gt;<br />&lt;DynamicSignatures&gt;<br />&lt;Parameter1&gt;10.0.15063.2.0.0.256.48&lt;/Parameter1&gt;<br />&lt;Parameter2&gt;1033&lt;/Parameter2&gt;<br />&lt;Parameter22&gt;91cf&lt;/Parameter22&gt;<br />&lt;Parameter23&gt;91cfa88c7bc38c4ae77de3b640968976&lt;/Parameter23&gt;<br />&lt;Parameter24&gt;81ee&lt;/Parameter24&gt;<br />&lt;Parameter25&gt;81ee1a0a9a8dcbbc7ec16c4c78da6de6&lt;/Parameter25&gt;<br />&lt;/DynamicSignatures&gt;<br />&lt;SystemInformation&gt;<br />&lt;MID&gt;4D5FFDD5-B8D0-464D-96C4-894049ECCC91&lt;/MID&gt;<br />&lt;MarkerFile&gt;103C_HP_cNB_ENVY dv7 Notebook PC_Y5335KV_0U_Q2CE2520PK1_EFU1012357BIS-B2A_4A_I181F_SHP_V52.24_BF.22_T121102_W848-0_L409_M16274_J750_7Intel_86A9_92.70_#121226_N10EC8168;80860887_(B6B77AV)_XMOBILE_CN10_Z&lt;/MarkerFile&gt;<br />&lt;SystemManufacturer&gt;Hewlett-Packard&lt;/SystemManufacturer&gt;<br />&lt;SystemProductName&gt;HP ENVY dv7 Notebook PC&lt;/SystemProductName&gt;<br />&lt;BIOSVersion&gt;F.2D&lt;/BIOSVersion&gt;<br />&lt;OSInstallDate&gt;1501259234&lt;/OSInstallDate&gt;<br />&lt;OSInstallTime&gt;2017-07-28T16:27:04Z&lt;/OSInstallTime&gt;<br />&lt;TimeZoneBias&gt;05:00&lt;/TimeZoneBias&gt;<br />&lt;/SystemInformation&gt;<br />&lt;SecureBootState&gt;<br />&lt;UEFISecureBootEnabled&gt;1&lt;/UEFISecureBootEnabled&gt;<br />&lt;PolicyPublisher&gt;{77fa9abd-0359-4d32-bd60-28f4e78f784b}&lt;/PolicyPublisher&gt;<br />&lt;/SecureBootState&gt;<br />&lt;ReportInformation&gt;<br />&lt;Guid&gt;a45590cf-5d9d-4e73-a2f1-8795875528ed&lt;/Guid&gt;<br />&lt;ReportSource&gt;queue&lt;/ReportSource&gt;<br />&lt;CreationTime&gt;2017-07-28T17:24:23Z&lt;/CreationTime&gt;<br />&lt;/ReportInformation&gt;<br />&lt;/WERReportMetadata&gt;</div><br /><br /><span style="text-decoration: underline"><strong>C:\ProgramData\Microsoft\Windows\WER\ReportArchive\AppCrash_explorer.exe_d696cf2cf02e7f852e723bad2f99691b11e77_10d58a87_083d257e\Report.wer contents:</strong></span><br /><div class="codetitle"><b>Code:</b></div><div class="codecontent">Version=1<br />EventType=APPCRASH<br />EventTime=131457362557133574<br />ReportType=2<br />Consent=1<br />UploadTime=131457362636352455<br />ReportFlags=524288<br />ReportStatus=268435456<br />ReportIdentifier=a45590cf-5d9d-4e73-a2f1-8795875528ed<br />IntegratorReportIdentifier=8e62085b-1bb1-4347-af95-b30565f4891b<br />Wow64Host=34404<br />NsAppName=explorer.exe<br />AppSessionGuid=0000341c-0001-0002-1d2f-0155c607d301<br />TargetAppId=W:0000f519feec486de87ed73cb92d3cac802400000000!0000b508012a71504be378757825d558f48da4d11d64!explorer.exe<br />TargetAppVer=2049//04//03:10:49:31!4a1149!explorer.exe<br />BootId=4294967295<br />TargetAsId=2602<br />Response.BucketId=009e4a076c788e6df211995c46fa334e<br />Response.BucketTable=4<br />Response.LegacyBucketId=120787582459<br />Response.type=4<br />Sig&#91;0&#93;.Name=Application Name<br />Sig&#91;0&#93;.Value=explorer.exe<br />Sig&#91;1&#93;.Name=Application Version<br />Sig&#91;1&#93;.Value=10.0.15063.447<br />Sig&#91;2&#93;.Name=Application Timestamp<br />Sig&#91;2&#93;.Value=951324bb<br />Sig&#91;3&#93;.Name=Fault Module Name<br />Sig&#91;3&#93;.Value=IDTNC64.cpl<br />Sig&#91;4&#93;.Name=Fault Module Version<br />Sig&#91;4&#93;.Value=1.0.6425.0<br />Sig&#91;5&#93;.Name=Fault Module Timestamp<br />Sig&#91;5&#93;.Value=5031ade3<br />Sig&#91;6&#93;.Name=Exception Code<br />Sig&#91;6&#93;.Value=c0000005<br />Sig&#91;7&#93;.Name=Exception Offset<br />Sig&#91;7&#93;.Value=0000000000001154<br />DynamicSig&#91;1&#93;.Name=OS Version<br />DynamicSig&#91;1&#93;.Value=10.0.15063.2.0.0.256.48<br />DynamicSig&#91;2&#93;.Name=Locale ID<br />DynamicSig&#91;2&#93;.Value=1033<br />DynamicSig&#91;22&#93;.Name=Additional Information 1<br />DynamicSig&#91;22&#93;.Value=91cf<br />DynamicSig&#91;23&#93;.Name=Additional Information 2<br />DynamicSig&#91;23&#93;.Value=91cfa88c7bc38c4ae77de3b640968976<br />DynamicSig&#91;24&#93;.Name=Additional Information 3<br />DynamicSig&#91;24&#93;.Value=81ee<br />DynamicSig&#91;25&#93;.Name=Additional Information 4<br />DynamicSig&#91;25&#93;.Value=81ee1a0a9a8dcbbc7ec16c4c78da6de6<br />UI&#91;2&#93;=C:\WINDOWS\explorer.exe<br />LoadedModule&#91;0&#93;=C:\WINDOWS\explorer.exe<br />LoadedModule&#91;1&#93;=C:\WINDOWS\SYSTEM32\ntdll.dll<br />LoadedModule&#91;2&#93;=C:\WINDOWS\System32\KERNEL32.DLL<br />LoadedModule&#91;3&#93;=C:\WINDOWS\System32\KERNELBASE.dll<br />LoadedModule&#91;4&#93;=C:\WINDOWS\System32\msvcrt.dll<br />LoadedModule&#91;5&#93;=C:\WINDOWS\System32\combase.dll<br />LoadedModule&#91;6&#93;=C:\WINDOWS\System32\ucrtbase.dll<br />LoadedModule&#91;7&#93;=C:\WINDOWS\System32\RPCRT4.dll<br />LoadedModule&#91;8&#93;=C:\WINDOWS\System32\bcryptPrimitives.dll<br />LoadedModule&#91;9&#93;=C:\WINDOWS\System32\OLEAUT32.dll<br />LoadedModule&#91;10&#93;=C:\WINDOWS\System32\msvcp_win.dll<br />LoadedModule&#91;11&#93;=C:\WINDOWS\System32\shcore.dll<br />LoadedModule&#91;12&#93;=C:\WINDOWS\System32\powrprof.dll<br />LoadedModule&#91;13&#93;=C:\WINDOWS\SYSTEM32\TWINAPI.dll<br />LoadedModule&#91;14&#93;=C:\WINDOWS\SYSTEM32\MrmCoreR.dll<br />LoadedModule&#91;15&#93;=C:\WINDOWS\System32\user32.dll<br />LoadedModule&#91;16&#93;=C:\WINDOWS\System32\win32u.dll<br />LoadedModule&#91;17&#93;=C:\WINDOWS\System32\GDI32.dll<br />LoadedModule&#91;18&#93;=C:\WINDOWS\SYSTEM32\TextInputFramework.dll<br />LoadedModule&#91;19&#93;=C:\WINDOWS\System32\gdi32full.dll<br />LoadedModule&#91;20&#93;=C:\WINDOWS\System32\sechost.dll<br />LoadedModule&#91;21&#93;=C:\WINDOWS\System32\shlwapi.dll<br />LoadedModule&#91;22&#93;=C:\WINDOWS\System32\windows.storage.dll<br />LoadedModule&#91;23&#93;=C:\WINDOWS\System32\advapi32.dll<br />LoadedModule&#91;24&#93;=C:\WINDOWS\SYSTEM32\CoreUIComponents.dll<br />LoadedModule&#91;25&#93;=C:\WINDOWS\System32\kernel.appcore.dll<br />LoadedModule&#91;26&#93;=C:\WINDOWS\System32\profapi.dll<br />LoadedModule&#91;27&#93;=C:\WINDOWS\System32\SHELL32.dll<br />LoadedModule&#91;28&#93;=C:\WINDOWS\SYSTEM32\ntmarta.dll<br />LoadedModule&#91;29&#93;=C:\WINDOWS\System32\cfgmgr32.dll<br />LoadedModule&#91;30&#93;=C:\WINDOWS\System32\CRYPT32.dll<br />LoadedModule&#91;31&#93;=C:\WINDOWS\SYSTEM32\wintypes.dll<br />LoadedModule&#91;32&#93;=C:\WINDOWS\System32\MSASN1.dll<br />LoadedModule&#91;33&#93;=C:\WINDOWS\SYSTEM32\usermgrcli.dll<br />LoadedModule&#91;34&#93;=C:\WINDOWS\SYSTEM32\settingsynccore.dll<br />LoadedModule&#91;35&#93;=C:\WINDOWS\SYSTEM32\CoreMessaging.dll<br />LoadedModule&#91;36&#93;=C:\WINDOWS\SYSTEM32\PROPSYS.dll<br />LoadedModule&#91;37&#93;=C:\WINDOWS\SYSTEM32\winmm.dll<br />LoadedModule&#91;38&#93;=C:\WINDOWS\SYSTEM32\UxTheme.dll<br />LoadedModule&#91;39&#93;=C:\WINDOWS\SYSTEM32\dwmapi.dll<br />LoadedModule&#91;40&#93;=C:\WINDOWS\SYSTEM32\SspiCli.dll<br />LoadedModule&#91;41&#93;=C:\WINDOWS\SYSTEM32\twinapi.appcore.dll<br />LoadedModule&#91;42&#93;=C:\WINDOWS\SYSTEM32\USERENV.dll<br />LoadedModule&#91;43&#93;=C:\WINDOWS\SYSTEM32\WTSAPI32.dll<br />LoadedModule&#91;44&#93;=C:\WINDOWS\SYSTEM32\WINMMBASE.dll<br />LoadedModule&#91;45&#93;=C:\WINDOWS\SYSTEM32\bcrypt.dll<br />LoadedModule&#91;46&#93;=C:\WINDOWS\SYSTEM32\cryptsp.dll<br />LoadedModule&#91;47&#93;=C:\WINDOWS\System32\IMM32.DLL<br />LoadedModule&#91;48&#93;=C:\WINDOWS\System32\MSCTF.dll<br />LoadedModule&#91;49&#93;=C:\WINDOWS\System32\ole32.dll<br />LoadedModule&#91;50&#93;=C:\WINDOWS\System32\clbcatq.dll<br />LoadedModule&#91;51&#93;=C:\Windows\System32\appresolver.dll<br />LoadedModule&#91;52&#93;=C:\Windows\System32\Bcp47Langs.dll<br />LoadedModule&#91;53&#93;=C:\Windows\System32\elscore.dll<br />LoadedModule&#91;54&#93;=C:\Windows\System32\SLC.dll<br />LoadedModule&#91;55&#93;=C:\Windows\System32\sppc.dll<br />LoadedModule&#91;56&#93;=C:\Windows\System32\urlmon.dll<br />LoadedModule&#91;57&#93;=C:\Windows\System32\iertutil.dll<br />LoadedModule&#91;58&#93;=C:\Windows\System32\CRYPTBASE.DLL<br />LoadedModule&#91;59&#93;=C:\Windows\System32\OneCoreUAPCommonProxyStub.dll<br />LoadedModule&#91;60&#93;=C:\Windows\System32\StartTileData.dll<br />LoadedModule&#91;61&#93;=C:\Windows\System32\XmlLite.dll<br />LoadedModule&#91;62&#93;=C:\WINDOWS\System32\IDStore.dll<br />LoadedModule&#91;63&#93;=C:\WINDOWS\System32\SAMLIB.dll<br />LoadedModule&#91;64&#93;=C:\Windows\System32\Windows.StateRepository.dll<br />LoadedModule&#91;65&#93;=C:\Windows\System32\StateRepository.Core.dll<br />LoadedModule&#91;66&#93;=C:\WINDOWS\System32\wlidprov.dll<br />LoadedModule&#91;67&#93;=C:\WINDOWS\System32\samcli.dll<br />LoadedModule&#91;68&#93;=C:\WINDOWS\SYSTEM32\dsreg.dll<br />LoadedModule&#91;69&#93;=C:\WINDOWS\SYSTEM32\msvcp110_win.dll<br />LoadedModule&#91;70&#93;=C:\Windows\System32\Windows.ApplicationModel.dll<br />LoadedModule&#91;71&#93;=C:\WINDOWS\SYSTEM32\DPAPI.DLL<br />LoadedModule&#91;72&#93;=C:\Windows\System32\AppXDeploymentClient.dll<br />LoadedModule&#91;73&#93;=C:\WINDOWS\SYSTEM32\settingsyncpolicy.dll<br />LoadedModule&#91;74&#93;=C:\WINDOWS\SYSTEM32\policymanager.dll<br />LoadedModule&#91;75&#93;=C:\Windows\System32\OneCoreCommonProxyStub.dll<br />LoadedModule&#91;76&#93;=C:\WINDOWS\SYSTEM32\WINSTA.dll<br />LoadedModule&#91;77&#93;=C:\WINDOWS\WinSxS\amd64_microsoft.windows.common-controls_6595b64144ccf1df_6.0.15063.483_none_26002d27e7c744a2\comctl32.dll<br />LoadedModule&#91;78&#93;=C:\WINDOWS\SYSTEM32\SndVolSSO.DLL<br />LoadedModule&#91;79&#93;=C:\WINDOWS\SYSTEM32\MMDevAPI.DLL<br />LoadedModule&#91;80&#93;=C:\WINDOWS\SYSTEM32\DEVOBJ.dll<br />LoadedModule&#91;81&#93;=C:\WINDOWS\SYSTEM32\OLEACC.dll<br />LoadedModule&#91;82&#93;=C:\Windows\System32\vaultcli.dll<br />LoadedModule&#91;83&#93;=C:\Windows\System32\OneDriveSettingSyncProvider.dll<br />LoadedModule&#91;84&#93;=C:\WINDOWS\system32\dataexchange.dll<br />LoadedModule&#91;85&#93;=C:\WINDOWS\system32\d3d11.dll<br />LoadedModule&#91;86&#93;=C:\WINDOWS\system32\dcomp.dll<br />LoadedModule&#91;87&#93;=C:\WINDOWS\system32\dxgi.dll<br />LoadedModule&#91;88&#93;=C:\WINDOWS\system32\windowscodecs.dll<br />LoadedModule&#91;89&#93;=C:\WINDOWS\SYSTEM32\veeventdispatcher.dll<br />LoadedModule&#91;90&#93;=C:\WINDOWS\system32\StartMenuHelper64.dll<br />LoadedModule&#91;91&#93;=C:\WINDOWS\System32\COMDLG32.dll<br />LoadedModule&#91;92&#93;=C:\WINDOWS\system32\VERSION.dll<br />LoadedModule&#91;93&#93;=C:\WINDOWS\SYSTEM32\explorerframe.dll<br />LoadedModule&#91;94&#93;=C:\Windows\System32\Windows.UI.dll<br />LoadedModule&#91;95&#93;=C:\Windows\System32\thumbcache.dll<br />LoadedModule&#91;96&#93;=C:\WINDOWS\SYSTEM32\edputil.dll<br />LoadedModule&#91;97&#93;=C:\WINDOWS\System32\coml2.dll<br />LoadedModule&#91;98&#93;=C:\WINDOWS\system32\twinui.pcshell.dll<br />LoadedModule&#91;99&#93;=C:\WINDOWS\system32\wincorlib.DLL<br />LoadedModule&#91;100&#93;=C:\WINDOWS\system32\CLIPC.dll<br />LoadedModule&#91;101&#93;=C:\Windows\System32\windows.immersiveshell.serviceprovider.dll<br />LoadedModule&#91;102&#93;=C:\WINDOWS\SYSTEM32\WLDP.DLL<br />LoadedModule&#91;103&#93;=C:\WINDOWS\System32\WINTRUST.dll<br />LoadedModule&#91;104&#93;=C:\Windows\System32\taskschd.dll<br />LoadedModule&#91;105&#93;=C:\WINDOWS\System32\cscui.dll<br />LoadedModule&#91;106&#93;=C:\Windows\System32\ActXPrxy.dll<br />LoadedModule&#91;107&#93;=C:\WINDOWS\System32\twinui.appcore.dll<br />LoadedModule&#91;108&#93;=C:\WINDOWS\system32\twinui.dll<br />LoadedModule&#91;109&#93;=C:\WINDOWS\System32\ApplicationFrame.dll<br />LoadedModule&#91;110&#93;=C:\WINDOWS\System32\d2d1.dll<br />LoadedModule&#91;111&#93;=C:\WINDOWS\SYSTEM32\rmclient.dll<br />LoadedModule&#91;112&#93;=C:\Windows\System32\HolographicExtensions.dll<br />LoadedModule&#91;113&#93;=C:\Windows\System32\ResourcePolicyClient.dll<br />LoadedModule&#91;114&#93;=C:\WINDOWS\SYSTEM32\ntshrui.dll<br />LoadedModule&#91;115&#93;=C:\WINDOWS\SYSTEM32\srvcli.dll<br />LoadedModule&#91;116&#93;=C:\Windows\System32\Windows.UI.Immersive.dll<br />LoadedModule&#91;117&#93;=C:\WINDOWS\SYSTEM32\cscapi.dll<br />LoadedModule&#91;118&#93;=C:\WINDOWS\SYSTEM32\netutils.dll<br />LoadedModule&#91;119&#93;=C:\Windows\System32\AboveLockAppHost.dll<br />LoadedModule&#91;120&#93;=C:\WINDOWS\System32\npsm.dll<br />LoadedModule&#91;121&#93;=C:\Windows\System32\Windows.Web.dll<br />LoadedModule&#91;122&#93;=C:\Windows\System32\Windows.Shell.BlueLightReduction.dll<br />LoadedModule&#91;123&#93;=C:\Windows\System32\Windows.CloudStore.dll<br />LoadedModule&#91;124&#93;=C:\Windows\System32\Windows.CloudStore.Schema.Shell.dll<br />LoadedModule&#91;125&#93;=C:\Windows\System32\mscms.dll<br />LoadedModule&#91;126&#93;=C:\Windows\System32\Windows.StateRepositoryBroker.dll<br />LoadedModule&#91;127&#93;=C:\WINDOWS\SYSTEM32\MFPlat.DLL<br />LoadedModule&#91;128&#93;=C:\WINDOWS\SYSTEM32\RTWorkQ.DLL<br />LoadedModule&#91;129&#93;=C:\Windows\System32\TaskFlowDataEngine.dll<br />LoadedModule&#91;130&#93;=C:\Windows\System32\cdp.dll<br />LoadedModule&#91;131&#93;=C:\WINDOWS\System32\WS2_32.dll<br />LoadedModule&#91;132&#93;=C:\Windows\System32\ncrypt.dll<br />LoadedModule&#91;133&#93;=C:\Windows\System32\IPHLPAPI.DLL<br />LoadedModule&#91;134&#93;=C:\Windows\System32\NTASN1.dll<br />LoadedModule&#91;135&#93;=C:\Windows\System32\WINHTTP.dll<br />LoadedModule&#91;136&#93;=C:\WINDOWS\SYSTEM32\LINKINFO.dll<br />LoadedModule&#91;137&#93;=C:\Windows\System32\NotificationControllerPS.dll<br />LoadedModule&#91;138&#93;=C:\Windows\System32\Windows.Networking.Connectivity.dll<br />LoadedModule&#91;139&#93;=C:\WINDOWS\SYSTEM32\apphelp.dll<br />LoadedModule&#91;140&#93;=C:\Windows\System32\ieframe.dll<br />LoadedModule&#91;141&#93;=C:\Windows\System32\NETAPI32.dll<br />LoadedModule&#91;142&#93;=C:\Windows\System32\WKSCLI.DLL<br />LoadedModule&#91;143&#93;=C:\WINDOWS\SYSTEM32\msIso.dll<br />LoadedModule&#91;144&#93;=C:\WINDOWS\SYSTEM32\NInput.dll<br />LoadedModule&#91;145&#93;=C:\WINDOWS\SYSTEM32\igd10iumd64.dll<br />LoadedModule&#91;146&#93;=C:\WINDOWS\SYSTEM32\igdusc64.dll<br />LoadedModule&#91;147&#93;=C:\WINDOWS\system32\execmodelproxy.dll<br />LoadedModule&#91;148&#93;=C:\WINDOWS\System32\UIAnimation.dll<br />LoadedModule&#91;149&#93;=C:\WINDOWS\SYSTEM32\cryptngc.dll<br />LoadedModule&#91;150&#93;=C:\Program Files (x86)\Norton Security with Backup\Engine\22.10.0.85\buShell.dll<br />LoadedModule&#91;151&#93;=C:\WINDOWS\WinSxS\amd64_microsoft.windows.gdiplus_6595b64144ccf1df_1.1.15063.483_none_56eb200d4259be70\gdiplus.dll<br />LoadedModule&#91;152&#93;=C:\Program Files (x86)\Norton Security with Backup\Engine\22.10.0.85\EFACli64.dll<br />LoadedModule&#91;153&#93;=C:\Program Files (x86)\Norton Security with Backup\Engine\22.10.0.85\VCRUNTIME140.dll<br />LoadedModule&#91;154&#93;=C:\Program Files (x86)\Norton Security with Backup\Engine\22.10.0.85\MSVCP140.dll<br />LoadedModule&#91;155&#93;=C:\Users\G7013MM\AppData\Local\Microsoft\OneDrive\17.3.6943.0625_1\amd64\FileSyncShell64.dll<br />LoadedModule&#91;156&#93;=C:\WINDOWS\SYSTEM32\WININET.dll<br />LoadedModule&#91;157&#93;=C:\WINDOWS\SYSTEM32\WSOCK32.dll<br />LoadedModule&#91;158&#93;=C:\Windows\System32\EhStorShell.dll<br />LoadedModule&#91;159&#93;=C:\WINDOWS\System32\SETUPAPI.dll<br />LoadedModule&#91;160&#93;=C:\WINDOWS\system32\mssprxy.dll<br />LoadedModule&#91;161&#93;=C:\WINDOWS\System32\provsvc.dll<br />LoadedModule&#91;162&#93;=C:\Program Files (x86)\Norton Security with Backup\Engine\22.10.0.85\ccVrTrst.dll<br />LoadedModule&#91;163&#93;=C:\Program Files (x86)\Norton Security with Backup\Engine\22.10.0.85\ccLib.dll<br />LoadedModule&#91;164&#93;=C:\Program Files (x86)\Norton Security with Backup\Engine\22.10.0.85\ccSet.dll<br />LoadedModule&#91;165&#93;=C:\WINDOWS\system32\NetworkExplorer.dll<br />LoadedModule&#91;166&#93;=C:\WINDOWS\system32\stobject.dll<br />LoadedModule&#91;167&#93;=C:\WINDOWS\system32\WMICLNT.dll<br />LoadedModule&#91;168&#93;=C:\WINDOWS\system32\BatMeter.dll<br />LoadedModule&#91;169&#93;=C:\WINDOWS\SYSTEM32\sxs.dll<br />LoadedModule&#91;170&#93;=C:\Windows\System32\InputSwitch.dll<br />LoadedModule&#91;171&#93;=C:\WINDOWS\System32\Windows.UI.Shell.dll<br />LoadedModule&#91;172&#93;=C:\WINDOWS\system32\es.dll<br />LoadedModule&#91;173&#93;=C:\WINDOWS\system32\prnfldr.dll<br />LoadedModule&#91;174&#93;=C:\WINDOWS\system32\Windows.Internal.Shell.Broker.dll<br />LoadedModule&#91;175&#93;=C:\WINDOWS\system32\ntoskrnl.exe<br />LoadedModule&#91;176&#93;=C:\WINDOWS\System32\DeviceSetupManagerAPI.dll<br />LoadedModule&#91;177&#93;=C:\WINDOWS\system32\dxp.dll<br />LoadedModule&#91;178&#93;=C:\WINDOWS\system32\SHDOCVW.dll<br />LoadedModule&#91;179&#93;=C:\WINDOWS\SYSTEM32\atlthunk.dll<br />LoadedModule&#91;180&#93;=C:\WINDOWS\system32\Syncreg.dll<br />LoadedModule&#91;181&#93;=C:\WINDOWS\System32\Actioncenter.dll<br />LoadedModule&#91;182&#93;=C:\WINDOWS\System32\wevtapi.dll<br />LoadedModule&#91;183&#93;=C:\Windows\System32\msi.dll<br />LoadedModule&#91;184&#93;=C:\WINDOWS\System32\npmproxy.dll<br />LoadedModule&#91;185&#93;=C:\WINDOWS\System32\NSI.dll<br />LoadedModule&#91;186&#93;=C:\WINDOWS\SYSTEM32\wlanapi.dll<br />LoadedModule&#91;187&#93;=C:\Windows\System32\wwapi.dll<br />LoadedModule&#91;188&#93;=C:\Windows\System32\wcmapi.dll<br />LoadedModule&#91;189&#93;=C:\WINDOWS\SYSTEM32\dusmapi.dll<br />LoadedModule&#91;190&#93;=C:\WINDOWS\SYSTEM32\AUDIOSES.DLL<br />LoadedModule&#91;191&#93;=C:\WINDOWS\SYSTEM32\AVRT.dll<br />LoadedModule&#91;192&#93;=C:\WINDOWS\system32\wpdshserviceobj.dll<br />LoadedModule&#91;193&#93;=C:\Windows\System32\PortableDeviceTypes.dll<br />LoadedModule&#91;194&#93;=C:\Windows\System32\PortableDeviceApi.dll<br />LoadedModule&#91;195&#93;=C:\WINDOWS\System32\pnidui.dll<br />LoadedModule&#91;196&#93;=C:\WINDOWS\system32\SettingMonitor.dll<br />LoadedModule&#91;197&#93;=C:\WINDOWS\System32\netprofm.dll<br />LoadedModule&#91;198&#93;=C:\Windows\System32\NetworkUXBroker.dll<br />LoadedModule&#91;199&#93;=C:\Windows\System32\WlanMediaManager.dll<br />LoadedModule&#91;200&#93;=C:\Windows\System32\EthernetMediaManager.dll<br />LoadedModule&#91;201&#93;=C:\WINDOWS\System32\NPSMDesktopProvider.dll<br />LoadedModule&#91;202&#93;=C:\Windows\System32\TetheringStation.dll<br />LoadedModule&#91;203&#93;=C:\Windows\System32\BluetoothApis.dll<br />LoadedModule&#91;204&#93;=C:\WINDOWS\system32\rsaenh.dll<br />LoadedModule&#91;205&#93;=C:\WINDOWS\System32\NotificationObjFactory.dll<br />LoadedModule&#91;206&#93;=C:\WINDOWS\System32\wshbth.dll<br />LoadedModule&#91;207&#93;=C:\Windows\System32\rasadhlp.dll<br />LoadedModule&#91;208&#93;=C:\WINDOWS\system32\mswsock.dll<br />LoadedModule&#91;209&#93;=C:\Windows\System32\bthprops.cpl<br />LoadedModule&#91;210&#93;=C:\WINDOWS\SYSTEM32\dhcpcsvc6.DLL<br />LoadedModule&#91;211&#93;=C:\WINDOWS\SYSTEM32\dhcpcsvc.DLL<br />LoadedModule&#91;212&#93;=C:\WINDOWS\System32\cscobj.dll<br />LoadedModule&#91;213&#93;=C:\WINDOWS\System32\srchadmin.dll<br />LoadedModule&#91;214&#93;=C:\WINDOWS\System32\SyncCenter.dll<br />LoadedModule&#91;215&#93;=C:\Windows\System32\imapi2.dll<br />LoadedModule&#91;216&#93;=C:\Program Files\Classic Shell\ClassicStartMenuDLL.dll<br />LoadedModule&#91;217&#93;=C:\WINDOWS\SYSTEM32\MSIMG32.dll<br />LoadedModule&#91;218&#93;=C:\WINDOWS\SYSTEM32\Secur32.dll<br />LoadedModule&#91;219&#93;=C:\WINDOWS\SYSTEM32\LOGONCLI.DLL<br />LoadedModule&#91;220&#93;=C:\WINDOWS\System32\wshirda.dll<br />LoadedModule&#91;221&#93;=C:\WINDOWS\system32\fontext.dll<br />LoadedModule&#91;222&#93;=C:\WINDOWS\system32\MPR.dll<br />LoadedModule&#91;223&#93;=C:\WINDOWS\system32\DeviceCenter.dll<br />LoadedModule&#91;224&#93;=C:\WINDOWS\system32\DUI70.dll<br />LoadedModule&#91;225&#93;=C:\WINDOWS\system32\IDTNC64.cpl<br />LoadedModule&#91;226&#93;=C:\WINDOWS\SYSTEM32\WINSPOOL.DRV<br />LoadedModule&#91;227&#93;=C:\WINDOWS\SYSTEM32\STLang64.dll<br />LoadedModule&#91;228&#93;=C:\WINDOWS\SYSTEM32\MFC42u.dll<br />State&#91;0&#93;.Key=Transport.DoneStage1<br />State&#91;0&#93;.Value=1<br />FriendlyEventName=Stopped working<br />ConsentKey=APPCRASH<br />AppName=Windows Explorer<br />AppPath=C:\WINDOWS\explorer.exe<br />NsPartner=windows<br />NsGroup=windows8<br />ApplicationIdentity=A68A3FE10BB242F9462A87DD6C982FD5<br />MetadataHash=84703752</div><br /></blockquote><br /><br /><br /><br /><br />-------------------------------------------------------------------------------------------------<br /><div class="codetitle"><b>Code:</b></div><div class="codecontent">Faulting application name: explorer.exe, version: 10.0.15063.447, time stamp: 0x951324bb<br />Faulting module name: IDTNC64.cpl, version: 1.0.6425.0, time stamp: 0x5031ade3<br />Exception code: 0xc0000005<br />Fault offset: 0x0000000000001154<br />Faulting process id: 0x341c<br />Faulting application start time: 0x01d307c655012f1d<br />Faulting application path: C:\WINDOWS\explorer.exe<br />Faulting module path: C:\WINDOWS\system32\IDTNC64.cpl<br />Report Id: 8e62085b-1bb1-4347-af95-b30565f4891b<br />Faulting package full name: <br />Faulting package-relative application ID: </div><p>Statistics: Posted by <a href="http://www.classicshell.net/forum/memberlist.php?mode=viewprofile&amp;u=22316">MikeMeinz</a> — Fri Jul 28, 2017 4:57 pm</p><hr />
]]></content>
</entry>
</feed>