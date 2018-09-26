<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">    
<xsl:template match="/">    
<html>
<body>
    <h1>ABC Financial Startup</h1>
    <span style="margin:50%;"><img src="https://ericaandrews.github.io/financialstartup.jpg" width="230px" height="140px"/></span>
    <p>We are a very young financial manager company and we are proud of our clients</p> 
    <p>We have started with 1 client a little bit more than 10 years ago and now we have <xsl:value-of select="count(Accounts/*)"/>  clients!</p>
    <p>These are our clients: 
        <xsl:value-of select="Accounts/Client[@ID='CS5355']/Name/First"/><span>&#160;</span><xsl:value-of select="Accounts/Client[@ID='CS5355']/Name/Last"/>, <xsl:value-of select="Accounts/Client[@ID='CS5108']/Name/First"/><span>&#160;</span><xsl:value-of select="Accounts/Client[@ID='CS5108']/Name/Last"/>, <xsl:value-of select="Accounts/Client[@ID='CS5331']/Name/First"/><span>&#160;</span><xsl:value-of select="Accounts/Client[@ID='CS5331']/Name/Last"/>, <xsl:value-of select="Accounts/Client[@ID='CS5771']/Name/First"/><span>&#160;</span><xsl:value-of select="Accounts/Client[@ID='CS5771']/Name/Last"/>, <xsl:value-of select="Accounts/Client[@ID='CS5981']/Name/First"/><span>&#160;</span><xsl:value-of select="Accounts/Client[@ID='CS5981']/Name/Last"/>, <xsl:value-of select="Accounts/Client[@ID='CS5308']/Name/First"/><span>&#160;</span><xsl:value-of select="Accounts/Client[@ID='CS5308']/Name/Last"/>, <xsl:value-of select="Accounts/Client[@ID='CS5250']/Name/First"/><span>&#160;</span><xsl:value-of select="Accounts/Client[@ID='CS5250']/Name/Last"/>, and <xsl:value-of select="Accounts/Client[@ID='CS5982']/Name/First"/><span>&#160;</span><xsl:value-of select="Accounts/Client[@ID='CS5982']/Name/Last"/>.</p> <p><span><xsl:value-of select="count(//Years[. &gt;= '7'])"/></span> of our clients are with us for more than 7 years!</p>
</body>
</html>
</xsl:template>
</xsl:stylesheet>
