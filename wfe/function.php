/.#exportable

#Func filelist
function filelist $fi=-index;$dir=;$per_page=10;
var $temp = call htmlspecialchars $val=$temp;
var $list = <xt:filelist sort_type="updated" sort_dir="desc" per_page="$per_page" folder="/$dir/name" template="&lt;div class=&quot;list1&quot;&gt;&lt;img src=&quot;http://gactruyen.mobie.in/images/icon/item.png&quot; alt=&quot;»&quot;/&gt; &lt;a rel=&quot;dofollow&quot; href=&quot;/$dir/bai-viet/.file_name..html&quot; title=&quot;&lt;xt:include file=&quot;/$dir/name/.file_name.&quot;/&gt;&quot; rel=&quot;dofollow&quot;&gt;&lt;xt:include file=&quot;/$dir/name/.file_name.&quot;/&gt;&lt;/a&gt;&lt;/div&gt;" filter="$fi"/>

var $path = <xt:url type="path"/>
if $path==/index or $path == /$dir/view.php
var $list = call str_replace $subject=$list;$search=<div class="filelist_paging">;$replace=<div class="filelist_paging" align="left"><a href="/$dir?__filelist_page=2" title="Xem thêm">Xem thêm >></a></div><div class="hidden">
endif
if not $list
var $list=<div class="list1">Chua có bài vi?t</div>
endif
Print $list
endfunction

#Func filelist
function filelist_mod $fi=-index;$dir=;$per_page=10;
var $temp = call htmlspecialchars $val=$temp;
var $list = <xt:filelist sort_type="updated" sort_dir="desc" per_page="$per_page" folder="/$dir/name" template="[dead].file_name.[/dead]" filter="$fi"/>
var $i = 0
var $path = <xt:url type="path"/>
if $path == /index
var $path =;
else
var $path = /..;
endif
@batdau
var $i = ($i+1)
assign $end=call strrpos $haystack=$list;$needle=[/dead]; $offset=0
assign $start=call strrpos $haystack=$list;$needle=[dead]; $offset=0
var $file = call substr $val=$list;$start=($start+6);$length=($end-$start-6);
var $dataf0lder = call source $file=$path/$dir/foderdata247/$file
var $tenbv = call source $file=$path/$dir/name/$file
assign $endi=call strpos $haystack=$dataf0lder;$needle=[/img]; $offset=0
assign $starti=call strpos $haystack=$dataf0lder;$needle=[img]; $offset=0
if $endi > 20
var $img = call substr $val=$dataf0lder; $start=($starti+5); $length=($endi-$starti-5);
else
var $img=http://gactruyen.mobie.in/images/logo/truyen-ngan.jpg
endif

var $mota = call substr $val=$dataf0lder;$start=0;$length=150;
var $spc = call chr $val=32;
var $mota = call strrpos $haystack=$mota;$needle=$spc;$offset=0;
var $mota = call substr $val=$dataf0lder;$start=0;$length=$mota;
var $mota = call strip_tags $val=$mota;
var $idcm = call substr $val=$file;$start=0;$length=2;
var $cm = call source $file=$path/$dir/muc/$idcm

var $hienthi = {{<div class="list1"><a href="/$dir/bai-viet/$file.html" title="$tenbv"><b><h3>$tenbv</h3></b></a>
<table width="100%">
  <tbody>
    <tr>
      <td width="55px"><img id="img" src="$img" alt="GacTruyen" width="50px" height="50px"/>
      </td>
      <td width="auto" valign="top">
        <img src="http://www.gactruyen.mobie.in/images/icon/item.png" alt="»"/> <small>Chuyên m?c: <a href="/$dir?id=$idcm">$cm</a></small><br/>
        <img src="http://gactruyen.mobie.in/images/icon/item.png" alt="»"/> $mota...
      </td>
    </tr>
  </tbody>
</table></div>}}
var $list = call str_replace $subject=$list;$search=[dead]$file[/dead];$replace=$hienthi;
if $start
goto @batdau
endif

var $path = <xt:url type="path"/>
if $path==/index
var $list = call str_replace $subject=$list;$search=index;$replace=$dir
endif
Print $list
endfunction

