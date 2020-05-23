var validusername=0;
function validateForm()
{
flag=true;
if(register.birthday.value==""){
alert("Please Enter Date Of Birth")
flag=false;
register.birthday.focus()
}
else if((register.gender[0].checked==0)&&(register.gender[1].checked==0))
{
alert("Please select your gender");
flag=false;
} 
else if(register.dept.value=="")
{
alert("Please Choose your department")
flag=false;
}
else if(register.roll_no.value=="")
{
alert("Please Enter Your Roll No")
flag=false;
register.roll_no.focus()
}
else if(validateEmail())
{
alert("Please Enter a valid Email");
flag=false;
register.email.focus()
}
else if(register.username.value=="")
{
alert("Please Enter your username");
flag=false;
register.email.focus()
}
if(validusername==0){
register.username.focus();
}
return flag;
}

function checkUser(str){
  var xmlhttp = new XMLHttpRequest();
 if(str==""){
 document.getElementById("info").innerHTML = "Please enter a user name";
 register.username.focus();
}
else{
document.getElementById("info").innerHTML=str;
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("info").innerHTML = xmlhttp.responseText;
		if( xmlhttp.responseText == "Please try a different one")
		  validusername=0;
		else
		  validusername=1;
            }
        };
        xmlhttp.open("GET", "checkuser.php?q=" + str, true);
        xmlhttp.send();
}
//alert(document.getElementById("info").innerHTML);

}

function checkFname(){
if(register.fname.value=="")
{
alert("Please Enter Your First Name")
register.fname.focus()
return false;
}
else if (hasNumbers(register.fname.value)==true)
{
	alert("No numbers allowed");
	register.fname.focus()
	return false;
}
return true;
}

function checkLname(){
	if(register.lname.value=="")
{
alert("Please Enter Your Last Name")
flag=false;
register.lname.focus()
}
else if (hasNumbers(register.lname.value)==true)
{
	alert("No numbers allowed");
	flag=false;
	register.lname.focus()
}

}
function checkRoll()
{
    var regexp=/^[1-9]{2}\/[A-Z]{2,3}\/[0-9]{1,3}$/
    if(!regexp.test(document.forms["register"]["roll_no"].value))
    {
        alert("Roll Number should be 3 Digits Max")
        register.roll_no.focus()
    }
}
function checkRegNo(){
var regexp=/^20[0-5][0-9][0-3][0-9][0-9][0-9]$/
if(!regexp.test(register.reg_no.value)){
alert("Please Enter a Valid Registration Number")
register.reg_no.focus()
}
}
function checkContact()
{
    var regexp=/^[7-9][0-9]{9}$/
    if(!regexp.test(document.forms["register"]["contact"].value)){
        alert("Enter valid mobile number")
        register.contact.focus()
    }
}
function checkPassword(){
if(register.pass.value==""){
alert("Enter Your Password")
register.pass.focus()
}
else if(register.cpass.value==""){
alert("Confrim Your Password")
register.cpass.focus()
}else if(register.pass.value!=register.cpass.value){
alert("Password Dosn't Match")
register.cpass.focus()
}

}
function validateEmail() 
{
    var x = document.forms["register"]["email"].value;
    var atpos = x.indexOf("@");
    var dotpos = x.lastIndexOf(".");
    if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {
        alert("Not a valid e-mail address");
        register.email.focus();
        return false;
    }
}

function generateRoll(){
	var no=document.forms["register"]["reg_no"].value;
	if(no == "")
	{
		alert("please fill Registration no first");
		document.forms["register"]["reg_no"].focus();
		return;
	}
	var dept;
	switch(document.forms["register"]["dept"].value)
	{
		case "Biotechnology":
			dept="BT";
			break;
		case "Civil Engineering":
			dept="CE";
			break;
		case "Chemical Engineering":
			dept="CHE";
			break;
		case "Computer Science Engineering":
			dept="CSE";
			break;
		case "Electronics And Communication Engineering":
			dept="ECE";
			break;
		case "Electrical Engineering":
			dept="EE";
			break;
		case "Information Technology":
			dept="IT";
			break;
		case "Mechanical Engineering":
			dept="ME";
			break;
		case "Metallurgical And Materials Engineering":
			dept="MME";
			break;
	}
	document.forms["register"]["roll_no"].value=no.substring(2,4).concat("/").concat(dept).concat("/");
}

function generateAge(){
	var x=document.forms["register"]["birthday"].value;
	var date1=new Date(x);
	var date=new Date();
	var y=date.getFullYear()-date1.getFullYear();
	var m=date.getMonth()-date1.getMonth();
	var d=date.getDay()-date1.getDay();
	var ret = dateDiff(date,date1);
	y=ret['years'].toString();
	m=ret['months'].toString();
	d=ret['days'].toString();
	document.forms["register"]["age"].value=y.concat(" Years, ").concat(m).concat(" Months and ").concat(d).concat(" Days ");
}
function hasNumbers(t)
{
return /\d/.test(t);
}
function dateDiff(dt1, dt2)
{
    /*
     * setup 'empty' return object
     */
    var ret = {days:0, months:0, years:0};

    /*
     * If the dates are equal, return the 'empty' object
     */
    if (dt1 == dt2) return ret;

    /*
     * ensure dt2 > dt1
     */
    if (dt1 > dt2)
    {
        var dtmp = dt2;
        dt2 = dt1;
        dt1 = dtmp;
    }

    /*
     * First get the number of full years
     */

    var year1 = dt1.getFullYear();
    var year2 = dt2.getFullYear();

    var month1 = dt1.getMonth();
    var month2 = dt2.getMonth();

    var day1 = dt1.getDate();
    var day2 = dt2.getDate();

    /*
     * Set initial values bearing in mind the months or days may be negative
     */

    ret['years'] = year2 - year1;
    ret['months'] = month2 - month1;
    ret['days'] = day2 - day1;

    /*
     * Now we deal with the negatives
     */

    /*
     * First if the day difference is negative
     * eg dt2 = 13 oct, dt1 = 25 sept
     */
    if (ret['days'] < 0)
    {
        /*
         * Use temporary dates to get the number of days remaining in the month
         */
        var dtmp1 = new Date(dt1.getFullYear(), dt1.getMonth() + 1, 1, 0, 0, -1);

        var numDays = dtmp1.getDate();

        ret['months'] -= 1;
        ret['days'] += numDays;

    }

    /*
     * Now if the month difference is negative
     */
    if (ret['months'] < 0)
    {
        ret['months'] += 12;
        ret['years'] -= 1;
    }

    return ret;
}

function validateGPA(){
        var regexp = /^([1][0][.][0][0]|[0][5-9][.][0-9][0-9]|[5-9][.][0-9][0-9]|[1][0]|[1][0][.][0]|[0][5-9]|[0][5-9][.][0-9]|[5-9][.][0-9])$/
        if(register.cgpa.value==""){
            alert("Enter Your CGPA")
            register.cgpa.focus()
        }
        else if(!regexp.test(document.forms["register"]["cgpa"].value)){
        alert("Enter valid CGPA after [.] maximum 2 digit ")
        register.cgpa.focus()
    }
}

function validate10percentile(){
        var regexp = /^([1][0][0][.][0][0]|[3-9][0-9][.][0-9][0-9]|[1][0][0]|[1][0][0][.][0]|[3-9][0-9]|[3-9][0-9][.][0-9])$/
        if(register.percent1.value==""){
            alert("Enter Your percentage")
            register.percent1.focus()
        }
        else if(!regexp.test(document.forms["register"]["percent1"].value)){
        alert("oops! Enter valid percentage,after [.] maximum 2 digit ,see the typing  box ")
        register.percent1.focus()
    }
}
function validate12percentile(){
        var regexp = /^([1][0][0][.][0][0]|[3-9][0-9][.][0-9][0-9]|[1][0][0]|[1][0][0][.][0]|[3-9][0-9]|[3-9][0-9][.][0-9])$/
        if(register.percent2.value==""){
            alert("Enter Your percentage")
            register.percent2.focus()
        }
        else if(!regexp.test(document.forms["register"]["percent2"].value)){
        alert("oops! Enter valid percentage,after [.] maximum 2 digit,see the typing box  ")
        register.percent2.focus()
    }
}



