$("#getCreateStudentName").on("input", function(){
    $("#name_error_msg").css("display", "none");
});

$("#getCreateStudentAge").on("input", function(){
    $("#name_error_msg1").css("display", "none");
});


$("#getCreateEmailAddress").on("input", function(){
    $("#name_error_msg2").css("display", "none");
});


$("#getCreateGPA").on("input", function(){

    $("#name_error_msg3").css("display", "none");

});




// FORM
$("#create_student_record_form").submit(function(e){





    // prevents form in submitting data values in the php file/database
    e.preventDefault();


    $("#success-msg-rec-created").css("display", "none");


    let flag = 0;

    let stud_name = $("#getCreateStudentName").val();
    let stud_age = $("#getCreateStudentAge").val();
    let stud_email = $("#getCreateEmailAddress").val();
    let stud_gpa = $("#getCreateGPA").val();
    let stud_button_submit = $("#submit-data").val();



    // STUDENT NAME FIELD

    // checks if the field stud_name is not empty
    if (stud_name == "") {
    
        $("#error_msg").css("display", "block");
        $("#name_error_msg").css("display", "block");
        $("#name_error_msg").text("Field cannot be empty!");
        $("#getCreateStudentName").addClass("is-invalid");
   
    } 
    else {

        
        $("#error_msg").css("display", "none");
        $("#name_error_msg").css("display", "none");
        $("#name_error_msg").text("");
        $("#getCreateStudentName").removeClass("is-invalid");


        // checks if field_stud_name only contains characters
        if (stud_name.match(/[^a-zA-Z ]/g)) {


            $("#error_msg").css("display", "block");
            $("#name_error_msg").css("display", "block");
            $("#name_error_msg").text("Letter only from 'a-z' and 'A-Z'");
            $("#getCreateStudentName").addClass("is-invalid");


            console.log("Student name: '"+ stud_name +"' not a character");
            
        } else {

            $("#error_msg").css("display", "none");
            $("#name_error_msg").text("");
            $("#getCreateStudentName").removeClass("is-invalid");
    
            flag++;
        }
    
    }







    // STUDENT AGE FIELD

    if (stud_age == "") {
    
        $("#error_msg1").css("display", "block");
        $("#name_error_msg1").css("display", "block");
        $("#name_error_msg1").text("Field cannot be empty!");
        $("#getCreateStudentAge").addClass("is-invalid");
   
    } 
    else {

        
        $("#error_msg1").css("display", "none");
        $("#name_error_msg1").css("display", "none");
        $("#name_error_msg1").text("");
        $("#getCreateStudentAge").removeClass("is-invalid");


        if (stud_age.match(/[^0-9 ]/g)) {

            $("#error_msg1").css("display", "block");
            $("#name_error_msg1").css("display", "block");
            $("#name_error_msg1").text("Numbers only! Ages from 6-80 are acceptable");
            $("#getCreateStudentAge").addClass("is-invalid");


            console.log("Student age: '"+ stud_age +"' not a digit");

        }
        else {

            $("#error_msg1").css("display", "none");
            $("#name_error_msg1").css("display", "none");
            $("#name_error_msg1").text("");
            $("#getCreateStudentAge").removeClass("is-invalid");

            if(stud_age < 6 || stud_age > 80) {

                $("#error_msg1").css("display", "block");
                $("#name_error_msg1").css("display", "block");
                $("#name_error_msg1").text("Ages from 6-80 are acceptable.");
                $("#getCreateStudentAge").addClass("is-invalid");

            }
            else {

                $("#error_msg1").css("display", "none");
                $("#name_error_msg1").css("display", "none");
                $("#name_error_msg1").text("");
                $("#getCreateStudentAge").removeClass("is-invalid");

                flag++;
            }

        }

    }





    // STUDENT EMAIL FIELD
    function validateEmail($email) {
        var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
        return emailReg.test($email);
    }

    if (stud_email == "") {

       
        $("#error_msg2").css("display", "block");
        $("#name_error_msg2").css("display", "block");
        $("#name_error_msg2").text("Field cannot be empty!");
        $("#getCreateEmailAddress").addClass("is-invalid");

    }
    else {



        $("#error_msg2").css("display", "none");
        $("#name_error_msg2").css("display", "none");
        $("#name_error_msg2").text("");
        $("#getCreateEmailAddress").removeClass("is-invalid");





        if (!validateEmail(stud_email)) {

            $("#error_msg2").css("display", "block");
            $("#name_error_msg2").css("display", "block");
            $("#name_error_msg2").text("Invalid email format!");
            $("#getCreateEmailAddress").addClass("is-invalid");

        }
        else {

            $("#error_msg2").css("display", "none");
            $("#name_error_msg2").css("display", "none");
            $("#name_error_msg2").text("");
            $("#getCreateEmailAddress").removeClass("is-invalid");

            flag++;
        }


    }








    // STUDENT GPA FIELD
    if (stud_gpa == "") {
    
        $("#error_msg3").css("display", "block");
        $("#name_error_msg3").css("display", "block");
        $("#name_error_msg3").text("Field cannot be empty!");
        $("#getCreateGPA").addClass("is-invalid");
   
    } 
    else {

        
        $("#error_msg3").css("display", "none");
        $("#name_error_msg3").css("display", "none");
        $("#name_error_msg3").text("");
        $("#getCreateGPA").removeClass("is-invalid");




        if (stud_gpa.match(/[^0-9]/g)) {

            $("#error_msg3").css("display", "block");
            $("#name_error_msg3").css("display", "block");
            $("#name_error_msg3").text("GPA only 1-5 is acceptable. 0 score is considered as no grade.");
            $("#getCreateGPA").addClass("is-invalid");


        }

        else {


            $("#error_msg3").css("display", "none");
            $("#name_error_msg3").css("display", "none");
            $("#name_error_msg3").text("");
            $("#getCreateGPA").removeClass("is-invalid");

            let tempGPA =  parseFloat($("#getCreateGPA").val());


            if (tempGPA == 0) {

                stud_gpa = 0;

            }
            else if(tempGPA < parseFloat(1.00) || tempGPA > parseFloat(5.00)) {

                $("#error_msg3").css("display", "block");
                $("#name_error_msg3").css("display", "block");
                $("#name_error_msg3").text("GPA only 1-5 is acceptable. 0 score is considered as no grade");
                $("#getCreateGPA").addClass("is-invalid");

            }

            else {

                $("#error_msg3").css("display", "none");
                $("#name_error_msg3").css("display", "none");
                $("#name_error_msg3").text("");
                $("#getCreateGPA").removeClass("is-invalid");


                flag++;
            }

        }

    }



    if (flag == 4) {
        console.log("AFTER NETOO TUTULOOOOG NA AKOOOOOOOOOOOOOO TTT^TTT");

        $("#msg-success-overlay").load("../db/create_stud_rec.php", {

            getCreateStudentName: stud_name,
            getCreateStudentAge: stud_age,
            getCreateEmailAddress: stud_email,
            getCreateGPA: stud_gpa,
            btnSubmitCreateStudentRecord: stud_button_submit


        });
        
    }
    

});


function printData(){
    console.log(stud_name);
    console.log(stud_age);
    console.log(stud_email);
    console.log(stud_gpa);
}