#Func chuyên m?c update
function chuyenmuc $fi=-*.*;$dir=;
var $name = call source $file=../$dir/name.txt
var $temp = <div class="list1"><font color=orange>» </font><a href="/$dir?id=.file_name." title="<xt:include file="/$dir/muc/.file_name."/>"><xt:include file="/$dir/muc/.file_name." rel="dofollow"/></a></div>
var $temp = call htmlspecialchars $val=$temp;
var $chuyenmuc = <xt:filelist sort_type="name" sort_dir="desc" per_page="" folder="/$dir/muc" template="$temp" filter="$fi"/>
Print $chuyenmuc
endfunction

#Func bbcode
function bbcode $text=;
var $spc = call chr $val=32
var $text= call str_ireplace $subject=$text; $search=[file]; $replace=<div class="file-attach"><div class="attach"><b>? T?p tin ch? d? ?</b></div><div class="file"><div style="padding: 2px 0">
var $text= call str_ireplace $subject=$text; $search=[/file]; $replace=</div></div></div>
var $i=0
@img
var $i=($i+1)
var $ei=call strpos $haystack=$text;$needle=[/img]; $offset=0
var $si=call strpos $haystack=$text;$needle=[img]; $offset=0
var $img = call substr $val=$text;$start=($si+5);$length=($ei-$si-5);
var $text = call str_ireplace $subject=$text;$search=[img]$img[/img];$replace={{<div align="center"><img class="img" src="$img" alt="$ten_bv" title="$ten_bv" max-width="98%" onerror="this.src='http:www.gactruyen.mobie.in/images/logo/logo.png'"/><br><a href="$img" title="T?i ?nh $ten_bv $i">T?i ?nh #$i</a><br><br></div>}}
if $ei
goto @img
endif

var $text= call str_ireplace $subject=$text; $search=[b]; $replace=<b>
var $text= call str_ireplace $subject=$text; $search=[/b]; $replace=</b>
var $text = call str_ireplace $subject=$text;$search=[br];$replace=<br/>
var $text = call str_ireplace $subject=$text;$search=[p];$replace=<p>
var $text = call str_ireplace $subject=$text;$search=[/p];$replace=</p>
var $text = call str_ireplace $subject=$text;$search=[i];$replace=<i>
var $text = call str_ireplace $subject=$text;$search=[/i];$replace=</i>
var $text = call str_ireplace $subject=$text;$search=[u];$replace=<u>
var $text = call str_ireplace $subject=$text;$search=[/u];$replace=</u>
var $text = call str_ireplace $subject=$text;$search=[s];$replace=<s>
var $text = call str_ireplace $subject=$text;$search=[/s];$replace=</s>
var $text= call str_ireplace $subject=$text; $search=[color=; $replace=<span style="color:
var $text= call str_ireplace $subject=$text; $search=[/color]; $replace=</span>
var $text= call str_ireplace $subject=$text; $search=[bg=; $replace=<span style="background:
var $text= call str_ireplace $subject=$text; $search=[/bg]; $replace=</span>
var $text = call str_ireplace $subject=$text;$search=[url=;$replace=<a target="_blank" href="
var $text = call str_ireplace $subject=$text;$search=[/url];$replace=</a>
var $text = call str_ireplace $subject=$text;$search=];$replace=">
endif
return $text
endfunction

#Func phân trang
function page $noidung=;$dir=;
var $show=12000
var $url=<xt:url noquery="1">?p
var $lnd = call strlen $val=$noidung
if $lnd <= $show
	var $cut = $noidung
endif
if $lnd >= $show
	var $nump = ($lnd/$show)
	var $nump = call ceil $num=$nump
	get p
	if $p ==
		var $p=1
	endif
	if $p <$nump
		var $cham = ...
	endif
	if $p > $nump
		var $p=$nump
	endif
	var $batdau =($p*$show-$show)
	var $nump = call ceil $num=$nump
	var $textd = call substr $val=$noidung;$start=$batdau;$length=$show
	var $st = call strpos $haystack=$textd;$needle=<br />
	var $textc = call substr $val=$noidung;$start=($batdau+$show);$length=$show
	var $et = call strpos $haystack=$textc;$needle=<br />
	if $p==1
		var $st=0
	endif
	if $p==$nump
		var $et=0
	endif
	var $cut = call substr $val=$noidung;$start=($batdau+$st);$length=($show+$et-$st);
	if $p > 1
		var $dau = <a class="pagenav" href="$url=1">1</a>
		var $prev = <a class="pagenav" href="$url=($p-1)">&lt;&lt;</a>
		if $p > 2
			var $prevp = <a class="pagenav" href="$url=($p-1)">($p-1)</a>
			if $p > 3
				var $prevvp = <a class="pagenav" href="$url=($p-2)">($p-2)</a>
				if $p > 4
				var $dau = <a class="pagenav" href="$url=1">1</a>...
			endif
		endif
	endif
endif
if $p < $nump
	var $next = <a class="pagenav" href="$url=($p+1)">&gt;&gt;</a>
	var $cuoi = <a class="pagenav" href="$url=$nump">$nump</a>
	if $p < ($nump-1)
		var $nextp = <a class="pagenav" href="$url=($p+1)">($p+1)</a>
		if $p < ($nump-2)
			var $nexttp = <a class="pagenav" href="$url=($p+2)">($p+2)</a>
			if $p < ($nump-3)
				var $cuoi = ...<a class="pagenav" href="$url=$nump">$nump</a>
			endif
		endif
	endif
endif

if $lnd > $show
var $pagego = </div></div><div class="mainstory"><div class="page">$prev$dau$prevvp$prevp<span>$p</span>$nextp$nexttp$cuoi$next</div><form action="" method="post"><input name="p" type="text" size="2" value=""/><input type="submit" value="Ð?n trang >>"/></form></div>
endif
print $cut$cham$pagego
endfunction

#Func like filelist
function like $id=;
Print <div class="admin-say"> Ðánh giá c?a b?n là <b>góp ý </b>quan tr?ng giúp <b>Admin</b> nâng cao <b>ch?t lu?ng</b> bài vi?t!<div class="here"></div></div><div class="mod-vote" id="vote"><b> Ðánh giá bài vi?t</b><br/> <a title="like" href="/vote.php?id=$id&vote=like"><xt:widget tool="Counter" id="xt.c.a.t." key="$xtc_key" xtuser="$xtc_user" idstring="$id|like" type="display1" /> <img src="http://viptruyen.mobie.in/images/icon/like.png" alt="Like"></a> | <a title="Dislike" href="/vote.php?id=$id&vote=unlike"><img src="http://viptruyen.mobie.in/images/icon/dislike.png" alt="Dislike"> <xt:widget tool="Counter" id="xt.c.a.t." key="$xtc_key" xtuser="$xtc_user" idstring="$id|unlike" type="display1" /></a><br/><img src="http://24gio.sextgem.com/icon/vote2/views_<xt:widget tool="Counter" id="xt.c.a.t." key="$xtc_key" xtuser="$xtc_user" idstring="$id|like" type="display1" />.gif" alt="Ðánh giá"></div>
endfunction

#Func filelist
function random $dir=;$file=;
var $dai = call strlen $val=$file
var $d1 = call mt_rand $min=1;$max=$dai;
var $d1 = call substr $val=$file;$start=$d1;$length=1;

var $d2 = call mt_rand $min=1;$max=$dai;
var $d2 = call substr $val=$file;$start=$d2;$length=1;
var $dead = *$d1*$d2*;

var $rd1 = call mt_rand $min=1;$max=2;
if $rd1 == 1
var $rd1 = updated
else
var $rd1 = name
endif

var $rd2 = call mt_rand $min=1;$max=2;
if $rd2 == 1
var $rd2 = desc
else
var $rd2 = asc
endif

var $temp = call htmlspecialchars $val=$temp;
var $list = <xt:filelist sort_type="$rd1" sort_dir="$rd2" per_page="5" folder="/$dir/name" template="&lt;div class=&quot;list1&quot;&gt;&lt;img src=&quot;http://viptruyen.mobie.in/images/icon/blog_icon.gif&quot; alt=&quot;»&quot;/&gt; &lt;a rel=&quot;dofollow&quot; href=&quot;/$dir/bai-viet/.file_name..html&quot; title=&quot;&lt;xt:include file=&quot;/$dir/name/.file_name.&quot;/&gt;&quot; rel=&quot;dofollow&quot;&gt;&lt;xt:include file=&quot;/$dir/name/.file_name.&quot;/&gt;&lt;/a&gt;&lt;/div&gt;" filter="$fi$dead"/>

Print $list
endfunction