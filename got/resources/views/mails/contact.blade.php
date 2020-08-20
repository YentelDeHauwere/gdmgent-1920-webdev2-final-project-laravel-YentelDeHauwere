
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
>

<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel="icon" href="../../assets/img/icons/foundation-favicon.ico" type="image/x-icon">
    <meta name="viewport" content="width=device-width">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/foundation-emails/2.2.1/foundation-emails.min.css" rel="stylesheet">
    <title>Contact Chateau - {{ $subject }}</title>
	<link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
  </head>
    <body>
      <span class="preheader"></span>

<style type="text/css">
.header {
  background: #000000FF;
}
.header .columns {
  padding-bottom: 0;
}
.header p {
  color: #ffffff;
  margin-bottom: 0;
}
.header .wrapper-inner {
  padding: 20px; /*controls the height of the header*/
}
.header .container {
  background: #000000FF
}
.wrapper.secondary {
  background: #ffffff;
}

body {
	background-color: white;
}

.content-title {
	font-weight:700;
	font-family: 'Lato', sans-serif;
	margin-top: 40px;
	margin-bottom: 20px;
}

.content-text {
	font-weight:200;
	font-family: 'Lato', sans-serif;
	color: white;
	margin-bottom: 40px;
}

</style>

<table align="center" bgcolor="#8A8A8A" class="wrapper header float-center">
  <tr>
    <td class="wrapper-inner">
      <table align="center" class="container">
        <tbody>
          <tr>
            <td>
              <table class="row collapse">
                <tbody>
                  <tr>
                    <th class="small-6 large-6 columns first" valign="middle">
                      <table>
                        <tr>
                          <th><img src="https://i.ytimg.com/vi/gY5TQMSWT5s/maxresdefault.jpg"></th>
                        </tr>
                      </table>
                    </th>
                    
                  </tr>
                </tbody>
              </table>
            </td>
          </tr>
        </tbody>
      </table>
    </td>
  </tr>
</table>
<table align="center" class="container float-center">
  <tbody>
    <tr>
      <td>
        <table class="spacer">
          <tbody>
            <tr>
              <td height="16px" style="font-size:16px;line-height:16px;">&#xA0;</td>
            </tr>
          </tbody>
        </table>
        <table class="row">
          <tbody>
            <tr>
              <th class="small-12 large-12 columns first last">
                <table>
                  <tr>
                    <th>
                      <h2 class="content-title" style="text-align:center" >{{ $name }}, je email is succesvol verzonden.</h2>
					  <p class="content-text" style="text-align:center">{{ $content }}</p>  
					  <small>Nog vragen? <a style ="color:black" href="https://www.google.be/">Klik deze link</a> </small>             
					</th>
                    <th class="expander"></th>
                  </tr>
                </table>
              </th>
            </tr>
          </tbody>
        </table>
      </td>
    </tr>
  </tbody>
</table>

    <!-- prevent Gmail on iOS font size manipulation -->
    <div style="display:none; white-space:nowrap; font:15px courier; line-height:0;"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </div>
  </body>
</html>