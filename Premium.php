<html>
<head>
<title>PaymentForm</title>
</head>
<body>
<linkhref="registration.css"type="text/css"rel="stylesheet"/>
<linkhref="../style.css"type="text/css"rel="stylesheet"/>
<ul>
<listyle="float:right;"><ahref="../index.php">Backto
homepage</a></li>
</ul>
<h2>Premium</h2>
<formname="form1"action='view.php'method='POST'enctype=
"multipart/form-data">
<divclass="container">
<divclass="form_group">
<label>PolicyNumber:</label>
<inputtype="text"name="pol"value=""required
pattern="[0-9]{9}"/>
<h6><label>Enter9digit
number</label></h6>
</div>
</div>
<divclass="form_group">
<inputtype="submit"value="submit"/>
</div>
<divclass="form_group">
<inputtype="reset"value="reset"/>
</div>
</div>
</form>
</body>
</html>
