<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width,initial-scale=1" />
        <title>Survey: Student Survey</title>
    </head>
    <body>
<h1>Student life Survey</h1>

<main>
<form action="index.php" method="get" class="survey">
   
    <div>
        <label for="email">Enter your email: </label>
        <input type="email" name="email" id="email" required/>
    </div>

    <div>
        <label for="pw">Enter your password: </label>
        <input type="password" name="pw" id="pw" required/>
</div>

        <fieldset>
            <legend>What age are you? </legend>

<div>
    <input type="radio" name="age" id="0-12" value="0-12" required/>
    <label for="0-12">0-12 </label>
</div>

<div>
    <input type="radio" name="age" id="13-17" value="13-17" required/>
    <label for="13-17">13-17 </label>
</div>

<div>
    <input type="radio" name="age" id="13-17" value="13-17" required/>
    <label for="13-17">13-17 </label>
</div>
<div>
    <input type="radio" name="age" id="18-22" value="18-22" required/>
    <label for="18-22">18-22 </label>
</div>
<div>
    <input type="radio" name="age" id="23-27" value="23-27" required/>
    <label for="23-27">23-27 </label> 
</div>
<div>
    <input type="radio" name="age" id="28-32" value="28-32" required/>
    <label for="28-32">28-32 </label>
</div>
<div>
    <input type="radio" name="age" id="33-37" value="33-37" required/>
    <label for="33-37">33-37 </label>
</div>
<div>
    <input type="radio" name="age" id="38-42" value="38-42" required/>
    <label for="38-42">38-42 </label>
</div>
<div>
    <input type="radio" name="age" id="43-47" value="43-47" required/>
    <label for="43-47">43-47 </label> 
</div>
<div>
    <input type="radio" name="age" id="48-52" value="48-52" required/>
    <label for="48-52">48-52 </label>
</div>
<div>
    <input type="radio" name="age" id="53-57" value="53-57" required/>
    <label for="53-57">53-57 </label> 
</div>
<div>
    <input type="radio" name="age" id="58-62" value="58-62" required/>
    <label for="58-62">58-62 </label>
</div>
<div>
    <input type="radio" name="age" id="63-67" value="63-67" required/>
    <label for="63-67">63-67 </label>
</div>
<div>
    <input type="radio" name="age" id="68+" value="68+" required/>
    <label for="68+">68+ </label>
</div>
</fieldset>


<div>
<label for="gender">What is your gender?</label>
<select name="gender" id="gender" required>
<option value="m">Male</option>
<option value="f">Female</option>
<option value="nb">Nonbinary</option>
<option value="gf">Genderfluid</option>
<option value="a">Agender</option>
<option value="o">Choose not to say/Other</option>
</select>
</div>

<div> <!-- added my own question -->
    <label for="major">What is your major</label>

    <input type="text" name="major" id="major" required>
</div>
<div>
    <label for ="hours"> How many credits are you taking this semester?</label>
    <input type="number" name="credit_hours" id="hours" min="0" max="30" required>
</div>
 
<!-- Submiit-->

<div> 
 <button type="submit" name="survey-submit" id="survey-submit">Submit</button>
</div>
            </form>
        </main>

    </body>
</html>
            

