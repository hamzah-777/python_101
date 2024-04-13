
<a href="./"><h2>GO back to LPU FOLDER</h1></a>
<form >
     <br>First nameee: <input type = "text" name = "first_name" />
     <br>Last name: <input type = "text" name = "last_name" placeholder="Last name here" />
</form>

<form >
     <br>User ID : <input type = "text" name = "user_id" />
     <br>Password: <input type = "password" name = "password" />
</form>

<form>
 Description : <br />
 <textarea rows = "5" cols = "50" name = "description">
 Enter description here...
 </textarea>
</form>

<form>
 <input type = "checkbox" name = "maths" value = "on" checked> Maths
 <input type = "checkbox" name = "physics" value = "on"> Physics
</form>

<form>
 <input type = "radio" name = "subject" value = "maths"> Maths
 <input type = "radio" name = "subject" value = "physics"> Physics
</form>

<form>
 <select name = "dropdown">
    <option value = "Maths" selected>Maths</option>
    <option value = "Physics">Physics</option>
 </select>
</form>

<form>
 <input type = "file" name = "fileupload" accept = "image/*" />
</form>

<form>
 <input type = "submit" name = "submit" value = "Submit" />
 <input type = "reset" name = "reset"  value = "Reset" />
 <input type = "button" name = "ok" value = "OK" />
 <input type = "image" name = "imagebutton" src = "lpu2.jpg" />
</form>      


<h1>Form stuff</h1>

<xmp>
<form action = "Script URL" method = "GET|POST">
   form elements like input, textarea etc.
</form>

</xmp>

<h2>FORM Attribute & Description</h2>

<dl>	
<di>action</di>
<dd>Backend script ready to process your passed data.</dd>
</dl>	
<dl>	
<di>method</di>
<dd>
Method to be used to upload data. The most frequently used are GET and POST methods.</dd>
</dl>	
	
<dl>	
<di>target</di>
<dd>
Specify the target window or frame where the result of the script will be displayed. It takes values like _blank, _self, _parent etc.</dd>
</dl>	

<dl>	
<di>enctype</di>
<dd>
You can use the enctype attribute to specify how the browser encodes the data before it sends it to the server. Possible values are −
application/x-www-form-urlencoded − This is the standard method most forms use in simple scenarios.
mutlipart/form-data − This is used when you want to upload binary data in the form of files like image, word file etc.</dd>
</dl>	

<xmp>
HTML Form Controls---------
Text Input Controls
Checkboxes Controls
Radio Box Controls
Select Box Controls
File Select boxes
Hidden Controls
Clickable Buttons
Submit and Reset Button

There are three types of text input used on forms −--------
*Single-line text input controls − This control is used for items that require only one line of user input, such as search boxes or names. They are created using HTML <input> tag.
*Password input controls − This is also a single-line text input but it masks the character as soon as a user enters it. They are also created using HTMl <input> tag.
*Multi-line text input controls − This is used when the user is required to give details that may be longer than a single sentence. Multi-line input controls are created using HTML <textarea> tag.
</xmp>

<h2>Input Attributes & Description</h2>

<dl>
<di>type</di><dd>
Indicates the type of input control and for text input control it will be set to text.</dd>
<di>name</di><dd>
Used to give a name to the control which is sent to the server to be recognized and get the value.</dd>
<di>value</di><dd>
This can be used to provide an initial value inside the control.</dd>
<di>size</di><dd>
Allows to specify the width of the text-input control in terms of characters.</dd>
<di>maxlength</di><dd>
Allows to specify the maximum number of characters a user can enter into the text box.</dd>
</dl>

<h2>Button Controls</h2>
<dl>
<di>submit</di><dd>
This creates a button that automatically submits a form.
</dd>reset<di></di><dd>
This creates a button that automatically resets form controls to their initial values.
</dd>button<di></di><dd>
This creates a button that is used to trigger a client-side script when the user clicks that button.
</dd>image<di></di><dd>
This creates a clickable button but we can use an image as background of the button.</dd></dl>
<marquee><a href="https://github.com/banukaknight/banukaknight.github.io">https://github.com/banukaknight/banukaknight.github.io</a></marquee>