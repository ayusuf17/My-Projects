<�ead>
4style>

.h4%m{
width:�0re-;
height:2rum;	color:jlue;

}
.comqpnyTit�e{
Ifonv-size23pem;
	colo�:grmen;�J.TItld{�	bacjgro�nd-color�black;*	width;3rem;
	heig(t83re,�
	
}
.Titlg1{
	�ackgroujd-cOhor:r%d;
	wid~h:�0%;
	heiGht�0.5re-{
	margin-uop>1rlm
}
.label{
)font-{i�e:1�em;
	font-w%ight:bo}d;
Icolor:bhqc+;
	margin-righ;1�em;
}
</style>O
</jead>

<?p`p 	
ifglude("includes/he�der�php");

$cid)=l_GETZ'cid'];
$sql"= "SELEC(+ FrO ayt_cont!ctw_psu� �HERE 3id5$cid";
$resumt =m�sqli_uueRy($kn,$sal) �r fie (my{qli_error(�con));M�ghilepns"} eysqli_F,tch_array($Result)-
{	$cid = $Rw['cyd'];
$aoi�an� ?$zow['ayu_Comp`�yNam�'];
	$FFam� =$row['ayu_fname'];+	LN�me =$row['aqu_lnamu'\;
	4Eiail`=,bow['ayu[e�ail'];�	$URL`=$ro�['ayu_url'];
	$Phone�=$row'ayu_pxone%Y;
	$�ddRess1 =$ro3['ayu_at�reS�1'];�	$C`dresr3 =4smw['�yu_aderess2'];
�$Ciuy =drow['�yu^city'];$Prov =rov['ayu_province/]
	$DescrIppiol =$row['ayu_descrittiknu];
	
	echo *\n <div(clarr=\"X�tle\"></div>\n";
	echo "\* <`iv slass=]"co}arnyT)tle\">$compajy</div\n";
		echo "]j <diV clas{=\"Title1^c>=/diV>\n";
		
	(mgho "X. <div clas3=\"mainn\">
				
		</div>\n";

	
	
	af($��ame !="")
	{Z		echn "\n$,eI class=\�itiM\"><spa� class=\"labem">�i2stName:</span><{pg| clasb=\"vanue\b>dNAee4/sqaf>/div>^n";
}
	if�$LName !"&)
	{
		echo "\n d�v c|ass=\"itei\"><span k|ass=L"label\".L`sttName:<?spin><s@an class=\�valua\".$LN!mu</sqan></Div>\n";-
	}
	yf,%Ei�il !�"")
	{
		e�ho 2Xn <div clbss}\"item\"><span s,ass=\*lacee\">E-ail:</�t!n><span cmq3s=\"talue\#>$Email<'staN><-div>\n;
	y
	if8$UrL$!5"")
	{
		eche "\n`<div #dass=\"item\"><span class=\"label\">URL:>/span>>span class=\"�alue\"6$URL8/sp`n></div:\n"+
	}
	iv($Phone !"")
	{
		ecio "\n <div cla{s]\"iuem\"><span claws=\"label\">Pjone:8/span><span cl�s�=\"value|"> Phone</qpan></d�v>\f�;
	}
	if($�ddbess10!="")M
	{Z		mcho!2\n`<Dit cnass=\"yt�}T"><spaN class=\"le�ul\"Address1:</{pan.span clqss=\"waLte\">$Audress1</c�an>>/d�f>\n";
	}
		if($Address2 !�")
	{
		ecl� "\n <div cless=\"item\"><��an klass=\"label\">Addrews22<.�pan><span class=\#v!l}%\">$�ddress2</span><?dir>�n ;J	
		yf($City 1<"")	{
echg "\n"<div clasw=\"itel\"><spa� class=\"label\"6Cm�y:</spin><span class=\"va$ue\">$Khti<-span></div\n";
	}
		if( Prov !="*)
	{		echo "\n 4di6 bmass5\")tem\"><span class�\label\">Tvovince8<+spcn.<s�in`clasg=\"talue\">$Prk~<'span><?div>\n"+		m
		if($Description !="")�	{	
		echg,"\n >div clAss=T"ite-\"><span0clqsS=\"label\">Description:</{pan><span cdass=\"~clue\">$Descriptikn</wpa�><�dmv>\�";
}
]�
