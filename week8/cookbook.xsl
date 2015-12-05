<?xml version="1.0" encoding="ISO-8859-1"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

<xsl:template match="/">
  <html>
  <head>
    <title>My Cookbook</title>
    <link rel="stylesheet" type="text/css" href="../css/mycss.css" />
    <link type="image/x-icon" href="../img/batman_24px_1190165_easyicon.net.ico" rel="icon"></link>
  </head>
  <body>
    <ul class = "nav_ui">
        <li class = "nav_li">
          <a href="../index.html">Homepage</a></li>
        <li class = "nav_li"><a href="../week1/hw1.html">Hw1</a></li>
        <li class = "nav_li"><a href="../week2/hw2.html">Hw2</a></li>
        <li class = "nav_li"><a href="../week3/hw3.html">Hw3</a></li>
        <li class = "nav_li"><a href="../week4/hw4.html">Hw4</a></li>
        <li class = "nav_li"><a href="../week5/hw5.html">Hw5</a></li>
        <li class = "nav_li"><a href="../week6/hw6.html">Hw6</a></li>
        <li class = "nav_li"><a href="../week7/hw7.html">Hw7</a></li>
        <li class = "nav_li"><a href="hw8.html">Hw8</a></li>
        <li class = "nav_li"><a href="../week9-10/hw9-10.html">Hw9&amp;10</a></li>
    </ul>
    <h1>My Recipe Collection</h1>
    <table border="1">

    <xsl:for-each select="cookbook/recipe">
      <tr bgcolor="#9acd32">
        <th bgcolor="blue" colspan="3"><xsl:value-of select="name"/></th>
      </tr>
      <xsl:for-each select="ingredient">
      <tr>
        <td bgcolor="red" colspan="1">ingredient</td>
        <td><xsl:value-of select="name"/></td>
        <td><xsl:value-of select="amount"/><xsl:value-of select="unit"/></td>
      </tr>
      </xsl:for-each>

      <xsl:for-each select="condiment">
      <tr>
        <td bgcolor="red" colspan="1">condiment</td>
        <td><xsl:value-of select="name"/></td>
        <td><xsl:value-of select="amount"/><xsl:value-of select="unit"/></td>
      </tr>
      </xsl:for-each>

      <tr><td></td><td colspan="2" bgcolor="green"><b>Processes</b></td></tr>

      <xsl:for-each select="cooking">
      <tr>
        <td bgcolor="red">step <xsl:value-of select="step"/></td>
        <td colspan="2"><xsl:value-of select="description"/></td>
      </tr>
      </xsl:for-each>
      <tr><td><hr/></td><td colspan="2"><hr/></td></tr>
    </xsl:for-each>
    </table>
     <div><a href="../index.html" id = "return"><img src="../img/logo0.png" /></a></div>
  </body>
  </html>
</xsl:template>

</xsl:stylesheet>