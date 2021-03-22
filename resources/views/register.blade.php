<!DOCTYPE html>
<html>
    <head>
        <title>FORM DAFTAR</title>
        <meta charset="UTF-8">
    </head>
    <body>
        <h1>Buat Account Baru!</h1>
        <h3>Sign Up Form</h3>

        <form method="POST" action="/welcome" >
        @csrf
        <div>
            <label>First name: </label> <br><br>
            <input type="text" name ="fname"> <br><br>
            <label>Last name: </label> <br><br>
            <input type="text" name ="lname"><br><br>
        </div>
        <div>
            <label>Gender: </label><br><br>
            <!--Value Tidak Berdampak, Sekalian Belajar saja-->
            <input type="radio" name="gender" value="0"> Male <br>
            <input type="radio" name="gender" value="1"> Female <br>
            <input type="radio" name="gender" value="2"> Other <br>
        </div>
        <br>
        <div>
            <label>Nationality:</label> <br> <br>
            <select>
            <optgroup label="Asia">
                <option >Indonesia</option>
                <option>Japan</option>
                <option>Korean</option>
            </optgroup>
            <optgroup label="Others">
                <option >America</option>
                <option>Zimbawbwe</option>
                <option>Arab</option>
            </optgroup>
            </select>
        </div>
        <br>
        <div>
            <label>Language Spoken: </label><br><br>
            <input type="checkbox" name="bahasa"> Bahasa Indonesia <br>
            <input type="checkbox" name="bahasa"> English <br>
            <input type="checkbox" name="bahasa"> Other <br>
        </div>
        <br>
        <div>
            <label>Bio: </label><br><br>
            <textarea cols="30" rows="10"></textarea>
        </div>  
        <input type="submit" value="Sign Up">
        </form>
        <br>
         <p>&copy; Fajar Muhammad Hamka</p>
    
    </body>
</html> 