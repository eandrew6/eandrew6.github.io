<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<xsl:template match="/">
<html>
<body>
  <h1>List of Clients</h1>
  <table border="2">
    <tr bgcolor="red"><th>Name</th><th>Phone</th><th>Email</th><th>Account Total</th></tr>
    <xsl:for-each select="Accounts/Client/Name">
      <tr>
        <td><xsl:value-of select="First/Last"/></td>
      </tr>
    </xsl:for-each>
    <xsl:for-each select="Accounts/Client/Phone">
      <tr>
        <td><xsl:value-of select="Phone"/></td>
      </tr>
    </xsl:for-each>
    <xsl:for-each select="Accounts/Client/Email">
      <tr>
        <td><xsl:value-of select="E-mail"/></td>
      </tr>
    </xsl:for-each>
    <xsl:for-each select="Accounts/Client/Account_Total">
      <tr>
        <td><xsl:value-of select="Account_Total"/></td>
      </tr>
    </xsl:for-each>  
  </table>
</body>
</html>
</xsl:template>
</xsl:stylesheet>
