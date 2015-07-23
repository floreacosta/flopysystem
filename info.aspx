<SCRIPT LANGUAGE="vb" runat="server">
Public Sub AllServerVariables()
		Dim intCtr as integer
		Dim coll As System.Collections.Specialized.NameValueCollection
		coll = System.Web.HttpContext.Current.Request.ServerVariables
		For intCtr = 0 To coll.keys.count - 1
			Response.Write(coll.keys(intCtr)  & ": ")
			Response.Write(coll.item(intCtr))
			response.write("<BR>")
		Next 
End Sub

'Request one by name
Public Function GetServerVariable(VariableName as string) as string
	return Request.ServerVariables(VariableName)
End Function
'You may prefer to just focus on a few of interest
'by hard coding their names in a function such as below
Public Function ApplicationPath as string
	return Request.ServerVariables("APPL_PHYSICAL_PATH")
End Function
Public Function LoggedOnUser as string
	return Request.ServerVariables("LOGON_USER")
End Function
Public Function CurrentPage() as string
	return Request.ServerVariables("SCRIPT_NAME")
End Function
</SCRIPT>
<%
'demo
response.write("<B>All Variables:</B><BR>")
AllServerVariables()
response.write("<P>")
response.write("<b>requesting full path to page by name of variable</b><BR>")
response.write(GetServerVariable("PATH_TRANSLATED"))
response.write("<P>")
response.write("<B>Requesting Current Page via user-defined function:</B><BR>")
response.write(CurrentPage) 
%>
