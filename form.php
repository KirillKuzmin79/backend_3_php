<link rel='stylesheet' href='styles.css'>
<title>Form</title>


<body>
    <main>
   		<h3>Form</h3><br>
        <form action="" method="POST">
            <p>Input your full name</p>
            <label><input name="fio" type="text" placeholder="FIO"/></label><br>
            <p>Input your e-mail</p>
            <label><input name="mail" type="email" placeholder="example@ex.com"/></label><br>
            <p>Input your birth date</p> 
            <label> <input type="date" name="date"/></label>
            <br>
            <p>Sex</p> 
            <label><input type="radio" value="m" name="sex" /> Male</label>
            <label><input type="radio" value="f" name="sex" /> Female</label><br>    
            <p>Amount of konechnostei</p>
            <label><input type="radio" value="1" name="Konechnosti" />1</label>
            <label><input type="radio" value="2" name="Konechnosti" />2</label>
            <label><input type="radio" value="3" name="Konechnosti" />3</label>
            <label><input type="radio" value="4" name="Konechnosti" />4</label>
            <br>
            <p>Superpowers</p>
            <label>
                <select name="Superpowers[]" multiple size="3">
                    <option value="bessm">Bessmertie</option>
                	<option value="prohojd">Prohojdenie cherez steny</option>
            	   	<option value="fly">Letanie</option>
            	</select>
            </label>
            <br>
            <p>Biography</p><textarea  id="bio" name="bio" ></textarea><br>
            <input type="checkbox" name="agree" />
                        I authorize the processing of my personal data
            <br>
			<input type="submit" value="Submit"/>
        </form>
	</main>
</body>
