<html>
    <head>
        <title>javascript form</title>
    
    </head> 

    <body>
        <h1> student record </h1>
        <table id ="student_table" border=1> 
        </table>

        <script>
            const studentTable = document
                .getElementById("student_table") ;

            console.log(studentTable);


            const row1 = studentTable.insertRow();

            const row1col1 = row1.insertCell();
            const row1col2 = row1.insertCell();

            row1col1.innerHTML = "LAST NAME";
            row1col2.innerHTML = "FIRST NAME";

            const row2 = studentTable.insertRow();
            const row2col1 = row2.insertCell();
            const row2col2 = row2.insertCell();

            const inputLastName = document.createElement("input");
            inputLastName.type="text";
            inputLastName.placeholder="insert Last Name";

            row2col1.append(inputLastName);

            const inputFirstName = document.createElement("input");
            inputFirstName.type="text";
            inputFirstName.placeholder="insert First Name";

            row2col2.append(inputFirstName);

            const row3 = studentTable.insertRow();
            const row3col1 = row3.insertCell();
            row3col1.colSpan="2";
            row3col1.innerHTML = "TEST";
        </script>
    </body>

</html>